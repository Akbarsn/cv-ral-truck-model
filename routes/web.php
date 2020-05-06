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

Route::get('/', function(){
    return view('auth.login');
});

Route::post('/login/send', 'AuthController@Login');

Route::get('/register', function(){
    return view('auth.register');
});

Route::post('/register/send', 'AuthController@Register');

Route::get('/dirut/dashboard', 'DirutController@GetDashboard');
Route::get('/karyawan/{id}/dashboard', 'KaryawanController@GetDashboard');
Route::get('/admin/dashboard', 'AdminController@GetDashboard');

Route::post('/tambah-soal', 'AdminController@AddSoal');

Route::post('/ubah-status', 'AdminController@EditStatusCakar');

Route::get('/ambil-test/{id}', 'KaryawanController@AmbilTest');



