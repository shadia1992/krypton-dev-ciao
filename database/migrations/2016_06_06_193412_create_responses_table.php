<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateResponsesTable extends Migration {

	public function up()
	{
		Schema::create('responses', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('question_id')->unsigned();
			$table->integer('user_id')->unsigned()->nullable();
			$table->text('content');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('responses');
	}
}