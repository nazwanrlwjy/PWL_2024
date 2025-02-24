<?php
use App\Http\Controllers\Controller;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PhotoController;

Route::get('/greeting', [WelcomeController::class, 'greeting']);

//View 
// Route::get('/greeting', function () {
// 	return view('blog.hello', ['name' => 'Nazwa']);
// });


Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);

Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);

//Poin G
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;

Route::get('/', HomeController::class);  
Route::get('/about', AboutController::class);  
Route::get('/articles/{id}', ArticleController::class);  

/*/poin F
Route::get('/', [PageController::class, 'index']);

Route::get('/about', [PageController::class, 'about']);

Route::get('/articles/{id}', [PageController::class, 'articles']);

Route::get('/hello', [WelcomeController::class,'hello']);

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
    
/*
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

/*
Route::get('/', function () {
    return view('welcome');
});*/
