<?php

namespace App\Http\Controllers;

use App\Models\Tactic;
use Illuminate\Http\Request;

class MediumTacticController extends Controller
{
    public function store(Tactic $tactic)
    {
        $medium = $tactic->medium;
        $tactic->update(['medium' => $medium + 1]);
        return "ok";
    }
}
