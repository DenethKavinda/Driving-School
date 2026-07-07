<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/Packages', function () {
    return view('packages');
});

Route::get('/Gallery', function () {
    return view('gallery');
});

Route::get('/About', function () {
    return view('about');
});

Route::get('/Contact', function () {
    return view('contact');
});

Route::get('/PracticeExam', function () {
    return view('practice-exam');
});

Route::get('/Feedback', function () {
    return view('feedback');
});
