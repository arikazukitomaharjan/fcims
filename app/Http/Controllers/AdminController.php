<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repository\PlayerHistoryRepository as PlayerHistory;
use App\Repository\ClubHistoryRepository as ClubHistory;
use App\Repository\CoachHistoryRepository as CoachHistory;
use App\Repository\ChampionshipDetailRepository as Championship;

use Illuminate\Http\Request;

class AdminController extends Controller {

	public function dashboard(PlayerHistory $player,ClubHistory $club,CoachHistory $coach,Championship $championship){
         $player = count($player->all());
         $club=count($club->all());
         $coach=count($coach->all());
             $championship=count($championship->all());
        return view('admin/dashboard',compact('player','club','coach','championship'));
    }
    public function test(){
    	return view('test');
    }
 


}
