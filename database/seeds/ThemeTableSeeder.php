<?php

use Illuminate\Database\Seeder;
use App\Models\Theme;

class ThemeTableSeeder extends Seeder {

	public function run()
	{
		DB::table('themes')->delete();

		$themes = [
			['name'=>'Actualité','content'=>'Text'],
			['name'=>'Santé et forme','content'=>'<p>La santé n\'est pas qu\'une affaire de maladie. Être en bonne santé, c\'est aussi se sentir bien, se sentir en forme.</p>
<p>Du coup, un individu atteint d\'un handicap ou d\'une&nbsp;maladie chronique&nbsp;peut lui aussi se sentir en bonne santé.</p>
<p>Et la santé, comme d\'autres domaines implique des choix personnels:</p>
<ul type="disc"><li>Est-ce qu\'on connait les services de santé dans son environnement?</li>
<li>Est-ce qu\'on s\'informe suffisamment pour prendre des décisions sur sa santé?</li>
<li>Est-ce qu\'on veut faire attention maintenant pour être en meilleure santé plus tard ? </li>
</ul><p>C\'est à chacun-e de se forger sa propre opinion et de réfléchir au moyen de se maintenir en santé.</p>
<p>A toi, la balle est dans ton camp !</p>'],
			['name'=>'Internet','content'=>'<strong>L\'amour, c\'est ce petit quelque chose en plus qui se produit quand tu es avec une certaine personne et qui n\'arrive pas quand tu es avec les autres</strong>. Mais définir l\'amour précisément est délicat parce que c\'est un sentiment unique et particulier entre deux personnes. L\'amour se nourrit de la différence et du respect de l\'un pour l\'autre.&nbsp;'],
			['name'=>'Corps et esprit','content'=>'<p>Manger&nbsp;? Avoir faim, avoir envie de manger ou avoir de l\'appétit, quelles différences ?</p>
<p>Bouger&nbsp;? Bon pour la tête, bon pour le corps ? Les bienfaits du sport et du mouvement sont en effet multiples et encore&nbsp;davantage quand&nbsp;tu le&nbsp;fais avec&nbsp;plaisir !</p>
<p>Se sentir trop gros&nbsp;? Vouloir être plus maigre&nbsp;? Se trouver pas assez musclée&nbsp;? Comment arriver à être content de son corps&nbsp;?</p>'],
			['name'=>'Sexualité','content'=>'<p>Ce qui caractérise les organismes vivants, c\'est qu\'ils sont capables de se reproduire,&nbsp;pour la survie de&nbsp;leur espèce. Se reproduire est quelque chose de concrètement facile à réaliser. On peut faire un enfant avec ou sans amour, avec ou sans plaisir, ou le plus distraitement du monde : ça fonctionne.</p>
<p>Mais la sexualité est aussi&nbsp;d\'une fascinante complexité&nbsp;: découverte de soi et découverte des autres, envies et craintes, limites personnelles et limites de la société, prises de risques et épanouissement.</p>
<p>CIAO aborde toutes ces questions et bien d\'autres. Laisse ta curiosité t\'entraîner dans chacune des rubriques autour de la sexualité.</p>'],
			['name'=>'Formation','content'=>'<p>Choisir une formation n\'est pas toujours facile. Quelle filière choisir? Qu\'est-ce qu\'un apprentissage? Qui va financer ta formation?</p>
<p>Entrer dans le monde du travail n\'est pas toujours simple non plus. Pour rendre cela plus confortable, tu peux par exemple te renseigner sur les droits ou obligations de l\'employé ou de l\'employeur ou encore sur les différents types de contrat de travail.</p>
<p>Être bien renseigné, c\'est déjà un atout pour bien commencer ta formation ou ta vie professionnelle!</p>
<p>Le thème <em>Formation et travail</em> te propose des informations pratiques et utiles sur ces différentes questions qui touchent au monde du travail et de la formation.</p>'],
			['name'=>'Famille','content'=>'<p>Les relations avec la famille, les amis, les copines, les liens entre les uns et les autres apportent de nombreuses joies. Elles posent aussi de multiples questions dans la vie de tous les jours.</p>
<p>Comment arriver à se faire entendre, comment faire passer un message correctement, comment&nbsp;comprendre l\'autre?</p>
<p>Tu trouveras dans ce thème des&nbsp;informations pour mieux comprendre comment fonctionnent les relations entre les personnes en général et les liens avec ton entourage</p>
<p>Bienvenue dans le monde gigantesque des relations!</p>'],
			['name'=>'Argent','content'=>'<p>Comment gérer ton argent&nbsp;? Comment élaborer ton budget&nbsp;? Comment mieux consommer ?</p>
<p>Ca n\'est pas toujours facile de bien gérer son argent. Mais c\'est très important, surtout si on en a peu, pour pouvoir en profiter le mieux possible. Tu verras à travers ce thème que certains pièges peuvent être facilement évités, comme les désagréments qui vont avec.</p>
<p>Tu trouveras dans ce thème des informations concrètes pour établir un budget, pour éviter les dettes ou encore pour réagir en cas de poursuites.</p>'],
			['name'=>'Amour et relations','content'=>'<strong>L\'amour, c\'est ce petit quelque chose en plus qui se produit quand tu es avec une certaine personne et qui n\'arrive pas quand tu es avec les autres</strong>. Mais définir l\'amour précisément est délicat parce que c\'est un sentiment unique et particulier entre deux personnes. L\'amour se nourrit de la différence et du respect de l\'un pour l\'autre.&nbsp;']
		];

		DB::table('themes')->insert($themes);
	}
}