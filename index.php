<?php
    session_start();
    if ($_SESSION['user']) {
        header('Location: qr.php');
    }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <title>Авторизация</title>
    <link rel="stylesheet" href="css/auth.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cuprum:wght@400;500&family=Poiret+One&display=swap');
        </style>
</head>
<body>
    <div class="aunth">
    <form action="inc/aunth.php" method="post">
        <a href="inc/logout.php"><img src="img/Logo.png"></a>
        <h1>Добро пожаловать!</h1>
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <button type="submit">Войти</button>
        <?php 
            if ($_SESSION['message']){
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
            ?>
    </form>
    </div>
</body>
</html>