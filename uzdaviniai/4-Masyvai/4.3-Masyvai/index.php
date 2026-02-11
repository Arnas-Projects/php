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


////////////////////////////////////////////////////////////////////
echo '<hr>10 užduotis - DĖSTYTOJO SPRENDIMAS<hr>';

$masyvas[] = rand(5, 25); // automatiškai 0
$masyvas[] = rand(5, 25); // automatiškai 1

for ($i = 2; $i < 10; $i++) {
    $masyvas[$i] = $masyvas[$i - 1] + $masyvas[$i - 2];
    /*
        $i nuo 2 iki 9

        Kai $i = 2;
        $masyvas[2] = $masyvas[2 - 1] + $masyvas[2 - 2]
        $masyvas[2] = $masyvas[1] + $masyvas[0]
        [a, b, c]

        Kai $i = 3;
        $masyvas[2] = $masyvas[3 - 1] + $masyvas[3 - 2]
        $masyvas[3] = $masyvas[2] + $masyvas[1]
    */
}

echo '<pre>';
print_r($masyvas);