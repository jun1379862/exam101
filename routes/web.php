<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthLoginController;
use App\Http\Controllers\Auth\AuthSignupController;
use App\Http\Controllers\TaskController;

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

Route::middleware('auth')->group(function () {
    Route::get('/', [TaskController::class, 'index']);
    Route::get('/dashboard', [TaskController::class, 'index']);

    Route::resource('task', '\App\Http\Controllers\TaskController');
});

Route::get('/login', [AuthLoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthLoginController::class, 'login']);

Route::get('/signup', [AuthSignupController::class, 'showSignupForm'])->name('signup');
Route::post('/signup', [AuthSignupController::class, 'signup']);

