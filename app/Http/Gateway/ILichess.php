<?php

namespace App\Http\Gateway;

use App\Games;

interface ILichess {
    public function get(): array;
}
