<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmployersTable extends Migration {

	public function up()
	{
		Schema::create('employers', function(Blueprint $table) {
			$table->increments('employerID');
			$table->string('employerName', 50);
			$table->string('employerCity', 50);
			$table->string('employerState', 2);
			$table->text('employerLogo');
			$table->string('employerLogoWidth', 2);
			$table->text('employerGmapsLink');
			$table->timestamps();
			$table->date('employerStartDate');
			$table->date('employerEndDate');
		});
	}

	public function down()
	{
		Schema::drop('employers');
	}
}