-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 23 mei 2019 om 10:55
-- Serverversie: 10.1.37-MariaDB
-- PHP-versie: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grocerybud`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `hoogvliet`
--

CREATE TABLE `hoogvliet` (
  `pr_id` int(11) NOT NULL,
  `pr_naam` varchar(255) NOT NULL,
  `pr_prijs` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `hoogvliet`
--

INSERT INTO `hoogvliet` (`pr_id`, `pr_naam`, `pr_prijs`) VALUES
(1, 'Tijgerbrood', 1.39),
(2, 'Broccoli', 0.69),
(3, 'Komkommer', 0.69),
(4, 'Amstel Radler 0.0%', 3.89),
(5, 'Ristorante Pizza Quattro Formaggi', 2.09),
(6, 'Coca Cola 4pack', 7.95),
(7, 'G\'woon Bronwater', 0.39),
(8, 'Douwe Egberts Aroma rood donker filterkoffie', 3.18),
(9, 'Alpro Amandeldrink ongezoet fresh', 1.79),
(10, 'Kesbeke Augurken', 1.3),
(26, 'Coca Cola 4pack', 7.95),
(27, 'G\'woon Bronwater', 0.39),
(28, 'Douwe Egberts Aroma rood donker filterkoffie', 3.18),
(29, 'Alpro Amandeldrink ongezoet fresh', 1.79),
(30, 'Kesbeke Augurken', 1.3),
(31, 'Tijgerbrood', 1.39),
(32, 'Broccoli', 0.69),
(33, 'Komkommer', 0.69),
(34, 'Amstel Radler 0.0%', 3.89),
(35, 'Ristorante Pizza Quattro Formaggi', 2.09),
(36, 'Coca Cola 4pack', 7.95),
(37, 'G\'woon Bronwater', 0.39),
(38, 'Douwe Egberts Aroma rood donker filterkoffie', 3.18),
(39, 'Alpro Amandeldrink ongezoet fresh', 1.79),
(40, 'Kesbeke Augurken', 1.3);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `jumbo`
--

CREATE TABLE `jumbo` (
  `pr_id` int(10) NOT NULL,
  `pr_naam` varchar(255) NOT NULL,
  `pr_prijs` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `jumbo`
--

INSERT INTO `jumbo` (`pr_id`, `pr_naam`, `pr_prijs`) VALUES
(1, 'Tijgerbrood', 1.39),
(2, 'Broccoli', 0.69),
(3, 'Komkommer', 0.69),
(4, 'Amstel Radler 0.0%', 3.5),
(5, 'Ristorante Pizza Quattro Formaggi', 2.2),
(6, 'Coca Cola 4pack', 7.95),
(7, 'Bronwater', 0.15),
(8, 'Douwe Egberts Aroma rood donker filterkoffie', 4),
(9, 'Alpro Amandeldrink ongezoet fresh', 2),
(10, 'Kesbeke Augurken', 1.95);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `lidl`
--

CREATE TABLE `lidl` (
  `pr_id` int(10) NOT NULL,
  `pr_naam` varchar(255) NOT NULL,
  `pr_prijs` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `lidl`
--

INSERT INTO `lidl` (`pr_id`, `pr_naam`, `pr_prijs`) VALUES
(1, 'Tijgerbrood', 1.39),
(2, 'Broccoli', 0.7),
(3, 'Komkommer', 0.5),
(4, 'Radler 0.0%', 2.45),
(5, 'Ristorante Pizza Quattro Formaggi', 2.09),
(6, 'Cola 6 pack 2L', 6.5),
(7, 'Bronwater', 0.25),
(8, 'Aroma rood donker filterkoffie', 3),
(9, 'Alpro Amandeldrink ongezoet fresh', 1.79),
(10, 'Kesbeke Augurken', 1.3);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `user_naam` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `budget` float NOT NULL,
  `products` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `user_naam`, `password`, `email`, `budget`, `products`) VALUES
(7, 'Tim Ohlsen', '$2y$10$DLHs7s4em1TLiUtkTXqBru3tCw3qbW65woymJq3bfKVaRzTx0GT/C', 'tim.ohlsen2@gmail.com', 50, '');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `hoogvliet`
--
ALTER TABLE `hoogvliet`
  ADD PRIMARY KEY (`pr_id`);

--
-- Indexen voor tabel `jumbo`
--
ALTER TABLE `jumbo`
  ADD PRIMARY KEY (`pr_id`);

--
-- Indexen voor tabel `lidl`
--
ALTER TABLE `lidl`
  ADD PRIMARY KEY (`pr_id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `hoogvliet`
--
ALTER TABLE `hoogvliet`
  MODIFY `pr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT voor een tabel `jumbo`
--
ALTER TABLE `jumbo`
  MODIFY `pr_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT voor een tabel `lidl`
--
ALTER TABLE `lidl`
  MODIFY `pr_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
