<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ClubHistory extends Model {

	protected $guarded = [];
	public function club()
    {
        return $this->belongsTo('App\Club');
    }
    public function championship()
    {
        return $this->belongsTo('App\ChampionshipDetail');
    }
     public function player()
    {
        return $this->belongsToMany('App\Player');
    }
}
