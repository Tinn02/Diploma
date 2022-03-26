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
      img{
        border: 1.5px solid;
        border-radius: 12px;
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
  <a id="n1" class = "n" href="./qr.php"><span>Добавление</span></a><br>
  <a id="n" href="./red.php"><span>Редактирование</span></a><br>
  <a id="n" href="./del.php"><span>Удаление</span></a><br>
  <a id="n" href="#4"><span>Список</span></a><br>
  <a id="n" href="#5"><span>Отчёт</span></a><br>
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
    <?php 
            if ($_SESSION['message']){
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
            ?>
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