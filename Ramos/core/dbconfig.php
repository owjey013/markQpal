<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "ramos";
    $dsn = "mysql:host={$host}; dbname={$dbname}";

    $pdo = new PDO($dsn, $user, $password);
    $pdo -> exec("SET Time_zone = '+08:00';");

 ?>