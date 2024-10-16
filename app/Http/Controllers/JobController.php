<?php

namespace App\Http\Controllers;

use App\Models\Job;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::with('employer')->latest()->simplePaginate(3);

        return view('jobs.index',
            [
                'jobs' => $jobs,
            ]);
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function show(Job $job)
    {
        return view('jobs.show', ['job' => $job]);
    }

    public function store()
    {
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
    }

    public function edit(Job $job)
    {
        return view('jobs.edit', ['job' => $job]);

    }

    public function update($id)
    {
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
    }

    public function destroy($id)
    {
        $job = Job::findOrFail($id);
        $job->delete();
        return redirect('/jobs');
    }
}
