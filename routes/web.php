<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/', [App\Http\Controllers\Frontend\HomeController::class, 'home']);

Route::get('/custom-login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm']);

Route::get('/custom-register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegisterForm'])->name('register');


// Route::get('custom-login', 'Auth\LoginController@showLoginForm')->name('custom.login');
// Route::post('custom-login', 'Auth\LoginController@login')->name('custom.login.submit');




//Admin Route
Route::middleware(['auth', 'admin'])->group(function () {
	Route::get('/admin/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');

});




//Author Route
Route::middleware(['auth', 'author'])->group(function () {
	Route::get('/author/dashboard', [App\Http\Controllers\Author\DashboardController::class, 'index'])->name('author.dashboard');

});




//User Route
Route::middleware(['auth', 'user'])->group(function () {
	Route::get('/user/dashboard', [App\Http\Controllers\User\DashboardController::class, 'index'])->name('user.dashboard');

});
