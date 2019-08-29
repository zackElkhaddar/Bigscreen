<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reponse;
use App\Question;

class QuestionController extends Controller
{
    //
    public function create(){
    	$questions = Question::all();
    	return view('front.creationQuestionnaire')->with('questions',$questions);
    }
    
    public function edite(string $userLink){
    	$questions = Question::all();
    	$reponses = Reponse::UserLink($userLink)->pluck('reponse','question_id');
    	return view('front.reponseQuestionnaire',compact('reponses','questions'));
    }

}
