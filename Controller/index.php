<?php
/**
 * Created by PhpStorm.
 * User: Никитка
 * Date: 07.03.2017
 * Time: 18:20
 */

require_once '../Model/all_news.php';

$my_news = getNews();



require_once '../View/all_news.php';

/*
$mysqli=new mysqli('localhost','root','','php_lessons');
$mysqli->query("SET NAMES 'utf8'");
$q=$mysqli->query("select * from news");
while($r=$q->fetch_assoc()) {
    print_r($r);
}
$mysqli->query("INSERT INTO `news`(`text`) VALUES ('privki')");
echo $mysqli->error;


$q=$mysqli->query("select * from news");
while($r=$q->fetch_assoc()) {
    print_r($r);
}*/



