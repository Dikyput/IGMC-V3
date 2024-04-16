<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
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

Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', function () {return view('dashboard.home');})->name('dashboard');
    Route::get('keluar', [DashboardController::class, 'keluar'])->name('keluar');
});
