<?php

use App\Http\Controllers\AdminLoginController;
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
    return view('welcome');
})->middleware('adminLogin');

Route::get('/LoginPage',[AdminLoginController::class,'LoginPage']);
Route::post('/AdminLoginCheck',[AdminLoginController::class,'AdminLoginCheck']);
Route::get('/AdminLogOut',[AdminLoginController::class,'AdminLogOut']);
