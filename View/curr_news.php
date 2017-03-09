<?php
/**
 * Created by PhpStorm.
 * User: Никитка
 * Date: 09.03.2017
 * Time: 23:57
 */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Новость № <?=$curr_news['id']?></title>
</head>
<body>

<p>Новость: <?=$curr_news['text']?></p>
<p>Дата: <?=$curr_news['date']?></p>
<br><br>
<a href="../Controller/">На главную</a>
</body>
</html>
