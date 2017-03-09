<?php
/**
 * Created by PhpStorm.
 * User: Никитка
 * Date: 09.03.2017
 * Time: 19:20
 */
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .element{
            margin: 20px 80px;
            background-color: #85dfff;
            color: #59550a;
            font-size: 20px;
        }
    </style>
    <title>Новостная лента</title>
</head>
<body>
<?php
if ($my_news){
    foreach ($my_news as $value)
            echo "<a href=\"../Controller/curr_news.php?id=".$value['id']."\"><div class=\"element\"> Статейка: ".$value['text']."<br>Время публикации: ".$value['date']."</div></a>";
}
?>
<br><br>
<a href="../Controller/news_add.php">Добавить новость</a>

</body>
</html>
