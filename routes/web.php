<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


// routes/web.php
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/service',function(){
    return view('website.service');
});
Route::get('/australia',function(){
    return view('website.australia');
});
Route::get('/aboutus',function(){
    return view('website.aboutus');
});
Route::get('/blog',function(){
    return view('website.blog');
});
Route::get('/ielts',function(){
    return view('website.ielts');
});
Route::get('/pte',function(){
    return view('website.pte');
});
Route::get('/pte',function(){
    return view('website.contactus');
});

