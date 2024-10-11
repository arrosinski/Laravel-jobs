<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job {
    public static function all() :array
    {
        return [
            [
                'id' => 1,
                'title' => 'PHP Developer',
                'description' => 'This is a remote position',
                'salary' => 120000
            ],
            [
                'id' => 2,
                'title' => 'Python Developer',
                'description' => 'This is an on-site position',
                'salary' => 100000
            ],
            [
                'id' => 3,
                'title' => 'Ruby Developer',
                'description' => 'This is a remote position',
                'salary' => 110000
            ],
            [
                'id' => 4,
                'title' => 'Java Developer',
                'description' => 'This is an on-site position',
                'salary' => 90000
            ]
        ];
    }
    public static function find(int $id) :array {
        return Arr::first(Job::all(), fn($job) => $job['id'] == $id);

    }
}
