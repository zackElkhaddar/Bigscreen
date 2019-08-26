<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reponse extends Model
{
    //une réponse appartient à une question
    public function question(){
    	return $this->belongsTo('App\Question');
    }

}
