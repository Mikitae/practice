<?php
/**
 * Created by PhpStorm.
 * User: Никитка
 * Date: 07.03.2017
 * Time: 18:20
 */



/*

//$mysqli = new mysqli("localhost","root","","php_lessons");
$link = mysqli_connect("localhost","root","","php_lessons");
$res = mysqli_query($link,'INSERT INTO \'news\'(\'text\') VALUES (\'chlen\')');
//$mysqli->query("INSERT INTO 'news'('text') VALUES ('chlen')");
//$res = $mysqli->query("INSERT INTO `news`(`text`) VALUES (`chlen`)");
if ($res){
    echo "ooooook";
}else{
    echo "noooot ooooook";
}

*/

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
}



