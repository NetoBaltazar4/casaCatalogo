-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3307
-- Tiempo de generación: 10-02-2021 a las 20:37:46
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `catalogo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `id_bolsa` int(11) NOT NULL,
  `id_catalogo_carrito` int(11) NOT NULL,
  `precio_bolsa` float NOT NULL,
  `talla_bolsa` float NOT NULL,
  `modelo_bolsa` varchar(30) NOT NULL,
  `marca_bolsa` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogo`
--

CREATE TABLE `catalogo` (
  `id_catalogo` int(11) NOT NULL,
  `modelo` varchar(30) NOT NULL,
  `marca` varchar(30) NOT NULL,
  `precio` varchar(30) NOT NULL,
  `corrida` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `catalogo`
--

INSERT INTO `catalogo` (`id_catalogo`, `modelo`, `marca`, `precio`, `corrida`) VALUES
(14585478, '584-94', 'CASTALIA', '477,00', '23 - 26.5'),
(15248503, '195-89', 'CASTALIA', '501,00', '22 - 27'),
(15290785, '584-94', 'CASTALIA', ' 477,00 ', '22 - 27'),
(15290960, '1012-21', 'TREVO', '308,00', '23 - 26.5'),
(15296035, '939-31', 'TREVO', ' 438,00 ', '22 - 27'),
(15895632, '301-22', 'CASTALIA', ' 499,00 ', '22 - 27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` varchar(11) NOT NULL,
  `id_cliente_cuenta` int(11) NOT NULL,
  `nombre_cliente` varchar(30) NOT NULL,
  `ap_cliente` varchar(30) NOT NULL,
  `am_cliente` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `id_compra` int(11) NOT NULL,
  `id_catalogo_compra` int(11) NOT NULL,
  `id_cliente_compra` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle compra`
--

CREATE TABLE `detalle_compra` (
  `id_detalle_compra` int(100) NOT NULL,
  `fecha_compra` date NOT NULL,
  `marca_producto` varchar(30) NOT NULL,
  `precio_producto` float NOT NULL,
  `precio_envio` float NOT NULL,
  `pagaste` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `domicilio`
--

CREATE TABLE `domicilio` (
  `id_domicilio` int(11) NOT NULL,
  `id_cliente_domicilio` varchar(11) NOT NULL,
  `nom_dom` varchar(30) NOT NULL,
  `ap_dom` varchar(30) NOT NULL,
  `am_dom` varchar(30) NOT NULL,
  `cp_dom` int(11) NOT NULL,
  `estado_dom` varchar(30) NOT NULL,
  `ciudad_dom` varchar(30) NOT NULL,
  `nom_calle_dom` varchar(30) NOT NULL,
  `num_calle_dom` int(11) NOT NULL,
  `colonia_asentamiento_dom` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `envio`
--

CREATE TABLE `envio` (
  `id_envio` int(11) NOT NULL,
  `id_compra_envio` int(11) NOT NULL,
  `fecha_inicio_envio` date NOT NULL,
  `fecha_fin_envio` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

CREATE TABLE `pago` (
  `id_pago` int(11) NOT NULL,
  `id_detalle_compra_pago` int(11) NOT NULL,
  `id_compra_pago` int(11) NOT NULL,
  `total_pago` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro cuenta`
--

CREATE TABLE `registro_cuenta` (
  `id_cuenta` int(11) NOT NULL,
  `nombre_user` varchar(30) NOT NULL,
  `ap_user` varchar(30) NOT NULL,
  `am_user` varchar(30) NOT NULL,
  `email_user` varchar(30) NOT NULL,
  `password_user` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registro cuenta`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarjeta`
--

CREATE TABLE `tarjeta` (
  `id_tarjeta` int(11) NOT NULL,
  `tipo_tarjeta` varchar(15) NOT NULL,
  `num_tarjeta` int(20) NOT NULL,
  `nombre_tar` varchar(30) NOT NULL,
  `ap_tar` varchar(30) NOT NULL,
  `am_tar` varchar(30) NOT NULL,
  `mm` int(2) NOT NULL,
  `aa` int(4) NOT NULL,
  `codigo_tarjeta` int(20) NOT NULL,
  `id_cliente_tarjeta` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `id_venta` int(11) NOT NULL,
  `id_producto_venta` int(11) NOT NULL,
  `marca_venta` varchar(30) NOT NULL,
  `numero_venta` int(11) NOT NULL,
  `modelo_venta` varchar(30) NOT NULL,
  `dia` int(11) NOT NULL,
  `mes` int(11) NOT NULL,
  `anio` int(11) NOT NULL,
  `talla_venta` float NOT NULL,
  `precio_venta` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`id_bolsa`),
  ADD KEY `fk_carrito_catalogo` (`id_catalogo_carrito`);

--
-- Indices de la tabla `catalogo`
--
ALTER TABLE `catalogo`
  ADD PRIMARY KEY (`id_catalogo`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`),
  ADD KEY `fk_cliente_registroCuenta` (`id_cliente_cuenta`);

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`id_compra`),
  ADD KEY `fk_compra_catalogo` (`id_catalogo_compra`),
  ADD KEY `fk_compra_cliente` (`id_cliente_compra`);

--
-- Indices de la tabla `detalle compra`
--
ALTER TABLE `detalle_compra`
  ADD PRIMARY KEY (`id_detalle_compra`);

--
-- Indices de la tabla `domicilio`
--
ALTER TABLE `domicilio`
  ADD PRIMARY KEY (`id_domicilio`),
  ADD KEY `fk_domicilio_cliente` (`id_cliente_domicilio`);

--
-- Indices de la tabla `envio`
--
ALTER TABLE `envio`
  ADD PRIMARY KEY (`id_envio`),
  ADD KEY `fk_envio_compra` (`id_compra_envio`);

--
-- Indices de la tabla `pago`
--
ALTER TABLE `pago`
  ADD PRIMARY KEY (`id_pago`),
  ADD KEY `fk_pago_detalleCompra` (`id_detalle_compra_pago`),
  ADD KEY `fk_pago_compra` (`id_compra_pago`);

--
-- Indices de la tabla `registro cuenta`
--
ALTER TABLE `registro_cuenta`
  ADD PRIMARY KEY (`id_cuenta`);

--
-- Indices de la tabla `tarjeta`
--
ALTER TABLE `tarjeta`
  ADD PRIMARY KEY (`id_tarjeta`),
  ADD KEY `fk_tarjeta_clienta` (`id_cliente_tarjeta`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id_venta`),
  ADD KEY `fk_venta_catalogo` (`id_producto_venta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `id_bolsa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `compra`
--
ALTER TABLE `compra`
  MODIFY `id_compra` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle compra`
--
ALTER TABLE `detalle_compra`
  MODIFY `id_detalle_compra` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `domicilio`
--
ALTER TABLE `domicilio`
  MODIFY `id_domicilio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `envio`
--
ALTER TABLE `envio`
  MODIFY `id_envio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pago`
--
ALTER TABLE `pago`
  MODIFY `id_pago` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `registro cuenta`
--
ALTER TABLE `registro_cuenta`
  MODIFY `id_cuenta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5679;

--
-- AUTO_INCREMENT de la tabla `tarjeta`
--
ALTER TABLE `tarjeta`
  MODIFY `id_tarjeta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `fk_carrito_catalogo` FOREIGN KEY (`id_catalogo_carrito`) REFERENCES `catalogo` (`id_catalogo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `fk_cliente_registroCuenta` FOREIGN KEY (`id_cliente_cuenta`) REFERENCES `registro_cuenta` (`id_cuenta`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `fk_compra_catalogo` FOREIGN KEY (`id_catalogo_compra`) REFERENCES `catalogo` (`id_catalogo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_compra_cliente` FOREIGN KEY (`id_cliente_compra`) REFERENCES `cliente` (`id_cliente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `domicilio`
--
ALTER TABLE `domicilio`
  ADD CONSTRAINT `fk_domicilio_cliente` FOREIGN KEY (`id_cliente_domicilio`) REFERENCES `cliente` (`id_cliente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `envio`
--
ALTER TABLE `envio`
  ADD CONSTRAINT `fk_envio_compra` FOREIGN KEY (`id_compra_envio`) REFERENCES `compra` (`id_compra`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pago`
--
ALTER TABLE `pago`
  ADD CONSTRAINT `fk_pago_compra` FOREIGN KEY (`id_compra_pago`) REFERENCES `compra` (`id_compra`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_pago_detalleCompra` FOREIGN KEY (`id_detalle_compra_pago`) REFERENCES `detalle_compra` (`id_detalle_compra`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tarjeta`
--
ALTER TABLE `tarjeta`
  ADD CONSTRAINT `fk_tarjeta_clienta` FOREIGN KEY (`id_cliente_tarjeta`) REFERENCES `cliente` (`id_cliente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `fk_venta_catalogo` FOREIGN KEY (`id_producto_venta`) REFERENCES `catalogo` (`id_catalogo`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
