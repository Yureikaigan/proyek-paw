<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Auth;

Route::post('/logout', function () {
    Auth::logout();
    return redirect()->route('welcome');
})->name('logout');

Route::get('/', [LandingController::class, 'index'])->name('landingpage');

Route::get('/rooms/create', [RoomController::class, 'create'])->name('rooms.create');
Route::post('/rooms', [RoomController::class, 'store'])->name('rooms.store');
Route::get('/rooms', [RoomController::class, 'index'])->name('rooms.index');

Route::get('/', function () {
    return auth()->check()
        ? redirect('/landing')
        : view('welcome');
})->name('welcome');

Route::get('/landing', [LandingController::class, 'index'])->name('landingpage');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/registerstore', [RegisterController::class, 'store'])->name('register.store');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
