<?php

namespace Database\Seeders;

use App\Models\Departments;
use Illuminate\Database\Seeder;

class DepartmentsSeeder extends Seeder
{
	public function run()
	{
		Departments::factory()->createMany([
			['department_name' => 'Computer Science', 'faculty' => 'Dr. John Doe'],
			['department_name' => 'Mathematics', 'faculty' => 'Dr. Jane Smith'],
			['department_name' => 'Physics', 'faculty' => 'Dr. Albert White'],
		]);
	}
}
