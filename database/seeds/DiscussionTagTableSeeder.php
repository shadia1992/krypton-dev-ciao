<?php

use Illuminate\Database\Seeder;
use App\Models\Tag;
use App\Models\Discussion;

class DiscussionTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('discussion_tag')->delete();


        DB::table('discussion_tag')->insert([
            ['discussion_id' => Discussion::where('title', 'like', 'Inscrit sur Youtube mais%')->first()->id,'tag_id' => Tag::where('name', 'like', 'internet%')->first()->id],
            ['discussion_id' => Discussion::where('title', 'like', 'Inscrit sur Youtube mais%')->first()->id,'tag_id' => Tag::where('name', 'like', 'youtube%')->first()->id],
            ['discussion_id' => Discussion::where('title', 'like', 'Inscrit sur Youtube mais%')->first()->id,'tag_id' => Tag::where('name', 'like', 'injures%')->first()->id],
            ['discussion_id' => Discussion::where('title', 'like', 'J\'ai 15 ans et je%')->first()->id,'tag_id' => Tag::where('name', 'like', 'alcool%')->first()->id],
            ['discussion_id' => Discussion::where('title', 'like', 'J\'ai 15 ans et je%')->first()->id,'tag_id' => Tag::where('name', 'like', 'amitié%')->first()->id],
            ['discussion_id' => Discussion::where('title', 'like', 'La drogue%')->first()->id,'tag_id' => Tag::where('name', 'like', 'drogue')->first()->id],

        ]);
    }
}
