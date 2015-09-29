<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class PlayerHistory extends Model {

	protected $guarded = [];
	public function player()
    {
        return $this->belongsTo('App\Player');
    }
   	public function preclub()
    {
        return $this->belongsTo('App\Club','previous_club_id');
    }	
    public function curclub()
    {
        return $this->belongsTo('App\Club', 'current_club_id');
    }
  

}

