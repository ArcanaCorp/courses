<?php

    $host = 'localhost';
    $username = 'root';
    $password = '';//kcgBWyT0}XKk
    $database = 'cursos_online'; // Cambia esto al nombre de tu base de datos

    try {

        $pdo = new PDO("mysql:host=$host;dbname=$database;charset=utf8mb4", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $e) {

        die("Error de conexi贸n a la base de datos: " . $e->getMessage());
        
    }

?>