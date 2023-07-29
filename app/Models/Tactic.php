<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tactic extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $appends = ['like_route', 'dislike_route'];

    public function getLikeRouteAttribute()
    {
        return '/like/' . $this->id;
    }

    public function getDislikeRouteAttribute()
    {
        return '/dislike/' . $this->id;
    }
}
