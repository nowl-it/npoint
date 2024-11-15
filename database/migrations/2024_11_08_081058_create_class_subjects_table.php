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
		Schema::create('class_subjects', function (Blueprint $table) {
			$table->id('class_subject_id')->primary();
			$table->foreignId('class_id')->constrained('classes', 'class_id')->onDelete('cascade');
			$table->foreignId('subject_id')->constrained('subjects', 'subject_id')->onDelete('cascade');
			$table->foreignId('professor_id')->constrained('professors', 'professor_id')->onDelete('cascade');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('class_subjects');
	}
};