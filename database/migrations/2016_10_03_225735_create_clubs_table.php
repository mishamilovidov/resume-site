<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClubsTable extends Migration {

	public function up()
	{
		Schema::create('clubs', function(Blueprint $table) {
			$table->increments('clubID');
			$table->integer('schoolID')->unsigned();
			$table->string('clubName', 50);
			$table->text('clubLogo');
			$table->string('clubLogoWidth', 2);
			$table->text('clubWebsiteURL');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('clubs');
	}
}