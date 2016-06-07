<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOriginsTable extends Migration {

	public function up()
	{
		Schema::create('origins', function(Blueprint $table) {
			$table->increments('id');
			$table->string('code');
			$table->string('name', 64)->unique();
		});
	}

	public function down()
	{
		Schema::drop('origins');
	}
}