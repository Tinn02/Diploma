<?php

    $connect = mysqli_connect('localhost', 'root', '', 'praktika');

    if (!$connect) {
        die('Ошибка подключения к базе данных');
    }