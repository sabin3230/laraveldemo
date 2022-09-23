<?php

use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
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
});

Route::get('/index/{name}', [UserController::class, 'index']);

 Route::get('/call/{name}/{address}', [ServiceController:: class, 'index']);


 Route::resource('user', UserController::class)->only(['index', 'create', 'delete']);

 Route::group(['prefix'=> "services"], function(){
    Route::get('/add', [UserController::class, 'create']);
     Route::get('/edit', [UserController::class, 'edit']);
     Route::get('/update', [UserController::class, 'update']);
     
});

