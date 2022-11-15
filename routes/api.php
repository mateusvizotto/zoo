<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ZoologicoController;
use App\Http\Controllers\JaulaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/zoologicos', [ZoologicoController::class, 'index']);
Route::post('/zoologicos', [ZoologicoController::class, 'store']);
Route::get('/zoologicos/{id}', [ZoologicoController::class, 'show']);

Route::get('/jaulas', [JaulaController::class, 'index']);
Route::post('/jaulas', [JaulaController::class, 'store']);
Route::get('/jaulas/{id}', [JaulaController::class, 'show']);