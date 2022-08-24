<?php

use App\Http\Controllers\ActualiteController;
use App\Http\Controllers\AgroController;
use App\Http\Controllers\BiologieController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\MpcController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\registrationController;
use App\Http\Controllers\ScienceController;
use App\Http\Controllers\StiController;
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
Route::get('login',[loginController::class,"index"])->name('login');
Route::get('registration',[RegistrationController::class,"index"])->name('registration');
Route::post('registration',[RegistrationController::class,"index"])->name('registration');
Route::get('agronomie',[AgroController::class,"index"])->name('agronomie');
Route::get('biologie',[BiologieController::class,"index"])->name('biologie');
Route::get('mpc',[MpcController::class,"index"])->name('mpc');
Route::get('sti',[StiController::class,"index"])->name('sti');
Route::get('news',[NewsController::class,"index"])->name('news');

Route::resource("posts", PostController::class);
