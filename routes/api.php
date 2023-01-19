<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
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
    Route::post('Devices', [DeviceController::class, 'store']);
    Route::get('FetchData', [DeviceController::class, 'fetchData']);
    Route::delete('delete/{id}', [DeviceController::class, 'destroy']);
    Route::get('show/{id}', [DeviceController::class, 'show']);
    Route::put('update/{id}', [DeviceController::class, 'update']);

    // Route::post('amazings', [AmazingController::class, 'store']);
});
Route::post('/login', [AuthController::class, 'login']);
