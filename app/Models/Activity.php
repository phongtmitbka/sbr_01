<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $table = 'activities';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
