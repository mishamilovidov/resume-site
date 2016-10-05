<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProficientTechnicalSkillsTable extends Migration {

	public function up()
	{
		Schema::create('proficient_technical_skills', function(Blueprint $table) {
			$table->increments('ptsID');
			$table->string('ptsName', 50);
			$table->text('ptsLogo');
			$table->string('ptsLogoWidth', 2);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('proficient_technical_skills');
	}
}