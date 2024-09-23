<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {return view('welcome');});
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', function () {Auth::logout();return redirect('/login');})->name('logout');
Route::get('/dashboard', function () {return view('admin.dashboard');})->name('dashboard');
Route::get('/dosen', function () {return view('dosen.dosen');})->name('dosen');
Route::get('/prodi', function () {return view('prodi.prodi');})->name('prodi');
Route::get('/mahasiswa', function () {return view('mahasiswa.mahasiswa');})->name('mahasiswa');
Route::get('/mata_kuliah', function () {return view('mata_kuliah.mata_kuliah');})->name('mata_kuliah');
