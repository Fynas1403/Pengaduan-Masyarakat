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

///////////////////////////////////LOGIN MASYARAKAT//////////////////////////////////
Route::get('/login_masyarakat', function () {
    return view('login_masyarakat');
});
Route::post('login_masyarakat/cek', 'LoginMasyarakat@cek');
Route::get('/masyarakat', 'DashboardMasyarakat@index_masyarakat');
Route::get('/logout_masyarakat','LoginMasyarakat@logout');


///////////////////////////////////LOGIN PETUGAS//////////////////////////////////
Route::get('/login_petugas', function () {
    return view('login_petugas');
});
Route::post('login_petugas/cek', 'LoginPetugas@cek');
Route::get('/petugas', 'DashboardPetugas@index_petugas');
Route::get('/logout_petugas','LoginPetugas@logout');


///////////////////////////////////PETUGAS//////////////////////////////////
Route::get('/login_petugas',"Petugas@index_petugas");

Route::get('/data_petugas',"Petugas@index");

Route::get('/petugas/edit/{id}',"Petugas@edit");

Route::get('/petugas_edit',"Petugas@edit");

Route::post('/petugas/update',"Petugas@update")-> name('petugas.update');

Route::post('/petugas/store',"Petugas@store") ->name('petugas.store');

Route::post('/tambah_petugas/store',"Petugas@store2") ->name('petugas.store2');

Route::get('/petugas/hapus/{id}',"Petugas@hapus");

///////////////////////////////////MASYARAKAT//////////////////////////////////
Route::get('/login_masyarakat',"Masyarakat@index_masyarakat");

Route::get('/data_masyarakat',"Masyarakat@index");

Route::get('/masyarakat/edit/{id}',"Masyarakat@edit");

Route::get('/masyarakat_edit',"Masyarakat@edit");

Route::post('/masyarakat/update',"Masyarakat@update")-> name('masyarakat.update');

Route::post('/masyarakat/store',"Masyarakat@store") ->name('masyarakat.store');

Route::post('/tambah_masyarakat/store',"Masyarakat@store2") ->name('masyarakat.store2');

Route::get('/masyarakat/hapus/{id}',"Masyarakat@hapus");

///////////////////////////////////PENGADUAN MASYARAKAT//////////////////////////////////
Route::get('/pengaduan_masyarakat',"PengaduanMasyarakat@index");

Route::get('/pengaduan_masyarakat/hapus/{id}',"PengaduanMasyarakat@hapus");

Route::post('/tambah_pengaduan/store',  "PengaduanMasyarakat@store") ->name('pengaduanmasyarakat.store');

///////////////////////////////////DATA PENGADUAN//////////////////////////////////////
Route::get('/data_pengaduan',"DataPengaduan@index");

Route::get('/data_pengaduan/edit/{id}',"DataPengaduan@edit");

Route::get('/data_pengaduan_edit',"DataPengaduan@edit");

Route::post('/data_pengaduan/update',"DataPengaduan@update")-> name('datapengaduan.update');

Route::get('/data_pengaduan/detail/{id}',"DataPengaduan@detail");

Route::get('/data_pengaduan/tanggapan/{id}',"DataPengaduan@tanggapan");

Route::get('/data_pengaduan/hapus/{id}',"DataPengaduan@hapus");

Route::get('/data_pengaduan/cetak_pdf', 'DataPengaduan@cetak_pdf');

///////////////////////////////////TANGGAPAN//////////////////////////////////////
Route::post('/tambah_tanggapan/store/{id_pengaduan}',"Tanggapan@store") ->name('masyarakat.store');

Route::get('/tanggapan_masyarakat',"DataPengaduan@index2");

Route::get('/tanggapan_admin',"Tanggapan@index");