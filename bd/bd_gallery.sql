-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Temps de generació: 09-12-2020 a les 15:01:56
-- Versió del servidor: 10.1.38-MariaDB
-- Versió de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de dades: `bd_gallery`
--

-- --------------------------------------------------------

--
-- Estructura de la taula `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `path` varchar(250) NOT NULL,
  `user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Bolcament de dades per a la taula `posts`
--

INSERT INTO `posts` (`id`, `title`, `path`, `user`) VALUES
(27, 'adio', 'public/1607479670f3.PNG', 11),
(30, 'Jaramillo', 'public/1607481043jaramillo.jpg', 12),
(31, 'Manelillo', 'public/1607481076portillo-mini.jpg', 13),
(32, 'Ray', 'public/160748110648918544458_d6a72973bf_h.jpg', 14),
(33, 'JD Programmer', 'public/1607481141avatars-000107577674-x7bdtr-t500x500.jpg', 15),
(34, 'Travieso', 'public/1607481161Daniel_el_travieso_Serie_de_TV-264022620-mmed.jpg', 17),
(35, 'Ganador', 'public/1607481183MVC.png', 18),
(36, 'Alejandro', 'public/1607481219fachero.png', 16),
(37, 'Gammer', 'public/1607481271gamer.jpg', 19);

-- --------------------------------------------------------

--
-- Estructura de la taula `profiles`
--

CREATE TABLE `profiles` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Bolcament de dades per a la taula `profiles`
--

INSERT INTO `profiles` (`id`, `name`) VALUES
(1, 'Sin Privilegio'),
(2, 'Moderador'),
(3, 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de la taula `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(200) NOT NULL,
  `passwd` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `profile` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Bolcament de dades per a la taula `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `passwd`, `status`, `profile`) VALUES
(11, 'Fats&Oriental', 'wrgawrg', 'admin@admin.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, 1),
(12, 'Juan', 'Jaramillo', 'hola@hola.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, 1),
(13, 'Manel', 'Portillo', 'manel@manel.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, 1),
(14, 'Xavier', 'Reixav', 'rei@xav.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, 1),
(15, 'Deivid', 'DJ', 'dj@famous.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, 1),
(16, 'Alex', 'Palomo', 'alejandro@alex.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, 1),
(17, 'Carlitos', 'Travieso', 'carlos@car.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, 1),
(18, 'Victor', 'klk', 'vic@tor.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, 1),
(19, 'Judit', 'Judith', 'jud@it.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, 1),
(21, 'Administrador', 'Master', 'master@master.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, 3),
(22, 'Prueba', 'prueba', 'prueba@prueba.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, 1);

--
-- Índexs per a les taules bolcades
--

--
-- Índexs per a la taula `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user` (`user`);

--
-- Índexs per a la taula `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Índexs per a la taula `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profile` (`profile`);

--
-- AUTO_INCREMENT per les taules bolcades
--

--
-- AUTO_INCREMENT per la taula `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT per la taula `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la taula `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
