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
<<<<<<< 7f1687336874512715e4eac2c018be8c46a2cd45
			$table->string('title', 255)->unique()->nullable();
=======
			$table->string('title', 255);
>>>>>>> DiscussionSuite
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