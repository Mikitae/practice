<?php
session_start();
/**
 * Created by PhpStorm.
 * User: Никитка
 * Date: 07.03.2017
 * Time: 18:47
 */


$data = $_POST;


var_dump($data);
if (isset($data['go'])){

    if (trim($data['news'])==''){
        $errors[] = "Введите новость";

    }

    if (isset($errors)){
        $_SESSION['add_err'] = array_shift($errors);
        //header("location: ".__DIR__."/news_add.php");
        header("location: /second_pr/practice/View/news_add.php ");
    }
    else{
        if (isset($_SESSION['add_err']))
            unset($_SESSION['add_err']);
        $_SESSION['add_ok'] = true;
        header("location: /second_pr/practice/View/news_add.php ");
    }
   // var_dump($_SESSION['add_err']);
}
?>
<html><a href="<?=__DIR__.'/news_add.php '?>">sssssss</a></html>
<html><a href="/second_pr/practice/View/news_add.php ">aaaaaaa</a> </html>
