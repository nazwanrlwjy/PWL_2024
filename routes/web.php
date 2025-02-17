<?php

use Illuminate\Support\Facades\Route;

Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
    });
    

Route::get('/articles/{id}', function ($id) {
    return 'Halaman Artikel dengan ID ' . $id;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});


Route::get('/user/{name}', function ($name) {
    return 'Nama saya '.$name;
    });
    

Route::get('/about', function () {
    $nim = '2341760045'; 
    $nama = 'Nazwa Nurul Wijaya'; 
    return "NIM: $nim <br> Nama: $nama";
});

Route::get('/selamat', function () {
    return 'Selamat Datang';
 });
 

Route::get('/world', function () {
    return 'World';
 });
 
Route::get('/hello', function () {
    return 'Hello World';
 });

 
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

Route::get('/', function () {
    return view('welcome');
});
