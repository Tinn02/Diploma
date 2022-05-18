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
    <title>Добавление</title>
    <link rel="icon" href="img/logo-rssu.png" type="image/x-icon">
    <link rel="shortcut icon" href="http://www.sitename.com/dirname/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
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
  <a class="apk"><img class = "logoPK" src="img/Logo.png"></a> 
  <a id="n" href="./spisok.php"><span>Список</span></a><br>
  <a id="n1" href="./ins.php"><span>Добавление</span></a><br>
  <a id="n" href="./otch.php"><span>Отчёт</span></a><br>
  <a id="ex" href="../inc/logout.php">Выход</a>
  </nav>
  <fieldset><form class="form" action="inc/insert.php" method="post"> 
    <h1>Добавление объекта</h1><br>
    <label>Наименование объекта <span style="color: red;">*</span></label>
    <input type="text" name = "name" placeholder="Введите наименование">
    <label>Номер кабинета <span style="color: red;">*</span></label><br>
    <select name="type">
      <option disabled selected>Выберите из списка</option>
      <?php
        $products = mysqli_query($connect, "SELECT * FROM `cabinets`");
        $products = mysqli_fetch_all($products);
        foreach ($products as $product){
          ?>
      <!-- <option value="102(1)">102(1)</option>
      <option value="102(2)">102(2)</option>
      <option value="102(3)">102(3)</option> -->
      <option value="<?= $product[0] ?>"><?= $product[0] ?></option>
      <?php
        }
        ?>
     </select><br>
    <label>Инвентаризационный номер</label>
    <!-- <input type="text" name = "number" placeholder="Введите номер (если имеется)"> -->
    <textarea style="text-align: left; margin: 10px 0; padding: 7px;" name="number" cols="10" rows="5" placeholder="Введите номер (если имеется)"></textarea>
    <label>Количество <span style="color: red;">*</span> </label>
    <input type="number" name = "cont" placeholder="Введите число">
    <button type = "submit" class="button">Добавить</button>
    <?php 
      if ($_SESSION['message']){
        echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
      }
      unset($_SESSION['message']);
      ?>
</form></fieldset>
  </div>
  </div>
</body>
</html>