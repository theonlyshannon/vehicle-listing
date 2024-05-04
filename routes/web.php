<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\AuthController;
use App\Models\Vehicle;
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

Route::get('/', function () {
    return view('home');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');

    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');

    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth','admin')->name('logout');
});

    Route::get('dashboard', function () {
        return view('pages/dashboard');
    })->middleware('auth');


Route::middleware('auth', 'admin')->group(function () {
    Route::get('dashboard', function () {
        return view('pages/dashboard');
    })->name('dashboard');

    Route::controller(VehicleController::class)->prefix('products')->group(function () {
        Route::get('', 'index')->name('products');
        Route::get('create', 'create')->name('products.create');
        Route::post('store', 'store')->name('products.store');
        Route::get('show/{id}', 'show')->name('products.show');
        Route::get('edit/{id}', 'edit')->name('products.edit');
        Route::put('edit/{id}', 'update')->name('products.update');
        Route::delete('destroy/{id}', 'destroy')->name('products.destroy');
    });

    Route::get('/kendaraan', [VehicleController::class, 'index']);
    Route::get('/pelanggan', [PelangganController::class, 'index']);
    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});


//routes kategori
Route::resource('kategori', KategoriController::class);




