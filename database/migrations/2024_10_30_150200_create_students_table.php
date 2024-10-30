<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	public function up()
	{
		Schema::create('students', function (Blueprint $table) {
			$table->id('student_id');
			$table->string('full_name', 100);
			$table->date('dob')->nullable();
			$table->char('gender', 1)->nullable();
			$table->string('email', 100)->nullable();
			$table->string('phone', 15)->nullable();
			$table->string('address', 200)->nullable();
			$table->foreignId('department_id')->nullable()->constrained('departments', "department_id")->onDelete('set null');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::dropIfExists('students');
	}
};
