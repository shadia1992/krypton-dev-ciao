<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder {

	public function run()
	{
		Eloquent::unguard();

		$this->call('ThemeTableSeeder');
		$this->command->info('Theme table seeded!');

		$this->call('SubjectTableSeeder');
		$this->command->info('Subject table seeded!');

		$this->call('OriginTableSeeder');
		$this->command->info('Origin table seeded!');

		$this->call('UserTableSeeder');
		$this->command->info('User table seeded!');

		$this->call('GroupTableSeeder');
		$this->command->info('Group table seeded!');

	}
}