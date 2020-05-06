<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RekapitulasiPenilaian;
use App\SoalTKPBA;
use App\TesTkpba;

class AdminController extends Controller
{
    public function GetDashboard(Request $request)
    {
        //Read
        $rekap = RekapitulasiPenilaian::join('user_calon', 'rekapitulasi_penilaian.ID_calon', '=', 'user_calon.ID_calon')
            ->select('rekapitulasi_penilaian.*', 'user_calon.nama')->whereNotIn('status_calon', ["Lulus", "Tidak"])->get();
        $soal = SoalTKPBA::all();

        return view('pages.dashboard_admin')->with('rekap', $rekap)->with('soal', $soal);
    }

    public function AddSoal(Request $request)
    {
        $request->validate([
            'soal' => 'required|mimes:docx,pdf|max:2048',
            'kunci' => 'required|mimes:docx,pdf|max:2048',
        ]);

        $soal = SoalTKPBA::all();
        $id = count($soal) + 1;

        $soal = $request->file('soal');
        $kunci = $request->file('kunci');
        $soalName = "Soal" . $id . "." . $soal->getClientOriginalExtension();
        $kunciName = "Kunci" . $id . "." . $soal->getClientOriginalExtension();

        $soal->move(public_path('soal'), $soalName);
        $kunci->move(public_path('soal'), $kunciName);

        $data = new SoalTKPBA;

        $data->ID_soal = $this->GetIDSoal();
        $data->data_soal = $soalName;
        $data->jawaban_soal = $kunciName;
        $data->save();
    }

    public function EditStatusCakar(Request $request)
    {
        $input = $request->all();

        extract($input);

        //Update
        $nilai = RekapitulasiPenilaian::where('ID_calon', $id)->first();
        $nilai->status_administrasi = $administrasi;
        $nilai->status_tkpba = $tkpba;
        $nilai->status_psikologi = $psikologi;
        $nilai->interview = $interview;
        $nilai->save();

        if ($tkpba == "Ambil" && $soal != null) {
            //Create
            $tes = new TesTkpba;
            $tes->ID_tes = $this->GetIDTest();
            $tes->ID_soal = $soal;
            $tes->ID_calon = $id;
            $tes->save();
        }

        return redirect(url('/admin/dashboard'))->with('success', "Berhasil Merubah Rekap Nilai");
    }

    public function GetIDSoal()
    {
        $soal = SoalTKPBA::all();
        $id = count($soal) + 1;

        if (count($soal) >= 100) {
            return "S" . $id;
        } else if (count($soal) >= 10) {
            return "S0" . $id;
        } else {
            return "S00" . $id;
        }
    }

    public function GetIDTest()
    {
        $soal = TesTkpba::all();
        $id = count($soal) + 1;

        if (count($soal) >= 100) {
            return "T" . $id;
        } else if (count($soal) >= 10) {
            return "T0" . $id;
        } else {
            return "T00" . $id;
        }
    }
}
