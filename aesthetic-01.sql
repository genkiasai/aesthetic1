-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:8889
-- 生成日時: 2021 年 7 月 02 日 12:46
-- サーバのバージョン： 5.7.26
-- PHP のバージョン: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `aesthetic-01`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `top_info`
--

CREATE TABLE `top_info` (
  `id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `day` int(11) NOT NULL,
  `info` text NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `top_info`
--

INSERT INTO `top_info` (`id`, `year`, `month`, `day`, `info`, `time_stamp`) VALUES
(3, 2021, 5, 12, 'Webサイトが完成しました！', '2021-06-30 22:10:42'),
(4, 2021, 6, 14, 'Webサイトが完成しました！', '2021-06-30 22:10:52'),
(5, 2021, 6, 17, 'Webサイトが完成しました！', '2021-06-30 22:11:02'),
(9, 2021, 9, 6, 'Webサイトが完成しました！', '2021-07-02 07:29:35'),
(10, 2021, 9, 10, 'Webサイトが完成しました！', '2021-07-02 07:53:02'),
(11, 2021, 9, 12, 'Webサイトが完成しました！', '2021-07-02 07:53:21'),
(12, 2021, 9, 14, 'Webサイトが完成しました！', '2021-07-02 07:53:30'),
(14, 2021, 9, 17, 'Webサイトが完成しました！', '2021-07-02 08:06:58');

-- --------------------------------------------------------

--
-- テーブルの構造 `top_page`
--

CREATE TABLE `top_page` (
  `id` int(11) NOT NULL,
  `catch_copy` varchar(128) NOT NULL,
  `message_1` text NOT NULL,
  `message_2` text NOT NULL,
  `message_3` text NOT NULL,
  `address` varchar(128) NOT NULL,
  `tel` varchar(128) NOT NULL,
  `time` varchar(128) NOT NULL,
  `holiday` varchar(128) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `top_page`
--

INSERT INTO `top_page` (`id`, `catch_copy`, `message_1`, `message_2`, `message_3`, `address`, `tel`, `time`, `holiday`, `time_stamp`) VALUES
(1, 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', '2021-06-30 08:15:37'),
(2, 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', '2021-06-30 20:48:44'),
(3, 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', '2021-06-30 20:52:35'),
(4, 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', '2021-06-30 20:53:02'),
(5, 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', '2021-06-30 20:53:59'),
(6, 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', '2021-06-30 20:54:33'),
(7, 'bc', 'bc', 'bc', 'bc', 'cb', 'bc', 'bc', 'bc', '2021-06-30 21:41:23'),
(8, 'bc', 'bc', 'bc', 'bc', 'cb', 'bc', 'bc', 'bc', '2021-06-30 22:09:05'),
(9, 'bc', 'bc', 'bc', 'bc', 'cb', 'bc', 'bc', 'bc', '2021-06-30 22:09:58'),
(10, 'bc', 'bc', 'bc', 'bc', 'cb', 'bc', 'bc', 'bc', '2021-06-30 22:10:42'),
(11, 'bc', 'bc', 'bc', 'bc', 'cb', 'bc', 'bc', 'bc', '2021-06-30 22:10:52'),
(12, 'bc', 'bc', 'bc', 'bc', 'cb', 'bc', 'bc', 'bc', '2021-06-30 22:11:02'),
(13, 'bc', 'bc', 'bc', 'bc', 'cb', 'bc', 'bc', 'bc', '2021-06-30 22:11:11'),
(14, 'bc', 'bc', 'bc', 'bc', 'cb', 'bc', 'bc', 'bc', '2021-06-30 22:19:00'),
(15, 'bc', 'bc', 'bc', 'bc', 'cb', 'bc', 'bc', 'bc', '2021-06-30 22:19:03'),
(16, 'bc', 'bc', 'bc', 'bc', 'cb', 'bc', 'bc', 'bc', '2021-06-30 22:19:04'),
(17, 'bc', 'bc', 'bc', 'bc', 'cb', 'bc', 'bc', 'bc', '2021-06-30 22:19:10'),
(18, 'bc', 'bc', 'bc', 'bc', 'cb', 'bc', 'bc', 'bc', '2021-07-01 03:26:55'),
(19, 'bc', 'bc', 'bc', 'bc', 'cb', 'bc', 'bc', 'bc', '2021-07-01 03:27:20'),
(20, 'bc', 'bc', 'bc', 'bc', 'cb', 'bc', 'bc', 'bc', '2021-07-01 03:38:35'),
(21, 'bc', 'bc', 'bc', 'bc', 'cb', 'bc', 'bc', 'bc', '2021-07-01 03:38:36'),
(22, 'bc', 'bc', 'bc', 'bc', 'cb', 'bc', 'bc', 'bc', '2021-07-01 03:42:04'),
(23, 'bc', 'bc', 'bc', 'bc', 'cb', 'bc', 'bc', 'bc', '2021-07-01 03:42:07'),
(24, 'bc', 'bc', 'bc', 'bc', 'cb', 'bc', 'bc', 'bc', '2021-07-01 03:42:09'),
(25, 'bc', 'bc', 'bc', 'bc', 'cb', 'bc', 'bc', 'bc', '2021-07-01 03:42:15'),
(26, 'bc', 'bc', 'bc', 'bc', 'cb', 'bc', 'bc', 'bc', '2021-07-01 03:45:34'),
(27, 'bc', 'bc', 'bc', 'bc', 'cb', 'bc', 'bc', 'bc', '2021-07-01 03:45:38'),
(28, 'bc', 'bc', 'bc', 'bc', 'cb', 'bc', 'bc', 'bc', '2021-07-01 03:45:41'),
(29, 'bc', 'bc', 'bc', 'bc', 'cb', 'bc', 'bc', 'bc', '2021-07-01 03:45:44'),
(30, 'bc', 'bc', 'bc', 'bc', 'cb', 'bc', 'bc', 'bc', '2021-07-01 03:46:22'),
(31, 'bc', 'bc', 'bc', 'bc', 'cb', 'bc', 'bc', 'bc', '2021-07-02 07:29:26'),
(32, 'bc', 'bc', 'bc', 'bc', 'cb', 'bc', 'bc', 'bc', '2021-07-02 07:29:35'),
(33, 'bc', 'bc', 'bc', 'bc', 'cb', 'bc', 'bc', 'bc', '2021-07-02 07:53:02'),
(34, 'bc', 'bc', 'bc', 'bc', 'cb', 'bc', 'bc', 'bc', '2021-07-02 07:53:21'),
(35, 'bc', 'bc', 'bc', 'bc', 'cb', 'bc', 'bc', 'bc', '2021-07-02 07:53:30'),
(36, 'bc', 'bc', 'bc', 'bc', 'cb', 'bc', 'bc', 'bc', '2021-07-02 07:54:04'),
(37, 'bc', 'bc', 'bc', 'bc', 'cb', 'bc', 'bc', 'bc', '2021-07-02 08:06:58'),
(38, 'キャッチコピー', 'メッセージメッセージメッセージメッセージメッセージメッセージメッセージメッセージメッセージメッセージメッセージ', 'メッセージメッセージメッセージメッセージメッセージメッセージメッセージメッセージメッセージメッセージメッセージメッセージメッセージメッセージメッセージメッセージメッセージメッセージメッセージメッセージメッセージメッセージ', 'メッセージメッセージメッセージメッセージメッセージメッセージメッセージメッセージメッセージメッセージメッセージメッセージメッセージメッセージ', '名鉄岐阜駅から西に徒歩5分程度（ご希望があればお迎えに上がります）', '000-0000-0000', '14:00 - 24:00', '年中無休', '2021-07-02 12:38:41');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `top_info`
--
ALTER TABLE `top_info`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `top_page`
--
ALTER TABLE `top_page`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `top_info`
--
ALTER TABLE `top_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- テーブルのAUTO_INCREMENT `top_page`
--
ALTER TABLE `top_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
