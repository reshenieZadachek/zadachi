<?php//соединение с бд
$connect = mysqli_connect('$hostname', '$username', '$password', '$database');

if (!$connect) {
    die('Error connect to DataBase');
}
?>
