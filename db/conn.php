<?php
    //Development Connection
    $host = '127.0.0.1';
    $db = 'attendance_db';
    $user = 'root';
    $psss = '';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try{
        $pdo = new PDO($dsn, $user, $psss);
        echo 'Hello DataBase';
    }catch(PDOException $e){
        throw new PDOException($e->getMessage());
    }
?>