<?php

echo '<body style="background-color: #444; color: white; font-size: 24px; line-height: 1.5;">';


require __DIR__ . '/PrintIt2.php';
require __DIR__ . '/PrintIt.php';
require __DIR__ . '/Library.php';
require __DIR__ . '/MaironioLibrary.php';


$maironio = new MaironioLibrary();

$maironio->addBook('4 tankistai ir šuo Reksas', 'Zbignevas', '650125124');

$maironio->printArray($maironio->findBook('650125124'));

$maironio->kas(); // PrintIt2
$maironio->kasKas(); //PrintIt





echo '<pre>';

print_r($maironio);