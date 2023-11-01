<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['namespaces' => 'App\Http\Controllers'], function () {
    Route::get('api_pendidikan', 'ApiPendidikanController@getAll');
    Route::get('api_pendidikan/{id}', 'ApiPendidikanController@getPen');
    Route::post('api_pendidikan', 'ApiPendidikanController@createPen');
    Route::put('api_pendidikan/{id}', 'ApiPendidikanController@updatePen');
    Route::delete('api_pendidikan/{id}', 'ApiPendidikanController@deletePen');
});
// Route::namespace('App\Http\Controllers')->group(function () {
//     Route::get('api_pendidikan', 'ApiPendidikanController@getAll');
//     Route::get('api_pendidikan/{id}', 'ApiPendidikanController@getPen');
//     Route::post('api_pendidikan', 'ApiPendidikanController@createPen');
//     Route::put('api_pendidikan/{id}', 'ApiPendidikanController@updatePen');
//     Route::delete('api_pendidikan/{id}', 'ApiPendidikanController@deletePen');
// });
