-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 10. Mai 2022 um 13:46
-- Server-Version: 10.4.24-MariaDB
-- PHP-Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Datenbank: `lanparty`
--
CREATE DATABASE IF NOT EXISTS `lanparty` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_german2_ci;
USE `lanparty`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `buchung`
--

DROP TABLE IF EXISTS `buchung`;
CREATE TABLE IF NOT EXISTS `buchung` (
  `BID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `KID` int(11) NOT NULL,
  `EID` int(11) NOT NULL,
  PRIMARY KEY (`BID`),
  UNIQUE KEY `BID` (`BID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_german2_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `food`
--

DROP TABLE IF EXISTS `food`;
CREATE TABLE IF NOT EXISTS `food` (
  `FoodID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Typ` varchar(10) COLLATE utf8mb4_german2_ci NOT NULL,
  `Beschreibung` varchar(50) COLLATE utf8mb4_german2_ci NOT NULL,
  PRIMARY KEY (`FoodID`),
  UNIQUE KEY `FoodID` (`FoodID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_german2_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `games`
--

DROP TABLE IF EXISTS `games`;
CREATE TABLE IF NOT EXISTS `games` (
  `GID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Beschreibung` varchar(50) COLLATE utf8mb4_german2_ci NOT NULL,
  `Name` varchar(25) COLLATE utf8mb4_german2_ci NOT NULL,
  `Lokalspielbar` tinyint(1) NOT NULL,
  PRIMARY KEY (`GID`),
  UNIQUE KEY `GID` (`GID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_german2_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `gast`
--

DROP TABLE IF EXISTS `gast`;
CREATE TABLE IF NOT EXISTS `gast` (
  `KID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `vorname` varchar(15) COLLATE utf8mb4_german2_ci NOT NULL,
  `nachname` varchar(25) COLLATE utf8mb4_german2_ci NOT NULL,
  `Email` varchar(25) COLLATE utf8mb4_german2_ci NOT NULL,
  `Geburtstag` date NOT NULL,
  `Telefonnummer` bigint(25) NOT NULL,
  PRIMARY KEY (`KID`),
  UNIQUE KEY `KID` (`KID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_german2_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `lieblingsgame`
--

DROP TABLE IF EXISTS `lieblingsgame`;
CREATE TABLE IF NOT EXISTS `lieblingsgame` (
  `LGID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `KID` int(11) NOT NULL,
  `GID` int(11) NOT NULL,
  PRIMARY KEY (`LGID`),
  UNIQUE KEY `LGID` (`LGID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_german2_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `mitbringen`
--

DROP TABLE IF EXISTS `mitbringen`;
CREATE TABLE IF NOT EXISTS `mitbringen` (
  `MID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `KID` int(11) NOT NULL,
  `FoodID` int(11) NOT NULL,
  PRIMARY KEY (`MID`),
  UNIQUE KEY `MID` (`MID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_german2_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `platzierung`
--

DROP TABLE IF EXISTS `platzierung`;
CREATE TABLE IF NOT EXISTS `platzierung` (
  `EID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Typ` varchar(10) COLLATE utf8mb4_german2_ci NOT NULL,
  `Beschreibung` text COLLATE utf8mb4_german2_ci NOT NULL,
  PRIMARY KEY (`EID`),
  UNIQUE KEY `EID` (`EID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_german2_ci;
COMMIT;