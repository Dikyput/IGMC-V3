<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DiscordController;
use App\Http\Controllers\ShopController;
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

Route::get('/', [DashboardController::class, 'show'])->name('show');
Route::get('/about', [DashboardController::class, 'about'])->name('about');
Route::get('/tournament', [DashboardController::class, 'tournament'])->name('tournament');
Route::get('/tournamentdetails', [DashboardController::class, 'tournamentdetails'])->name('tournamentdetails');

Route::get('/admin/login', [AdminController::class, 'adminlogin'])->name('adminlogin');
Route::post('/admin/login', [AdminController::class, 'loginform'])->name('loginform');

Route::middleware(['admin.auth'])->group(function () {
    Route::get('/admin', [AdminController::class, 'dashboardadmin']);
    Route::post('/keluaradmin', [AdminController::class, 'keluaradmin'])->name('keluaradmin');
});
Route::get('verification', function () {return view('dashboard.auth.index');})->name('verification');
Route::middleware(['auth'])->group(function () {
    Route::post('verify-token', [DiscordController::class, 'verifyToken'])->name('verify-token');
    Route::middleware(['verified'])->group(function () {
        Route::get('updateprofile', function () {return view('dashboard.auth.up');})->name('updateprofile');
        Route::post('updateprofile', [DiscordController::class, 'update_profile'])->name('update_profile');
        Route::get('dashboard', function () {return view('dashboard.home');})->name('dashboard');
        Route::get('shop', [ShopController::class, 'show'])->name('shop');
        Route::get('storecart/{id}', [ShopController::class, 'storecart']);
    });
});
Route::get('keluar', [DashboardController::class, 'keluar'])->name('keluar');
