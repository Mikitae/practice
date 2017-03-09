<?php
/**
 * Created by PhpStorm.
 * User: Никитка
 * Date: 09.03.2017
 * Time: 23:46
 */

require_once '../Function/db.php';

function get_Curr_News($id){
    global $mysqli;
    $res = $mysqli->query("SELECT `text`,`date`,`id` FROM `news` WHERE `id`=".$id."");
    return $res->fetch_assoc();
}
