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
    return view('frontend');
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

Route::get('dosen', [dosenControllers::class, 'index']);

Route::get('welcome', [dosenControllers::class, 'welcome']);

Route::get('/pegawai/{nama}', [pegawaiControllers::class, 'index']);
Route::get('/formulir', [pegawaiControllers::class, 'formulir']);
Route::post('/formulir/proses', [pegawaiControllers::class,'proses']);

// route blog
Route::get('/blogs', [blogControllers::class, 'home']);
Route::get('/blogs/tentang', [blogControllers::class, 'tentang']);
Route::get('/blogs/kontak', [blogControllers::class,'kontak']);
