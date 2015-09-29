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

class PhotoRepository extends Repository
{

    function model()
    {
        return 'App\Photo';
    }
 public function getPhotosByAlbum($photo, $albumID, $recCount){
        return $this->makeModel()->where('album_id',"=", $albumID)->select('id','title', 'image')->paginate($recCount);
    }
 public function getPhotosByAlbumCollection($photo, $albumID, $recCount){
        return $this->makeModel()->where('album_id',"=", $albumID)->select('id','title','description', 'image')->paginate($recCount);
    }

 

}