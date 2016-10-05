<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSchoolsTable extends Migration {

	public function up()
	{
		Schema::create('schools', function(Blueprint $table) {
			$table->increments('schoolID');
			$table->string('schoolName', 50);
			$table->string('schoolCity', 50);
			$table->string('schoolState', 2);
			$table->text('schoolLogo');
			$table->string('schoolLogoWidth', 2);
			$table->text('schoolGmapsLink');
			$table->string('schoolMajor', 50);
			$table->string('schoolGPA', 4);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('schools');
	}
}