<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJobDescriptionsTable extends Migration {

	public function up()
	{
		Schema::create('job_descriptions', function(Blueprint $table) {
			$table->increments('jobDescriptionID');
			$table->integer('jobID')->unsigned();
			$table->integer('employerID')->unsigned();
			$table->text('jobDescription');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('job_descriptions');
	}
}