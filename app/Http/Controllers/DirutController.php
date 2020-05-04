<?php

namespace App\Http\Controllers;

use App\RekapitulasiPenilaian;
use Illuminate\Http\Request;

class DirutController extends Controller
{
    public function GetDashboard()
    {
        $rekap = RekapitulasiPenilaian::join('user_calon', 'rekapitulasi_penilaian.ID_calon', '=', 'user_calon.ID_calon')
            ->where('status_calon', "Lulus")->get();

        return view('pages.dashboard_dirut')->with('rekap', $rekap);
    }
}
