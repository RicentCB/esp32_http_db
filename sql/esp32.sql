-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-03-2021 a las 21:03:55
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `esp32`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `register_temp`
--

CREATE TABLE `register_temp` (
  `id_valueTemp` int(11) NOT NULL,
  `val_valueTemp` float NOT NULL,
  `timeReg_valueTemp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `register_temp`
--

INSERT INTO `register_temp` (`id_valueTemp`, `val_valueTemp`, `timeReg_valueTemp`) VALUES
(1, 533, '2021-03-11 06:20:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `register_temp`
--
ALTER TABLE `register_temp`
  ADD PRIMARY KEY (`id_valueTemp`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `register_temp`
--
ALTER TABLE `register_temp`
  MODIFY `id_valueTemp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
