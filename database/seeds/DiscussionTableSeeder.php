<?php

use Illuminate\Database\Seeder;
use App\Models\Discussion;
use App\Models\Subject;
use App\Models\User;

class DiscussionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Discussion::create([
            'title' => 'Inscrit sur Youtube mais j\'ai une mauvaise réputation',
            'content' => '<p>Bonjour, depuis 2 ou 3 ans, j\'ai mon propre compte Youtube qui comporte 26 abonnés mais quand je regarde les commentaires, je ne reçois que des commentaires insultants. Que faire pour éviter cela? Je sais quel est le problème mais je n\'ai pas les moyens de le résoudre. Que faire pour éviter toutes ses insultes?</p>',
            'moderated' => 'false',
            'score' => '0',
            'subject_id' => Subject::where('name', 'like', 'Youtube%')->first()->id,
            'user_id' => User::where('name', 'like', 'dmend%')->first()->id
        ]);

        Discussion::create([
            'title' => 'J\'ai 15 ans et je bois souvent c\'est comme une habitude :(',
            'content' => 'Bonjour, je sais que l\'alcool est dangeureux et est interdit au moins de 18 ans...Mais je vais à beaucoup de soirée avec de la vodka la plupart du temps. Je me réveil chaques samedi ou dimanche matin avec un affreux mal de crâne et sans souvenirs de ce que j\'ai pu faire la veille. Je sais que ce n\'est pas un bon comportement surtout vu mon âge...Mais je n\'arrive pas à dire non à mes amis et me laisse entraîner dans leurs folies :( Quelqu\'un pourrait-il m\'aider? Merci bcp. ',
            'moderated' => 'false',
            'score' => '0',
            'subject_id' => Subject::where('name', 'like', 'Alcool%')->first()->id,
            'user_id' => User::where('name', 'like', 'msal%')->first()->id
        ]);

        Discussion::create([
            'title' => 'La drogue',
            'content' => 'pk dans les cité y plein de dylers? ?',
            'moderated' => 'true',
            'score' => '0',
            'subject_id' => Subject::where('name', 'like', 'Drogue%')->first()->id,
            'user_id' => User::where('name', 'like', 'pghir%')->first()->id
        ]);
    }
}
