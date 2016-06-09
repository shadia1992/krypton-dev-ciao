<?php

use Illuminate\Database\Seeder;
use App\Models\Theme;

class ThemeTableSeeder extends Seeder {

	public function run()
	{
		DB::table('themes')->delete();

		$themes = [
			['name'=>'Actualité'],
			['name'=>'Santé et forme'],
			['name'=>'Internet'],
			['name'=>'Corps et esprit'],
			['name'=>'Sexualité'],
			['name'=>'Formation'],
			['name'=>'Famille'],
			['name'=>'Argent'],
			['name'=>'Amour et relations']
		];

		DB::table('themes')->insert($themes);
	}
}