-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 16 mrt 2021 om 19:48
-- Serverversie: 10.4.14-MariaDB
-- PHP-versie: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `q&awebappluxor`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `askedquestions`
--

CREATE TABLE `askedquestions` (
  `id` int(11) NOT NULL,
  `name` char(50) NOT NULL,
  `question` char(255) NOT NULL,
  `show_key` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `askedquestions`
--

INSERT INTO `askedquestions` (`id`, `name`, `question`, `show_key`) VALUES
(3, 'Kasper', 'test 123', '!98D3MCB7g'),
(4, 'Frank', 'test2343', '!98D3MCB7g');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `plannedshows`
--

CREATE TABLE `plannedshows` (
  `id` int(11) NOT NULL,
  `show_name` char(255) NOT NULL,
  `show_key` char(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `plannedshows`
--

INSERT INTO `plannedshows` (`id`, `show_name`, `show_key`) VALUES
(1, 'Test Ode aan', '!98D3MCB7g');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `askedquestions`
--
ALTER TABLE `askedquestions`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `plannedshows`
--
ALTER TABLE `plannedshows`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `askedquestions`
--
ALTER TABLE `askedquestions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT voor een tabel `plannedshows`
--
ALTER TABLE `plannedshows`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
