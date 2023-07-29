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
        # INIT -> esta tactica esta buena para iniciarla como first codeada y tutorial de qué es lo que queremos.
        # 1. e4 Nc6 2. d4 d5 3. exd5 Qxd5 4. Nf3 Nf6 5. Nc3 Qd8 6. d5 Nb4 7. Bc4 Bg4 8. h3 Bxf3


        # skewer
//hkRaB
//mZS3G
//af7Al
//W3IcN
//qzVEQ
        #pin
//9089H
//gFDyu
//YgyJ0
//pOunm
        try {
            $tacticResponse = Http::get(
                "{$tacticUrl}/hkRaB"
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
