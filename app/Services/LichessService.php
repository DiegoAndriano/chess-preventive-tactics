<?php

namespace App\Services;

use App\Http\Gateway\ILichess;

class LichessService
{
    private ILichess $lichess;

    public function __construct(ILichess $lichess)
    {
        $this->lichess = $lichess;
    }

    public function getGame(): array
    {
        return $this->lichess->get();
    }
}
