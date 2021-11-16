<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EditionController;
use App\Http\Controllers\EmployerController;

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
Route::get("/registro", [PagesController::class, "viewRegister"])->name('page.register');
Route::post("/register", [AuthController::class, "register"])->name('register');
Route::get("/login", [PagesController::class, "viewLogin"])->name('login');
Route::post("/login", [AuthController::class, "login"])->name('auth.login');
Route::get("/logout", [AuthController::class, "logout"])->name('logout');
// Route::resource('course', CourseController::class)->names('course');

Route::middleware('auth:web')->group(function () {

    Route::get("/dashboard", [PagesController::class, "viewDashboard"])->name('view.dashboard');
    Route::get("/perfil", [PagesController::class, "viewProfile"])->name('view.profile');
    Route::get("/perfil/update", [PagesController::class, "viewUpdateProfile"])->name('show.edit.profile');
    Route::post("/profile/update", [UserController::class, "update"])->name('update.profile');

    Route::get("/cursos", [PagesController::class, "viewCourses"])->name('view.courses');
    Route::resource('course', CourseController::class)->names('course');

    Route::get("/empleados", [PagesController::class, "viewEmployers"])->name('view.employers');
    Route::resource('employer', EmployerController::class)->names('employer');

    Route::get("/ediciones", [PagesController::class, "viewEditions"])->name('view.editions');
    Route::resource('edition', EditionController::class)->names('edition');


    Route::get("/user/trained", [UserController::class, "listOfTrainedUsers"])->name('list.trained.user');
    Route::get("/courses/list", [UserController::class, "listCourses"])->name('list.courses');

});
