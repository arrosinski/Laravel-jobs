<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::view('/', 'home');
Route::view('/contact', 'contact');
//grouped controller routes
Route::controller(JobController::class)->group(function () {
    Route::get('/jobs/', 'index');
    Route::get('/jobs/{job}', 'show');
    Route::get('/jobs/create', 'create');
    Route::post('/jobs', 'store');
    Route::get('/jobs/{job}/edit', 'edit');
    Route::patch('/jobs/{id}/edit', 'update');
    Route::delete('/jobs/{id}/edit', 'destroy');
});

//you can use resource when you have index,show,create,store,edit,update,destroy methods in your controller
//Route::resource('jobs', JobController::class);

