<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('users', function(Blueprint $table) {
			$table->foreign('origin_id')->references('id')->on('origins')
						->onDelete('set null')
						->onUpdate('set null');
		});
		Schema::table('subjects', function(Blueprint $table) {
			$table->foreign('theme_id')->references('id')->on('themes')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('discussions', function(Blueprint $table) {
			$table->foreign('subject_id')->references('id')->on('subjects')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('discussions', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('set null')
						->onUpdate('set null');
		});
		Schema::table('questions', function(Blueprint $table) {
			$table->foreign('subject_id')->references('id')->on('subjects')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('questions', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('set null')
						->onUpdate('set null');
		});
		Schema::table('responses', function(Blueprint $table) {
			$table->foreign('question_id')->references('id')->on('questions')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('responses', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('set null')
						->onUpdate('set null');
		});
		Schema::table('comments', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('set null')
						->onUpdate('set null');
		});
		Schema::table('group_user', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('group_user', function(Blueprint $table) {
			$table->foreign('group_id')->references('id')->on('groups')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('group_resource', function(Blueprint $table) {
			$table->foreign('group_id')->references('id')->on('groups')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('group_resource', function(Blueprint $table) {
			$table->foreign('resource_id')->references('id')->on('resources')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('discussion_tag', function(Blueprint $table) {
			$table->foreign('tag_id')->references('id')->on('tags')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('discussion_tag', function(Blueprint $table) {
			$table->foreign('discussion_id')->references('id')->on('discussions')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('question_tag', function(Blueprint $table) {
			$table->foreign('tag_id')->references('id')->on('tags')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('question_tag', function(Blueprint $table) {
			$table->foreign('question_id')->references('id')->on('questions')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
	}

	public function down()
	{
		Schema::table('users', function(Blueprint $table) {
			$table->dropForeign('users_origin_id_foreign');
		});
		Schema::table('subjects', function(Blueprint $table) {
			$table->dropForeign('subjects_theme_id_foreign');
		});
		Schema::table('discussions', function(Blueprint $table) {
			$table->dropForeign('discussions_subject_id_foreign');
		});
		Schema::table('discussions', function(Blueprint $table) {
			$table->dropForeign('discussions_user_id_foreign');
		});
		Schema::table('questions', function(Blueprint $table) {
			$table->dropForeign('questions_subject_id_foreign');
		});
		Schema::table('questions', function(Blueprint $table) {
			$table->dropForeign('questions_user_id_foreign');
		});
		Schema::table('responses', function(Blueprint $table) {
			$table->dropForeign('responses_question_id_foreign');
		});
		Schema::table('responses', function(Blueprint $table) {
			$table->dropForeign('responses_user_id_foreign');
		});
		Schema::table('comments', function(Blueprint $table) {
			$table->dropForeign('comments_user_id_foreign');
		});
		Schema::table('group_user', function(Blueprint $table) {
			$table->dropForeign('group_user_user_id_foreign');
		});
		Schema::table('group_user', function(Blueprint $table) {
			$table->dropForeign('group_user_group_id_foreign');
		});
		Schema::table('group_resource', function(Blueprint $table) {
			$table->dropForeign('group_resource_group_id_foreign');
		});
		Schema::table('group_resource', function(Blueprint $table) {
			$table->dropForeign('group_resource_resource_id_foreign');
		});
		Schema::table('discussion_tag', function(Blueprint $table) {
			$table->dropForeign('discussion_tag_tag_id_foreign');
		});
		Schema::table('discussion_tag', function(Blueprint $table) {
			$table->dropForeign('discussion_tag_discussion_id_foreign');
		});
		Schema::table('question_tag', function(Blueprint $table) {
			$table->dropForeign('question_tag_tag_id_foreign');
		});
		Schema::table('question_tag', function(Blueprint $table) {
			$table->dropForeign('question_tag_question_id_foreign');
		});
	}
}