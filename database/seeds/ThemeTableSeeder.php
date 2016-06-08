<?php

use Illuminate\Database\Seeder;
use App\Models\Theme;

class ThemeTableSeeder extends Seeder {

	public function run()
	{
		DB::table('themes')->delete();

		$themes = [
			['name'=>'Actualité'],
			['name'=>'Boisson, fumée, drogue'],
			['name'=>'Internet'],
			['name'=>'Manger et bouger'],
			['name'=>'Corps et esprit'],
			['name'=>'Sexualité'],
			['name'=>'Relations'],
			['name'=>'Famille']
		];

		DB::table('themes')->insert($themes);
	}
}