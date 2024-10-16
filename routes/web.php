<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->simplePaginate(3);

    return view('jobs.index',
        [
            'jobs' => $jobs,
        ]);
});

Route::post('/jobs', function () {
    request()->validate(
        [
            'title' => ['required', 'min:5'],
            'description' => ['required', 'min:20'],
            'salary' => ['required', 'min:2'],
        ]
    );
    $job = new Job;

    $job->title = request('title');
    $job->description = request('description');
    $job->salary = request('salary');
    $job->employer_id = 1;
    $job->save();

    /*Job::create([
        'title' => request('title'),
        'description' => request('description'),
        'salary' => request('salary'),
        'employer_id' => 1,
    ]);*/

    return redirect('/jobs');
});

Route::get('/jobs/create', function () {
    return view('jobs.create');
});

Route::get('/jobs/{id}/edit', function ($id) {

    $job = Job::find($id);

    return view('jobs.edit', ['job' => $job]);
});

Route::patch('/jobs/{id}/edit', function ($id) {
    request()->validate(
        [
            'title' => ['required', 'min:5'],
            'description' => ['required', 'min:20'],
            'salary' => ['required', 'min:2'],
        ]
    );

    $job = Job::findOrFail($id);

    $job->update(request(['title', 'description', 'salary']));

    return redirect('/jobs/'.$job->id);
});

Route::delete('/jobs/{id}/edit', function ($id) {
    $job = Job::findOrFail($id);
    $job->delete();

    return redirect('/jobs');
});

Route::get('/jobs/{job}', function (Job $job) {
    return view('jobs.show', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});
