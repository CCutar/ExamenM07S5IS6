<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AtletaController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/clubs/{club}/atletas', [AtletaController::class, 'index']);
Route::get('/clubs/{club}/atletas/{atleta}', [AtletaController::class, 'show']);
Route::post('/clubs/{club}/atletas', [AtletaController::class, 'store']);
Route::put('/clubs/{club}/atletas/{atleta}', [AtletaController::class, 'update']);
Route::delete('/clubs/{club}/atletas/{atleta}', [AtletaController::class, 'destroy']);
