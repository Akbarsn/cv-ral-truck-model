<?php

namespace App\Http\Controllers;

use App\Penerimaan;
use App\RekapitulasiPenilaian;
use App\UserCalon;
use Illuminate\Http\Request;
use PDF;


class DirutController extends Controller
{
    public function GetDashboard()
    {
        $rekap = RekapitulasiPenilaian::join('user_calon', 'rekapitulasi_penilaian.ID_calon', '=', 'user_calon.ID_calon')
            ->where('status_calon', "Lulus")->get();

        return view('pages.dashboard_dirut')->with('rekap', $rekap);
    }

    public function TerimaKaryawan($id)
    {
        $user = UserCalon::where('ID_calon', $id)->first();

        $ID_rekapitulasi = "R" . substr($id, 1, 3);
        $terima = new Penerimaan;
        $terima->ID_penerimaan = $this->GetIDPenerimaan();
        $terima->ID_calon = $id;
        $terima->ID_rekapitulasi = $ID_rekapitulasi;
        $terima->posisi_lamaran = $user->posisi_lamaran;
        $terima->save();

        return redirect(url('/dirut/dashboard'))->with('success', 'Karyawan berhasil diterima');
    }

    public function LaporanPenerimaan()
    {
        $data = Penerimaan::join('user_calon', 'penerimaan.ID_calon', '=', 'user_calon.ID_calon')->get();

        $pdf = PDF::loadview('laporan', ['data' => $data]);
        return $pdf->stream();
    }

    public function GetIDPenerimaan()
    {
        $soal = Penerimaan::all();
        $id = count($soal) + 1;

        if (count($soal) >= 100) {
            return "P" . $id;
        } else if (count($soal) >= 10) {
            return "P0" . $id;
        } else {
            return "P00" . $id;
        }
    }
}
