-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-09-2019 a las 14:22:47
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `aplicacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `cat_id` smallint(6) NOT NULL,
  `cat_nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`cat_id`, `cat_nombre`) VALUES
(1, 'Electrónica'),
(2, 'Computación'),
(3, 'Muebles'),
(4, 'Vehículos'),
(5, 'Inmuebles');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicaciones`
--

CREATE TABLE `publicaciones` (
  `pub_id` int(11) NOT NULL,
  `pub_titulo` varchar(100) NOT NULL,
  `pub_descripcion` varchar(1000) NOT NULL,
  `pub_precio` decimal(10,0) NOT NULL,
  `pub_imagen` varchar(50) NOT NULL,
  `cat_id` smallint(6) NOT NULL,
  `usr_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `publicaciones`
--

INSERT INTO `publicaciones` (`pub_id`, `pub_titulo`, `pub_descripcion`, `pub_precio`, `pub_imagen`, `cat_id`, `usr_id`) VALUES
(1, 'Samsung Galaxy S10+', 'Samsung Galaxy S10+ Samsung Galaxy S10+ Samsung Galaxy S10+ Samsung Galaxy S10+ Samsung Galaxy S10+ Samsung Galaxy S10+', '50000', 'galaxys10plus.jpg', 1, 2),
(2, 'Computadora Core i7 32gb RAM etc', 'PC completa. Como nueva! 9/10', '30000', 'pc_como_nueva.jpg', 2, 1),
(3, 'Excelente 3 ambientes en Caballito', 'Vista luminosa. Amplio. Buenos vecinos ', '3000000', 'dto3amb.jpg', 5, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usr_id` int(11) NOT NULL,
  `usr_nombre` varchar(20) NOT NULL,
  `usr_password` varchar(12) NOT NULL,
  `usr_nombre_real` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usr_id`, `usr_nombre`, `usr_password`, `usr_nombre_real`) VALUES
(1, 'pablo', '1234', 'Pablo Tilli'),
(2, 'pepe', '1234', 'Pepe Garcia');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indices de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD PRIMARY KEY (`pub_id`),
  ADD KEY `usr_id` (`usr_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usr_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `cat_id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  MODIFY `pub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD CONSTRAINT `publicaciones_ibfk_1` FOREIGN KEY (`usr_id`) REFERENCES `usuarios` (`usr_id`),
  ADD CONSTRAINT `publicaciones_ibfk_2` FOREIGN KEY (`cat_id`) REFERENCES `categorias` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
