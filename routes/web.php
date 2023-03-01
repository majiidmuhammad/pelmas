<?php

use App\Models\Petugas;
use App\Models\Pengaduan;
use App\Models\Masyarakat;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PetugasController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LaporanController;
use App\Http\Controllers\Admin\PengaduanController;
use App\Http\Controllers\Admin\MasyarakatController;
use App\Http\Controllers\Admin\TanggapanController;

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

// Masyarakat
Route::get('/', [UserController::class, 'index'])->name('pelmas.index');

Route::post('/login/auth', [UserController::class, 'login'])->name('pelmas.login');

Route::get('/register', [UserController::class, 'formRegister'])->name('pelmas.formRegister');
Route::post('/register/auth', [UserController::class, 'register'])->name('pelmas.register');

Route::post('/store', [UserController::class, 'storePengaduan'])->name('pelmas.store');
Route::get('/laporan/{siapa?}', [UserController::class, 'laporan'])->name('pelmas.laporan');

Route::get('/logout', [UserController::class, 'logout'])->name('pelmas.logout');

//Admin
Route::prefix('admin')->group(function () {

    Route::get('/', [AdminController::class, 'formlogin'])->name('admin.formlogin');
    Route::post('/login', [AdminController::class, 'login'])->name('admin.login');
    Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    Route::resource('pengaduan', PengaduanController::class);
    Route::resource('petugas', PetugasController::class);
    Route::resource('masyarakat', MasyarakatController::class);
    Route::get('laporan', [LaporanController::class, 'index'])->name('laporan.index');
    
    Route::post('tanggapan/createOrUpdate', [TanggapanController::class, 'createOrUpdate'])->name('tanggapan.createOrUpdate');
});
