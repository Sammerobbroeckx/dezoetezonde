-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Gegenereerd op: 24 mrt 2016 om 16:41
-- Serverversie: 10.1.8-MariaDB
-- PHP-versie: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zoetezonde`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `broodjes`
--

CREATE TABLE `broodjes` (
  `IDbroodjes` int(255) NOT NULL,
  `omschrijving` varchar(255) NOT NULL,
  `prijs` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `kleinehap`
--

CREATE TABLE `kleinehap` (
  `IDkleineHap` int(255) NOT NULL,
  `omschrijving` int(255) NOT NULL,
  `prijs` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `makelij`
--

CREATE TABLE `makelij` (
  `IDmakelij` int(255) NOT NULL,
  `omschrijving` varchar(255) NOT NULL,
  `prijs` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `ontbijt`
--

CREATE TABLE `ontbijt` (
  `IDontbijt` int(255) NOT NULL,
  `omschrijving` varchar(255) NOT NULL,
  `prijs` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `saladesensoepen`
--

CREATE TABLE `saladesensoepen` (
  `IDsaladesensoepen` int(255) NOT NULL,
  `omschrijving` varchar(255) NOT NULL,
  `prijs` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `soepen`
--

CREATE TABLE `soepen` (
  `IDsoepen` int(255) NOT NULL,
  `omschrijving` varchar(255) NOT NULL,
  `prijs` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user`
--

CREATE TABLE `user` (
  `IDuser` int(10) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `paswoord` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `broodjes`
--
ALTER TABLE `broodjes`
  ADD PRIMARY KEY (`IDbroodjes`);

--
-- Indexen voor tabel `kleinehap`
--
ALTER TABLE `kleinehap`
  ADD PRIMARY KEY (`IDkleineHap`);

--
-- Indexen voor tabel `makelij`
--
ALTER TABLE `makelij`
  ADD PRIMARY KEY (`IDmakelij`);

--
-- Indexen voor tabel `ontbijt`
--
ALTER TABLE `ontbijt`
  ADD PRIMARY KEY (`IDontbijt`);

--
-- Indexen voor tabel `saladesensoepen`
--
ALTER TABLE `saladesensoepen`
  ADD PRIMARY KEY (`IDsaladesensoepen`);

--
-- Indexen voor tabel `soepen`
--
ALTER TABLE `soepen`
  ADD PRIMARY KEY (`IDsoepen`);

--
-- Indexen voor tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`IDuser`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `broodjes`
--
ALTER TABLE `broodjes`
  MODIFY `IDbroodjes` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `kleinehap`
--
ALTER TABLE `kleinehap`
  MODIFY `IDkleineHap` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `makelij`
--
ALTER TABLE `makelij`
  MODIFY `IDmakelij` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `ontbijt`
--
ALTER TABLE `ontbijt`
  MODIFY `IDontbijt` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `saladesensoepen`
--
ALTER TABLE `saladesensoepen`
  MODIFY `IDsaladesensoepen` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `soepen`
--
ALTER TABLE `soepen`
  MODIFY `IDsoepen` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `user`
--
ALTER TABLE `user`
  MODIFY `IDuser` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
