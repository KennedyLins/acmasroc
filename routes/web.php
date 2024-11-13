<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('site.home');
});

Route::get('/transparencia', function () {
    return view('site.transparencia');
});

Route::get('/codigo', function () {
    return view('site.codigo');
});

Route::get('/contact', function () {
    return view('site.contact');
});


