<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\DesignerController;


Route::get('/', [NavController::class, 'index']);

Route::get('/characters', [NavController::class, 'characters']);
Route::get('/addCharacter', [NavController::class, 'addCharacter']);
Route::post('/addCharacter', [CharacterController::class, 'store']);
Route::post('deleteCharacter', [CharacterController::class, 'deleteCharacter']);
Route::post('/editCharacter', [NavController::class, 'changeCharacter']);
Route::post('/changeCharacter', [CharacterController::class, 'changeCharacter']);

Route::get('/designers', [NavController::class, 'designers']);
Route::get('/addDesigner', [NavController::class, 'addDesigner']);
Route::post('/addDesigner', [DesignerController::class, 'store']);
Route::post('deleteDesigner', [DesignerController::class, 'deleteDesigner']);
Route::post('/editDesigner', [NavController::class, 'changeDesigner']);
Route::post('/changeDesigner', [DesignerController::class, 'changeDesigner']);

