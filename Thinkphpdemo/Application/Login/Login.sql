-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- 主机: localhost
-- 生成日期: 2014 年 01 月 13 日 06:30
-- 服务器版本: 5.0.51
-- PHP 版本: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- 数据库: `login`
-- 


-- --------------------------------------------------------

-- 
-- 表的结构 `qd_admin`
-- 

CREATE TABLE `qd_admin` (
  `id` int(10) unsigned NOT NULL auto_increment COMMENT '管理员id',
  `admin_name` varchar(32) NOT NULL COMMENT '管理员名称',
  `admin_pwd` char(32) NOT NULL COMMENT '管理员密码',
  `last_login_time` int(13) NOT NULL default '0' COMMENT '最后登录时间',
  `last_login_ip` int(13) NOT NULL default '0' COMMENT '最后登录ip',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='管理员表' AUTO_INCREMENT=6 ;

-- 
-- 导出表中的数据 `qd_admin`
-- 

INSERT INTO `qd_admin` VALUES (1, 'admin', '566f0ea4f6c2e947f36795c8f58ba901', 1389592464, -1062688006);

-- --------------------------------------------------------

-- 
-- 表的结构 `qd_admin_role`
-- 

CREATE TABLE `qd_admin_role` (
  `admin_id` int(11) NOT NULL COMMENT '管理员id',
  `role_id` int(11) NOT NULL COMMENT '角色id'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='管理员与角色关联表';

-- 
-- 导出表中的数据 `qd_admin_role`
-- 

INSERT INTO `qd_admin_role` VALUES (1, 1);
INSERT INTO `qd_admin_role` VALUES (5, 2);



-- --------------------------------------------------------

-- 
-- 表的结构 `qd_node`
-- 

CREATE TABLE `qd_node` (
  `id` int(10) unsigned NOT NULL auto_increment COMMENT '节点id',
  `pid` int(11) NOT NULL COMMENT '父id',
  `name` varchar(32) NOT NULL COMMENT '节点名',
  `zh_name` varchar(32) NOT NULL COMMENT '节点解释',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='节点表' AUTO_INCREMENT=31 ;

-- 
-- 导出表中的数据 `qd_node`
-- 

INSERT INTO `qd_node` VALUES (1, 0, 'Classify', '商品分类管理');
INSERT INTO `qd_node` VALUES (2, 1, 'index', '分类列表');
INSERT INTO `qd_node` VALUES (3, 1, 'add', '添加分类');
INSERT INTO `qd_node` VALUES (4, 1, 'edit', '修改分类');
INSERT INTO `qd_node` VALUES (5, 1, 'delete', '删除分类');
INSERT INTO `qd_node` VALUES (6, 0, 'Goods', '商品管理');
INSERT INTO `qd_node` VALUES (7, 6, 'book', '图书列表');
INSERT INTO `qd_node` VALUES (8, 6, 'addBook', '添加图书');
INSERT INTO `qd_node` VALUES (9, 6, 'deleteBook', '删除图书');
INSERT INTO `qd_node` VALUES (10, 6, 'editBook', '修改图书');
INSERT INTO `qd_node` VALUES (11, 6, 'plaything', '周边产品列表');
INSERT INTO `qd_node` VALUES (12, 6, 'addPlaything', '添加周边产品');
INSERT INTO `qd_node` VALUES (13, 6, 'editPlaything', '修改周边产品');
INSERT INTO `qd_node` VALUES (14, 6, 'recover', '回收站');
INSERT INTO `qd_node` VALUES (15, 0, 'RBAC', 'RBAC权限管理');
INSERT INTO `qd_node` VALUES (16, 15, 'index', '管理员列表');
INSERT INTO `qd_node` VALUES (17, 15, 'doAddAdmin', '添加管理员');
INSERT INTO `qd_node` VALUES (18, 15, 'doEdit', '修改管理员信息');
INSERT INTO `qd_node` VALUES (19, 15, 'role', '角色列表');
INSERT INTO `qd_node` VALUES (20, 15, 'doAddRole', '添加角色');
INSERT INTO `qd_node` VALUES (21, 0, 'Comment', '评论管理');
INSERT INTO `qd_node` VALUES (22, 21, 'index', '评论列表');
INSERT INTO `qd_node` VALUES (23, 21, 'delete', '删除评论');
INSERT INTO `qd_node` VALUES (24, 0, 'Order', '订单管理');
INSERT INTO `qd_node` VALUES (25, 24, 'index', '订单列表');
INSERT INTO `qd_node` VALUES (26, 24, 'changestatus', '订单修改');
INSERT INTO `qd_node` VALUES (27, 0, 'Ad', '广告管理');
INSERT INTO `qd_node` VALUES (28, 27, 'index', '广告列表');
INSERT INTO `qd_node` VALUES (29, 27, 'add', '添加广告');
INSERT INTO `qd_node` VALUES (30, 27, 'edit', '修改广告');

-- --------------------------------------------------------



-- --------------------------------------------------------



-- --------------------------------------------------------

-- 
-- 表的结构 `qd_role`
-- 

CREATE TABLE `qd_role` (
  `id` int(10) unsigned NOT NULL auto_increment COMMENT '角色id',
  `role_name` varchar(32) NOT NULL COMMENT '角色名',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='角色表' AUTO_INCREMENT=7 ;

-- 
-- 导出表中的数据 `qd_role`
-- 

INSERT INTO `qd_role` VALUES (1, '超级管理员');
INSERT INTO `qd_role` VALUES (2, '商品编辑');

-- --------------------------------------------------------

-- 
-- 表的结构 `qd_role_node`
-- 

CREATE TABLE `qd_role_node` (
  `role_id` int(11) NOT NULL COMMENT '角色id',
  `node_id` int(11) NOT NULL COMMENT '节点id'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='角色与节点关联表';

-- 
-- 导出表中的数据 `qd_role_node`
-- 

INSERT INTO `qd_role_node` VALUES (1, 2);
INSERT INTO `qd_role_node` VALUES (1, 3);
INSERT INTO `qd_role_node` VALUES (1, 4);
INSERT INTO `qd_role_node` VALUES (1, 5);
INSERT INTO `qd_role_node` VALUES (1, 7);
INSERT INTO `qd_role_node` VALUES (1, 8);
INSERT INTO `qd_role_node` VALUES (1, 9);
INSERT INTO `qd_role_node` VALUES (1, 10);
INSERT INTO `qd_role_node` VALUES (1, 11);
INSERT INTO `qd_role_node` VALUES (1, 12);
INSERT INTO `qd_role_node` VALUES (1, 13);
INSERT INTO `qd_role_node` VALUES (1, 14);
INSERT INTO `qd_role_node` VALUES (1, 16);
INSERT INTO `qd_role_node` VALUES (1, 17);
INSERT INTO `qd_role_node` VALUES (1, 18);
INSERT INTO `qd_role_node` VALUES (1, 19);
INSERT INTO `qd_role_node` VALUES (1, 20);
INSERT INTO `qd_role_node` VALUES (1, 22);
INSERT INTO `qd_role_node` VALUES (1, 23);
INSERT INTO `qd_role_node` VALUES (1, 25);
INSERT INTO `qd_role_node` VALUES (1, 26);
INSERT INTO `qd_role_node` VALUES (1, 28);
INSERT INTO `qd_role_node` VALUES (1, 29);
INSERT INTO `qd_role_node` VALUES (1, 30);
INSERT INTO `qd_role_node` VALUES (2, 26);
INSERT INTO `qd_role_node` VALUES (2, 25);
INSERT INTO `qd_role_node` VALUES (2, 13);
INSERT INTO `qd_role_node` VALUES (2, 12);
INSERT INTO `qd_role_node` VALUES (2, 11);
INSERT INTO `qd_role_node` VALUES (2, 10);
INSERT INTO `qd_role_node` VALUES (2, 8);
INSERT INTO `qd_role_node` VALUES (2, 7);
INSERT INTO `qd_role_node` VALUES (2, 5);
INSERT INTO `qd_role_node` VALUES (2, 4);
INSERT INTO `qd_role_node` VALUES (5, 28);
INSERT INTO `qd_role_node` VALUES (5, 29);
INSERT INTO `qd_role_node` VALUES (5, 30);
INSERT INTO `qd_role_node` VALUES (2, 3);
INSERT INTO `qd_role_node` VALUES (2, 2);

-- --------------------------------------------------------


-- --------------------------------------------------------

-- 
-- 表的结构 `qd_user`
-- 

CREATE TABLE `qd_user` (
  `id` int(10) unsigned NOT NULL auto_increment COMMENT '用户id',
  `username` varchar(32) NOT NULL COMMENT '用户名',
  `password` char(32) NOT NULL COMMENT '密码',
  `email` varchar(32) NOT NULL COMMENT '邮箱',
  `reg_time` int(11) NOT NULL COMMENT '注册时间',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='用户表' AUTO_INCREMENT=3 ;

-- 
-- 导出表中的数据 `qd_user`
-- 

INSERT INTO `qd_user` VALUES (1, 'qs123', 'e10adc3949ba59abbe56e057f20f883e', '318566528@qq.com', 1389589263);
