<?php

use Illuminate\Database\Seeder;
use App\Models\Theme;

class ThemeTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('themes')->delete();

		// Sexualité
		$theme1 = Theme::create(array(
				'name' => 'Sexualité'
			));

		// Santé
		$theme2 = Theme::create(array(
				'name' => 'Santé'
			));

		// Violence
		$theme3 = Theme::create(array(
				'name' => 'Violence'
			));
	}
}