<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// prakterku
Route::get('/salam', function () {
    return"<h1>Salam</h1>";
});

Route::get('/staff/{nama}/{devisi}', function ($nama,$devisi) {
    return 'nama STAff: '.$nama.'<br> dari: '.$devisi;
});

Route::get('/kabar', function () {
    return view('kondisi');    
});
Route::get('/nilai', function () {
    return view('nilai');
});
