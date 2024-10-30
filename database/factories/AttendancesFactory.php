<?php

namespace Database\Factories;

use App\Models\Attendances;
use App\Models\Enrollments;
use Illuminate\Database\Eloquent\Factories\Factory;

class AttendancesFactory extends Factory
{
	protected $model = Attendances::class;

	public function definition()
	{
		return [
			'enrollment_id' => Enrollments::factory(), // Tạo enrollment mới cho attendance
			'attendance_date' => $this->faker->date(),
			'status' => $this->faker->randomElement(['present', 'absent', 'late']),
		];
	}
}
