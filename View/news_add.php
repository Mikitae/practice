<?php
session_start();
/**
 * Created by PhpStorm.
 * User: Никитка
 * Date: 07.03.2017
 * Time: 18:30
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Добавляем новость</title>
</head>
<body>

<form action="add.php" method="post">
    <p><textarea rows="10" cols="45" name="news" placeholder="Ваша новость"  ></textarea></p>
    <br>
    <!--<button type="submit" name="go">Отправить</button>-->
    <input type="submit" name="go" value="Отправить">
    <br>
</form>

<?php
echo "<hr> Ошибочки: ".$_SESSION['add_err']."<hr>";
echo "<hr> add_ok: ".$_SESSION['add_ok']."<hr>";


if (isset($_SESSION['add_err'])){
    echo "<br><br><br>
        Ошибочки: ".$_SESSION['add_err'];
    }

if (isset($_SESSION['add_ok'])){
    echo "<br><br><br>KPACUBO";
    unset($_SESSION['add_ok']);
    }

?>

</body>
</html>