<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::post('/login/send', 'AuthController@Login');

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/log-out', 'AuthController@LogOut');

Route::post('/register/send', 'AuthController@Register');

Route::get('/dirut/dashboard', 'DirutController@GetDashboard');
Route::get('/karyawan/{id}/dashboard', 'KaryawanController@GetDashboard');
Route::get('/admin/dashboard', 'AdminController@GetDashboard');

Route::post('/tambah-soal', 'AdminController@AddSoal');

Route::post('/ubah-status', 'AdminController@EditStatusCakar');

Route::get('/beri-nilai/{id}', 'AdminController@GetBeriNilaiPage');

Route::get('/karyawan/terima/{id}', 'DirutController@TerimaKaryawan');

Route::get('/karyawan/hapus/{id}','AdminController@HapusKaryawan');

Route::post('/status/tkpba', 'AdminController@BeriNilai');

Route::get('/ambil-test/{id}', 'KaryawanController@AmbilTest');

Route::post('/tes/send', 'KaryawanController@SendJawaban');

Route::get('/cetak-laporan', 'DirutController@LaporanPenerimaan');
