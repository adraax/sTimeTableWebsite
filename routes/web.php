<?php

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

Route::get('/', ['as' => 'home', function () {
    return view('home');
}]);

Route::get('/wiki/installation', function () {
    return view('wiki.install');
})->name('wiki.installation');

Route::get('/wiki/connection', function () {
    return view('construction');
})->name('wiki.connection');

Route::get('/wiki/timetable', function () {
    return view('construction');
})->name('wiki.timetable');

Route::resource('user', 'UserController');
Route::resource('bug', 'BugController', ['except' => ['edit', 'destroy']]);
Route::resource('comment', 'CommentController', ['except' => ['index', 'create', 'destroy', 'show', 'edit', 'update']]);


Auth::routes();
