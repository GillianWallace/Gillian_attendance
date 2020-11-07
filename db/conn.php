<?php
    //Development Connection
    $host = '127.0.0.1';
    $db = 'attendance_db';
    $user = 'root';
    $psss = '';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try{
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERR,ODE, PDO::ERRMODE_EXCEPTION);
        
    }catch(PDOException $e){
        throw new PDOException($e->getMessage());
    }
?>