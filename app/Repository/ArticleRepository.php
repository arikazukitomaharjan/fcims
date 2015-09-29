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

class ArticleRepository extends Repository
{

    function model()
    {
        return 'App\Article';
    }

    function getArticlesByPublishedDate()
    {
        return $this->makeModel()->latest()->take(5)->paginate(5);
    }

    public function postArticleSearch($search_text){
    
/*
        // $date=$this->makeModel()->where('date_created', 'LIKE', $date . '%');
        $test = $this->makeModel()->where('description' , "LIKE",  '%' . $search_text . '%')->unionAll($first->getQuery())->get();*/


        return ($first);	
    }

}