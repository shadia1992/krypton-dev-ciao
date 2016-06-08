<?php

use Illuminate\Database\Seeder;
use App\Models\Group;

<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> 4f7ba9ef4c259c657984087123453cdb52e93ff7
class GroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('groups')->delete();

        $groups = [
            ['name'=>'guest'],
            ['name'=>'admin'],
            ['name'=>'specialist'],
            ['name'=>'moderator'],
        ];

        DB::table('groups')->insert($groups);
    }
}
<<<<<<< HEAD
>>>>>>> 4f7ba9ef4c259c657984087123453cdb52e93ff7
=======
>>>>>>> 4f7ba9ef4c259c657984087123453cdb52e93ff7
