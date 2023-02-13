<?php

use App\Http\Controllers\AccountEmployeeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/logout', function () {
    Auth::logout();

    return redirect(route('akun.pegawai.index'));
})->name('logout');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['role:1']], function () {
        Route::get('/dashboard', function () {
            return view('pages.dashboard', [
                'title' => 'Dashboard'
            ]);
        })->name('dashboard.index');

        // Account Employee
        Route::get('/akun-pegawai', [AccountEmployeeController::class, 'index'])->name('akun.pegawai.index');
        Route::post('/akun-pegawai', [AccountEmployeeController::class, 'store'])->name('akun.pegawai.store');
        Route::patch('/akun-pegawai/nonaktif-akun', [AccountEmployeeController::class, 'nonAktifAccount'])->name('nonaktif.account.update');
        Route::patch('/akun-pegawai/reset-password-default', [AccountEmployeeController::class, 'resetPasswordDefault'])->name('reset.password.default.update');
        Route::get('/akun-pegawai/{id}/edit', [AccountEmployeeController::class, 'edit'])->name('akun.pegawai.edit');
        Route::patch('/akun-pegawai', [AccountEmployeeController::class, 'update'])->name('akun.pegawai.update');
        Route::delete('/akun-pegawai/{id}', [AccountEmployeeController::class, 'destroy'])->name('akun.pegawai.destroy');

        // Employee
        Route::get('/pegawai', [EmployeeController::class, 'index'])->name('pegawai.index');
        Route::get('/pegawai/tambah', [EmployeeController::class, 'create'])->name('pegawai.create');
        Route::post('/pegawai', [EmployeeController::class, 'store'])->name('pegawai.store');
        Route::get('/pegawai/{id}/edit', [EmployeeController::class, 'edit'])->name('pegawai.edit');
        Route::patch('/pegawai', [EmployeeController::class, 'update'])->name('pegawai.update');

        // Tim TPCB
        Route::get('/tim-tpcb', function () {
            return view('pages.timTPCB.dataTimTPCB');
        })->name('tpcb.index');
    });
});
