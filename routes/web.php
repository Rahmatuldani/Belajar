<?php

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
    return view('welcome');
});

Route::get('users', 'UserController@index');

Route::get('admin/{id}', 'Admin\AdminController@index');

Route::resource('resource', 'ResourceController')->names([
    'index' => 'index',
    'store' => 'store'
])->parameters([
    'resource' => 'id'
]);
