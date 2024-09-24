<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/dosen', function () {return view('dosen.dosen');})->name('dosen');
Route::get('/prodi', function () {return view('prodi.prodi');})->name('prodi');
Route::get('/mahasiswa', function () {return view('mahasiswa.mahasiswa');})->name('mahasiswa');
Route::get('/mata_kuliah', function () {return view('mata_kuliah.mata_kuliah');})->name('mata_kuliah');

Route::prefix('mat_kuliah')->group(function () {
    Route::get('/', App\Livewire\Admin\MataKuliah\Index::class)->name('mata_kuliah)');
});

require __DIR__.'/auth.php';
