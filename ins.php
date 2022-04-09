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
    <title>Добавление</title>
    <link rel="stylesheet" href="css/style.css">
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
  <a id="n1" class = "n" href="./ins.php"><span>Добавление</span></a><br>
  <a id="n" href="./upd.php"><span>Редактирование</span></a><br>
  <a id="n" href="./del.php"><span>Удаление</span></a><br>
  <a id="n" href="./spisok.php"><span>Список</span></a><br>
  <a id="n" href="./otch.php"><span>Отчёт</span></a><br>
  </nav>
  <fieldset><form action="inc/insert.php" method="post"> 
    <h1>Добавление товара</h1><br>
    <label>Наименование товара</label>
    <input type="text" name = "name" placeholder="Введите наименование">
    <label>Тип товара</label><br>
    <select name="type">
      <option disabled selected>Выберите из списка</option>
      <option value="Компьютер">Компьютер</option>
      <option value="Стол">Стол</option>
      <option value="Шкаф">Шкаф</option>
      <option value="Монитор">Монитор</option>
      <option value="МФУ">МФУ</option>
     </select><br>
    <label>Инвентаризационный номер</label>
    <input type="text" name = "number" placeholder="Введите номер">
    <label>Количество</label>
    <input type="number" name = "cont" placeholder="Введите число">
    <button type = "submit" class="button">Добавить</button>
</form></fieldset>
  </div>
  </div>
</body>
</html>