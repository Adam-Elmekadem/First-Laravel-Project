<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BlogsController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('portfolio/{firstname}', function($firstname) {
    return view('portfolio', ['firstName' => $firstname]);
})->name('portfolio');

// Route::get('/indexblogs', function() {
//     return view('blogs');
// })->name('TheBlogs');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', function() {
    return view('register');
})->name('register');

Route::resource('blogs', BlogsController::class);