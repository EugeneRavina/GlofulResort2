/*
SQLyog Community v12.01 (64 bit)
MySQL - 5.6.19 : Database - gloful
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`gloful` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `gloful`;

/*Table structure for table `amenities_tbl` */

DROP TABLE IF EXISTS `amenities_tbl`;

CREATE TABLE `amenities_tbl` (
  `ID` int(3) NOT NULL AUTO_INCREMENT,
  `Title` varchar(100) DEFAULT NULL,
  `Description` text,
  `Image` text,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `amenities_tbl` */

insert  into `amenities_tbl`(`ID`,`Title`,`Description`,`Image`) values (1,'Gloful Resto & Grill Resort','The Gloful resort consists of 3 swimming pools, the kiddie pool, the adult pool, and the jacuzzi. The resort pools brings fun experiences to the customer during their stay.\r\nThere are cottages offered in the resort that let the customer to chill and relax during their stay at the resort. The cottages are consisting of four different types.\r\nThe small kubo, big kubo, the stage and the veranda. If relaxation is your style, Gloful Resort will ensure your satisfaction to the resort.','p1.jpg'),(2,'Catering (Eat All You Can)','Naks Sarap restaurant is known by its buffet style of serving. Many artists within the Quezon City spend their different occasion within the Naks Sarap. This restaurant offers different\r\nvariety of Filipino dishers. Enjoy eating at the Naks Sarap restaurant and spend you celebrations with us,','12316104_904280276287498_8510317747865350347_n.jpg'),(3,'Gloful Apartelle','Gloful Apartelle is the perfect place for the people who is tired and need relaxations. The Gloful Appartelle offers three different types of high class rooms. The Twin Single, \r\nFamily Deluxe, and the Family Superior. These rooms offers comfortable experience and will let the customer feel at home.','h1.jpg');

/*Table structure for table `auditlog_tbl` */

DROP TABLE IF EXISTS `auditlog_tbl`;

CREATE TABLE `auditlog_tbl` (
  `AuditID` int(3) NOT NULL AUTO_INCREMENT,
  `UserID` int(3) DEFAULT NULL,
  `Action` varchar(40) DEFAULT NULL,
  `Date` varchar(40) DEFAULT NULL,
  `Time` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`AuditID`)
) ENGINE=InnoDB AUTO_INCREMENT=117 DEFAULT CHARSET=utf8;

/*Data for the table `auditlog_tbl` */

insert  into `auditlog_tbl`(`AuditID`,`UserID`,`Action`,`Date`,`Time`) values (0,1,'Added a User','2016-08-07','15:37'),(1,2,'Added a User','2016-08-07','10:03'),(2,2,'Deleted a User','2016-08-07','13:41'),(3,1,'Deleted a User','2016-08-07','13:44'),(4,1,'Deleted a User','2016-08-07','15:09'),(5,1,'Deleted a User','2016-08-07','15:32'),(6,1,'Updated a User','2016-08-07','15:36'),(8,1,'Updated a User','2016-08-07','15:37'),(9,1,'Updated a User','2016-08-07','15:38'),(10,1,'Updated a User','2016-08-07','15:38'),(11,1,'Updated a User','2016-08-07','15:48'),(12,1,'Updated a User','2016-08-07','15:51'),(13,1,'Updated a User','2016-08-07','15:57'),(14,1,'Updated a User','2016-08-07','15:59'),(15,1,'Updated a User','2016-08-07','16:00'),(16,1,'Updated a User','2016-08-08','03:24'),(17,1,'Added a User','2016-08-08','03:27'),(18,2,'Added a User','2016-08-08','03:41'),(19,1,'Added a User','2016-08-12','17:09'),(20,2,'Updated a User','2016-08-12','17:15'),(21,2,'Added a User','2016-08-26','16:52'),(22,2,'Added a User','2016-08-26','16:54'),(23,2,'Added a User','2016-08-26','16:57'),(24,2,'Added a User','2016-08-26','05:20'),(25,2,'Added a User','2016-08-26','05:23'),(26,1,'Added a User','2016-08-26','05:28'),(27,1,'Added a User','2016-08-26','06:25'),(28,20,'Deleted a User','2016-08-26','18:50'),(29,20,'Added a User','2016-08-26','06:59'),(30,20,'Updated a User','2016-08-29','03:42'),(31,1,'Login','2016-08-29','03:42'),(32,20,'Login','2016-08-29','03:59'),(33,1,'Login','2016-08-29','04:01'),(34,20,'Login','2016-08-29','04:43'),(35,1,'Login','2016-08-29','04:43'),(36,1,'Login','2016-08-29','04:45'),(37,1,'Login','2016-08-29','04:45'),(38,20,'Login','2016-08-29','04:51'),(41,20,'Login','2016-08-29','04:57'),(42,1,'Login','2016-08-29','05:04'),(43,1,'Login','2016-08-29','05:06'),(44,1,'Logged-Out','2016-08-29','05:17'),(45,31,'Login','2016-08-29','05:18'),(46,31,'Logged-Out','2016-08-29','05:19'),(47,20,'Login','2016-08-29','05:19'),(48,20,'Updated a User','2016-08-29','05:23'),(49,20,'Logged-Out','2016-08-29','05:23'),(50,31,'Login','2016-08-29','05:23'),(51,31,'Logged-Out','2016-08-29','05:26'),(52,1,'Login','2016-08-29','05:46'),(53,1,'Login','2016-09-02','12:28'),(54,1,'Login','2016-09-02','01:51'),(55,1,'Login','2016-09-02','02:46'),(56,1,'Login','2016-09-03','04:14'),(57,1,'Login','2016-09-03','04:39'),(58,1,'Login','2016-09-03','04:48'),(59,1,'Login','2016-09-04','06:12'),(60,1,'Login','2016-09-04','07:15'),(61,1,'Login','2016-09-04','09:02'),(62,1,'Login','2016-09-04','04:23'),(63,1,'Login','2016-09-05','03:03'),(64,1,'Login','2016-09-05','05:08'),(65,1,'Login','2016-09-06','02:57'),(66,1,'Login','2016-09-06','04:27'),(67,1,'Login','2016-09-06','07:10'),(68,1,'Login','2016-09-06','07:52'),(69,1,'Login','2016-09-06','11:19'),(70,1,'Login','2016-09-06','04:42'),(71,1,'Login','2016-09-07','02:53'),(72,1,'Logged-Out','2016-09-07','14:53'),(73,1,'Login','2016-09-11','05:20'),(74,1,'Logged-Out','2016-09-11','19:42'),(75,1,'Login','2016-09-11','08:39'),(76,1,'Logged-Out','2016-09-11','20:57'),(77,1,'Login','2016-09-11','09:02'),(78,1,'Logged-Out','2016-09-11','21:03'),(79,1,'Login','2016-09-12','05:53'),(80,1,'Logged-Out','2016-09-12','06:02'),(81,1,'Login','2016-09-12','06:03'),(82,1,'Logged-Out','2016-09-12','07:06'),(83,1,'Login','2016-09-12','07:06'),(84,1,'Login','2016-09-12','07:35'),(85,1,'Login','2016-09-12','05:58'),(86,1,'Login','2016-09-12','07:00'),(87,1,'Login','2016-09-12','08:14'),(88,1,'Login','2016-09-12','11:11'),(89,1,'Login','2016-09-12','11:19'),(90,1,'Login','2016-09-13','02:28'),(91,1,'Login','2016-09-13','02:29'),(92,1,'Login','2016-09-13','04:18'),(93,1,'Login','2016-09-13','04:19'),(94,1,'Login','2016-09-13','07:21'),(95,1,'Login','2016-09-13','07:24'),(96,1,'Login','2016-09-13','08:51'),(97,1,'Login','2016-09-13','02:33'),(98,1,'Login','2016-09-13','03:51'),(99,1,'Login','2016-09-13','05:19'),(100,1,'Login','2016-09-13','09:04'),(101,1,'Login','2016-09-14','12:04'),(102,1,'Login','2016-09-14','02:26'),(103,1,'Login','2016-09-14','02:58'),(104,1,'Login','2016-09-16','04:06'),(105,1,'Login','2016-09-16','06:44'),(106,1,'Login','2016-09-17','01:31'),(107,1,'Login','2016-09-17','01:31'),(108,1,'Login','2016-09-17','01:51'),(109,1,'Login','2016-09-17','10:44'),(110,1,'Login','2016-09-19','04:56'),(111,1,'Login','2016-09-19','05:06'),(112,1,'Login','2016-09-20','12:22'),(113,1,'Login','2016-09-20','03:35'),(114,1,'Login','2016-09-22','08:54'),(115,1,'Login','2016-09-23','09:19'),(116,1,'Login','2016-09-27','11:10');

/*Table structure for table `banner_tbl` */

DROP TABLE IF EXISTS `banner_tbl`;

CREATE TABLE `banner_tbl` (
  `ID` int(3) NOT NULL AUTO_INCREMENT,
  `Title` varchar(100) DEFAULT NULL,
  `Image` text,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

/*Data for the table `banner_tbl` */

insert  into `banner_tbl`(`ID`,`Title`,`Image`) values (1,'Pools','p6.jpg'),(2,'Cottages','c2d.jpg'),(3,'Function Hall','G2.jpg'),(4,'Catering','f1d.jpg'),(5,'Rooms','ts3.jpg'),(6,'Contact Us','bg4.jpg'),(7,'Gallery','p10.jpg'),(8,'Book Now','bg1d.jpg');

/*Table structure for table `catering_tbl` */

DROP TABLE IF EXISTS `catering_tbl`;

CREATE TABLE `catering_tbl` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `Package` varchar(100) DEFAULT NULL,
  `Description` text,
  `Time` int(3) DEFAULT NULL,
  `FoodImage` longblob,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `catering_tbl` */

insert  into `catering_tbl`(`id`,`Package`,`Description`,`Time`,`FoodImage`) values (1,'Package A','EAT ALL YOU CAN & D\r\nRINK ALL YOU CAN!',2,'f7.jpg'),(2,'Package B','5 Main Course Plus (Soup & Dessert)\r\n',3,'f8.jpg');

/*Table structure for table `comment` */

DROP TABLE IF EXISTS `comment`;

CREATE TABLE `comment` (
  `ComID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(60) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Content` text NOT NULL,
  PRIMARY KEY (`ComID`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

/*Data for the table `comment` */

insert  into `comment`(`ComID`,`Name`,`Email`,`Subject`,`Content`) values (15,'mecile','mecile_26oligo@yahoo.com','','bhjkadgasj,dsads'),(14,'arlene','arlenepasigado@yahoo.com','','ka gamai ka bed....\r\n\r\n\r\n\r\n\r\n'),(13,'qke.weqe','hannah@hotmail.com','','wala ko mai e komment'),(12,'jhgjhgjhgjh','jhg','','jhgjhg'),(11,'ttuyt','tuyt','','uytuy'),(10,'gf','hfhgfhgfh','','gfhgf'),(16,'Mark Paul Escario','frozen_mark143@yahoo.com','Asking','How old are your? :)');

/*Table structure for table `contact_tbl` */

DROP TABLE IF EXISTS `contact_tbl`;

CREATE TABLE `contact_tbl` (
  `ID` int(3) NOT NULL AUTO_INCREMENT,
  `Address` varchar(100) DEFAULT NULL,
  `Number` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `contact_tbl` */

insert  into `contact_tbl`(`ID`,`Address`,`Number`) values (1,'542 Quirino Highway, Talipapa, Novaliches Quezon City, Philippines','09354197172');

/*Table structure for table `cottage_tbl` */

DROP TABLE IF EXISTS `cottage_tbl`;

CREATE TABLE `cottage_tbl` (
  `Cid` int(3) NOT NULL AUTO_INCREMENT,
  `CType` varchar(50) DEFAULT NULL,
  `CDescription` varchar(500) DEFAULT NULL,
  `CPrice` double(7,2) DEFAULT NULL,
  `Pax` int(3) DEFAULT NULL,
  `Quantity` int(3) DEFAULT NULL,
  `CImage` text,
  PRIMARY KEY (`Cid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `cottage_tbl` */

insert  into `cottage_tbl`(`Cid`,`CType`,`CDescription`,`CPrice`,`Pax`,`Quantity`,`CImage`) values (1,'Big Kubo','A cottage to remember !!!\r\nasd',2500.00,50,1,'big kubo.jpg'),(2,'Small Kubo','WALANG MAGAWA',500.00,12,5,'c.jpg'),(3,'Veranda','asd',2500.01,35,1,'v1.jpg'),(4,'Stage','asd',1000.00,30,1,'s1.jpg'),(5,'Umbrella','asd',300.00,10,10,'u.jpg'),(6,'Table','asd',250.00,10,10,'v3.jpg');

/*Table structure for table `customer_tbl` */

DROP TABLE IF EXISTS `customer_tbl`;

CREATE TABLE `customer_tbl` (
  `CustID` int(3) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(50) DEFAULT NULL,
  `LastName` varchar(50) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Username` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `HashCode` varchar(33) DEFAULT NULL,
  `Active` int(11) DEFAULT NULL,
  PRIMARY KEY (`CustID`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

/*Data for the table `customer_tbl` */

insert  into `customer_tbl`(`CustID`,`FirstName`,`LastName`,`Email`,`Username`,`Password`,`HashCode`,`Active`) values (13,'Mark Lee','Ballesteros','eelkram187@gmail.com','MLee','10c6c81ef89fdd65bbb1441ff1b6e8d1','4b579d12962ccdbee83f97ba5bbbf0fd',1),(14,'Mark Paul','MArk','mark12321@gmail.com','mark','8a3450fc841c328457847a1ceb441967','798ed94ffc17e1de3cc0ae8f42883457',1),(15,'qwerty','qwerty','qwerty@yahoo.com','qwerty','d8578edf8458ce06fbc5bb76a58c5ca4','ed480ca6518269fc3907f4e2e99ee223',0),(16,'qwerty','qwerty','qwerty21@yahoo.com','qwerty','d8578edf8458ce06fbc5bb76a58c5ca4','c5e7a7b5b702c4f6999d4a6e24df7b77',0),(17,'asd','asd','asd@yahoo.com','asdasd','a8f5f167f44f4964e6c998dee827110c','872ac8201668a0afa0cb8ad79685c28e',0),(18,'Lovelyn','Predonio','lovelyn@yahoo.com','lovelyn','2c7bf6330024ea98eff61c82978709bb','c557cf4837ba8005a87bfe1db801db2d',1),(19,'Eugene','Ravina','Raven@yahoo.com','Eugene','9741da9f7cdd416b0c4b63811770bd6e','5b56e7acb29a9cbc88846fd00c0c88e6',0),(20,'Eugene','Ravina','Raven1@yahoo.com','Eugene','9741da9f7cdd416b0c4b63811770bd6e','70bb38cc16cc510ce0b8f056a892be9b',1),(21,'Mark Paul','Escario','frozen.mark.16@yahoo.com','markpaul','d087f738d6b2bd7f894e11b2a303330c','01c256d0fbeef492855dc14ab5e4a776',1),(22,'Manechie','Rafols','rafolsmanechie@yahoo.com','manechie123','a086a3a037b089ef58a5d9a3b1239a3a','1757a14b25266e1da90fee2593acf611',0),(23,'Manechie','Rafols','rafols123@yahoo.com','manechie123','a086a3a037b089ef58a5d9a3b1239a3a','2edb449f306039676737c8865a85ad1e',0),(24,'Manechie','Rafols','rafols12@yahoo.com','chieos','3388e1e4f5999557e16ad55297f04248','4d00a5df62abf212ffa651f238eaa2bc',0),(25,'Manechie','Rafols','rafols11@yahoo.com','rafols11','0b9d4c6292ab04a06574c4a87427e496','50eeae79f1a1cfd0310b4d4ebb995aee',0),(26,'Manechie','Rafols','chieos@gmail.com','chieos','3388e1e4f5999557e16ad55297f04248','e3d0a9ba297699c7f6182e2e0c07753d',1),(27,'Manechie','Rafols','raffychie@yahoo.com','rafols01','28dfdbfd1db14bf36a4165882949b9e9','0f19df56b7c9c2a206f8b162bdd728a5',1);

/*Table structure for table `custommenu_tbl` */

DROP TABLE IF EXISTS `custommenu_tbl`;

CREATE TABLE `custommenu_tbl` (
  `CustomID` int(4) NOT NULL AUTO_INCREMENT,
  `Fid` int(3) DEFAULT NULL,
  `RCode` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`CustomID`)
) ENGINE=InnoDB AUTO_INCREMENT=164 DEFAULT CHARSET=latin1;

/*Data for the table `custommenu_tbl` */

insert  into `custommenu_tbl`(`CustomID`,`Fid`,`RCode`) values (1,1,'384194d45b7c1f8a0d3928d264e4895e'),(101,2,'384194d45b7c1f8a0d3928d264e4895e'),(102,3,'384194d45b7c1f8a0d3928d264e4895e'),(103,4,'384194d45b7c1f8a0d3928d264e4895e'),(104,5,'384194d45b7c1f8a0d3928d264e4895e'),(105,9,'384194d45b7c1f8a0d3928d264e4895e'),(106,7,'384194d45b7c1f8a0d3928d264e4895e'),(107,1,'384194d45b7c1f8a0d3928d264e4895e'),(108,2,'384194d45b7c1f8a0d3928d264e4895e'),(109,3,'384194d45b7c1f8a0d3928d264e4895e'),(110,4,'384194d45b7c1f8a0d3928d264e4895e'),(111,5,'384194d45b7c1f8a0d3928d264e4895e'),(112,9,'384194d45b7c1f8a0d3928d264e4895e'),(113,7,'384194d45b7c1f8a0d3928d264e4895e'),(114,1,'384194d45b7c1f8a0d3928d264e4895e'),(115,2,'384194d45b7c1f8a0d3928d264e4895e'),(116,3,'384194d45b7c1f8a0d3928d264e4895e'),(117,4,'384194d45b7c1f8a0d3928d264e4895e'),(118,5,'384194d45b7c1f8a0d3928d264e4895e'),(119,9,'384194d45b7c1f8a0d3928d264e4895e'),(120,7,'384194d45b7c1f8a0d3928d264e4895e'),(121,1,'384194d45b7c1f8a0d3928d264e4895e'),(122,2,'384194d45b7c1f8a0d3928d264e4895e'),(123,3,'384194d45b7c1f8a0d3928d264e4895e'),(124,4,'384194d45b7c1f8a0d3928d264e4895e'),(125,5,'384194d45b7c1f8a0d3928d264e4895e'),(126,9,'384194d45b7c1f8a0d3928d264e4895e'),(127,7,'384194d45b7c1f8a0d3928d264e4895e'),(128,1,'384194d45b7c1f8a0d3928d264e4895e'),(129,2,'384194d45b7c1f8a0d3928d264e4895e'),(130,3,'384194d45b7c1f8a0d3928d264e4895e'),(131,4,'384194d45b7c1f8a0d3928d264e4895e'),(132,5,'384194d45b7c1f8a0d3928d264e4895e'),(133,9,'384194d45b7c1f8a0d3928d264e4895e'),(134,7,'384194d45b7c1f8a0d3928d264e4895e'),(135,1,'384194d45b7c1f8a0d3928d264e4895e'),(136,2,'384194d45b7c1f8a0d3928d264e4895e'),(137,3,'384194d45b7c1f8a0d3928d264e4895e'),(138,4,'384194d45b7c1f8a0d3928d264e4895e'),(139,5,'384194d45b7c1f8a0d3928d264e4895e'),(140,9,'384194d45b7c1f8a0d3928d264e4895e'),(141,7,'384194d45b7c1f8a0d3928d264e4895e'),(142,1,'384194d45b7c1f8a0d3928d264e4895e'),(143,2,'8e9c3e8ae0208c45654b529cf41243ba'),(144,3,'8e9c3e8ae0208c45654b529cf41243ba'),(145,4,'8e9c3e8ae0208c45654b529cf41243ba'),(146,5,'8e9c3e8ae0208c45654b529cf41243ba'),(147,9,'8e9c3e8ae0208c45654b529cf41243ba'),(148,7,'8e9c3e8ae0208c45654b529cf41243ba'),(149,1,'8e9c3e8ae0208c45654b529cf41243ba'),(150,2,'8e9c3e8ae0208c45654b529cf41243ba'),(151,3,'8e9c3e8ae0208c45654b529cf41243ba'),(152,4,'8e9c3e8ae0208c45654b529cf41243ba'),(153,5,'8e9c3e8ae0208c45654b529cf41243ba'),(154,9,'8e9c3e8ae0208c45654b529cf41243ba'),(155,7,'8e9c3e8ae0208c45654b529cf41243ba'),(156,1,'8e9c3e8ae0208c45654b529cf41243ba'),(157,2,'ea2d9e1544b7b8c8177d7a5e621a1587'),(158,3,'ea2d9e1544b7b8c8177d7a5e621a1587'),(159,4,'ea2d9e1544b7b8c8177d7a5e621a1587'),(160,5,'ea2d9e1544b7b8c8177d7a5e621a1587'),(161,9,'ea2d9e1544b7b8c8177d7a5e621a1587'),(162,7,'ea2d9e1544b7b8c8177d7a5e621a1587'),(163,1,'ea2d9e1544b7b8c8177d7a5e621a1587');

/*Table structure for table `event_tbl` */

DROP TABLE IF EXISTS `event_tbl`;

CREATE TABLE `event_tbl` (
  `Eid` int(3) NOT NULL AUTO_INCREMENT,
  `EType` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`Eid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `event_tbl` */

insert  into `event_tbl`(`Eid`,`EType`) values (1,'Birthday'),(2,'Debut'),(3,'Wedding');

/*Table structure for table `faq_tbl` */

DROP TABLE IF EXISTS `faq_tbl`;

CREATE TABLE `faq_tbl` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `question` text,
  `answer` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `faq_tbl` */

insert  into `faq_tbl`(`id`,`question`,`answer`) values (1,'How can I make a reservation?\r\n','Walk-in, phone-call or online reservation may be done. The 20% down payment is required.'),(2,'Until what time does the resort opens?','\r\nThe resort is open from Monday to Sunday from 9am to 6pm for the day swimming, and 6pm to 3am for night swimming.'),(3,'Does time extension applicable in the resort?','Time extension is only available for day swimming. 2 hrs of extension cost P50.\r\n'),(4,'What time should I arrive?','In appartelle: You are allowed to check – in anytime you want as long as it is covered by the reserved time.\r\nIn resort: You can arrive within anytime of the schedule.'),(5,'How can I pay my reservation?','In phone – call or walk – in reservation, you need to go to the site of the resort to process the payment in the cashier desk. In online reservation, you need to print the receipt of your reservation and present it in the bank upon paying.\r\n'),(6,'Can I bring alcoholic beverages to the resort?','Alcoholic beverages are not allowed within the resort.\r\n'),(7,'Is Smoking Allowed in the rooms?','Smoking is not allowed inside the rooms.\r\n'),(8,'Do you have proper attire requirements?','Yes, to maintain the safety of the customers within the resort.\r\n'),(9,'How can I reserve online?','You can visit our site Gloful Resto Grill and Resort. You just need to register an account to process a reservation.\r\n');

/*Table structure for table `flyers` */

DROP TABLE IF EXISTS `flyers`;

CREATE TABLE `flyers` (
  `FlyersID` int(3) NOT NULL AUTO_INCREMENT,
  `FTitle` varchar(100) DEFAULT NULL,
  `FSubTitle` varchar(100) DEFAULT NULL,
  `FHeader` varchar(100) DEFAULT NULL,
  `FDesc` text,
  `FPic` longblob,
  PRIMARY KEY (`FlyersID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `flyers` */

insert  into `flyers`(`FlyersID`,`FTitle`,`FSubTitle`,`FHeader`,`FDesc`,`FPic`) values (1,'The Ideal Alternative','NAKS! SARAP! - EAT ALL YOU CAN and GLOFUL RESORT','Gloful Resto & Grill Resort','All in one place is strategically located in huge business and commercial hubs in NOVALICHES. It is along Quirino Highway, Mindanao Avenue which links to North Expressway. The two functional dining restaurant have distinctive services, which doubly the fur for an experiental festive choice: EAT ALL YOU CAN Restaurant, SWIMMING PARTY place . The Ideal alternative for both business and social gatherings','Ideal.jpg');

/*Table structure for table `food_cat` */

DROP TABLE IF EXISTS `food_cat`;

CREATE TABLE `food_cat` (
  `Fcid` int(3) NOT NULL AUTO_INCREMENT,
  `Fcname` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Fcid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `food_cat` */

insert  into `food_cat`(`Fcid`,`Fcname`) values (1,'Main Course'),(2,'Rice'),(3,'Dessert'),(4,'Drinks'),(5,'Soup'),(6,'Vegetables');

/*Table structure for table `food_tbl` */

DROP TABLE IF EXISTS `food_tbl`;

CREATE TABLE `food_tbl` (
  `Fid` int(3) NOT NULL AUTO_INCREMENT,
  `FoodName` varchar(300) DEFAULT NULL,
  `FoodTypeID` int(3) DEFAULT NULL,
  PRIMARY KEY (`Fid`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `food_tbl` */

insert  into `food_tbl`(`Fid`,`FoodName`,`FoodTypeID`) values (1,'Cream of Corn Soup',5),(2,'Roast Pork',1),(3,'Chicken Caldereta',1),(4,'Fish Fillet w/ tofu',1),(5,'Chopseuy Guisado',1),(6,'Plain Rice',2),(7,'Buko Pandan Salad',3),(8,'Cream of Chicken Mushroom',5),(9,'Honey Chicken',1),(10,'Ice Tea',4);

/*Table structure for table `foodtype_tbl` */

DROP TABLE IF EXISTS `foodtype_tbl`;

CREATE TABLE `foodtype_tbl` (
  `FoodTypeID` int(3) NOT NULL AUTO_INCREMENT,
  `FoodType` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`FoodTypeID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `foodtype_tbl` */

insert  into `foodtype_tbl`(`FoodTypeID`,`FoodType`) values (1,'Main Course'),(2,'Rice'),(3,'Dessert'),(4,'Drinks'),(5,'Soup');

/*Table structure for table `functionhall_tbl` */

DROP TABLE IF EXISTS `functionhall_tbl`;

CREATE TABLE `functionhall_tbl` (
  `ID` int(3) NOT NULL AUTO_INCREMENT,
  `FType` varchar(100) DEFAULT NULL,
  `Description` text,
  `Capacity` int(3) DEFAULT NULL,
  `Quantity` int(2) DEFAULT NULL,
  `Price` double(10,2) DEFAULT NULL,
  `Image` text,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `functionhall_tbl` */

insert  into `functionhall_tbl`(`ID`,`FType`,`Description`,`Capacity`,`Quantity`,`Price`,`Image`) values (1,'Garden Hall','Do you want to be one of use? Sure you want, because\r\nwe are an awesome team!. Here we work hard every day \r\nto craft pixel perfect sites.\r\n\r\n\r\n',150,1,10000.00,'G2.jpg'),(2,'Executive',' Much expensive',100,2,15000.00,'G3.jpg');

/*Table structure for table `gallerytype_tbl` */

DROP TABLE IF EXISTS `gallerytype_tbl`;

CREATE TABLE `gallerytype_tbl` (
  `Gid` int(3) DEFAULT NULL,
  `FolderName` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `gallerytype_tbl` */

/*Table structure for table `home_tbl` */

DROP TABLE IF EXISTS `home_tbl`;

CREATE TABLE `home_tbl` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `PictureName` text,
  `Title` varchar(100) DEFAULT NULL,
  `Description` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `home_tbl` */

insert  into `home_tbl`(`id`,`PictureName`,`Title`,`Description`) values (1,'kuya cho.jpg','QWEQWE','wqeqweqwe'),(2,'Gloful2.png','Gloful Resort','A place where you can enjoy vacation !');

/*Table structure for table `images_tbl` */

DROP TABLE IF EXISTS `images_tbl`;

CREATE TABLE `images_tbl` (
  `Id` int(3) DEFAULT NULL,
  `Name` varchar(300) DEFAULT NULL,
  `Description` varchar(600) DEFAULT NULL,
  `Image` text,
  `Gid` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `images_tbl` */

insert  into `images_tbl`(`Id`,`Name`,`Description`,`Image`,`Gid`) values (8,'Cottage','Stage','cottage-stage2.jpg',2),(9,'Room','Twin Single','ts1.jpg',3),(10,'Cottage','Big Kubo','cottage-bigkubo.jpg',2),(12,'Cottage','Umbrella','cottage-umbrella.jpg',2),(14,'Pool','Adult Pool','pool-adult.jpg',1),(15,'Room','Family Superior','Fs1.jpg',3),(16,'Catering','Naks! Sarap','f1.jpg',5),(17,'Function Hall','Garden Hall','functionhall-garden.jpg',4),(19,'Cottage','Veranda','cottage-veranda2.jpg',2),(20,'Room','Family Deluxe','Fdr1.jpg',3),(21,'Cottage','Small Kubo','cottage.jpg',2),(22,'Cottage','Table','cottage-tables.jpg',2),(23,'Cottage','Executive','functionhall-executive.jpg',4),(24,'Pool','Jaccuzzi','pool-jaccuzi.jpg',1),(25,'Pool','Kiddie Pool','Pool-children2.jpg',1),(26,'Event','Naks! Sarap','event1.jpg',6),(27,'Catering',' Naks! Sarap','Catering1.jpg',5);

/*Table structure for table `imageslider_tbl` */

DROP TABLE IF EXISTS `imageslider_tbl`;

CREATE TABLE `imageslider_tbl` (
  `ImageID` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(500) DEFAULT NULL,
  `Description` text,
  `Image` text,
  PRIMARY KEY (`ImageID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `imageslider_tbl` */

insert  into `imageslider_tbl`(`ImageID`,`Title`,`Description`,`Image`) values (1,'Gloful Resto Grill & <br> Resort','A respite of relaxation, calming comforts within reach,<br>hassle-free of long travel..','p1d.jpg'),(2,'Gloful Resort','Come and relax in Gloful Resort where you can find the true meaning of relaxation.1\r\n','449p6.jpg');

/*Table structure for table `logo_tbl` */

DROP TABLE IF EXISTS `logo_tbl`;

CREATE TABLE `logo_tbl` (
  `LogID` int(3) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) DEFAULT NULL,
  `Description` text,
  `Image` longblob,
  PRIMARY KEY (`LogID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `logo_tbl` */

insert  into `logo_tbl`(`LogID`,`Name`,`Description`,`Image`) values (1,'Naks Sarap','Celebrate different occassions with your friends and family at Naks Sarap\r\n','Naks.png'),(2,'Gloful Resort1','Come and relax in Gloful Resort where you can find the true meaning of relaxation.\r\n','Gloful2.png'),(3,'Apartelle','Enjoy the comfort and quality service within Gloful Apartelle\r\n','Gloful.png');

/*Table structure for table `menu_tbl` */

DROP TABLE IF EXISTS `menu_tbl`;

CREATE TABLE `menu_tbl` (
  `MenuID` int(3) NOT NULL AUTO_INCREMENT,
  `MenuName` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`MenuID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `menu_tbl` */

insert  into `menu_tbl`(`MenuID`,`MenuName`) values (3,'Menu A'),(4,'Menu B');

/*Table structure for table `menulist_tbl` */

DROP TABLE IF EXISTS `menulist_tbl`;

CREATE TABLE `menulist_tbl` (
  `MList` int(3) NOT NULL AUTO_INCREMENT,
  `MenuID` int(3) DEFAULT NULL,
  `Fid` int(3) DEFAULT NULL,
  PRIMARY KEY (`MList`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

/*Data for the table `menulist_tbl` */

insert  into `menulist_tbl`(`MList`,`MenuID`,`Fid`) values (13,3,2),(14,3,3),(15,3,6),(16,3,7),(17,3,10),(18,3,1),(19,4,4),(20,4,5),(21,4,6),(22,4,7),(23,4,10),(24,4,1);

/*Table structure for table `othercharges_tbl` */

DROP TABLE IF EXISTS `othercharges_tbl`;

CREATE TABLE `othercharges_tbl` (
  `AddID` int(3) NOT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Description` text,
  `Price` double(10,2) DEFAULT NULL,
  PRIMARY KEY (`AddID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `othercharges_tbl` */

insert  into `othercharges_tbl`(`AddID`,`Name`,`Description`,`Price`) values (1,'Tarpoulin','3FT X 4FT',500.00),(2,'Souvenir','20 PCS',1000.00),(3,'Balloons','20 PCS',500.00),(4,'Videoke',NULL,700.00),(5,'Sound System',NULL,2500.00),(6,'Photo and Video',NULL,5000.00),(7,'Photo Booth',NULL,4500.00),(8,'Emcee',NULL,1500.00);

/*Table structure for table `package_tbl` */

DROP TABLE IF EXISTS `package_tbl`;

CREATE TABLE `package_tbl` (
  `PackageID` int(3) NOT NULL AUTO_INCREMENT,
  `Pname` varchar(100) DEFAULT NULL,
  `Description` text,
  `Image` longblob,
  PRIMARY KEY (`PackageID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `package_tbl` */

/*Table structure for table `packageresort_tbl` */

DROP TABLE IF EXISTS `packageresort_tbl`;

CREATE TABLE `packageresort_tbl` (
  `ID` int(3) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) DEFAULT NULL,
  `Description` text,
  `Image` text,
  `Price` double(10,2) DEFAULT NULL,
  `Duration` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `packageresort_tbl` */

insert  into `packageresort_tbl`(`ID`,`Name`,`Description`,`Image`,`Price`,`Duration`) values (1,'Package A','Exclusive (Day Time)\r\n9am - 5pm','package.jpg',30000.00,'0'),(2,'Package B','Exclusive (Night Time)\r\n6pm - 2am','package2.jpg',50000.00,'1'),(3,'Package C','Exclusive (24 Hours) Starting from 9am','package2.jpg',70000.00,'2');

/*Table structure for table `pool_tbl` */

DROP TABLE IF EXISTS `pool_tbl`;

CREATE TABLE `pool_tbl` (
  `Pid` int(3) NOT NULL AUTO_INCREMENT,
  `PName` varchar(50) DEFAULT NULL,
  `PDescription` varchar(500) DEFAULT NULL,
  `PImage` longblob,
  PRIMARY KEY (`Pid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `pool_tbl` */

insert  into `pool_tbl`(`Pid`,`PName`,`PDescription`,`PImage`) values (1,'Kiddie Pool','2-3 FEET','p7.jpg'),(2,'Adult Pool','4-9 FEET','p8.jpg'),(3,'Jacuzzi','1-3 FEETs','p9.jpg');

/*Table structure for table `rescheduled_tbl` */

DROP TABLE IF EXISTS `rescheduled_tbl`;

CREATE TABLE `rescheduled_tbl` (
  `ID` int(3) NOT NULL AUTO_INCREMENT,
  `PreviousDate` varchar(100) DEFAULT NULL,
  `CurrentDate` varchar(100) DEFAULT NULL,
  `RCode` varbinary(32) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `rescheduled_tbl` */

/*Table structure for table `reserved_tbl` */

DROP TABLE IF EXISTS `reserved_tbl`;

CREATE TABLE `reserved_tbl` (
  `ID` int(3) NOT NULL AUTO_INCREMENT,
  `UserID` int(3) DEFAULT NULL,
  `Type` varchar(100) DEFAULT NULL,
  `Quantity` int(3) DEFAULT NULL,
  `Price` double(10,2) DEFAULT NULL,
  `Capacity` int(4) DEFAULT NULL,
  `Total` double(15,2) DEFAULT NULL,
  `RCode` varchar(32) DEFAULT NULL,
  `DateFrom` date DEFAULT NULL,
  `DateTo` date DEFAULT NULL,
  `date_transaction` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=192 DEFAULT CHARSET=utf8;

/*Data for the table `reserved_tbl` */

insert  into `reserved_tbl`(`ID`,`UserID`,`Type`,`Quantity`,`Price`,`Capacity`,`Total`,`RCode`,`DateFrom`,`DateTo`,`date_transaction`) values (174,34,'Family Deluxe Room',2,1250.00,10,2500.00,'2cb0fc444c379daff817ec4427f47c81','2016-10-25','2016-10-27','2016-09-27 04:30:04'),(171,34,'Family Deluxe Room',2,1250.00,10,2500.00,'a4228e4a6bc339f25a75e572b18d2bf3','2016-10-17','2016-10-17','2016-09-26 22:18:50'),(172,34,'Family Superior Room',3,1750.00,10,5250.00,'384194d45b7c1f8a0d3928d264e4895e','2016-10-24','2016-10-24','2016-09-26 22:51:19'),(173,34,'Family Deluxe Room',2,1250.00,10,2500.00,'afbc559f44781de4268be01978efcf90','2016-10-25','2016-10-27','2016-09-27 04:27:41'),(169,34,'Umbrella',2,300.00,10,600.00,'60d692f0cdbee1797815b8e50f7f3b50','2016-10-24','2016-10-24','2016-09-26 19:40:56'),(170,34,'Family Deluxe Room',2,1000.00,10,2000.00,'60d692f0cdbee1797815b8e50f7f3b50','2016-10-24','2016-10-24','2016-09-26 19:41:02'),(168,34,'Veranda',1,2500.01,35,2500.01,'60d692f0cdbee1797815b8e50f7f3b50','2016-10-24','2016-10-24','2016-09-26 19:40:56'),(167,34,'Family Deluxe Room',2,1000.00,10,2000.00,'6372d2f503e412d1b637f50aa866ab06','2016-10-24','2016-10-24','2016-09-26 19:40:06'),(166,34,'Family Deluxe Room',2,1000.00,10,2000.00,'6372d2f503e412d1b637f50aa866ab06','2016-10-24','2016-10-24','2016-09-26 19:39:36'),(165,34,'Stage',1,1000.00,30,1000.00,'6372d2f503e412d1b637f50aa866ab06','2016-10-24','2016-10-24','2016-09-26 19:39:25'),(164,34,'Small Kubo',2,500.00,12,1000.00,'6372d2f503e412d1b637f50aa866ab06','2016-10-24','2016-10-24','2016-09-26 19:39:25'),(163,34,'Family Deluxe Room',2,1000.00,10,2000.00,'1b8959ad545d92833279c0afb5da5f13','2016-10-31','2016-10-31','2016-09-26 19:38:51'),(162,34,'Family Deluxe Room',2,1000.00,10,2000.00,'1b8959ad545d92833279c0afb5da5f13','2016-10-31','2016-10-31','2016-09-26 19:38:32'),(161,34,'Table',2,250.00,10,500.00,'1b8959ad545d92833279c0afb5da5f13','2016-10-31','2016-10-31','2016-09-26 19:37:52'),(160,34,'Small Kubo',2,500.00,12,1000.00,'1b8959ad545d92833279c0afb5da5f13','2016-10-31','2016-10-31','2016-09-26 19:37:52'),(159,34,'Family Deluxe Room',2,1000.00,10,2000.00,'6ab1143d40b215698fa797015ccb217a','2016-10-17','2016-10-17','2016-09-26 19:37:23'),(158,34,'Family Deluxe Room',2,1000.00,10,2000.00,'6ab1143d40b215698fa797015ccb217a','2016-10-17','2016-10-17','2016-09-26 19:33:38'),(157,34,'Family Deluxe Room',2,1000.00,10,2000.00,'6ab1143d40b215698fa797015ccb217a','2016-10-17','2016-10-17','2016-09-26 19:33:13'),(156,34,'Family Deluxe Room',2,1000.00,10,2000.00,'6ab1143d40b215698fa797015ccb217a','2016-10-17','2016-10-17','2016-09-26 19:32:41'),(155,34,'Table',2,250.00,10,500.00,'6ab1143d40b215698fa797015ccb217a','2016-10-17','2016-10-17','2016-09-26 19:32:35'),(154,34,'Small Kubo',2,500.00,12,1000.00,'6ab1143d40b215698fa797015ccb217a','2016-10-17','2016-10-17','2016-09-26 19:32:35'),(153,34,'Family Deluxe Room',2,1000.00,10,2000.00,'071271fed0ce0dab1cfdfae073962b65','2016-10-24','2016-10-24','2016-09-26 19:29:32'),(152,34,'Table',2,250.00,10,500.00,'071271fed0ce0dab1cfdfae073962b65','2016-10-24','2016-10-24','2016-09-26 19:29:24'),(151,34,'Small Kubo',2,500.00,12,1000.00,'071271fed0ce0dab1cfdfae073962b65','2016-10-24','2016-10-24','2016-09-26 19:29:24'),(150,34,'Family Deluxe Room',2,1000.00,10,2000.00,'41cca9b193ca8ae63572c9497a03bc6f','2016-10-24','2016-10-24','2016-09-26 19:28:46'),(149,34,'Family Deluxe Room',2,1000.00,10,2000.00,'41cca9b193ca8ae63572c9497a03bc6f','2016-10-24','2016-10-24','2016-09-26 19:28:28'),(148,34,'Family Deluxe Room',2,1000.00,10,2000.00,'41cca9b193ca8ae63572c9497a03bc6f','2016-10-24','2016-10-24','2016-09-26 19:25:50'),(147,34,'Table',2,250.00,10,500.00,'41cca9b193ca8ae63572c9497a03bc6f','2016-10-24','2016-10-24','2016-09-26 19:25:26'),(146,34,'Small Kubo',2,500.00,12,1000.00,'41cca9b193ca8ae63572c9497a03bc6f','2016-10-24','2016-10-24','2016-09-26 19:25:26'),(145,34,'Family Deluxe Room',2,1000.00,10,2000.00,'8a528fb00aad0a0001427404b50b2089','2016-10-24','2016-10-24','2016-09-26 19:24:54'),(144,34,'Family Deluxe Room',2,1000.00,10,2000.00,'8a528fb00aad0a0001427404b50b2089','2016-10-24','2016-10-24','2016-09-26 19:21:50'),(143,34,'Family Deluxe Room',2,1000.00,10,2000.00,'8a528fb00aad0a0001427404b50b2089','2016-10-24','2016-10-24','2016-09-26 19:20:00'),(142,34,'Umbrella',3,300.00,10,900.00,'8a528fb00aad0a0001427404b50b2089','2016-10-24','2016-10-24','2016-09-26 19:19:50'),(141,34,'Small Kubo',2,500.00,12,1000.00,'8a528fb00aad0a0001427404b50b2089','2016-10-24','2016-10-24','2016-09-26 19:19:50'),(140,34,'Family Deluxe Room',2,1000.00,10,2000.00,'5d66ddbb5c393ad15652c27434d23316','2016-10-24','2016-10-24','2016-09-26 19:18:57'),(139,34,'Family Deluxe Room',2,1000.00,10,2000.00,'5d66ddbb5c393ad15652c27434d23316','2016-10-24','2016-10-24','2016-09-26 19:18:04'),(138,34,'Umbrella',3,300.00,10,900.00,'5d66ddbb5c393ad15652c27434d23316','2016-10-24','2016-10-24','2016-09-26 19:17:55'),(137,34,'Veranda',1,2500.01,35,2500.01,'5d66ddbb5c393ad15652c27434d23316','2016-10-24','2016-10-24','2016-09-26 19:17:55'),(136,34,'Family Deluxe Room',2,1000.00,10,2000.00,'1576509e12f1043e647f8972d6042b60','2016-10-24','2016-10-24','2016-09-26 19:12:21'),(135,34,'Small Kubo',2,500.00,12,1000.00,'1576509e12f1043e647f8972d6042b60','2016-10-24','2016-10-24','2016-09-26 19:11:36'),(134,34,'Twin Singles Room',2,800.00,5,1600.00,'4da4d39264ae8e20ab84429154d9c48b','2016-10-24','2016-10-24','2016-09-26 19:08:53'),(175,34,'Family Deluxe Room',2,1250.00,10,2500.00,'69e688ef52b0dff52a0eff97be0d060f','2016-10-24','2016-10-26','2016-09-27 04:33:51'),(176,34,'Family Superior Room',2,1750.00,10,3500.00,'03d43aaf1acd92b29559b3894e95a026','2016-10-25','2016-10-27','2016-09-27 04:36:53'),(177,34,'Twin Singles Room',3,600.00,5,1800.00,'48a8da86eaf90a35bff7855ba9e1a984','2016-10-25','2016-10-27','2016-09-27 04:37:43'),(178,34,'Family Deluxe Room',2,1250.00,10,2500.00,'8e0fa206fa2e21fe14b9f5f105ae7310','2016-10-25','2016-10-27','2016-09-27 04:39:10'),(179,34,'Family Superior Room',2,1750.00,10,3500.00,'fb28b38a5e24d2f61b0d9a130dd0ec66','2016-10-23','2016-10-25','2016-09-27 04:41:25'),(180,34,'Family Superior Room',2,1750.00,10,3500.00,'a5f23398ace1163d11dadb47969d76d7','2016-10-25','2016-10-27','2016-09-27 04:44:00'),(181,34,'Family Superior Room',1,1750.00,10,3500.00,'4f79e4db5b5623facac19e74b1963859','2016-10-24','2016-10-25','2016-09-27 04:50:53'),(182,34,'Family Deluxe Room',2,1250.00,10,5000.00,'32eaacd22de523eea3eeac8db46dbcf3','2016-10-25','2016-10-26','2016-09-27 04:55:51'),(183,34,'Family Deluxe Room',2,2500.00,10,5000.00,'b02973bbe5bd873e2da7f39115fdaf96','2016-10-25','2016-10-26','2016-09-27 04:58:32'),(184,34,'Family Superior Room',2,3500.00,10,0.00,'75f85c43e0c4cb52cb0479d24dee9cae','2016-10-25','2016-10-25','2016-09-27 04:59:31'),(185,34,'Family Deluxe Room',2,1250.00,10,2500.00,'82e1595ad6e4e5781c9bec0a312de36d','2016-10-24','2016-10-24','2016-09-27 05:01:35'),(186,34,'Family Superior Room',2,1750.00,10,3500.00,'b80168c8af83e3756dee46bd3a07b6c5','2016-10-24','2016-10-24','2016-09-27 05:03:46'),(187,34,'Family Superior Room',2,1750.00,10,7000.00,'4f08827ea7abc7c691497a60eafead31','2016-10-25','2016-10-26','2016-09-27 05:04:54'),(188,34,'Family Superior Room',2,1750.00,10,7000.00,'c23d52e42be2fedfdc643536bd130661','2016-10-25','2016-10-26','2016-09-27 05:06:06'),(189,34,'Family Superior Room',2,1750.00,10,3500.00,'a198b6589c36a7ad63eb50c23db98af1','2016-10-25','2016-10-26','2016-09-27 05:07:08'),(190,34,'Family Superior Room',2,1750.00,10,14000.00,'10801467c59be5a7695cffa17400d30c','2016-10-25','2016-10-27','2016-09-27 05:07:56'),(191,33,'Small Kubo',1,500.00,12,500.00,'eb2223ac3e06521c4c3ef2def9479411','2016-10-25','2016-10-25','2016-09-27 11:57:53');

/*Table structure for table `reservedcatering_tbl` */

DROP TABLE IF EXISTS `reservedcatering_tbl`;

CREATE TABLE `reservedcatering_tbl` (
  `ID` int(3) NOT NULL AUTO_INCREMENT,
  `DateFrom` date DEFAULT NULL,
  `DateTo` date DEFAULT NULL,
  `EventName` varchar(100) DEFAULT NULL,
  `CName` varchar(100) DEFAULT NULL,
  `Theme` varchar(100) DEFAULT NULL,
  `Motif` varchar(100) DEFAULT NULL,
  `Guest` int(3) DEFAULT NULL,
  `Package` varchar(30) DEFAULT NULL,
  `Menu` varchar(30) DEFAULT NULL,
  `Venue` varchar(30) DEFAULT NULL,
  `Price` double(10,2) DEFAULT NULL,
  `TimeVenue` int(2) DEFAULT NULL,
  `TimeExtend` int(2) DEFAULT NULL,
  `RCode` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

/*Data for the table `reservedcatering_tbl` */

insert  into `reservedcatering_tbl`(`ID`,`DateFrom`,`DateTo`,`EventName`,`CName`,`Theme`,`Motif`,`Guest`,`Package`,`Menu`,`Venue`,`Price`,`TimeVenue`,`TimeExtend`,`RCode`) values (4,'2016-10-25','2016-10-25','Graduation','Mark Paul','Power Ranger','Any color',30,'Package B','Customize','Executive',375.00,3,2,'8e9c3e8ae0208c45654b529cf41243ba'),(5,'2016-10-26','2016-10-26','Graduation','Mark Paul','Power Ranger','Any color',5,'Package A','Menu A','Executive',375.00,2,2,'4e3a5880a9bae366a588a37d21d10da3'),(6,'2016-10-25','2016-10-25','Graduation','Mark Paul','Power Ranger','Any color',40,'Package A','Menu A','Garden',275.00,2,2,'cc97dc5a93db54a0f27951b14121df63'),(7,'2016-10-25','2016-10-25','Graduation','Mark Paul','Power Ranger','Any color',30,'Package A','Menu A','Garden',275.00,2,3,'45a4775cc33c171358512abc6b264b2f'),(8,'2016-10-25','2016-10-25','Graduation','Mark Paul','Power Ranger','Any color',30,'Package A','Menu A','Garden',275.00,2,3,'45a4775cc33c171358512abc6b264b2f'),(9,'2016-10-25','2016-10-25','Graduation','Mark Paul','Power Ranger','Any color',30,'Package A','Menu A','Garden',275.00,2,3,'45a4775cc33c171358512abc6b264b2f'),(10,'2016-10-25','2016-10-25','Graduation','Mark Paul','Power Ranger','Any color',30,'Package B','Customize','Garden',325.00,3,2,'ea2d9e1544b7b8c8177d7a5e621a1587'),(11,'2016-10-31','2016-10-31','Graduation','Mark Paul','Power Ranger','Any color',140,'Package B','','Garden',325.00,3,2,'3f51a68fa2362501dcffc0d6a3882926'),(12,'2016-10-31','2016-10-31','Graduation','Mark Paul','Power Ranger','Any color',140,'Package B','','Garden',325.00,3,2,'3f51a68fa2362501dcffc0d6a3882926'),(13,'2016-10-25','2016-10-25','Graduation','Mark Paul','Power Ranger','Any color',30,'','','',0.00,0,0,'f6f487f347e3b4e441d0068d11fdeaf7'),(14,'2016-10-25','2016-10-25','Graduation','Mark Paul','Power Ranger','Any color',30,'','','',0.00,0,0,'f6f487f347e3b4e441d0068d11fdeaf7'),(15,'2016-10-25','2016-10-25','Graduation','Mark Paul','Power Ranger','Any color',30,'','','',0.00,0,0,'f6f487f347e3b4e441d0068d11fdeaf7'),(16,'2016-10-25','2016-10-25','Graduation','Mark Paul','Power Ranger','Any color',30,'','','',0.00,0,0,'f6f487f347e3b4e441d0068d11fdeaf7'),(17,'2016-10-26','2016-10-26','Graduation','Mark Paul','Power Ranger','Any color',140,'','','',0.00,0,0,'6c6d53aee9c47592e451dbdbefa686a8'),(18,'2016-10-18','2016-10-18','Graduation','asd','Disney','blue',21,'Package A','Menu A','Garden',275.00,2,1,'0ddce802e0154a300259b65bc28924bd'),(19,'2016-10-25','2016-10-25','Graduation','Paul','Disney','blue',45,'Package A','Menu A','Garden',275.00,2,1,'a7f6eae16fc9074ca3dc4d88f8d613d1'),(20,'2016-10-18','2016-10-18','Graduation','Paul','Disney','red',12,'Package A','Menu A','Executive',375.00,2,2,'13a5cc95624c2a9eb736c22ec61359d1');

/*Table structure for table `reservedcateringother_tbl` */

DROP TABLE IF EXISTS `reservedcateringother_tbl`;

CREATE TABLE `reservedcateringother_tbl` (
  `ID` int(4) NOT NULL AUTO_INCREMENT,
  `RCode` varchar(32) DEFAULT NULL,
  `AddID` int(3) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=latin1;

/*Data for the table `reservedcateringother_tbl` */

insert  into `reservedcateringother_tbl`(`ID`,`RCode`,`AddID`) values (17,'384194d45b7c1f8a0d3928d264e4895e',1),(18,'384194d45b7c1f8a0d3928d264e4895e',2),(19,'384194d45b7c1f8a0d3928d264e4895e',3),(20,'384194d45b7c1f8a0d3928d264e4895e',4),(21,'384194d45b7c1f8a0d3928d264e4895e',5),(22,'384194d45b7c1f8a0d3928d264e4895e',1),(23,'384194d45b7c1f8a0d3928d264e4895e',2),(24,'384194d45b7c1f8a0d3928d264e4895e',1),(25,'384194d45b7c1f8a0d3928d264e4895e',2),(26,'384194d45b7c1f8a0d3928d264e4895e',1),(27,'384194d45b7c1f8a0d3928d264e4895e',2),(28,'384194d45b7c1f8a0d3928d264e4895e',4),(29,'384194d45b7c1f8a0d3928d264e4895e',5),(30,'384194d45b7c1f8a0d3928d264e4895e',1),(31,'384194d45b7c1f8a0d3928d264e4895e',2),(32,'384194d45b7c1f8a0d3928d264e4895e',1),(33,'384194d45b7c1f8a0d3928d264e4895e',2),(34,'384194d45b7c1f8a0d3928d264e4895e',1),(35,'384194d45b7c1f8a0d3928d264e4895e',2),(36,'384194d45b7c1f8a0d3928d264e4895e',1),(37,'384194d45b7c1f8a0d3928d264e4895e',2),(38,'384194d45b7c1f8a0d3928d264e4895e',1),(39,'384194d45b7c1f8a0d3928d264e4895e',2),(40,'384194d45b7c1f8a0d3928d264e4895e',1),(41,'384194d45b7c1f8a0d3928d264e4895e',2),(42,'384194d45b7c1f8a0d3928d264e4895e',1),(43,'384194d45b7c1f8a0d3928d264e4895e',2),(44,'384194d45b7c1f8a0d3928d264e4895e',1),(45,'384194d45b7c1f8a0d3928d264e4895e',2),(46,'384194d45b7c1f8a0d3928d264e4895e',1),(47,'384194d45b7c1f8a0d3928d264e4895e',2),(48,'384194d45b7c1f8a0d3928d264e4895e',3),(49,'384194d45b7c1f8a0d3928d264e4895e',4),(50,'384194d45b7c1f8a0d3928d264e4895e',3),(51,'384194d45b7c1f8a0d3928d264e4895e',4),(52,'384194d45b7c1f8a0d3928d264e4895e',8),(53,'384194d45b7c1f8a0d3928d264e4895e',8),(54,'384194d45b7c1f8a0d3928d264e4895e',8),(55,'384194d45b7c1f8a0d3928d264e4895e',8),(56,'384194d45b7c1f8a0d3928d264e4895e',3),(57,'384194d45b7c1f8a0d3928d264e4895e',4),(58,'384194d45b7c1f8a0d3928d264e4895e',2),(59,'384194d45b7c1f8a0d3928d264e4895e',3),(60,'949a53c223cdd055191b39c9433901db',4),(61,'949a53c223cdd055191b39c9433901db',5),(62,'949a53c223cdd055191b39c9433901db',4),(63,'949a53c223cdd055191b39c9433901db',5),(64,'949a53c223cdd055191b39c9433901db',4),(65,'949a53c223cdd055191b39c9433901db',5),(66,'cce490a71dc64832190139f671362e02',4),(67,'cce490a71dc64832190139f671362e02',5),(68,'cce490a71dc64832190139f671362e02',6),(69,'cce490a71dc64832190139f671362e02',4),(70,'cce490a71dc64832190139f671362e02',5),(71,'cce490a71dc64832190139f671362e02',6),(72,'cce490a71dc64832190139f671362e02',3),(73,'8e9c3e8ae0208c45654b529cf41243ba',4),(74,'8e9c3e8ae0208c45654b529cf41243ba',5),(75,'8e9c3e8ae0208c45654b529cf41243ba',7),(76,'45a4775cc33c171358512abc6b264b2f',4),(77,'45a4775cc33c171358512abc6b264b2f',5),(78,'45a4775cc33c171358512abc6b264b2f',6),(79,'45a4775cc33c171358512abc6b264b2f',4),(80,'45a4775cc33c171358512abc6b264b2f',5),(81,'45a4775cc33c171358512abc6b264b2f',6),(82,'45a4775cc33c171358512abc6b264b2f',4),(83,'45a4775cc33c171358512abc6b264b2f',5),(84,'45a4775cc33c171358512abc6b264b2f',6),(85,'ea2d9e1544b7b8c8177d7a5e621a1587',4),(86,'ea2d9e1544b7b8c8177d7a5e621a1587',5),(87,'3f51a68fa2362501dcffc0d6a3882926',2),(88,'3f51a68fa2362501dcffc0d6a3882926',2),(89,'f6f487f347e3b4e441d0068d11fdeaf7',1),(90,'f6f487f347e3b4e441d0068d11fdeaf7',1),(91,'f6f487f347e3b4e441d0068d11fdeaf7',1),(92,'f6f487f347e3b4e441d0068d11fdeaf7',1),(93,'6c6d53aee9c47592e451dbdbefa686a8',1),(94,'6c6d53aee9c47592e451dbdbefa686a8',2),(95,'0ddce802e0154a300259b65bc28924bd',1),(96,'0ddce802e0154a300259b65bc28924bd',2),(97,'0ddce802e0154a300259b65bc28924bd',3),(98,'0ddce802e0154a300259b65bc28924bd',4),(99,'a7f6eae16fc9074ca3dc4d88f8d613d1',1),(100,'13a5cc95624c2a9eb736c22ec61359d1',1),(101,'13a5cc95624c2a9eb736c22ec61359d1',2);

/*Table structure for table `reservedcom_tbl` */

DROP TABLE IF EXISTS `reservedcom_tbl`;

CREATE TABLE `reservedcom_tbl` (
  `ID` int(3) NOT NULL AUTO_INCREMENT,
  `UserID` int(3) DEFAULT NULL,
  `DateFrom` date DEFAULT NULL,
  `DateTo` date DEFAULT NULL,
  `Schedule` varchar(30) DEFAULT NULL,
  `Guest` int(3) DEFAULT NULL,
  `Total` double(15,2) DEFAULT NULL,
  `RCode` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=72 DEFAULT CHARSET=utf8;

/*Data for the table `reservedcom_tbl` */

insert  into `reservedcom_tbl`(`ID`,`UserID`,`DateFrom`,`DateTo`,`Schedule`,`Guest`,`Total`,`RCode`) values (70,34,'2016-10-24','2016-10-24','Day Swimming',30,4500.00,'60d692f0cdbee1797815b8e50f7f3b50'),(69,34,'2016-10-24','2016-10-24','Day Swimming',30,4500.00,'6372d2f503e412d1b637f50aa866ab06'),(68,34,'2016-10-24','2016-10-24','Day Swimming',30,4500.00,'6372d2f503e412d1b637f50aa866ab06'),(67,34,'2016-10-31','2016-10-31','Day Swimming',30,4500.00,'1b8959ad545d92833279c0afb5da5f13'),(66,34,'2016-10-31','2016-10-31','Day Swimming',30,4500.00,'1b8959ad545d92833279c0afb5da5f13'),(65,34,'2016-10-17','2016-10-17','Day Swimming',30,4500.00,'6ab1143d40b215698fa797015ccb217a'),(64,34,'2016-10-17','2016-10-17','Day Swimming',30,4500.00,'6ab1143d40b215698fa797015ccb217a'),(63,34,'2016-10-17','2016-10-17','Day Swimming',30,4500.00,'6ab1143d40b215698fa797015ccb217a'),(62,34,'2016-10-17','2016-10-17','Day Swimming',30,4500.00,'6ab1143d40b215698fa797015ccb217a'),(61,34,'2016-10-24','2016-10-24','Day Swimming',30,4500.00,'071271fed0ce0dab1cfdfae073962b65'),(60,34,'2016-10-24','2016-10-24','Day Swimming',30,4500.00,'41cca9b193ca8ae63572c9497a03bc6f'),(59,34,'2016-10-24','2016-10-24','Day Swimming',30,4500.00,'41cca9b193ca8ae63572c9497a03bc6f'),(58,34,'2016-10-24','2016-10-24','Day Swimming',30,4500.00,'41cca9b193ca8ae63572c9497a03bc6f'),(57,34,'2016-10-24','2016-10-24','Day Swimming',30,4500.00,'8a528fb00aad0a0001427404b50b2089'),(56,34,'2016-10-24','2016-10-24','Day Swimming',30,4500.00,'8a528fb00aad0a0001427404b50b2089'),(55,34,'2016-10-24','2016-10-24','Day Swimming',30,4500.00,'8a528fb00aad0a0001427404b50b2089'),(54,34,'2016-10-24','2016-10-24','Day Swimming',30,4500.00,'5d66ddbb5c393ad15652c27434d23316'),(53,34,'2016-10-24','2016-10-24','Day Swimming',30,4500.00,'5d66ddbb5c393ad15652c27434d23316'),(52,34,'2016-10-24','2016-10-24','Day Swimming',30,4500.00,'1576509e12f1043e647f8972d6042b60'),(51,34,'2016-10-24','2016-10-24','Day Swimming',30,4500.00,'4da4d39264ae8e20ab84429154d9c48b'),(50,34,'2016-10-17','2016-10-17','Day Swimming',30,4500.00,'c5ca069479d0e00f0d6bce0e9e53c3f8'),(49,34,'2016-10-25','2016-10-25','Day Swimming',30,4500.00,'e36203baa251ff10efc1d7b09ef6c684'),(71,33,'2016-10-25','2016-10-25','Day Swimming',12,1800.00,'eb2223ac3e06521c4c3ef2def9479411');

/*Table structure for table `reservedcomplete_tbl` */

DROP TABLE IF EXISTS `reservedcomplete_tbl`;

CREATE TABLE `reservedcomplete_tbl` (
  `TransactionID` int(3) NOT NULL AUTO_INCREMENT,
  `UserID` int(3) DEFAULT NULL,
  `DateFrom` date DEFAULT NULL,
  `DateTo` date DEFAULT NULL,
  `EventName` varchar(100) DEFAULT NULL,
  `Downpayment` double(10,2) DEFAULT NULL,
  `Total` double(15,2) DEFAULT NULL,
  `RCode` varchar(32) DEFAULT NULL,
  `Status` varchar(30) DEFAULT NULL,
  `ReceiptPicture` text,
  `date_transaction` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`TransactionID`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=latin1;

/*Data for the table `reservedcomplete_tbl` */

insert  into `reservedcomplete_tbl`(`TransactionID`,`UserID`,`DateFrom`,`DateTo`,`EventName`,`Downpayment`,`Total`,`RCode`,`Status`,`ReceiptPicture`,`date_transaction`) values (25,34,'2016-10-24','2016-10-24','Day Swimming',0.00,8000.00,'071271fed0ce0dab1cfdfae073962b65','Canceled','','2016-09-26 19:29:57'),(26,34,'2016-10-24','2016-10-24','Day Swimming',0.00,9600.01,'60d692f0cdbee1797815b8e50f7f3b50','Canceled','','2016-09-26 19:41:09'),(27,34,'2016-10-17','2016-10-17','Graduation',0.00,32500.00,'a4228e4a6bc339f25a75e572b18d2bf3','Canceled','','2016-09-26 22:20:04'),(28,34,'2016-10-24','2016-10-24','Graduation',0.00,35250.00,'384194d45b7c1f8a0d3928d264e4895e','Canceled','','2016-09-27 03:20:32'),(29,34,'2016-10-24','2016-10-24','Graduation',0.00,35250.00,'384194d45b7c1f8a0d3928d264e4895e','Canceled','','2016-09-27 03:22:55'),(30,34,'0000-00-00','0000-00-00','',0.00,0.00,'949a53c223cdd055191b39c9433901db','Canceled','','2016-09-27 03:28:09'),(31,34,'0000-00-00','0000-00-00','',0.00,0.00,'8e9c3e8ae0208c45654b529cf41243ba','Canceled','','2016-09-27 03:51:40'),(32,34,'0000-00-00','0000-00-00','',0.00,0.00,'8e9c3e8ae0208c45654b529cf41243ba','Canceled','','2016-09-27 04:15:16'),(33,34,'0000-00-00','0000-00-00','',0.00,0.00,'4e3a5880a9bae366a588a37d21d10da3','Canceled','','2016-09-27 04:16:10'),(34,34,'0000-00-00','0000-00-00','',0.00,0.00,'4e3a5880a9bae366a588a37d21d10da3','Canceled','','2016-09-27 04:19:35'),(35,34,'0000-00-00','0000-00-00','',0.00,0.00,'4e3a5880a9bae366a588a37d21d10da3','Canceled','','2016-09-27 04:20:54'),(36,34,'0000-00-00','0000-00-00','',0.00,0.00,'4e3a5880a9bae366a588a37d21d10da3','Canceled','','2016-09-27 04:22:32'),(37,34,'2016-10-25','2016-10-27','Debut',0.00,72500.00,'8e0fa206fa2e21fe14b9f5f105ae7310','Canceled','','2016-09-27 04:39:12'),(38,34,'2016-10-23','2016-10-25','Graduation',0.00,143500.00,'fb28b38a5e24d2f61b0d9a130dd0ec66','Canceled','','2016-09-27 04:41:29'),(39,34,'2016-10-25','2016-10-27','Graduation',0.00,143500.00,'a5f23398ace1163d11dadb47969d76d7','Canceled','','2016-09-27 04:44:05'),(40,34,'2016-10-24','2016-10-25','Meeting',0.00,73500.00,'4f79e4db5b5623facac19e74b1963859','Canceled','','2016-09-27 04:50:56'),(41,34,'2016-10-25','2016-10-26','Meeting',0.00,75000.00,'32eaacd22de523eea3eeac8db46dbcf3','Canceled','','2016-09-27 04:56:18'),(42,34,'2016-10-25','2016-10-26','Meeting',0.00,75000.00,'32eaacd22de523eea3eeac8db46dbcf3','Canceled','','2016-09-27 04:57:56'),(43,34,'2016-10-25','2016-10-26','Graduation',0.00,75000.00,'b02973bbe5bd873e2da7f39115fdaf96','Canceled','','2016-09-27 04:58:34'),(44,34,'2016-10-25','2016-10-25','Graduation',0.00,0.00,'75f85c43e0c4cb52cb0479d24dee9cae','Canceled','','2016-09-27 04:59:32'),(45,34,'2016-10-24','2016-10-24','Graduation',0.00,2500.00,'82e1595ad6e4e5781c9bec0a312de36d','Canceled','','2016-09-27 05:01:37'),(46,34,'2016-10-24','2016-10-24','Graduation',0.00,33500.00,'b80168c8af83e3756dee46bd3a07b6c5','Canceled','','2016-09-27 05:03:49'),(47,34,'2016-10-25','2016-10-26','Graduation',0.00,57000.00,'4f08827ea7abc7c691497a60eafead31','Canceled','','2016-09-27 05:04:56'),(48,34,'2016-10-25','2016-10-26','Birthday',0.00,57000.00,'c23d52e42be2fedfdc643536bd130661','Canceled','','2016-09-27 05:06:07'),(49,34,'2016-10-25','2016-10-26','Graduation',0.00,53500.00,'a198b6589c36a7ad63eb50c23db98af1','Canceled','','2016-09-27 05:07:09'),(50,34,'2016-10-25','2016-10-27','Wedding',0.00,154000.00,'10801467c59be5a7695cffa17400d30c','Canceled','','2016-09-27 05:07:58'),(51,34,'0000-00-00','0000-00-00','',0.00,0.00,'45a4775cc33c171358512abc6b264b2f','Canceled','','2016-09-27 05:16:11'),(52,34,'0000-00-00','0000-00-00','',0.00,0.00,'45a4775cc33c171358512abc6b264b2f','Canceled','','2016-09-27 05:16:55'),(53,34,'2016-10-25','2016-10-25','Graduation',0.00,0.00,'45a4775cc33c171358512abc6b264b2f','Canceled','','2016-09-27 05:17:14'),(54,34,'2016-10-25','2016-10-25','Graduation',0.00,0.00,'ea2d9e1544b7b8c8177d7a5e621a1587','Canceled','','2016-09-27 05:18:34'),(55,34,'2016-10-25','2016-10-25','Graduation',0.00,3200.00,'ea2d9e1544b7b8c8177d7a5e621a1587','Canceled','','2016-09-27 05:23:59'),(56,34,'2016-10-25','2016-10-25','Graduation',0.00,3200.00,'ea2d9e1544b7b8c8177d7a5e621a1587','Canceled','','2016-09-27 05:26:50'),(57,34,'2016-10-25','2016-10-25','Graduation',0.00,3200.00,'ea2d9e1544b7b8c8177d7a5e621a1587','Canceled','','2016-09-27 05:27:39'),(58,34,'2016-10-25','2016-10-25','Graduation',0.00,14950.00,'ea2d9e1544b7b8c8177d7a5e621a1587','Canceled','','2016-09-27 05:29:20'),(59,34,'2016-10-25','0000-00-00','Graduation',0.00,14950.00,'ea2d9e1544b7b8c8177d7a5e621a1587','Canceled','','2016-09-27 05:32:07'),(60,34,'2016-10-25','2016-10-25','Graduation',0.00,14950.00,'ea2d9e1544b7b8c8177d7a5e621a1587','Canceled','','2016-09-27 05:32:22'),(61,34,'2016-10-25','2016-10-25','Graduation',0.00,14950.00,'ea2d9e1544b7b8c8177d7a5e621a1587','Canceled','','2016-09-27 05:32:57'),(62,34,'2016-10-25','2016-10-25','Graduation',0.00,14950.00,'ea2d9e1544b7b8c8177d7a5e621a1587','Canceled','','2016-09-27 05:33:25'),(63,34,'2016-10-25','2016-10-25','Graduation',0.00,14950.00,'ea2d9e1544b7b8c8177d7a5e621a1587','Canceled','','2016-09-27 05:33:33'),(64,34,'2016-10-25','2016-10-25','Graduation',0.00,14950.00,'ea2d9e1544b7b8c8177d7a5e621a1587','Canceled','','2016-09-27 05:34:09'),(65,34,'2016-10-25','2016-10-25','Graduation',0.00,14950.00,'ea2d9e1544b7b8c8177d7a5e621a1587','Canceled','','2016-09-27 05:34:37'),(66,34,'2016-10-25','2016-10-25','Graduation',0.00,14950.00,'ea2d9e1544b7b8c8177d7a5e621a1587','Canceled','','2016-09-27 05:35:27');

/*Table structure for table `resortreserved_tbl` */

DROP TABLE IF EXISTS `resortreserved_tbl`;

CREATE TABLE `resortreserved_tbl` (
  `ID` int(3) NOT NULL AUTO_INCREMENT,
  `Package` varchar(100) DEFAULT NULL,
  `Description` text,
  `EventName` varbinary(100) DEFAULT NULL,
  `CName` varchar(100) DEFAULT NULL,
  `Theme` varchar(300) DEFAULT NULL,
  `Motif` varchar(300) DEFAULT NULL,
  `Guest` int(3) DEFAULT NULL,
  `RCode` varchar(32) DEFAULT NULL,
  `Price` double(10,2) DEFAULT NULL,
  `DateFrom` date NOT NULL,
  `DateTo` date DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

/*Data for the table `resortreserved_tbl` */

insert  into `resortreserved_tbl`(`ID`,`Package`,`Description`,`EventName`,`CName`,`Theme`,`Motif`,`Guest`,`RCode`,`Price`,`DateFrom`,`DateTo`) values (13,'Package A','Exclusive (Day Time)\r\n9am - 5pm','Graduation','Mark Paul','Power Ranger','Any color',30,'a4228e4a6bc339f25a75e572b18d2bf3',30000.00,'2016-10-17','2016-10-17'),(14,'Package A','Exclusive (Day Time)\r\n9am - 5pm','Graduation','Mark Paul','Power Ranger','Any color',30,'384194d45b7c1f8a0d3928d264e4895e',30000.00,'2016-10-24','2016-10-24'),(15,'Package C','Exclusive (24 Hours) Starting from 9am','Meeting','Mark','Power Ranger','Any color',30,'afbc559f44781de4268be01978efcf90',70000.00,'2016-10-25','2016-10-27'),(16,'Package C','Exclusive (24 Hours) Starting from 9am','Meeting','Mark','Power Ranger','Any color',30,'2cb0fc444c379daff817ec4427f47c81',70000.00,'2016-10-25','2016-10-27'),(17,'Package C','Exclusive (24 Hours) Starting from 9am','Meeting','Mark','Power Ranger','Any color',30,'69e688ef52b0dff52a0eff97be0d060f',70000.00,'2016-10-24','2016-10-26'),(18,'Package C','Exclusive (24 Hours) Starting from 9am','Graduation','Mark Paul','Power Ranger','Any color',30,'03d43aaf1acd92b29559b3894e95a026',70000.00,'2016-10-25','2016-10-27'),(19,'Package C','Exclusive (24 Hours) Starting from 9am','Wedding','Mark Paul','Power Ranger','Any color',30,'48a8da86eaf90a35bff7855ba9e1a984',70000.00,'2016-10-25','2016-10-27'),(20,'Package C','Exclusive (24 Hours) Starting from 9am','Debut','Mark Paul','Power Ranger','Any color',30,'8e0fa206fa2e21fe14b9f5f105ae7310',70000.00,'2016-10-25','2016-10-27'),(21,'Package C','Exclusive (24 Hours) Starting from 9am','Graduation','Mark Paul','Power Ranger','Any color',30,'fb28b38a5e24d2f61b0d9a130dd0ec66',140000.00,'2016-10-23','2016-10-25'),(22,'Package C','Exclusive (24 Hours) Starting from 9am','Graduation','Mark Paul','Power Ranger','Any color',30,'a5f23398ace1163d11dadb47969d76d7',140000.00,'2016-10-25','2016-10-27'),(23,'Package C','Exclusive (24 Hours) Starting from 9am','Meeting','Mark Paul','Power Ranger','Any color',30,'4f79e4db5b5623facac19e74b1963859',70000.00,'2016-10-24','2016-10-25'),(24,'Package C','Exclusive (24 Hours) Starting from 9am','Meeting','Mark','Power Ranger','Any color',30,'32eaacd22de523eea3eeac8db46dbcf3',70000.00,'2016-10-25','2016-10-26'),(25,'Package C','Exclusive (24 Hours) Starting from 9am','Graduation','Mark Paul','Power Ranger','Any color',30,'b02973bbe5bd873e2da7f39115fdaf96',70000.00,'2016-10-25','2016-10-26'),(26,'Package A','Exclusive (Day Time)\r\n9am - 5pm','Graduation','Mark Paul','Power Ranger','Any color',30,'75f85c43e0c4cb52cb0479d24dee9cae',0.00,'2016-10-25','2016-10-25'),(27,'Package A','Exclusive (Day Time)\r\n9am - 5pm','Graduation','Mark Paul','Power Ranger','Any color',30,'82e1595ad6e4e5781c9bec0a312de36d',0.00,'2016-10-24','2016-10-24'),(28,'Package A','Exclusive (Day Time)\r\n9am - 5pm','Graduation','Mark Paul','Power Ranger','Any color',30,'b80168c8af83e3756dee46bd3a07b6c5',30000.00,'2016-10-24','2016-10-24'),(29,'Package B','Exclusive (Night Time)\r\n6pm - 2am','Graduation','Mark Paul','Power Ranger','Any color',6,'4f08827ea7abc7c691497a60eafead31',50000.00,'2016-10-25','2016-10-26'),(30,'Package B','Exclusive (Night Time)\r\n6pm - 2am','Birthday','Mark Paul','Power Ranger','Any color',30,'c23d52e42be2fedfdc643536bd130661',50000.00,'2016-10-25','2016-10-26'),(31,'Package B','Exclusive (Night Time)\r\n6pm - 2am','Graduation','Mark Paul','Power Ranger','Any color',30,'a198b6589c36a7ad63eb50c23db98af1',50000.00,'2016-10-25','2016-10-26'),(32,'Package C','Exclusive (24 Hours) Starting from 9am','Wedding','Mark Paul','Power Ranger','Any color',30,'10801467c59be5a7695cffa17400d30c',140000.00,'2016-10-25','2016-10-27');

/*Table structure for table `room_tbl` */

DROP TABLE IF EXISTS `room_tbl`;

CREATE TABLE `room_tbl` (
  `Rid` int(3) NOT NULL AUTO_INCREMENT,
  `RType` varchar(100) DEFAULT NULL,
  `RDescription` text,
  `Capacity` varchar(100) DEFAULT NULL,
  `Quantity` int(3) DEFAULT NULL,
  `RImage` longblob,
  `Features` text,
  `Price` double(10,2) DEFAULT NULL,
  `timeav` int(11) DEFAULT NULL,
  PRIMARY KEY (`Rid`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

/*Data for the table `room_tbl` */

insert  into `room_tbl`(`Rid`,`RType`,`RDescription`,`Capacity`,`Quantity`,`RImage`,`Features`,`Price`,`timeav`) values (7,'Family Superior Room','Do you want to be one of use? Sure you want, because we are an awesome team!. Here we work hard every day to craft pixel perfect sites.','10',3,'Fs1.jpg','2 Double Deck\r\n1 Twin Size Bed\r\n1 SofaBed\r\n2 Tables\r\n1 Sala Set\r\n1 TV\r\n1 Aircon\r\n1 Comfort Room\r\n   Heater\r\n   Shower',1000.00,72),(8,'Family Deluxe Room','Do you want to be one of use? Sure you want, because we are an awesome team!. Here we work hard every day to craft pixel perfect sites.','10',2,'Fdr1.jpg','1 Double Deck\r\n1 Twin Size Bed\r\n2 Tables\r\nAircon\r\n1 Comfort Room\r\nHeater',1000.00,48),(9,'Twin Singles Room','Do you want to be one of use? Sure you want, because we are an awesome team!. Here we work hard every day to craft pixel perfect sites.','5',3,'ts1.jpg','1 Twin Size Bed\r\n1 Tabless\r\nAircon\r\n1 Comfort Room\r\nHeater\r\n\r\n\r\n\r\n',800.00,72);

/*Table structure for table `roomhour_tbl` */

DROP TABLE IF EXISTS `roomhour_tbl`;

CREATE TABLE `roomhour_tbl` (
  `HourID` int(3) NOT NULL AUTO_INCREMENT,
  `Hour` int(3) DEFAULT NULL,
  PRIMARY KEY (`HourID`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `roomhour_tbl` */

insert  into `roomhour_tbl`(`HourID`,`Hour`) values (1,6),(2,12),(3,24),(4,0),(5,0),(6,0),(7,0),(8,0),(9,0),(10,0),(11,0),(12,0);

/*Table structure for table `roomno_tbl` */

DROP TABLE IF EXISTS `roomno_tbl`;

CREATE TABLE `roomno_tbl` (
  `RNoID` int(3) NOT NULL AUTO_INCREMENT,
  `RNoType` varchar(100) DEFAULT NULL,
  `Rid` int(11) DEFAULT NULL,
  PRIMARY KEY (`RNoID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `roomno_tbl` */

insert  into `roomno_tbl`(`RNoID`,`RNoType`,`Rid`) values (1,'FS-1',NULL),(2,'FS-2',NULL),(3,NULL,NULL);

/*Table structure for table `roomrates_tbl` */

DROP TABLE IF EXISTS `roomrates_tbl`;

CREATE TABLE `roomrates_tbl` (
  `RatesID` int(3) NOT NULL AUTO_INCREMENT,
  `HourID` int(3) DEFAULT NULL,
  `Rid` int(3) DEFAULT NULL,
  `Price` double(10,2) DEFAULT NULL,
  PRIMARY KEY (`RatesID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `roomrates_tbl` */

insert  into `roomrates_tbl`(`RatesID`,`HourID`,`Rid`,`Price`) values (1,3,7,3400.00),(2,2,7,1700.00),(3,3,8,2400.00),(4,2,8,1250.00),(5,3,9,1200.00),(6,2,9,650.00),(7,1,9,500.00);

/*Table structure for table `schedule_tbl` */

DROP TABLE IF EXISTS `schedule_tbl`;

CREATE TABLE `schedule_tbl` (
  `Sid` int(3) NOT NULL AUTO_INCREMENT,
  `Schedule` varchar(50) DEFAULT NULL,
  `Time` varchar(50) DEFAULT NULL,
  `Price` double(7,2) DEFAULT NULL,
  PRIMARY KEY (`Sid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `schedule_tbl` */

insert  into `schedule_tbl`(`Sid`,`Schedule`,`Time`,`Price`) values (1,'Day Swimming','9:00 am - 3:00 pm',150.00),(2,'Night Swimming','6:00 pm - 12:00 am',200.00),(3,'Over Night','7:00 pm - 3:00 am',250.00);

/*Table structure for table `stime` */

DROP TABLE IF EXISTS `stime`;

CREATE TABLE `stime` (
  `STID` int(3) NOT NULL AUTO_INCREMENT,
  `Types` varchar(50) DEFAULT NULL,
  `Time` varchar(50) DEFAULT NULL,
  `Price` double(7,2) DEFAULT NULL,
  PRIMARY KEY (`STID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `stime` */

insert  into `stime`(`STID`,`Types`,`Time`,`Price`) values (1,'Day Swimming','9:00 am - 3:00 pm',150.00),(2,'Night Swimming','6:00 pm - 12:00 mn',200.00),(3,'Overnight Swimming','7:00 pm - 3:00 am',250.00);

/*Table structure for table `terms_tbl` */

DROP TABLE IF EXISTS `terms_tbl`;

CREATE TABLE `terms_tbl` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `terms` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `terms_tbl` */

insert  into `terms_tbl`(`id`,`terms`) values (1,'The customer must pay 20% of the total amount of bill to confirm their reservation.'),(2,'Rescheduling of the reserved day can\'t be done if there\'s only 3 days prior to the day.'),(3,'Rescheduling must only be done TWICE.'),(4,'Cancellation of the reserved day can\'t be done if there\'s only 10 days left prior to the day.'),(5,'Reservation must be 2 weeks before the desired day.'),(6,'The customer\'s deposit is deducted from the total bill.'),(7,'The customer\'s deposit is non - refundable and will be forfeited in any case of cancellation of the event.'),(10,'Bawal pangit');

/*Table structure for table `test` */

DROP TABLE IF EXISTS `test`;

CREATE TABLE `test` (
  `testID` int(11) NOT NULL AUTO_INCREMENT,
  `datesss` datetime DEFAULT NULL,
  PRIMARY KEY (`testID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `test` */

insert  into `test`(`testID`,`datesss`) values (1,'2016-09-28 00:00:00');

/*Table structure for table `user_tbl` */

DROP TABLE IF EXISTS `user_tbl`;

CREATE TABLE `user_tbl` (
  `UserID` int(5) NOT NULL AUTO_INCREMENT,
  `FName` varchar(25) DEFAULT NULL,
  `LName` varchar(25) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Username` varchar(30) DEFAULT NULL,
  `Password` varchar(32) DEFAULT NULL,
  `UserTypeID` int(2) DEFAULT NULL,
  `UImage` longblob,
  PRIMARY KEY (`UserID`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

/*Data for the table `user_tbl` */

insert  into `user_tbl`(`UserID`,`FName`,`LName`,`Email`,`Username`,`Password`,`UserTypeID`,`UImage`) values (1,'Mark','Escario','yetalone_715@yahoo.com','markpaul','8a3450fc841c328457847a1ceb441967',1,'e3.jpg'),(16,'Ardwin Ivan','Ponce','pons@yahoo.com','Ponce','ea82410c7a9991816b5eeeebe195e20a',2,NULL),(23,'qwerty','qwerty','qwerty21@yahoo.com','qwerty','d8578edf8458ce06fbc5bb76a58c5ca4',0,NULL),(24,'asd','asd','asd@yahoo.com','asdasd','a8f5f167f44f4964e6c998dee827110c',0,NULL),(32,'Lovelyn','Predonio','lovelyn@yahoo.com','lovelyn','2c7bf6330024ea98eff61c82978709bb',0,NULL),(33,'Eugene','Ravina','raven@yahoo.com','eugene','9741da9f7cdd416b0c4b63811770bd6e',0,NULL),(34,'Mark Paul','Escario','frozen.mark.16@yahoo.com','markpaul','d087f738d6b2bd7f894e11b2a303330c',0,NULL),(35,'Manechie','Rafols','rafolsmanechie@yahoo.com','manechie123','a086a3a037b089ef58a5d9a3b1239a3a',0,NULL),(36,'Manechie','Rafols','rafols123@yahoo.com','manechie123','a086a3a037b089ef58a5d9a3b1239a3a',0,NULL),(37,'Manechie','Rafols','rafols12@yahoo.com','chieos','3388e1e4f5999557e16ad55297f04248',0,NULL),(38,'Manechie','Rafols','rafols11@yahoo.com','rafols11','0b9d4c6292ab04a06574c4a87427e496',0,NULL),(39,'Manechie','Rafols','chieos@gmail.com','chieos','3388e1e4f5999557e16ad55297f04248',0,NULL),(40,'Manechie','Rafols','raffychie@yahoo.com','rafols01','28dfdbfd1db14bf36a4165882949b9e9',0,NULL);

/*Table structure for table `usertype_tbl` */

DROP TABLE IF EXISTS `usertype_tbl`;

CREATE TABLE `usertype_tbl` (
  `UserTypeID` int(2) NOT NULL AUTO_INCREMENT,
  `Position` varchar(30) DEFAULT NULL,
  `UserLevel` varchar(30) DEFAULT NULL,
  `User` varchar(30) DEFAULT NULL,
  `Home` varchar(30) DEFAULT NULL,
  `Pools` varchar(30) DEFAULT NULL,
  `Cottage` varchar(30) DEFAULT NULL,
  `FunctionHall` varchar(30) DEFAULT NULL,
  `Catering` varchar(30) DEFAULT NULL,
  `Rooms` varchar(30) DEFAULT NULL,
  `Gallery` varchar(30) DEFAULT NULL,
  `Contact` varchar(30) DEFAULT NULL,
  `FAQs` varchar(30) DEFAULT NULL,
  `TermAndCondition` varchar(30) DEFAULT NULL,
  `PendingReq` varchar(30) DEFAULT NULL,
  `Register` varchar(30) DEFAULT NULL,
  `CottageAvailability` varchar(30) DEFAULT NULL,
  `RoomAvailability` varchar(30) DEFAULT NULL,
  `FHAvailability` varchar(30) DEFAULT NULL,
  `Reports` varchar(30) DEFAULT NULL,
  `Auditlog` varchar(30) DEFAULT NULL,
  `BackupAndRecovery` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`UserTypeID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `usertype_tbl` */

insert  into `usertype_tbl`(`UserTypeID`,`Position`,`UserLevel`,`User`,`Home`,`Pools`,`Cottage`,`FunctionHall`,`Catering`,`Rooms`,`Gallery`,`Contact`,`FAQs`,`TermAndCondition`,`PendingReq`,`Register`,`CottageAvailability`,`RoomAvailability`,`FHAvailability`,`Reports`,`Auditlog`,`BackupAndRecovery`) values (1,'Admin','TRUE','TRUE','TRUE','TRUE','TRUE','TRUE','TRUE','TRUE','TRUE','TRUE','TRUE','TRUE','TRUE','TRUE','TRUE','TRUE','TRUE','TRUE','TRUE','TRUE'),(2,'Manager','FALSE','FALSE','FALSE','FALSE','FALSE','TRUE','FALSE','FALSE','FALSE','FALSE','FALSE','FALSE','TRUE','TRUE','TRUE','TRUE','TRUE','FALSE','FALSE','FALSE');

/*Table structure for table `venue_tbl` */

DROP TABLE IF EXISTS `venue_tbl`;

CREATE TABLE `venue_tbl` (
  `VenID` int(3) NOT NULL AUTO_INCREMENT,
  `VenueName` varchar(100) DEFAULT NULL,
  `id` int(3) DEFAULT NULL,
  `Price` double(10,2) DEFAULT NULL,
  PRIMARY KEY (`VenID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `venue_tbl` */

insert  into `venue_tbl`(`VenID`,`VenueName`,`id`,`Price`) values (1,'Garden',1,275.00),(2,'Executive',1,375.00),(3,'Garden',2,325.00),(4,'Executive',2,375.00),(5,'Function Room(2nd floor)',2,375.00);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
