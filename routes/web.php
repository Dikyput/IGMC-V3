<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClothController;
use App\Http\Controllers\CrewController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DiscordController;
use App\Http\Controllers\GachaItemController;
use App\Http\Controllers\JadwalTournamenController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\PlayerIgmc2024Controller;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\TopupsaldoController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UiPageController;
use App\Http\Middleware\AdminAuthMiddleware;
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
Route::post('/payment-success/{transaction}', [TransactionController::class, 'paymentsuccess'])->name('paymentsuccess');

Route::get('/about', [DashboardController::class, 'about'])->name('about');
Route::get('/tournament', [DashboardController::class, 'tournament'])->name('tournament');
Route::get('/tournamentdetails', [DashboardController::class, 'tournamentdetails'])->name('tournamentdetails');

Route::get('/admin/login', [AdminController::class, 'adminlogin'])->name('adminlogin');
Route::post('/admin/login', [AdminController::class, 'loginform'])->name('loginform');
Route::middleware(AdminAuthMiddleware::class)->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboardadmin']);
    Route::get('/keluaradmin', [AdminController::class, 'keluaradmin'])->name('keluaradmin');

    Route::get('/admin/data-player', [PlayerController::class, 'index']);
    Route::get('/admin/data-player/{id}/edit', [PlayerController::class, 'edit']);
    Route::put('/admin/data-player-update/{id}', [PlayerController::class, 'update']);
    Route::get('/admin/data-player/{id}/delete', [PlayerController::class, 'destroy']);

    Route::get('/admin/data-crew', [CrewController::class, 'index']);
    Route::get('/admin/data-crew-add', [CrewController::class, 'create']);
    Route::post('admin/data-crew-insert', [CrewController::class, 'store']);
    Route::get('/admin/data-crew/{id}/edit', [CrewController::class, 'edit']);
    Route::put('/admin/data-crew-update/{id}', [CrewController::class, 'update']);
    Route::get('/admin/data-crew/{id}/delete', [CrewController::class, 'destroy']);

    Route::get('/admin/data-playerigmc', [PlayerIgmc2024Controller::class, 'index']);
    Route::get('/admin/data-playerigmc-add', [PlayerIgmc2024Controller::class, 'create']);
    Route::post('admin/data-playerigmc-insert', [PlayerIgmc2024Controller::class, 'store']);
    Route::get('/admin/data-playerigmc/{id}/edit', [PlayerIgmc2024Controller::class, 'edit']);
    Route::put('/admin/data-playerigmc-update/{id}', [PlayerIgmc2024Controller::class, 'update']);
    Route::get('/admin/data-playerigmc/{id}/delete', [PlayerIgmc2024Controller::class, 'destroy']);

    Route::get('/admin/data-turnamen', [JadwalTournamenController::class, 'index']);
    Route::get('/admin/data-turnamen-add', [JadwalTournamenController::class, 'create']);
    Route::post('admin/data-turnamen-insert', [JadwalTournamenController::class, 'store']);
    Route::get('/admin/data-turnamen/{id}/edit', [JadwalTournamenController::class, 'edit']);
    Route::put('/admin/data-turnamen-update/{id}', [JadwalTournamenController::class, 'update']);
    Route::get('/admin/data-turnamen/{id}/delete', [JadwalTournamenController::class, 'destroy']);

    Route::get('admin/data-uipagehome', [UiPageController::class, 'uipagehome']);
    Route::get('admin/data-uipagehome-insert', [UiPageController::class, 'uipagehomestore']);
    Route::get('admin/data-uipagehome/{id}/edit', [UiPageController::class, 'uipagehomeedit']);
    Route::put('admin/data-uipagehome-update/{id}', [UiPageController::class, 'uipagehomeupdate']);

    Route::get('/admin/data-penjualan', [AdminController::class, 'penjualan']);
    Route::get('/admin/data-cloth-add', [ClothController::class, 'create']);
    Route::post('/admin/data-cloth-insert', [ClothController::class, 'store']);
});

Route::get('verification', function () {return view('dashboard.auth.index');})->name('verification');
Route::middleware(['auth'])->group(function () {
    Route::post('updateprofile', [DiscordController::class, 'update_profile'])->name('update_profile');
    Route::post('verify-token', [DiscordController::class, 'verifyToken'])->name('verify-token');
    Route::middleware(['verified'])->group(function () {
        Route::get('/topup-saldo', [TopupsaldoController::class, 'showlist'])->name('topup-saldo');
        Route::post('/topup-saldo', [TransactionController::class, 'submitcart'])->name('submitcart');
        Route::get('/mycart', [TransactionController::class, 'statusPending'])->name('mycart');
        Route::get('updateprofile', function () {return view('dashboard.auth.up');})->name('updateprofile');
        Route::get('dashboard', function () {return view('dashboard.home');})->name('dashboard');
        Route::get('shop', [ShopController::class, 'show'])->name('shop');
        Route::get('storecart/{id}', [ShopController::class, 'storecart']);
        Route::get('cobaitem', [GachaItemController::class, 'cobaitem'])->name('cobaitem');
        Route::get('myinventory', [GachaItemController::class, 'gachaitem'])->name('myinventory');
        Route::post('/add-data-texture', [GachaItemController::class, 'store'])->name('add-data-texture');
        Route::post('/colectitem', [GachaItemController::class, 'store'])->name('colectitem');
    });
});
Route::get('keluar', [DashboardController::class, 'keluar'])->name('keluar');
