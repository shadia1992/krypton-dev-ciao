<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommentsTable extends Migration {

	public function up()
	{
		Schema::create('comments', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->unsigned()->nullable();
			$table->integer('ref_id')->unsigned()->nullable();
			$table->enum('reference', array('DISCUSSION', 'COMMENT'));
			$table->text('content');
			$table->integer('score');
			$table->boolean('moderated');
			$table->boolean('certificated');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('comments');
	}
}