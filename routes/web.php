<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', [CustomController::class, 'login'])->middleware('alreadyLoggedIn');
Route::get('/registration', [CustomController::class, 'registration']);
Route::post('/register-user', [CustomController::class, 'registerUser'])->name('register-user');
Route::post('/login-user', [CustomController::class, 'loginUser'])->name('login-user');
Route::get('/dashboard', [CustomController::class, 'dashboard'])->middleware('isLoggedIn');
Route::get('/logout', [CustomController::class, 'logout']);