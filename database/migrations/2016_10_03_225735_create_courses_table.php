<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCoursesTable extends Migration {

	public function up()
	{
		Schema::create('courses', function(Blueprint $table) {
			$table->increments('courseID');
			$table->string('courseName', 50);
			$table->text('courseDescription');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('courses');
	}
}