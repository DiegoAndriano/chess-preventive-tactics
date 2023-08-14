<?php

namespace App\Http\Controllers;

use App\Models\Tactic;
use Illuminate\Http\Request;

class WonController extends Controller
{
    public function update(Tactic $tactic)
    {
        $tactic->update(['won' => $tactic['won'] + 1]);
        return "ok";
    }
}
