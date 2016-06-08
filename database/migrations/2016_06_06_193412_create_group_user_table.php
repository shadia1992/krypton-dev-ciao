<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGroupUserTable extends Migration {

	public function up()
	{
		Schema::create('group_user', function(Blueprint $table) {
			$table->integer('user_id')->unsigned();
			$table->integer('group_id')->unsigned();

            // clés étrangères
            //$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            //$table->foreign('group_id')->references('id')->on('groups')->onDelete('cascade');
            //$table->primary(['user_id','group_id']);
       
		});
	}

	public function down()
	{
		Schema::drop('group_user');
	}
}