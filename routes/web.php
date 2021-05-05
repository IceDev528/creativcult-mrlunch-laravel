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

Route::get('/', function () {
    return view('frontend/welcome');
});

Route::get('/24restaurant', function () {
    return view('frontend/24restaurant');
});

Route::get('/widerruf', function () {
    return view('frontend/pages/widerruf');
});

Route::get('/agb', function () {
    return view('frontend/pages/agb');
});

Route::get('/impressum', function () {
    return view('frontend/pages/impressum');
});

Route::get('/datenschutz', function () {
    return view('frontend/pages/datenschutz');
});