-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-07-03 09:43:10
-- 服务器版本： 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `advanced`
--

-- --------------------------------------------------------

--
-- 表的结构 `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1498700036),
('m130524_201442_init', 1498700039);

-- --------------------------------------------------------

--
-- 表的结构 `np_article`
--

CREATE TABLE IF NOT EXISTS `np_article` (
`id` int(11) NOT NULL COMMENT '自增',
  `titile` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `np_article_title`
--

CREATE TABLE IF NOT EXISTS `np_article_title` (
`tid` mediumint(9) NOT NULL COMMENT '自增id',
  `title` text NOT NULL COMMENT '标题'
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='文章标题表' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `np_article_title`
--

INSERT INTO `np_article_title` (`tid`, `title`) VALUES
(1, 'afdsadf');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'test', 'iDt58X3mZ2QE0WT8EkaJvBZc9Ls7gnRD', '$2y$13$eCrIrRSsvmOymZltn/t45edeqoY4iJOZWKSvIr27EZA2rVSZ3Sghe', NULL, 'test@test.com', 10, 1498700403, 1498700403),
(2, 'admin2', 'M1D6Va6h3aXHJPqMsI0a47b4wC6M_qdV', '$2y$13$zUSh3UMj0.Zj3JN2t57BGuj1GVbnRa5GIBupBPcBj/3IN4Mzu4zMK', NULL, 'admin2@admin.com', 10, 1499006323, 1499006323);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
 ADD PRIMARY KEY (`version`);

--
-- Indexes for table `np_article`
--
ALTER TABLE `np_article`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `np_article_title`
--
ALTER TABLE `np_article_title`
 ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`), ADD UNIQUE KEY `email` (`email`), ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `np_article`
--
ALTER TABLE `np_article`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增';
--
-- AUTO_INCREMENT for table `np_article_title`
--
ALTER TABLE `np_article_title`
MODIFY `tid` mediumint(9) NOT NULL AUTO_INCREMENT COMMENT '自增id',AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
