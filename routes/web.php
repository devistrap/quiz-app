<?php

use App\Http\Controllers\createfirstController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\manageController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\createquestionController;
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


Route::get('/', [IndexController::class, 'index']);
Route::get('/create', function () {
    return view('createfirst'); });
Route::get('/login', function () {
    return view('login'); });
Route::get('/register', function () {
    return view('register'); });
Route::get('/manage', [manageController::class, 'index'])->name('manage.index');
Route::get('/question', [createquestionController::class, 'index'])->name('createquestion.index');

Route::post('/createquestion', [createquestionController::class, 'store'])->name('createquestion.store');
Route::post('/createfirst', [createfirstController::class, 'store'])->name('createfirst.store');
Route::post('/register', [RegisterController::class, 'register'])->name('register.register');
Route::post('/login', [LoginController::class, 'login'])->name('login.login');

