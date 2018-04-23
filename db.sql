/*
SQLyog Enterprise - MySQL GUI v7.14 
MySQL - 5.5.5-10.1.9-MariaDB : Database - db_firstsite
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_firstsite` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_firstsite`;

/*Table structure for table `tbl_first` */

DROP TABLE IF EXISTS `tbl_first`;

CREATE TABLE `tbl_first` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_first` */

insert  into `tbl_first`(`no`,`name`,`address`) values (3,'Mugiwara D','East Blue'),(4,'123','123'),(5,'Roronoa zoro','East Blue');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
