-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 20 Oca 2022, 07:26:57
-- Sunucu sürümü: 8.0.21
-- PHP Sürümü: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `codeignitertodo_db`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tasks`
--

DROP TABLE IF EXISTS `tasks`;
CREATE TABLE IF NOT EXISTS `tasks` (
  `task_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `task` text COLLATE utf8_turkish_ci NOT NULL,
  `is_done` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`task_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `tasks`
--

INSERT INTO `tasks` (`task_id`, `user_id`, `task`, `is_done`) VALUES
(1, 4, 'Login formunda güncelleme yapılacak', 1),
(2, 4, 'Index sayfasında navbar daha belirgin hale gelmeli', 0),
(3, 4, 'Kullanıcı ayarları düğmesi belirgin hale gelmeli', 0),
(4, 5, 'Password değeri encrypted olarak kaydedilmeli', 1),
(5, 5, 'Sepetteki ürünler diğer sekmede görüntülenemiyor', 1),
(6, 5, 'Kredi kartı ödemelerinde 3D secure özelliği eklenmeli', 0),
(7, 6, 'Call-to-action kısmı küçük ekranlarda düzgün görüntülenemiyor. Büyük ekrandaki gibi olmamalı', 1),
(8, 6, 'Kullanıcılar kaydolma düğmesini bulmakta zorlanıyor. Belirgin olmalı', 1),
(9, 6, 'Ayarlar sayfasında arkaplan ile form birbirinden zor ayrılıyor. Değişiklik yapılmalı', 0),
(10, 7, 'Yeni içerik eklerken veri tabanına birden çok ekleniyor. Bir adet eklenmeli', 0),
(11, 7, 'Kullanıcılar email adreslerini güncellerken doğrulama kodu yollanmıyor.', 0),
(12, 7, 'Kullanıcı giriş yaptıktan sonra çerez kaydı oluşturulmuyor.', 0),
(13, 8, 'Mobil cihazlarda görseller çok büyük görünüyor. Ekran boyutuyla orantılı olmalı', 1),
(14, 8, 'Kayıt ol düğmesi sayfanın dışına çıkıyor ve yapıyı bozuyor', 0),
(15, 8, 'Kullanıcılar bilgilerini güncelleyebilmeli. Update sayfası eklenmeli.', 0),
(16, 9, 'Eklenecek olan update sayfasına işlev eklenmeli.', 0),
(17, 9, 'Kullanıcının seçtiği koltuk bir süreliğine rezerve edilmeli, yanı koltuğu başka kullanıcı seçemesin', 0),
(18, 9, 'Bilet iadesi yapıldığında çift iade yapılıyor. Tek olmalı ACİL', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8_turkish_ci NOT NULL,
  `surname` text COLLATE utf8_turkish_ci NOT NULL,
  `email` text COLLATE utf8_turkish_ci NOT NULL,
  `password` text COLLATE utf8_turkish_ci NOT NULL,
  `manager_id` int NOT NULL,
  PRIMARY KEY (`user_id`),
  KEY `manager_id` (`manager_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`user_id`, `name`, `surname`, `email`, `password`, `manager_id`) VALUES
(1, 'Mustafa', 'Ünal', 'mustafa@mail.com', '123456', 0),
(2, 'Ahmet', 'Akın', 'ahmet@mail.com', 'ahmet123', 0),
(3, 'Beyza', 'Başaran', 'bbasaran@mail.com', '123Aa', 0),
(4, 'Ceyhun', 'Cömert', 'ccmrt@mail.com', 'cc1234', 1),
(5, 'Deniz', 'Doğru', 'dogrudeniz@mail.com', 'Aerty123', 1),
(6, 'Engin Ege', 'Erarslan', 'eee35@mail.com', 'egjui12', 2),
(7, 'Fatma', 'Fırtına', 'fatmafirtina@mail.com', 'qazwsx123', 2),
(8, 'Görkan', 'Geçgin', 'gorkan16@mail.com', 'bursa16bursa', 3),
(9, 'Hayriye', 'Horasan', 'hayriyeh@mail.com', 'jksdap123', 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
