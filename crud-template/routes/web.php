<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return redirect()->route('posts.index'); // Arahkan ke halaman daftar post
});

// Route resource otomatis menyertakan semua route CRUD (index, create, store, edit, update, destroy)
Route::resource('posts', PostController::class);
