<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Головна</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="all">
    <div class="purple-header">
    <header>
        <a href="statistic.php" class="head">Статистика</a>
    </header>
    <h1>Тест з PHP</h1>
    </div>
    <form method="post" action="results.php">
        <input placeholder="Введіть ваше ім'я" class="text radius" name="name"><br>
        1. Що означає абревіатура PHP?<br>
        <input type="radio" name="q1" value="0" class="input">Public Hosting Platform<br>
        <input type="radio" name="q1" value="0" class="input">Preformatted Hypertext Processor<br>
        <input type="radio" name="q1" value="0" class="input">PHP: Hypertext Preprocessor<br>
        <input type="radio" name="q1" value="1" class="input">Private Home Page<br>
        2. Як створити зміну name в РНР?<br>
        <input type="radio" name="q2" value="1" class="input">$name<br>
        <input type="radio" name="q2" value="0" class="input">let name<br>
        <input type="radio" name="q2" value="0" class="input">variable name<br>
        <input type="radio" name="q2" value="0" class="input">?name<br>
        3. Яка з наведених нижче функцій використовується для виведення тексту на екран у РНР?<br>
        <input type="radio" name="q3" value="0" class="input">display<br>
        <input type="radio" name="q3" value="1" class="input">echo<br>
        <input type="radio" name="q3" value="0" class="input">write<br>
        <input type="radio" name="q3" value="0" class="input">output<br>
        4. Який оператор використовується для виконання умовних операцій у РНР?<br>
        <input type="radio" name="q4" value="0" class="input">for<br>
        <input type="radio" name="q4" value="0" class="input">foreach<br>
        <input type="radio" name="q4" value="1" class="input">loop<br>
        <input type="radio" name="q4" value="0" class="input">if<br>
        5. Які з наступних функцій використовуються для з'єднання з базою даних РНР?<br>
        <input type="radio" name="q5" value="0" class="input">mysqli_connect<br>
        <input type="radio" name="q5" value="0" class="input">connect_to_db<br>
        <input type="radio" name="q5" value="0" class="input">db_open<br>
        <input type="radio" name="q5" value="1" class="input">db_connection<br>
        6. Що означає абревіатура РРО?<br>
        <input type="radio" name="q6" value="1" class="input">PHP Database Object<br>
        <input type="radio" name="q6" value="0" class="input">Personal Data Organizer<br>
        <input type="radio" name="q6" value="0" class="input">PHP Data Objects<br>
        <input type="radio" name="q6" value="0" class="input">Public Database Operator<br>
        7. Який символ використовується для початку однорядкового коментаря в РНР?<br>
        <input type="radio" name="q7" value="1" class="input">/*<br>
        <input type="radio" name="q7" value="0" class="input">//<br>
        <input type="radio" name="q7" value="0" class="input">--<br>
        <input type="radio" name="q7" value="0" class="input">^^<br>
        8. Яким чином ви підключаєте файл з кодом РНР до іншого файлу?<br>
        <input type="radio" name="q8" value="0" class="input">include "file.php"<br>
        <input type="radio" name="q8" value="0" class="input">import "file.php"<br>
        <input type="radio" name="q8" value="0" class="input">link "file.php<br>
        <input type="radio" name="q8" value="1" class="input">load "file.php<br>

        <input class="submit" type="submit">
    </form>
</div>
</body>
</html>
<?php

?>
