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

Route::get('/user', 'Api\UserController@index');
Route::post('/user/store', 'Api\UserController@store');
Route::get('/user/{id}', 'Api\UserController@detail');
Route::post('/user/update/{id}', 'Api\UserController@update');
Route::delete('/user/destroy/{id}', 'Api\UserController@destroy');

Route::get('/permission', 'Api\PermissionController@index');
Route::post('/permission/store', 'Api\PermissionController@store');
Route::get('/permission/{id}', 'Api\PermissionController@detail');
Route::post('/permission/update/{id}', 'Api\PermissionController@update');
Route::delete('/permission/destroy/{id}', 'Api\PermissionController@destroy');

Route::get('/role', 'Api\RoleController@index');
Route::post('/role/store', 'Api\RoleController@store');
Route::get('/role/{id}', 'Api\RoleController@detail');
Route::post('/role/update/{id}', 'Api\RoleController@update');
Route::delete('/role/destroy/{id}', 'Api\RoleController@destroy');

Route::get('/region', 'Api\RegionController@index');
Route::post('/region/store', 'Api\RegionController@store');
Route::get('/region/{id}', 'Api\RegionController@detail');
Route::post('/region/update/{id}', 'Api\RegionController@update');
Route::delete('/region/destroy/{id}', 'Api\RegionController@destroy');

Route::get('/store', 'Api\StoreController@index');
Route::post('/store/store', 'Api\StoreController@store');
Route::get('/store/{id}', 'Api\StoreController@detail');
Route::post('/store/update/{id}', 'Api\StoreController@update');
Route::delete('/store/destroy/{id}', 'Api\StoreController@destroy');

Route::get('/permission_role', 'Api\PermissionRoleController@index');
Route::post('/permission_role/store', 'Api\PermissionRoleController@store');
Route::get('/permission_role/{permission_id}', 'Api\PermissionRoleController@detail');
Route::post('/permission_role/update/{id}', 'Api\PermissionRoleController@update');
Route::delete('/permission_role/destroy/{id}', 'Api\PermissionRoleController@destroy');

Route::get('/role_user', 'Api\RoleUserController@index');
Route::post('/role_user/store', 'Api\RoleUserController@store');
Route::get('/role_user/{id}', 'Api\RoleUserController@detail');
Route::post('/role_user/update/{id}', 'Api\RoleUserController@update');
Route::delete('/role_user/destroy/{id}', 'Api\RoleUserController@destroy');

Route::get('/aplikasi', 'Api\AplikasiController@index');
Route::post('/aplikasi/store', 'Api\AplikasiController@store');
Route::get('/aplikasi/{id}', 'Api\AplikasiController@detail');
Route::post('/aplikasi/update/{id}', 'Api\AplikasiController@update');
Route::delete('/aplikasi/destroy/{id}', 'Api\AplikasiController@destroy');

Route::get('/user_store', 'Api\UserStoreController@index');
Route::post('/user_store/store', 'Api\UserStoreController@store');
Route::get('/user_store/{id}', 'Api\UserStoreController@detail');
Route::post('/user_store/update/{id}', 'Api\UserStoreController@update');
Route::delete('/user_store/destroy/{id}', 'Api\UserStoreController@destroy');

