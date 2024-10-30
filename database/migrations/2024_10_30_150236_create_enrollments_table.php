<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class  extends Migration
{
	public function up()
	{
		Schema::create('enrollments', function (Blueprint $table) {
			$table->id('enrollment_id');
			$table->foreignId('student_id')->constrained('students', "student_id")->onDelete('cascade');
			$table->foreignId('course_id')->constrained('courses', "course_id")->onDelete('cascade');
			$table->date('enrollment_date')->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::dropIfExists('enrollments');
	}
};
