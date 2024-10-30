<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class  extends Migration
{
	public function up()
	{
		Schema::create('course_assignments', function (Blueprint $table) {
			$table->id('assignment_id');
			$table->foreignId('course_id')->constrained('courses', "course_id")->onDelete('cascade');
			$table->foreignId('professor_id')->nullable()->constrained('professors', "professor_id")->onDelete('set null');
			$table->string('semester', 10)->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::dropIfExists('course_assignments');
	}
};
