<?php
    session_start();
    require_once 'connect.php'; 

    $name = trim($_REQUEST['name']);
    $type = trim($_REQUEST['type']);
    $number = trim($_REQUEST['number']);
    $cont = trim($_REQUEST['cont']);

    if ($number === '' or $number === 'бн' or $number === ('б\н')) {
        $number = addslashes('б\н');;
    }

    if (!empty($name) && !empty($type) && !empty($cont)){
        mysqli_query($connect, "INSERT INTO `goods` (`id`, `name`, `type`, `number`, `cont`) VALUES (NULL, '$name', '$type', '$number', '$cont')");

        $check = mysqli_query($connect, "SELECT * FROM `goods` WHERE `name` = '$name' AND `type` = '$type' AND `number` = '$number' AND `cont` = '$cont'  LIMIT 1");
        if (mysqli_num_rows($check) > 0) {
            $obj = mysqli_fetch_assoc($check);
    
            $id = $obj['id'];
    
            $_SESSION['message'] = 'Объект добавлен';
            header("Location: ../ins.php");
        } 
    } else {
        $_SESSION['message'] = 'Не заполнена обязательная строка (*)';
        header('Location: ../ins.php');
    }

?>