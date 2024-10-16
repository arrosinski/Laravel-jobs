<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
//index
Route::get('/jobs/', [JobController::class, 'index']);
//store
Route::post('/jobs', function () {});
//create
Route::get('/jobs/create', [JobController::class, 'create']);
//edit
Route::get('/jobs/{job}/edit', [JobController::class, 'edit']);
//update
Route::patch('/jobs/{id}/edit', [JobController::class, 'update']);
//destroy
Route::delete('/jobs/{id}/edit', [JobController::class, 'destroy']);
//show
Route::get('/jobs/{job}', [JobController::class, 'show']);

Route::get('/contact', function () {
    return view('contact');
});
