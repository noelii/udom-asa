<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\IndividualController;
use App\Http\Controllers\ruserController;
use App\Http\Controllers\PredefinedController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\targetController;

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
//     return view('auth.login');
// });

Route::get('/',[HomeController::class,'index']);

Route::get('/login',[HomeController::class,'login'])->name('login');
Auth::routes();
Route::get('/targeti', [targetController::class, 'index'])->name('target');
Route::get('/targeti',[App\Http\Controllers\workgroupController::class, 'Data']);
Route::post('/creategroup',[App\Http\Controllers\creategroupController::class, 'creategroup'])->name('db');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

# USERS ROUTES

Route::resource('users', UserController::class);
Route::resource('admin', AdminController::class);
Route::resource('individual', IndividualController::class);
Route::resource('ruser', ruserController::class);

# CHANGE PASSWORD ROUTES

Route::get('change-password', [App\Http\Controllers\ChangePasswordController::class, 'index'])->name('change');
Route::post('change-password', [App\Http\Controllers\ChangePasswordController::class, 'changePassword']);

# PRE-DEFINED ISSUES ROUTE
Route::resource('p_issue', PredefinedController::class);

