<?php

use App\Http\Controllers\Auth\RedirectAuthenticatedUsersController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PelangganController;
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
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get("/redirectAuthenticatedUsers", [RedirectAuthenticatedUsersController::class, "home"]);


    Route::group(['middleware' => 'checkRole:admin'], function () {
        Route::resource('/barang', BarangController::class);
        Route::get('/pelanggan', [PelangganController::class, 'index'])->name('pelanggan.index');
        Route::delete('/pelanggan/{pelanggan}', [PelangganController::class, 'destroy'])->name('pelanggan.destroy');
        Route::get('/pelanggan/{pelanggan}/edit', [PelangganController::class, 'edit'])->name('pelanggan.edit');
        Route::put('/pelanggan', [PelangganController::class, 'update'])->name('pelanggan.update');
    });




    Route::group(['middleware' => 'checkRole:user'], function () {
        Route::controller(PelangganController::class)->group(function () {
            Route::get('/pelanggan/create', 'register')->name('pelanggan.register')->middleware(['checkStatus:0']);
            Route::post('/pelanggan/create', 'store')->name('pelanggan.store')->middleware(['checkStatus:0']);
        });
    });
});

require __DIR__ . '/auth.php';
