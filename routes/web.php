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

Route::get('/home', function () {
    return "Route home";
});

Route::view('/users', 'users', ['nama' => 'dani','id' => 12]);

// Route::get('users/{id?}/{nama?}', function ($id = 0, $nama = "kosong") {
//     return "User ".$id. " Nama : ". $nama;
// })->where(['nama' => '[A-Za-z]+']);

// Route::get('users/name/id/home/.../.../.../{id}', function ($id) {
//     return "Users id = ".$id;
// })->name('users');

// Route::name('admin.')->group(function () {
//     Route::get('users/{id}', function ($id) {
//         return "Users id = " . $id;
//     })->name('users');
//     Route::get('home/{id}', function ($id) {
//     });
//     Route::get('dashboard/{id}', function ($id) {
//     });
// });

Route::middleware('throttle:5,1')->group(function () {
    Route::get('users/{id}', function ($id) {
        return "Users id = ".$id;
    });
});


Route::fallback(function () {
    return "Route yang dituju tidak ada";
});
