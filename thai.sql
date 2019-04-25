-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 25 apr 2019 kl 09:21
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
-- Tabellstruktur `boka`
--

CREATE TABLE `boka` (
  `id` int(8) NOT NULL,
  `name` varchar(32) DEFAULT NULL,
  `datum` varchar(32) DEFAULT NULL,
  `tid` varchar(32) DEFAULT NULL,
  `personer` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `boka`
--

INSERT INTO `boka` (`id`, `name`, `datum`, `tid`, `personer`) VALUES
(1, 'ashur', '2019-04-04', '23:23', '1'),
(2, 'thomas', '2019-04-10', '05:30', '325'),
(3, 'thomas', '2019-04-10', '05:30', '325'),
(13, 'musa', '2019-04-11', '13:30', '8');

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
  `namn` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `meny`
--

INSERT INTO `meny` (`id`, `bild`, `pris`, `styrka`, `gluten`, `nötter`, `mjölk`, `namn`) VALUES
(1, 'pad1.jpg', 100, 2, 1, 0, 0, 'pad nam'),
(2, 'pad2.jpg', 125, 2, 1, 1, 1, 'Pad nam prik'),
(3, 'pad3.jpg', 75, 1, 0, 0, 0, 'prik pao'),
(4, 'pad4.jpg', 50, 3, 1, 1, 0, 'Pad hot'),
(5, 'pad5.jpg', 75, 0, 1, 1, 1, 'Chicken teriyaki'),
(6, 'pad6.jpg', 69, 0, 0, 0, 0, 'Chicken mix'),
(7, 'pad7.jpg', 50, 1, 1, 1, 1, 'Chicken masala'),
(8, 'pad8.jpg', 500, 3, 1, 1, 1, 'HOT CHICKEN WINGUSU');

-- --------------------------------------------------------

--
-- Tabellstruktur `register`
--

CREATE TABLE `register` (
  `id` int(8) NOT NULL,
  `name` varchar(32) DEFAULT NULL,
  `mail` varchar(32) DEFAULT NULL,
  `address` varchar(32) DEFAULT NULL,
  `pass` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `register`
--

INSERT INTO `register` (`id`, `name`, `mail`, `address`, `pass`) VALUES
(1, 'asd', 'asd@asd', 'asd', 'asd'),
(2, 'ashur', 'ashur100@live.se', 'ashurgatan123', 'ashur123'),
(3, 'tjomp', 'thomas@fleen.com', 'mashivÃ¤gen 12', '123qwe!"#'),
(4, 'ashur', 'ashur@live.se', 'mashivÃ¤gen 12', 'ashur123'),
(5, 'ashur', 'asudhai@live.se', 'ashurqih', 'ashur123'),
(6, 'ashur', '2@live.se', 'as', 'ashur123'),
(7, 'ashur', 'ash@live.se', 'ashur', 'ashur123'),
(8, 'ashur', 'asd@asd1', 'ashur123@live.se', '123123'),
(9, 'ashur', 'asss@live.se', 'as', 'ashur123'),
(10, 'ashur', 'ahsidu@live.se', 'asjdoasdji', 'asdjasd'),
(11, 'ashur', 'ashduaisd@live.se', 'asdad', 'asd123'),
(12, 'ashur', 'ashuad@live.se', 'ashur', 'ashur123'),
(13, 'ken', 'kent@live.se', 'kentgatan42', 'ken123'),
(14, 'abed', 'abed@live.se', 'abedgatan', 'abed123');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `boka`
--
ALTER TABLE `boka`
  ADD PRIMARY KEY (`id`);

--
-- Index för tabell `meny`
--
ALTER TABLE `meny`
  ADD PRIMARY KEY (`id`);

--
-- Index för tabell `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mail` (`mail`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `boka`
--
ALTER TABLE `boka`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT för tabell `meny`
--
ALTER TABLE `meny`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT för tabell `register`
--
ALTER TABLE `register`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
