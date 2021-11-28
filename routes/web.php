<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controller\UserController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Rout::group(['middleware'=>['checkingLoginstatus']],function(){
Route::view('/add','add')->middleware('checkingLoginstatus');



Route::get('/employee','App\Http\Controllers\UserController@viewtable')->middleware('checkingLoginstatus');
Route::post('/delete','App\Http\Controllers\UserController@delete')->middleware('checkingLoginstatus');
Route::post('/logout','App\Http\Controllers\UserController@logout')->middleware('checkingLoginstatus');
Route::post('/addemployee','App\Http\Controllers\UserController@addemployee')->middleware('checkingLoginstatus');
Route::post('/edittake','App\Http\Controllers\UserController@edittake')->middleware('checkingLoginstatus');
Route::post('/editvalue','App\Http\Controllers\UserController@editvalue')->middleware('checkingLoginstatus');
// });
// Rout::middleware(['checkingLogin'])->group(function(){
    Route::post('login','App\Http\Controllers\UserController@login')->middleware('checkingLogin');
    Route::view('/','login')->middleware('checkingLogin');
    Route::view('/register','register')->middleware('checkingLogin');
    Route::post('register','App\Http\Controllers\UserController@add')->middleware('checkingLogin');
// });