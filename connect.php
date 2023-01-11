<?php
    $connect = mysqli_connect('127.0.0.1', 'root', 'root', 'php_db_test');
    if(! $connect) {
        die('Error while connecting to db');
    } else {
        //echo "Connection OK";
    }
?>