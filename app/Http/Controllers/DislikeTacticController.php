<?php

namespace App\Http\Controllers;

use App\Models\Tactic;
use Illuminate\Http\Request;

class DislikeTacticController extends Controller
{
    public function store(Tactic $tactic)
    {
        $dislikes = $tactic->dislikes;
        $tactic->update(['dislikes' => $dislikes + 1]);
        return "ok";    }
}
