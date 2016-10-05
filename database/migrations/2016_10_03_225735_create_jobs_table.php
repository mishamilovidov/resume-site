<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJobsTable extends Migration {

	public function up()
	{
		Schema::create('jobs', function(Blueprint $table) {
			$table->increments('jobID');
			$table->integer('employerID')->unsigned();
			$table->string('jobName', 50);
			$table->text('jobDescription');
			$table->timestamps();
			$table->date('jobStartDate');
			$table->date('jobEndDate');
		});
	}

	public function down()
	{
		Schema::drop('jobs');
	}
}