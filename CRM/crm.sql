-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 29, 2020 at 02:08 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(6) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `pass` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nombre`, `correo`, `pass`) VALUES
(2, 'Juan', 'jorge@baidon.com', '1234'),
(3, 'Juan Gonzalez', '1@juan.com', '1234'),
(4, 'Juan Gonzalez', '2@juan.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `cita`
--

CREATE TABLE `cita` (
  `id_cita` int(6) NOT NULL,
  `id_admin` int(6) NOT NULL,
  `id_contacto` int(6) NOT NULL,
  `type` varchar(30) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `quantyty` int(6) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `fecha_cita` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cita`
--

INSERT INTO `cita` (`id_cita`, `id_admin`, `id_contacto`, `type`, `descripcion`, `quantyty`, `status`, `fecha_cita`) VALUES
(1, 2, 2, 'venta', 'Una venta chida', 10000, 0, '2020-11-13'),
(2, 2, 2, 'venta', 'Una venta chida', 10000, 0, '2020-11-09');

-- --------------------------------------------------------

--
-- Table structure for table `contacto`
--

CREATE TABLE `contacto` (
  `id_contacto` int(6) NOT NULL,
  `tipo` varchar(20) DEFAULT NULL,
  `nombre` varchar(30) NOT NULL,
  `calle_uno` varchar(60) DEFAULT NULL,
  `calle_dos` varchar(60) DEFAULT NULL,
  `ciudad` varchar(60) DEFAULT NULL,
  `estado` varchar(60) NOT NULL,
  `CP` varchar(15) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `celular` varchar(15) DEFAULT NULL,
  `correo` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacto`
--

INSERT INTO `contacto` (`id_contacto`, `tipo`, `nombre`, `calle_uno`, `calle_dos`, `ciudad`, `estado`, `CP`, `telefono`, `celular`, `correo`) VALUES
(1, NULL, 'Jovan GarcÃ­a', NULL, NULL, NULL, 'QuerÃ©taro', NULL, NULL, '4424310332', 'jovan@jovangarcia.com'),
(2, NULL, 'Jovan GarcÃ­a', NULL, NULL, NULL, 'MichoacÃ¡n', NULL, NULL, '1234567998', 'lalo@lalo.com'),
(3, 'proveedor', 'Jorge Baidón', 'calle_uno', 'calle_dos', 'Querétaro', 'Querétaro', 'CP', '1123', '123', '1@baidon.com'),
(4, 'proveedor', 'Jorge Baidón', 'calle_uno', 'calle_dos', 'Querétaro', 'Querétaro', 'CP', '1123', '123', '2@baidon.com');

-- --------------------------------------------------------

--
-- Table structure for table `detalle`
--

CREATE TABLE `detalle` (
  `num_detalle` int(6) NOT NULL,
  `id_factura` int(6) NOT NULL,
  `id_producto` int(6) DEFAULT NULL,
  `cantidad` int(6) NOT NULL,
  `precio` decimal(6,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `factura`
--

CREATE TABLE `factura` (
  `id_factura` int(6) NOT NULL,
  `fecha` date DEFAULT NULL,
  `id_cliente` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(6) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `precio` decimal(6,2) NOT NULL,
  `stock` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `producto`
--

INSERT INTO `producto` (`id_producto`, `nombre`, `precio`, `stock`) VALUES
(1, 'Doble Orquídea Blanca', '589.00', 500),
(2, 'Doble Orquídea Blanca', '599.00', 400);

-- --------------------------------------------------------

--
-- Table structure for table `usuariostienda`
--

CREATE TABLE `usuariostienda` (
  `idUsuarioTienda` int(6) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `dinero` decimal(6,2) DEFAULT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuariostienda`
--

INSERT INTO `usuariostienda` (`idUsuarioTienda`, `nombre`, `apellido`, `email`, `dinero`, `pass`) VALUES
(1, 'Jovan', 'García', 'gbjovan@gmail.com', '900.00', 'pass');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- Indexes for table `cita`
--
ALTER TABLE `cita`
  ADD PRIMARY KEY (`id_cita`),
  ADD KEY `cita_ibfk_1` (`id_admin`),
  ADD KEY `cita_ibfk_2` (`id_contacto`);

--
-- Indexes for table `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id_contacto`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- Indexes for table `detalle`
--
ALTER TABLE `detalle`
  ADD PRIMARY KEY (`num_detalle`,`id_factura`),
  ADD KEY `id_factura` (`id_factura`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indexes for table `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`id_factura`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indexes for table `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indexes for table `usuariostienda`
--
ALTER TABLE `usuariostienda`
  ADD PRIMARY KEY (`idUsuarioTienda`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cita`
--
ALTER TABLE `cita`
  MODIFY `id_cita` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id_contacto` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `factura`
--
ALTER TABLE `factura`
  MODIFY `id_factura` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usuariostienda`
--
ALTER TABLE `usuariostienda`
  MODIFY `idUsuarioTienda` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cita`
--
ALTER TABLE `cita`
  ADD CONSTRAINT `cita_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`),
  ADD CONSTRAINT `cita_ibfk_2` FOREIGN KEY (`id_contacto`) REFERENCES `contacto` (`id_contacto`);

--
-- Constraints for table `detalle`
--
ALTER TABLE `detalle`
  ADD CONSTRAINT `detalle_ibfk_1` FOREIGN KEY (`id_factura`) REFERENCES `factura` (`id_factura`),
  ADD CONSTRAINT `detalle_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`);

--
-- Constraints for table `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `usuariostienda` (`idUsuarioTienda`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
