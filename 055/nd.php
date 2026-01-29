<?php


/*
    Generuokite atsitiktinį stringą, 
    pasinaudodami kodu md5(time()). 
    
    Visus skaitmenis stringe įdėkite į h1 tagą. 
    Raides palikite. 
    
    Jegu iš eilės eina keli skaitmenys, 
    juos į tagą reikią dėti kartu (h1 atsidaro prieš 
    pirmą ir užsidaro po paskutinio) Keitimui 
    naudokite pirmo patobulintą (jeigu reikia) 
    uždavinio funkciją ir preg_replace_callback();
*/

function textToH1(array $arr) : string
{
    $text = $arr[0];
    // print_r($text);
    // die;

    return '<h1 style="display: inline;"' . $text . '</h1>';
};

$var1 = md5(time());

echo $var1;

$newVar1 = preg_replace_callback('/\d+/', 'textToH1', $var1);

echo '<br><br>';

echo $newVar1;

echo '<br><br><hr><br>';

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////


$title = 'Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale.';
$title = str_replace([',', '.', '?'], '', $title);

$title = explode(' ', $title);
$count = 0;

foreach ($title as $word) {
    if ($word && mb_strlen($word) <= 5) { // multibaitinė stringo ilgio versija
        $count++;
    }
}


echo '<pre>';
echo $count;
echo '<br>';

print_r($title);


$title2 = 'Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale.';
