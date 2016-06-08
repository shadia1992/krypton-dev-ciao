<?php

use Illuminate\Database\Seeder;
use App\Models\Group;

class GroupTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('groups')->delete();

		// Groupe1
		Group::create(array(
				'name' => 'Guest'
			));

		// Groupe2
		Group::create(array(
				'name' => 'Moderator'
			));

		// Groupe3
		Group::create(array(
				'name' => 'Specialist'
			));

		// Groupe4
		Group::create(array(
				'name' => 'Admin'
			));
	}
}