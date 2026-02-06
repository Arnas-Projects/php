<?php

echo '<body style="background-color: #444; color: white; font-size: 24px; line-height: 1.5;">';


$masyvas = range('A', 'K');

echo '<pre>';

print_r($masyvas);

// Surasti "G"

/*
    KAIP ir KAS
    =====================================
    KAIP surasti G masyve?

    KAS žymi vietą masyve? --> Indeksas

    -------------------------------------

    KAIP surasti masyvo indeksą?

    KAS yra ieškojimas masyve? --> ėjimas per visus elementus, kol surandi, ko ieškai

    -------------------------------------

    KAIP eiti per masyvą? ----> daryti foreach ciklą ==> (susikurk tuščią ciklą)

    -------------------------------------

    KAIP surasti G raidę? ----> lyginant reikšmę su "G"

    -------------------------------------

    KAS patvirtina suradimą? ----> palyginimas su if

    -------------------------------------

    KAIP lyginti masyvo reikšmę su duota reikšme? ----> naudojant foreach duodamą kintamąjį su reikšme
*/

foreach ($masyvas as $indeksas => $raide) {
    if ($raide == 'G') {
        echo 'Suradau \'G\' raide ' . $indeksas . ' indekse';
    }
};


/*
    Padarykite puslapį su dviem mygtukais. 
    
    Mygtukus įdėkite į dvi skirtingas formas - vieną 
    GET ir kitą POST. 
    
    Nenaudodami jokių konkrečių $_GET ar $_POST reikšmių, 
    nuspalvinkite foną žaliai, kai paspaustas mygtukas 
    iš GET formos ir geltonai- kai iš POST

    -------------------------------------------------------------------------------------------
    -------------------------------------------------------------------------------------------

    Kaip padaryti puslapį su 2 mygtukais?

    Kaip įdėti mygtukus į formas?

    Kas yra forma? ----> <form>

    Kas yra GET forma?
    Kas yra POST forma?

    Kas yra $_GET reikšmė?
    Kas yra $_GET? ----> masyvas, kuriame laikoma per query metodą perduodami duomenys

    kaip duomenys yra perduodami? ----> dedant input laukelius į formą?

    Kas yra POST forma? ----> su post metodu
    Kas yra POST metodas? ----> būdas perduoti informaciją į serverį

    Kaip serveris sužino koks būdas naudojamas?

    Kas rodo serveryje perdavimo būdą? ----> $_SERVER
*/