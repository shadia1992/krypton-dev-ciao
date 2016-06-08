<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('origin_id')->unsigned()->nullable();
			$table->string('name', 32)->unique();
			$table->string('email', 64);
			$table->enum('sex', array('M', 'F'));
			$table->smallInteger('birth_year');
			$table->string('phone_number', 16);
			$table->string('password');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('users');
	}
}