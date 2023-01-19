<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ReservationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth:sanctum', 'emailverification'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->group(function () {
    Route::post('reservations', [ReservationController::class, 'store']);
    Route::get('reservations', [ReservationController::class, 'fetchData']);
    Route::delete('reservations/{id}', [ReservationController::class, 'destroy']);
    Route::get('reservations/{id}', [ReservationController::class, 'show']);
    Route::put('reservations/{id}', [ReservationController::class, 'update']);

});
Route::post('/login', [AuthController::class, 'login']);
