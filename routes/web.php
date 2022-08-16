<?php

use App\Http\Controllers\ActualiteController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ScienceController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('contact',[ContactController::class,"index"])->name('contact');
Route::get('actualité',[ActualiteController::class,"index"])->name('actualité');
Route::get('index-2',[IndexController::class,"index"])->name('index-2');
Route::get('science',[ScienceController::class,"index"])->name('science');
