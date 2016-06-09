<?php

use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\Subject;
use App\Models\User;

class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('questions')->delete();

        Question::create([
            'title' => 'Je suis amoureuse de mon prof',
            'content' => '<p>Bonjour,</p><p>Est-il normal de tomber amoureuse de son prof de sport (loisir)? Même si il est plus vieux que moi, et qu\'il me parait impossible qu\'il se passe quelque chose entre nous.</p>',
            'moderated' => 'false',
            'answered' => 'false',
            'comment' => '',
            'subject_id' => Subject::where('name', 'like', 'Amour%')->first()->id,
            'user_id' => User::where('name', 'like', 'shug%')->first()->id
        ]);

        Question::create([
            'title' => 'Problèmes relationnels parents-ado',
            'content' => ' 
            <p>Bonjour, bonsoir. </p><p>J\'écris cette question pour ma petite amie qui a plusieurs soucis dans sa famille.</p>
<p>Elle entre facilement en conflit avec ses parents, plus précisément avec sa mère. Il lui est arrivé de se faire insulter ou même frapper par sa mère (ça reste heureusement assez rare, elle ne se fait pas battre non plus). Je suis triste pour elle et j\'ai envie que cela s\'arrange,</p>
<p>merci de nous aider.</p>',
            'moderated' => 'false',
            'answered' => 'false',
            'comment' => '',
            'subject_id' => Subject::where('name', 'like', 'Parents%')->first()->id,
            'user_id' => User::where('name', 'like', 'dmend%')->first()->id
        ]);

        Question::create([
            'title' => 'Je ne m\'aime pas',
            'content' => ' 
            <p>Bonjour,</p>
<p>Je n\'ai aucune estime de moi, je ne m\'aime pas et je ne suis pas aimé, j\'essaye toujours que les gens m\'aiment mais ils me rejettent.</p>
<ul><li>J\'ai mal,</li>
<li>je suis tout le temps triste </li>
<li>je fais des crise de nerf et d\'angoisse </li>
</ul><p>J\'aimerais de l\'aide ?</p>',
            'moderated' => 'false',
            'answered' => 'false',
            'comment' => '',
            'subject_id' => Subject::where('name', 'like', 'Estime%')->first()->id,
            'user_id' => User::where('name', 'like', 'pghir%')->first()->id
        ]);

        Question::create([
            'title' => 'J\'aimerais prendre mon indépendance',
            'content' => '
        <p>Bonjour,</p><p>J\'aimerai pendre mon indépendance pour vivre seule et voler de mes propres ailes. Mon problème est que je ne sais pas concrètement comment m\'y prendre. </p><p>Par exemple, comment m\'organiser pour le départ?<br>Comment choisir son lieu d\'habitation?<br>Enfin, comment faire pour calculer le budget minimal dont on a besoin lorsque l\'on vit seule comme une adulte?</p><p>Je suis à l\'écoute de tout vos conseils et pistes que vous me proposerez.</p><p>Merci beaucoup</p>      
        ',
            'moderated' => 'true',
            'answered' => 'false',
            'comment' => '',
            'subject_id' => Subject::where('name', 'like', 'Indép%')->first()->id,
            'user_id' => User::where('name', 'like', 'msal%')->first()->id
        ]);

        Question::create([
        'title' => 'Quel budget pour des vacances ?',
        'content' => '
        <p>Bonjour, je voudrais savoir si il y a un seuil minimum à avoir pour partir en vacances. Que faut-il compter ?</p>     
        ',
        'moderated' => 'true',
        'answered' => 'true',
        'comment' => '',
        'subject_id' => Subject::where('name', 'like', 'Gérer mon arg%')->first()->id,
        'user_id' => User::where('name', 'like', 'vpre%')->first()->id
    ]);

        Question::create([
            'title' => 'Je viens d\'apprendre que je suis enceinte et je commence mon apprentissage en août prochain',
            'content' => '
        <p>Bonjour, </p><p>Je suis une jeune fille de 17an en janvier prochain j\'aurai 18ans, mais ce que je voulais absolument vous demandez c\'est que je viens d\'apprendre que je suis enceinte.. Mais j\'ai deja signer mon contract d\'apprentissage.. Je commence en août 2016. Je voulais savoir si c\'est possible d\'avoir le bébé et de garder sa place ou alors ils me renvois..? </p><p>Merci énormément... Une bonne journée. </p>
        ',
            'moderated' => 'true',
            'answered' => 'true',
            'comment' => '',
            'subject_id' => Subject::where('name', 'like', 'Grossesse%')->first()->id,
            'user_id' => User::where('name', 'like', 'lbil%')->first()->id
        ]);

        Question::create([
            'title' => 'Combien de temps le THC reste dans le sang?',
            'content' => '
<p>Combien de temps le THC reste dans le sang?<br>Sachant que je suis un consommateur quotien (1-3 par jour)</p>
        ',
            'moderated' => 'true',
            'answered' => 'true',
            'comment' => '',
            'subject_id' => Subject::where('name', 'like', 'Drogue%')->first()->id,
            'user_id' => User::where('name', 'like', 'dmend%')->first()->id
        ]);


    }
}
