<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model {

	protected $guarded = [];
	 	public function homeclub()
    {
        return $this->belongsTo('App\Club','home_club_id');
    }	
    public function awayclub()
    {
        return $this->belongsTo('App\Club', 'away_club_id');
    }
      public function championship()
    {
        return $this->belongsTo('App\ChampionshipDetail');
    }
}
