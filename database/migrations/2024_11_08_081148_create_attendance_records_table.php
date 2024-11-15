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
		Schema::create('attendance_records', function (Blueprint $table) {
			$table->id('attendance_record_id')->primary();
			$table->foreignId('class_subject_id')->constrained('class_subjects', 'class_subject_id')->onDelete('cascade');
			$table->date('attendance_date');
			$table->text('general_note')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('attendance_records');
	}
};
