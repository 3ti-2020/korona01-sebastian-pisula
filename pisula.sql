-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 19 Maj 2020, 10:53
-- Wersja serwera: 10.4.6-MariaDB
-- Wersja PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `pisula`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `druga`
--

CREATE TABLE `druga` (
  `pięć` int(11) NOT NULL,
  `sześć` int(11) NOT NULL,
  `siedem` int(11) NOT NULL,
  `osiem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `druga`
--

INSERT INTO `druga` (`pięć`, `sześć`, `siedem`, `osiem`) VALUES
(5, 6, 7, 8),
(5, 6, 7, 8),
(5, 6, 7, 8);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pierwsza`
--

CREATE TABLE `pierwsza` (
  `jeden` int(10) NOT NULL,
  `dwa` int(10) NOT NULL,
  `trzy` int(10) NOT NULL,
  `cztery` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `pierwsza`
--

INSERT INTO `pierwsza` (`jeden`, `dwa`, `trzy`, `cztery`) VALUES
(1, 2, 3, 4),
(1, 2, 3, 4),
(1, 2, 3, 4);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
