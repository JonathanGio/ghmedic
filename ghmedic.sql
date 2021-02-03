-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 03-02-2021 a las 23:47:16
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ghmedic`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `edad` varchar(255) DEFAULT NULL,
  `departamento` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`id`, `nombre`, `edad`, `departamento`) VALUES
(8, 'LEONARDO', '23', 3),
(9, 'Jonathan Giovanni', '23', 2),
(10, 'LEONARDO', '23', 3),
(11, 'Juan', '23', 3),
(12, 'Jonathan Giovanni', '23', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados_federativos`
--

CREATE TABLE `estados_federativos` (
  `PKEstado` int(11) NOT NULL,
  `Estado` varchar(35) NOT NULL,
  `FKPais` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estados_federativos`
--

INSERT INTO `estados_federativos` (`PKEstado`, `Estado`, `FKPais`) VALUES
(1, 'Aguascalientes', 146),
(2, 'Baja California', 146),
(3, 'Baja California Sur', 146),
(4, 'Campeche', 146),
(5, 'Chiapas', 146),
(6, 'Chihuahua', 146),
(7, 'Ciudad de México', 146),
(8, 'Coahuila', 146),
(9, 'Colima', 146),
(10, 'Durango', 146),
(11, 'Guanajuato', 146),
(12, 'Guerrero', 146),
(13, 'Hidalgo', 146),
(14, 'Jalisco', 146),
(15, 'Estado de México', 146),
(16, 'Michoacán', 146),
(17, 'Morelos', 146),
(18, 'Nayarit', 146),
(19, 'Nuevo León', 146),
(20, 'Oaxaca', 146),
(21, 'Puebla', 146),
(22, 'Querétaro', 146),
(23, 'Quintana Roo', 146),
(24, 'San Luis Potosí', 146),
(25, 'Sinaloa', 146),
(26, 'Sonora', 146),
(27, 'Tabasco', 146),
(28, 'Tamaulipas', 146),
(29, 'Tlaxcala', 146),
(30, 'Veracruz', 146),
(31, 'Yucatán', 146),
(32, 'Zacatecas', 146),
(33, 'Texas', 75),
(34, 'DC', 75);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paises`
--

CREATE TABLE `paises` (
  `PKPais` int(11) NOT NULL,
  `Pais` varchar(25) NOT NULL,
  `Disponible` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `paises`
--

INSERT INTO `paises` (`PKPais`, `Pais`, `Disponible`) VALUES
(75, 'Estados Unidos', 0),
(146, 'México', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estados_federativos`
--
ALTER TABLE `estados_federativos`
  ADD PRIMARY KEY (`PKEstado`);

--
-- Indices de la tabla `paises`
--
ALTER TABLE `paises`
  ADD PRIMARY KEY (`PKPais`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `estados_federativos`
--
ALTER TABLE `estados_federativos`
  MODIFY `PKEstado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `paises`
--
ALTER TABLE `paises`
  MODIFY `PKPais` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=241;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
