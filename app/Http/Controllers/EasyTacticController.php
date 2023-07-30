<?php

namespace App\Http\Controllers;

use App\Models\Tactic;
use Illuminate\Http\Request;

class EasyTacticController extends Controller
{
    public function store(Tactic $tactic)
    {
        $easy = $tactic->dislikes;
        $tactic->update(['easy' => $easy + 1]);
        return "ok";    }
}
