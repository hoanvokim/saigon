# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.1.31-MariaDB)
# Database: iamsaigon
# Generation Time: 2018-06-13 11:06:13 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table room
# ------------------------------------------------------------

DROP TABLE IF EXISTS `room`;

CREATE TABLE `room` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(500) DEFAULT NULL,
  `room_name` varchar(500) DEFAULT NULL,
  `img` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `room` WRITE;
/*!40000 ALTER TABLE `room` DISABLE KEYS */;

INSERT INTO `room` (`id`, `slug`, `room_name`, `img`)
VALUES
	(1,'saigon-village','Saigon Village','room/village/DSC03238.jpg'),
	(2,'saigon-retro','Saigon Retro','room/retro/PIS_1730.jpg'),
	(3,'saigon-classic','Saigon Classic','room/classic/DSC03436.jpg'),
	(4,'saigon-family','Saigon Family','room/family/DSC06265.jpg');

/*!40000 ALTER TABLE `room` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table room_img
# ------------------------------------------------------------

DROP TABLE IF EXISTS `room_img`;

CREATE TABLE `room_img` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `room_id` int(11) unsigned NOT NULL,
  `img` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_room_id` FOREIGN KEY (`id`) REFERENCES `room` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `room_img` WRITE;
/*!40000 ALTER TABLE `room_img` DISABLE KEYS */;

INSERT INTO `room_img` (`id`, `room_id`, `img`)
VALUES
	(1,1,'room/village/DSC03199.jpg'),
	(2,1,'room/village/DSC03206.jpg'),
	(3,1,'room/village/DSC03228.jpg'),
	(4,1,'room/village/DSC03238.jpg');

/*!40000 ALTER TABLE `room_img` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
