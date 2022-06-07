-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 07. Jun 2022 um 15:51
-- Server-Version: 10.4.14-MariaDB
-- PHP-Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `lanparty`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `buchung`
--

CREATE TABLE `buchung` (
  `BID` bigint(20) UNSIGNED NOT NULL,
  `KID` int(11) NOT NULL,
  `EID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_german2_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `food`
--

CREATE TABLE `food` (
  `FoodID` bigint(20) UNSIGNED NOT NULL,
  `Typ` varchar(10) COLLATE utf8mb4_german2_ci NOT NULL,
  `Beschreibung` varchar(50) COLLATE utf8mb4_german2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_german2_ci;

--
-- Daten für Tabelle `food`
--

INSERT INTO `food` (`FoodID`, `Typ`, `Beschreibung`) VALUES
(1, '1', 'Food Sweet'),
(2, '2', 'Food Salty'),
(3, '3', 'Food healthy'),
(4, '4', 'donate'),
(5, '5', 'drinks');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `games`
--

CREATE TABLE `games` (
  `GID` bigint(20) UNSIGNED NOT NULL,
  `Beschreibung` varchar(50) COLLATE utf8mb4_german2_ci NOT NULL,
  `Name` varchar(50) COLLATE utf8mb4_german2_ci NOT NULL,
  `Lokalspielbar` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_german2_ci;

--
-- Daten für Tabelle `games`
--

INSERT INTO `games` (`GID`, `Beschreibung`, `Name`, `Lokalspielbar`) VALUES
(1, 'Blockspiel', 'Minecraft', 1),
(2, 'Shooter', 'Fortnite', 0),
(3, 'Strategie', 'Anno 1800', 1),
(4, 'RPG', 'The Witcher 3', 0),
(5, 'Shooter RPG', 'Cyberpunk 2077', 1),
(6, 'Shooter', 'GTA 5', 0),
(7, 'Shooter', 'GTA 4', 0),
(8, 'Shooter', 'Red Dead Redemption 2', 1),
(9, 'Shooter', 'God of War', 1),
(10, 'RPG', 'Fallout 4', 0),
(11, 'Racing', 'Forza Horizon 4', 1),
(12, 'Racing', 'Forza Horizon 5', 1),
(13, 'Shooter', 'Overwatch', 1),
(14, 'Shooter', 'Valorant', 0),
(15, 'Moba', 'League of Legends', 0),
(16, 'Shooter', 'Star Wars Battelfront 2', 1),
(17, 'Story', 'Lego Star Wars the Skywalker Saga', 0);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `gast`
--

CREATE TABLE `gast` (
  `KID` bigint(20) UNSIGNED NOT NULL,
  `vorname` varchar(15) COLLATE utf8mb4_german2_ci NOT NULL,
  `nachname` varchar(25) COLLATE utf8mb4_german2_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8mb4_german2_ci NOT NULL,
  `Geburtstag` int(50) NOT NULL,
  `Telefonnummer` bigint(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_german2_ci;

--
-- Daten für Tabelle `gast`
--

INSERT INTO `gast` (`KID`, `vorname`, `nachname`, `Email`, `Geburtstag`, `Telefonnummer`) VALUES
(0, 'Luis', 'Schumacher', 'Luis@3test.de', 20031210, 49123412341234),
(2, 'Nico', 'Schumacher', 'Nico@test.de', 20031210, 49123412341234),
(3, 'Nico', 'Schumacher', 'Nico@test.de', 20031210, 49123412341234),
(4, 'avner', 'Netalov', 'Avner.Nektalov@L-Bank.de', 20000928, 49123412341234),
(5, 'Luis', 'Schumacher', 'Luisschumacher4@web.de', 20040901, 49123412341234),
(6, 'Maxi', 'Loock', 'maxi.loock@L-bank.de', 20041209, 49123412341234),
(7, 'Maxi', 'Loock', 'test14430706@test.de', 20040901, 49123412341234);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `lieblingsgame`
--

CREATE TABLE `lieblingsgame` (
  `LGID` bigint(20) UNSIGNED NOT NULL,
  `KID` int(11) NOT NULL,
  `GID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_german2_ci;

--
-- Daten für Tabelle `lieblingsgame`
--

INSERT INTO `lieblingsgame` (`LGID`, `KID`, `GID`) VALUES
(1, 3, 0),
(2, 4, 0),
(3, 5, 0),
(4, 6, 0),
(5, 7, 11);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `mitbringen`
--

CREATE TABLE `mitbringen` (
  `MID` bigint(20) UNSIGNED NOT NULL,
  `KID` int(11) NOT NULL,
  `FoodID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_german2_ci;

--
-- Daten für Tabelle `mitbringen`
--

INSERT INTO `mitbringen` (`MID`, `KID`, `FoodID`) VALUES
(1, 2, 0),
(2, 3, 0),
(3, 4, 0),
(4, 5, 5),
(5, 6, 3),
(6, 7, 4);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `platzierung`
--

CREATE TABLE `platzierung` (
  `EID` bigint(20) UNSIGNED NOT NULL,
  `Typ` varchar(10) COLLATE utf8mb4_german2_ci NOT NULL,
  `Beschreibung` text COLLATE utf8mb4_german2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_german2_ci;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `buchung`
--
ALTER TABLE `buchung`
  ADD PRIMARY KEY (`BID`),
  ADD UNIQUE KEY `BID` (`BID`);

--
-- Indizes für die Tabelle `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`FoodID`),
  ADD UNIQUE KEY `FoodID` (`FoodID`);

--
-- Indizes für die Tabelle `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`GID`),
  ADD UNIQUE KEY `GID` (`GID`);

--
-- Indizes für die Tabelle `gast`
--
ALTER TABLE `gast`
  ADD PRIMARY KEY (`KID`),
  ADD UNIQUE KEY `KID` (`KID`);

--
-- Indizes für die Tabelle `lieblingsgame`
--
ALTER TABLE `lieblingsgame`
  ADD PRIMARY KEY (`LGID`),
  ADD UNIQUE KEY `LGID` (`LGID`);

--
-- Indizes für die Tabelle `mitbringen`
--
ALTER TABLE `mitbringen`
  ADD PRIMARY KEY (`MID`),
  ADD UNIQUE KEY `MID` (`MID`);

--
-- Indizes für die Tabelle `platzierung`
--
ALTER TABLE `platzierung`
  ADD PRIMARY KEY (`EID`),
  ADD UNIQUE KEY `EID` (`EID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `buchung`
--
ALTER TABLE `buchung`
  MODIFY `BID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `food`
--
ALTER TABLE `food`
  MODIFY `FoodID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT für Tabelle `games`
--
ALTER TABLE `games`
  MODIFY `GID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT für Tabelle `lieblingsgame`
--
ALTER TABLE `lieblingsgame`
  MODIFY `LGID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT für Tabelle `mitbringen`
--
ALTER TABLE `mitbringen`
  MODIFY `MID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT für Tabelle `platzierung`
--
ALTER TABLE `platzierung`
  MODIFY `EID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
