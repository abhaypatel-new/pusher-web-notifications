<?php

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
   
//     return $request->user();
// });
Route::middleware('auth:sanctum')->group(function () {
    Route::post('save_task', [App\Http\Controllers\TaskController::class, 'save_task']);
});
Route::post('/login', [App\Http\Controllers\UserController::class, 'Ulogin']);
