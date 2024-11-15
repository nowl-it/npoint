<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	/**
	 * Run the migrations.
	 */
	public function up(): void
	{
		Schema::create('professors', function (Blueprint $table) {
			$table->id('professor_id')->primary();
			$table->string('first_name');
			$table->string('last_name');
			$table->string('email')->unique();
			$table->string('phone')->nullable();
			$table->string('photo')->nullable();
			$table->date('birth_date')->nullable();
			$table->string('address')->nullable();
			$table->foreignId('account_id')->constrained('accounts', 'account_id')->onDelete('cascade');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('professors');
	}
};
