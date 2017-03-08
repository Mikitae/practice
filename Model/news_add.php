<?php
require_once '../Function/db.php';
/**
 * Created by PhpStorm.
 * User: Никитка
 * Date: 07.03.2017
 * Time: 18:30
 */
function Add_News($news){
    //mysqli_query("INSERT INTO 'news'('text') VALUES ($news)");
    //$mysqli->
    global $mysqli;
    $mysqli->query("INSERT INTO `news`(`text`) VALUES ('".$news."')");
}