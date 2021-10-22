-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-10-2021 a las 17:54:08
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fedesoft`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `idPaciente` int(11) NOT NULL,
  `nombre` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `tipoDocumento` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `numeroDocumento` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `fechaCita` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `horaCita` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `pdf` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`idPaciente`, `nombre`, `apellido`, `tipoDocumento`, `numeroDocumento`, `fechaCita`, `horaCita`, `pdf`) VALUES
(2, 'dayana', 'reyes', 'Cedula de ciudadania', '1002527697', '2021-10-22', '09:53', 'vista/pdf/2021-10-22dayanareyes.pdf'),
(4, 'Laura', 'Lopez', 'Cedula de ciudadania', '10024563456', '2021-10-06', '10:50', 'vista/pdf/2021-10-06LauraLopez.pdf'),
(5, 'Catalina', 'Carmenza', 'Cedula de ciudadania', '1002635478', '2021-09-09', '14:55', 'vista/pdf/2021-09-09CatalinaCarmenza.pdf'),
(6, 'Carmen', 'Perez', 'Cedula de ciudadania', '1002435674', '2021-09-22', '17:00', 'vista/pdf/2021-09-22CarmenPerez.pdf'),
(7, 'Carlos', 'Cardenas', 'Cedula de ciudadania', '10024536748', '2021-10-12', '15:50', 'vista/pdf/2021-10-12CarlosCardenas.pdf');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`idPaciente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `paciente`
--
ALTER TABLE `paciente`
  MODIFY `idPaciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
