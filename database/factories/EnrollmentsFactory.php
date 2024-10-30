<?php

namespace Database\Factories;

use App\Models\Enrollments;
use App\Models\Students;
use App\Models\Courses;
use Illuminate\Database\Eloquent\Factories\Factory;

class EnrollmentsFactory extends Factory
{
	protected $model = Enrollments::class;

	public function definition()
	{
		return [
			'student_id' => Students::factory(), // Tạo student mới cho enrollment
			'course_id' => Courses::factory(), // Tạo course mới cho enrollment
		];
	}
}
