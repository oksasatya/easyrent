<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\BuktiBookingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\testController;
use App\Http\Controllers\UserController;
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
// Route::get('/', function () {
//     return view('index');
// });
<<<<<<< HEAD

Route::get('/', [HomeController::class, 'index']);

=======
>>>>>>> b2264fc3b8dc11a0a5b55922be9d37987dabac92

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/hai', [testController::class, 'index'])->name('hai');


// login
Route::get('/login', [authController::class, 'showLoginForm'])->name('login');
Route::post('/login', [authController::class, 'authenticate'])->name('send.login');

// register
Route::get('/register', [authController::class, 'showRegisterform'])->name('register');
Route::post('/register', [authController::class, 'register'])->name('send.register');
// logout
Route::post('/logout', [authController::class, 'logout'])->name('logout');


<<<<<<< HEAD

// prefix dashboard
Route::middleware('auth', 'verified')->group(function () {
    Route::prefix('dashboard')
        ->name('dashboard.')->group(function () {
            Route::resource('/', DashboardController::class);
            Route::get('/booking', [BuktiBookingController::class, 'index'])->name('booking');
        });
});
Route::resource('form', UserController::class);

/*Route::get('/readmore', function () {
    return view('readmore');
});*/
=======
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
>>>>>>> b2264fc3b8dc11a0a5b55922be9d37987dabac92
