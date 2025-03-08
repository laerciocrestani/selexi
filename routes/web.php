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

Route::get('/', function () {return view('home');})->name('home');
Route::get('/servizi', function () {return view('servizi');})->name('servizi');
Route::get('/formazione', function () {return view('formazione');})->name('formazione');
Route::get('chi-siamo', function () {return view('chi-siamo');})->name('chi-siamo');
Route::get('/partner', function () {return view('partner');})->name('partner');
Route::get('/contatti', function () {return view('contatti');})->name('contatti');
Route::get('/selexi-nel-mondo', function () {return view('selexi-nel-mondo');})->name('selexi-nel-mondo');
Route::get('/blog', function () {return view('blog');})->name('blog');


