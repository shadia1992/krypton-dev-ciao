<?php

use Illuminate\Database\Seeder;

use App\Models\Resource;


class ResourceTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('themes')->delete();

		// fonction index pour user
		Resource::create(array(
				'name' => 'user'
				'action' => 'index'
			));

		Resource::create(array(
				'name' => 'user'
				'action' => 'create'
			));

		Resource::create(array(
				'name' => 'user'
				'action' => 'store'
			));
		Resource::create(array(
				'name' => 'user'
				'action' => 'show'
			));
		Resource::create(array(
				'name' => 'user'
				'action' => 'edit'
			));
		Resource::create(array(
				'name' => 'user'
				'action' => 'update'
			));
		Resource::create(array(
				'name' => 'user'
				'action' => 'destroy'
			));



			// Theme
		Resource::create(array(
				'name' => 'theme'
				'action' => 'index'
			));

		Resource::create(array(
				'name' => 'theme'
				'action' => 'create'
			));

		Resource::create(array(
				'name' => 'theme'
				'action' => 'store'
			));
		Resource::create(array(
				'name' => 'theme'
				'action' => 'show'
			));
		Resource::create(array(
				'name' => 'theme'
				'action' => 'edit'
			));
		Resource::create(array(
				'name' => 'theme'
				'action' => 'update'
			));
		Resource::create(array(
				'name' => 'theme'
				'action' => 'destroy'
			));



			// TAG
		Resource::create(array(
				'name' => 'tag'
				'action' => 'index'
			));

		Resource::create(array(
				'name' => 'tag'
				'action' => 'create'
			));

		Resource::create(array(
				'name' => 'tag'
				'action' => 'store'
			));
		Resource::create(array(
				'name' => 'tag'
				'action' => 'show'
			));
		Resource::create(array(
				'name' => 'tag'
				'action' => 'edit'
			));
		Resource::create(array(
				'name' => 'tag'
				'action' => 'update'
			));
		Resource::create(array(
				'name' => 'tag'
				'action' => 'destroy'
			));

			// SUBJECT
		Resource::create(array(
				'name' => 'subject'
				'action' => 'index'
			));

		Resource::create(array(
				'name' => 'subject'
				'action' => 'create'
			));

		Resource::create(array(
				'name' => 'subject'
				'action' => 'store'
			));
		Resource::create(array(
				'name' => 'subject'
				'action' => 'show'
			));
		Resource::create(array(
				'name' => 'subject'
				'action' => 'edit'
			));
		Resource::create(array(
				'name' => 'subject'
				'action' => 'update'
			));
		Resource::create(array(
				'name' => 'subject'
				'action' => 'destroy'
			));

		// RESPONSE
		Resource::create(array(
				'name' => 'response'
				'action' => 'index'
			));

		Resource::create(array(
				'name' => 'response'
				'action' => 'create'
			));

		Resource::create(array(
				'name' => 'response'
				'action' => 'store'
			));
		Resource::create(array(
				'name' => 'response'
				'action' => 'show'
			));
		Resource::create(array(
				'name' => 'response'
				'action' => 'edit'
			));
		Resource::create(array(
				'name' => 'response'
				'action' => 'update'
			));
		Resource::create(array(
				'name' => 'response'
				'action' => 'destroy'
			));


		// QUESTION
		Resource::create(array(
				'name' => 'question'
				'action' => 'index'
			));

		Resource::create(array(
				'name' => 'question'
				'action' => 'create'
			));

		Resource::create(array(
				'name' => 'question'
				'action' => 'store'
			));
		Resource::create(array(
				'name' => 'question'
				'action' => 'show'
			));
		Resource::create(array(
				'name' => 'question'
				'action' => 'edit'
			));
		Resource::create(array(
				'name' => 'question'
				'action' => 'update'
			));
		Resource::create(array(
				'name' => 'question'
				'action' => 'destroy'
			));

		// GROUP
		Resource::create(array(
				'name' => 'group'
				'action' => 'index'
			));

		Resource::create(array(
				'name' => 'group'
				'action' => 'create'
			));

		Resource::create(array(
				'name' => 'group'
				'action' => 'store'
			));
		Resource::create(array(
				'name' => 'group'
				'action' => 'show'
			));
		Resource::create(array(
				'name' => 'group'
				'action' => 'edit'
			));
		Resource::create(array(
				'name' => 'group'
				'action' => 'update'
			));
		Resource::create(array(
				'name' => 'group'
				'action' => 'destroy'
			));

		// COMMENT
		Resource::create(array(
				'name' => 'comment'
				'action' => 'index'
			));

		Resource::create(array(
				'name' => 'comment'
				'action' => 'create'
			));

		Resource::create(array(
				'name' => 'comment'
				'action' => 'store'
			));
		Resource::create(array(
				'name' => 'comment'
				'action' => 'show'
			));
		Resource::create(array(
				'name' => 'comment'
				'action' => 'edit'
			));
		Resource::create(array(
				'name' => 'comment'
				'action' => 'update'
			));
		Resource::create(array(
				'name' => 'comment'
				'action' => 'destroy'
			));

		// ORIGIN
		Resource::create(array(
				'name' => 'origin'
				'action' => 'index'
			));

		Resource::create(array(
				'name' => 'origin'
				'action' => 'create'
			));

		Resource::create(array(
				'name' => 'origin'
				'action' => 'store'
			));
		Resource::create(array(
				'name' => 'origin'
				'action' => 'show'
			));
		Resource::create(array(
				'name' => 'origin'
				'action' => 'edit'
			));
		Resource::create(array(
				'name' => 'origin'
				'action' => 'update'
			));
		Resource::create(array(
				'name' => 'origin'
				'action' => 'destroy'
			));



		
	}
}


