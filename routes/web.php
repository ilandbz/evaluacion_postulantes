<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
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
Route::post('login', [LoginController::class, 'autenticar'])->name('acceder');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('login', function () {
    return view('login');
})->name('login');
Route::get('/', function () {
    return view('login');
});
Route::get('/', [HomeController::class, 'index'])->middleware('auth');
Route::get('/examen', [HomeController::class, 'examen'])->middleware('auth');
Route::POST('/resolver', [HomeController::class, 'resolver'])->middleware('auth');
Route::get('/examen-resuelto', [HomeController::class, 'examen_resuelto'])->middleware('auth');