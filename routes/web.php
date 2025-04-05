<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::get('/home', [AdminController::class, 'index'])->name('home');

Route::get('/admin', function (){
    return inertia('admin/Dashboard');
});

Route::get("/explore-startups", function(){
    return view('explore-startups');
})->name('explore-startups');
