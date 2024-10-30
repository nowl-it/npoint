<?php

namespace Database\Seeders;

use App\Models\Students;
use Illuminate\Database\Seeder;

class StudentsSeeder extends Seeder
{
	public function run()
	{
		Students::factory()->createMany([
			['full_name' => 'Alice Johnson', 'dob' => '2003-05-12', 'gender' => 'F', 'email' => 'alice@example.com', 'phone' => '1231231231', 'address' => '123 Main St', 'department_id' => 1],
			['full_name' => 'Bob Brown', 'dob' => '2002-03-08', 'gender' => 'M', 'email' => 'bob@example.com', 'phone' => '3213214321', 'address' => '456 Oak St', 'department_id' => 2],
			['full_name' => 'Cathy Green', 'dob' => '2004-07-15', 'gender' => 'F', 'email' => 'cathy@example.com', 'phone' => '2132132132', 'address' => '789 Pine St', 'department_id' => 3],
		]);
	}
}
