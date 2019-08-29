<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Question;
use App\Reponse;
class ReponseController extends Controller
{
    public function store(Request $request){

    $user_id = Str::uuid()->toString();

    $this->validate($request,[
    'reponseB.*' => 'required|min:1|max:255',
    'reponseA.*' => 'required',
    'reponseC.*' => 'required'
    ]);

    $reponses = array_replace(
    			$request->reponseB,
    			$request->reponseA,
    			$request->reponseC
    );

    ksort($reponses);

    foreach($reponses as $key =>$value){

    	Reponse::create([

    	'reponse' =>$value,
    	'question_id' =>$key,
    	'user_id' =>$user_id

    	]);
      }


     return redirect('/validation')->with(
     "success",
     "Toute l’équipe de <strong>Bigscreen</strong> vous remercie pour votre engagement. Grâce à 
     votre investissement, nous vous préparons une application toujours plus 
     facile à utiliser, seul ou en famille.<br> Si vous désirez consulter vos réponse 
     ultérieurement, vous pouvez consultez cette adresse:
     <a href='".url("/$user_id")."'/>" .url("/$user_id"). "  </a>"

     );
    
	}
}
