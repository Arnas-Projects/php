<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BebrasController;
use App\Http\Controllers\BarsukasController;
use App\Http\Controllers\BgColor;
use App\Http\Controllers\Comparator;
use App\Http\Controllers\Comparator2;
use App\Http\Controllers\SumController;
use App\Http\Controllers\BijunasController as B; // sutrumpinam iki B

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bebras', function() {
    return '<h1>Labas, Bebrai</h1>';
});

Route::get('/pas/barsuka', function() {
    return view('barsukas');
});

// BebrasController::class === App\Http\Controllers\BebrasController
Route::get('/paprastas/bebras', [BebrasController::class, 'paprastasBebras']);
Route::get('/blade/bebras', [BebrasController::class, 'bladeBebras']);


// {spalva} --> kintamasis, gali būti bet kas
Route::get('/spalvotas-bebras/{spalva}', [BebrasController::class, 'spalvotasBebras']);

// Sukurti Barsuko kontrolerį, sukurti barsuke kokį nors metodą, kuris ką nors rodo
// Surautinti to kontrolerio metodą route faile
// Patikrinti ar veikia
Route::get('/cia/barsukas', [BarsukasController::class, 'rodytiBarsuka']);


// Padaryti sumatorių, kuris suvedus suma/8/9 rodytų "8 + 9 = 17"
// Reikia naujo kontrolerio, metodo, route'o ir blade failo

Route::get('/suma/{num1}/{num2}', [SumController::class, 'sumuoti']);


/*
    Sukurti nuorodą į orange.php puslapį. 
    Paspaudus ant nuorodos background yra nuspalvinamas oranžine spalva.
    Sukurti input'ą ir mygtuką. 
    Įrašius spalvą į input ir paspaudus mygtuką background'o spalva pasikeičia į tą, kuri įrašyta input tag'e.
*/

Route::get('/background/{color}', [BgColor::class, 'dyeBackground']);

/*
    Sukurti programą, kuri palygintų du skaičius ir išvestų atsakymą kuris yra didesnis.
    Jeigu skaičiai vienodi, išvesti atsakymą, kad skaičiai yra lygūs.
    compare/15/8
*/

Route::get('/compare/{sk1}/{sk2}', [Comparator::class, 'compareNumbers']);

Route::get('/compare2/{num1}/{num2}', [Comparator2::class, 'compareNumbers2']);

Route::get('/bijunas', [B::class, 'startas']);