<?php

use Illuminate\Database\Seeder;

<<<<<<< HEAD
<<<<<<< HEAD
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
    }
}
=======

=======
>>>>>>> b60b0054af1269d82ddfc2d978e15c182627915c
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

		$this->call('GroupTableSeeder');
		$this->command->info('Group table seeded!');

		$this->call('UserTableSeeder');
		$this->command->info('User table seeded!');

		$this->call('TagTableSeeder');
		$this->command->info('Tag table seeded!');

		$this->call('GroupUserTableSeeder');
		$this->command->info('Group_User table seeded!');

		$this->call('ResourceTableSeeder');
		$this->command->info('Ressource table seeded!');
	}
}
<<<<<<< HEAD
>>>>>>> f2e5e1de5eeb5e85be08cc278f5b8b19dc6baba3
=======
>>>>>>> b60b0054af1269d82ddfc2d978e15c182627915c
