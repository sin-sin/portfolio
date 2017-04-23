-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 21, 2017 at 09:25 PM
-- Server version: 5.6.33-0ubuntu0.14.04.1-log
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_vezbanje`
--

-- --------------------------------------------------------

--
-- Table structure for table `sifre`
--

DROP TABLE IF EXISTS `sifre`;
CREATE TABLE `sifre` (
  `id` int(11) NOT NULL,
  `ime` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `sifra` varchar(50) CHARACTER SET latin1 NOT NULL,
  `username` varchar(70) CHARACTER SET latin1 NOT NULL,
  `email` varchar(70) CHARACTER SET latin1 NOT NULL,
  `podesavanja` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sifre`
--

INSERT INTO `sifre` (`id`, `ime`, `sifra`, `username`, `email`, `podesavanja`, `created_at`, `updated_at`) VALUES
(1, 'mail mp4065', '05770874', '', 'mp4065@gmail.com', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'mail mp381391', 'sin05770874', '', 'mp381391@gmail.com', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'mail predigrarep', 'predigra', '', 'predigrarep@gmail.com', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'domen nas predigra.rs', 'Sin05770874', 'mp4065', '', 'ns1.domaindirect.it.\r\n213.140.5.233\r\nns2.domaindirect.it.\r\n213.140.5.249\r\n', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'auth-code srdjanjovanovic.net', 'z2oxk&5P', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'ipage host', 'Sin05770874@', '', '', 'ns1.ipage.com\r\nftp.ipage.com\r\npredigrars\r\nPredigra/\r\nhttp://www.predigra.rs/\r\nSrdjan/\r\nhttp://www.srdjanjovanovic.net/\r\n', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'mail ipage sin@www', 'Sin05770874@', '', 'sin@www.predigra.rs', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'romina baza', 'rominahali', 'romina', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'mp3063 baza', 'sinbaza05770874', 'mp3063', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Cubase 7', 'sinovcubase05770874', 'mp3063@open.telekom.rs', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'mail predigrasabac', '05770874', 'predigrasabac', 'predigrasabac@gmail.com', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'mail sin@predigra.rs', 'Sin05770874@', 'sin@predigra.rs', 'sin@predigra.rs', 'predigrars.ipage.com 993 IMAP\r\npredigrars.ipage.com 465 SMTP\r\nSSL', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'ebay', 'Sinibejisemalo0577', 'mp4065', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'music123', 'Sin05770874', 'mp3063@open.telekom.rs', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'Native Instruments', '527420706', '', 'mp3063@yahoo.com', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'aliexpress', 'Sinkinez05770874', 'mp4065@gmail.com', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'WebExpress', 'Sin05770874', 'mp4065@gmail.com', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'FortRabbit', 'Sin05770874', '', 'mp4065@gmail.com', '', '2014-11-08 02:27:44', '2014-11-08 02:27:44'),
(24, '99 Design', 'sin05770874', 'mp4065@gmail.com', 'mp4065@gmail.com', '', '2014-11-15 11:09:21', '2014-11-15 11:09:21'),
(25, 'Bowery', 'sin05770874', '', 'mp4065@gmail.com', '', '2014-11-22 00:56:10', '2014-11-22 00:56:10'),
(26, 'GitHub', 'Sin05770874', '', 'mp4065@gmail.com', '', '2014-12-26 13:12:16', '2014-12-26 13:12:16'),
(27, 'DigitalOcean_Console', 'Sin@05770874', 'root', '', '', '2014-12-31 02:49:26', '2014-12-31 02:49:26'),
(28, 'DigitalOcean', 'Sin05770874', 'mp4065', 'mp4065@gmail.com', '', '2014-12-31 02:50:05', '2014-12-31 02:50:05'),
(29, 'DigitalOcean_MySQL', '05770874', 'mp3063', '', '', '2014-12-31 02:50:51', '2014-12-31 02:50:51'),
(30, 'Fejs', '0204978772018@fejs', 'mp3063', '', '', '2015-02-22 20:41:33', '2015-02-22 20:41:33'),
(31, 'Guitar Rig Presets', 'g5^WDTa99wTf', 'mp3063', '', '', '2015-03-02 15:10:15', '2015-03-02 15:10:15'),
(32, 'Mandrill', 'Sin05770874', 'mp4065@gmail.com', 'mp4065@gmail.com', 'Sin05770874 ili Sin@05770874', '2015-05-24 08:34:24', '2015-05-24 08:34:24'),
(33, 'Mail Chimp', 'Sin@05770874', 'mp4065', 'mp4065@gmail.com', '', '2015-05-24 19:14:51', '2015-05-24 19:14:51'),
(34, 'Packagist', 'Sin05770874', 'mp3063', 'mp4065@gmail.com', '', '2015-05-24 22:21:26', '2015-05-24 22:21:26'),
(35, 'Pyoneer', 'Sin@pionir0577', 'mp4065@gmail.com', 'mp4065@gmail.com', '', '2015-07-29 22:22:56', '2015-07-29 22:22:56'),
(36, 'domain.com', 'Sin@domain05770874', 'pasteoscom', 'mp4065@gmail.com', 'Podesavanja za domen pasteos.com', '2015-11-17 21:15:10', '2015-11-17 21:15:10'),
(37, 'Tihana Gmail nalog', 'tihana2222013', 'tihana2213', 'tihana2213@gmail.com', '', '2017-04-08 15:03:00', '2017-04-08 15:13:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sifre`
--
ALTER TABLE `sifre`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ime` (`ime`);
ALTER TABLE `sifre` ADD FULLTEXT KEY `ime_2` (`ime`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sifre`
--
ALTER TABLE `sifre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
