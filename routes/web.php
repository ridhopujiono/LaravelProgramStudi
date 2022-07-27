<?php

use App\Http\Controllers\HalamanUtamaController;
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

Route::get('/', [HalamanUtamaController::class, 'index']);
Route::get('about', [HalamanUtamaController::class, 'about']);
Route::get('facility', [HalamanUtamaController::class, 'facility']);
Route::get('teacher', [HalamanUtamaController::class, 'teacher']);
Route::get('contact', [HalamanUtamaController::class, 'contact']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('pengajars', App\Http\Controllers\pengajarController::class);

Route::resource('fasilitas', App\Http\Controllers\fasilitasController::class);
