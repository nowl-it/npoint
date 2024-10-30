<?php

namespace Database\Factories;

use App\Models\CourseAssignments;
use App\Models\Courses;
use App\Models\Professors;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseAssignmentsFactory extends Factory
{
	protected $model = CourseAssignments::class;

	public function definition()
	{
		return [
			'course_id' => Courses::factory(), // Tạo course mới cho course_assignment
			'professor_id' => Professors::factory(), // Tạo professor mới cho course_assignment
		];
	}
}
