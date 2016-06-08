<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Group;
class GroupUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('group_user')->delete();

        
            DB::table('group_user')->insert([
                ['user_id' => User::where('name', 'like', 'admin')->first()->id,'group_id' => Group::where('name', 'like', 'admin')->first()->id],
                ['user_id' => User::where('name', 'like', 'dmendes')->first()->id,'group_id' => Group::where('name', 'like', 'guest')->first()->id],
                ['user_id' => User::where('name', 'like', 'rsandoz')->first()->id,'group_id' => Group::where('name', 'like', 'guest')->first()->id],
                ['user_id' => User::where('name', 'like', 'pghiring')->first()->id,'group_id' => Group::where('name', 'like', 'guest')->first()->id],
                ['user_id' => User::where('name', 'like', 'msallin')->first()->id,'group_id' => Group::where('name', 'like', 'guest')->first()->id],
                ['user_id' => User::where('name', 'like', 'vpretre')->first()->id,'group_id' => Group::where('name', 'like', 'guest')->first()->id],
                ['user_id' => User::where('name', 'like', 'shugen')->first()->id,'group_id' => Group::where('name', 'like', 'guest')->first()->id],
                ['user_id' => User::where('name', 'like', 'lbill')->first()->id,'group_id' => Group::where('name', 'like', 'guest')->first()->id],
                ['user_id' => User::where('name', 'like', 'specialist')->first()->id,'group_id' => Group::where('name', 'like', 'specialist')->first()->id],
                ['user_id' => User::where('name', 'like', 'moderator')->first()->id,'group_id' => Group::where('name', 'like', 'moderator')->first()->id],
            ]);

    }
}
