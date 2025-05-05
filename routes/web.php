<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WelcomeController;

use App\Http\Controllers\KategoriController;

use App\Http\Controllers\UserController;

use App\Http\Controllers\PageController;

use App\Http\Controllers\LevelController;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AboutController;

use App\Http\Controllers\ArticleController;

use App\Http\Controllers\PhotoController;

Route::get('/', function() {
    return view('welcome');
});

Route::get('/level', [levelController::class, 'index']);

Route::get('/kategori', [KategoriController::class, 'index']);

Route::get('/user', [UserController::class, 'index']);

//Route::get('/greeting', function () {
	//return view('blog.hello', ['name' => 'Sitta']);
//});

Route::get('/greeting', [WelcomeController::class, 'greeting']);

Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);

Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);

Route::get('/hello', 
    [HomeController::class,'hello'
]);

Route::get('/about', 
    [AboutController::class,'hello'
]);

Route::get('/articles/{post}', 
    [ArticleController::class,'hello'
]);

Route::get('/SelamatDatang', 
    [PageController::class,'SelamatDatang'
]);

Route::get('/world', function () {
   return 'World';
});

Route::get('/selamatDatang', function () {
   return 'Selamat Datang';
});

 Route::get('/user/{name}', function ($name) {
    return 'Nama saya '.$name;
});    

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
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
