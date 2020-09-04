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
Route::get('/articles', function () {
    return view('articles',[
        'articles' => App\Article::latest()->get()
    ]);
});
Route::get('/talks', function () {
    return view('talks',[
        'talks' => App\Talks::latest()->get()
    ]);
});
Route::get('/screencast', function () {
    return view('screencast',[
        'screencast' => App\Screencast::latest()->get()
    ]);
});
Route::get('/podcast', function () {
    return view('podcast',[
        'podcasts' => App\Podcast::latest()->get()
    ]);
});
Route::get('/courses', function () {
    return view('course',[
        'courses' => App\Course::latest()->get()
    ]);
});
Route::get('/projects', function () {
    return view('project',[
        'projects' => App\Projects::latest()->get()
    ]);
});
Route::get('/journal', function () {
    return view('journal',[
        'journals' => App\Journal::latest()->get()
    ]);
});
Route::get('/uselink', function () {

    return view('uselink',[
        'uselinks' => App\Uselink::latest()->get()
    ]);
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

