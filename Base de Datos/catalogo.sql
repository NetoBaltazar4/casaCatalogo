-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2021 at 10:18 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `catalogo`
--

-- --------------------------------------------------------

--
-- Table structure for table `carrito`
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
-- Table structure for table `catalogo`
--

CREATE TABLE `catalogo` (
  `id_catalogo` int(11) NOT NULL,
  `modelo` varchar(30) NOT NULL,
  `marca` varchar(30) NOT NULL,
  `precio` varchar(30) NOT NULL,
  `corrida` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catalogo`
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
-- Table structure for table `cliente`
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
-- Table structure for table `compra`
--

CREATE TABLE `compra` (
  `id_compra` int(11) NOT NULL,
  `id_catalogo_compra` int(11) NOT NULL,
  `id_cliente_compra` varchar(11) NOT NULL,
  `id_venta` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `detalle_compra`
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
-- Table structure for table `domicilio`
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
-- Table structure for table `envio`
--

CREATE TABLE `envio` (
  `id_envio` int(11) NOT NULL,
  `id_venta` int(11) NOT NULL,
  `fechaInicioEnvio` varchar(30) NOT NULL,
  `fechaFinEnvio` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pago`
--

CREATE TABLE `pago` (
  `id_pago` int(11) NOT NULL,
  `id_detalle_compra_pago` int(11) NOT NULL,
  `id_compra_pago` int(11) NOT NULL,
  `total_pago` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registro_cuenta`
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
-- Dumping data for table `registro_cuenta`
--

INSERT INTO `registro_cuenta` (`id_cuenta`, `nombre_user`, `ap_user`, `am_user`, `email_user`, `password_user`) VALUES
(5678, 'Miguel', 'Jacobo', 'Jacobo', 'migjacobo73@gmail.com', 'Migue123.'),
(5679, 'Miguel', 'Jacobo', 'Jacobo', 'migjacobo73@gmail.com', 'Migue123.');

-- --------------------------------------------------------

--
-- Table structure for table `tarjeta`
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
-- Table structure for table `venta`
--

CREATE TABLE `venta` (
  `id_venta` int(11) NOT NULL,
  `precioVenta` int(11) NOT NULL,
  `tallaVenta` float NOT NULL,
  `marcaVenta` varchar(30) NOT NULL,
  `numeroVenta` int(11) NOT NULL,
  `modeloVenta` int(30) NOT NULL,
  `dia` int(11) NOT NULL,
  `mes` int(11) NOT NULL,
  `anio` int(11) NOT NULL,
  `visto` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`id_bolsa`),
  ADD KEY `fk_carrito_catalogo` (`id_catalogo_carrito`);

--
-- Indexes for table `catalogo`
--
ALTER TABLE `catalogo`
  ADD PRIMARY KEY (`id_catalogo`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`),
  ADD KEY `fk_cliente_registroCuenta` (`id_cliente_cuenta`);

--
-- Indexes for table `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`id_compra`),
  ADD KEY `fk_compra_catalogo` (`id_catalogo_compra`),
  ADD KEY `fk_compra_cliente` (`id_cliente_compra`),
  ADD KEY `fk_relacion` (`id_venta`);

--
-- Indexes for table `detalle_compra`
--
ALTER TABLE `detalle_compra`
  ADD PRIMARY KEY (`id_detalle_compra`);

--
-- Indexes for table `domicilio`
--
ALTER TABLE `domicilio`
  ADD PRIMARY KEY (`id_domicilio`),
  ADD KEY `fk_domicilio_cliente` (`id_cliente_domicilio`);

--
-- Indexes for table `envio`
--
ALTER TABLE `envio`
  ADD PRIMARY KEY (`id_envio`),
  ADD KEY `fk_venta` (`id_venta`);

--
-- Indexes for table `pago`
--
ALTER TABLE `pago`
  ADD PRIMARY KEY (`id_pago`),
  ADD KEY `fk_pago_detalleCompra` (`id_detalle_compra_pago`),
  ADD KEY `fk_pago_compra` (`id_compra_pago`);

--
-- Indexes for table `registro_cuenta`
--
ALTER TABLE `registro_cuenta`
  ADD PRIMARY KEY (`id_cuenta`);

--
-- Indexes for table `tarjeta`
--
ALTER TABLE `tarjeta`
  ADD PRIMARY KEY (`id_tarjeta`),
  ADD KEY `fk_tarjeta_clienta` (`id_cliente_tarjeta`);

--
-- Indexes for table `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id_venta`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carrito`
--
ALTER TABLE `carrito`
  MODIFY `id_bolsa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `compra`
--
ALTER TABLE `compra`
  MODIFY `id_compra` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detalle_compra`
--
ALTER TABLE `detalle_compra`
  MODIFY `id_detalle_compra` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `domicilio`
--
ALTER TABLE `domicilio`
  MODIFY `id_domicilio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `envio`
--
ALTER TABLE `envio`
  MODIFY `id_envio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pago`
--
ALTER TABLE `pago`
  MODIFY `id_pago` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registro_cuenta`
--
ALTER TABLE `registro_cuenta`
  MODIFY `id_cuenta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5680;

--
-- AUTO_INCREMENT for table `tarjeta`
--
ALTER TABLE `tarjeta`
  MODIFY `id_tarjeta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `venta`
--
ALTER TABLE `venta`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `fk_carrito_catalogo` FOREIGN KEY (`id_catalogo_carrito`) REFERENCES `catalogo` (`id_catalogo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `fk_cliente_registroCuenta` FOREIGN KEY (`id_cliente_cuenta`) REFERENCES `registro_cuenta` (`id_cuenta`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `fk_compra_catalogo` FOREIGN KEY (`id_catalogo_compra`) REFERENCES `catalogo` (`id_catalogo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_compra_cliente` FOREIGN KEY (`id_cliente_compra`) REFERENCES `cliente` (`id_cliente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_relacion` FOREIGN KEY (`id_venta`) REFERENCES `venta` (`id_venta`);

--
-- Constraints for table `domicilio`
--
ALTER TABLE `domicilio`
  ADD CONSTRAINT `fk_domicilio_cliente` FOREIGN KEY (`id_cliente_domicilio`) REFERENCES `cliente` (`id_cliente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `envio`
--
ALTER TABLE `envio`
  ADD CONSTRAINT `fk_venta` FOREIGN KEY (`id_venta`) REFERENCES `venta` (`id_venta`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pago`
--
ALTER TABLE `pago`
  ADD CONSTRAINT `fk_pago_compra` FOREIGN KEY (`id_compra_pago`) REFERENCES `compra` (`id_compra`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_pago_detalleCompra` FOREIGN KEY (`id_detalle_compra_pago`) REFERENCES `detalle_compra` (`id_detalle_compra`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tarjeta`
--
ALTER TABLE `tarjeta`
  ADD CONSTRAINT `fk_tarjeta_clienta` FOREIGN KEY (`id_cliente_tarjeta`) REFERENCES `cliente` (`id_cliente`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
