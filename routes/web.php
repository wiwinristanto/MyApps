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

Route::get('/home', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about', [
        "name" => "Wiwin Ristanto",
        "email" => "wiwinristanto94@gmail.com",
    
    ]);
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/posts', function () {
    return view('posts');
});
