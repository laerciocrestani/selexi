<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'pt'])) {
        App::setLocale($locale);
        Session::put('locale', $locale);
    }
    return redirect()->back();
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {return view('welcome');})->name('servizi');
Route::get('/test-center', function () {return view('welcome');})->name('test-center');
Route::get('/formazione', function () {return view('welcome');})->name('formazione');
Route::get('/blog', function () {return view('welcome');})->name('blog');
Route::get('/chi-siamo', function () {return view('welcome');})->name('chi-siamo');
Route::get('/credits', function () {return view('welcome');})->name('credits');
Route::get('/eventi', function () {return view('welcome');})->name('eventi');
Route::get('/contatti', function () {return view('welcome');})->name('contatti');

