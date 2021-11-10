<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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
Route::get("registro", [PagesController::class, "viewRegister"])->name('page.register');
Route::post("/register", [AuthController::class, "register"])->name('register');
Route::get("login", [PagesController::class, "viewLogin"])->name('login');
Route::post("/login", [AuthController::class, "login"])->name('auth.login');
Route::get("/logout", [AuthController::class, "logout"])->name('logout');
// Route::resource('course', CourseController::class)->names('course');

Route::middleware('auth:web')->group(function () {

    Route::get("dashboard", [PagesController::class, "viewDashboard"])->name('view.dashboard');

});
