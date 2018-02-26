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

Route::get('/', function () {
    return view('pages.index');
});
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/signin', function () {
    return view('pages.signin');
});
Route::get('/signup', function () {
    return view('pages.signup');
});
Route::post('/signup', function () {

    $data = request() -> all();

    echo " Sign Up Success ";
});
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::post('/contact', function () {

    $data = request() -> all();

    echo " Email: " . $data['email'] . "<br>";
    echo " Subject: " . $data['subject'] . "<br>";
    echo " Body: " . $data['body'];
});
Route::get('/logout', function () {
    return view('pages.logout');
});
Route::get('/viewmessage', function () {
    return view('pages.viewmessage');
});
Route::get('/message', function () {
    return view('pages.message');
});
