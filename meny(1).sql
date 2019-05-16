-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 16 maj 2019 kl 08:44
-- Serverversion: 10.1.19-MariaDB
-- PHP-version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `thai`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `meny`
--

CREATE TABLE `meny` (
  `id` int(11) NOT NULL,
  `bild` varchar(32) NOT NULL,
  `pris` int(11) NOT NULL,
  `styrka` int(11) NOT NULL,
  `gluten` int(11) NOT NULL,
  `nötter` int(11) NOT NULL,
  `mjölk` int(11) NOT NULL,
  `namn` varchar(32) NOT NULL,
  `info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `meny`
--

INSERT INTO `meny` (`id`, `bild`, `pris`, `styrka`, `gluten`, `nötter`, `mjölk`, `namn`, `info`) VALUES
(1, 'bilder/pad1.jpg', 100, 2, 1, 0, 0, 'pad nam', 'Jätte gott mycket bra'),
(2, 'bilder/pad2.jpg', 125, 2, 1, 1, 1, 'Pad nam prik', 'Bra för hälsan'),
(3, 'bilder/pad3.jpg', 75, 1, 0, 0, 0, 'prik pao', 'gott som godis'),
(4, 'bilder/pad4.jpg', 50, 3, 1, 1, 0, 'Pad hot', 'Jätte gott'),
(5, 'bilder/pad5.jpg', 75, 1, 1, 1, 1, 'Chicken teriyaki', 'gott'),
(6, 'bilder/pad6.jpg', 69, 4, 0, 0, 0, 'Chicken mix', 'Eld '),
(7, 'bilder/pad7.jpg', 50, 1, 1, 1, 1, 'Chicken masala', 'Dunder'),
(8, 'bilder/pad8.jpg', 500, 3, 1, 1, 1, 'HOT CHICKEN WINGUSU', 'Good meal');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `meny`
--
ALTER TABLE `meny`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `meny`
--
ALTER TABLE `meny`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
