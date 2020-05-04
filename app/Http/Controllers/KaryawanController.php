<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RekapitulasiPenilaian;

class KaryawanController extends Controller
{
    public function GetDashboard($id)
    {
        $rekap = RekapitulasiPenilaian::join('user_calon', 'rekapitulasi_penilaian.ID_calon', '=', 'user_calon.ID_calon')
            ->where('rekapitulasi_penilaian.ID_calon', $id)->first();

        return view('pages.dashboard_karyawan')->with('rekap', $rekap);
    }
}
