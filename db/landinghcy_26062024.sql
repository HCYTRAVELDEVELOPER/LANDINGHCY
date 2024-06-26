-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-06-2024 a las 23:58:54
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
-- Estructura de tabla para la tabla `conductor`
--

CREATE TABLE `conductor` (
  `ID` int(11) NOT NULL,
  `NOMBRE` varchar(200) DEFAULT NULL,
  `APELLIDO` varchar(200) DEFAULT NULL,
  `TIPO_ID` varchar(200) DEFAULT NULL,
  `N_ID` varchar(200) DEFAULT NULL,
  `NACIONALIDAD` varchar(200) DEFAULT NULL,
  `FECHA_INGRESO` varchar(200) DEFAULT NULL,
  `ESTADO` varchar(200) DEFAULT NULL,
  `FOTO` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `conductor`
--

INSERT INTO `conductor` (`ID`, `NOMBRE`, `APELLIDO`, `TIPO_ID`, `N_ID`, `NACIONALIDAD`, `FECHA_INGRESO`, `ESTADO`, `FOTO`) VALUES
(1, 'JUAN', 'MORENO', 'CC', '1002710256', 'COLOMBIANO', NULL, 'ACTIVO', NULL),
(2, 'YESID', 'ORTIZ', 'CC', '1234567891', 'COLOMBIANO', NULL, 'ACTIVO', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `ID` int(11) NOT NULL,
  `NOMBRE` varchar(200) DEFAULT NULL,
  `NACIONALIDAD` varchar(200) DEFAULT NULL,
  `FOTOBANDERA` varchar(200) DEFAULT NULL,
  `FECHACREA` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`ID`, `NOMBRE`, `NACIONALIDAD`, `FOTOBANDERA`, `FECHACREA`) VALUES
(1, 'ARGENTINA', 'ARGENTINO', NULL, NULL),
(2, 'BRASIL', 'BRASILENO', NULL, NULL),
(3, 'CHILE', 'CHILENO', NULL, NULL),
(4, 'COLOMBIA', 'COLOMBIANO', NULL, NULL),
(5, 'MEXICO', 'MEXICANO', NULL, NULL),
(6, 'ESTADOS UNIDOS', 'ESTADOUNIDENSE', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `ID` int(11) NOT NULL,
  `CODRESERVA` varchar(200) DEFAULT NULL,
  `PAISRESERVA` varchar(200) DEFAULT NULL,
  `ORIGENRESERVA` varchar(200) DEFAULT NULL,
  `DESTINORESERVA` varchar(200) DEFAULT NULL,
  `VEHICULORESERVA` varchar(200) DEFAULT NULL,
  `IDVEHICULORESERVA` varchar(200) DEFAULT NULL,
  `PRECIORESERVA` varchar(200) DEFAULT NULL,
  `NOMCLIENTERESERVA` varchar(200) DEFAULT NULL,
  `APECLIENTERESERVA` varchar(200) DEFAULT NULL,
  `EMAIL` varchar(200) DEFAULT NULL,
  `TIPOIDCLIENTERESERVA` varchar(200) DEFAULT NULL,
  `IDCLIENTERESERVA` varchar(200) DEFAULT NULL,
  `FECHARESERVA` varchar(200) DEFAULT NULL,
  `FECHACREARESERVA` varchar(200) DEFAULT NULL,
  `FECHAMODRESERVA` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reservas`
--

INSERT INTO `reservas` (`ID`, `CODRESERVA`, `PAISRESERVA`, `ORIGENRESERVA`, `DESTINORESERVA`, `VEHICULORESERVA`, `IDVEHICULORESERVA`, `PRECIORESERVA`, `NOMCLIENTERESERVA`, `APECLIENTERESERVA`, `EMAIL`, `TIPOIDCLIENTERESERVA`, `IDCLIENTERESERVA`, `FECHARESERVA`, `FECHACREARESERVA`, `FECHAMODRESERVA`) VALUES
(1, 'HCYR1719457169', 'ARGENTINA', 'CENTRO', 'SUR', 'VEHICULO Renault Kangoo', '1', '50000', 'JUAN MANUEL', 'MORENO GUEVARA', 'morenoguevarajuan20@gmail.com', 'CC', '100274125', NULL, '26-06-2024', '26-06-2024'),
(2, 'HCYR1719526458', 'ARGENTINA', 'CENTRO', 'SUR', 'VEHICULO Renault Kangoo', '1', '50000', 'JUAN MANUEL', 'MORENO GUEVARA', 'morenoguevarajuan20@gmail.com', 'CC', '100274125', NULL, '26-06-2024', '26-06-2024'),
(3, 'HCYR1719475497', 'ARGENTINA', 'CENTRO', 'SUR', 'VEHICULO Renault Kangoo', '1', '50000', 'JUAN MANUEL', 'MORENO GUEVARA', 'morenoguevarajuan20@gmail.com', 'CC', '100274125', NULL, '26-06-2024', '26-06-2024'),
(4, 'HCYR1719491264', 'ARGENTINA', 'CENTRO', 'SUR', 'VEHICULO Renault Kangoo', '1', '50000', 'JUAN MANUEL', 'MORENO GUEVARA', 'morenoguevarajuan20@gmail.com', 'CC', '100274125', NULL, '26-06-2024', '26-06-2024'),
(5, 'HCYR1719490937', 'ARGENTINA', 'CENTRO', 'SUR', 'VEHICULO Renault Kangoo', '1', '50000', 'JUAN MANUEL', 'MORENO GUEVARA', 'morenoguevarajuan20@gmail.com', 'CC', '100274125', NULL, '26-06-2024', '26-06-2024'),
(6, 'HCYR1719467712', 'ARGENTINA', 'CENTRO', 'SUR', 'VEHICULO Renault Kangoo', '1', '50000', 'JUAN MANUEL', 'MORENO GUEVARA', 'morenoguevarajuan20@gmail.com', 'CC', '100274125', NULL, '26-06-2024', '26-06-2024'),
(7, 'HCYR1719488225', 'ARGENTINA', 'CENTRO', 'SUR', 'VEHICULO Renault Kangoo', '1', '50000', 'JUAN MANUEL', 'MORENO GUEVARA', 'morenoguevarajuan20@gmail.com', 'CC', '100274125', NULL, '26-06-2024', '26-06-2024'),
(8, 'HCYR1719521142', 'ARGENTINA', 'CENTRO', 'SUR', 'VEHICULO Renault Kangoo', '1', '50000', 'JUAN MANUEL', 'MORENO GUEVARA', 'morenoguevarajuan20@gmail.com', 'CC', '100274125', NULL, '26-06-2024', '26-06-2024'),
(9, 'HCYR1719458954', 'ARGENTINA', 'CENTRO', 'SUR', 'VEHICULO Renault Kangoo', '1', '50000', 'YESID', 'ORTIZ', 'yesid.ortiz@gmail.com', 'CC', '12365412', '30-06-2024', '26-06-2024', '26-06-2024'),
(10, 'HCYR1719513359', 'COLOMBIA', 'CENTRO', 'SUR', 'VEHICULO Renault Kangoo 2', '2', '50000', 'PRUEBA', 'PRUEBA', 'prueba@gmail.com', 'CC', '12345963', '05-09-2024', '26-06-2024', '26-06-2024');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transfer`
--

CREATE TABLE `transfer` (
  `ID` int(11) NOT NULL,
  `PAIS` varchar(200) DEFAULT NULL,
  `CIUDAD` varchar(200) DEFAULT NULL,
  `ORIGEN` varchar(200) DEFAULT NULL,
  `DESTINO` varchar(200) DEFAULT NULL,
  `VEHICULO` varchar(200) DEFAULT NULL,
  `ID_VEHICULO` varchar(100) DEFAULT NULL,
  `ASIENTOS` varchar(200) DEFAULT NULL,
  `NOM_CONDUCTOR` varchar(200) DEFAULT NULL,
  `ID_CONDUCTOR` varchar(100) DEFAULT NULL,
  `PRECIO` varchar(200) DEFAULT NULL,
  `ESTADO` varchar(200) DEFAULT NULL,
  `CREADO` varchar(200) DEFAULT NULL,
  `MODIFICADO` varchar(200) DEFAULT NULL,
  `USUARIO_CREA` varchar(200) DEFAULT NULL,
  `USUARIO_MODIFICA` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `transfer`
--

INSERT INTO `transfer` (`ID`, `PAIS`, `CIUDAD`, `ORIGEN`, `DESTINO`, `VEHICULO`, `ID_VEHICULO`, `ASIENTOS`, `NOM_CONDUCTOR`, `ID_CONDUCTOR`, `PRECIO`, `ESTADO`, `CREADO`, `MODIFICADO`, `USUARIO_CREA`, `USUARIO_MODIFICA`) VALUES
(1, 'ARGENTINA', 'BUENOS AIRES', 'CENTRO', 'SUR', 'VEHICULO Renault Kangoo', '1', '6', 'JUAN MORENO', '1', '50000', 'ACTIVO', NULL, NULL, NULL, NULL),
(2, 'BRASIL', 'RIO DE JANEIRO', 'CENTRO', 'SUR', 'VEHICULO Renault Kangoo 2', '2', '4', 'JUAN MORENO', '1', '50000', 'ACTIVO', NULL, NULL, NULL, NULL),
(3, 'COLOMBIA', 'BOGOTA', 'CENTRO', 'SUR', 'VEHICULO Renault Kangoo 2', '2', '4', 'JUAN MORENO', '1', '50000', 'ACTIVO', NULL, NULL, NULL, NULL),
(4, 'ARGENTINA', 'BUENOS AIRES', 'CENTRO', 'SUR', 'VEHICULO Renault Kangoo', '1', '6', 'YESID ORTIZ', '2', '50000', 'ACTIVO', NULL, NULL, NULL, NULL);

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
  `ROL` varchar(100) DEFAULT NULL,
  `CREATED_AT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UPDATED_AT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`ID`, `USERNAME`, `NAME`, `PASSWORD`, `EMAIL`, `ROL`, `CREATED_AT`, `UPDATED_AT`) VALUES
(2, 'juanmmg', 'Juan Manuel Moreno Guevara ', '$2y$10$AIgMBalWIFQnkpbbHHbqD.nJ.utkdzcf.t3H0iKSo3tYzL0fjyeRm', 'morenoguevarajuan20@gmail.com', 'ADMINISTRADOR', '2024-06-12 15:44:23', '2024-06-18 21:21:05'),
(10, 'prueba', 'prueba', '$2y$10$ugHsJtpKQsfAma6LyAJZM.gBasIbYknvv6dGZeSs4D9YwhLa8J8ma', 'prueba@gmail.com', 'CLIENTE', '2024-06-12 21:33:36', '2024-06-18 21:26:20'),
(11, 'yortiz', 'Yesid Ortiz', '$2y$10$i19KSuMgNW1xNGitNDD1V.BN7KgRq/3PJeZwjP2VCzzk/YHSdpb3W', 'yesid.ortiz@gmail.com', 'ADMINISTRADOR', '2024-06-18 01:12:42', '2024-06-18 21:26:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE `vehiculo` (
  `ID` int(11) NOT NULL,
  `NOMBRE` varchar(200) DEFAULT NULL,
  `MARCA` varchar(200) DEFAULT NULL,
  `MODELO` varchar(200) DEFAULT NULL,
  `TIPO` varchar(200) DEFAULT NULL,
  `FECHACREA` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `vehiculo`
--

INSERT INTO `vehiculo` (`ID`, `NOMBRE`, `MARCA`, `MODELO`, `TIPO`, `FECHACREA`) VALUES
(1, 'VEHICULO DE TRANSFER', 'Renault Kangoo', '1997', 'Transfer carga y pasajeros', NULL),
(2, 'VEHÍCULO DE TRANSFER', 'Renault Kangoo 2', '1995', 'Transfer', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `conductor`
--
ALTER TABLE `conductor`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `transfer`
--
ALTER TABLE `transfer`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `conductor`
--
ALTER TABLE `conductor`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `transfer`
--
ALTER TABLE `transfer`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
