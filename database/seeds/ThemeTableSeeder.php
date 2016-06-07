<?php

use Illuminate\Database\Seeder;
use App\Models\Theme;

class ThemeTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('themes')->delete();

		// Sexualité
		Theme::create(array(
				'name' => 'Sexualité'
			));

		// Santé
		Theme::create(array(
				'name' => 'Santé'
			));

		// Violence
		Theme::create(array(
				'name' => 'Violence'
			));
	}
}