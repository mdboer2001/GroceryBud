-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 21 mei 2019 om 11:39
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

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `jumbo`
--

CREATE TABLE `jumbo` (
  `pr_id` int(10) NOT NULL,
  `pr_naam` varchar(255) NOT NULL,
  `pr_prijs` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `lidl`
--

CREATE TABLE `lidl` (
  `pr_id` int(10) NOT NULL,
  `pr_naam` varchar(255) NOT NULL,
  `pr_prijs` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `total_product`
--

CREATE TABLE `total_product` (
  `product_id` int(10) NOT NULL,
  `jb_pr_id` int(10) NOT NULL,
  `ldl_pr_id` int(10) NOT NULL,
  `hg_pr_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `user_naam` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Indexen voor tabel `total_product`
--
ALTER TABLE `total_product`
  ADD PRIMARY KEY (`product_id`,`jb_pr_id`,`ldl_pr_id`,`hg_pr_id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `hoogvliet`
--
ALTER TABLE `hoogvliet`
  MODIFY `pr_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `jumbo`
--
ALTER TABLE `jumbo`
  MODIFY `pr_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `lidl`
--
ALTER TABLE `lidl`
  MODIFY `pr_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `total_product`
--
ALTER TABLE `total_product`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
