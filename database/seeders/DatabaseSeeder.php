<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 */
	public function run(): void
	{
		$this->call([
			DepartmentsSeeder::class,
			ProfessorsSeeder::class,
			StudentsSeeder::class,
			CoursesSeeder::class,
			EnrollmentsSeeder::class,
			AttendancesSeeder::class,
			CourseAssignmentsSeeder::class,
		]);
	}
}
