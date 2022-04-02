<?php
    session_start();
    require 'connect.php';

    $id = $_GET['id'];

    mysqli_query($connect, "DELETE FROM `goods` WHERE `goods`.`id` = '$id'");

    $_SESSION['message'] = 'Данные удалены';
    header('Location: ../del.php');
?>
