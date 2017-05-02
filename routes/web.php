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

Route::get('/mail', 'HomeController@mail');

Route::get('/wiki/installation', function () {
    return view('wiki.install');
})->name('wiki.installation');

Route::get('/wiki/connection', function () {
    return view('wiki.connection');
})->name('wiki.connection');

Route::get('/wiki/timetable', function () {
    return view('wiki.timetable');
})->name('wiki.timetable');

Route::get('/wiki/event', function () {
    return view('wiki.event');
})->name('wiki.event');

Route::get('/wiki/today', function () {
    return view('wiki.today');
})->name('wiki.today');

Route::resource('user', 'UserController');
Route::get('/bug/closed', 'BugController@closed')->name('bug.closed');
Route::resource('bug', 'BugController', ['except' => ['destroy']]);
Route::resource('comment', 'CommentController', ['except' => ['index', 'create', 'show']]);
Route::delete('/comment/{id}/hard', 'CommentController@hardDestroy')->name('comment.hardDelete');

Route::get('/error', 'ErrorMessageController@index')->name('error');
Route::get('/error/add', 'ErrorMessageController@add')->name('error.add');
Route::post('/error', 'ErrorMessageController@store')->name('error.save');

Auth::routes();

Route::get('/sparkpost', function () {
    Mail::send('emails.test', [], function ($message) {
        $message
            ->from('team-pluto@mail.adraax.eu', 'Team Pluto')
            ->to('merlin.olivier71@gmail.com', 'Adraax')
            ->subject('From SparkPost with ❤');
    });
});
