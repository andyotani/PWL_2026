<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;


Route::resource('photos', PhotoController::class);

// Home
Route::get('/index', [HomeController::class, 'index']);

// About
Route::get('/about', [AboutController::class, 'about']);

// Articles
Route::get('/articles/{id}', [ArticleController::class, 'articles']);


// Route::get('/hello', function () {
//     return 'Hello Word';
// });
Route::get('/hello', [WelcomeController::class,'hello']);


Route::get('/world', function () {
    return 'World';
});

// Route::get('/welcome', function () {
//     return 'Selamat Datang';
// });
Route::get('/index', [PageController::class,'index']);

// Route::get('/about', function () {
//     return '244107020241 - ANDY OTANI';
// });
route::get('/about', [PageController::class, 'about']);


Route::get('/user/{name}', function ($name) {
 return 'Nama saya '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId){
 return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

// Route::get('/articles/{id}', function ($id){
//   return "Halaman Artikel dengan ID " . $id;
// });
Route::get('/articles/{id}', [PageController::class, 'articles']);

Route::get('/user/{name?}', function ($name='John') {
 return 'Nama saya '.$name;
});


Route::resource('photos', PhotoController::class)->only([
 'index', 'show'
]);
Route::resource('photos', PhotoController::class)->except([
 'create', 'store', 'update', 'destroy'
]);


