<?php
    require_once('connect.php');
    
    $current_id = $_GET['id'];

    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    mysqli_query($connect, "UPDATE `goods` SET `title` = '$title', `description` = '$description', `price` = '$price' WHERE `goods`.`id` = $current_id ");

   header('Location: /index.php');
?>