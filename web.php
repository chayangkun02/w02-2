<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('gis');
});

Route::get('/gis', function () {
    return view('gis');
});

Route::get('/bio', function () {
    return view('bio');
});

Route::get('/assignment', function () {
    return view('assignment');
});