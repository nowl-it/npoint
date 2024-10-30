<?php

namespace Database\Factories;

use App\Models\Professors;
use App\Models\Departments;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfessorsFactory extends Factory
{
	protected $model = Professors::class;

	public function definition()
	{
		return [
			'full_name' => $this->faker->name(),
			'email' => $this->faker->unique()->safeEmail(),
			'department_id' => Departments::factory(), // Tạo department mới cho professor
		];
	}
}
