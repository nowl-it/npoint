<?php

namespace Database\Seeders;

use App\Models\Enrollments;
use Illuminate\Database\Seeder;

class EnrollmentsSeeder extends Seeder
{
	public function run()
	{
		Enrollments::factory()->createMany([
			['student_id' => 1, 'course_id' => 1, 'enrollment_date' => '2024-09-01'],
			['student_id' => 2, 'course_id' => 2, 'enrollment_date' => '2024-09-01'],
			['student_id' => 3, 'course_id' => 3, 'enrollment_date' => '2024-09-01'],
		]);
	}
}
