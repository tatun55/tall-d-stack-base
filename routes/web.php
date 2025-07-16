<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', \App\Pages\Welcome::class);
Route::get('/register', \App\Pages\Register::class);
Route::get('/login', \App\Pages\Login::class);

Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/');
})->name('logout');
