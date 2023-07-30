<?php

namespace App\Http\Controllers;

use App\Models\Tactic;
use Illuminate\Http\Request;

class TacticAnswerController extends Controller
{
    public function index(Tactic $tactic)
    {
        # i know it's still easy to get the answers to a tactic
        return $tactic->answer;
    }
}
