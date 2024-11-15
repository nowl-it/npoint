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
		Schema::create('schedules', function (Blueprint $table) {
			$table->id('schedule_id');
			$table->foreignId('professor_id')->constrained('professors', 'professor_id')->onDelete('cascade'); // Liên kết giảng viên
			$table->foreignId('class_subject_id')->constrained('class_subjects', 'class_subject_id')->onDelete('cascade'); // Liên kết lớp và môn học
			$table->date('date'); // Ngày dạy
			$table->time('start_time'); // Thời gian bắt đầu
			$table->time('end_time'); // Thời gian kết thúc
			$table->string('location')->nullable(); // Phòng học hoặc địa điểm (nếu có)
			$table->text('note')->nullable(); // Ghi chú (nếu có)
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('subject_calendars');
	}
};
