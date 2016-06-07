<?php

use Illuminate\Database\Seeder;

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
        $this->call(OriginTableSeeder::class);
        $this->call(ThemeTableSeeder::class);
        $this->call(SubjectTableSeeder::class);
    }
}
=======
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
	}
}
>>>>>>> a7c546d8b51ad65a40cf0d9b93a971c9e9504a95
