-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 24 mei 2017 om 04:08
-- Serverversie: 10.1.21-MariaDB
-- PHP-versie: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evoke`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `post` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `match` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `album_id` int(11) NOT NULL,
  `type` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(140) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `content`
--

INSERT INTO `content` (`id`, `post`, `user_id`, `match`, `album_id`, `type`, `comment`) VALUES
(2, 'test', 0, 'testmatch', 0, 'foto', 'test'),
(3, '3-0.png', 3, 'testmatch', 0, 'foto', ' now?\r\n'),
(4, '3-0.png', 3, 'testmatch', 0, 'foto', ' Abcd'),
(5, '3-0.png', 3, 'testmatch', 0, 'foto', ' Abcd'),
(6, '3-0.png', 3, 'testmatch', 0, 'foto', ' 123456'),
(7, '3-0.png', 3, 'testmatch', 0, 'foto', ' 123456'),
(8, '3-0.png', 3, 'testmatch', 0, 'foto', ' 888'),
(9, '3-0.png', 3, 'testmatch', 0, 'foto', ' 888'),
(10, '3-0.png', 3, 'testmatch', 0, 'foto', ' 888'),
(11, '3-0.png', 3, 'testmatch', 0, 'foto', ' 123456'),
(12, '3-0.png', 3, 'testmatch', 0, 'foto', ' '),
(13, '3-0.png', 3, 'testmatch', 0, 'foto', ' '),
(14, '3-0.png', 3, 'testmatch', 0, 'foto', ' 12345789'),
(15, '3-0.png', 3, 'testmatch', 0, 'foto', ' 12456'),
(16, '3-0.png', 3, 'testmatch', 0, 'foto', ' 123456789');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Username` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Mail` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(322) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Vak` int(11) NOT NULL,
  `postamount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `Username`, `Mail`, `Password`, `Vak`, `postamount`) VALUES
(2, 'test', 'test@test.be', '$2y$12$u/1dPFfrNVOr1JbeWMu42eRjBhZflaewKD6b5.Bdv3OazCek.f2De', 0, 2),
(3, 'j@j.be', 'j@ris.be', '$2y$12$trNY2uMDxpg03EhPPPl.X.d6IiQW5L6dk4HkmYcXeKY7VND5BVYuO', 0, 3);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
