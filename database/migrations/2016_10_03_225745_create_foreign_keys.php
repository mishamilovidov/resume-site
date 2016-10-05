<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('jobs', function(Blueprint $table) {
			$table->foreign('employerID')->references('employerID')->on('employers')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('clubs', function(Blueprint $table) {
			$table->foreign('schoolID')->references('schoolID')->on('schools')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('jobs', function(Blueprint $table) {
			$table->dropForeign('jobs_employerID_foreign');
		});
		Schema::table('clubs', function(Blueprint $table) {
			$table->dropForeign('clubs_schoolID_foreign');
		});
	}
}