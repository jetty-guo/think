/*
SQLyog Professional v12.08 (64 bit)
MySQL - 5.7.14 : Database - think
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`think` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `think`;

/*Table structure for table `think_article` */

DROP TABLE IF EXISTS `think_article`;

CREATE TABLE `think_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author` varchar(15) NOT NULL,
  `subject` varchar(256) NOT NULL,
  `createtime` datetime DEFAULT NULL,
  `lastmodifytime` datetime DEFAULT NULL,
  `message` mediumtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

/*Data for the table `think_article` */

insert  into `think_article`(`id`,`author`,`subject`,`createtime`,`lastmodifytime`,`message`) values (9,'siaweb','詹姆斯高捧第3座MVP奖杯','2016-11-01 14:17:47','2016-11-01 14:17:49','<p>&nbsp;&nbsp;&nbsp;&nbsp;北京时间5月13日凌晨，NBA与热火队在美航中心共同召开新闻发布会并正式宣布勒布朗-詹姆斯荣膺2011-12赛季NBA常规赛最有价值球员（MVP）。这是詹姆斯最近4个赛季第3次获此殊荣，同时“小皇帝”成为继迈克尔-乔丹之后首位至少3夺常规赛MVP之人。在高举MVP奖杯之时，詹姆斯还获得赞助商提供的越野车一辆，热火队核心将捐赠给慈善机构。图为詹姆斯获奖仪式瞬间。</p><p><img style=\"float:none\" title=\"U6594P6T12D6059080F1286DT20120513111916.jpg\" border=\"0\" hspace=\"0\" src=\"/SiaWeb/ueditor/server/upload/uploadimages/37351336912656.jpg\" /></p>'),(18,'siaweb','hh','2016-11-15 14:17:44','2016-11-18 14:17:41','<p>hh</p>'),(21,'ruby97','每次都想呼喊名字','2016-11-01 14:17:50','2016-11-01 15:01:15','<p><img src=\"/think/ueditor/server/upload/uploadimages/23751477982418.png\" style=\"float:none;width:300px;height:155px;\" border=\"0\" hspace=\"0\" vspace=\"0\" width=\"300\" height=\"155\" /><br /></p><p><br /></p><p>我们从不轻易言败,不怕跌倒</p><p>每次都想呼喊名字啊;我们从不轻易言败,不怕跌倒,黄海;荣辱与共和你同在;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>');

/*Table structure for table `think_user` */

DROP TABLE IF EXISTS `think_user`;

CREATE TABLE `think_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` char(15) NOT NULL,
  `password` char(32) NOT NULL,
  `createtime` int(11) NOT NULL,
  `ip` char(16) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

/*Data for the table `think_user` */

insert  into `think_user`(`id`,`username`,`password`,`createtime`,`ip`) values (17,'ruby97','405958c9e0888f6ddc6221f90576490c',1337216331,'127.0.0.1'),(20,'hsadda','',0,''),(21,'郭帅','',0,''),(22,'ruby99','',0,''),(28,'ruby99','',0,''),(24,'ruby99','',0,''),(25,'ruby99','',0,''),(26,'ruby99','',0,''),(27,'ruby99','',0,''),(29,'ruby99','',0,''),(30,'ruby99','',0,''),(31,'ruby99','',0,''),(32,'ruby99','',0,'');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
