<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;

Route::resource('photos', PhotoController::class);
Route::resource('photos', PhotoController::class)->only([
'index', 'show'
]);

Route::resource('photos', PhotoController::class)->except([
'create', 'store', 'update', 'destroy'
]);

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'about']);
Route::get('/articles/{id}', [ArticleController::class, 'articles']);

Route::get('/greeting', [WelcomeController::class,'greeting']);


// Route::get('/hello', [WelcomeController::class, 'hello']);

// Route::get('/', [PageController::class, 'index']);
// Route::get('/about', [PageController::class, 'about']);
// Route::get(('/articles/{id}'), [PageController::class, 'articles']);


// Route::get('/world', function () {
// return 'World';
// });

// Route::get('/about', function () {
// return 'NIM: 244107020001, Nama: Achmad Nabil Afgareza';
// });

// Route::get('/user/{name}', function ($name) {
// return 'Nama saya '.$name;
// });

// Route::get('/posts/{post}/comments/{comment}', function
// ($postId, $commentId) {
// return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
// });

// Route::get('/articles/{id}', function
// ($articlesId) {
// return 'Halaman Artikel dengan ID '. '<b>'.$articlesId.'</b>';
// });

// Route::get('/user/{name?}', function ($name=null) {
//     return 'Nama saya '.$name;
// });

// Route::get('/user/{name?}', function ($name='John') {
// return 'Nama saya '.$name;
// });