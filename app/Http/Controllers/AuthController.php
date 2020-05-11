<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserCalon;
use App\UserPerusahaan;

use App\RekapitulasiPenilaian;

class AuthController extends Controller
{
    public function Login(Request $request)
    {
        $input = $request->all();

        extract($input);

        $userC = UserCalon::where('username', $username)->first();
        if ($userC) {
            if ($userC->password == $password) {
                $request->session()->put('name', $userC->nama);
                $request->session()->put('id', $userC->ID_calon);
                return redirect(url("/karyawan/$userC->ID_calon/dashboard"))->with('success', "Berhasil Login");
            } else {
                return redirect(url('/'))->with('error', "Password salah");
            }
        }
        $userP = UserPerusahaan::where('username', $username)->first();
        if ($userP) {
            if ($userP->password == $password) {
                $request->session()->put('name', $userP->status);
                $request->session()->put('id', $userP->ID_user);
                if ($userP->status == "Direktur Utama") {
                    return redirect(url('/dirut/dashboard'))->with('success', "Berhasil Login");
                } else {
                    return redirect(url('/admin/dashboard'))->with('success', "Berhasil Login");
                }
            } else {
                return redirect(url('/'))->with('error', "Password salah");
            }
        }

        return redirect(url('/'))->with('error', "Username Tidak Ditemukan");
    }

    public function Register(Request $request)
    {
        $input = $request->all();

        extract($input);

        if (
            empty($username) || empty($password) || empty($nama)
            || empty($no_telepon) || empty($alamat) || empty($posisi_lamaran)
            || empty($tanggal_lahir) || empty($no_ktp) || empty($jenis_kelamin)
            || empty($agama) || empty($pendidikan_terakhir) || empty($pengalaman_kerja)
        ) {
            return redirect(url('/register'))->with('error', "Dimohon untuk mengisi semua field");
        }

        $userCFound = UserCalon::where('username', $username)->first();
        $userPFound = UserPerusahaan::where('username', $username)->first();

        if (!empty($userCFound) && !empty($userPFound)) {
            return redirect(url('/register'))->with('error', "Username sudah terdaftar");
        }

        $ID_calon = $this->GetIDCalon();
        $user = new UserCalon;
        $user->ID_calon = $ID_calon;
        $user->username = $username;
        $user->password = $password;
        $user->nama = $nama;
        $user->no_telepon = $no_telepon;
        $user->alamat = $alamat;
        $user->posisi_lamaran = $posisi_lamaran;
        $user->tanggal_lahir = $tanggal_lahir;
        $user->no_ktp = $no_ktp;
        $user->jenis_kelamin = $jenis_kelamin;
        $user->agama = $agama;
        $user->pendidikan_terakhir = $pendidikan_terakhir;
        $user->pengalaman_kerja = $pengalaman_kerja;
        $user->save();

        $nilai = new RekapitulasiPenilaian;
        $nilai->ID_rekapitulasi = $this->GetIDRekapitulasi();
        $nilai->ID_calon = $ID_calon;
        $nilai->save();

        return redirect(url('/'))->with('success', "Registrasi Berhasil");
    }

    public function GetIDCalon()
    {
        $user = UserCalon::all();
        $id = count($user) + 1;
        if (count($user) >= 100) {
            return "C" . $id;
        } else if (count($user) >= 10) {
            return "C0" . $id;
        } else {
            return "C00" . $id;
        }
    }

    public function GetIDRekapitulasi()
    {
        $nilai = RekapitulasiPenilaian::all();
        $id = count($nilai) + 1;
        if (count($nilai) >= 100) {
            return "R" . $id;
        } else if (count($nilai) >= 10) {
            return "R0" . $id;
        } else {
            return "R00" . $id;
        }
    }

    public function LogOut(Request $request){
        $request->session()->flush();

        return redirect(url(''))->with('success', "Berhasil Log Out");
    }
}
