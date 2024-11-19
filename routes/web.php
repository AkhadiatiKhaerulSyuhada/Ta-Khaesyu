<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SistemPenilaianController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ChatbotController;
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

// Halaman Home
Route::get('/', function () {
    return view('pages.home'); 
});

Route::get('/home', function () {
    return view('pages.home'); 
})->name('home');

Route::get('/sistem-penilaian', function () {
    return view('pages.sistem-penilaian'); 
})->name('sistem-penilaian');

Route::get('/edukasi', function () {
    return view('pages.edukasi'); 
})->name('edukasi');

Route::get('/login', function () {
    return view('pages.login'); 
})->name('login');

Route::post('/edukasi', [ChatbotController::class, 'respond']);

