<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\testController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


// home
Route::get('/', function () {
    return view('index');
});


Route::get('/hai', [testController::class, 'index'])->name('hai');


// login
Route::get('/login', [authController::class, 'showLoginForm'])->name('login');
Route::post('/login', [authController::class, 'authenticate'])->name('send.login');

// register
Route::get('/register', [authController::class, 'showRegisterform'])->name('register');
Route::post('/register', [authController::class, 'register'])->name('send.register');
// logout
Route::post('/logout', [authController::class, 'logout'])->name('logout');

// dashboard login

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
