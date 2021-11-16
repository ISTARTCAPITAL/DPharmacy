<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PharmacistController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\TransactionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

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

//auth routes
Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);

//
Route::middleware('auth:sanctum')->group(function () {
    Route::get('patients', [PatientController::class, 'index']);
    Route::get('doctors', [DoctorController::class, 'index']);
    Route::get('pharmacists', [PharmacistController::class, 'index']);

    Route::get('transactions', [TransactionController::class, 'index']);
    Route::get('requests', [RequestController::class, 'index']);
});
