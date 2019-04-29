-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Erstellungszeit: 29. Apr 2019 um 13:37
-- Server-Version: 10.1.35-MariaDB
-- PHP-Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `bar_webservice`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `bar`
--

CREATE TABLE `bar` (
  `bar_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `strasse` varchar(100) NOT NULL,
  `plz` int(100) NOT NULL,
  `ort` varchar(100) NOT NULL,
  `telefon` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `bar`
--

INSERT INTO `bar` (`bar_id`, `name`, `strasse`, `plz`, `ort`, `telefon`) VALUES
(1, 'Bar Linden', 'Bahnhofstr.  1', 30519, 'Hannover', 151838039),
(2, 'Hannover Bar', 'Beatheweg 3', 30552, 'Hannover', 1302020202),
(3, 'Bar Südstadt', 'Listerweg 1', 39223, 'Hannover', 202020202);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `bar`
--
ALTER TABLE `bar`
  ADD PRIMARY KEY (`bar_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
