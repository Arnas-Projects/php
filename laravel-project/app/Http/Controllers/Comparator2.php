<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Comparator2 extends Controller
{
    public function compareNumbers2(int $num1, int $num2)
    {
        if ($num1 === $num2) {
            $result = 'Skaičiai yra lygūs';
        } else if ($num1 > $num2) {
            $result = "$num1 > $num2";
        } else {
            $result = "$num1 < $num2";
        }

        return view('compare.numbers2', ['sk1' => $num1, 'sk2' => $num2, 'rez' => $result]);
    }
}
