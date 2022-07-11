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

Route::get('/user', 'Api\userController@index');
Route::post('/user/store', 'Api\userController@store');
Route::get('/user/{id}', 'Api\userController@detail');
Route::post('/user/update/{id}', 'Api\userController@update');
Route::delete('/user/destroy/{id}', 'Api\userController@destroy');

Route::get('/permission', 'Api\permissionController@index');
Route::post('/permission/store', 'Api\permissionController@store');
Route::get('/permission/{id}', 'Api\permissionController@detail');
Route::post('/permission/update/{id}', 'Api\permissionController@update');
Route::delete('/permission/destroy/{id}', 'Api\permissionController@destroy');

Route::get('/role', 'Api\roleController@index');
Route::post('/role/store', 'Api\roleController@store');
Route::get('/role/{id}', 'Api\roleController@detail');
Route::post('/role/update/{id}', 'Api\roleController@update');
Route::delete('/role/destroy/{id}', 'Api\roleController@destroy');

Route::get('/region', 'Api\regionController@index');
Route::post('/region/store', 'Api\regionController@store');
Route::get('/region/{id}', 'Api\regionController@detail');
Route::post('/region/update/{id}', 'Api\regionController@update');
Route::delete('/region/destroy/{id}', 'Api\regionController@destroy');

Route::get('/store', 'Api\storeController@index');
Route::post('/store/store', 'Api\storeController@store');
Route::get('/store/{id}', 'Api\storeController@detail');
Route::post('/store/update/{id}', 'Api\storeController@update');
Route::delete('/store/destroy/{id}', 'Api\storeController@destroy');

Route::get('/permission_role', 'Api\permissionRoleController@index');
Route::post('/permission_role/store', 'Api\permissionRoleController@store');
Route::get('/permission_role/{permission_id}', 'Api\permissionRoleController@detail');
Route::post('/permission_role/update/{id}', 'Api\permissionRoleController@update');
Route::delete('/permission_role/destroy/{id}', 'Api\permissionRoleController@destroy');

Route::get('/role_user', 'Api\roleUserController@index');
Route::post('/role_user/store', 'Api\roleUserController@store');
Route::get('/role_user/{id}', 'Api\roleUserController@detail');
Route::post('/role_user/update/{id}', 'Api\roleUserController@update');
Route::delete('/role_user/destroy/{id}', 'Api\roleUserController@destroy');

