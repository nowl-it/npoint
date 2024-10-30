<?php

namespace Database\Factories;

use App\Models\Students;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentsFactory extends Factory
{
	protected $model = Students::class;

	public function definition()
	{
		return [
			'full_name' => $this->faker->name(),
			'dob' => $this->faker->date(),
		];
	}
}
