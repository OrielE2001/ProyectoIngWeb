-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-12-2021 a las 03:46:12
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `systemcss`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita`
--

CREATE TABLE `cita` (
  `IDcita` char(5) NOT NULL,
  `Fecha` date NOT NULL,
  `Hora` time NOT NULL,
  `IDpoliclinica_cita` char(5) NOT NULL,
  `IDdoctor_cita` char(5) NOT NULL,
  `IDpaciente_cita` char(5) NOT NULL,
  `IDespecialidad_cita` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doctor`
--

CREATE TABLE `doctor` (
  `IDdoctor` char(5) NOT NULL,
  `Nombre` varchar(25) NOT NULL,
  `Cedula` varchar(13) NOT NULL,
  `Correo` text NOT NULL,
  `Telefono` int(8) DEFAULT NULL,
  `Horas_laborales` time(6) NOT NULL,
  `IDEspecialidad_doctor` char(5) DEFAULT NULL,
  `IDpoliclinica_doctor` char(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidad`
--

CREATE TABLE `especialidad` (
  `IDespecialidad` char(5) NOT NULL,
  `Nombre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

CREATE TABLE `historial` (
  `Codigo` char(5) NOT NULL,
  `Estado` varchar(20) DEFAULT 'DISPONIBLE',
  `IDusuario_historial` char(5) NOT NULL,
  `IDpaciente_historial` char(5) NOT NULL,
  `IDcita_historial` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `IDpaciente` char(5) NOT NULL,
  `Nombre` varchar(25) NOT NULL,
  `Cedula` varchar(13) NOT NULL,
  `Correo` text NOT NULL,
  `Telefono` int(8) DEFAULT NULL,
  `Edad` int(3) NOT NULL,
  `Asegurado` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `policlinica`
--

CREATE TABLE `policlinica` (
  `IDpoliclinica` char(5) NOT NULL,
  `Nombre` varchar(25) NOT NULL,
  `Ubicacion` text DEFAULT 'Ciudad de Panama',
  `Contacto` int(8) NOT NULL,
  `Horario` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `IDusuario` char(5) NOT NULL,
  `Nombre` varchar(25) NOT NULL,
  `Correo` text NOT NULL,
  `Contraseña` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cita`
--
ALTER TABLE `cita`
  ADD PRIMARY KEY (`IDcita`),
  ADD KEY `IDpoliclinica_cita` (`IDpoliclinica_cita`),
  ADD KEY `IDdoctor_cita` (`IDdoctor_cita`),
  ADD KEY `IDpaciente_cita` (`IDpaciente_cita`),
  ADD KEY `IDespecialidad_cita` (`IDespecialidad_cita`);

--
-- Indices de la tabla `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`IDdoctor`),
  ADD KEY `IDpoliclinica_doctor` (`IDpoliclinica_doctor`),
  ADD KEY `IDEspecialidad_doctor` (`IDEspecialidad_doctor`);

--
-- Indices de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  ADD PRIMARY KEY (`IDespecialidad`);

--
-- Indices de la tabla `historial`
--
ALTER TABLE `historial`
  ADD PRIMARY KEY (`Codigo`),
  ADD KEY `IDusuario_historial` (`IDusuario_historial`),
  ADD KEY `IDpaciente_historial` (`IDpaciente_historial`),
  ADD KEY `IDcita_historial` (`IDcita_historial`);

--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`IDpaciente`);

--
-- Indices de la tabla `policlinica`
--
ALTER TABLE `policlinica`
  ADD PRIMARY KEY (`IDpoliclinica`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`IDusuario`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cita`
--
ALTER TABLE `cita`
  ADD CONSTRAINT `fk_CitaDoctor` FOREIGN KEY (`IDdoctor_cita`) REFERENCES `doctor` (`IDdoctor`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_CitaEspecialidad` FOREIGN KEY (`IDespecialidad_cita`) REFERENCES `especialidad` (`IDespecialidad`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_CitaPaciente` FOREIGN KEY (`IDpaciente_cita`) REFERENCES `paciente` (`IDpaciente`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_CitaPoliclinica` FOREIGN KEY (`IDpoliclinica_cita`) REFERENCES `policlinica` (`IDpoliclinica`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `fk_DoctorEspecialidad` FOREIGN KEY (`IDEspecialidad_doctor`) REFERENCES `especialidad` (`IDespecialidad`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `fk_DoctorPoliclinica` FOREIGN KEY (`IDpoliclinica_doctor`) REFERENCES `policlinica` (`IDpoliclinica`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `historial`
--
ALTER TABLE `historial`
  ADD CONSTRAINT `fk_HistorialCita` FOREIGN KEY (`IDcita_historial`) REFERENCES `cita` (`IDcita`),
  ADD CONSTRAINT `fk_HistorialPaciente` FOREIGN KEY (`IDpaciente_historial`) REFERENCES `paciente` (`IDpaciente`),
  ADD CONSTRAINT `fk_HistorialUsuario` FOREIGN KEY (`IDusuario_historial`) REFERENCES `usuario` (`IDusuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
