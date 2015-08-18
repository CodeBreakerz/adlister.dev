# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.44-0ubuntu0.14.04.1-log)
# Database: auction_house_db
# Generation Time: 2015-08-18 15:04:43 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table items
# ------------------------------------------------------------

DROP TABLE IF EXISTS `items`;

CREATE TABLE "items" (
  "id" int(10) unsigned NOT NULL AUTO_INCREMENT,
  "item_name" varchar(50) NOT NULL,
  "item_type" varchar(50) NOT NULL,
  "date_listed" date NOT NULL,
  "price" varchar(10000) NOT NULL,
  "description" varchar(2500) NOT NULL,
  "item_number" varchar(200) DEFAULT NULL,
  PRIMARY KEY ("id")
);

LOCK TABLES `items` WRITE;
/*!40000 ALTER TABLE `items` DISABLE KEYS */;

INSERT INTO `items` (`id`, `item_name`, `item_type`, `date_listed`, `price`, `description`, `item_number`)
VALUES
	(1,'Thuderfury, Blessed Blade of the Windseeker','Weapon','1902-05-22','150.00','Did someone say Thunderfury?  Legendary! ','19019'),
	(2,'Rusty Dagger','Weapon','1934-05-30','1.00','Causes tetanus ','92976'),
	(3,'Leather Breeches','Armor','1921-03-04','1.00','Party Pants! ','2962'),
	(4,'Comfortable Leather Hat','Armor','1899-03-02','1.00','Pimpin ','8174'),
	(11,'Nithramus, the All-Seer','Finger','2015-08-18','50','&quot;One of the three Savage Hallows created by Archmage Khadgar.&quot;','124635'),
	(12,'Spellbound Runic Band of the All-Seeing Eye','Finger','2015-08-18','50','\'I see you\'','118306'),
	(13,'Worldbreaker\'s Resolve','Trinket','2015-08-18','40','\'Breaks through time and space\'','124523'),
	(14,'Savage Burnished Essence','Gift','2015-08-18','100','Upgrades item level','127730'),
	(15,'Chipped Soul Prism','Trinket','2015-08-18','40','Dropped by : Supreme Lord Kazzak','124545'),
	(16,'Gloves of the Arcanic Conclave','Hands','2015-08-18','21','Tier 18 Mage gear','124154'),
	(17,'Cowl of the Arcanic Conclave','Head','2015-08-18','33','Tier 18 Mage gear','124160'),
	(18,'Savage Burnished Essence','Gift','2015-08-18','100','Upgrades item level','127730'),
	(19,'Mantle of the Arcanic Conclave','Shoulders','2015-08-18','35','Tier 18 Mage Gear','124177'),
	(20,'Robe of the Arcanic Conclave','Chest','2015-08-18','47','Tier 18 Mage Gear','124171'),
	(21,'Pantaloons of the Arcanic Conclave','Legs','2015-08-18','50','Tier 18 Mage Gear','124165');

/*!40000 ALTER TABLE `items` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
