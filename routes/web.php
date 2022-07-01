<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController; 
use App\Http\Controllers\AboutController; 
use App\Http\Controllers\ArticleController; 

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

// Practicum 

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/about', [AboutController::class, 'about'])->name('about');
Route::get('/contact-us', [ContactController::class, 'contact'])->name('contact-us');
Route::get('/my-account', [MyAccountController::class, 'myaccount'])->name('my-account');


Route::get('/articles', [ArticleController::class, 'articles($id)']);


