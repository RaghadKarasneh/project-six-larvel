<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WallProject;
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
Route::post('login', [WallProject::class, 'index'])->name('login');

Route::get('registration', [WallProject::class, 'registration'])->name('register');

Route::post('/home', [WallProject::class, 'home']); 
Route::get('logout', [WallProject::class, 'logout'])->name('logout');
Route::get('/navbar',[WallProject::class,'showNavbar']);
Route::get('/home',[WallProject::class,'showHomePage']);
Route::get('/footer',[WallProject::class,'showFooter']);
Route::get('/single-service/id/{id}',[WallProject::class,'singleService']);
Route::get('/about-us',[WallProject::class,'showAboutUs']);





Route::get('/info/{id}',[WallProject::class, 'showing']);

Route::put('/info/id/{id}',[WallProject::class, 'showing']);
Route::get('/update-info/id/{id}',[WallProject::class,'updateInfo']);
Route::put('/update/id/{id}',[WallProject::class,'update_i']);

Route::put('/add',[WallProject::class,'addvol']);
Route::post('/add',[WallProject::class,'saveInfo']);