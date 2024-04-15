<?php

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

Route::get('/', function () {
    return view('landingpage.dashboard');
})->name('landingpage');

Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', function () {return view('dashboard.home');})->name('dashboard');
    Route::get('keluar', [DashboardController::class, 'keluar'])->name('keluar');
});
