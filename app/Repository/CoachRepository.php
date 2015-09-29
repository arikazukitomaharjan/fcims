<?php

namespace app\Repository;

use Bosnadev\Repositories\Contracts\RepositoryInterface;
use Bosnadev\Repositories\Eloquent\Repository;
use App\Repository\CoachRepository as Player;

class CoachRepository extends Repository
{
    function model()
    {
        return 'App\Coach';
    }
}