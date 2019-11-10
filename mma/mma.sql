-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-09-2019 a las 14:26:26
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
-- Base de datos: `mma`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias_peleadores`
--

CREATE TABLE `categorias_peleadores` (
  `cat_peleadores_id` tinyint(4) NOT NULL,
  `cat_peleadores_nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias_peleadores`
--

INSERT INTO `categorias_peleadores` (`cat_peleadores_id`, `cat_peleadores_nombre`) VALUES
(1, 'Pesado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nacionalidades`
--

CREATE TABLE `nacionalidades` (
  `nac_id` smallint(6) NOT NULL,
  `nac_nombre` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `nacionalidades`
--

INSERT INTO `nacionalidades` (`nac_id`, `nac_nombre`) VALUES
(2, 'Suiza');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peleadores`
--

CREATE TABLE `peleadores` (
  `usuario_id` int(11) NOT NULL,
  `peleadores_nombre` varchar(50) NOT NULL,
  `peleadores_apellido` varchar(50) NOT NULL,
  `peleadores_edad` int(3) NOT NULL,
  `cat_peleador_id` tinyint(4) NOT NULL,
  `nac_id` smallint(6) NOT NULL,
  `peleadores_imagen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `peleadores`
--

INSERT INTO `peleadores` (`usuario_id`, `peleadores_nombre`, `peleadores_apellido`, `peleadores_edad`, `cat_peleador_id`, `nac_id`, `peleadores_imagen`) VALUES
(1, 'Sergio', 'Acosta', 23, 1, 2, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `clave` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario_id`, `email`, `clave`) VALUES
(1, 'sergiox1228@gmail.com', '123456'),
(2, 'sabrialex20000@gmail.com', '12345678'),
(3, 'samuel-ah@hotmail.com', '33333333'),
(4, 'otromail@gmail.com', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias_peleadores`
--
ALTER TABLE `categorias_peleadores`
  ADD PRIMARY KEY (`cat_peleadores_id`);

--
-- Indices de la tabla `nacionalidades`
--
ALTER TABLE `nacionalidades`
  ADD PRIMARY KEY (`nac_id`);

--
-- Indices de la tabla `peleadores`
--
ALTER TABLE `peleadores`
  ADD PRIMARY KEY (`usuario_id`),
  ADD KEY `id_cat` (`cat_peleador_id`),
  ADD KEY `nac_id` (`nac_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias_peleadores`
--
ALTER TABLE `categorias_peleadores`
  MODIFY `cat_peleadores_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `nacionalidades`
--
ALTER TABLE `nacionalidades`
  MODIFY `nac_id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `peleadores`
--
ALTER TABLE `peleadores`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `peleadores`
--
ALTER TABLE `peleadores`
  ADD CONSTRAINT `peleadores_ibfk_1` FOREIGN KEY (`cat_peleador_id`) REFERENCES `categorias_peleadores` (`cat_peleadores_id`),
  ADD CONSTRAINT `peleadores_ibfk_2` FOREIGN KEY (`nac_id`) REFERENCES `nacionalidades` (`nac_id`),
  ADD CONSTRAINT `peleadores_ibfk_3` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`usuario_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
