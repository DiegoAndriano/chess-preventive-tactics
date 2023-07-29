<?php

namespace App\Http\Controllers;

use App\Models\Tactic;
use Illuminate\Http\Request;

class LikeTacticController extends Controller
{
    public function store(Tactic $tactic)
    {
        $likes = $tactic->likes;
        $tactic->update(['likes' => $likes + 1]);
        return "ok";
    }
}
