<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UrlController;

Route::get('/', [UrlController::class, 'index'])->name('shorten.url.form');
Route::post('/shorten', [UrlController::class, 'shorten'])->name('shorten.url.store');
Route::get('/admin', [UrlController::class, 'admin'])->name('admin.urls');
Route::get('/{shortCode}', [UrlController::class, 'redirect'])->name('shorten.url.redirect');
