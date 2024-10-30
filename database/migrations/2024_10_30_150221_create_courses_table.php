<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	public function up()
	{
		Schema::create('courses', function (Blueprint $table) {
			$table->id('course_id');
			$table->string('course_name', 100);
			$table->integer('credit_hours');
			$table->foreignId('department_id')->nullable()->constrained('departments', "department_id")->onDelete('set null');
			$table->string('semester', 10)->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::dropIfExists('courses');
	}
};
