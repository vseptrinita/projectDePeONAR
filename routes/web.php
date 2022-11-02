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
    return view('mainFolder/home');
});


Route::get('/Narkotika', function () {
    return view('desc/Narkotika');
});

Route::get('/Psikotropika', function () {
    return view('desc/Psikotropika');
});

Route::get('/Prekursor', function () {
    return view('desc/Prekursor');
});

Route::get('/ObatBebasTerbatas', function () {
    return view('desc/ObatBebasTerbatas');
});

Route::get('/ObatBebas', function () {
    return view('desc/ObatBebas');
});

Route::get('/ObatKeras', function () {
    return view('desc/ObatKeras');
});

