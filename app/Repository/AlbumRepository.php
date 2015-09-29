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

class AlbumRepository extends Repository
{

    function model()
    {
        return 'App\Album';
    }
    public function getGalleryPagination(){
    	return $this->makeModel()->paginate(12);
    }
    public function getsGalleryPagination(){
        return $this->makeModel()->paginate(12);
    }


}