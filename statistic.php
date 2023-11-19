<?php
require_once('db.php');
$query = 'SELECT * from results order by correct desc limit 10';
$rows = $connection->query($query);
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Статистика</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="all">
<header>
    <a href="main.php" class="head">Назад</a>
</header>
<h1>Статистика</h1>
<table border="2">
    <tr>
        <th>Ім'я</th>
        <th>Всього</th>
        <th>Правильні</th>
        <th>Неправильні</th>
    </tr>
    <?php
    while ($record = $rows->fetch_assoc())
    echo '<tr>
        <td>'.$record['name'].'</td>
        <td>'.$record['total'].'</td>
        <td>'.$record['correct'].'</td>
        <td>'.$record['incorrect'].'</td>
    </tr>';
    ?>
</table>
</div>
</body>
</html>