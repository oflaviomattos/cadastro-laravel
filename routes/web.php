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




Route::get('/', 'App\Http\Controllers\Usuario@cadastrar')->name('home');
//Route::get('/','Usuario@cadastrar');
Route::post('/salvar','App\Http\Controllers\Usuario@salvar')->name('salvar');

//Route::match(['get','post'], '/',);

//Route::prefix('user')->group();