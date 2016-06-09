<?php

use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\Tag;

class QuestionTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('question_tag')->delete();

        DB::table('question_tag')->insert([
            ['question_id' => Question::where('title', 'like', 'Je suis amoureuse de mon prof%')->first()->id,'tag_id' => Tag::where('name', 'like', 'amour%')->first()->id],
            ['question_id' => Question::where('title', 'like', 'Je suis amoureuse de mon prof%')->first()->id,'tag_id' => Tag::where('name', 'like', 'études%')->first()->id],
            ['question_id' => Question::where('title', 'like', 'Je suis amoureuse de mon prof%')->first()->id,'tag_id' => Tag::where('name', 'like', 'école%')->first()->id],
            ['question_id' => Question::where('title', 'like', 'Problèmes relationnels parents-ado%')->first()->id,'tag_id' => Tag::where('name', 'like', 'famille%')->first()->id],
            ['question_id' => Question::where('title', 'like', 'Problèmes relationnels parents-ado%')->first()->id,'tag_id' => Tag::where('name', 'like', 'violence%')->first()->id],
            ['question_id' => Question::where('title', 'like', 'Je ne m\'aime pas%')->first()->id,'tag_id' => Tag::where('name', 'like', 'bien-être%')->first()->id],
            ['question_id' => Question::where('title', 'like', 'Je ne m\'aime pas%')->first()->id,'tag_id' => Tag::where('name', 'like', 'scarification%')->first()->id],
            ['question_id' => Question::where('title', 'like', 'J\'aimerais prendre mon indépendance%')->first()->id,'tag_id' => Tag::where('name', 'like', 'argent%')->first()->id],
            ['question_id' => Question::where('title', 'like', 'J\'aimerais prendre mon indépendance%')->first()->id,'tag_id' => Tag::where('name', 'like', 'famille%')->first()->id],
            ['question_id' => Question::where('title', 'like', 'Quel budget pour des vacances%')->first()->id,'tag_id' => Tag::where('name', 'like', 'argent%')->first()->id],
            ['question_id' => Question::where('title', 'like', 'Quel budget pour des vacances%')->first()->id,'tag_id' => Tag::where('name', 'like', 'vacances%')->first()->id],
            ['question_id' => Question::where('title', 'like', 'Quel budget pour des vacances%')->first()->id,'tag_id' => Tag::where('name', 'like', 'loisirs%')->first()->id],
            ['question_id' => Question::where('title', 'like', 'Je viens d\'apprendre que je suis enceinte et je commence mon apprentissage en août prochain%')->first()->id,'tag_id' => Tag::where('name', 'like', 'grossesse%')->first()->id],
            ['question_id' => Question::where('title', 'like', 'Je viens d\'apprendre que je suis enceinte et je commence mon apprentissage en août prochain%')->first()->id,'tag_id' => Tag::where('name', 'like', 'apprentiss%')->first()->id],
            ['question_id' => Question::where('title', 'like', 'Je viens d\'apprendre que je suis enceinte et je commence mon apprentissage en août prochain%')->first()->id,'tag_id' => Tag::where('name', 'like', 'angois%')->first()->id],
            ['question_id' => Question::where('title', 'like', 'Combien de temps le THC reste dans le sang?%')->first()->id,'tag_id' => Tag::where('name', 'like', 'drogue%')->first()->id],
            ['question_id' => Question::where('title', 'like', 'Combien de temps le THC reste dans le sang?%')->first()->id,'tag_id' => Tag::where('name', 'like', 'cannabis%')->first()->id],

        ]);
    }
}
