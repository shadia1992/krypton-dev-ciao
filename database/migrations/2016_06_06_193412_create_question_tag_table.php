<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateQuestionTagTable extends Migration {

	public function up()
	{
		Schema::create('question_tag', function(Blueprint $table) {
			$table->integer('tag_id')->unsigned();
			$table->integer('question_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('question_tag');
	}
}