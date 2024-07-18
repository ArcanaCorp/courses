-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-07-2024 a las 01:25:49
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cursos_online`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `courses`
--

CREATE TABLE `courses` (
  `id_course` int(11) NOT NULL,
  `name_course` varchar(200) NOT NULL,
  `text_course` varchar(200) NOT NULL,
  `image_course` varchar(200) NOT NULL,
  `teacher_course` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `courses`
--

INSERT INTO `courses` (`id_course`, `name_course`, `text_course`, `image_course`, `teacher_course`) VALUES
(51, 'Química', 'Curso de Química para estudiantes de secundaria.', 'quimica.jpg', 21),
(52, 'Biología', 'Curso de Biología para estudiantes de secundaria.', 'biologia.jpg', 22),
(53, 'Equivalencia', 'Curso de Equivalencia para secundaria.', 'equivalencia.jpg', 23),
(54, 'Álgebra', 'Curso de Álgebra para estudiantes de secundaria.', 'algebra.jpg', 24),
(55, 'Geometría', 'Curso de Geometría para estudiantes de secundaria.', 'geometria.jpg', 25),
(56, 'Aritmética', 'Curso de Aritmética para estudiantes de secundaria.', 'aritmetica.jpg', 26),
(57, 'Historia', 'Curso de Historia para estudiantes de secundaria.', 'historia.jpg', 27),
(58, 'Geografía', 'Curso de Geografía para estudiantes de secundaria.', 'geografia.jpg', 28),
(59, 'Literatura', 'Curso de Literatura para estudiantes de secundaria.', 'literatura.jpg', 29),
(60, 'Inglés', 'Curso de Inglés para estudiantes de secundaria.', 'ingles.jpg', 30),
(61, 'Educación Física', 'Curso de Educación Física para estudiantes de secundaria.', 'educacion_fisica.jpg', 31),
(62, 'Arte', 'Curso de Arte para estudiantes de secundaria.', 'arte.jpg', 32),
(63, 'Tecnología e Informática', 'Curso de Tecnología e Informática para estudiantes de secundaria.', 'tecnologia_informatica.jpg', 33),
(64, 'Civismo', 'Curso de Civismo para estudiantes de secundaria.', 'civismo.jpg', 34),
(65, 'Economía', 'Curso de Economía para estudiantes de secundaria.', 'economia.jpg', 35),
(66, 'Filosofía', 'Curso de Filosofía para estudiantes de secundaria.', 'filosofia.jpg', 36),
(67, 'Psicología', 'Curso de Psicología para estudiantes de secundaria.', 'psicologia.jpg', 37),
(68, 'Sociología', 'Curso de Sociología para estudiantes de secundaria.', 'sociologia.jpg', 38),
(69, 'Estadística', 'Curso de Estadística para estudiantes de secundaria.', 'estadistica.jpg', 39),
(70, 'Robótica', 'Curso de Robótica para estudiantes de secundaria.', 'robotica.jpg', 40);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id_course`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `courses`
--
ALTER TABLE `courses`
  MODIFY `id_course` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
