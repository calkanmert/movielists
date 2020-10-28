<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\MoviesController;

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


Route::prefix('settings')->group(function () {
    Route::get('/', [SettingsController::class, 'getSettings']);
    Route::post('/add', [SettingsController::class, 'addSetting']);
    Route::post('/delete', [SettingsController::class, 'deleteSetting']);
    Route::post('/update', [SettingsController::class, 'updateSetting']);
});

Route::prefix('users')->group(function () {
    Route::get('/', [UsersController::class, 'getUsers']);
    Route::post('/add', [UsersController::class, 'addUser']);
    Route::post('/delete', [UsersController::class, 'deleteUser']);
    Route::post('/update', [UsersController::class, 'updateUser']);
});

Route::prefix('movies')->group(function () {
    Route::get('/', [MoviesController::class, 'getMovies']);
    Route::post('/add', [MoviesController::class, 'addMovie']);
    Route::post('/delete', [MoviesController::class, 'deleteMovie']);
    Route::post('/update', [MoviesController::class, 'updateMovie']);
});
