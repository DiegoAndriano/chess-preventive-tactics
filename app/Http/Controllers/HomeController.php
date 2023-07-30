<?php

namespace App\Http\Controllers;

use App\Models\Tactic;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $easyTactics = Tactic::get()->filter(function(Tactic $tactic){
            return ($tactic->easy >= $tactic->medium) && ($tactic->easy >= $tactic->hard);
        })->sortBy('easy');
        $mediumTactics = Tactic::get()->filter(function(Tactic $tactic){
            return ($tactic->medium > $tactic->easy) && ($tactic->medium > $tactic->hard);
        });
        $hardTactics = Tactic::get()->filter(function(Tactic $tactic){
            return ($tactic->hard > $tactic->medium) && ($tactic->hard > $tactic->easy);
        });

        $merged = $mediumTactics->merge($hardTactics);
        $merged = $easyTactics->merge($merged);
        return view('welcome', [
            'tactic' => $merged
        ]);
    }
}
