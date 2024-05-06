<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class StudyController extends Controller
{
    public function index(Request $request)
    {
        $message = "";
        if($request->pgn != null){
            $message = "Success loading study!";
        }

        $lichessStudy = $request->pgn ?? "yS9QxRwR";

        $pgns = Http::get("https://lichess.org/api/study/{$lichessStudy}.pgn?orientation=true")->body();

        if($pgns == "404 - Resource not found") {
            $message = "Bad format or non existant study.";
        }

        $pgns = explode("\n\n\n", $pgns);
        $pgn = $pgns[rand(0, count($pgns) - 1)];

        $pgn = explode("\n", $pgn);
        $finalPgn = [
            'name' => explode("\"", $pgn[0])[1],
            'opening' => $pgn[5],
            'orientation' => explode("\"", $pgn[9])[1],
            'pgn' => explode(" ", $pgn[11]),
        ];

        if($request->wantsJson()){
            return ['finalPgn' => $finalPgn, 'message' => $message];
        }

        return view('study', ['finalPgn' => $finalPgn]);
    }
}
