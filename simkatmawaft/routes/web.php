<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\SekolahController;
use App\Http\Controllers\PenelitianController;
use App\Http\Controllers\PengabdianController;
use App\Http\Controllers\MengajarController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ValidasiController;
use App\Http\Controllers\RekpenelitianController;
use App\Http\Controllers\RekmengajarController;
use App\Http\Controllers\RekpengabdianController;
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
    return view('welcome');
});

Route::get('/master', function () {
    return view('master');
});
Route::get('/', function () {
    return view('home');
});

Route::get('/penelitian', function () {
    return view('penelitian.index');
});

Route::get('/pengabdian', function () {
    return view('pengabdian.index');
});

Route::get('/surat', function () {
    return view('mengajar.surat');
});

Route::get('/mengajar', function () {
    return view('mengajar.index');
});
Route::get('/create_mengajar', function () {
    return view('mengajar.create');
});
Route::get('/surat_mengajar', function () {
    return view('mengajar.surat');
});

Route::get('/status_pengabdian', function () {
    return view('stmhs.st_pengabdian');
});
Route::get('/status_mengajar', function () {
    return view('stmhs.st_mengajar');
});

Route::get('/valpenelitian', function () {
    return view('validasi.valpenelitian');
});

Route::get('/login',[LoginController::class, 'login'] )->name('login');
Route::post('/postlogin',[LoginController::class, 'postlogin'] )->name('postlogin');

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/sekolah', [SekolahController::class, 'index']);

Route::get('/validasi_penelitian', function () {
    return view('validasi.penelitian.valpenelitian');
});
Route::get('/st_penelitian', [PenelitianController::class, 'index']);
Route::get('/st_pengabdian', [PengabdianController::class, 'index']);
Route::get('/st_mengajar', [MengajarController::class, 'index']);

Route::get('/penelitian/create', [PenelitianController::class, 'create']);
Route::post('/penelitian/store', [PenelitianController::class, 'store']);
Route::get('/penelitian/{id}/edit', [PenelitianController::class, 'edit']);
Route::get('/penelitian/{id}/surat', [PenelitianController::class, 'surat']);
Route::put('/penelitian/{id}', [PenelitianController::class, 'update']);

Route::get('/pengabdian/create', [PengabdianController::class, 'create']);
Route::post('/pengabdian/store', [PengabdianController::class, 'store']);
Route::get('/pengabdian/{id}/surat', [PengabdianController::class, 'surat']);
Route::get('/pengabdian/{id}/edit', [PengabdianController::class, 'edit']);
Route::put('/pengabdian/{id}', [PengabdianController::class, 'update']);

Route::get('/mengajar/create', [MengajarController::class, 'create']);
Route::post('/mengajar/store', [MengajarController::class, 'store']);
Route::get('/mengajar/{id}/surat', [MengajarController::class, 'surat']);
Route::get('/mengajar/{id}/edit', [MengajarController::class, 'edit']);
Route::put('/mengajar/{id}', [MengajarController::class, 'update']);

Route::get('/validasi_pengabdian', function () {
    return view('validasi.pengabdian.valpengabdian');
});
Route::get('/validasi_mengajar', function () {
    return view('validasi.mengajar.valmengajar');
});

Route::get('/valpenelitian', [PenelitianController::class, 'index1']);
Route::get('/valpenelitian/{id}/setuju', [PenelitianController::class, 'setuju']);
Route::get('/valpenelitian/{id}/tolak', [PenelitianController::class, 'tolak']);

Route::get('/valpengabdian', [PengabdianController::class, 'index1']);
Route::get('/valpengabdian/{id}/setuju', [PengabdianController::class, 'setuju']);
Route::get('/valpengabdian/{id}/tolak', [PengabdianController::class, 'tolak']);

Route::get('/rekpenelitian/cetak', [RekpenelitianController::class, 'cetak']);
Route::get('/rekpenelitian', [RekpenelitianController::class, 'index']);

Route::get('/rekpengabdian/cetak', [RekpengabdianController::class, 'cetak']);
Route::get('/rekpengabdian', [RekpengabdianController::class, 'index']);

Route::get('/rekmengajar/cetak', [RekmengajarController::class, 'cetak']);
Route::get('/rekmengajar', [RekmengajarController::class, 'index']);