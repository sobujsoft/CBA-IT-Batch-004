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

Route::get('/sobuj', function () {
    return view('welcome');
});

//Route::view('/habijabi','sobuj');

Route::get('/',function(){
    return view('sobuj');
});

Route::get('/students',function(){
    return view('student.newStudent');
});
