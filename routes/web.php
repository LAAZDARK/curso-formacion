<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\CourseController;

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

Route::get("/", [PagesController::class, "viewHome"])->name('home');
Route::get("dashboard", [PagesController::class, "viewDashboard"])->name('view.dashboard');
Route::get("registro", [PagesController::class, "viewRegister"])->name('view.register');
Route::get("login", [PagesController::class, "viewLogin"])->name('view.login');
// Route::resource('course', CourseController::class)->names('course');
