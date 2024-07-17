-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-06-2024 a las 23:38:54
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `landinghcy`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `USERNAME` varchar(100) NOT NULL,
  `NAME` varchar(100) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `CREATED_AT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UPDATED_AT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`ID`, `USERNAME`, `NAME`, `PASSWORD`, `EMAIL`, `CREATED_AT`, `UPDATED_AT`) VALUES
(2, 'juanmmg', 'Juan Manuel Moreno Guevara ', '$2y$10$AIgMBalWIFQnkpbbHHbqD.nJ.utkdzcf.t3H0iKSo3tYzL0fjyeRm', 'morenoguevarajuan20@gmail.com', '2024-06-12 15:44:23', '2024-06-12 15:44:23'),
(10, 'prueba', 'prueba', '$2y$10$ugHsJtpKQsfAma6LyAJZM.gBasIbYknvv6dGZeSs4D9YwhLa8J8ma', 'prueba@gmail.com', '2024-06-12 21:33:36', '2024-06-12 21:33:36');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
