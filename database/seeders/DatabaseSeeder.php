<?php

namespace Database\Seeders;

use App\Models\Employer;
use App\Models\Job;
use App\Models\Tag;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         User::factory(10)->create();
         Job::factory(20)->create();
         Employer::factory(10)->create();
         //Tag::factory(10)->create();

//        User::factory()->create([
//            'first_name' => 'John',
//            'last_name' => 'Doe',
//            'email' => 'test@example.com',
//        ]);
    }
}
