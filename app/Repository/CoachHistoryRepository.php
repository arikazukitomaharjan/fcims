<?php


namespace app\Repository;

use Bosnadev\Repositories\Contracts\RepositoryInterface;
use Bosnadev\Repositories\Eloquent\Repository;

class CoachHistoryRepository extends Repository
{

    function model()
    {
        return 'App\CoachHistory';
    }

    function getCoachHistoryPagination()
    {
        return $this->makeModel()->paginate(10);
    }



}