<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateThemesTable extends Migration {

	public function up()
	{
		Schema::create('themes', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 64)->unique();
			$table->text('content');
		});
	}

	public function down()
	{
		Schema::drop('themes');
	}
}