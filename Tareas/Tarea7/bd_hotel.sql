-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 11-05-2021 a las 08:05:50
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_hotel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotoshabitacion`
--

CREATE TABLE `fotoshabitacion` (
  `id` int(11) NOT NULL,
  `idhabitacion` int(11) NOT NULL,
  `fotografia` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `fotoshabitacion`
--

INSERT INTO `fotoshabitacion` (`id`, `idhabitacion`, `fotografia`) VALUES
(9, 1, '609a1d80db1a7.jpeg'),
(10, 3, '609a1d8b493db.jpg'),
(11, 4, '609a1d984f370.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitacion`
--

CREATE TABLE `habitacion` (
  `id` int(11) NOT NULL,
  `nro` int(11) NOT NULL,
  `idtipohabitacion` int(11) NOT NULL,
  `banoprivado` tinyint(1) NOT NULL,
  `espacio` decimal(7,2) NOT NULL,
  `precio` decimal(7,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `habitacion`
--

INSERT INTO `habitacion` (`id`, `nro`, `idtipohabitacion`, `banoprivado`, `espacio`, `precio`) VALUES
(1, 2, 1, 0, '8.00', '2.00'),
(3, 3, 3, 1, '3.00', '3.00'),
(4, 17, 1, 0, '0.00', '10.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `procedencias`
--

CREATE TABLE `procedencias` (
  `id` int(11) NOT NULL,
  `procedencia` varchar(30) NOT NULL,
  `codigopais` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `procedencias`
--

INSERT INTO `procedencias` (`id`, `procedencia`, `codigopais`) VALUES
(1, 'Bolivia', 'BO'),
(2, 'Colombia', 'CO'),
(3, 'Argentina', 'AR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `id` int(11) NOT NULL,
  `codigoreserva` varchar(5) NOT NULL,
  `fechaingreso` date NOT NULL,
  `fechasalida` date NOT NULL,
  `idhabitacion` int(11) NOT NULL,
  `precio` decimal(7,2) NOT NULL,
  `pagada` bit(1) NOT NULL DEFAULT b'0',
  `nombre` varchar(45) NOT NULL,
  `apellidos` varchar(40) NOT NULL,
  `correoelectronico` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reservas`
--

INSERT INTO `reservas` (`id`, `codigoreserva`, `fechaingreso`, `fechasalida`, `idhabitacion`, `precio`, `pagada`, `nombre`, `apellidos`, `correoelectronico`) VALUES
(1, '78e26', '2021-05-10', '2021-05-31', 1, '2.00', b'0', 'hola', 'como', 'hola@gmail.com'),
(2, '4ef11', '2021-05-10', '2021-05-23', 3, '3.00', b'0', 'Manuel', 'manu', 'manu@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipohabitacion`
--

CREATE TABLE `tipohabitacion` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(70) NOT NULL,
  `nroCamas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipohabitacion`
--

INSERT INTO `tipohabitacion` (`id`, `descripcion`, `nroCamas`) VALUES
(1, 'Lorem', 14),
(3, 'Amplio', 10),
(4, 'Hola', 2),
(5, 'Ancho', 6);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `fotoshabitacion`
--
ALTER TABLE `fotoshabitacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `habitacion`
--
ALTER TABLE `habitacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `procedencias`
--
ALTER TABLE `procedencias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipohabitacion`
--
ALTER TABLE `tipohabitacion`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `fotoshabitacion`
--
ALTER TABLE `fotoshabitacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `habitacion`
--
ALTER TABLE `habitacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `procedencias`
--
ALTER TABLE `procedencias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipohabitacion`
--
ALTER TABLE `tipohabitacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
