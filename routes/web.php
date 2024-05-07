<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GejalaController;
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
    return view('homepage');
});

Route::get('/dashboard', [DashboardController::class,'index'])->middleware(['auth']);

// karena ini alamat url nya banyak jadi menggunakan middleware group ya ..
Route::middleware(['auth','admin'])->group(function () {
    Route::get('/gejala', [GejalaController::class,'index']);
    Route::post('/gejala', [GejalaController::class,'gejala']);
    Route::get('/tambahgejala', [GejalaController::class, 'tambahgejala']);
    Route::get('/gejala/{gejala_id}', [GejalaController::class, 'show']);
    Route::get('/gejala/{gejala_id}/edit', [GejalaController::class,'edit']);
    Route::put('/gejala/{gejala_id}', [GejalaController::class,'update']);
    Route::delete('/gejala/{gejala_id}', [GejalaController::class,'destroy']);
});


// untuk login dan register
Auth::routes();

Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginform'])->name('login');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
