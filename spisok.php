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
    <title>Список</title>
    <link rel="stylesheet" href="css/style.css">
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
      input {
        width: 100%;
      }
      .button {
        margin: 10px 0;
      }
      </style>
      
<body>
  <div class="pk" id="pk">
  <nav>
  <a class="apk"><img class = "logoPK" src="img/Logo.png"></a> 
  <a id="n1" href="./spisok.php"><span>Список</span></a><br>
  <a id="n" href="./ins.php"><span>Добавление</span></a><br>
  <a id="n" href="./otch.php"><span>Отчёт</span></a><br>
  <a id="ex" href="../inc/logout.php">Выход</a>
  </nav>
  <fieldset>
  <h1>Список объектов</h1>
  <p>Поиск объекта</p>
  <form class="search" action = "" method = "get">
    <input type="text" name="search" placeholder="Введите наименование, инвентаризационный номер или ID">
    <button type = "submit" class="button">Найти</button>
    </form>
    <?php 
      if ($_SESSION['message']){
        echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
      }
      unset($_SESSION['message']);
      ?>
    <?php if(!empty($_GET['search'])){
      session_start();
      $search = trim($_GET['search']);
      $check = mysqli_query($connect, "SELECT * FROM `goods` WHERE `name` = '$search' OR `number` = '$search' OR `id` = '$search' LIMIT 1");
      if (mysqli_num_rows($check) > 0) {
          $obj = mysqli_fetch_assoc($check);
  
          $id = $obj['id'];
          
          $_SESSION['message'] = 'Объект найден';
          header("Location: ../info.php?id=$id");
      } else {
          $_SESSION['message'] = 'Такого объекта нет';
          header('Location: ../spisok.php');
      }
} ?>
      <div class = "tableSP">
      <table style="border: none;" class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Наименование</th>
          <th>Номер кабинета</th>
          <th>Инвентаризационный номер</th>
          <th>Количество</th>
          <th style="border: none; background: white;"></th>
          <th style="border: none; background: white;"></th>
          <th style="border: none; background: white;"></th>
        </tr>
        </thead>
        <?php
        $products = mysqli_query($connect, "SELECT * FROM `goods`");
        $products = mysqli_fetch_all($products);
        foreach ($products as $product){
          ?>
          <tbody>
          <tr>
          <td><?= $product[0] ?></td>
          <td><?= $product[1] ?></td>
          <td><?= $product[2] ?></td>
          <td><?= $product[3] ?></td>
          <td><?= $product[4] ?></td>
          <td><a href="/info.php?id=<?= $product[0] ?>"><img class = "tags" src="img/info.png" alt="Инфо"></a></td>
          <td><a href="/add/update.php?search=<?= $product[0] ?>"><img class = "tags" src="img/red.png" alt="Редактирование"></a></td>
          <td><a href="/add/delete.php?search=<?= $product[0] ?>"><img class = "tags" src="img/del.png" alt="Удаление"></a></td>
        </tr>
        </div>
        </tbody>
        <tfoot>
          <?php
        }
        ?>
        </tfoot>
      </table>
</fieldset>
</div>
</body>
</html>
