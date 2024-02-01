<?php
require_once 'connect.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form method="POST" action="bdreq.php">
        <input name="text" type="text" placeholder="Текст"/>
        <input type="submit" value="Отправить"/>
       </form>
       <div>
        <?php
        $query = mysqli_query($connect, 'SELECT * FROM `com`');//запрос к бд
        while ($row = mysqli_fetch_array($query)) {//выводим через цикл все сообщения
            echo ("<p>"),(htmlspecialchars($row['comm'])),("</p>");//делаем так чтобы все выврдилось не как код а как текст
        }
        ?>
       </div>
</body>
</html>