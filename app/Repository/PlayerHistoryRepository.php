<?php

namespace app\Repository;

use Bosnadev\Repositories\Contracts\RepositoryInterface;
use Bosnadev\Repositories\Eloquent\Repository;
use App\Repository\PlayerHistoryRepository as PlayerHistory;

class PlayerHistoryRepository  extends Repository
{
    function model()
    {
        return 'App\PlayerHistory';
    }
     public function getPlayerPaginate(){
    	return $this->makeModel()->paginate(12);
    }
}