<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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

Route::get('/', [AuthController::class, 'index'])->name('login');
Route::get('/lupa-password', [AuthController::class, 'lupaPassword'])->name('lupa.password.index');
Route::post('/login-post', [AuthController::class, 'loginPost'])->name('login.post');

Route::get('/dashboard', function () {
    return view('pages.dashboard');
})->name('dashboard.index');

Route::get('/akun-pegawai', function () {
    return view('pages.akun.akunPegawai');
})->name('akun.pegawai.index');
Route::get('/pegawai', function () {
    return view('pages.pegawai.dataPegawai');
})->name('pegawai.index');

Route::get('/tim-tpcb', function () {
    return view('pages.timTPCB.dataTimTPCB');
})->name('pegawai.index');
