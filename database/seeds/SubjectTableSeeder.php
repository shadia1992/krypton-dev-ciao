<?php

use Illuminate\Database\Seeder;
use App\Models\Subject;
use App\Models\Theme;

class SubjectTableSeeder extends Seeder {

	public function run()
	{
		DB::table('subjects')->delete();

		// Contraception
		Subject::create([
				'name' => 'Grossesse',
				'theme_id' => Theme::where('name', 'like','Sexualité%')->first()->id
		]);

		// Puberté
		Subject::create(array(
			'theme_id' => Theme::where('name', 'like','Sexualité%')->first()->id,
				'name' => 'Puberté'
			));

		// Homosexualité
		Subject::create(array(
				'theme_id' => Theme::where('name', 'like','Sexualité%')->first()->id,
				'name' => 'Homosexualité'
			));

		// Obésité
		Subject::create(array(
				'theme_id' => Theme::where('name', 'like','Corps et esprit%')->first()->id,
				'name' => 'Obésité'
			));

		// Sport
		Subject::create(array(
				'theme_id' => Theme::where('name', 'like','Manger et bouger%')->first()->id,
				'name' => 'Sport'
			));

		// Alimentation
		Subject::create(array(
				'theme_id' => Theme::where('name', 'like','Manger et bouger%')->first()->id,
				'name' => 'Nutrition'
			));

		// Violence contre moi
		Subject::create(array(
				'theme_id' => Theme::where('name', 'like','Relations%')->first()->id,
				'name' => 'Violence'
			));

		// AbusSexuelSexualité 
		Subject::create(array(
				'theme_id' => Theme::where('name', 'like','Sexualité%')->first()->id,
				'name' => 'Abus sexuel'
			));

		// AbusSexuelViolence
		Subject::create(array(
			'theme_id' => Theme::where('name', 'like','Relations%')->first()->id,
				'name' => 'Violence sexuelle'
			));

		// ViolanceFamille
		Subject::create(array(
			'theme_id' => Theme::where('name', 'like','Famille%')->first()->id,
				'name' => 'Violence'
			));
	}
}