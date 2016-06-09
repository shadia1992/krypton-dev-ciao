<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

	public function run()
	{
		Eloquent::unguard();

		//SEED USERS, GROUPES, RESSOURCES

		$this->call('OriginTableSeeder');
		$this->command->info('Origin table seeded!');

		$this->call('UserTableSeeder');
		$this->command->info('User table seeded!');

		$this->call('GroupTableSeeder');
		$this->command->info('Group table seeded!');

		$this->call('TagTableSeeder');
		$this->command->info('Tag table seeded!');

		$this->call('GroupUserTableSeeder');
		$this->command->info('Group_User table seeded!');

		$this->call('ResourceTableSeeder');
		$this->command->info('Ressource table seeded!');

		$this->call('GroupResourceTableSeeder');
		$this->command->info('Group_Ressource table seeded!');

		//SEED CONTENT
		$this->call('ThemeTableSeeder');
		$this->command->info('Theme table seeded!');

		$this->call('SubjectTableSeeder');
		$this->command->info('Subject table seeded!');

		$this->call('QuestionTableSeeder');
		$this->command->info('Question table seeded!');

		$this->call('ResponseTableSeeder');
		$this->command->info('Response table seeded!');

		$this->call('DiscussionTableSeeder');
		$this->command->info('Discussion table seeded!');

		$this->call('CommentTableSeeder');
		$this->command->info('Comment table seeded!');

		$this->call('DiscussionTagTableSeeder');
		$this->command->info('discussion_tag table seeded!');

		$this->call('QuestionTagTableSeeder');
		$this->command->info('question_tag table seeded!');

	}
}

