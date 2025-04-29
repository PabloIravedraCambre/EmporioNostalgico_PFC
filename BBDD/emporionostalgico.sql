-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-04-2025 a las 20:53:37
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `emporionostalgico`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cesta`
--

CREATE TABLE `cesta` (
  `ID_Cesta` int(11) NOT NULL,
  `ID_Producto` int(11) NOT NULL,
  `ID_Usuario` int(11) NOT NULL,
  `Cantidad_Cesta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `favoritos`
--

CREATE TABLE `favoritos` (
  `ID_Favorito` int(11) NOT NULL,
  `ID_Usuario` int(11) NOT NULL,
  `ID_Producto` int(11) NOT NULL,
  `Cantidad_Favoritos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `favoritos`
--

INSERT INTO `favoritos` (`ID_Favorito`, `ID_Usuario`, `ID_Producto`, `Cantidad_Favoritos`) VALUES
(1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preferencias`
--

CREATE TABLE `preferencias` (
  `ID_Preferencia` int(11) NOT NULL,
  `Nombre_Preferencia` varchar(255) NOT NULL,
  `Epoca_Preferencia` date NOT NULL,
  `Cantidad_Preferencia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `ID_Producto` int(11) NOT NULL,
  `Nombre_Producto` varchar(255) NOT NULL,
  `Precio` int(11) NOT NULL,
  `Cantidad_Producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`ID_Producto`, `Nombre_Producto`, `Precio`, `Cantidad_Producto`) VALUES
(1, 'Mansión de Casper', 20, 1),
(2, 'Gárgola', 12, 1),
(3, 'Míster Músculo', 7, 1),
(4, 'MetalGreymon', 19, 1),
(5, 'Hércules', 6, 1),
(6, 'Orca Streetshark', 8, 1),
(7, 'Ninja Gi-Joe', 4, 1),
(8, 'Buzz Lightyear', 23, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ID_Usuario` int(11) NOT NULL,
  `Nombre_Usuario` varchar(255) NOT NULL,
  `Correo_Usuario` varchar(50) NOT NULL,
  `Contrasenia_Usuario` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ID_Usuario`, `Nombre_Usuario`, `Correo_Usuario`, `Contrasenia_Usuario`) VALUES
(1, 'Pablo', 'funciona@hola.es', '123'),
(2, 'Viento', 'mucho@viento.com', '123'),
(3, 'Brais', 'brais@hola.es', '123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cesta`
--
ALTER TABLE `cesta`
  ADD PRIMARY KEY (`ID_Cesta`);

--
-- Indices de la tabla `favoritos`
--
ALTER TABLE `favoritos`
  ADD PRIMARY KEY (`ID_Favorito`);

--
-- Indices de la tabla `preferencias`
--
ALTER TABLE `preferencias`
  ADD PRIMARY KEY (`ID_Preferencia`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`ID_Producto`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID_Usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cesta`
--
ALTER TABLE `cesta`
  MODIFY `ID_Cesta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `favoritos`
--
ALTER TABLE `favoritos`
  MODIFY `ID_Favorito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `ID_Producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID_Usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
