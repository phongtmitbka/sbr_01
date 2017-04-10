<?php

namespace App\Repositories\Eloquent;

use App\Models\Like;
use App\Repositories\Contracts\LikeRepositoryInterface;

class LikeRepository extends BaseRepository implements LikeRepositoryInterface
{
    public function model()
    {
        return Like::class;
    }

    public function findLike($reviewId, $userId)
    {
        return $this->model->where('review_id', $reviewId)
            ->where('user_id', $userId);
    }
}
