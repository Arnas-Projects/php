<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    // GET

    public function showGetForm()
    {
        return view('forms.get');
    }

    public function showSumFromGet(Request $req)
    {
        $d1 = $req->query('digit1');
        $d2 = $req->query('digit2');

        $rez = $d1 + $d2;

        return view('forms.get_result', ['result' => $rez]);
    }

    
    //POST

    public function showPostForm()
    {
        return view('forms.post');
    }

    public function makeSumFromPost(Request $req)
    {
        $d1 = $req->input('digit1');
        $d2 = $req->input('digit2');

        $rez = $d1 + $d2;

        session(['result' => $rez]); // irašymas į sesiją (pastovus)

        return redirect()->route('rezultato-rodymas');
        // ->with(['result' => $rez]); // flash to session (vienkartinis panaudojimas)
    }


    public function showSumFromPost()
    {
        $rez = session('result', 'Nėra'); // imam result, jeigu nieko, tada "Nėra"

        return view('forms.post_result', ['result' => $rez]);
    }
}
