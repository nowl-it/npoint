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
		Schema::create('attendance_notes', function (Blueprint $table) {
			$table->id('note_id')->primary();
			$table->foreignId('attendance_detail_id')->constrained('attendance_details', 'attendance_detail_id')->onDelete('cascade');
			$table->text('note');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('attendance_notes');
	}
};
