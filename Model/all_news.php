<?php
/**
 * Created by PhpStorm.
 * User: Никитка
 * Date: 09.03.2017
 * Time: 19:22
 */

require_once '../Function/db.php';

function getNews(){
    global $mysqli;
    $res = $mysqli->query("SELECT `text`,`date`,`id` FROM `news` ORDER BY `date` DESC");
    echo $mysqli->error;

    while($r=$res->fetch_assoc()) {
        $all_news[]=$r;
        echo $mysqli->error;
    }
    if (isset($all_news))
    return $all_news;
    else
        return false;
}
