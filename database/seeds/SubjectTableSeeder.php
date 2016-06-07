<?php

use Illuminate\Database\Seeder;
use App\Models\Subject;

class SubjectTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('subjects')->delete();

		// Contraception
		Subject::create(array(
				'theme_id' => 1,
				'name' => 'Contraception'
			));

		// Puberté
		Subject::create(array(
				'theme_id' => 1,
				'name' => 'Puberté'
			));

		// Homosexualité
		Subject::create(array(
				'theme_id' => 1,
				'name' => 'Homosexualité'
			));

		// Obésité
		Subject::create(array(
				'theme_id' => 2,
				'name' => 'Obésité'
			));

		// Sport
		Subject::create(array(
				'theme_id' => 2,
				'name' => 'Sport'
			));

		// Alimentation
		Subject::create(array(
				'theme_id' => 2,
				'name' => 'Alimentation'
			));

		// Violence contre moi
		Subject::create(array(
				'theme_id' => 3,
				'name' => 'Violence contre moi'
			));

		// AbusSexuelSexualité 
		Subject::create(array(
				'theme_id' => 1,
				'name' => 'Abus sexuel'
			));

		// AbusSexuelViolence
		Subject::create(array(
				'theme_id' => 3,
				'name' => 'Abus sexuel'
			));

		// ViolanceFamille
		Subject::create(array(
				'theme_id' => 3,
				'name' => 'Violence dans la famille'
			));
	}
}