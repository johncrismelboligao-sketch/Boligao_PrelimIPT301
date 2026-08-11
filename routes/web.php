<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/tutorials', function () {
    return view('authors');
});

Route::get('/about', function () {
    return view('books');
});

Route::get('/articles', function () {
    return view('contact');
});
