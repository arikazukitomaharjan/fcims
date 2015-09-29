<?php
/**
 * Created by PhpStorm.
 * User: Sabin Maharjan
 * Date: 9/26/2015
 * Time: 5:47 AM
 */




namespace app\Repository;

use Bosnadev\Repositories\Contracts\RepositoryInterface;
use Bosnadev\Repositories\Eloquent\Repository;

class CoachDetailRepository extends Repository
{

    function model()
    {
        return 'App\CoachDetail';
    }

    function getCoachHistoryPagination()
    {
        return $this->makeModel()->paginate(10);
    }



}