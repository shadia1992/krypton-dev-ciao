<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDiscussionsTable extends Migration {

	public function up()
	{
		Schema::create('discussions', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('subject_id')->unsigned();
			$table->integer('user_id')->unsigned()->nullable();
			$table->string('title', 255)->unique()->nullable();
			$table->integer('score');
			$table->boolean('moderated');
			$table->text('content');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('discussions');
	}
}