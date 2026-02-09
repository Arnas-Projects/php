<?php

// require __DIR__ . '/Tv.php';
// require __DIR__ . '/biblioteka/Knyga.php';
// require __DIR__ . '/Knyga.php';

require __DIR__ . '/vendor/autoload.php';


$knyga1 = new Mano\Ir\Tik\Mano\Knyga('Beko', 150);

$knyga2 = new AI\GPT5\Knyga('Copy', 'AI', 350);

echo '<pre>';

print_r($knyga1);
print_r($knyga2);

echo '<br>';

$knyga1->goWild();