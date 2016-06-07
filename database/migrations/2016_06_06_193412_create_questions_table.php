<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateQuestionsTable extends Migration {

	public function up()
	{
		Schema::create('questions', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('subject_id')->unsigned();
			$table->integer('user_id')->unsigned()->nullable();
			$table->string('title', 255);
			$table->text('content');
			$table->boolean('moderated');
			$table->boolean('answered');
			$table->text('comment');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('questions');
	}
}