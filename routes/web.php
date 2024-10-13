<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.home');
});


Route::get('/lainnya', function () {
    return view('home.lainnya');
});



Route::get('/list', function () {
    return view('template.list');
});

Route::get('/noveladd', function () {
    return view('profile.novelAdd');
});

Route::get('/search', function () {
    return view('home.search');
});

Route::get('/account', function () {
    return view('profile.profileAccount');
});


Route::get('/profile', function () {
    return view('search.profile');
});


Route::get('/book', function () {
    return view('novel');
});


Route::get('/create', function(){
    return view('create.book');
});

Route::get('/login', function(){
    return view('create.login');
});


Route::get('/user', function(){
    return view('create.user');
});
