<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model {

	protected $guarded = [];

	
    public function playerhistories()
    {
        return $this->hasOne('App\playerHistory');
    }
}
