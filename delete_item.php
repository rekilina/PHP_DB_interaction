<?php
    require_once('connect.php');
    
    $current_id = $_GET['id'];

    mysqli_query($connect, "DELETE FROM `goods` WHERE `goods`.`id` = '$current_id' ");

   header('Location: /index.php');
?>