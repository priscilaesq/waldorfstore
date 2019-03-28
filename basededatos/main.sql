-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Mar 28, 2019 at 08:30 AM
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
(9, './imgs/banners/9/img.jpg'),
(10, './imgs/banners/10/img.jpg'),
(11, './imgs/banners/11/img.jpg');

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
(11, 'sam denim medium satchel', '198.00', '\"our story began in 1993 with a boxy, black nylon handbag called sam. we wanted something utilitarian and timeless--a bag that could go with everything from jeans to a cocktail dress.\"', '7.8\"h x 9\"w x 5\"d', 'denim', 'satchel with open top and tie closure, interior zipper pocket', './imgs/handbags/11/image_1.jpeg', './imgs/handbags/11/image_2.jpeg', './imgs/handbags/11/image_3.jpeg'),
(12, ' andi canteen bag', '298.00', '\"our andi canteen bag is a modern take on the classic, feminine hatbox shape. done in smooth italian leather with an enamel spade detail, it features a top handle and includes an adjustable crossbody strap that clips on and off. \"', '7\"h x 7.7\"w x 2.5\"d', 'italian smooth leather, solid faille lining', 'crossbody bag with zip-around closure', './imgs/handbags/12/image_1.jpeg', './imgs/handbags/12/image_2.jpeg', './imgs/handbags/12/image_3.jpeg'),
(16, 'rose small convertible crossbody', '258.00', '\"we love the mix of old and new in our rose small convertible crossbody bag. the classic boxy coated-straw body and adjustable chain strap radiate major vintage vibes.\"', '5\"h x 7.5\"w x 3\"d', 'coated straw with leather, trim solid faille lining', 'crossbody bag with zipper closure, 3 interior card slots', './imgs/handbags/16/image_1.jpeg', './imgs/handbags/16/image_2.jpeg', './imgs/handbags/16/image_3.jpeg'),
(17, 'polly large convertible crossbody', '258.00', '\"we made sure every inch would be functional when we designed our polly large convertible crossbody bag.  it has a roomy interior with a large slip pocket for organization. \"', '6\"h x 9\"w x 2\"d', 'pebbled leather, spade floral jacquard lining', 'crossbody bag with zip flap closure', './imgs/handbags/17/image_1.jpeg', './imgs/handbags/17/image_2.jpeg', './imgs/handbags/17/image_3.jpeg'),
(18, 'vivian medium bucket bag', '358.00', '\"we agree--our vivian medium bucket bag is really nice to look at--which is why we made sure it would stay that way. the crossgrain leather is luxe but also durable.\"', '10\"h x 10.6\"w x 6\"d', 'crossgrain leather, faux microsuede lining', 'elbow bag with drawstring closure, interior slide pocket', './imgs/handbags/18/image_1.jpeg', './imgs/handbags/18/image_2.jpeg', './imgs/handbags/18/image_3.jpeg');

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
(4, 'katia@holis.com'),
(5, 'katia_elena@hotmail.com'),
(6, 'katia_elena@hotmail.com'),
(7, 'katiaelenam13@gmail.com'),
(8, 'katia_elena@hotmail.com'),
(9, 'katia_elena@hotmail.com'),
(10, 'priscila.esquer@hotmail.com');

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

--
-- Dumping data for table `travel`
--

INSERT INTO `travel` (`id`, `product_name`, `price`, `descripcion`, `dimensions`, `materials`, `details`, `image_1`, `image_2`, `image_3`) VALUES
(1, 'convertible backpack', '178.00', '\"it s a backpack, it s a crossbody, it s a shoulder bag, oh my! this sporty nylon bag will take you wherever you want to go.\"', '10\"h x 9\"w x 3.5\"d', 'supple nylon with matching trim', 'backpack with zipper closure', './imgs/travel/1/image_1.jpeg', './imgs/travel/1/image_2.jpeg', './imgs/travel/1/image_3.jpeg'),
(2, ' jayne belt bag', '148.00', '\"our jayne belt bag is made to go with you anywhere (be it site-seeing on vacation or to the corner store). we designed it with a surprising amount of space to keep the important things close to your body. \"', '5\"h x 12\"w x 3\"d', 'quilted nylon', 'bag can be worn as crossbody or belt bag', './imgs/travel/2/image_1.jpeg', './imgs/travel/2/image_2.jpeg', './imgs/travel/2/image_3.jpeg'),
(3, 'morley large tote', '298.00', '\"sophisticated, feminine, and unexpected hues mix together on the morely large tote--one of our most joyful bags in the collection.\"', '12\"h x 14\"w x 7\"d', 'italian polyester cotton blend fabric', 'tote bag with open top', './imgs/travel/3/image_1.jpeg', './imgs/travel/3/image_2.jpeg', './imgs/travel/3/image_3.jpeg');

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
  `imagen_1` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `correo`, `contrasena`, `direccion`, `codigo_postal`, `ciudad`, `ocupacion`, `hobbies`, `imagen_1`) VALUES
(1, 'Katia Elena', 'Murillo', 'katiaelenam13@gmail.com', '1fe45702c1cd23247ad49dd556136421', 'Lopez Quezada 868', 21290, 'Mexicali', 'Estudiante', 'Comer', './imgs/usuarios/1/imagen_1.jpeg'),
(2, 'Priscila', 'Esquer', 'priscy@hotmail.com', '202cb962ac59075b964b07152d234b70', NULL, NULL, NULL, NULL, NULL, NULL);

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
-- Dumping data for table `wallets`
--

INSERT INTO `wallets` (`id`, `product_name`, `price`, `descripcion`, `dimensions`, `materials`, `details`, `image_1`, `image_2`, `image_3`) VALUES
(1, 'amelia slim continental wallet', '198.00', '\"one of the many details that makes our amelia slim continental wallet unique is the way the quilting radiates from the bold, enamel spade. \"', '3\"h x 7\"w', 'smooth lambskin leather', 'slim continental wallet with zip-around closure', './imgs/wallets/1/image_1.jpeg', './imgs/wallets/1/image_2.jpeg', './imgs/wallets/1/image_3.jpeg'),
(2, 'polly large pouch wristlet', '98.00', '\"we crafted our polly large pouch wristlet from soft pebbled leather that gets better with age.\"', '7\"h x 11\"w x 2\"d', 'pebbled leather', 'large wristlet with top zip closure', './imgs/wallets/2/image_1.jpeg', './imgs/wallets/2/image_2.jpeg', './imgs/wallets/2/image_3.jpeg'),
(3, 'polly slim continental wallet', '178.00', '\"from the soft pebbled leather to the pretty tonal enamel spade, we think this polly slim continental wallet is just dreamy.\"', '3\"h x 7\"w x 0\"d', 'pebbled leather', 'slim continental wallet with zip-around closure', './imgs/wallets/3/image_1.jpeg', './imgs/wallets/3/image_2.jpeg', './imgs/wallets/3/image_3.jpeg');

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `handbags`
--
ALTER TABLE `handbags`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `subscriptores`
--
ALTER TABLE `subscriptores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `travel`
--
ALTER TABLE `travel`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usuariosadmin`
--
ALTER TABLE `usuariosadmin`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wallets`
--
ALTER TABLE `wallets`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
