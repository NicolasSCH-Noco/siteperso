<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\TutorielController;

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
    return view('index');
})->name('accueil');

Route::get('/home', function()
{
    return view('auth.home');
})->name('dashboard');

Route::get('/contact', function()
{
    return view('contact');
})->name('contact');

Route::get('/cv', function()
{
    return view('cv');
})->name('cv');

Route::resource('articles', ArticleController::class);
Route::resource('tutoriels', TutorielController::class);
