<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateResourcesTable extends Migration {

	public function up()
	{
		Schema::create('resources', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 64)->unique();
		});
	}

	public function down()
	{
		Schema::drop('resources');
	}
}