<?php

echo '<body style="background-color: #444; color: white; font-size: 24px; line-height: 1.5;">';


//////////////////////////////////////////////////////////////////////////////////////////////////
/*
    10 užduotis
    
    Sugeneruokite 10 skaičių masyvą pagal taisyklę: 
    Du pirmi skaičiai - atsitiktiniai nuo 5 iki 25. 
    
    Trečias - pirmo ir antro suma. 
    
    Ketvirtas - antro ir trečio suma. 
    
    Penktas - trečio ir ketvirto suma ir t.t.
*/
echo '<hr>10 užduotis<hr><br>';

echo '<pre>';

$newArray = [];

for ($i = 0; $i < 10; $i++) {

    $random = rand(5, 25);

    if ($i <= 1) {
        $newArray[] = $random;
    } else {
        $newArray[] = $newArray[$i - 1] + $newArray[$i - 2];
    }
}

print_r($newArray);
