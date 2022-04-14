<?php
    session_start();
    if (!$_SESSION['user']) {
        header('Location: index.php');
    }
?> 
<?php
  require_once 'inc/connect.php'
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
  <a class="apk"><img class = "logoPK" src="img/Logo.png"></a> 
  <a id="n" href="./spisok.php"><span>Список</span></a><br>
  <a id="n" href="./ins.php"><span>Добавление</span></a><br>
  <a id="n1" href="./upd.php"><span>Редактирование</span></a><br>
  <a id="n" href="./del.php"><span>Удаление</span></a><br>
  <a id="n" href="./otch.php"><span>Отчёт</span></a><br>
  <a id="ex" href="../inc/logout.php">Выход</a>
  </nav>
  <fieldset><form action = "" method = "get">
  <h1>Редактирование информации</h1><br>
    <p>Поиск</p>
    <input type="text" name="search" placeholder="Введите наименование, номер или ID">
    <button type = "submit" class="button">Найти</button>
    <?php 
      if ($_SESSION['message']){
        echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
      }
      unset($_SESSION['message']);
      ?>
</form></fieldset>
</body>
</html>
<?php if(!empty($_GET['search'])){
      session_start();
      $search = trim($_GET['search']);
      $check = mysqli_query($connect, "SELECT * FROM `goods` WHERE `name` = '$search' OR `number` = '$search' OR `id` = '$search' LIMIT 1");
      if (mysqli_num_rows($check) > 0) {
          $obj = mysqli_fetch_assoc($check);
  
          $id = $obj['id'];
          
          $_SESSION['message'] = 'Товар найден';
          header("Location: ../add/update.php?search=$id");
      } else {
          $_SESSION['message'] = 'Такого товара нет';
          header('Location: ../upd.php');
      }
} ?>