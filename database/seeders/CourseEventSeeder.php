<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\CourseEvent;

class CourseEventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        CourseEvent::create(['id'=> 1,'course_id'=> 1,'event_id'=> 1]);
        CourseEvent::create(['id'=> 2,'course_id'=> 1,'event_id'=> 2]);
        CourseEvent::create(['id'=> 3,'course_id'=> 2,'event_id'=> 3]);
        CourseEvent::create(['id'=> 4,'course_id'=> 2,'event_id'=> 4]);
        CourseEvent::create(['id'=> 5,'course_id'=> 3,'event_id'=> 5]);
        CourseEvent::create(['id'=> 6,'course_id'=> 5,'event_id'=> 6]);
        CourseEvent::create(['id'=> 7,'course_id'=> 4,'event_id'=> 7]);

    }
}
