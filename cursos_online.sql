-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-07-2024 a las 06:36:33
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `teachers`
--

CREATE TABLE `teachers` (
  `id_teacher` int(11) NOT NULL,
  `name_teacher` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `teachers`
--

INSERT INTO `teachers` (`id_teacher`, `name_teacher`) VALUES
(21, 'Ana Ramírez'),
(22, 'Luis González'),
(23, 'María Rodríguez'),
(24, 'Juan Martínez'),
(25, 'Andrea Pérez'),
(26, 'Pedro Sánchez'),
(27, 'Laura García'),
(28, 'José López'),
(29, 'Carla Martín'),
(30, 'Jorge Fernández'),
(31, 'Lucía Díaz'),
(32, 'Diego Ruiz'),
(33, 'Paula Herrera'),
(34, 'Gabriel Castro'),
(35, 'Valeria Gómez'),
(36, 'Miguel Torres'),
(37, 'Natalia Medina'),
(38, 'Alejandro Vargas'),
(39, 'Sofía Jiménez'),
(40, 'Ricardo Mendoza');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `name_usuario` varchar(100) NOT NULL,
  `email_usuario` varchar(100) NOT NULL,
  `password_usuario` longtext NOT NULL,
  `date_usuario` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `name_usuario`, `email_usuario`, `password_usuario`, `date_usuario`) VALUES
(4, 'Jhans Franco Pérez Caro', 'j1h2a3n4s@gmail.com', '$2y$10$11lu5c4G4WYWZPOxyYETEuPmPpJIb3uT.A9SVlRRWwquTSwzLHn1e', '2024-07-17 21:51:12'),
(5, 'Franco Suarez Vertiz', 'francovz@gmail.com', '$2y$10$2PccWP4ICgWFZiBsdmTof.12/yErMDc4Yp3Tqap/EpFmyVBkroe8e', '2024-07-18 06:29:35');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id_course`);

--
-- Indices de la tabla `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id_teacher`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `courses`
--
ALTER TABLE `courses`
  MODIFY `id_course` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT de la tabla `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id_teacher` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
