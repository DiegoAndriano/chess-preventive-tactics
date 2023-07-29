<?php

namespace App\Http\Controllers;

use App\Models\Tactic;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $tactics = Tactic::get();

        return view('welcome', [
            'tactic' => $tactics
        ]);
    }
}
