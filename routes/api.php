<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;


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

Route::get('/pictures', [BookController::class, 'get']);

Route::post('/picture', [BookController::class, 'post']);

Route::put('/picture/{id}', [BookController::class, 'put']);

Route::delete('/picture/{id}', [BookController::class, 'delete']);
