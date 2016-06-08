<?php

use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Origin;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->delete();

        User::create([
            'email' => 'administrator@ciao.ch',
            'password' => bcrypt('123456'),
            'name' => 'admin',
            'sex' => 'M',
            'birth_year' => '1980',
            'phone_number' => '0000000000',
            'origin_id' => Origin::where('code', '=', 'CH')->first()->id
        ]);

        User::create([
            'email' => 'daniel.mendes@heig-vd.ch',
            'password' => bcrypt('123456'),
            'name' => 'dmendes',
            'sex' => 'M',
            'birth_year' => '1992',
            'phone_number' => '0000000000',
            'origin_id' => Origin::where('code', '=', 'AL')->first()->id
        ]);

        User::create([
            'email' => 'romain.sandoz@heig-vd.ch',
            'password' => bcrypt('123456'),
            'name' => 'rsandoz',
            'sex' => 'M',
            'birth_year' => '1991',
            'phone_number' => '0793075465',
            'origin_id' => Origin::where('code', '=', 'CH')->first()->id
        ]);

        User::create([
            'email' => 'pierre-adrien.ghiringhelli@heig-vd.ch',
            'password' => bcrypt('123456'),
            'name' => 'pghiring',
            'sex' => 'M',
            'birth_year' => '1990',
            'phone_number' => '0000000000',
            'origin_id' => Origin::where('code', '=', 'CH')->first()->id
        ]);

        User::create([
            'email' => 'maxime.sallin@heig-vd.ch',
            'password' => bcrypt('123456'),
            'name' => 'msallin',
            'sex' => 'M',
            'birth_year' => '1992',
            'phone_number' => '0000000000',
            'origin_id' => Origin::where('code', '=', 'CH')->first()->id
        ]);

        User::create([
            'email' => 'vincent.pretre@heig-vd.ch',
            'password' => bcrypt('123456'),
            'name' => 'vpretre',
            'sex' => 'M',
            'birth_year' => '1992',
            'phone_number' => '0000000000',
            'origin_id' => Origin::where('code', '=', 'CH')->first()->id
        ]);

        User::create([
            'email' => 'shadia.huggenberger@heig-vd.ch',
            'password' => bcrypt('123456'),
            'name' => 'shugen',
            'sex' => 'F',
            'birth_year' => '1992',
            'phone_number' => '0000000000',
            'origin_id' => Origin::where('code', '=', 'CH')->first()->id
        ]);

        User::create([
            'email' => 'lauren.bill@heig-vd.ch',
            'password' => bcrypt('123456'),
            'name' => 'lbill',
            'sex' => 'M',
            'birth_year' => '1992',
            'phone_number' => '0000000000',
            'origin_id' => Origin::where('code', '=', 'CH')->first()->id
        ]);

        User::create([
            'email' => 'mod@heig-vd.ch',
            'password' => bcrypt('123456'),
            'name' => 'moderator',
            'sex' => 'M',
            'birth_year' => '1975',
            'phone_number' => '0000000000',
            'origin_id' => Origin::where('code', '=', 'CH')->first()->id
        ]);

        User::create([
            'email' => 'spec@heig-vd.ch',
            'password' => bcrypt('123456'),
            'name' => 'specialist',
            'sex' => 'M',
            'birth_year' => '1977',
            'phone_number' => '0000000000',
            'origin_id' => Origin::where('code', '=', 'CH')->first()->id
        ]);


    }
}
