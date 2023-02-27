<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;

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
    return view('welcome');
});

// Masyarakat
Route::get('/', [UserController::class, 'index'])->name('pelmas.index');

Route::post('/login/auth', [UserController::class, 'login'])->name('pelmas.login');

Route::get('/register', [UserController::class, 'formRegister'])->name('pelmas.formRegister');
Route::post('/register/auth', [UserController::class, 'register'])->name('pelmas.register');

Route::post('/store', [UserController::class, 'storePengaduan'])->name('pelmas.store');
Route::get('/laporan/{siapa?}', [UserController::class, 'laporan'])->name('pelmas.laporan');

Route::get('/logout', [UserController::class, 'logout'])->name('pelmas.logout');