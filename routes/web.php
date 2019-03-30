<?php

use App\NewsTopic;
use App\NewsArticle;
use App\NewsCategory;

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

Route::get('/test', function () {

    $articles = NewsArticle::find(1);
    $topics = NewsTopic::find(1);

    dd($articles->categories()->get(),$topics->categories()->get());
});