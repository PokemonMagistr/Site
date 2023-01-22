<?php
    
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'Notes';

    $connect = mysqli_connect($host, $user, $password, $database);

    if (!$connect) {
        die('Error connect to DataBase');
    }
