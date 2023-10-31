<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SendEmailController;

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

// Route::get('/', function () {
//     return view('kirim-email');
// });
Route::get('/', function () {
    return view('welcome');
});

Route::post('/post-email', [SendEmailController::class, 'store'])->name('post-email');

Route::get('/send_mail', [SendEmailController::class,'index'])->name('kirim-email');


Route::controller(UserController::class)->group(function() {
    Route::middleware(['auth'])->group(function () {
        Route::get('/dashboard', 'dashboard')->middleware(['ensure-loged-out'])->name('dashboard');
        Route::post('/logout', 'logout')->name('logout');
    });
    Route::middleware(['guest'])->group(function () {
        Route::get('/send_mail', [SendEmailController::class,'index'])->name('kirim-email');
        Route::get('/register', 'register')->name('register');
        Route::post('/store', 'store')->name('store');
        Route::get('/login', 'login')->name('login');
        Route::post('/authenticate', 'authenticate')->name('authenticate');
    });
});
