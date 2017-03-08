<?php
/**
 * Created by PhpStorm.
 * User: Никитка
 * Date: 08.03.2017
 * Time: 18:38
 */

//mysql_connect('localhost','root','');

//$res = @mysqli_connect('localhost', 'username', 'password', 'php_lessons');
//mysqli_connect("localhost","root","","php_lessons");
//@mysql_select_db('php_lessons');

$mysqli = new mysqli('localhost','root','','php_lessons');
$mysqli->set_charset("utf8");
