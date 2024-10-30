<?php

namespace Database\Factories;

use App\Models\Courses;
use App\Models\Departments;
use Illuminate\Database\Eloquent\Factories\Factory;

class CoursesFactory extends Factory
{
	protected $model = Courses::class;

	public function definition()
	{
		return [
			'course_name' => $this->faker->word(),
			'department_id' => Departments::factory(), // Tạo department mới cho course
		];
	}
}
