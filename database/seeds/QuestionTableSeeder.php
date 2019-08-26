<?php

use Illuminate\Database\Seeder;

class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        <?php

use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {       
    	DB::table('questions')->insert([
            'corps'=>'Votre email',
            'type'=>'B',
            'choix'=>'' 	
        ]);
        DB::table('questions')->insert([
            'corps'=>'Votre âge',
            'type'=>'B',
            'choix'=>''   
        ]);
        DB::table('questions')->insert([
            'corps'=>'Votre sexe',
            'type'=>'A',
            'choix'=>json_encode(["Homme","Femme","Préfère ne pas répondre"])   
        ]);
        DB::table('questions')->insert([
            'corps'=>'Nombre de presonne dans votre foyer (adulte & enfants )',
            'type'=>'C',
            'choix'=>''   
        ]);
        DB::table('questions')->insert([
            'corps'=>'Votre profession',
            'type'=>'B',
            'choix'=>''   
        ]);
        DB::table('questions')->insert([
            'corps'=>'Quel marque de casque VR utilisez vous?',
            'type'=>'A',
            'choix'=>json_encode(['Occulus Rifts/s', 'HTC Vive', 'Windows Mixed Reality', 'PSVR'])   
        ]);
        DB::table('questions')->insert([
            'corps'=>"Sur quel magasin d'application achetez vous des contenus VR?",
            'type'=>'A',
            'choix'=>json_encode(['SteamVR','Occulus store', 'Viveport', 'Playstation VR', 'Google Play', 'Windows store'])   
        ]);
        DB::table('questions')->insert([
            'corps'=>"Quel casque envisagez vous d'acheter dans un futur proche?",
            'type'=>'A',
            'choix'=>json_encode(['Occulus Quest', 'Occulus Go', 'HTC Vive Pro', 'Autre', 'Aucun'])   
        ]);
        DB::table('questions')->insert([
            'corps'=>'Au sein de votre foyer, combien de personne utilisent votre casque VR pour regarder Bigscreen?',
            'type'=>'C',
            'choix'=>''   
        ]);
        DB::table('questions')->insert([
            'corps'=>'Vous utilisez principalement Bigscreen pour:',
            'type'=>'A',
            'choix'=>json_encode(['regarder des émissions TV en direct','regarder des films','jouer en solo','jouer en team'])  
        ]);
        DB::table('questions')->insert([
            'corps'=>"Combien donnez vous de point pour la qualité de l'image sur Bigscreen?",
            'type'=>'C',
            'choix'=>''   
        ]);
        DB::table('questions')->insert([
            'corps'=>"Combien donnez vous de point pour le confort d'utilisation de l'interface Bigscreen?",
            'type'=>'C',
            'choix'=>''   
        ]);
        DB::table('questions')->insert([
            'corps'=>'Combien donnez vous de point pour la connection réseau de Bigscreen?',
            'type'=>'C',
            'choix'=>''   
        ]);
        DB::table('questions')->insert([
            'corps'=>'Combien donnez vous de point pour la qualité des graphismes 3D dans Bigscreen?',
            'type'=>'C',
            'choix'=>''   
        ]);
        DB::table('questions')->insert([
            'corps'=>'Combien donnez vous de point pour la qualité audio dans Bigscreen?',
            'type'=>'C',
            'choix'=>''   
        ]);
        DB::table('questions')->insert([
            'corps'=>'Aimeriez vous avoir des notifications plus précises au cours de vos sessions Bigscreen?',
            'type'=>'A',
            'choix'=>json_encode(['Oui','Non'])  
        ]);
        DB::table('questions')->insert([
            'corps'=>'Aimeriez vous pouvoir inviter un ami à rejoindre votre session via son smartphone?',
            'type'=>'A',
            'choix'=>json_encode(['Oui','Non'])   
        ]);
        DB::table('questions')->insert([
            'corps'=>'Aimeriez vous pourvoir enregistrer des émissions TV pour pouvoir les regarder ultérieurement?',
            'type'=>'A',
            'choix'=>json_encode(['Oui','Non'])   
        ]);
        DB::table('questions')->insert([
            'corps'=>'Aimeriez vous jouer à des jeux exclusifs sur votre Bigscreen?',
            'type'=>'A',
            'choix'=>json_encode(['Oui','Non'])  
        ]);
        DB::table('questions')->insert([
            'corps'=>'Quelle nouvelle fonctionnalité de vos rêve devrait exister sur Bigscreen?',
            'type'=>'B',
            'choix'=>''   
        ]);
      }
}

    }
}
