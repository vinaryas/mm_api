<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('adminlte::auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user', 'UserController@index')->name('user.index');
Route::post('/user', 'UserController@store')->name('user.store');

Route::get('/role', 'RoleController@index')->name('role.index');
Route::post('/role', 'RoleController@store')->name('role.store');

Route::get('/region', 'RegionController@index')->name('region.index');
Route::post('/region', 'RegionController@store')->name('region.store');

Route::get('/permission', 'PermissionController@index')->name('permission.index');
Route::post('/permission', 'PermissionController@store')->name('permission.store');

Route::get('/permission_role', 'PermissionRoleController@index')->name('permission_role.index');
Route::post('/permission_role', 'PermissionRoleController@store')->name('permission_role.store');

Route::get('/store', 'StoreController@index')->name('store.index');
Route::post('/store', 'StoreController@store')->name('store.store');

Route::get('/role_user', 'RoleUserController@index')->name('role_user.index');
Route::post('/role_user', 'RoleUserController@store')->name('role_user.store');

Route::get('/aplikasi', 'AplikasiController@index')->name('aplikasi.index');
Route::post('/aplikasi', 'AplikasiController@store')->name('aplikasi.store');

Route::get('/user_store', 'userStoreController@index')->name('user_store.index');
Route::post('/user_store', 'userStoreController@store')->name('user_store.store');

