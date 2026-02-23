<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SumController extends Controller
{
    public function sumuoti(int $num1, int $num2)
    {
        return view(
            'suma.sumavimas',
            [
                'skaicius1' => $num1,
                'skaicius2' => $num2,
                'suma' => $num1 + $num2
            ]
        );
    }
}
