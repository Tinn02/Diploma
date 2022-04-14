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
    <title>Отчёт</title>
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
  <a class="apk"><img class = "logoPK" src="img/Logo.png"></a> 
  <a id="n" href="./spisok.php"><span>Список</span></a><br>
  <a id="n" href="./ins.php"><span>Добавление</span></a><br>
  <a id="n" href="./upd.php"><span>Редактирование</span></a><br>
  <a id="n" href="./del.php"><span>Удаление</span></a><br>
  <a id="n1" href="./otch.php"><span>Отчёт</span></a><br>
  <a id="ex" href="../inc/logout.php">Выход</a>
  </nav>
  <fieldset>
  <div id="table">
      <table class="table">
      <td style="padding-bottom: 0;" colspan="5"><h1 style="padding-bottom: 0;">Отчёт по всем товарам</h1><br></td>
        <tr>
          <th>ID</th>
          <th>Наименование</th>
          <th>Тип</th>
          <th>Инвентаризационный номер</th>
          <th>Количество</th>
        </tr>
        <?php
        $products = mysqli_query($connect, "SELECT * FROM `goods`");
        $products = mysqli_fetch_all($products);
        foreach ($products as $product){
          ?>
          <tr>
          <td><?= $product[0] ?></td>
          <td><?= $product[1] ?></td>
          <td><?= $product[2] ?></td>
          <td><?= $product[3] ?></td>
          <td><?= $product[4] ?></td>
        </tr>
          <?php
        }
        ?>
      </table>
      </div>
      <script>
      function printDiv(divName) {
      var printContents = document.getElementById(divName).innerHTML;
      var originalContents = document.body.innerHTML;

      document.body.innerHTML = printContents;

      window.print();

      document.body.innerHTML = originalContents;
      }
  </script>
    <button style="margin: 0 auto 1%; display: block;" class="button" onclick="printDiv('table')">Распечатать отчёт</button>
</fieldset>
</div>
</body>
</html>