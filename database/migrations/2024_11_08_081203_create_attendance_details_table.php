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
		Schema::create('attendance_details', function (Blueprint $table) {
			$table->id('attendance_detail_id')->primary();
			$table->foreignId('attendance_record_id')->constrained('attendance_records', 'attendance_record_id')->onDelete('cascade');
			$table->foreignId('student_id')->constrained('students', 'student_id')->onDelete('cascade');
			$table->enum('status', ['present', 'absent', 'late', 'excused'])->default('present');
			$table->text('note')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('attendance_details');
	}
};
