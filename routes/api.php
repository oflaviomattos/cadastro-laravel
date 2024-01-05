<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Usuario;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::prefix('v1')->group(function(){
    Route::get('lista', function (){
        return Usuario::listar(10);
    });

    Route::post('cadastra', "\App\Http\Controllers\API\Usuario@salvar");

    Route::post('atualiza/{id}', "\App\Http\Controllers\API\Usuario@atualizar");
});
