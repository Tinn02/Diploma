<?php
    session_start();
    if (!$_SESSION['user']) {
        header('Location: ../index.php');
    }
?> 
<?php
  require_once '../inc/connect.php'
?>
<?php
  $id = $_GET['search'];
  $product = mysqli_query($connect, "SELECT * FROM `goods` WHERE `id` = '$id'");
  $product = mysqli_fetch_assoc($product);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <title>Редактирование</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Cuprum:wght@400;500&family=Poiret+One&display=swap');
      #n1 {
        border: none;  
        outline: none; 
        text-decoration: none;
        color: #0073bd;
        text-shadow: 0px 3px 4px rgba(0, 0, 0, 0.15);
      }
      #n1:hover {
        text-shadow: 0px 3px 4px rgba(0, 0, 0, 0);
      }
      </style>
      
<body onload="create()">
  <div class="pk" id="pk">
  <script type="text/javascript">
      function create()
      {
          var data=document.getElementById("data").value;
          document.getElementById("qrimage").innerHTML="<img src='https://chart.googleapis.com/chart?chs=250x250&cht=qr&chl="+encodeURIComponent(data)+"'/>";
      }
      </script>
  <nav>
  <a class="apk"><img class = "logoPK" src="../img/Logo.png"></a> 
  <a id="n" href="../spisok.php"><span>Список</span></a><br>
  <a id="n" href="../ins.php"><span>Добавление</span></a><br>
  <a id="n" href="../otch.php"><span>Отчёт</span></a><br>
  <a id="ex" href="../inc/logout.php">Выход</a>
  </nav>
  <fieldset><form class="form" action = "../inc/update.php" method = "get">
  <h1>Редактирование информации</h1><br>
    <input type="hidden" name="id" value="<?= $product['id'] ?>">
    <label>Наименование объекта</label>
    <input type="text" name="name" placeholder="Введите наименование" value="<?= $product['name'] ?>">
    <label>Номер кабинета</label><br>
    <select name="type">
      <option style = "display: none;"><?= $product['type'] ?></option>
      <?php
        $products = mysqli_query($connect, "SELECT * FROM `cabinets`");
        $products = mysqli_fetch_all($products);
        foreach ($products as $product){
          ?>
      <option value="<?= $product[0] ?>"><?= $product[0] ?></option>
      <?php
        }
        ?>
      <?php
        $id = $_GET['search'];
        $product = mysqli_query($connect, "SELECT * FROM `goods` WHERE `id` = '$id'");
        $product = mysqli_fetch_assoc($product);
        ?>
     </select><br>
    <label>Инвентаризационный номер</label>
    <textarea style="text-align: left; margin: 10px 0; padding: 7px;" name="number" cols="10" rows="5" placeholder="Введите номер (если имеется)"><?= $product['number'] ?></textarea>
    <label>Количество</label>
    <input type="number" name="cont" placeholder="Введите число" value="<?= $product['cont'] ?>">
    <button class="button">Изменить</button>
</form></fieldset>
<div class="qrc" style="margin-left: 2%;">
    <div id="mainbody">
    <table border="0" align="center">
    <tbody><tr class="text"><td>
    <p style="font-size:20px;text-align:center; margin-bottom: 5%;">ID объекта и его QR-код</p>
    <textarea cols="40" rows="1" id="data" readonly><?= $product['id'] ?></textarea>
    </td></tr>
    <tr><td align="center">
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