-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2023. Máj 13. 18:11
-- Kiszolgáló verziója: 10.4.24-MariaDB
-- PHP verzió: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `todo`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `adatok`
--

CREATE TABLE `adatok` (
  `sorszam` int(255) NOT NULL,
  `idopont` datetime NOT NULL,
  `leiras` varchar(255) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `adatok`
--

INSERT INTO `adatok` (`sorszam`, `idopont`, `leiras`) VALUES
(1, '2023-05-14 15:08:58', 'ebéd'),
(8, '2023-05-14 15:08:58', 'uzsonna'),
(9, '2023-05-14 18:08:58', 'vacsora'),
(11, '2023-05-14 15:08:58', 'uzsonna'),
(12, '2023-05-14 15:08:58', 'uzsonna'),
(13, '2023-05-14 09:08:58', 'reggeli'),
(14, '2023-05-14 12:08:58', 'ebéd'),
(16, '2023-05-14 19:08:58', 'vacsora'),
(18, '2023-05-14 15:08:58', 'uzsonna'),
(21, '2023-05-14 19:08:58', 'vacsora'),
(23, '2023-05-14 12:08:58', 'ebéd');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `adatok`
--
ALTER TABLE `adatok`
  ADD PRIMARY KEY (`sorszam`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `adatok`
--
ALTER TABLE `adatok`
  MODIFY `sorszam` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
