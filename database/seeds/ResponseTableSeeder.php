<?php

use Illuminate\Database\Seeder;
use App\Models\Response;
use App\Models\Question;
use App\Models\User;
class ResponseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Response::create([
            'content' => ' <p>Bonjour,</p>            <p></p><p>Vous trouverez des informations sur le site http://www.budgetberating.ch (en français), en particulier sur la page "Le budget de vacances".</p>
<p>La page indique ce qu\'il faut compter, comme "le voyage, l\'hébergement, les repas, les loisirs, les achats, ainsi que l\'argent de poche de chacun des membres de la famille".</p>
<p>Pour les montants, cela dépend du coût de la vie dans le lieu des vacances, ces informations sont disponibles sur internet.</p>
<p>Une bonne manière de bien gérer les dépenses sur place peut être l\'application gratuite pour iphone et Android "Alerte budget" du magazine Bon à savoir : http://www.bonasavoir.ch/alertudget.php .</p>
<p>Ciao!</p><p></p>',
            'question_id' => Question::where('title', 'like', 'Quel budget pour des vacances ?')->first()->id,
            'user_id' => User::where('name', 'like', 'specialist%')->first()->id
        ]);

        Response::create([
            'content' => '<p>Bonjour,</p>            <p></p><p>En Suisse&nbsp;il y a un congé maternité payé de 14 semaines.&nbsp;Les&nbsp;huit premières semaines dès la naissance de l\'enfant sont des semaines pendant lesquelles vous n\'avez pas le droit de travailler.</p>
<p>Dans votre situation de début d\'apprentissage en août prochain, il vaut la peine de vous renseigner précisément, ceci avant de l\'annoncer à votre patron.</p>
<p>Vous devrez probablement négocier avec votre futur maître d\'apprentissage et éventuellement avec l\'école professionnelle. Ensuite, il faudra trouver une solution de garde pour votre enfant pour poursuivre votre apprentissage.</p>
<p>Nous vous conseillons de vous adresser à Jet Service (Service Droits des Jeunes) pour une consultation socio-juridique par rapport à vos droits. Vous pouvez également consulter les assistantes sociales en périnatalité de la Fondation ProFa, pour les questions liées au travail, mais également pour toutes les questions sociales et juridiques liées à votre situation (mineure, frais médicaux et&nbsp;assurances, allocations, etc.). Nous vous mettons les adresses en lien. </p>
<p>Bonne suite dans vos démarches, </p>
<p>Bien à vous,</p><p></p>',
            'question_id' => Question::where('title', 'like', 'Je viens%')->first()->id,
            'user_id' => User::where('name', 'like', 'specialist%')->first()->id
        ]);

        Response::create([
            'content' => '<p>Bonjour, </p>            <p></p><p>Il est difficile de te donner une réponse précise. Selon la personne, la quantité et la fréquence de consommation la durée peut varier fortement.</p>
<p>Pour te donner un ordre d\'idée on peut détecter le cannabis entre 2h et jusqu\'à 12h après la consommation. Mais on peut encore trouver des traces jusqu\'à trois semaines en cas de consommation régulière. Le cannabis ne laisse pas que des traces dans le sang, mais aussi dans l\'urine, la salive et on peut même détecter le <abbr title="delta-9-tétrahydrocannabinol"><abbr title="delta-9-tétrahydrocannabinol">THC</abbr></abbr> sur les cheveux jusqu\'à une année après la consommation.</p>
<p>C\'est dire à quel point son effet est important :&nbsp;rappelle-toi qu\'une consommation quotidienne comporte des risques. Tu trouveras plus d\'informations à ce sujet en cliquant sur le lien ci-dessous. Si tu as d\'autres&nbsp;questions tu peux également t\'adresser à Addiction Suisse (voir adresse en lien).</p>
<p>Bien à toi&nbsp;<img title="clin d\'oeil" src="/midcom-serveattachmentguid-97f3c4989dbe11e1af996f5aa71b84c184c1/emoticon_wink.png" alt="clin d\'oeil">,</p><p></p>',
            'question_id' => Question::where('title', 'like', 'Combien%')->first()->id,
            'user_id' => User::where('name', 'like', 'specialist%')->first()->id
        ]);


            
    }
}
