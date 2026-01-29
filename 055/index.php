<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB Mechanic</title>
    <style>
        body {
            background-color: #444;
            color: white;
        }
    </style>
</head>

<body>
    <h1>
        <?php
        $digit = rand(10000, 99999);
        echo $digit;
        ?>
    </h1>
    <h2>
        <?php
        $bebras = $_GET['bebras'] ?? 'nieko';
        echo $bebras;
        ?>
    </h2>
    <h3>
        <?php
        $suma = ($_GET['a'] ?? 0) + ($_GET['b'] ?? 0);
        echo $suma;
        ?>
    </h3>
</body>

</html>