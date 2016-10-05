<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExperienceTechnicalSkillsTable extends Migration {

	public function up()
	{
		Schema::create('experience_technical_skills', function(Blueprint $table) {
			$table->increments('etsID');
			$table->timestamps();
			$table->string('etsName', 50);
			$table->text('etsLogo');
			$table->string('etsLogoWidth', 2);
		});
	}

	public function down()
	{
		Schema::drop('experience_technical_skills');
	}
}