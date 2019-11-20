-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 20 Kas 2019, 18:06:31
-- Sunucu sürümü: 10.4.8-MariaDB
-- PHP Sürümü: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `ders_programi`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `pzt`
--

CREATE TABLE `pzt` (
  `pzt_id` int(11) NOT NULL,
  `ders1` text COLLATE utf8_turkish_ci NOT NULL,
  `ders2` text COLLATE utf8_turkish_ci NOT NULL,
  `ders3` text COLLATE utf8_turkish_ci NOT NULL,
  `ders4` text COLLATE utf8_turkish_ci NOT NULL,
  `ders5` text COLLATE utf8_turkish_ci NOT NULL,
  `ders6` text COLLATE utf8_turkish_ci NOT NULL,
  `ders7` text COLLATE utf8_turkish_ci NOT NULL,
  `ders8` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `pzt`
--

INSERT INTO `pzt` (`pzt_id`, `ders1`, `ders2`, `ders3`, `ders4`, `ders5`, `ders6`, `ders7`, `ders8`) VALUES
(1, 'deneme1', 'deneme1', 'deneme1', 'deneme1', 'deneme1', 'deneme1', 'deneme1', 'deneme1'),
(2, 'deneme1', 'deneme1', 'deneme1', 'deneme1', 'deneme1', 'deneme1', 'deneme1', 'deneme1'),
(3, 'deneme1', 'deneme1', 'deneme1', 'deneme1', 'deneme1', 'deneme1', 'deneme1', 'deneme1'),
(4, 'deneme1', 'deneme1', 'deneme1', 'deneme1', 'deneme1', 'deneme1', 'deneme1', 'deneme1'),
(5, 'deneme1', 'deneme1', 'deneme1', 'deneme1', 'deneme1', 'deneme1', 'deneme1', 'deneme1');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `pzt`
--
ALTER TABLE `pzt`
  ADD PRIMARY KEY (`pzt_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `pzt`
--
ALTER TABLE `pzt`
  MODIFY `pzt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
