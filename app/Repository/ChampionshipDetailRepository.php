<?php

namespace app\Repository;

use Bosnadev\Repositories\Contracts\RepositoryInterface;
use Bosnadev\Repositories\Eloquent\Repository;
use App\Repository\ChampionshipDetailRepository as ChampionshipDetail;

class ChampionshipDetailRepository  extends Repository
{
    function model()
    {
        return 'App\ChampionshipDetail';
    }
}