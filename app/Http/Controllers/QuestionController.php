<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Reponse;
use Carbon\Carbon;
use DB;



class QuestionController extends Controller
{
    //

    public function create(){
    	$questions = Question::all();

    	return view('front.creationQuestionnaire')->with('questions',$questions);
    }
    
    public function edite(string $userLink){
    	$questions = Question::all();
/*
        $date = Carbon::createFromDate(null);
        $heure = Carbon::createFromTime(null)->addHours(2); */

    $date_response_sondage = Reponse::orderBy('created_at','DESC')->get();
    $date_sondage = $date_response_sondage[0]->created_at;
    $heure_sondage =$date_response_sondage[0]->created_at->addHours(2);
   
            
    	$reponses = Reponse::UserLink($userLink)->pluck('reponse','question_id');

    	return view('front.reponseQuestionnaire',compact('reponses','questions','date_sondage','heure_sondage'));
    }


   

}
