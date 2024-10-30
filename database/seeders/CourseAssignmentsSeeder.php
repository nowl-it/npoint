<?php

namespace Database\Seeders;

use App\Models\CourseAssignments;
use Illuminate\Database\Seeder;

class CourseAssignmentsSeeder extends Seeder
{
	public function run()
	{
		CourseAssignments::factory()->createMany([
			['course_id' => 1, 'professor_id' => 1, 'semester' => 'Fall'],
			['course_id' => 2, 'professor_id' => 2, 'semester' => 'Spring'],
			['course_id' => 3, 'professor_id' => 3, 'semester' => 'Fall'],
		]);
	}
}
