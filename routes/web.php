<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/hello', function () { 
    return 'hello world';
});

Route::get('/world', function () { 
    return 'world';
});

Route::get('/about', function () {
    return 'Nama : Rifqi Sabilillah <br>NIM : 2241760082';
 });

Route::get('/user/rifqi', function($name = 'Rifqi Sabilillah') {
    return 'Nama Saya: ' . $name;
 });

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/articles/{post}/comments/{comment}', function ($commentId) {
    return 'Halaman Artikel ini '."dengan ID ".$commentId;
});

Route::get('/user/{name?}', function ($name='John') { 
    return 'Nama saya '.$name;
});