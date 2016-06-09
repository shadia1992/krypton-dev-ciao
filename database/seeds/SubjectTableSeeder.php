<?php

use Illuminate\Database\Seeder;
use App\Models\Subject;
use App\Models\Theme;

class SubjectTableSeeder extends Seeder {

	public function run()
	{
		DB::table('subjects')->delete();

		Subject::create([
				'name' => 'Grossesse',
				'theme_id' => Theme::where('name', 'like','Sexualité%')->first()->id
		]);

		Subject::create(array(
			'theme_id' => Theme::where('name', 'like','Sexualité%')->first()->id,
				'name' => 'Puberté'
			));

		Subject::create(array(
				'theme_id' => Theme::where('name', 'like','Sexualité%')->first()->id,
				'name' => 'Homosexualité'
			));

		Subject::create(array(
			'theme_id' => Theme::where('name', 'like','Famille%')->first()->id,
			'name' => 'Parents'
		));

		Subject::create(array(
			'theme_id' => Theme::where('name', 'like','Famille%')->first()->id,
			'name' => 'Frères et soeurs'
		));

		Subject::create(array(
				'theme_id' => Theme::where('name', 'like','Corps et esprit%')->first()->id,
				'name' => 'Obésité'
			));

		Subject::create(array(
			'theme_id' => Theme::where('name', 'like','Corps et esprit%')->first()->id,
			'name' => 'Estime de soi'
		));

		Subject::create(array(
				'theme_id' => Theme::where('name', 'like','Santé et forme%')->first()->id,
				'name' => 'Sport'
			));

		Subject::create(array(
			'theme_id' => Theme::where('name', 'like','Internet%')->first()->id,
			'name' => 'Youtube'
		));

		Subject::create(array(
			'theme_id' => Theme::where('name', 'like','Internet%')->first()->id,
			'name' => 'Pornographie'
		));

		Subject::create(array(
			'theme_id' => Theme::where('name', 'like','Santé et forme%')->first()->id,
			'name' => 'Drogue'
		));

		Subject::create(array(
			'theme_id' => Theme::where('name', 'like','Santé et forme%')->first()->id,
			'name' => 'Alcool'
		));

		Subject::create(array(
				'theme_id' => Theme::where('name', 'like','Santé et forme%')->first()->id,
				'name' => 'Nutrition'
			));

		Subject::create(array(
				'theme_id' => Theme::where('name', 'like','Sexualité%')->first()->id,
				'name' => 'Abus sexuel'
			));

		Subject::create(array(
			'theme_id' => Theme::where('name', 'like','Sexualité%')->first()->id,
				'name' => 'Violence sexuelle'
			));

		Subject::create(array(
			'theme_id' => Theme::where('name', 'like','Famille%')->first()->id,
				'name' => 'Violence'
			));

		Subject::create(array(
			'theme_id' => Theme::where('name', 'like','Actualité%')->first()->id,
			'name' => 'Transexualité'
		));

		Subject::create(array(
			'theme_id' => Theme::where('name', 'like','Formation%')->first()->id,
			'name' => 'Difficultés'
		));

		Subject::create(array(
			'theme_id' => Theme::where('name', 'like','Argent%')->first()->id,
			'name' => 'Jeux de hasard'
		));

		Subject::create(array(
			'theme_id' => Theme::where('name', 'like','Argent%')->first()->id,
			'name' => 'Gérer mon argent'
		));

		Subject::create(array(
			'theme_id' => Theme::where('name', 'like','Argent%')->first()->id,
			'name' => 'Indépendance'
		));

		Subject::create(array(
			'theme_id' => Theme::where('name', 'like','Amour%')->first()->id,
			'name' => 'Amour'
		));

		Subject::create(array(
			'theme_id' => Theme::where('name', 'like','Amour%')->first()->id,
			'name' => 'Amitié'
		));

		Subject::create(array(
			'theme_id' => Theme::where('name', 'like','Amour%')->first()->id,
			'name' => 'Vie de couple'
		));
	}
}