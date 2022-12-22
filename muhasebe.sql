-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 22 Ara 2022, 13:31:57
-- Sunucu sürümü: 10.4.25-MariaDB
-- PHP Sürümü: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `muhasebe`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `muhasebe`
--

CREATE TABLE `muhasebe` (
  `id` int(11) NOT NULL,
  `link` text COLLATE utf8_bin NOT NULL,
  `yazar` text COLLATE utf8_bin NOT NULL,
  `konu` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tablo1`
--

CREATE TABLE `tablo1` (
  `id` int(11) NOT NULL,
  `link` text COLLATE utf8_bin NOT NULL,
  `yazar` text COLLATE utf8_bin NOT NULL,
  `konu` text COLLATE utf8_bin NOT NULL,
  `cari` int(11) NOT NULL,
  `kdv` int(11) NOT NULL,
  `otv` int(11) NOT NULL,
  `mtv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Tablo döküm verisi `tablo1`
--

INSERT INTO `tablo1` (`id`, `link`, `yazar`, `konu`, `cari`, `kdv`, `otv`, `mtv`) VALUES
(1, 'google.com', 'kubilay sevuk', 'konusu belli değil', 415, 18, 14, 55),
(2, 'teknomaksi.com', 'yok', 'polisiye', 145, 18, 15, 78),
(3, 'd-help.net', 'eyüp komut', 'eticaret', 25, 18, 26, 2),
(4, 'd-help.org', 'ahmet aydın', 'site', 15, 58, 62, 2),
(13, 'adem', 'kaya', 'hgj', 5, 7, 5, 1),
(15, 'adem', 'kaya', 'hgj', 5, 7, 5, 1),
(43, 'kubilay', 'sevük', 'yazılım', 45, 78, 12, 45),
(45, 'yasin', 'kara', 'software', 12, 75, 9, 35),
(66, 'Mustafa', 'Sarıbaş', 'Game developer', 57, 1, 58, 47),
(70, 'google', 'ggle', 'net', 15, 20, 18, 3),
(71, 'face', 'fcdse', 'iş', 56, 21, 4, 8),
(74, 'Alper', 'Temiz', 'c#', 15, 47, 21, 23),
(75, 'Furkan', 'Yavuz', 'PHP', 12, 45, 63, 25),
(76, 'Fatma', 'Önal', 'JAVA', 14, 5, 4, 18);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `muhasebe`
--
ALTER TABLE `muhasebe`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `tablo1`
--
ALTER TABLE `tablo1`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `muhasebe`
--
ALTER TABLE `muhasebe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `tablo1`
--
ALTER TABLE `tablo1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
