<?php

$budas = $_SERVER['REQUEST_METHOD'];

if ($budas == 'POST') {
    $spalva = 'green';
}

if ($budas == 'GET') {
    $spalva = 'yellow';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Two Buttons</title>
</head>

<body style="background-color: <?= $spalva ?>;">

    <form method="POST">
        <button type="submit">Button 1</button>
    </form>

    <form method="GET">
        <button type="submit">Button 2</button>
    </form>

</body>

</html>