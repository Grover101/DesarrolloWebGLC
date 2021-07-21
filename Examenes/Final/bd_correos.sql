-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-07-2021 a las 20:02:08
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_correos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entradas`
--

CREATE TABLE `entradas` (
  `id` int(11) NOT NULL,
  `origen` varchar(50) NOT NULL,
  `asunto` varchar(250) NOT NULL,
  `mensaje` text NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `entradas`
--

INSERT INTO `entradas` (`id`, `origen`, `asunto`, `mensaje`, `fecha`) VALUES
(1, 'prueba.usfx@gmail.com', 'El examen va emepzar', 'mensaje de prueba', '2021-07-21'),
(2, 'otro@usfx.bo', 'otro mensaje', 'es otro mensaje', '2021-07-21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salidas`
--

CREATE TABLE `salidas` (
  `id` int(11) NOT NULL,
  `destino` varchar(255) NOT NULL,
  `asunto` varchar(250) NOT NULL,
  `mensaje` text NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` smallint(6) NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `nombrecompleto` varchar(100) COLLATE utf8_bin NOT NULL,
  `cu` varchar(10) COLLATE utf8_bin NOT NULL,
  `nivel` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `password`, `nombrecompleto`, `cu`, `nivel`) VALUES
(1, 'admin@correo.bo', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Administrador sistema', '35-0', 1),
(2, 'carlosmontellano@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Carlos Montellano', '35-239', 0),
(3, 'Irure est explicabo', 'ce6bcac8b59ff1a91a938d76beca57ac09c926d6', 'Libero fugit esse ', 'Ipsum sint', 31),
(4, 'correo', 'sha1(123)', 'Culpa quae harum ips', 'Libero nec', 0),
(5, 'admin@biblioteca.usfx.bo', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Sed sint sunt expl', '', 68),
(6, 'admin@biblioteca.usfx.bo', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Deleniti non sed sin', 'Ipsa et qu', 0),
(7, '', '', '', '', 0),
(8, 'admin@biblioteca.usfx.bo', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Debitis commodo enim', 'Eum qui au', 1),
(9, 'Consequatur Et veri', '5860c9854553bfbe510ae6d0b9fc8c0406b2dfea', 'Minim non in volupta', 'Voluptate ', 76);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `entradas`
--
ALTER TABLE `entradas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `salidas`
--
ALTER TABLE `salidas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `entradas`
--
ALTER TABLE `entradas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `salidas`
--
ALTER TABLE `salidas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
