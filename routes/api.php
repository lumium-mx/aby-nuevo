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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register', 'Api\AuthController@register');
Route::post('testOauth', 'Api\AuthController@testOauth');

//------ Autenticacion con OAuth -------------------------------------->>>>>
// Agregado para poner la ruta de registro de usuarios de OAuth
Route::group(['middleware'=>'auth:api'], function(){

});


Route::group(['middleware' => ['cors']], function () {
    //Rutas a las que se permitirá acceso
    Route::post('oauth/token', 'Api\AuthController@mytoken');
    Route::post('oauth/clients', 'Api\AuthController@mytoken');
});
