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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::prefix('posts')->group(function() {
    Route::get('/','App\Http\Controllers\Post\PostController@index')->name('posts.index');
    Route::get('/create','App\Http\Controllers\Post\PostController@create')->name('posts.create');
    Route::post('/store','App\Http\Controllers\Post\PostController@store')->name('posts.store');
    Route::post('/session','App\Http\Controllers\ArticleController@index')->name('posts.session');
});

Route::resource('articles', 'App\Http\Controllers\ArticleController');
Route::prefix('articles')->group(function(){
    Route::get('/','App\Http\Controllers\ArticleController@index')->name('articles.index')->middleware('article.redirect');
    Route::get('/create','App\Http\Controllers\ArticleController@create')->name('articles.create');
    Route::post('/store','App\Http\Controllers\ArticleController@store')->name('articles.store');
});