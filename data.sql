-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2018 年 4 月 12 日 14:56
-- サーバのバージョン： 5.7.21-log
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oniyoshi`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `data`
--

CREATE TABLE `data` (
  `name` text NOT NULL,
  `mail` text NOT NULL,
  `message` text NOT NULL,
  `title` text NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `data`
--

INSERT INTO `data` (`name`, `mail`, `message`, `title`, `created`) VALUES
('A_san', '', 'hello', '', '2018-03-30 08:12:48'),
('A_san', '', 'bye', '', '2018-03-30 08:13:08'),
('B_san', '', 'Nice to meet you', '', '2018-03-30 08:13:08'),
('B_san', '', 'bye', '', '2018-03-30 08:13:08'),
('C_san', '', 'I am C', '', '2018-03-30 08:13:08'),
('大西啓晃', 'aaa@aaa', '動作確認', 'テスト', '2018-04-12 05:56:24');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
