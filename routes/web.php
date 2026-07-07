<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Home Page[cite: 4]
Route::get('/', function () {
    return Inertia::render('Users/Home');
});

// Packages Page[cite: 3, 9]
Route::get('/Packages', function () {
    return Inertia::render('Users/Packages');
});

// Gallery Page[cite: 3, 8]
Route::get('/Gallery', function () {
    return Inertia::render('Users/Gallery');
});

// About Us Page[cite: 3, 5]
Route::get('/About', function () {
    return Inertia::render('Users/About');
});

// Contact Us Page[cite: 3, 6]
Route::get('/Contact', function () {
    return Inertia::render('Users/Contact');
});

// Practice Exam Page[cite: 4, 10]
Route::get('/PracticeExam', function () {
    return Inertia::render('Users/PracticeExam');
});

// Share Feedback Page[cite: 4, 7]
Route::get('/Feedback', function () {
    return Inertia::render('Users/Feedback');
});




require __DIR__ . '/auth.php';
