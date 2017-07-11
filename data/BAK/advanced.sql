-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-07-08 15:58:26
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
-- 表的结构 `info_book`
--

CREATE TABLE `info_book` (
  `book_writer` varchar(16) NOT NULL,
  `book_type` varchar(16) NOT NULL,
  `book_id` int(11) NOT NULL,
  `book_name` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- 表的结构 `info_course`
--

CREATE TABLE `info_course` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- 表的结构 `info_game`
--

CREATE TABLE `info_game` (
  `game_type` varchar(16) NOT NULL,
  `game_name` varchar(16) NOT NULL,
  `game_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- 表的结构 `info_message`
--

CREATE TABLE `info_message` (
  `message_text` text NOT NULL,
  `message_date` date NOT NULL,
  `student_id` int(11) NOT NULL,
  `message_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- 表的结构 `info_movie`
--

CREATE TABLE `info_movie` (
  `movie_director` varchar(16) NOT NULL,
  `movie_imdb` float NOT NULL,
  `movie_id` int(11) NOT NULL,
  `movie_name` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- 表的结构 `info_student`
--

CREATE TABLE `info_student` (
  `student_id` int(11) NOT NULL,
  `student_name` varchar(16) NOT NULL,
  `student_gender` varchar(16) NOT NULL,
  `student_grade` int(11) NOT NULL,
  `team_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- 表的结构 `info_team`
--

CREATE TABLE `info_team` (
  `team_id` int(11) NOT NULL,
  `member_num` int(11) NOT NULL,
  `team_name` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

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
-- 表的结构 `show_play`
--

CREATE TABLE `show_play` (
  `student_id` int(11) NOT NULL,
  `game_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- 表的结构 `show_read`
--

CREATE TABLE `show_read` (
  `student_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- 表的结构 `show_study`
--

CREATE TABLE `show_study` (
  `student_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- 表的结构 `show_watch`
--

CREATE TABLE `show_watch` (
  `student_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

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
-- Indexes for table `info_book`
--
ALTER TABLE `info_book`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `info_course`
--
ALTER TABLE `info_course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `info_game`
--
ALTER TABLE `info_game`
  ADD PRIMARY KEY (`game_id`);

--
-- Indexes for table `info_message`
--
ALTER TABLE `info_message`
  ADD PRIMARY KEY (`message_id`),
  ADD UNIQUE KEY `sql_teamate` (`student_id`);

--
-- Indexes for table `info_movie`
--
ALTER TABLE `info_movie`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `info_student`
--
ALTER TABLE `info_student`
  ADD PRIMARY KEY (`student_id`),

--
-- Indexes for table `info_team`
--
ALTER TABLE `info_team`
  ADD PRIMARY KEY (`team_id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `show_play`
--
ALTER TABLE `show_play`
  ADD PRIMARY KEY (`student_id`,`game_id`),
  ADD KEY `game_id` (`game_id`);

--
-- Indexes for table `show_read`
--
ALTER TABLE `show_read`
  ADD PRIMARY KEY (`student_id`,`book_id`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `show_study`
--
ALTER TABLE `show_study`
  ADD PRIMARY KEY (`student_id`,`course_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `show_watch`
--
ALTER TABLE `show_watch`
  ADD PRIMARY KEY (`student_id`,`movie_id`),
  ADD KEY `movie_id` (`movie_id`);

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
-- 使用表AUTO_INCREMENT `info_book`
--
ALTER TABLE `info_book`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `info_course`
--
ALTER TABLE `info_course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `info_game`
--
ALTER TABLE `info_game`
  MODIFY `game_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `info_message`
--
ALTER TABLE `info_message`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `info_movie`
--
ALTER TABLE `info_movie`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `info_student`
--
ALTER TABLE `info_student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `info_team`
--
ALTER TABLE `info_team`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- 限制导出的表
--

--
-- 限制表 `info_message`
--
ALTER TABLE `info_message`
  ADD CONSTRAINT `info_message_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `info_student` (`student_id`);

--
-- 限制表 `info_student`
--
ALTER TABLE `info_student`
  ADD CONSTRAINT `info_student_ibfk_1` FOREIGN KEY (`team_id`) REFERENCES `info_team` (`team_id`);

--
-- 限制表 `show_play`
--
ALTER TABLE `show_play`
  ADD CONSTRAINT `show_play_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `info_student` (`student_id`),
  ADD CONSTRAINT `show_play_ibfk_2` FOREIGN KEY (`game_id`) REFERENCES `info_game` (`game_id`);

--
-- 限制表 `show_read`
--
ALTER TABLE `show_read`
  ADD CONSTRAINT `show_read_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `info_student` (`student_id`),
  ADD CONSTRAINT `show_read_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `info_book` (`book_id`);

--
-- 限制表 `show_study`
--
ALTER TABLE `show_study`
  ADD CONSTRAINT `show_study_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `info_student` (`student_id`),
  ADD CONSTRAINT `show_study_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `info_course` (`course_id`);

--
-- 限制表 `show_watch`
--
ALTER TABLE `show_watch`
  ADD CONSTRAINT `show_watch_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `info_student` (`student_id`),
  ADD CONSTRAINT `show_watch_ibfk_2` FOREIGN KEY (`movie_id`) REFERENCES `info_movie` (`movie_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
