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
    <title>Удаление</title>
    <link rel="stylesheet" href="../css/style.css">
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
  <a class="apk" href="../inc/logout.php"><img class = "logoPK" src="../img/Logo.png"></a> 
  <a id="n" href="../ins.php"><span>Добавление</span></a><br>
  <a id="n" href="../upd.php"><span>Редактирование</span></a><br>
  <a id="n" href="../del.php"><span>Удаление</span></a><br>
  <a id="n" href="../spisok.php"><span>Список</span></a><br>
  <a id="n" href="../otch.php"><span>Отчёт</span></a><br>
  </nav>
  <fieldset><form action = "../inc/delete.php" method = "get">
  <h1>Удаление товара</h1><br>
    <label>ID товара</label>
    <input type="text" name="id" value="<?= $product['id'] ?>" readonly>
    <label>Наименование товара</label>
    <input type="text" name="name" value="<?= $product['name'] ?>" readonly>
    <label>Тип товара</label>
    <input type="text" value="<?= $product['type'] ?>" readonly>
    <label>Инвентаризационный номер</label>
    <input type="text" name="number" value="<?= $product['number'] ?>" readonly>
    <label>Количество</label>
    <input type="number" name="cont" value="<?= $product['cont'] ?>" readonly>
    <?php 
      if ($_SESSION['message']){
        echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
      }
      unset($_SESSION['message']);
      ?>
    <button class="button">Удалить</button>
</form></fieldset>
</div>
</body>
</html>