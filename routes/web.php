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

//memanggil method get pada Object Route NamaObject::nama_method
Route::get('/', function () {
    return view('welcome'); //menampilkan file dengan nama welcome.blade.php yang ada di folder view
});

Route::get('/halo', function () {
    return view('coba');
})->name('halo');

//template default

Route::get('def', function () {
    return view('blankPage');
})->name('def');


//route coba coba
Route::get('/example/page', function () {
    return view('example.page');
})->name('example/page');


//sub pegawai
Route::get('/pegawai', 'PegawaiController@index');
Route::get('/pegawai/tambah', 'PegawaiController@tambah');
Route::post('/pegawai/store', 'PegawaiController@store');
Route::get('/pegawai/edit/{id}', 'PegawaiController@edit');
Route::post('/pegawai/update', 'PegawaiController@update');
Route::get('/pegawai/hapus/{id}', 'PegawaiController@hapus');
Route::get('/pegawai/cari', 'PegawaiController@cari');

Route::get('/pegawai/detail/{id}', 'PegawaiController@detail');



//Tabel Tugas pegawai

Route::get('/tugas', function () {
    return view('tugas');
})->name('tugas');

Route::get('/tugas', 'TugasController@index');
Route::get('/tugas/tambah', 'TugasController@tambah');
Route::post('/tugas/simpan', 'TugasController@simpan');
Route::get('/tugas/edit/{id}', 'TugasController@edit');
Route::post('/tugas/update', 'TugasController@update');
Route::get('/tugas/hapus/{id}', 'TugasController@hapus');
Route::post('/tugas/cari', 'TugasController@cari');


//agen
Route::get('/agen', 'agenController@index');
Route::get('/agen/tambah', 'agenController@tambah');
Route::post('/agen/store', 'agenController@store');
Route::get('/agen/edit/{id}', 'agenController@edit');
Route::post('/agen/update', 'agenController@update');
Route::get('/agen/hapus/{id}', 'agenController@hapus');
Route::get('/agen/cari', 'agenController@cari');


//mahasiswa
Route::get('/mahasiswa', 'mahasiswaController@index');
Route::get('/mahasiswa/edit/{id}', 'mahasiswaController@edit');
Route::post('/mahasiswa/update', 'mahasiswaController@update');
Route::get('/mahasiswa/view/{id}', 'mahasiswaController@view');
