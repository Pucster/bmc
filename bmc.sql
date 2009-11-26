# HeidiSQL Dump 
#
# --------------------------------------------------------
# Host:                         127.0.0.1
# Database:                     bmc
# Server version:               5.1.41-community
# Server OS:                    Win32
# Target compatibility:         ANSI SQL
# HeidiSQL version:             4.0
# Date/time:                    11/26/2009 9:05:43 PM
# --------------------------------------------------------

/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ANSI,NO_BACKSLASH_ESCAPES';*/
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;*/


#
# Database structure for database 'bmc'
#

CREATE DATABASE /*!32312 IF NOT EXISTS*/ "bmc" /*!40100 DEFAULT CHARACTER SET latin1 */;

USE "bmc";


#
# Table structure for table 'albums'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ "albums" (
  "id" tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  "name" varchar(50) NOT NULL,
  "description" varchar(250) DEFAULT NULL,
  "owner" tinyint(3) unsigned NOT NULL,
  "front_image" tinyint(3) unsigned DEFAULT NULL,
  PRIMARY KEY ("id"),
  UNIQUE KEY "id" ("id"),
  KEY "id_2" ("id")
);



#
# Dumping data for table 'albums'
#

# No data found.



#
# Table structure for table 'categories'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ "categories" (
  "id" tinyint(3) unsigned NOT NULL,
  "name" varchar(50) NOT NULL,
  UNIQUE KEY "id" ("id"),
  KEY "id_2" ("id")
);



#
# Dumping data for table 'categories'
#

LOCK TABLES "categories" WRITE;
/*!40000 ALTER TABLE "categories" DISABLE KEYS;*/
REPLACE INTO "categories" ("id", "name") VALUES
	(1,'homepage_links');
/*!40000 ALTER TABLE "categories" ENABLE KEYS;*/
UNLOCK TABLES;


#
# Table structure for table 'homepage_links'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ "homepage_links" (
  "id" tinyint(3) unsigned NOT NULL,
  "name" varchar(50) NOT NULL,
  "link" varchar(250) NOT NULL,
  "image" varchar(50) NOT NULL,
  UNIQUE KEY "id" ("id"),
  KEY "id_2" ("id")
);



#
# Dumping data for table 'homepage_links'
#

LOCK TABLES "homepage_links" WRITE;
/*!40000 ALTER TABLE "homepage_links" DISABLE KEYS;*/
REPLACE INTO "homepage_links" ("id", "name", "link", "image") VALUES
	(1,'News','index.php','news');
REPLACE INTO "homepage_links" ("id", "name", "link", "image") VALUES
	(2,'About','about.php','about');
REPLACE INTO "homepage_links" ("id", "name", "link", "image") VALUES
	(3,'Members','members.php','members');
REPLACE INTO "homepage_links" ("id", "name", "link", "image") VALUES
	(4,'Meetings','meetings.php','meetings');
REPLACE INTO "homepage_links" ("id", "name", "link", "image") VALUES
	(5,'Various','various.php','various');
REPLACE INTO "homepage_links" ("id", "name", "link", "image") VALUES
	(6,'Forum','forum.php','forum');
REPLACE INTO "homepage_links" ("id", "name", "link", "image") VALUES
	(7,'Album','album.php','album');
/*!40000 ALTER TABLE "homepage_links" ENABLE KEYS;*/
UNLOCK TABLES;


#
# Table structure for table 'images'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ "images" (
  "id" tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  "name" varchar(50) NOT NULL,
  "alt" varchar(50) DEFAULT NULL,
  "path" varchar(250) DEFAULT NULL,
  "owner" tinyint(3) unsigned NOT NULL DEFAULT '0',
  "album_id" tinyint(3) unsigned DEFAULT NULL,
  "news_id" tinyint(3) unsigned DEFAULT NULL,
  PRIMARY KEY ("id"),
  UNIQUE KEY "id" ("id"),
  KEY "id_2" ("id")
) AUTO_INCREMENT=20;



#
# Dumping data for table 'images'
#

LOCK TABLES "images" WRITE;
/*!40000 ALTER TABLE "images" DISABLE KEYS;*/
REPLACE INTO "images" ("id", "name", "alt", "path", "owner", "album_id", "news_id") VALUES
	(1,'382348365.jpg',NULL,'images',0,NULL,NULL);
REPLACE INTO "images" ("id", "name", "alt", "path", "owner", "album_id", "news_id") VALUES
	(2,'546139373.jpg',NULL,'images',0,NULL,NULL);
REPLACE INTO "images" ("id", "name", "alt", "path", "owner", "album_id", "news_id") VALUES
	(3,'546139373.jpg',NULL,'images',0,NULL,NULL);
REPLACE INTO "images" ("id", "name", "alt", "path", "owner", "album_id", "news_id") VALUES
	(17,'1259076371.jpg',NULL,'images',0,NULL,NULL);
REPLACE INTO "images" ("id", "name", "alt", "path", "owner", "album_id", "news_id") VALUES
	(18,'1259076581.JPG',NULL,'images',0,NULL,NULL);
REPLACE INTO "images" ("id", "name", "alt", "path", "owner", "album_id", "news_id") VALUES
	(19,'1259077264.JPG',NULL,'images',0,NULL,NULL);
/*!40000 ALTER TABLE "images" ENABLE KEYS;*/
UNLOCK TABLES;


#
# Table structure for table 'meetings'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ "meetings" (
  "id" tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  "year" mediumint(8) unsigned NOT NULL,
  PRIMARY KEY ("id"),
  UNIQUE KEY "id" ("id"),
  KEY "id_2" ("id")
) AUTO_INCREMENT=6;



#
# Dumping data for table 'meetings'
#

LOCK TABLES "meetings" WRITE;
/*!40000 ALTER TABLE "meetings" DISABLE KEYS;*/
REPLACE INTO "meetings" ("id", "year") VALUES
	(1,'2006');
REPLACE INTO "meetings" ("id", "year") VALUES
	(2,'2007');
REPLACE INTO "meetings" ("id", "year") VALUES
	(3,'2008');
REPLACE INTO "meetings" ("id", "year") VALUES
	(4,'2009');
REPLACE INTO "meetings" ("id", "year") VALUES
	(5,'2010');
/*!40000 ALTER TABLE "meetings" ENABLE KEYS;*/
UNLOCK TABLES;


#
# Table structure for table 'members'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ "members" (
  "id" tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  "name" varchar(50) NOT NULL,
  "nickname" varchar(50) DEFAULT NULL,
  "location" varchar(50) DEFAULT NULL,
  "profile_image" tinyint(3) unsigned NOT NULL,
  "ride" varchar(50) DEFAULT NULL,
  "start_date" varchar(50) DEFAULT NULL,
  PRIMARY KEY ("id"),
  UNIQUE KEY "id" ("id"),
  KEY "id_2" ("id")
) AUTO_INCREMENT=15;



#
# Dumping data for table 'members'
#

LOCK TABLES "members" WRITE;
/*!40000 ALTER TABLE "members" DISABLE KEYS;*/
REPLACE INTO "members" ("id", "name", "nickname", "location", "profile_image", "ride", "start_date") VALUES
	(1,'Andrei Seredenciuc','Dracu','Radauti',1,'Ducati Indiana','Fondator');
REPLACE INTO "members" ("id", "name", "nickname", "location", "profile_image", "ride", "start_date") VALUES
	(2,'Eugen Cocalea','Puc','Iasi',2,'Kawasaki Vulcan Drifter 1500','2007');
REPLACE INTO "members" ("id", "name", "nickname", "location", "profile_image", "ride", "start_date") VALUES
	(3,'Vasile Vasilescu','D','SD',3,'DA','4332');
REPLACE INTO "members" ("id", "name", "nickname", "location", "profile_image", "ride", "start_date") VALUES
	(4,'Ion Ionescu','DeLaBrad','dfda',4,'fdsfs','r432');
REPLACE INTO "members" ("id", "name", "nickname", "location", "profile_image", "ride", "start_date") VALUES
	(5,'Gica Contra','Anti','dass',5,'fdasfswre','r4');
REPLACE INTO "members" ("id", "name", "nickname", "location", "profile_image", "ride", "start_date") VALUES
	(12,'fsd','fsfs','fsfds',17,'fsfds','fdsdsfdsf');
REPLACE INTO "members" ("id", "name", "nickname", "location", "profile_image", "ride", "start_date") VALUES
	(13,'43','fs','fsfs',18,'fsfsd','fdsfsd');
REPLACE INTO "members" ("id", "name", "nickname", "location", "profile_image", "ride", "start_date") VALUES
	(14,'vasile','vasea','barlad',19,'maica-sa','2000');
/*!40000 ALTER TABLE "members" ENABLE KEYS;*/
UNLOCK TABLES;


#
# Table structure for table 'news'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ "news" (
  "id" tinyint(3) unsigned NOT NULL,
  "title" varchar(250) NOT NULL,
  "content" longtext NOT NULL,
  "category_id" tinyint(3) unsigned NOT NULL,
  UNIQUE KEY "id" ("id"),
  KEY "id_2" ("id")
);



#
# Dumping data for table 'news'
#

LOCK TABLES "news" WRITE;
/*!40000 ALTER TABLE "news" DISABLE KEYS;*/
REPLACE INTO "news" ("id", "title", "content", "category_id") VALUES
	(1,'Am luat bacu','Ana are mere',1);
REPLACE INTO "news" ("id", "title", "content", "category_id") VALUES
	(2,'Iar am luat bacu','Ana nu mai are mere!',1);
/*!40000 ALTER TABLE "news" ENABLE KEYS;*/
UNLOCK TABLES;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE;*/
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;*/
