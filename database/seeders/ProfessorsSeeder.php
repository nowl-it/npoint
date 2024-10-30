<?php

namespace Database\Seeders;

use App\Models\Professors;
use Illuminate\Database\Seeder;

class ProfessorsSeeder extends Seeder
{
	public function run()
	{
		Professors::factory()->createMany([
			['full_name' => 'Dr. John Doe', 'email' => 'johndoe@example.com', 'phone' => '1234567890', 'department_id' => 1],
			['full_name' => 'Dr. Jane Smith', 'email' => 'janesmith@example.com', 'phone' => '0987654321', 'department_id' => 2],
			['full_name' => 'Dr. Albert White', 'email' => 'albertwhite@example.com', 'phone' => '1122334455', 'department_id' => 3],
		]);
	}
}
