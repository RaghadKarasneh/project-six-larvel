<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WallProject;

use App\Http\Controllers\AuthController;

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



Route::view("show","register");
Route::get('/', [WallProject::class, 'home']); 
Route::get('logout', [WallProject::class, 'logout'])->name('logout');
Route::get('/navbar',[WallProject::class,'showNavbar']);
Route::get('/home',[WallProject::class,'showHomePage']);
Route::get('/footer',[WallProject::class,'showFooter']);
Route::get('/single-service/id/{id}',[WallProject::class,'singleService']);
Route::get('/about-us',[WallProject::class,'showAboutUs']);





Route::get('/info/{id}',[WallProject::class, 'showing']);
Route::get('/update-info/id/{id}',[WallProject::class,'updateInfo']);
Route::put('/update/id/{id}',[WallProject::class,'update_i']);

Route::get('/add',[WallProject::class,'addvol']);
Route::put('/added',[WallProject::class,'saveInfo']);




Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [AuthController::class, 'dashboard']); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');