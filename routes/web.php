<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/personal', function () {
    return view('personal');
});
Route::get('/stack', function () {
    return view('stack');
});
Route::get('/professional', function () {
    return view('home');
});