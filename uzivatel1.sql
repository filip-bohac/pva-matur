-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Počítač: localhost:3306
-- Vytvořeno: Úte 31. bře 2020, 17:14
-- Verze serveru: 10.1.41-MariaDB-0+deb9u1
-- Verze PHP: 7.3.10-1+0~20191008.45+debian9~1.gbp365209

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `6ep_bohac`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `uzivatel1`
--

CREATE TABLE `uzivatel1` (
  `id` int(11) NOT NULL,
  `jmeno` varchar(50) COLLATE utf8_czech_ci NOT NULL,
  `heslo` varchar(50) COLLATE utf8_czech_ci NOT NULL,
  `mail` varchar(50) COLLATE utf8_czech_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Vypisuji data pro tabulku `uzivatel1`
--

INSERT INTO `uzivatel1` (`id`, `jmeno`, `heslo`, `mail`) VALUES
(1, 'filip', '55555', 'seznam.cz'),
(3, 'Adriana', 'adrianaaa991@seznam.cz', '46200385'),
(4, 'AdrianaK.', '46200385', 'adrianaaa991@seznam.cz'),
(5, 'radim', 'heslo', 'seznam.cz'),
(6, 'adam', 'heslo', 'seznam.cz'),
(7, 'dada', 'heslo', 'seznam.cz'),
(8, 'ddaa', 'heslo', 'seznam.cz'),
(9, 'dru', 'heslo', 'seznam.cz'),
(10, 'dukla', 'heslo', 'seznam.cz'),
(12, 'rada', 'heslo', 'seznam.cz');

--
-- Klíče pro exportované tabulky
--

--
-- Klíče pro tabulku `uzivatel1`
--
ALTER TABLE `uzivatel1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `uzivatel1`
--
ALTER TABLE `uzivatel1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
