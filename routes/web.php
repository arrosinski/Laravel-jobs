<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::view('/', 'home');
Route::view('/contact', 'contact');
Route::controller(JobController::class)->group(function () {
    Route::get('/jobs/', 'index');
    Route::get('/jobs/{job}', 'show');
    Route::post('/jobs', 'store');
    Route::get('/jobs/create', 'create');
    Route::get('/jobs/{job}/edit', 'edit');
    Route::patch('/jobs/{id}/edit', 'update');
    Route::delete('/jobs/{id}/edit', 'destroy');
});
//Route::resource('jobs', JobController::class);

