<?php

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
    return view('welcome');
});

Auth::routes([
    'register' => false,
    'reset' => false
]);

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    //data master
    Route::resource('dokter', 'DokterController');
    Route::resource('jurusan', 'JurusanController');
    //taruna
    Route::resource('taruna', 'TarunaController');
    Route::post('/taruna/import', 'TarunaController@import')->name('taruna.import');
    Route::get('/taruna/{id_taruna}/riwayat', 'TarunaController@cetak')->name('taruna.cetak');
    //
    Route::resource('sertifikat', 'SertifikatController');
    Route::resource('jabatan', 'JabatanController');
    //rekam medis
    Route::resource('rekam-medis', 'RekamMedisController');
    Route::get('/rekam-medis/{id}/cetak/{no_rm}', 'RekamMedisController@cetak')->name('rekam-medis.cetak');
    //riwayat periksa
    Route::resource('periksa', 'PeriksaController');
    //user
    Route::resource('user', 'UserController');
    Route::get('/update-status/{id}', 'UserController@update_status');
    Route::patch('/user/{id}/reset-password', 'UserController@reset_password')->name('user.reset-password');
});
