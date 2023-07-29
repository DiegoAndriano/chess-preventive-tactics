<?php

namespace App\Http\Controllers;

use App\Services\LichessService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(LichessService $lichessService)
    {
        $game = $lichessService->getGame();

        return view('welcome', [
            'bestMoves' => $game['bestMoves']['data'],
            'tactic' => $game['tactic']
        ]);
    }
}
