-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-07-08 13:23:51
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
-- 表的结构 `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1498465318),
('m130524_201442_init', 1498465322);

-- --------------------------------------------------------

--
-- 表的结构 `rela_belong`
--

CREATE TABLE `rela_belong` (
  `team_id` varchar(16) NOT NULL,
  `stu_id` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `rela_massaged`
--

CREATE TABLE `rela_massaged` (
  `stu_id` varchar(8) NOT NULL,
  `mes_num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `rela_play`
--

CREATE TABLE `rela_play` (
  `stu_id` varchar(8) NOT NULL,
  `game_name` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `rela_read`
--

CREATE TABLE `rela_read` (
  `stu_id` varchar(8) NOT NULL,
  `book_name` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `rela_study`
--

CREATE TABLE `rela_study` (
  `stu_id` varchar(8) NOT NULL,
  `course_id` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `rela_watch`
--

CREATE TABLE `rela_watch` (
  `stu_id` varchar(8) NOT NULL,
  `mov_name` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `sql_book`
--

CREATE TABLE `sql_book` (
  `book_name` varchar(16) NOT NULL,
  `book_writer` varchar(16) NOT NULL,
  `book_type` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `sql_course`
--

CREATE TABLE `sql_course` (
  `course_id` varchar(8) NOT NULL,
  `course_name` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `sql_game`
--

CREATE TABLE `sql_game` (
  `game_name` varchar(16) NOT NULL,
  `game_type` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `sql_message`
--

CREATE TABLE `sql_message` (
  `mes_text` text NOT NULL,
  `mes_date` date NOT NULL,
  `mes_num` int(11) NOT NULL,
  `stu_id` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `sql_movie`
--

CREATE TABLE `sql_movie` (
  `mov_name` varchar(16) NOT NULL,
  `mov_director` varchar(16) NOT NULL,
  `mov_imba` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `sql_team`
--

CREATE TABLE `sql_team` (
  `team_id` varchar(16) NOT NULL,
  `member_num` int(11) NOT NULL,
  `team_name` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `sql_team`
--

INSERT INTO `sql_team` (`team_id`, `member_num`, `team_name`) VALUES
('123', 123, '123');

-- --------------------------------------------------------

--
-- 表的结构 `sql_teamate`
--

CREATE TABLE `sql_teamate` (
  `stu_id` varchar(8) NOT NULL,
  `stu_name` varchar(16) NOT NULL,
  `stu_sex` varchar(8) NOT NULL,
  `stu_grade` int(11) NOT NULL,
  `team_id` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `testarticle`
--

CREATE TABLE `testarticle` (
  `aid` mediumint(9) NOT NULL,
  `title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'wwh', 'bPfOo9C5p7yp7pvZvcH3ZMJbruUVrLfw', '$2y$13$g7ulFM2UlDlyQIrUqDcFfuHOaKBObQdh3nUcaoG88li03JXxfDPia', NULL, '123456@abc.com', 10, 1498467384, 1498467384),
(2, 'wwhdsg', 'MfyXbO3z2E2duDq_NKqcWdci7CrU7yeo', '$2y$13$Jj0/.NHxnVtB9sdyCG90AuLojC6zZWIMr08cdv8DgTxfI6XQ8Btc.', NULL, 'admin@mail.com', 10, 1499498544, 1499498544);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `rela_belong`
--
ALTER TABLE `rela_belong`
  ADD KEY `team_id` (`team_id`),
  ADD KEY `stu_id` (`stu_id`);

--
-- Indexes for table `rela_massaged`
--
ALTER TABLE `rela_massaged`
  ADD KEY `stu_id` (`stu_id`),
  ADD KEY `mes_num` (`mes_num`);

--
-- Indexes for table `rela_play`
--
ALTER TABLE `rela_play`
  ADD KEY `stu_id` (`stu_id`),
  ADD KEY `game_name` (`game_name`);

--
-- Indexes for table `rela_read`
--
ALTER TABLE `rela_read`
  ADD KEY `stu_id` (`stu_id`),
  ADD KEY `book_name` (`book_name`);

--
-- Indexes for table `rela_study`
--
ALTER TABLE `rela_study`
  ADD KEY `stu_id` (`stu_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `rela_watch`
--
ALTER TABLE `rela_watch`
  ADD KEY `stu_id` (`stu_id`),
  ADD KEY `mov_name` (`mov_name`);

--
-- Indexes for table `sql_book`
--
ALTER TABLE `sql_book`
  ADD PRIMARY KEY (`book_name`);

--
-- Indexes for table `sql_course`
--
ALTER TABLE `sql_course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `sql_game`
--
ALTER TABLE `sql_game`
  ADD PRIMARY KEY (`game_name`);

--
-- Indexes for table `sql_message`
--
ALTER TABLE `sql_message`
  ADD PRIMARY KEY (`mes_num`),
  ADD UNIQUE KEY `sql_teamate` (`stu_id`);

--
-- Indexes for table `sql_movie`
--
ALTER TABLE `sql_movie`
  ADD PRIMARY KEY (`mov_name`);

--
-- Indexes for table `sql_team`
--
ALTER TABLE `sql_team`
  ADD PRIMARY KEY (`team_id`);

--
-- Indexes for table `sql_teamate`
--
ALTER TABLE `sql_teamate`
  ADD PRIMARY KEY (`stu_id`),
  ADD UNIQUE KEY `sql_team` (`team_id`);

--
-- Indexes for table `testarticle`
--
ALTER TABLE `testarticle`
  ADD PRIMARY KEY (`aid`);

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
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- 限制导出的表
--

--
-- 限制表 `rela_belong`
--
ALTER TABLE `rela_belong`
  ADD CONSTRAINT `rela_belong_ibfk_1` FOREIGN KEY (`team_id`) REFERENCES `sql_team` (`team_id`),
  ADD CONSTRAINT `rela_belong_ibfk_2` FOREIGN KEY (`stu_id`) REFERENCES `sql_teamate` (`stu_id`);

--
-- 限制表 `rela_massaged`
--
ALTER TABLE `rela_massaged`
  ADD CONSTRAINT `rela_massaged_ibfk_1` FOREIGN KEY (`stu_id`) REFERENCES `sql_teamate` (`stu_id`),
  ADD CONSTRAINT `rela_massaged_ibfk_2` FOREIGN KEY (`mes_num`) REFERENCES `sql_message` (`mes_num`);

--
-- 限制表 `rela_play`
--
ALTER TABLE `rela_play`
  ADD CONSTRAINT `rela_play_ibfk_1` FOREIGN KEY (`stu_id`) REFERENCES `sql_teamate` (`stu_id`),
  ADD CONSTRAINT `rela_play_ibfk_2` FOREIGN KEY (`game_name`) REFERENCES `sql_game` (`game_name`);

--
-- 限制表 `rela_read`
--
ALTER TABLE `rela_read`
  ADD CONSTRAINT `rela_read_ibfk_1` FOREIGN KEY (`stu_id`) REFERENCES `sql_teamate` (`stu_id`),
  ADD CONSTRAINT `rela_read_ibfk_2` FOREIGN KEY (`book_name`) REFERENCES `sql_book` (`book_name`);

--
-- 限制表 `rela_study`
--
ALTER TABLE `rela_study`
  ADD CONSTRAINT `rela_study_ibfk_1` FOREIGN KEY (`stu_id`) REFERENCES `sql_teamate` (`stu_id`),
  ADD CONSTRAINT `rela_study_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `sql_course` (`course_id`);

--
-- 限制表 `rela_watch`
--
ALTER TABLE `rela_watch`
  ADD CONSTRAINT `rela_watch_ibfk_1` FOREIGN KEY (`stu_id`) REFERENCES `sql_teamate` (`stu_id`),
  ADD CONSTRAINT `rela_watch_ibfk_2` FOREIGN KEY (`mov_name`) REFERENCES `sql_movie` (`mov_name`);

--
-- 限制表 `sql_message`
--
ALTER TABLE `sql_message`
  ADD CONSTRAINT `sql_message_ibfk_1` FOREIGN KEY (`stu_id`) REFERENCES `sql_teamate` (`stu_id`);

--
-- 限制表 `sql_teamate`
--
ALTER TABLE `sql_teamate`
  ADD CONSTRAINT `sql_teamate_ibfk_1` FOREIGN KEY (`team_id`) REFERENCES `sql_team` (`team_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
