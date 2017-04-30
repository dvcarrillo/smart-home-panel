-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-04-2017 a las 13:00:06
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `smarthousepanel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consumptiont`
--

CREATE TABLE `consumptiont` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `type` int(11) NOT NULL,
  `currentC` double NOT NULL,
  `DayCom` float NOT NULL,
  `MonCom` varchar(1000) NOT NULL,
  `PConsump` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `consumptiont`
--

INSERT INTO `consumptiont` (`id`, `Name`, `type`, `currentC`, `DayCom`, `MonCom`, `PConsump`) VALUES
(0, 'Power', 2, 0.21250000000000002, 118.698, '0', 200),
(1, 'Water', 1, 2, 1369, '0', 45),
(3, 'Heating', 3, 0.03194444444444445, 0, '0', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `device`
--

CREATE TABLE `device` (
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `consumption` double NOT NULL,
  `RoomID` int(11) NOT NULL,
  `state` tinyint(1) DEFAULT NULL,
  `temperature` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `device`
--

INSERT INTO `device` (`id`, `type`, `name`, `consumption`, `RoomID`, `state`, `temperature`) VALUES
(1, 1, 'Kitchen Tap', 20, 2, 1, 0),
(2, 3, 'Room Heater', 23, 1, 1, 26),
(3, 1, 'Kitchen Tap 2', 30, 2, 0, 0),
(4, 2, 'Kitchen Light', 20, 2, 1, 0),
(5, 1, 'Bathroom Tap', 20, 3, 0, 0),
(7, 1, 'Bathroom Shower', 40, 3, 0, 0),
(8, 2, 'Bedroom Light', 10, 4, 0, 0),
(9, 2, 'Bedroom Light 2', 10, 4, 0, 0),
(10, 2, 'Kitchen Fridge', 60, 2, 1, 0),
(11, 2, 'Room Television', 30, 1, 0, 26);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas`
--

CREATE TABLE `notas` (
  `id` int(40) NOT NULL,
  `text` varchar(1100) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `room`
--

INSERT INTO `room` (`id`, `name`) VALUES
(1, 'Living room'),
(2, 'Kitchen'),
(3, 'Bathroom'),
(4, 'Parents Bedroom');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `pass` varchar(1000) NOT NULL,
  `ProfilePicture` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `consumptiont`
--
ALTER TABLE `consumptiont`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `device`
--
ALTER TABLE `device`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `notas`
--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `device`
--
ALTER TABLE `device`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `notas`
--
ALTER TABLE `notas`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
DELIMITER $$
--
-- Eventos
--
CREATE DEFINER=`root`@`localhost` EVENT `consumption_adder` ON SCHEDULE EVERY 3 SECOND STARTS '2017-04-19 00:00:00' ENDS '2017-06-18 00:00:00' ON COMPLETION NOT PRESERVE ENABLE DO UPDATE consumptiont SET currentC = (SELECT ((SUM(consumption)/ 3600) * 5) FROM device WHERE type = 2 OR type=3 AND state = 1) WHERE type=2$$

CREATE DEFINER=`root`@`localhost` EVENT `ConsumptionTotalAdder` ON SCHEDULE EVERY 5 SECOND STARTS '2017-04-12 00:00:00' ENDS '2017-05-25 00:00:00' ON COMPLETION NOT PRESERVE ENABLE DO UPDATE consumptiont SET DayCom = DayCom + currentC WHERE id=1$$

CREATE DEFINER=`root`@`localhost` EVENT `consumptionAL` ON SCHEDULE EVERY 5 SECOND STARTS '2017-04-06 00:00:00' ENDS '2017-05-19 07:36:00' ON COMPLETION PRESERVE ENABLE DO UPDATE consumptiont SET currentC = (SELECT (SUM(consumption) / 10 ) FROM device WHERE type = 1 AND state = 1) WHERE type=1$$

CREATE DEFINER=`root`@`localhost` EVENT `compaddert` ON SCHEDULE EVERY 5 SECOND STARTS '2017-04-11 00:00:00' ENDS '2017-05-25 00:00:00' ON COMPLETION PRESERVE ENABLE DO UPDATE consumptiont SET DayCom = DayCom + currentC WHERE id=0$$

DELIMITER ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
