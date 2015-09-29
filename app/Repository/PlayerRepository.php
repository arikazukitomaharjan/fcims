<?php

namespace app\Repository;

use Bosnadev\Repositories\Contracts\RepositoryInterface;
use Bosnadev\Repositories\Eloquent\Repository;
use App\Repository\PlayerRepository as Player;

class PlayerRepository extends Repository
{
    function model()
    {
        return 'App\Player';
    }
     public function getPlayerByClub($player, $albumID){
        return $this->makeModel()->where('club_id',"=", $albumID)->select('id','name', 'image');
    }
    public function postPlayerSearch(){
        $first = $this->makeModel()->where('name', "LIKE", '%' . $search_text . '%')->orwhere('date_created',
            "LIKE", '%' . $date . '%')->where('category_id', "=", $type);
    }
}