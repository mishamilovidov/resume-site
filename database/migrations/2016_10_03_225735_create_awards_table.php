<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAwardsTable extends Migration {

	public function up()
	{
		Schema::create('awards', function(Blueprint $table) {
			$table->increments('awardID');
			$table->string('awardName', 50);
			$table->string('awardSubtitle', 50);
			$table->text('awardLogo');
			$table->string('awardLogoWidth', 2);
			$table->text('awardWebsiteURL');
			$table->text('awardDescription');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('awards');
	}
}