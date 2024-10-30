<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	public function up()
	{
		Schema::create('departments', function (Blueprint $table) {
			$table->id('department_id');
			$table->string('department_name', 100);
			$table->string('faculty', 100)->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::dropIfExists('departments');
	}
};
