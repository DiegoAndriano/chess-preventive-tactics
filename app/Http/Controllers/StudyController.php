<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class StudyController extends Controller
{
    public function index()
    {
        $pgns = Http::get("https://lichess.org/api/study/yS9QxRwR.pgn?orientation=true")->body();
        $pgns = explode("\n\n\n", $pgns);
//        dd($pgns);
//        $pgn = $pgns[rand(0, count($pgns) - 1)];
        $pgn = $pgns[38];

        $pgn = explode("\n", $pgn);
        $finalPgn = [
            'name' => explode("\"", $pgn[0])[1],
            'opening' => $pgn[5],
            'orientation' => explode("\"", $pgn[9])[1],
            'pgn' => explode(" ", $pgn[11]),
        ];

        return view('study', ['finalPgn' => $finalPgn]);
    }
}
