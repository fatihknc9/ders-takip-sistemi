-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 24 Kas 2019, 10:18:32
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
-- Tablo için tablo yapısı `gunler`
--

CREATE TABLE `gunler` (
  `veri_id` int(11) NOT NULL,
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
-- Tablo döküm verisi `gunler`
--

INSERT INTO `gunler` (`veri_id`, `ders1`, `ders2`, `ders3`, `ders4`, `ders5`, `ders6`, `ders7`, `ders8`) VALUES
(1, 'deneme2', 'deneme2', 'deneme2', 'deneme2', 'deneme2', 'deneme2', 'deneme2', 'deneme2'),
(2, 'deneme2', 'deneme2', 'deneme2', 'deneme2', 'deneme2', 'deneme2', 'deneme2', 'deneme2'),
(3, 'deneme2', 'deneme2', 'deneme2', 'deneme2', 'deneme2', 'deneme2', 'deneme2', 'deneme2'),
(4, 'deneme2', 'deneme2', 'deneme2', 'deneme2', 'deneme2', 'deneme2', 'deneme2', 'deneme2'),
(5, 'deneme2', 'deneme2', 'deneme2', 'deneme2', 'deneme2', 'deneme2', 'deneme2', 'deneme2');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kayitveri`
--

CREATE TABLE `kayitveri` (
  `kullanici_id` int(11) NOT NULL,
  `kullanici_name` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_sifre` varchar(20) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `gunler`
--
ALTER TABLE `gunler`
  ADD PRIMARY KEY (`veri_id`);

--
-- Tablo için indeksler `kayitveri`
--
ALTER TABLE `kayitveri`
  ADD PRIMARY KEY (`kullanici_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `gunler`
--
ALTER TABLE `gunler`
  MODIFY `veri_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `kayitveri`
--
ALTER TABLE `kayitveri`
  MODIFY `kullanici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
