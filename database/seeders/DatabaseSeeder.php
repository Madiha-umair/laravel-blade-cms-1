<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Skill;
use App\Models\Project;
use App\Models\Qualification;
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
        Skill::truncate();
        Project::truncate();
        Qualification::truncate();

        User::factory()->count(2)->create();
        Skill::factory()->count(3)->create();
        Project::factory()->count(4)->create();
        Qualification::factory()->count(4)->create();

    }
}