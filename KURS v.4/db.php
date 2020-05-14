<?php
/*  $host = 'localhost';  // Хост, у нас все локально
  $user = 'root';    // Имя созданного вами пользователя
  $pass = '123'; // Установленный вами пароль пользователю
  $db_name = 'db';   // Имя базы данных
  $link = mysqli_connect($host, $user, $pass, $db_name); // Соединяемся с базой

  // Ругаемся, если соединение установить не удалось
  if (!$link) {
    echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
    exit;
  }
  $db = mysqli_query($link, 'SELECT `id`, `name` FROM `mydb`');
*/
$user = "root"; $password = "123"; /*Почему данный код является избыточным? Оставляйте ответы в комментариях*/
try {
$db = new PDO("mysql:host=localhost;dbname=kurs", $user, $password);
} catch (Exception $e) {
echo $e->getMessage();
}