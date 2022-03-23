<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\EventController;
use App\Http\Middleware\IsAdminMiddleware;
use GuzzleHttp\Middleware;
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

Route::get('/', [Controller::class, 'getLandingPage'])->name('getLandingPage');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/register', [RegisterController::class, 'getRegistrationPage'])->name('register');

Route::get('/login', [LoginController::class, 'getLoginPage'])->name('login');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => IsAdminMiddleware::class], function () {
    Route::get('/admin/dashboard', [Controller::class, 'getAdminDashboard'])->name('getAdminDashboard');
    Route::get('/admin/create-event', [EventController::class, 'getCreateEventPage'])->name('getCreateEventPage');
    Route::post('/admin/create-event', [EventController::class, 'createEvent'])->name('createEvent');
    Route::get('/admin/update-event/{id}', [EventController::class, 'getEventById'])->name('getEventById');
    Route::patch('/admin/update-event/{id}', [EventController::class, 'updateEvent'])->name('updateEvent');
    Route::delete('/admin/delete-event/{id}', [EventController::class, 'deleteEvent'])->name('deleteEvent');
});
