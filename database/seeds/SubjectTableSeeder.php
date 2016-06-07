<?php

use Illuminate\Database\Seeder;
use App\Models\Subject;

class SubjectTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('subjects')->delete();

		// Contraception
		$subject1 = Subject::create(array(
				'theme_id' => 1,
				'name' => 'Contraception'
			));

		// Puberté
		$subject2 = Subject::create(array(
				'theme_id' => 1,
				'name' => 'Puberté'
			));

		// Homosexualité
		$subject3 = Subject::create(array(
				'theme_id' => 1,
				'name' => 'Homosexualité'
			));

		// Obésité
		$subject4 = Subject::create(array(
				'theme_id' => 2,
				'name' => 'Obésité'
			));

		// Sport
		$subject5 = Subject::create(array(
				'theme_id' => 2,
				'name' => 'Sport'
			));

		// Alimentation
		$subject6 = Subject::create(array(
				'theme_id' => 2,
				'name' => 'Alimentation'
			));

		// Violence contre moi
		$subject7 = Subject::create(array(
				'theme_id' => 3,
				'name' => 'Violence contre moi'
			));

		// AbusSexuelSexualité 
		$subject8 = Subject::create(array(
				'theme_id' => 1,
				'name' => 'Abus sexuel'
			));

		// AbusSexuelViolence
		$subject9 = Subject::create(array(
				'theme_id' => 3,
				'name' => 'Abus sexuel'
			));

		// ViolanceFamille
		$subject10 = Subject::create(array(
				'theme_id' => 3,
				'name' => 'Violence dans la famille'
			));
	}
}