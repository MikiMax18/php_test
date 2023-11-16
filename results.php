<?php

$username = empty($_POST['name']) ? '' : $_POST['name'];
$total = 8;
$correct = empty(array_count_values($_POST)[1]) ? 0 : array_count_values($_POST)[1];

$incorrect = $total - $correct;

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Результати</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="all">
    <header>
        <a href="main.php" class="head">Назад</a>
    </header>
    <h1 class="r.h">Тест з PHP</h1>
    Ви пройшли тест!<br>
    Ось ваш результат:<br>
    <div class="res">
        <strong>
            <div class="vidstup">Всього: <?php echo $total ?><br></div>
            <div class="vidstup">Правильні відповіді:<?php echo $correct ?><br></div>
            <div class="vidstup">Неправильні відповіді:<?php echo $incorrect ?><br></div>
        </strong>
    </div>
</div>
</body>
</html>
