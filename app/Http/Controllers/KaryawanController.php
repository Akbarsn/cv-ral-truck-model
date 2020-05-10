<?php

namespace App\Http\Controllers;

use App\Konfirmasi_tkpba;
use App\Penerimaan;
use Illuminate\Http\Request;
use App\RekapitulasiPenilaian;
use App\SoalTKPBA;
use App\TesTkpba;

class KaryawanController extends Controller
{
    public function GetDashboard($id)
    {
        $rekap = RekapitulasiPenilaian::join('user_calon', 'rekapitulasi_penilaian.ID_calon', '=', 'user_calon.ID_calon')
            ->where('rekapitulasi_penilaian.ID_calon', $id)->first();
        $terima = Penerimaan::where('ID_calon', $id)->first();

        return view('pages.dashboard_karyawan')->with('rekap', $rekap)->with('terima', $terima);
    }

    public function AmbilTest($id)
    {
        $soal = TesTkpba::join('soal_tkpba', 'tes_tkpba.ID_soal', '=', 'soal_tkpba.ID_soal')
            ->where('ID_calon', $id)->first();

        return view('pages.tes')->with('soal', $soal);
    }

    public function SendJawaban(Request $request)
    {
        $file = $request->file('jawaban');
        $id_user = $request->input('ID_calon');
        $fileName = "Jawaban_" . $id_user . "." . $file->getClientOriginalExtension();
        $file->move('jawaban', $fileName);
        $jawaban =  new Konfirmasi_tkpba;
        $jawaban->ID_konfirmasi = $this->GetIDKonfirmasi();
        $jawaban->ID_user = "U003";
        $jawaban->ID_tes = $request->input('ID_tes');
        $jawaban->jawaban_soal = $fileName;
        $jawaban->save();

        $nilai = RekapitulasiPenilaian::where('ID_calon', $id_user)->first();
        $nilai->status_tkpba = "Selesai";
        $nilai->save();

        return redirect(url("/karyawan/$id_user/dashboard"))->with('success', "Jawaban berhasil dikumpulkan");
    }

    public function GetIDKonfirmasi()
    {
        $soal = Konfirmasi_tkpba::all();
        $id = count($soal) + 1;

        if (count($soal) >= 100) {
            return "K" . $id;
        } else if (count($soal) >= 10) {
            return "K0" . $id;
        } else {
            return "K00" . $id;
        }
    }
}
