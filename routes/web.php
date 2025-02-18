<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [BlogController::class, 'index']);
Route::get('/blog', [BlogController::class, 'blog']);
Route::get('/tentang', [BlogController::class, 'tentang']);
Route::get('/kontak', [BlogController::class, 'kontak']);