<?php
// Requiere el archivo de conexión a la base de datos (ajusta la ruta según tu estructura)
require_once '../config/connect.php';

// Array de cursos y sus descripciones
$courses = [
    ['Química', 'Curso de Química para estudiantes de secundaria.', 'quimica.jpg', '21'],
    ['Biología', 'Curso de Biología para estudiantes de secundaria.', 'biologia.jpg', '22'],
    ['Equivalencia', 'Curso de Equivalencia para secundaria.', 'equivalencia.jpg', '23'],
    ['Álgebra', 'Curso de Álgebra para estudiantes de secundaria.', 'algebra.jpg', '24'],
    ['Geometría', 'Curso de Geometría para estudiantes de secundaria.', 'geometria.jpg', '25'],
    ['Aritmética', 'Curso de Aritmética para estudiantes de secundaria.', 'aritmetica.jpg', '26'],
    ['Historia', 'Curso de Historia para estudiantes de secundaria.', 'historia.jpg', '27'],
    ['Geografía', 'Curso de Geografía para estudiantes de secundaria.', 'geografia.jpg', '28'],
    ['Literatura', 'Curso de Literatura para estudiantes de secundaria.', 'literatura.jpg', '29'],
    ['Inglés', 'Curso de Inglés para estudiantes de secundaria.', 'ingles.jpg', '30'],
    ['Educación Física', 'Curso de Educación Física para estudiantes de secundaria.', 'educacion_fisica.jpg', '31'],
    ['Arte', 'Curso de Arte para estudiantes de secundaria.', 'arte.jpg', '32'],
    ['Tecnología e Informática', 'Curso de Tecnología e Informática para estudiantes de secundaria.', 'tecnologia_informatica.jpg', '33'],
    ['Civismo', 'Curso de Civismo para estudiantes de secundaria.', 'civismo.jpg', '34'],
    ['Economía', 'Curso de Economía para estudiantes de secundaria.', 'economia.jpg', '35'],
    ['Filosofía', 'Curso de Filosofía para estudiantes de secundaria.', 'filosofia.jpg', '36'],
    ['Psicología', 'Curso de Psicología para estudiantes de secundaria.', 'psicologia.jpg', '37'],
    ['Sociología', 'Curso de Sociología para estudiantes de secundaria.', 'sociologia.jpg', '38'],
    ['Estadística', 'Curso de Estadística para estudiantes de secundaria.', 'estadistica.jpg', '39'],
    ['Robótica', 'Curso de Robótica para estudiantes de secundaria.', 'robotica.jpg', '40'],
];

// Consulta SQL para insertar un curso
$queryInsertCourse = 'INSERT INTO courses (name_course, text_course, image_course, teacher_course) VALUES (:name, :text, :image, :teacher)';
$statementInsertCourse = $pdo->prepare($queryInsertCourse);

// Iterar sobre el array de cursos y ejecutar las inserciones
foreach ($courses as $course) {
    $name = $course[0];
    $text = $course[1];
    $image = $course[2];
    $teacher = $course[3];

    // Ejecutar la consulta preparada para insertar el curso
    $statementInsertCourse->execute([':name' => $name, ':text' => $text, ':image' => $image, ':teacher' => $teacher]);

    // Verificar si la inserción del curso fue exitosa
    if ($statementInsertCourse->rowCount() > 0) {
        echo "Curso '$name' insertado correctamente.<br>";
    } else {
        echo "Error al insertar el curso '$name'.<br>";
    }
}

?>
