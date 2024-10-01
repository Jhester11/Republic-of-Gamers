<?php

use App\Http\Controllers\LabExamination\Lab1Controller;
use Illuminate\Support\Facades\Route;



use App\Http\Controllers\OrderController;

Route::controller(Lab1Controller::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/products', 'product');
    Route::get('/blog', 'blog');
    Route::get('/about-us', 'about');
    Route::get('/contact', 'contact');
});
