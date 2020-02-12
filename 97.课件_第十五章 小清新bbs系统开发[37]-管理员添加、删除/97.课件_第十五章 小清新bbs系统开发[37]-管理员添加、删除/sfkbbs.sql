-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 01 月 26 日 04:27
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
-- 表的结构 `sfk_content`
--

CREATE TABLE IF NOT EXISTS `sfk_content` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `module_id` int(10) unsigned NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `time` datetime NOT NULL,
  `member_id` int(10) unsigned NOT NULL,
  `times` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16;

--
-- 转存表中的数据 `sfk_content`
--

INSERT INTO `sfk_content` (`id`, `module_id`, `title`, `content`, `time`, `member_id`, `times`) VALUES
(5, 7, 'dwqdwq', 'dwqdwq', '2015-01-12 19:47:33', 1, 2),
(6, 5, 'dwqdwqdwq', 'dwqdwqdwq', '2015-01-14 14:25:25', 1, 5),
(9, 2, 'hahah11111', 'hahah 1', '2015-01-16 19:05:45', 1, 617),
(11, 7, '<div style="color:red;font-size:20px;">测试测试再测试</div>', '<div style="color:red;font-size:20px;">测试测试再测试</div>', '2015-01-16 20:01:45', 1, 17),
(15, 5, '哈哈哈<span>dwqdqwdwqdwq</span>1', '<span>dwqdqwdwqdwq</span>\r\ndqwdwqdwq\r\ndwqdwqdwq1\r\ndqwdwq1', '2015-01-22 11:29:27', 1, 2),
(14, 6, '这贴子是我私房库发的！', '这贴子是我私房库发的！', '2015-01-22 10:58:37', 7, 2);

-- --------------------------------------------------------

--
-- 表的结构 `sfk_father_module`
--

CREATE TABLE IF NOT EXISTS `sfk_father_module` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `module_name` varchar(66) NOT NULL,
  `sort` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='父版块信息表' AUTO_INCREMENT=27 ;

--
-- 转存表中的数据 `sfk_father_module`
--

INSERT INTO `sfk_father_module` (`id`, `module_name`, `sort`) VALUES
(7, 'NBA', 2),
(26, '军事资讯', 0),
(24, 'CBA', 3),
(25, '测试', 0);

-- --------------------------------------------------------

--
-- 表的结构 `sfk_manage`
--

CREATE TABLE IF NOT EXISTS `sfk_manage` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `pw` varchar(32) NOT NULL,
  `create_time` datetime NOT NULL,
  `level` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `sfk_manage`
--

INSERT INTO `sfk_manage` (`id`, `name`, `pw`, `create_time`, `level`) VALUES
(1, 'admin', '96e79218965eb72c92a549dd5a330112', '2015-01-26 12:15:40', 0);

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `sfk_member`
--

INSERT INTO `sfk_member` (`id`, `name`, `pw`, `photo`, `register_time`, `last_time`) VALUES
(1, '孙胜利', '96e79218965eb72c92a549dd5a330112', 'uploads/2015/01/25/67054454c465bbd64e5413102630.jpg', '2015-01-09 11:52:42', '0000-00-00 00:00:00'),
(2, '''"', '96e79218965eb72c92a549dd5a330112', '', '2015-01-09 11:55:07', '0000-00-00 00:00:00'),
(3, '''""', '96e79218965eb72c92a549dd5a330112', '', '2015-01-09 11:56:27', '0000-00-00 00:00:00'),
(4, 'aaa', '96e79218965eb72c92a549dd5a330112', '', '2015-01-12 12:11:15', '0000-00-00 00:00:00'),
(5, 'dwqdwqdwqdwq', '96e79218965eb72c92a549dd5a330112', '', '2015-01-12 12:13:25', '0000-00-00 00:00:00'),
(6, 'dqwdwqdwq', '96e79218965eb72c92a549dd5a330112', '', '2015-01-12 12:17:10', '0000-00-00 00:00:00'),
(7, '私房库', '96e79218965eb72c92a549dd5a330112', '', '2015-01-18 17:24:27', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- 表的结构 `sfk_reply`
--

CREATE TABLE IF NOT EXISTS `sfk_reply` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `content_id` int(10) unsigned NOT NULL,
  `quote_id` int(10) unsigned NOT NULL DEFAULT '0',
  `content` text NOT NULL,
  `time` datetime NOT NULL,
  `member_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- 转存表中的数据 `sfk_reply`
--

INSERT INTO `sfk_reply` (`id`, `content_id`, `quote_id`, `content`, `time`, `member_id`) VALUES
(1, 9, 0, '你笑神恶名？？？？？？？？？', '2015-01-17 15:09:41', 1),
(2, 9, 0, '的权威的期望的完全的无情的无情', '2015-01-17 15:09:54', 1),
(3, 10, 0, 'hahha ', '2015-01-17 19:18:21', 1),
(4, 9, 0, '带我去单位确定为取得完全的完全', '2015-01-17 19:22:16', 1),
(5, 9, 0, '单位确定为取得完全大亲', '2015-01-17 19:22:21', 1),
(6, 9, 0, '大青蛙单位取得完全的武器大全我带我去大青蛙大青蛙单位取得完全\r\nd完全单位取得完全 \r\n\r\n的权威的期望定位去单位签订q\r\n\r\n 的武器大全我带我去', '2015-01-17 19:22:31', 1),
(7, 9, 0, 'sdqdwqdqwdwq', '2015-01-17 19:29:54', 1),
(8, 9, 0, '你这句话说的不对！', '2015-01-17 20:26:05', 1),
(9, 9, 0, '哈哈，要你管！', '2015-01-17 20:26:53', 1),
(10, 9, 0, 'dwqdwqdwqwqdwqdwq\r\ndwqdwqdwqdwqdwq\r\ndwqdwqdwq', '2015-01-17 20:33:35', 1),
(11, 9, 0, 'dqwdwqdwqdwqdqw', '2015-01-17 20:33:51', 1),
(12, 9, 0, 'dwqdwqdwq', '2015-01-17 20:34:09', 1),
(13, 9, 0, 'dwqdwq', '2015-01-17 20:35:58', 1),
(14, 9, 0, 'dwqdwq', '2015-01-17 20:37:08', 1),
(15, 9, 11, '你说的观点我不赞同！', '2015-01-18 17:05:26', 1),
(16, 9, 15, '要你管！', '2015-01-18 17:06:30', 1),
(17, 9, 16, '我非要管！', '2015-01-18 17:20:50', 1),
(18, 9, 1, '哈哈哈哈！', '2015-01-18 17:21:16', 1),
(19, 2, 0, '恩 这篇帖子不错！', '2015-01-18 17:23:33', 1),
(20, 2, 19, '你说的我完全赞同！！！！！！！！！！！', '2015-01-18 17:25:05', 7),
(21, 2, 20, '哈哈，谢谢！', '2015-01-18 17:25:27', 1),
(22, 9, 0, 'dqwdwqdq', '2015-01-21 11:08:05', 1),
(23, 7, 0, 'dqwdwq', '2015-01-21 11:47:15', 1);

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `sfk_son_module`
--

INSERT INTO `sfk_son_module` (`id`, `father_module_id`, `module_name`, `info`, `member_id`, `sort`) VALUES
(1, 7, '单位取得完全', '大青蛙单位取得完全', 0, 121),
(2, 7, '马刺', '马刺马刺马刺马刺', 0, 111),
(6, 24, '上海大鲨鱼', '上海大鲨鱼', 0, 131),
(5, 7, '火箭', '火箭', 0, 211),
(7, 25, '测试子版块', '测试子版块', 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
