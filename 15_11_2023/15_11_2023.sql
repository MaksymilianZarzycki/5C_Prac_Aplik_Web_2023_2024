-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 16 Lis 2023, 15:58
-- Wersja serwera: 10.4.25-MariaDB
-- Wersja PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `15_11_2023`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klasa`
--

CREATE TABLE `klasa` (
  `ID` int(11) NOT NULL,
  `Imie` varchar(30) NOT NULL,
  `Nazwisko` varchar(30) NOT NULL,
  `DataUrodzenia` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `klasa`
--

INSERT INTO `klasa` (`ID`, `Imie`, `Nazwisko`, `DataUrodzenia`) VALUES
(1, 'Lorem', 'ipsum', '1111-01-10'),
(2, 'dolor', 'sit', '2222-02-20'),
(3, 'amet', 'consectetur', '3333-03-30'),
(5, 'adipiscing', 'elit', '4444-04-04'),
(7, 'Maecenas', 'tempor', '5555-05-05');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zadegz1`
--

CREATE TABLE `zadegz1` (
  `ID` int(11) NOT NULL,
  `Year` int(11) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Review` varchar(100) NOT NULL,
  `Consent` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zadegz2`
--

CREATE TABLE `zadegz2` (
  `ID` int(11) NOT NULL,
  `Lastname` varchar(30) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Grade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `klasa`
--
ALTER TABLE `klasa`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `zadegz1`
--
ALTER TABLE `zadegz1`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `zadegz2`
--
ALTER TABLE `zadegz2`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `klasa`
--
ALTER TABLE `klasa`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT dla tabeli `zadegz1`
--
ALTER TABLE `zadegz1`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT dla tabeli `zadegz2`
--
ALTER TABLE `zadegz2`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
