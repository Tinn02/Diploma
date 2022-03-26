<?php
    require 'connect.php';

    $_SESSION['message'] = 'Данные удалены';
    header('Location: ../del.php');
?>
