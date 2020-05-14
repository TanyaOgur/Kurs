<?php

  session_start();
  include 'db.php';
  include 'api.php';

  if(!empty($_POST)) {

    if($_POST['login'] != '' && $_POST['password'] != '') {
      $login = trim(strip_tags($_POST['login']));
      $password = trim(strip_tags($_POST['password']));
      if(isUser($db, $login, $password)) {
        $_SESSION['user'] = $login;
      } else {
        echo "<h1>Пользатель не найден</h1>"; 
      }
    } else {
      echo "<h1>Заполните все поля</h1>";
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>HOME</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
  <header>
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </div>
            <?php
                $users1 = getAllad($db);
            ?>
            <?php if(isset($_SESSION['user'])) { 
              ?>
        </div>
            <?php
                $users1 = getAllad($db);
            ?>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
            </button>
          <a class="navbar-brand" href="#">DB</a>
            <li><a href="index.php">HOME</a></li>
            <li><a href="users.php">People</a></li>
            <li><a href="groups.php">Group</a></li>
          </ul>
          <div class="pull-right">
              <p>Пользователь: <?php echo $_SESSION['user'];  ?></p>
              <p><a href="logout.php">Выйти</a></p>
            <?php } ?>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <div id="content">
    <div class="container-fluid">
    <?php if(!isset($_SESSION['user'])) { ?>
      <form action="" method="POST" role="form">
      
        <div class="form-group">
          <label for="">Логин</label>
          <input type="text" class="form-control" id="login" name="login">
        </div>

        <div class="form-group">
          <label for="">Пароль</label>
          <input type="password" class="form-control" id="password" name="password">
        </div>
      
        <button type="submit" class="btn btn-primary">Войти</button>
      </form>
    <?php } ?>  
    </div>
  </div>
  <footer>
  </footer>
</body>
</html>