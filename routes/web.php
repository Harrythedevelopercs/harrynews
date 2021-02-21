<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\NewsController;

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



Route::get('firstcontroller',[BlogsController::class,'index']);
Route::get('/',[NewsController::class,'index']);
Route::post('serach',[NewsController::class,'search']);
Route::get('sources',[NewsController::class,'sources']);
Route::get('sourcenews/{source}',[NewsController::class,'sourcenews']);
Route::get('newscategory/{cat}',[NewsController::class,'category']);

