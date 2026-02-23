<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BgColor extends Controller
{
    public function dyeBackground($color)
    {
        return view('background.colors', ['spalva' => $color]);
    }
}
