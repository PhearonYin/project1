<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

Route::resource('posts', PostController::class);

Route::post('register', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register');

Route::resource('users', UserController::class);
Route::get('/users', [UserController::class, 'index'])->name('users.index');
