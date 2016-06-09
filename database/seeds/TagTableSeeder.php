<?php

use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->delete();

        $tags = [
            ['name'=>'drogue'],
            ['name'=>'contraception'],
            ['name'=>'violence'],
            ['name'=>'injures'],
            ['name'=>'puberté'],
            ['name'=>'famille'],
            ['name'=>'stress'],
            ['name'=>'argent'],
            ['name'=>'sexualité'],
            ['name'=>'bien-être'],
            ['name'=>'alcool'],
            ['name'=>'cannabis'],
            ['name'=>'tabac'],
            ['name'=>'addiction'],
            ['name'=>'santé'],
            ['name'=>'nutrition'],
            ['name'=>'relations'],
            ['name'=>'amitié'],
            ['name'=>'amour'],
            ['name'=>'couple'],
            ['name'=>'homosexualité'],
            ['name'=>'transgenre'],
            ['name'=>'croyance'],
            ['name'=>'religion'],
            ['name'=>'racisme'],
            ['name'=>'école'],
            ['name'=>'études'],
            ['name'=>'internet'],
            ['name'=>'youtube'],
            ['name'=>'scarification'],
            ['name'=>'vacances'],
            ['name'=>'loisirs'],
            ['name'=>'grossesse'],
            ['name'=>'angoisse'],
            ['name'=>'apprentissage'],


        ];

        DB::table('tags')->insert($tags);
    }
}
