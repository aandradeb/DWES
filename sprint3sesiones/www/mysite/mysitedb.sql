-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2022 at 07:40 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mysitedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tcomentarios`
--

CREATE TABLE `tcomentarios` (
  `id` int(11) NOT NULL,
  `comentario` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `juego_id` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `tcomentarios`
--

INSERT INTO `tcomentarios` (`id`, `comentario`, `usuario_id`, `juego_id`, `fecha`) VALUES
(1, 'Es un juego muy bueno', 1, 1, '2022-07-03'),
(2, 'Esto es otro comentario diciendo algo del juego', 1, 3, '2022-09-05'),
(3, 'Yo me lo acabe hace un tiempo y esta bien, recomendado!', 3, 2, '2022-09-15'),
(4, 'Lo tengo desde hace mucho tiempo', 4, 5, '2022-09-20'),
(5, 'Esta muy caro para poder comprarmelo!', 1, 4, '2022-10-02'),
(6, 'Esta bien', 1, 3, '2022-10-27'),
(7, 'Esta bien', 1, 3, '2022-10-27'),
(8, 'Prefiero el lol', 2, 3, '2022-10-27');

-- --------------------------------------------------------

--
-- Table structure for table `tjuegos`
--

CREATE TABLE `tjuegos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `url_imagen` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `desarrolladora` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_lanzamiento` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `tjuegos`
--

INSERT INTO `tjuegos` (`id`, `nombre`, `url_imagen`, `desarrolladora`, `fecha_lanzamiento`) VALUES
(1, 'Bloodborne', 'https://i.3djuegos.com/juegos/11033/project_beast/fotos/ficha/project_beast-2739557.jpg', 'Fromsoftware', '2015-03-24'),
(2, 'DOOM', 'https://i.3djuegos.com/juegos/2975/doom_4/fotos/ficha/doom_4-3117145.jpg', 'id Software', '2016-05-13'),
(3, 'Counter-Strike: Global Ofensive', 'https://i.blogs.es/8f55ae/fb_image/1366_2000.png', 'Valve Corporation', '2012-08-21'),
(4, 'Escape from Tarkov', 'https://pbs.twimg.com/profile_images/1365050429869088781/87pRXjFy_400x400.jpg', 'Battlestate Games', '2017-07-27'),
(5, 'Pac-Man', 'https://www2.minijuegosgratis.com/v3/games/thumbnails/2399_1.jpg', 'Namco', '1980-05-22');

-- --------------------------------------------------------

--
-- Table structure for table `tusuarios`
--

CREATE TABLE `tusuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `contrasena` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `tusuarios`
--

INSERT INTO `tusuarios` (`id`, `nombre`, `apellidos`, `email`, `contrasena`) VALUES
(1, 'Angel', 'Andrade', 'angel@email.com', '1234'),
(2, 'Carlos', 'Aguiar', 'carlos@email.com', '222556'),
(3, 'Adrian', 'Borrageiros', 'adrian@email.com', 'jnd1234982'),
(4, 'Pablo', 'Ruiz', 'pablo@email.com', 'lkdiwepq123'),
(5, 'Enrique', 'Rivas', 'kike@email.com', 'qwertyuiop');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tcomentarios`
--
ALTER TABLE `tcomentarios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tjuegos`
--
ALTER TABLE `tjuegos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tusuarios`
--
ALTER TABLE `tusuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tcomentarios`
--
ALTER TABLE `tcomentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tjuegos`
--
ALTER TABLE `tjuegos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tusuarios`
--
ALTER TABLE `tusuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
