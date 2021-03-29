<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GroupApiController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("groups",[GroupApiController::class,'index']);
Route::post("groups/save",[GroupApiController::class,'save']);
Route::put("groups/modify/{id}",[GroupApiController::class,'update']);
Route::delete("groups/remove/{id}",[GroupApiController::class,'delete']);