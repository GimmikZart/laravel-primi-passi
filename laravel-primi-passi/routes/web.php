<?php

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
    return view('jumbotron');
});

Route::get('/jumbotron', function () {
    return view('jumbotron');
});

Route::get('/powerful', function () {
    return view('powerful');
});

Route::get('/learnandgrow', function () {
    return view('learnandgrow');
});

Route::get('/customers', function () {
    return view('customers');
});
