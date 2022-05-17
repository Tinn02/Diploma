<?php
    session_start();
    if (!$_SESSION['user']) {
        header('Location: ../index.php');
    }
?> 
<?php
  require_once '../inc/connect.php'
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <title>Отчёт</title>
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
      
<body>
  <div class="pk" id="pk">
  <nav>
  <a class="apk"><img class = "logoPK" src="../img/Logo.png"></a> 
  <a id="n" href="../spisok.php"><span>Список</span></a><br>
  <a id="n" href="../ins.php"><span>Добавление</span></a><br>
  <a id="n" href="../otch.php"><span>Отчёт</span></a><br>
  <a id="ex" href="../inc/logout.php">Выход</a>
  </nav>
  <fieldset>
  <h1>Отчёт по кабинету</h1>
  <?php 
      if ($_SESSION['message']){
        echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
      }
      unset($_SESSION['message']);
      ?>
  <div id="table">
      <table class="table">
      <thead>
      <?php 
        $type = $_GET['search'];
      ?>
      <h1 style="padding-bottom: 0;">Собственность РГСУ в кабинете №<?= $type ?> является:</h1><br>
      <!-- <td style="padding-bottom: 1%;" colspan="5" ><h1 style="padding-bottom: 0;">Собственность РГСУ в кабинете №<?= $type ?> является:</h1></td> -->
        <tr>
          <th>№</th>
          <th>Наименование</th>
          <!-- <th>Номер кабинета</th> -->
          <th>Инвентаризационный номер</th>
          <th>Количество</th>
        </tr>
        <?php
        $products = mysqli_query($connect, "SELECT * FROM `goods` WHERE `type` = '$type'");
        $products = mysqli_fetch_all($products);
        foreach ($products as $product){
          ?>
          <tbody>  
          <tr class="cont">
          <td style="padding: 5px 30px 5px 30px;"></td>
          <td style="padding: 5px 30px 5px 30px;"><?= $product[1] ?></td>
          <!-- <td><?= $product[2] ?></td> -->
          <td style="padding: 5px 30px 5px 30px;"><?= $product[3] ?></td>
          <td style="padding: 5px 30px 5px 30px;"><?= $product[4] ?></td>
        </tr>
        <tfoot>
          <?php
        }
        ?>
      </table><br>
      <p style="text-align: left; margin-left: 10px;">Ответственный за кабинет №<?= $type ?> _______________/</p>
      </div>
  <button style="margin: 0 auto 1%; display: block;" class="button" onclick="window.print()">Распечатать отчёт</button>
</fieldset>
</div>
</body>
</html>