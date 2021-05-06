/*
SQLyog Enterprise - MySQL GUI v8.05 
MySQL - 5.5.5-10.1.30-MariaDB : Database - cms
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`cms` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `cms`;

/*Table structure for table `kategori` */

DROP TABLE IF EXISTS `kategori`;

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idkategori` varchar(40) DEFAULT NULL,
  `kategori` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `kategori` */

insert  into `kategori`(`id`,`idkategori`,`kategori`) values (13,'CAT001','Javascript'),(14,'CAT002','JAVA'),(15,'CAT003','Node JS');

/*Table structure for table `tbl_artikel` */

DROP TABLE IF EXISTS `tbl_artikel`;

CREATE TABLE `tbl_artikel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `idpost` varchar(255) DEFAULT NULL,
  `author` varchar(60) DEFAULT NULL,
  `content` text,
  `date` datetime DEFAULT NULL,
  `kategori` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_artikel` */

insert  into `tbl_artikel`(`id`,`title`,`idpost`,`author`,`content`,`date`,`kategori`) values (19,'Cara Install Xampp','65b50b04a6af50bb2f174db30a8c6dad','Dasep','<p>Hello Guys&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/cms//assets/post/1206409641.jpg\" style=\"height:672px; width:1239px\" /></p>\r\n','2021-05-05 17:47:52','PHP');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
