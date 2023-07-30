<?php

namespace App\Http\Controllers;

use App\Models\Tactic;
use Illuminate\Http\Request;

class HardTacticController extends Controller
{
    public function store(Tactic $tactic)
    {
        $hard = $tactic->hard;
        $tactic->update(['hard' => $hard + 1]);
        return "ok";
    }
}
