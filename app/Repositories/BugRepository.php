<?php

namespace App\Repositories;

use App\Bug;

class BugRepository extends ResourceRepository
{

    public function __construct(Bug $bug)
    {
        $this->model = $bug;
    }

}