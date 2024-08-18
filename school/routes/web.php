<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\TeacherController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\GurdianController;

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


// Route::get('/', AuthenticationController::class, '')->name('index')->middleware();


Route::get('/', function () {
    return ("welcome");
})->middleware(['check.admin']);

Route::get('home', function () {
    return view('pages.index');
})->middleware(['check.admin','auth'])->name('home');


Route::get('admin', [AuthenticationController::class, 'newAdmin'])->name('make.admin');
Route::post('admin', [AuthenticationController::class, 'adminStore'])->name('admin.store');
Route::get('login', [AuthenticationController::class, 'login'])->name('login')->middleware(['guest','check.admin']);
Route::post('login', [AuthenticationController::class, 'authenticate'])->name('auth.login')->middleware('guest');
Route::get('logout', [AuthenticationController::class, 'logout'])->name('auth.logout');

Route::resource('teacher', TeacherController::class)->middleware(['auth']);
Route::resource('student', StudentController::class)->middleware(['auth']);
Route::resource('gurdian', GurdianController::class)->middleware(['auth']);