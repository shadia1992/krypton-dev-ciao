<?php

use Illuminate\Database\Seeder;
use App\Models\Subject;
use App\Models\Theme;

class SubjectTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('subjects')->delete();

		// Contraception
		Subject::create([
				'name' => 'Jai peur dêtre enceinte',
				'theme_id' => Theme::where('name', 'like','Sexualité%')->first()->id
		]);

		// Puberté
		Subject::create(array(
			'theme_id' => Theme::where('name', 'like','Sexualité%')->first()->id,
				'name' => 'Je n\'ai pas de poil, est-ce normal?'
			));

		// Homosexualité
		Subject::create(array(
				'theme_id' => Theme::where('name', 'like','Sexualité%')->first()->id,
				'name' => 'Mon meilleur ami est gay'
			));

		// Obésité
		Subject::create(array(
				'theme_id' => Theme::where('name', 'like','Corps et esprit%')->first()->id,
				'name' => 'Je pèse 214kg, c\'est grave ?'
			));

		// Sport
		Subject::create(array(
				'theme_id' => Theme::where('name', 'like','Manger et bouger%')->first()->id,
				'name' => 'On me dit que je ne fais pas assez de sport...'
			));

		// Alimentation
		Subject::create(array(
				'theme_id' => Theme::where('name', 'like','Manger et bouger%')->first()->id,
				'name' => 'Pourquoi le mcdo ça pue ?'
			));

		// Violence contre moi
		Subject::create(array(
				'theme_id' => Theme::where('name', 'like','Relations%')->first()->id,
				'name' => 'Violence contre moi'
			));

		// AbusSexuelSexualité 
		Subject::create(array(
				'theme_id' => Theme::where('name', 'like','Sexualité%')->first()->id,
				'name' => 'Je crois qu\'on a abusé de moi...'
			));

		// AbusSexuelViolence
		Subject::create(array(
			'theme_id' => Theme::where('name', 'like','Relations%')->first()->id,
				'name' => 'On m\'a battu et abusé.. que faire ???'
			));

		// ViolanceFamille
		Subject::create(array(
			'theme_id' => Theme::where('name', 'like','Relations%')->first()->id,
				'name' => 'Que faire avec mon père ?'
			));
	}
}