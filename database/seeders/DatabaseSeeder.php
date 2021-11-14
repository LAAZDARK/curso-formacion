<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Course;
use App\Models\Edition;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Course::truncate();
        Edition::truncate();

        User::factory(20)->create();
        Course::factory(20)->create();
        Edition::factory(20)->create();
    }
}
