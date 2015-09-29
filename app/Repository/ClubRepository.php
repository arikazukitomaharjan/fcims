<?php

namespace app\Repository;

use Bosnadev\Repositories\Contracts\RepositoryInterface;
use Bosnadev\Repositories\Eloquent\Repository;
use App\Repository\ClubRepository as Club;

class ClubRepository extends Repository
{
    function model()
    {
        return 'App\Club';
    }
}