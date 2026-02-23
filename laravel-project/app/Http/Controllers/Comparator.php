<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Comparator extends Controller
{
    public function compareNumbers(int $sk1, int $sk2)
    {
        return view('compare.numbers', ['num1' => $sk1, 'num2' => $sk2]);
    }
}
