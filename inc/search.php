<?php 
    session_start();
    require 'connect.php';

    $search = trim($_GET['search']);

    $check = mysqli_query($connect, "SELECT * FROM `goods` WHERE `name` = '$search' OR `number` = '$search' OR `id` = '$search' LIMIT 1");
    if (mysqli_num_rows($check) > 0) {

        $id = $obj['id'];
        $name = $obj['name'];
        $type = $obj['type'];
        $number = $obj['number'];
        $cont = $obj['cont'];

        header("Location: ../del.php?search=$search");

        $_SESSION['message'] = 'Товар найден';
        header('Location: ../del.php');
    } else {
        $_SESSION['message'] = 'Такого товара нет';
        header('Location: ../del.php');
    }
?>