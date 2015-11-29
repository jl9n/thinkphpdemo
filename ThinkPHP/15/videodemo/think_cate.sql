-- phpMyAdmin SQL Dump
-- version 3.2.2
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2011 年 01 月 21 日 08:21
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
