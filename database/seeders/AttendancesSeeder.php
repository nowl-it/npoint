<?php

namespace Database\Seeders;

use App\Models\Attendances;
use Illuminate\Database\Seeder;

class AttendancesSeeder extends Seeder
{
	public function run()
	{
		Attendances::factory()->createMany([
			['enrollment_id' => 1, 'attendance_date' => '2024-09-02', 'status' => 'present'],
			['enrollment_id' => 1, 'attendance_date' => '2024-09-03', 'status' => 'absent'],
			['enrollment_id' => 2, 'attendance_date' => '2024-09-02', 'status' => 'present'],
			['enrollment_id' => 3, 'attendance_date' => '2024-09-02', 'status' => 'late'],
		]);
	}
}
