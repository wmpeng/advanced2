-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-07-13 10:53:46
-- 服务器版本： 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `advanced`
--

-- --------------------------------------------------------

--
-- 表的结构 `cont_contact`
--

CREATE TABLE `cont_contact` (
  `contId` int(11) NOT NULL,
  `contText` text COLLATE utf8_bin NOT NULL,
  `contTime` datetime NOT NULL,
  `contAuEmail` tinytext COLLATE utf8_bin,
  `contAuPhone` tinytext COLLATE utf8_bin,
  `contAuName` tinytext COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- 表的结构 `info_student`
--

CREATE TABLE `info_student` (
  `stuId` int(11) NOT NULL,
  `stuName` tinytext COLLATE utf8_bin NOT NULL,
  `stuGender` tinytext COLLATE utf8_bin,
  `stuGrade` tinytext COLLATE utf8_bin,
  `teamId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- 表的结构 `info_team`
--

CREATE TABLE `info_team` (
  `teamId` int(11) NOT NULL,
  `teamName` tinytext COLLATE utf8_bin NOT NULL,
  `memberNum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- 表的结构 `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) COLLATE utf8_bin NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- 表的结构 `msg_message`
--

CREATE TABLE `msg_message` (
  `msgId` int(11) NOT NULL,
  `msgTime` datetime NOT NULL,
  `msgText` tinytext COLLATE utf8_bin NOT NULL,
  `msgWriter` tinytext COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- 表的结构 `show_book`
--

CREATE TABLE `show_book` (
  `bookId` int(11) NOT NULL,
  `bookName` tinytext COLLATE utf8_bin NOT NULL,
  `bookAuthor` tinytext COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- 表的结构 `show_game`
--

CREATE TABLE `show_game` (
  `gameId` int(11) NOT NULL,
  `gameName` tinytext COLLATE utf8_bin NOT NULL,
  `gameType` tinytext COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- 表的结构 `show_likeb`
--

CREATE TABLE `show_likeb` (
  `stuId` int(11) NOT NULL,
  `bookId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- 表的结构 `show_likeg`
--

CREATE TABLE `show_likeg` (
  `stuId` int(11) NOT NULL,
  `gameId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- 表的结构 `show_likem`
--

CREATE TABLE `show_likem` (
  `stuId` int(11) NOT NULL,
  `movieId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- 表的结构 `show_movie`
--

CREATE TABLE `show_movie` (
  `movieId` int(11) NOT NULL,
  `movieName` tinytext COLLATE utf8_bin NOT NULL,
  `movieDirector` tinytext COLLATE utf8_bin,
  `movieType` tinytext COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- 表的结构 `show_student`
--

CREATE TABLE `show_student` (
  `stuId` int(11) NOT NULL,
  `picture` text COLLATE utf8_bin,
  `motto` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- 表的结构 `show_team`
--

CREATE TABLE `show_team` (
  `teamId` int(11) NOT NULL,
  `picture` text COLLATE utf8_bin,
  `slogan` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cont_contact`
--
ALTER TABLE `cont_contact`
  ADD PRIMARY KEY (`contId`);

--
-- Indexes for table `info_student`
--
ALTER TABLE `info_student`
  ADD PRIMARY KEY (`stuId`),
  ADD KEY `teamId` (`teamId`);

--
-- Indexes for table `info_team`
--
ALTER TABLE `info_team`
  ADD PRIMARY KEY (`teamId`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `msg_message`
--
ALTER TABLE `msg_message`
  ADD PRIMARY KEY (`msgId`);

--
-- Indexes for table `show_book`
--
ALTER TABLE `show_book`
  ADD PRIMARY KEY (`bookId`);

--
-- Indexes for table `show_game`
--
ALTER TABLE `show_game`
  ADD PRIMARY KEY (`gameId`);

--
-- Indexes for table `show_likeb`
--
ALTER TABLE `show_likeb`
  ADD PRIMARY KEY (`stuId`,`bookId`),
  ADD KEY `bookId` (`bookId`);

--
-- Indexes for table `show_likeg`
--
ALTER TABLE `show_likeg`
  ADD PRIMARY KEY (`stuId`,`gameId`),
  ADD KEY `gameId` (`gameId`);

--
-- Indexes for table `show_likem`
--
ALTER TABLE `show_likem`
  ADD PRIMARY KEY (`stuId`,`movieId`),
  ADD KEY `movieId` (`movieId`);

--
-- Indexes for table `show_movie`
--
ALTER TABLE `show_movie`
  ADD PRIMARY KEY (`movieId`);

--
-- Indexes for table `show_student`
--
ALTER TABLE `show_student`
  ADD PRIMARY KEY (`stuId`);

--
-- Indexes for table `show_team`
--
ALTER TABLE `show_team`
  ADD PRIMARY KEY (`teamId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `cont_contact`
--
ALTER TABLE `cont_contact`
  MODIFY `contId` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `info_student`
--
ALTER TABLE `info_student`
  MODIFY `stuId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- 使用表AUTO_INCREMENT `info_team`
--
ALTER TABLE `info_team`
  MODIFY `teamId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- 使用表AUTO_INCREMENT `msg_message`
--
ALTER TABLE `msg_message`
  MODIFY `msgId` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `show_book`
--
ALTER TABLE `show_book`
  MODIFY `bookId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- 使用表AUTO_INCREMENT `show_game`
--
ALTER TABLE `show_game`
  MODIFY `gameId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- 使用表AUTO_INCREMENT `show_movie`
--
ALTER TABLE `show_movie`
  MODIFY `movieId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- 限制导出的表
--

--
-- 限制表 `info_student`
--
ALTER TABLE `info_student`
  ADD CONSTRAINT `info_student_ibfk_1` FOREIGN KEY (`teamId`) REFERENCES `info_team` (`teamId`);

--
-- 限制表 `show_likeb`
--
ALTER TABLE `show_likeb`
  ADD CONSTRAINT `show_likeb_ibfk_1` FOREIGN KEY (`stuId`) REFERENCES `info_student` (`stuId`),
  ADD CONSTRAINT `show_likeb_ibfk_2` FOREIGN KEY (`bookId`) REFERENCES `show_book` (`bookId`);

--
-- 限制表 `show_likeg`
--
ALTER TABLE `show_likeg`
  ADD CONSTRAINT `show_likeg_ibfk_1` FOREIGN KEY (`stuId`) REFERENCES `info_student` (`stuId`),
  ADD CONSTRAINT `show_likeg_ibfk_2` FOREIGN KEY (`gameId`) REFERENCES `show_game` (`gameId`);

--
-- 限制表 `show_likem`
--
ALTER TABLE `show_likem`
  ADD CONSTRAINT `show_likem_ibfk_1` FOREIGN KEY (`stuId`) REFERENCES `info_student` (`stuId`),
  ADD CONSTRAINT `show_likem_ibfk_2` FOREIGN KEY (`movieId`) REFERENCES `show_movie` (`movieId`);

--
-- 限制表 `show_student`
--
ALTER TABLE `show_student`
  ADD CONSTRAINT `show_student_ibfk_1` FOREIGN KEY (`stuId`) REFERENCES `info_student` (`stuId`);

--
-- 限制表 `show_team`
--
ALTER TABLE `show_team`
  ADD CONSTRAINT `show_team_ibfk_1` FOREIGN KEY (`teamId`) REFERENCES `info_team` (`teamId`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
