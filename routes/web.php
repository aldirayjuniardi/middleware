<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

//route untuk data buku
route::get('/buku', 'bukucontroller@bukutampil');
route::post('/buku/tambah','BukuCotroller@bukutambah');
route::get('/buku/hapus/{id_buku}','BukuController@bukuhapus');
route::put('/buku/edit/{id_buku}','BukuCotroller@bukuedit');

//route untuk data buku
route::get('/home', function(){return view('view_home');});

//route untuk data buku
route::get('/anggota', 'Anggotacontroller@anggotatampil');
route::post('/anggota/tambah','AnggotaCotroller@anggotatambah');
route::get('/anggota/hapus/{id_anggota}','AnggotaController@anggotahapus');
route::put('/anggota/edit/{id_anggota}','AnggotaCotroller@anggotaedit');

//route untuk data buku
route::get('/petugas', 'petugascontroller@bukutampil');

//route untuk data buku
route::get('/pinjam', 'pinjamcontroller@bukutampil');
