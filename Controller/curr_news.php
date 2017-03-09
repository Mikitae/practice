<?php
/**
 * Created by PhpStorm.
 * User: Никитка
 * Date: 09.03.2017
 * Time: 23:36
 */

require_once '../Model/curr_news.php';

$data = $_GET;
$curr_news = get_Curr_News($data['id']);


require_once '../View/curr_news.php';