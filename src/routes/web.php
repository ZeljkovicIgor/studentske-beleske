<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\UserProfileController;
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

Route::controller(CourseController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/courses/create', 'create');
    Route::post('/courses/store', 'store');
    Route::get('/courses/{course}/delete', 'destroy');
    Route::get('/courses/{course}/edit', 'edit');
    Route::put('/courses/{course}/edit', 'update');
    Route::get('/courses/{course}', 'show')->name('show-course');
});

Route::controller(NoteController::class)->group(function () {
    Route::get('/notes/{course}/create', 'create');
    Route::post('/notes/store', 'store');
    Route::get('/notes/{note}/delete', 'destroy');
    Route::put('/notes/{note}/edit', 'update');
    Route::get('/notes/{note}', 'show');
});

Route::controller(UserProfileController::class)->group(function () {
    Route::get('/user-profile', 'getUserProfile');
    Route::put('/user-profile/{user}', 'changeUsername');
    Route::put('/user-profile/{user}/change-password', 'changePassword');
    Route::delete('/user-profile/delete', 'deleteProfile');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('/register', 'registerForm');
    Route::post('/register', 'register');
    Route::get('/login', 'loginForm')->name('login');
    Route::post('/login', 'authenticate');
    Route::get('/logout', 'logout');
});
