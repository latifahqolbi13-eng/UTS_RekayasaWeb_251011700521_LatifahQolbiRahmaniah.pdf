<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MovieController::class, 'index'])->name('movies.index'); // Halaman Beranda (Hanya Banner)
Route::get('/movies', [MovieController::class, 'catalog'])->name('movies.catalog'); // Halaman Katalog Film
Route::get('/movie/{id}', [MovieController::class, 'show'])->name('movies.show'); // Halaman Detail Film
Route::get('/about', [MovieController::class, 'about'])->name('movies.about');
Route::get('/profile', [MovieController::class, 'profile'])->name('movies.profile');
