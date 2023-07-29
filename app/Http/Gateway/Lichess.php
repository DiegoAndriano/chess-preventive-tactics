<?php

namespace App\Http\Gateway;

use Illuminate\Support\Facades\Http;
use Onspli\Chess\PGN;

class Lichess implements ILichess
{
    public function get(): array
    {
        $tacticUrl = config('urls.LICHESS_TACTICS');
        $bestMoveUrl = config('urls.BEST_MOVE');

        try {
            $tacticResponse = Http::get(
                "{$tacticUrl}/ukmZg"
            )->body();


        } catch (\Exception $e) {

        }
        $tactic = json_decode($tacticResponse, true);
        $result = explode(' ', $tactic['game']['pgn']);
        unset($result[count($result) - 1]);
        $pgn = implode(' ', $result);
        $pgn = new PGN($pgn);

        try {
            $bestMoveResponse = Http::get(
                "{$bestMoveUrl}?fen={$pgn->get_current_fen()}&depth=13&mode=bestmove"
            )->body();
        } catch (\Exception $e) {

        }

        $bestMoves = json_decode($bestMoveResponse, true);

        return [
            'tactic' => $tactic,
            'bestMoves' => $bestMoves
        ];
    }
}
