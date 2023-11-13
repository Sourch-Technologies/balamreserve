<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/main', function () {
    return view('main');
})->name('home');

Route::view('/contact', 'contact')->name('contact');
Route::view('/subdivision', 'Subdivision')->name('subdivision');
Route::view('/about', 'About')->name('about');
Route::view('/Villas', 'Villas')->name('villas');