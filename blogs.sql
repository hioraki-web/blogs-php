/*
Navicat MySQL Data Transfer

Source Server         : link
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : blogs

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2021-05-18 09:37:05
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', 'admin', '123456');
INSERT INTO `admin` VALUES ('2', 'admin2', '12345678');
INSERT INTO `admin` VALUES ('3', 'admin3', '12345678');

-- ----------------------------
-- Table structure for article
-- ----------------------------
DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `intro` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `contents` mediumtext NOT NULL,
  `class_ify` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of article
-- ----------------------------
INSERT INTO `article` VALUES ('14', '循环语句', '循环语句', '2021-05-05 16:00:00', 'http://localhost:8080/blogs//upload/162027858228175.jpg', '## 常用的循环语句\n\nfor语句\n\n```\nfor(var i = 0; i<10; i++){\n\nconse.log(\"哈哈我是for循环\")  //这里输出了10次\n\n}\n\n```\n', '3');
INSERT INTO `article` VALUES ('3', '箭头函数', '什么是箭头函数', '2021-05-03 16:00:00', 'http://localhost:8080/blogs//upload/162046760658815.jpg', '# 箭头函数\n\n##### 箭头函数就是函数的简写形式\n\n```\nvar a = function(){\n conse.log(10+15) // 25\n}\n\nvar b = ()=>{\n conse.log(10+15) // 25\n}\na() // 25\nb() // 25\n```\n\n需要注意的是 箭头函数没有this\n\n', '3');
INSERT INTO `article` VALUES ('4', '箭头函数与函数', '什么是箭头函数', '2021-05-03 16:00:00', 'http://localhost:8080/blogs//upload/162027749671192.jpg', '# 箭头函数\n\n##### 箭头函数就是函数的简写形式\n\n```\nvar a = function(){\n conse.log(10+15) // 25\n}\n\nvar b = ()=>{\n conse.log(10+15) // 25\n}\na() // 25\nb() // 25\n```\n\n需要注意的是 箭头函数没有this\n\n', '3');
INSERT INTO `article` VALUES ('5', 'Vue的生命周期', 'vue的周期函数', '2021-05-03 16:00:00', 'http://localhost:8080/blogs//upload/162046899896109.jpg', '# 什么是Vue的生命周期\n\n可以简单的理解成为组件在页面打开关闭的过程\n\n这其中伴随的周期钩子函数', '2');
INSERT INTO `article` VALUES ('13', '流程控制语句', '流程', '2021-05-05 16:00:00', 'http://localhost:8080/blogs//upload/162027808198274.jpg', '## 流程控制语句\n\n上代码\n\n```\nif(age>18){\n\n conse.log(\"成年人了\");\n\n} else {\n\n conse.log(\"小孩子呢\")\n}\n\n```\n', '3');
INSERT INTO `article` VALUES ('15', '跨域问题', '写博客遇到的跨域问题', '2021-05-08 16:00:00', 'http://localhost:8080/blogs//upload/162054794846760.jfif', '### 保护机制\n\n在发送Ajax请求时\n由于浏览器的保护机制，如果协议 + 域名 + 端口 ，有一个不一样浏览器就认为这是跨域（CORS）了，就会终止访问\n解决方案只需后台设置以下代码\n\n```\nheader(\"Access-Control-Allow-Origin:*\"); // *代表允许任何网址请求\nheader(\"Access-Control-Allow-Methods:POST,GET,OPTIONS,DELETE\"); // 允许请求的类型\nheader(\"Access-Control-Allow-Credentials: true\"); // 设置是否允许发送 cookies\nheader(\"Access-Control-Allow-Headers: Content-Type,Content-Length,Accept-Encoding,X-Requested-with, Origin\"); // 设置允许自定义请求头的字段\n\n```\n', '1');

-- ----------------------------
-- Table structure for class_ify
-- ----------------------------
DROP TABLE IF EXISTS `class_ify`;
CREATE TABLE `class_ify` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of class_ify
-- ----------------------------
INSERT INTO `class_ify` VALUES ('1', '项目总结');
INSERT INTO `class_ify` VALUES ('2', 'Vue');
INSERT INTO `class_ify` VALUES ('3', 'js');

-- ----------------------------
-- Table structure for pto_path
-- ----------------------------
DROP TABLE IF EXISTS `pto_path`;
CREATE TABLE `pto_path` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=117 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pto_path
-- ----------------------------
INSERT INTO `pto_path` VALUES ('116', '哈哈哈哈', 'http://localhost:8080/blogs//upload/162062004277213.jpg');
INSERT INTO `pto_path` VALUES ('115', '咕咕', 'http://localhost:8080/blogs//upload/162052771149903.jpg');
INSERT INTO `pto_path` VALUES ('112', '咕咕', 'http://localhost:8080/blogs//upload/162052767387357.jpg');
INSERT INTO `pto_path` VALUES ('113', '咕咕', 'http://localhost:8080/blogs//upload/162052768350446.jpg');
INSERT INTO `pto_path` VALUES ('114', '咕咕', 'http://localhost:8080/blogs//upload/162052769352839.jpg');
