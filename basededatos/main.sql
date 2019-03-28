-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Mar 27, 2019 at 11:57 PM
-- Server version: 5.7.11
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `main`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(10) NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `img`) VALUES
(8, './imgs/banners/8/img.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `handbags`
--

CREATE TABLE `handbags` (
  `id` int(10) NOT NULL,
  `product_name` varchar(100) DEFAULT NULL,
  `price` varchar(10) DEFAULT NULL,
  `descripcion` varchar(400) DEFAULT NULL,
  `dimensions` text,
  `materials` text,
  `details` text,
  `image_1` varchar(100) DEFAULT NULL,
  `image_2` varchar(100) DEFAULT NULL,
  `image_3` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `handbags`
--

INSERT INTO `handbags` (`id`, `product_name`, `price`, `descripcion`, `dimensions`, `materials`, `details`, `image_1`, `image_2`, `image_3`) VALUES
(8, 'margaux medium satchel', '298.00', '\"our margaux medium satchel is defined by its curved, feminine silhouette, molded handles and functional interior. crafted from refined grain leather, it features two slip pockets and a domed zipper compartment\"', '7.5\"h x 10.75\"w x 4.75\"d', 'refined grain leather', 'satchel with zipper closure, two interior slide pockets, interior zipper, pocket dual exterior pockets', './imgs/handbags/8/image_1.jpeg', './imgs/handbags/8/image_2.jpeg', './imgs/handbags/8/image_3.jpeg'),
(9, 'margaux spade stud medium satchel', '358.00', '\"our margaux medium satchel is defined by its curved, feminine silhouette, molded handles and functional interior. crafted from refined grain leather and sprinkled with spade studs, it features two slip pockets and a domed zipper compartment\"', '7\"h x 10\"w x 4\"d', 'refined grain leather', 'interior zipper pocket, interior slide pocket, optional (and adjustable) shoulder strap', './imgs/handbags/9/image_1.jpeg', './imgs/handbags/9/image_2.jpeg', './imgs/handbags/9/image_3.jpeg'),
(10, 'nicola twistlock shoulder bag', '398.00', '\"in the wise words of plato, \"things are not always as they seem.\" such is the case with our nicola twistlock medium shoulder bag. crafted from smooth leather and gently structured for everyday use\"', '6\"h x 9\"w x 2.1\"d', 'smooth italian leather', 'spade heart twistlock closure, interior zipper pocket', './imgs/handbags/10/image_1.jpeg', './imgs/handbags/10/image_2.jpeg', './imgs/handbags/10/image_3.jpeg'),
(11, 'sam denim medium satchel', '198.00', '\"our story began in 1993 with a boxy, black nylon handbag called sam. we wanted something utilitarian and timeless--a bag that could go with everything from jeans to a cocktail dress.\"', '7.8\"h x 9\"w x 5\"d', 'denim', 'satchel with open top and tie closure, interior zipper pocket', './imgs/handbags/11/image_1.jpeg', './imgs/handbags/11/image_2.jpeg', './imgs/handbags/11/image_3.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptores`
--

CREATE TABLE `subscriptores` (
  `id` int(11) NOT NULL,
  `email` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscriptores`
--

INSERT INTO `subscriptores` (`id`, `email`) VALUES
(1, 'isamel@holis.com'),
(2, ''),
(3, 'ISMAEL@ENTRAENCATARSIS.COM'),
(4, 'katia@holis.com');

-- --------------------------------------------------------

--
-- Table structure for table `travel`
--

CREATE TABLE `travel` (
  `id` int(10) NOT NULL,
  `product_name` varchar(100) DEFAULT NULL,
  `price` varchar(10) DEFAULT NULL,
  `descripcion` varchar(400) DEFAULT NULL,
  `dimensions` text,
  `materials` text,
  `details` text,
  `image_1` varchar(100) DEFAULT NULL,
  `image_2` varchar(100) DEFAULT NULL,
  `image_3` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apellido` varchar(40) NOT NULL,
  `correo` varchar(40) NOT NULL,
  `contrasena` varchar(40) NOT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `codigo_postal` int(10) DEFAULT NULL,
  `ciudad` varchar(40) DEFAULT NULL,
  `ocupacion` varchar(40) DEFAULT NULL,
  `hobbies` varchar(40) DEFAULT NULL,
  `imagen_1` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `correo`, `contrasena`, `direccion`, `codigo_postal`, `ciudad`, `ocupacion`, `hobbies`, `imagen_1`) VALUES
(1, 'Katia editada', 'Murillo', 'katiaelenam13@gmail.com', '1fe45702c1cd23247ad49dd556136421', '', 21290, 'Mexicali', 'Estudiante', 'Comer', '');

-- --------------------------------------------------------

--
-- Table structure for table `usuariosadmin`
--

CREATE TABLE `usuariosadmin` (
  `id` int(40) NOT NULL,
  `correo` varchar(40) NOT NULL,
  `contrasena` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuariosadmin`
--

INSERT INTO `usuariosadmin` (`id`, `correo`, `contrasena`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `wallets`
--

CREATE TABLE `wallets` (
  `id` int(10) NOT NULL,
  `product_name` varchar(100) DEFAULT NULL,
  `price` varchar(10) DEFAULT NULL,
  `descripcion` varchar(400) DEFAULT NULL,
  `dimensions` text,
  `materials` text,
  `details` text,
  `image_1` varchar(100) DEFAULT NULL,
  `image_2` varchar(100) DEFAULT NULL,
  `image_3` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `handbags`
--
ALTER TABLE `handbags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriptores`
--
ALTER TABLE `subscriptores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `travel`
--
ALTER TABLE `travel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuariosadmin`
--
ALTER TABLE `usuariosadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wallets`
--
ALTER TABLE `wallets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `handbags`
--
ALTER TABLE `handbags`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `subscriptores`
--
ALTER TABLE `subscriptores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `travel`
--
ALTER TABLE `travel`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usuariosadmin`
--
ALTER TABLE `usuariosadmin`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wallets`
--
ALTER TABLE `wallets`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
