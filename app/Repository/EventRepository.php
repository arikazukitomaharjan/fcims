<?php
/**
 * Created by PhpStorm.
 * User: shashi
 * Date: 4/23/15
 * Time: 7:06 PM
 */

namespace app\Repository;

use Bosnadev\Repositories\Contracts\RepositoryInterface;
use Bosnadev\Repositories\Eloquent\Repository;

class EventRepository extends Repository
{

    function model()
    {
        return 'App\Event';
    }
    public function getEventPagination(){
    	return $this->makeModel()->paginate(3);
    }
 

}