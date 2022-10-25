<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthorController;

Route::get('/admin/authors', [AuthorController::class, 'index']);
Route::get('/admin/authors/create', [AuthorController::class, 'create']);
Route::post('/admin/authors', [AuthorController::class, 'store'])->name('author');
