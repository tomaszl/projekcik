-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas wygenerowania: 12 Sie 2013, 08:51
-- Wersja serwera: 5.6.11
-- Wersja PHP: 5.5.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `reinfo`
--
CREATE DATABASE IF NOT EXISTS `reinfo` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `reinfo`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tytul` (`title`),
  KEY `tytul_2` (`title`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `blog`
--

INSERT INTO `blog` (`id`, `title`, `content`) VALUES
(0, 'test', 'testowo'),
(1, 'f', 'd');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `glowna`
--

CREATE TABLE IF NOT EXISTS `glowna` (
  `idglowna` int(11) NOT NULL,
  `glownacol` varchar(128) NOT NULL,
  `glownacol1` varchar(45) NOT NULL,
  `glownacol2` text NOT NULL,
  PRIMARY KEY (`idglowna`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `glowna`
--

INSERT INTO `glowna` (`idglowna`, `glownacol`, `glownacol1`, `glownacol2`) VALUES
(0, 'Tworzyenie aplikacji internetowych to nasza pasja', 'Nasza firma wykona dla Państwa szereg usług z', '');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `onas`
--

CREATE TABLE IF NOT EXISTS `onas` (
  `id` int(11) NOT NULL,
  `onas` varchar(45) NOT NULL,
  `otresc` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `onas`
--

INSERT INTO `onas` (`id`, `onas`, `otresc`) VALUES
(0, 'Nasz Zespół', 'tu coś napiszę o firmie');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
