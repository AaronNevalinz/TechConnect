<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StartupController;
use App\Http\Controllers\FundingRoundController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\MessageController;
Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [AdminController::class, 'index'])->name('home');
});

Route::get('/admin', function (){
    return inertia('admin/Dashboard');
});

Route::get("/explore-startups", function(){
    return view('explore-startups');
})->name('explore-startups');

Route::get("/jobs", function(){
    return view('jobs');
})->name('jobs');
Route::get("/jobs/1", function(){
    return view('single-job');
})->name('jobs');
Route::get("/single-blog", function(){
    return view('blog');
})->name('blog');

// Entrepreneur Routes
Route::middleware(['auth', 'entrepreneur'])->group(function () {

    // Job Routes
    Route::get('/jobs', [JobController::class, 'index'])->name('jobs.index');
    Route::get('/jobs/create', [JobController::class, 'create'])->name('jobs.create');
    Route::post('/jobs', [JobController::class, 'store'])->name('jobs.store');
    Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])->name('jobs.edit');
    Route::put('/jobs/{job}', [JobController::class, 'update'])->name('jobs.update');
    Route::delete('/jobs/{job}', [JobController::class, 'destroy'])->name('jobs.destroy');
    
    // Startup Routes
    Route::get('/startups', [StartupController::class, 'index'])->name('startups.index');
    Route::get('/startups/create', [StartupController::class, 'create'])->name('startups.create');
    Route::post('/startups', [StartupController::class, 'store'])->name('startups.store');
    Route::get('/startups/{startup}/edit', [StartupController::class, 'edit'])->name('startups.edit');
    Route::put('/startups/{startup}', [StartupController::class, 'update'])->name('startups.update');
    Route::delete('/startups/{startup}', [StartupController::class, 'destroy'])->name('startups.destroy');

    // Funding Round Routes
    Route::get('/funding-rounds', [FundingRoundController::class, 'index'])->name('funding-rounds.index');
    Route::get('/funding-rounds/create', [FundingRoundController::class, 'create'])->name('funding-rounds.create');
    Route::post('/funding-rounds', [FundingRoundController::class, 'store'])->name('funding-rounds.store');
    Route::get('/funding-rounds/{fundingRound}/edit', [FundingRoundController::class, 'edit'])->name('funding-rounds.edit');
    Route::put('/funding-rounds/{fundingRound}', [FundingRoundController::class, 'update'])->name('funding-rounds.update');
    Route::delete('/funding-rounds/{fundingRound}', [FundingRoundController::class, 'destroy'])->name('funding-rounds.destroy');
});

// Message Routes

Route::middleware(['auth'])->group(function () {
    Route::get('/messages', [MessageController::class, 'index'])->name('messages.inbox');
    Route::get('/messages/sent', [MessageController::class, 'sent'])->name('messages.sent');
    Route::get('/messages/create', [MessageController::class, 'create'])->name('messages.create');
    Route::post('/messages', [MessageController::class, 'store'])->name('messages.store');
    Route::get('/messages/{message}', [MessageController::class, 'show'])->name('messages.show');
});


