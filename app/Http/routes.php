<?php
Route::get('/', function(){
	return view('master');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('welcome-to', function () {
//     return(' welcome to student FKTI');
// });

// Route::auth();

Route::get('pengguna','PenggunaController@awal');
Route::get('pengguna/tambah','PenggunaController@tambah');
Route::post('pengguna/simpan','PenggunaController@simpan');
Route::get('pengguna/edit/{pengguna}','PenggunaController@edit');
Route::post('pengguna/edit/{pengguna}','PenggunaController@update');
Route::get('pengguna/hapus/{pengguna}','PenggunaController@hapus');
Route::get('pengguna/lihat/{pengguna}','PenggunaController@lihat');

Route::get('ruangan','RuanganController@awal');
Route::get('ruangan/tambah','RuanganController@tambah');
Route::post('ruangan/simpan','RuanganController@simpan');
Route::get('ruangan/edit/{ruangan}','RuanganController@edit');
Route::post('ruangan/edit/{ruangan}','RuanganController@update');
Route::get('ruangan/hapus/{ruangan}','RuanganController@hapus');
Route::get('ruangan/lihat/{ruangan}','RuanganController@lihat');


Route::get('matakuliah','MatakuliahController@awal');
Route::get('matakuliah/tambah','MatakuliahController@tambah');
Route::post('matakuliah/simpan','MatakuliahController@simpan');
Route::get('matakuliah/edit/{matakuliah}','MatakuliahController@edit');
Route::post('matakuliah/edit/{matakuliah}','MatakuliahController@update');
Route::get('matakuliah/hapus/{matakuliah}','MatakuliahController@hapus');
Route::get('matakuliah/lihat/{matakuliah}','MatakuliahController@lihat');	


Route::get('dosen','DosenController@awal');
Route::get('dosen/tambah','DosenController@tambah');
Route::post('dosen/simpan','DosenController@simpan');
Route::get('dosen/edit{dosen}','DosenController@edit');
Route::post('dosen/edit{dosen}','DosenController@update');
Route::get('dosen/hapus{dosen}','DosenController@hapus');


Route::get('mahasiswa','MahasiswaController@awal');
Route::get('mahasiswa/tambah','MahasiswaController@tambah');
Route::post('mahasiswa/simpan','MahasiswaController@simpan');
Route::get('mahasiswa/edit{mahasiswa}','MahasiswaController@edit');
Route::post('mahasiswa/edit{mahasiswa}','MahasiswaController@update');
Route::get('mahasiswa/hapus{mahasiswa}','MahasiswaController@hapus');

Route::get('dosenmatakuliah','Dosen_MatakuliahController@awal');
Route::get('dosenmatakuliah/tambah','Dosen_MatakuliahController@tambah');
Route::post('dosenmatakuliah/simpan','Dosen_MatakuliahController@simpan');
Route::get('dosenmatakuliah/edit{dosenmatakuliah}','Dosen_MatakuliahController@edit');
Route::post('dosenmatakuliah/edit{dosenmatakuliah}','Dosen_MatakuliahController@update');
Route::get('dosenmatakuliah/hapus{dosenmatakuliah}','Dosen_MatakuliahController@hapus');

Route::get('jadwalmatakuliah','Jadwal_MatakuliahController@awal');
Route::get('jadwalmatakuliah/tambah','Jadwal_MatakuliahController@tambah');
Route::post('jadwalmatakuliah/simpan','Jadwal_MatakuliahController@simpan');
Route::get('jadwalmatakuliah/edit{jadwalmatakuliah}','Jadwal_MatakuliahController@edit');
Route::post('jadwalmatakuliah/edit{jadwalmatakuliah}','Jadwal_MatakuliahController@update');
Route::get('jadwalmatakuliah/hapus{jadwalmatakuliah}','Jadwal_MatakuliahController@hapus');



Route::get('/', function () {
    return view('master');
});
Route::get('public', function () {
    return view('biodata');
});

Route::auth();
Route::get('pengguna/{pengguna}', function ($pengguna) {
    return("hallo $pengguna");
});
Route::get('public', function () {
    return ('hallo');
});
