<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Database\Query\Builder;
use App\Question;
use App\Reponse;
use Charts;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
 
    public function administration()
    {
        //Requêtes Question 6
        $OcculusRift = DB::table('reponses')
                    ->where('reponse','Occulus Rifts/s')
                    ->count();
        $HTCVive     = DB::table('reponses')
                    ->where('reponse','HTC Vive')
                    ->count();
        $WindowsMixedReality = DB::table('reponses')
                    ->where('reponse','Windows Mixed Reality')
                    ->count();
        $PSVR        = DB::table('reponses')
                    ->where('reponse','PSVR')
                    ->count();
     
        $equipement_q6 = Charts::create('pie', 'highcharts')
                    ->title('Graphe question 6')
                    ->labels(['Occulus Rifts/s', 'HTC Vive','Windows Mixed Reality',' PSVR'])
                    ->values([$OcculusRift, $HTCVive, $WindowsMixedReality, $PSVR])
                    ->dimensions(490,400)
                    ->responsive(false);
       

        //Requêtes Question 7
        $SteamVR    = DB::table('reponses')
                    ->where('reponse','SteamVR')
                    ->count();
        $OcculusStore = DB::table('reponses')
                    ->where('reponse','Occulus store')
                    ->count();
        $Viveport   = DB::table('reponses')
                    ->where('reponse','Viveport')
                    ->count();
        $PlaystationVR = DB::table('reponses')
                    ->where('reponse','Playstation VR')
                    ->count();
        $GooglePlay = DB::table('reponses')
                    ->where('reponse','Google Play')
                    ->count();
        $WindowsStore = DB::table('reponses')
                    ->where('reponse','Windows store')
                    ->count();
        
        $equipement_q7 = Charts::create('pie', 'highcharts')
                    ->title('Graphe question 7')
                    ->labels(['SteamVR', 'Occulus store','Viveport','Playstation VR','Google Play','Windows store'])
                    ->values([$SteamVR,$OcculusStore,$Viveport,$PlaystationVR,$GooglePlay,$WindowsStore])
                    ->dimensions(510,500)
                    ->responsive(true);
           

        //Requêtes Question 10
        $regarderEmissionsTV = DB::table('reponses')
                    ->where('reponse','regarder des émissions TV en direct')
                    ->count();
        $regarderFilms = DB::table('reponses')
                    ->where('reponse','regarder des films')
                    ->count();
        $jouerEnSolo = DB::table('reponses')
                    ->where('reponse','jouer en solo')
                    ->count();
        $jouerEnTeam = DB::table('reponses')
                    ->where('reponse','jouer en team')
                    ->count();

        $equipement_q10 = Charts::create('pie', 'highcharts')
                ->title('Graphe question 10')
                ->labels(['regarder des émissions TV', 'regarder des films','jouer en solo',' jouer en team'])
                ->values([$regarderEmissionsTV,$regarderFilms,$jouerEnSolo,$jouerEnTeam])
                ->dimensions(520,400)
                ->responsive(false);
       

// requete pour le radar chart

        
        $question11 = DB::table('reponses')
                        ->select('*')
                        ->where('reponses.question_id','11')
                        ->avg('reponse');

        $question12 = DB::table('reponses')
                        ->select('*')
                        ->where('reponses.question_id','12')
                        ->avg('reponse');
                    

        $question13 = DB::table('reponses')
                        ->select('*')
                        ->where('reponses.question_id','13')
                        ->avg('reponse');
                                    

        $question14 = DB::table('reponses')
                        ->select('*')
                        ->where('reponses.question_id','14')
                        ->avg('reponse');
                    

        $question15 = DB::table('reponses')
                        ->select('*')
                        ->where('reponses.question_id','15')
                        ->avg('reponse');
   
      

    return view('admin.administration',compact('equipement_q6','equipement_q7','equipement_q10','question11','question12','question13','question14','question15'));
     

    }
    
    
    public function questions()
    {
        $questions = Question::all();

        return view('admin.questions',compact('questions'));
    }

    public function reponses()
    {    
        $questions = Question::all();
        $reponses = Reponse::all()->groupBy('user_id');
     
        return view('admin.reponses',compact('questions','reponses'));
    }
}

