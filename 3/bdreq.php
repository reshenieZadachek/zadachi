<?php
    require_once 'connect.php';//соединение с бд
    $text = $_POST['text'];//получение данных с формы
	mysqli_query($connect, 'INSERT INTO `com` VALUES (NULL, "'.mysqli_escape_string($connect,$text).'")');//запрос к бд на добавление данных
    header('Location: ./index.php');//возврат на страницу
?>