<?php

    require_once '../config/connect.php';

    $professors = [
        "Ana Ramírez",
        "Luis González",
        "María Rodríguez",
        "Juan Martínez",
        "Andrea Pérez",
        "Pedro Sánchez",
        "Laura García",
        "José López",
        "Carla Martín",
        "Jorge Fernández",
        "Lucía Díaz",
        "Diego Ruiz",
        "Paula Herrera",
        "Gabriel Castro",
        "Valeria Gómez",
        "Miguel Torres",
        "Natalia Medina",
        "Alejandro Vargas",
        "Sofía Jiménez",
        "Ricardo Mendoza"
    ];

    $sql = 'INSERT INTO teachers (name_teacher) VALUES (:teacher)';
    $stmt = $pdo->prepare($sql);

    foreach ($professors as $name) {

        $stmt->execute([':teacher' => $name]);

        if ($stmt->rowCount() > 0) {

            echo 'Teacher: ' . $name . '<br/>';

        }

    }


?>