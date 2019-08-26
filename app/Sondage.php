<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sondage extends Model
{
    //un sondage contient plusieurs questions
    public function questions(){
    	return $this->hasMany('App\Question');

    }

    //un sondage contient plusieurs reponses
    public function reponses(){
    	return $this->hasMany('App\Reponse');

    }

}
