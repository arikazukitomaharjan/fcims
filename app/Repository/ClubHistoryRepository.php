<?php

namespace app\Repository;

use Bosnadev\Repositories\Contracts\RepositoryInterface;
use Bosnadev\Repositories\Eloquent\Repository;
use App\Repository\ClubHistoryRepository as ClubHistory;

class ClubHistoryRepository  extends Repository
{
	
    function model()
    {
        return 'App\ClubHistory';
    }

    public function getClubHistoryPaginate(){
    	return $this->makeModel()->paginate(12);

    }
     public function getClubHistoryRanking(){
    	return $this->makeModel()->orderBy('goal_count','DESC')->paginate(10);

    }
    public function getPlayerByCLub($clubHistoryId){
        return $this->makeModel()  ->join('clubs', 'clubs.id', '=', 'club_histories.club_id')
            ->join('player_histories', 'player_histories.current_club_id', '=', 'clubs.id')
            ->join('players', 'players.id', '=', 'player_histories.player_id')
            ->where('club_histories.id', '=', $clubHistoryId)
            ->get([
                'clubs.name AS clubName',
                'player_histories.player_id',
                'player_histories.position',
                'players.name AS playerName',
            ]);
    }
}