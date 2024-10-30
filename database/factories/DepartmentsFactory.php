<?php

namespace Database\Factories;

use App\Models\Departments;
use Illuminate\Database\Eloquent\Factories\Factory;

class DepartmentsFactory extends Factory
{
	protected $model = Departments::class;

	public function definition()
	{
		return [
			'department_name' => $this->faker->word(),
			'faculty' => $this->faker->name(),
		];
	}
}
