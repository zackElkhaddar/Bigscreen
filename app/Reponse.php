<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reponse extends Model

{
	public function scopeUserLink($query, $userLink){

        return $query->where('user_id',$userLink);
     }
     
	protected $fillable = ['reponse','user_id','question_id'];
    //une réponse appartient à une question
    
    public function question(){
    	return $this->belongsTo('App\Question');
    }

}
