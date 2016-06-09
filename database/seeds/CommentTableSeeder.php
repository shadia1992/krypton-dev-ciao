<?php

use Illuminate\Database\Seeder;
use App\Models\Discussion;
class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Discussion::create([
            'isRefComment' => 'false',
            'ref_id' => ,
            'content' => '',
            'moderated' => 'false',
            'certificated' => 'false',
            'score' => '0',
            'subject_id' => Subject::where('name', 'like', 'Youtube%')->first()->id,
            'user_id' => User::where('name', 'like', 'dmend%')->first()->id
        ]);
    }
}
