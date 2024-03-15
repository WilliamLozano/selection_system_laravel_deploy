<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\ApiOcupacionController;

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

Route::get('/ocupaciones',[ApiOcupacionController::class,'index']);
Route::post('/ocupacion',[ApiOcupacionController::class,'store']);
Route::get('/ocupacion/{id}',[ApiOcupacionController::class,'getById']);
// Route::post('/ocupaciones',[UserController::class, 'store'])
