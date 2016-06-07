<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDiscussionTagTable extends Migration {

	public function up()
	{
		Schema::create('discussion_tag', function(Blueprint $table) {
			$table->integer('tag_id')->unsigned();
			$table->integer('discussion_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('discussion_tag');
	}
}