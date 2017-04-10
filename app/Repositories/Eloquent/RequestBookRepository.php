<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\RequestBookRepositoryInterface;
use App\Models\RequestBook;

class RequestBookRepository extends BaseRepository implements RequestBookRepositoryInterface
{
    public function model()
    {
        return RequestBook::class;
    }
}
