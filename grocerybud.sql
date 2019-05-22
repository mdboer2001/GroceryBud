-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 22 mei 2019 om 09:32
-- Serverversie: 10.1.34-MariaDB
-- PHP-versie: 5.6.37

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
(5, 'demo', '$2y$10$o792YnZO2sRAo4cSatzPBuwHDPfOpo9t4.BxI3spNXxx1oYA1tzN2', 'mikedeboer2001@hotmail.com', 0, ''),
(6, 'demo', '$2y$10$USbK/Uvp/KCkr/Uf27RFUekcXdbvG3N24p8ijqs2xwp3gfpptSUwS', 'demo@demo.nl', 0, '');

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
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
