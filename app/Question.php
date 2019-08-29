<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
	
    //une question a une seule reponse
    public function reponse(){
    	return $this->hasOne('App\Reponse');
    }

    //une question appartient à un sondage
    public function sondage(){
    	return $this->belongsTo('App\Sondage');

    }

}
