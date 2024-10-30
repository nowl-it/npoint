<?php

namespace Database\Seeders;

use App\Models\Courses;
use Illuminate\Database\Seeder;

class CoursesSeeder extends Seeder
{
	public function run()
	{
		Courses::factory()->createMany([
			['course_name' => 'Introduction to Programming', 'credit_hours' => 3, 'department_id' => 1, 'semester' => 'Fall'],
			['course_name' => 'Calculus I', 'credit_hours' => 4, 'department_id' => 2, 'semester' => 'Spring'],
			['course_name' => 'Physics I', 'credit_hours' => 4, 'department_id' => 3, 'semester' => 'Fall'],
		]);
	}
}
