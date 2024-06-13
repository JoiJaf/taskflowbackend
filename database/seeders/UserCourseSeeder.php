<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\UserCourse;

class UserCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        UserCourse::create(['user_specific_id' => 1, 'course_id' => 1]);
        UserCourse::create(['user_specific_id' => 2, 'course_id' => 1]);
        UserCourse::create(['user_specific_id' => 3, 'course_id' => 1]);
        UserCourse::create(['user_specific_id' => 4, 'course_id' => 1]);

    }
}
