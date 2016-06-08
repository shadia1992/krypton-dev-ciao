<?php

use Illuminate\Database\Seeder;
use App\Models\Group;

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
