<?php
    $connect = mysqli_connect('localhost', 'root', '', 'diploma');

    if (!$connect) {
        die('Ошибка подключения к базе данных');
    }