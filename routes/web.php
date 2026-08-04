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
Route::get('/projects', function () {
    return view('projects');
});
Route::get('/projects/{slug}', function ($slug) {
    return view('projects.' . $slug);
});
Route::get('/linkedin-cover', function () {
    return view('linkedin-cover');
});
Route::get('/professional', function () {
    return view('home');
});
