<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContenController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;


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
});
Route::resource('karyawan', KaryawanController::class);
Route::resource('penggajian', PenggajianController::class);
Route::resource('lembur', LemburController::class);
Route::resource('golongan', GolonganController::class);
Route::get('/logout',[UserController::class,'logout'])->middleware('auth');
Route::get('/home', [ContenController::class, 'index'])->name('home.index')->middleware('auth');
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login'])->name('login.proses')->middleware('guest');

Route::get('/changepassword',[UserController::class,'showChangePasswordForm'])->middleware('auth');
Route::post('/changepassword',[UserController::class,'changepassword'])->name('changepassword')->middleware('auth');
