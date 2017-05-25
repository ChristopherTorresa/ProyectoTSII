-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-05-2017 a las 17:22:05
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sipu`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Instituciones_Superiores`
--

CREATE TABLE `instituciones_superiores` (
  `codigo` int(11) NOT NULL,
  `nombre_instituciones` varchar(100) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `Tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Instituciones_Superiores`
--

INSERT INTO `Instituciones_Superiores` (`codigo`, `nombre_instituciones`, `telefono`, `Tipo`) VALUES
(1, 'USIL', '4596599', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Instituciones_Superiores`
--
ALTER TABLE `Instituciones_Superiores`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Instituciones_Superiores`
--
ALTER TABLE `Instituciones_Superiores`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
