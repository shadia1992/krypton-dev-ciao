<?php

use Illuminate\Database\Seeder;
use App\Models\Discussion;
use App\Models\User;
use App\Models\Comment;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::create([
            'content' => 'C\'est vraiment pas bon, tu devrais en parler avec un spécialiste...! Courage !',
            'moderated' => 'false',
            'certificated' => 'false',
            'score' => '0',
            'reference' => 'DISCUSSION',
            'ref_id' => Discussion::where('title', 'like', 'J\'ai 15 ans et je bois%')->first()->id,
            'user_id' => User::where('name', 'like', 'dmend%')->first()->id
        ]);

        Comment::create([
            'content' => 'La vodka c\'est mauvais... Tu devrais plutôt boire de la Damacine, ça aide pour la mal de plôt le lendemain ;)',
            'moderated' => 'true',
            'certificated' => 'false',
            'score' => '2',
            'reference' => 'DISCUSSION',
            'ref_id' => Discussion::where('title', 'like', 'J\'ai 15 ans et je bois%')->first()->id,
            'user_id' => User::where('name', 'like', 'vpret%')->first()->id
        ]);

        Comment::create([
            'content' => 'Je crois que vous êtes à côté de la plaque....',
            'moderated' => 'true',
            'certificated' => 'false',
            'score' => '2',
            'reference' => 'COMMENT',
            'ref_id' => Comment::where('content', 'like', 'La vodka%')->first()->id,
            'user_id' => User::where('name', 'like', 'adm%')->first()->id
        ]);

        Comment::create([
            'content' => 'Bonjour, si tu n\'arrives pas à dire non à tes amis, il faut que tu en parles avec eux, s\'ils te mettent la pression, cela reste ton choix et tu es libre de boire ou non. Si tu n\'en a pas envie rien ne t\'en empêche.<br/> De plus, cela peut avoir un impacte sur le long terme et il peut devenir plus difficile pour toi de te sevrer, à cause de ton jeune âge.',
            'moderated' => 'true',
            'certificated' => 'true',
            'score' => '5',
            'reference' => 'DISCUSSION',
            'ref_id' => Discussion::where('title', 'like', 'J\'ai 15 ans et je bois%')->first()->id,
            'user_id' => User::where('name', 'like', 'spec%')->first()->id
        ]);

        Comment::create([
            'content' => 'J\'ai un ami qui a le même problème... Merci de partager cela, ça m\'intéresse !',
            'moderated' => 'true',
            'certificated' => 'false',
            'score' => '2',
            'reference' => 'DISCUSSION',
            'ref_id' => Discussion::where('title', 'like', 'J\'ai 15 ans et je bois%')->first()->id,
            'user_id' => User::where('name', 'like', 'msall%')->first()->id
        ]);
        



    }
}
