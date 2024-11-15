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
		Schema::create('subjects', function (Blueprint $table) {
			$table->id('subject_id')->primary();
			$table->string('subject_name');
			$table->text('description')->nullable();

			$table->integer('total_hours');
			$table->integer('hours_per_session');

			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('subjects');
	}
};
