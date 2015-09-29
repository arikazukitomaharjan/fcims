<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model {

	protected $guarded = [];
	public function photo()
    {
        return $this->hasMany('App\Photo');
    }

   
	 

}
