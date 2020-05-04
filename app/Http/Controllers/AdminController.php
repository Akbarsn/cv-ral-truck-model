<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RekapitulasiPenilaian;

class AdminController extends Controller
{
    public function GetDashboard(Request $request)
    {
        $name = $request->session()->get('name');
        $rekap = RekapitulasiPenilaian::join('user_calon', 'rekapitulasi_penilaian.ID_calon', '=', 'user_calon.ID_calon')
            ->select('rekapitulasi_penilaian.*', 'user_calon.nama')->get();

        return view('pages.dashboard_admin')->with('rekap', $rekap)->with('name', $name);
    }
}
