<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;

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


// Route::get('register',[AuthController::class,'getAll']);
Route::post('register', [AuthController::class, 'registerUser']);
Route::post('login', [AuthController::class, 'login']);

Route::prefix('admin')->middleware(['auth.jwt'])->group(function (){
    Route::post('password',[AuthController::class,'changePassword']);
    Route::get('logout',[AuthController::class,'logout']);
    Route::resource('room',RoomController::class);
    Route::get('bookingdetail',[UserController::class,'bookingDetail']);
});

