<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', [HomeController::class, 'index'])->name('homepage');


Route::post('/handle-form-submission', [HomeController::class, 'handleFormSubmission']);

Route::group(['middleware' => 'guest'], function() {

    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login-post', [AuthController::class,'loginPost'])->name('login.post');
});

Route::group(['middleware' => 'auth'], function() {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::post('/message-post', [DashboardController::class, 'create'])->name('message.post');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
