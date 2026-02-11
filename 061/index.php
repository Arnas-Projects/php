<?php

$host = '127.0.0.1';
$db   = 'forest';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($dsn, $user, $pass, $options);


// jeigu 'a' tai tada yra kažkoks action
if (isset($_GET['a'])) {
    if ('plant' == $_GET['a']) {

        $title = $_POST['title'] ? $_POST['title'] : 'Nežinomas';
        $height = $_POST['height'] ? $_POST['height'] : 0;
        $type = $_POST['type'] ? $_POST['type'] : 'palmė';

        // INSERT INTO table_name (column1, column2, column3, ...)
        // VALUES (value1, value2, value3, ...);

        // $sql = "
        //     INSERT INTO trees (title, height, type)
        //     VALUES ('$title', $height, '$type')
        // ";

        // $pdo->query($sql);

        $sql = "
            INSERT INTO trees (title, height, type)
            VALUES (?, ?, ?)
        ";

        $stmt = $pdo->prepare($sql); // vykdome paruošimą
        $stmt->execute([$title, $height, $type]); // vykdome užklausą

    }

    if ('cut' == $_GET['a']) {

        $id = $_POST['id'] ? $_POST['id'] : 0;

        // DELETE FROM table_name WHERE condition;

        // $sql = "
        //     DELETE FROM trees
        //     WHERE id = $id
        // ";

        $sql = "
            DELETE FROM trees
            WHERE id = ?
        "; // paruošta užklausa

        $stmt = $pdo->prepare($sql); // vykdome paruošimą
        $stmt->execute([$id]); // vykdome užklausą

        // $pdo->query($sql);
    }

    if ('grow' == $_GET['a']) {

        $id = $_POST['id'] ? $_POST['id'] : 0;
        $height = $_POST['height'] ? $_POST['height'] : 0;

        // UPDATE table_name
        // SET column1 = value1, column2 = value2, ...
        // WHERE condition;

        // $sql = "
        //     UPDATE trees
        //     SET height = ?, title = CONCAT(title, ' paaugęs')
        //     WHERE id = ?
        // ";

        $sql = "
            UPDATE trees
            SET height = ?
            WHERE id = ?
        ";

        $stmt = $pdo->prepare($sql); // vykdome paruošimą
        $stmt->execute([$height, $id]); // vykdome užklausą



    }



    header('Location: http://localhost/grupe5-php/061/');
    die;
}



/*
    SELECT column1, column2, ...
    FROM table_name;
*/

// SQL'e <> yra != atitikmuo (nelygu)
$sql = "
    SELECT id, title, height, type
    FROM trees
    -- ORDER BY height DESC
    -- WHERE type = 'lapuotis'
    -- WHERE height < 10 AND type = 'lapuotis'
    -- WHERE type = 'lapuotis' OR type = 'spygliuotis'
    -- WHERE type !='palmė'
    -- WHERE type <> 'lapuotis'
    -- ORDER BY type, height DESC
";

$stmt = $pdo->query($sql);

$sql = "
    SELECT COUNT(*) AS counter, AVG(height) AS average
    FROM trees
";

$stmt = $pdo->query($sql);
$data = $stmt->fetch();

// echo '<pre>';
// print_r($data);
// echo '</pre>';

$sql = "
    SELECT id, title, height, type
    FROM trees
";

$stmt = $pdo->query($sql);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tree Database</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            flex-direction: column;
            gap: 30px;
        }

        pre {
            color: white;
        }

        .container {
            background: white;
            border-radius: 10px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
            padding: 30px;
            max-width: 900px;
            width: 100%;
        }

        h1 {
            color: #333;
            margin-bottom: 30px;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        thead {
            background: #667eea;
            color: white;
        }

        th {
            padding: 15px;
            text-align: left;
            font-weight: 600;
            border-bottom: 3px solid #667eea;
        }

        td {
            padding: 12px 15px;
            border-bottom: 1px solid #e0e0e0;
        }

        tbody tr:hover {
            background-color: #f5f5f5;
            transition: background-color 0.3s ease;
        }

        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        form {
            display: flex;
            gap: 15px;
            margin-bottom: 30px;
            justify-content: center;
        }

        input,
        select {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        button {
            padding: 10px 20px;
            background-color: #667eea;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #556cd6;
        }

        button.red {
            background-color: crimson;
        }

        button.red:hover {
            background-color: #c22427;
        }

        button.green {
            background-color: green;
        }

        button.green:hover {
            background-color: darkgreen;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>🌳 Tree Database</h1>
        <h3>Count: <?= $data['counter'] ?> m</h3>
        <h3>Average: <?= $data['average'] ?> m</h3>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tree Title</th>
                    <th>Height (m)</th>
                    <th>Tree Type</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $stmt->fetch()) : ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['title'] ?></td>
                        <td><?= $row['height'] ?></td>
                        <td><?= $row['type'] ?></td>
                    </tr>
                <?php endwhile ?>
            </tbody>
        </table>
    </div>

    <div class="container">
        <form method="POST" action="?a=plant">
            <input type="text" name="title" placeholder="Tree Title">
            <input type="number" name="height" placeholder="Height (m)" step="0.01">
            <select name="type">
                <option value="">Select Type</option>
                <option value="lapuotis">Lapuotis</option>
                <option value="spygliuotis">Spygliuotis</option>
                <option value="palmė">Palmė</option>
            </select>
            <button type="submit">Plant Tree</button>
        </form>

        <form method="POST" action="?a=cut">
            <input type="text" name="id" placeholder="Tree ID">
            <button type="submit" class="red">Cut Tree</button>
        </form>

        <form method="POST" action="?a=grow">
            <input type="text" name="id" placeholder="Tree ID">
            <input type="number" name="height" placeholder="Height (m)" step="0.01">
            <button type="submit" class="green">Grow Tree</button>
        </form>
    </div>
</body>

</html>