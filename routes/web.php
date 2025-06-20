<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\LampuDBController;
use App\Http\Controllers\KaryawanDBController;
use App\Http\Controllers\PageCounterController;
use App\Http\Controllers\NewKaryawanDBController;
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
    return view('template');
});

route::get('halo',function(){
    return "<h1> halo,selamat datang di dunia </h1>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('satu', function () {
	return view('linktree');
});



// tugasssssssssssssssssss

Route::get('pertama', function () {
	return view('pertama');
});

Route::get('validasi1', function () {
	return view('validasi1');
});

Route::get('object-position', function () {
	return view('object-position');
});

Route::get('bootstrap1', function () {
	return view('bootstrap1');
});

Route::get('js1', function () {
	return view('js1');
});

Route::get('linktree', function () {
	return view('linktree');
});

Route::get('index', function () {
	return view('index');
});

Route::get('pertemuan4PR', function () {
	return view('pertemuan4PR');
});

Route::get('dosen', [DosenController::class, 'index']);

Route::get('welcome', [DosenController::class, 'welcome']);

Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class,'proses']);

// route blog
Route::get('/blogs', [BlogController::class, 'home']);
Route::get('/blogs/tentang', [BlogController::class, 'tentang']);
Route::get('/blogs/kontak', [BlogController::class,'kontak']);

route::get("/frontend", function(){
	return view('frontend');
});
//route pegawaiDB
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']); //jika form dikirim, route ini akan dijalankan
Route::get('/pegawai/edit/{id}',[PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update',[PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);

Route::get('/cari', [PegawaiDBController::class, 'cari']);

//route lampuDB
Route::get('/lampu', [LampuDBController::class, 'index']);
Route::get('/tambah/lampu', [LampuDBController::class, 'tambah']);
Route::post('/lampu/store', [LampuDBController::class, 'store']); //jika form dikirim, route ini akan dijalankan
Route::get('/lampu/edit/{id}',[LampuDBController::class, 'edit']);
Route::post('/lampu/update',[LampuDBController::class, 'update']);
Route::get('/lampu/hapus/{id}', [LampuDBController::class, 'hapus']);

Route::get('/lampu/cari', [LampuDBController::class, 'cari']);

//route karywan
Route::get('/karyawan', [KaryawanDBController::class, 'index']);
Route::get('/tambah/karyawan', [KaryawanDBController::class, 'tambah']);
Route::post('/karyawan/store', [KaryawanDBController::class, 'store']); //jika form dikirim, route ini akan dijalankan
Route::get('/karyawan/hapus/{id}', [KaryawanDBController::class, 'hapus']);

//code teman kodeA1
Route::get('/A1', [PageCounterController::class, 'index']);

// EAS 
Route::get('/eas', [NewKaryawanDBController::class, 'index']);
Route::get('/tambah/newkaryawan', [NewKaryawanDBController::class, 'tambah']);
Route::get('/newkaryawan/store', [NewKaryawanDBController::class, 'store']);
Route::get('/newkaryawan/hapus/{id}', [NewKaryawanDBController::class, 'hapus']);