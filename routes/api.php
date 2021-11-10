<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\TaskController;
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

// Auth::routes();

// Route::middleware('auth:sanctum')->group( function () {
//     Route::resource('tasks', TaskController::class);
// });


Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);

// URL::forceScheme('https');

Route::middleware(['roleChecker:Admin,Patient,Doctor,Phamacist']);
Route::middleware(['roleChecker:Admin,Patient,Doctor,Phamacist']);
Route::middleware(['roleChecker:Admin,Patient,Doctor,Phamacist']);
Route::middleware(['roleChecker:Admin,Patient,Doctor,Phamacist']);


Route::middleware(['roleChecker:Admin,Patient,Doctor,Phamacist'])->group( function () {
    Route::resource('tasks', TaskController::class);
});
