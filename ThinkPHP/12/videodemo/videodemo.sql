-- phpMyAdmin SQL Dump
-- version 3.2.2
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2011 年 01 月 20 日 09:20
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
-- 表的结构 `think_user`
--

CREATE TABLE IF NOT EXISTS `think_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` char(15) NOT NULL,
  `password` char(32) NOT NULL,
  `createtime` int(11) NOT NULL,
  `createip` char(16) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `think_user`
--

INSERT INTO `think_user` (`id`, `username`, `password`, `createtime`, `createip`) VALUES
(3, 'liwenkai', 'wenkai', 0, ''),
(4, 'demo', 'fe01ce2a7fbac8fafaed7c982a04e229', 0, ''),
(9, 'liwenkaihaha', 'a492b899313638d555c4a40f43d0a3e2', 1295513358, '127.0.0.1');

-- --------------------------------------------------------

--
-- 表的结构 `think_user_message`
--

CREATE TABLE IF NOT EXISTS `think_user_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `a` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `think_user_message`
--

INSERT INTO `think_user_message` (`id`, `a`) VALUES
(1, 1),
(2, 2);
