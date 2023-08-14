<?php

namespace App\Http\Controllers;

use App\Models\Tactic;
use Illuminate\Http\Request;

class BeatenController extends Controller
{
    public function update(Tactic $tactic)
    {
        $tactic->update(['beaten' => $tactic['beaten'] + 1]);
        return "ok";
    }
}
