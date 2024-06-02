-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-06-2024 a las 18:54:28
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pyhoras_sociales`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `forocomunidad`
--

CREATE TABLE `forocomunidad` (
  `Id` int(11) NOT NULL,
  `Descripcion` varchar(1000) NOT NULL,
  `Archivo` mediumblob NOT NULL,
  `PersonaId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrotiempo`
--

CREATE TABLE `registrotiempo` (
  `Id` int(11) NOT NULL,
  `Descripcion` varchar(1000) NOT NULL,
  `EstudianteId` int(11) NOT NULL,
  `ProfesorId` int(11) NOT NULL,
  `HorasUtil` int(11) NOT NULL,
  `arEvidencia` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Correo` varchar(256) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `FtPerfil` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `forocomunidad`
--
ALTER TABLE `forocomunidad`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `PersonaId` (`PersonaId`);

--
-- Indices de la tabla `registrotiempo`
--
ALTER TABLE `registrotiempo`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `EstudianteId` (`EstudianteId`),
  ADD KEY `ProfesorId` (`ProfesorId`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Correo` (`Correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `forocomunidad`
--
ALTER TABLE `forocomunidad`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `registrotiempo`
--
ALTER TABLE `registrotiempo`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `forocomunidad`
--
ALTER TABLE `forocomunidad`
  ADD CONSTRAINT `forocomunidad_ibfk_1` FOREIGN KEY (`PersonaId`) REFERENCES `usuarios` (`Id`);

--
-- Filtros para la tabla `registrotiempo`
--
ALTER TABLE `registrotiempo`
  ADD CONSTRAINT `registrotiempo_ibfk_1` FOREIGN KEY (`EstudianteId`) REFERENCES `usuarios` (`Id`),
  ADD CONSTRAINT `registrotiempo_ibfk_2` FOREIGN KEY (`ProfesorId`) REFERENCES `usuarios` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
