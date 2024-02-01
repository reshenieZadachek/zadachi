<?php//соединение с бд
$connect = mysqli_connect('localhost', 'root', '', 'comments');

if (!$connect) {
    die('Error connect to DataBase');
}
?>