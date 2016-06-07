<?php

use Illuminate\Database\Seeder;

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
