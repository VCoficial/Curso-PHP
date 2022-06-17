-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 17-06-2022 a las 11:50:44
-- Versión del servidor: 5.7.33
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hospisoft`
--
CREATE DATABASE IF NOT EXISTS `hospisoft` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `hospisoft`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agenda`
--

CREATE TABLE `agenda` (
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `idMedico` int(11) NOT NULL,
  `motivo` varchar(250) DEFAULT NULL,
  `idPaciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `agenda`
--

INSERT INTO `agenda` (`fecha`, `hora`, `idMedico`, `motivo`, `idPaciente`) VALUES
('2022-05-28', '00:10:00', 1, 'feoooooo', 0),
('2022-05-14', '00:15:00', 5, 'feo2', 15),
('2022-05-21', '00:10:00', 5, 'dsfsdf', 15),
('2022-05-29', '00:13:00', 5, 'holi', 15),
('2022-05-28', '00:11:00', 6, 'fgfhfgh', 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medico`
--

CREATE TABLE `medico` (
  `idMedico` int(11) NOT NULL,
  `nombreMedico` varchar(200) NOT NULL,
  `apellidosMedico` varchar(250) NOT NULL,
  `emailMedico` varchar(250) NOT NULL,
  `especialidadMedico` varchar(250) NOT NULL,
  `passMedico` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `medico`
--

INSERT INTO `medico` (`idMedico`, `nombreMedico`, `apellidosMedico`, `emailMedico`, `especialidadMedico`, `passMedico`) VALUES
(1, 'diego', 'ramirez', 'femercado05@misena.edu.co', 'ginecologo', '0'),
(5, 'Michael', 'manchola', 'mikero9837rru@gmail.com', 'neurocirugia', '0'),
(6, 'juan', 'jaramillo', 'lolo@gmail.com', 'psiquiatra', '0'),
(1010, 'michael', 'gomez', 'juangar@gmail.com', 'neurocirugia', '12345'),
(1150, 'edrewr', 'werwer', 'juangar@gmail.com', 'psiquiatra', '$2y$10$k3NBewSlVV.7HeYHhNZ1peZsdrL5nRvamOv0pBvlmsgMgleS8KFh6');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `idPaciente` int(11) NOT NULL,
  `nombrePaciente` varchar(200) DEFAULT NULL,
  `apellidoPaciente` varchar(250) DEFAULT NULL,
  `emailPaciente` varchar(250) DEFAULT NULL,
  `telefonoPaciente` varchar(150) NOT NULL,
  `movilPaciente` varchar(150) DEFAULT NULL,
  `fechaNacimiento` date NOT NULL,
  `epsPaciente` varchar(250) DEFAULT NULL,
  `userPaciente` varchar(250) DEFAULT NULL,
  `passPaciente` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`idPaciente`, `nombrePaciente`, `apellidoPaciente`, `emailPaciente`, `telefonoPaciente`, `movilPaciente`, `fechaNacimiento`, `epsPaciente`, `userPaciente`, `passPaciente`) VALUES
(3, 'dsf', 'fsdf', 'juangar@gmail.com', 'sdf', 'sdfs', '2022-05-20', 'sd', 'sdf', '$2y$10$YdTd6JUmZow9GIZxkOT7v.PAmmg3/tmZb0rNeivY8XWJaXGeyCcIa'),
(4, '', '', '', '', '', '0000-00-00', '', '', '$2y$10$NQogET4tLcKcafnZJEP/UuzOuQw2JNyqIeFIpYfPspGiRBvJwVVmy'),
(7, '', '', '', '', '', '0000-00-00', '', '', '$2y$10$iCOO.SYHeetzsJM8U2QNtugKmUkSNZ2kOSFlkU3W.bSNz9FuqPD9G'),
(13, 'MIKAEL', 'MMM', 'GDFGDFG', 'GFR4354', 'GFDDGD', '2022-05-09', 'DFGDF', 'MIKEL', '12345'),
(15, 'diego', 'efrien', 'mfghfghh@gmail.com', '234234', 'sdsad', '2022-05-25', 'ladelbarrio', 'diego', '$2y$10$Nj8coRHFLWSXDen/D8H77.WLipygPZmhFnGpdDCHAr8UzPr3B/ro6');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`idMedico`,`fecha`,`hora`);

--
-- Indices de la tabla `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`idMedico`);

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`idPaciente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `idPaciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
