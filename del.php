<?php
    session_start();
    if (!$_SESSION['user']) {
        header('Location: index.php');
    }
?> 
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <title>Удаление</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Cuprum:wght@400;500&family=Poiret+One&display=swap');
      #n1 {
        border: none;  
        outline: none; 
        text-decoration: none;
        color: #429E9D;
        text-shadow: 0px 3px 4px rgba(0, 0, 0, 0.15);
      }
      #n1:hover {
        text-shadow: 0px 3px 4px rgba(0, 0, 0, 0);
      }
      </style>
      
<body>
  <div class="pk" id="pk">
  <nav>
  <a class="apk" href="inc/logout.php"><img class = "logoPK" src="img/Logo.png"></a> 
  <a id="n" href="./qr.php"><span>Добавление</span></a><br>
  <a id="n" href="./red.php"><span>Редактирование</span></a><br>
  <a id="n1" href="./del.php"><span>Удаление</span></a><br>
  <a id="n" href="#4"><span>Список</span></a><br>
  <a id="n" href="#5"><span>Отчёт</span></a><br>
  </nav>
  <fieldset><form action="">
    <h1>Удаление товара</h1><br>
    <p>Поиск</p>
    <input type="search" placeholder="Введите наименование, номер или ID">
    <button class="search" type="submit"><i class="fa fa-search"></i></button>
  </form>
  <form action=""> 
    <label>Наименование товара</label>
    <input type="text" placeholder="Наименование" readonly>
    <label>Тип товара</label>
    <input type="text" placeholder="Тип" readonly>
    <label>Инвентаризационный номер</label>
    <input type="text" placeholder="Номер" readonly>
    <label>Количество</label>
    <input type="number" placeholder="Число" readonly>
    <button class="button">Удалить</button>
</form></fieldset>
  </div>
</body>
</html>