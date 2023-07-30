<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tactic extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $appends = ['easy_path','hard_path', 'medium_path', 'answer_path'];

    protected $hidden = ['answer'];

    public function getEasyPathAttribute()
    {
        return '/easy/' . $this->id;
    }

    public function getMediumPathAttribute()
    {
        return '/medium/' . $this->id;
    }
    public function getHardPathAttribute()
    {
        return '/hard/' . $this->id;
    }

    public function getAnswerPathAttribute()
    {
        return '/answer/' . $this->id;
    }
}
