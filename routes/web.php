<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::view('/', 'home');
Route::view('/contact', 'contact');
Route::get('/jobs/', [JobController::class, 'index']);
Route::post('/jobs', function () {});
Route::get('/jobs/create', [JobController::class, 'create']);
Route::get('/jobs/{job}/edit', [JobController::class, 'edit']);
Route::patch('/jobs/{id}/edit', [JobController::class, 'update']);
Route::delete('/jobs/{id}/edit', [JobController::class, 'destroy']);
Route::get('/jobs/{job}', [JobController::class, 'show']);
