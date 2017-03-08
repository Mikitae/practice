<?php

/**
 * Created by PhpStorm.
 * User: Никитка
 * Date: 07.03.2017
 * Time: 18:47
 */
//header('Content-Type: text/html; charset=utf-8');
session_start();

require_once '../Model/news_add.php';

$data = $_POST;

if (isset($data['go'])){

    if (trim($data['news'])==''){
        $errors[] = "Введите новость";
    }

    if (isset($errors)){
        $_SESSION['add_err'] = array_shift($errors);

        // header("location: ".__DIR__."//news_add.php");
        //header("location: /second_pr/practice/Controller/news_add.php");

    }
    else{
        Add_News($data['news']);
        if (isset($_SESSION['add_err']))
            unset($_SESSION['add_err']);
        $_SESSION['add_ok'] = true;
        //header("location: /second_pr/practice/Controller/news_add.php");

    }
}

require_once '../View/news_add.php';



