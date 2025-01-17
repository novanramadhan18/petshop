<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Global\GlobalController;
use App\Http\Controllers\UserController;
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


Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('adm-dashboard');
    Route::get('/laporan', [AdminController::class, 'laporan'])->name('adm-laporan');
    Route::get('/produk', [AdminController::class, 'produk'])->name('adm-produk');
    Route::get('/produk/tambah', [AdminController::class, 'tambah_produk'])->name('adm-add-produk');
});

Route::controller(GlobalController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/consultation', 'consultation')->name('consul');
    Route::get('/shop', 'shop')->name('shop');
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
});

