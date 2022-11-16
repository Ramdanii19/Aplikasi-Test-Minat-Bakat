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

Route::get('/home', function () {
    return view('beranda');
});

//Login
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/logout', function() {
    \Auth::logout();
    return redirect ('/');
});

Route::get('/admin/profile','AdminController@admin_profile');



Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin','AdminController@admin');
    Route::post('/admin/tambah_data','AdminController@tambah_data_admin');
    Route::get('/admin/edit/{id}','AdminController@edit_admin');
    Route::post('/admin/edit_data','AdminController@edit_data_admin');
    Route::get('/admin/delete/{id}','AdminController@delete_admin');
    
    Route::get('/siswa','SiswaController@siswa');
    Route::post('/siswa/tambah_data','SiswaController@tambah_data_siswa');
    Route::get('/siswa/edit/{id}','SiswaController@edit_siswa');
    Route::post('/siswa/edit_data','SiswaController@edit_data_siswa');
    Route::get('/siswa/delete/{id}','SiswaController@delete_siswa');

    // belum
    Route::get('/soal','SoalController@soal');
    Route::post('/soal/tambah_data','SoalController@tambah_data_soal');
    Route::get('/soal/edit/{id}','SoalController@edit_soal');
    Route::post('/soal/edit_data','SoalController@edit_data_soal');
    Route::get('/soal/delete/{id}','SoalController@delete_soal');

    Route::get('/grup_soal','GrupsoalController@grupsoal');
    Route::post('/grup_soal/tambah_data','GrupsoalController@tambah_data_grupsoal');
    Route::get('/grup_soal/edit/{id}','GrupsoalController@edit_grupsoal');
    Route::post('/grup_soal/edit_data','GrupsoalController@edit_data_grupsoal');
    Route::get('/grup_soal/delete/{id}','GrupsoalController@delete_grupsoal');
});

Route::group(['middleware' => 'user'], function () {
    Route::get('/ujian','SiswaController@ujian');
    Route::get('/hasil_ujian','SiswaController@hasil_ujian');
});