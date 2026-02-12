<?php
$host = '127.0.0.1';
$db   = 'forest';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // fečinam kaip masyvą
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($dsn, $user, $pass, $options);


// $sql = "
//     SELECT id, client_name
//     FROM clients
// ";

// $stmt = $pdo->query($sql);



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/grupe5-php/063/style.css">
    <title>Clients Database</title>
</head>

<body>

    <?php

    // SELECT column_name(s)
    // FROM table1
    // INNER JOIN table2
    // ON table1.column_name = table2.column_name;


    $sql = "
        SELECT clients.id, client_name, phones.id AS pid, phone_number
        FROM clients
        INNER JOIN phones
        ON clients.id = phones.client_id
    ";

    $stmt = $pdo->query($sql);

    ?>

    <div class="container">
        <h1>👥 Clients Database INNER</h1>
        <table>
            <thead>
                <tr>
                    <th>Client ID</th>
                    <th>Client Name</th>
                    <th>Phone ID</th>
                    <th>Phone number</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $stmt->fetch()) : ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['client_name'] ?></td>
                        <td><?= $row['pid'] ?></td>
                        <td><?= $row['phone_number'] ?></td>
                    </tr>
                <?php endwhile ?>
            </tbody>
        </table>
    </div>


    <?php

    // SELECT column_name(s)
    // FROM table1
    // LEFT JOIN table2
    // ON table1.column_name = table2.column_name;

    $sql = "
        SELECT c.id, client_name, p.id AS pid, phone_number
        FROM clients AS c
        LEFT JOIN phones AS p
        ON c.id = p.client_id
    ";

    $stmt = $pdo->query($sql);

    ?>


    <div class="container">
        <h1>👥 Clients Database LEFT</h1>
        <table>
            <thead>
                <tr>
                    <th>Client ID</th>
                    <th>Client Name</th>
                    <th>Phone ID</th>
                    <th>Phone number</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $stmt->fetch()) : ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['client_name'] ?></td>
                        <td><?= $row['pid'] ?></td>
                        <td><?= $row['phone_number'] ?></td>
                    </tr>
                <?php endwhile ?>
            </tbody>
        </table>
    </div>


    <?php

    // SELECT column_name(s)
    // FROM table1
    // RIGHT JOIN table2
    // ON table1.column_name = table2.column_name;

    $sql = "
        SELECT c.id, client_name, p.id AS pid, phone_number
        FROM clients AS c
        RIGHT JOIN phones AS p
        ON c.id = p.client_id
    ";

    $stmt = $pdo->query($sql);

    ?>


    <div class="container">
        <h1>👥 Clients Database RIGHT</h1>
        <table>
            <thead>
                <tr>
                    <th>Client ID</th>
                    <th>Client Name</th>
                    <th>Phone ID</th>
                    <th>Phone number</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $stmt->fetch()) : ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['client_name'] ?></td>
                        <td><?= $row['pid'] ?></td>
                        <td><?= $row['phone_number'] ?></td>
                    </tr>
                <?php endwhile ?>
            </tbody>
        </table>
    </div>

</body>

</html>