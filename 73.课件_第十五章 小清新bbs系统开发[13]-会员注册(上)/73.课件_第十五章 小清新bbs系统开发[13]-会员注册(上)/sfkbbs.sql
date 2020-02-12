-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 01 月 09 日 03:56
-- 服务器版本: 5.6.12-log
-- PHP 版本: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `sfkbbs`
--
CREATE DATABASE IF NOT EXISTS `sfkbbs` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `sfkbbs`;

-- --------------------------------------------------------

--
-- 表的结构 `sfk_father_module`
--

CREATE TABLE IF NOT EXISTS `sfk_father_module` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `module_name` varchar(66) NOT NULL,
  `sort` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='父版块信息表' AUTO_INCREMENT=25 ;

--
-- 转存表中的数据 `sfk_father_module`
--

INSERT INTO `sfk_father_module` (`id`, `module_name`, `sort`) VALUES
(7, 'NBA', 2),
(24, 'CBA', 3);

-- --------------------------------------------------------

--
-- 表的结构 `sfk_member`
--

CREATE TABLE IF NOT EXISTS `sfk_member` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `pw` varchar(32) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `register_time` datetime NOT NULL,
  `last_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `sfk_member`
--

INSERT INTO `sfk_member` (`id`, `name`, `pw`, `photo`, `register_time`, `last_time`) VALUES
(1, '孙胜利', '96e79218965eb72c92a549dd5a330112', '', '2015-01-09 11:52:42', '0000-00-00 00:00:00'),
(2, '''"', '96e79218965eb72c92a549dd5a330112', '', '2015-01-09 11:55:07', '0000-00-00 00:00:00'),
(3, '''""', '96e79218965eb72c92a549dd5a330112', '', '2015-01-09 11:56:27', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- 表的结构 `sfk_son_module`
--

CREATE TABLE IF NOT EXISTS `sfk_son_module` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `father_module_id` int(10) unsigned NOT NULL,
  `module_name` varchar(66) NOT NULL,
  `info` varchar(255) NOT NULL,
  `member_id` int(10) unsigned NOT NULL DEFAULT '0',
  `sort` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `sfk_son_module`
--

INSERT INTO `sfk_son_module` (`id`, `father_module_id`, `module_name`, `info`, `member_id`, `sort`) VALUES
(1, 7, '单位取得完全', '大青蛙单位取得完全', 0, 121),
(2, 7, '马刺', '马刺马刺马刺马刺', 0, 111),
(6, 24, '上海大鲨鱼', '上海大鲨鱼', 0, 131),
(5, 7, '火箭', '火箭', 0, 211);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
