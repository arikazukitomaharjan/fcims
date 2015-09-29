<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class CoachDetail extends Model {

    protected $guarded = [];
    public function coach()
    {
        return $this->belongsTo('App\Coach');
    }
    public function club()
    {
        return $this->belongsTo('App\Club');
    }

}
