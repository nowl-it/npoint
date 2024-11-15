<?php

namespace Database\Factories;

use App\Models\Accounts;
use Illuminate\Database\Eloquent\Factories\Factory;


class AccountsFactory extends Factory
{
	protected $model = Accounts::class;

	public function definition()
	{
		return [
			'username' => "hoangg" ?? $this->faker->unique()->userName,
			'password' => bcrypt('12345678' ?? 'password'),
			'role' => 'professor',
			'created_at' => now(),
			'updated_at' => now(),
		];
		// return [
		// 	'username' => "admin" ?? $this->faker->unique()->userName,
		// 	'password' => bcrypt('admin123' ?? 'password'),
		// 	'role' => 'admin',
		// 	'created_at' => now(),
		// 	'updated_at' => now(),
		// ];
	}
}
