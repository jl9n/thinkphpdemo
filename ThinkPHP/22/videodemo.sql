-- phpMyAdmin SQL Dump
-- version 3.2.2
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2011 年 01 月 27 日 02:40
-- 服务器版本: 5.1.39
-- PHP 版本: 5.2.11

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `videodemo`
--

-- --------------------------------------------------------

--
-- 表的结构 `think_cate`
--

CREATE TABLE IF NOT EXISTS `think_cate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(30) NOT NULL,
  `pid` int(11) NOT NULL,
  `path` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- 转存表中的数据 `think_cate`
--

INSERT INTO `think_cate` (`id`, `name`, `pid`, `path`) VALUES
(1, '新闻', 0, '0'),
(2, '中国新闻', 1, '0-1'),
(3, '美国新闻', 1, '0-1'),
(4, '北京新闻', 2, '0-1-2'),
(5, '华盛顿新闻', 3, '0-1-3'),
(6, '海淀新闻', 4, '0-1-2-4'),
(7, '上地新闻', 6, '0-1-2-4-6'),
(8, '七街新闻', 7, '0-1-2-4-6-7'),
(9, '9号楼新闻', 8, '0-1-2-4-6-7-8'),
(11, '体育', 0, '0');

-- --------------------------------------------------------

--
-- 表的结构 `think_file`
--

CREATE TABLE IF NOT EXISTS `think_file` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` char(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `think_file`
--

INSERT INTO `think_file` (`id`, `filename`) VALUES
(3, '4d3ceabd0270e.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `think_good`
--

CREATE TABLE IF NOT EXISTS `think_good` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `think_good`
--

INSERT INTO `think_good` (`id`, `uid`, `title`) VALUES
(9, 4, 'hhhhh'),
(8, 4, 'ccccc');

-- --------------------------------------------------------

--
-- 表的结构 `think_user`
--

CREATE TABLE IF NOT EXISTS `think_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `think_user`
--

INSERT INTO `think_user` (`id`, `username`, `password`) VALUES
(4, 'gggggggggg', 'dddddddddd');
