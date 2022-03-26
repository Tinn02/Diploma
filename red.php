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
    <title>Редактирование</title>
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
  <script type="text/javascript">
      function create()
      {
          var data=document.getElementById("data").value;
          document.getElementById("qrimage").innerHTML="<img src='https://chart.googleapis.com/chart?chs=250x250&cht=qr&chl="+encodeURIComponent(data)+"'/>";
      }
      </script>
  <nav>
  <a class="apk" href="inc/logout.php"><img class = "logoPK" src="img/Logo.png"></a> 
  <a id="n" href="./qr.php"><span>Добавление</span></a><br>
  <a id="n1" href="./red.php"><span>Редактирование</span></a><br>
  <a id="n" href="./del.php"><span>Удаление</span></a><br>
  <a id="n" href="#4"><span>Список</span></a><br>
  <a id="n" href="#5"><span>Отчёт</span></a><br>
  </nav>
  <fieldset><form action = "inc/search1.php" method = "get">
  <h1>Редактирование информации</h1><br>
    <p>Поиск</p>
    <input type="text" name="search" placeholder="Введите наименование, номер или ID">
    <button class="search" name="submit" type="submit"><i class="fa fa-search"></i></button>
    <?php 
      if ($_SESSION['message']){
        echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
      }
      unset($_SESSION['message']);
      ?>
    <form action=""> 
    <label>Наименование товара</label>
    <input type="text" placeholder="Введите наименование">
    <label>Тип товара</label><br>
    <select name="list1">
      <option disabled selected>Выберите из списка</option>
      <option value="1">Компьютер</option>
      <option value="2">Стол</option>
      <option value="3">Шкаф</option>
      <option value="4">Монитор</option>
      <option value="5">МФУ</option>
     </select><br>
    <label>Инвентаризационный номер</label>
    <input type="text" placeholder="Введите номер">
    <label>Количество</label>
    <input type="number" placeholder="Введите число">
    <button class="button">Добавить</button>
</form></fieldset>
<div class="qrc" style="margin-left: 2%;">
    <div id="mainbody">
    <table border="0" align="center">
    <tbody><tr class="text"><td>
    <p style="font-size:20px;text-align:center; margin-bottom: 5%;">Введите ID для создания QR</p>
    <textarea cols="40" rows="2" id="data"></textarea>
    </td></tr>
    <tr><td align="center">
    <div class="button" onclick="create()">Создать QR-код</div>
    </td></tr>
    <tr><td align="center">
    <div id="qrimage">
    </div>
    </td></tr>
    </tbody></table>
    </div>
  </div>
  </div>
</body>
</html>