<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class  extends Migration
{

	public function up()
	{
		Schema::create('attendance', function (Blueprint $table) {
			$table->id('attendance_id');
			$table->foreignId('enrollment_id')->constrained('enrollments', 'enrollment_id')->onDelete('cascade');
			$table->date('attendance_date');
			$table->enum('status', ['present', 'absent', 'late']);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::dropIfExists('attendance');
	}
};
