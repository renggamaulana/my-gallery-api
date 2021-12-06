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

Route::get('pictures', function () {
    return response()->json([
        "message" => "GET method success"
    ]);
});

Route::post('picture', function () {
    return response()->json([
        "message" => "POST method success"
    ]);
});

Route::put('picture/{id}', function ($id) {
    return response()->json([
        "message" => "PUT method success with an id " . $id
    ]);
});

Route::delete('picture/{id}', function ($id) {
    return response()->json([
        "message" => "DELETE method success with an id " . $id
    ]);
});
