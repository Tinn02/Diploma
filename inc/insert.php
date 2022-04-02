<?php

    session_start();
    require_once 'connect.php'; 

    $name = trim($_REQUEST['name']);
    $type = trim($_REQUEST['type']);
    $number = trim($_REQUEST['number']);
    $cont = trim($_REQUEST['cont']);

    mysqli_query($connect, "INSERT INTO `goods` (`id`, `name`, `type`, `number`, `cont`) VALUES (NULL, '$name', '$type', '$number', '$cont')");

    $_SESSION['message'] = 'Данные внесены';
    header('Location: ../ins.php');
?>