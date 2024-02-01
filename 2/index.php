<?php
    $connect = mysqli_connect('localhost', 'root', '', 'zad4');

    if (!$connect) {
        die('Error connect to DataBase');
    }
    //удаляем склады
    mysqli_query($connect, "DELETE FROM stocks WHERE id NOT IN (SELECT stock_id FROM availabilities)");
    //удаляем продукты которых нет в наличии
    mysqli_query($connect, "DELETE FROM products WHERE id NOT IN (SELECT product_id FROM availabilities)");
    //удаляем категории продуктов на которые нет
    mysqli_query($connect, "DELETE FROM categories WHERE id NOT IN (SELECT category_id FROM products)");
?>