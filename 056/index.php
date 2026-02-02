
<?php

// echo '<pre>';

// print_r($_SERVER);

$url = $_SERVER['REQUEST_URI'];

const INSTALL_DIR = '/grupe5-php/056/';

$url = str_replace(INSTALL_DIR, '', $url);

$url = explode ('/', $url);

// print_r($url);

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color Background</title>
    <style>
        body {
            background-color: <?= $url[0] ?? 'pink' ?>;
            margin: 0;
            padding: 0;
        }
    </style>
</head>

<body>

</body>

</html>