<?php
    session_start();
    require_once 'connect.php'; 

    $id = $_GET['id'];
    $name = trim($_GET['name']);
    $type = trim($_GET['type']);
    $number = trim($_GET['number']);
    $cont = trim($_GET['cont']);

    if ($number === '' or $number === 'бн' or $number === ('б\н')) {
        $number = addslashes('б\н');
    }

    mysqli_query($connect, "UPDATE `goods` SET `name` = '$name', `type` = '$type', `number` = '$number', `cont` = '$cont' WHERE `goods`.`id` = '$id'");

    $_SESSION['message'] = 'Данные изменены';
    header("Location: ../info.php?id=$id");
?>