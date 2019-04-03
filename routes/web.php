<?php

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



Route::post('/contact-us',    'Controller@contact_us')   ->name('contact_us');
Route::get('/in_app',    'Controller@in_app')   ->name('instaapp');
Route::get('/',    'Controller@home')   ->name('home');
Auth::routes();

