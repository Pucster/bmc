# HeidiSQL Dump 
#
# --------------------------------------------------------
# Host:                         127.0.0.1
# Database:                     bmc
# Server version:               5.1.41-community
# Server OS:                    Win32
# Target compatibility:         ANSI SQL
# HeidiSQL version:             4.0
# Date/time:                    12/6/2009 5:04:01 PM
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
  "owner" tinyint(3) unsigned NOT NULL DEFAULT '0',
  "front_image" tinyint(3) unsigned DEFAULT NULL,
  "path" varchar(50) DEFAULT NULL,
  "hidden" tinyint(3) unsigned DEFAULT '0',
  PRIMARY KEY ("id"),
  UNIQUE KEY "id" ("id"),
  KEY "id_2" ("id")
) AUTO_INCREMENT=11;



#
# Dumping data for table 'albums'
#

LOCK TABLES "albums" WRITE;
/*!40000 ALTER TABLE "albums" DISABLE KEYS;*/
REPLACE INTO "albums" ("id", "name", "description", "owner", "front_image", "path", "hidden") VALUES
	(1,'Albumu 1','Description',0,54,'album1',0);
REPLACE INTO "albums" ("id", "name", "description", "owner", "front_image", "path", "hidden") VALUES
	(6,'Albumu 2','dedededede',0,45,'album2',0);
REPLACE INTO "albums" ("id", "name", "description", "owner", "front_image", "path", "hidden") VALUES
	(7,'test 123','efere',0,47,'test_123',0);
REPLACE INTO "albums" ("id", "name", "description", "owner", "front_image", "path", "hidden") VALUES
	(8,'members','members',0,1,'members',1);
REPLACE INTO "albums" ("id", "name", "description", "owner", "front_image", "path", "hidden") VALUES
	(9,'re3','rere',0,46,'rerere',0);
REPLACE INTO "albums" ("id", "name", "description", "owner", "front_image", "path", "hidden") VALUES
	(10,'album_de_test','desc',0,71,'album_de_test',0);
/*!40000 ALTER TABLE "albums" ENABLE KEYS;*/
UNLOCK TABLES;


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
  "position" tinyint(3) unsigned NOT NULL,
  UNIQUE KEY "id" ("id"),
  KEY "id_2" ("id")
);



#
# Dumping data for table 'homepage_links'
#

LOCK TABLES "homepage_links" WRITE;
/*!40000 ALTER TABLE "homepage_links" DISABLE KEYS;*/
REPLACE INTO "homepage_links" ("id", "name", "link", "image", "position") VALUES
	(1,'News','news.php','news',1);
REPLACE INTO "homepage_links" ("id", "name", "link", "image", "position") VALUES
	(2,'About','about.php','about',0);
REPLACE INTO "homepage_links" ("id", "name", "link", "image", "position") VALUES
	(3,'Members','members.php','members',2);
REPLACE INTO "homepage_links" ("id", "name", "link", "image", "position") VALUES
	(4,'Meetings','meetings.php','meetings',3);
REPLACE INTO "homepage_links" ("id", "name", "link", "image", "position") VALUES
	(5,'Various','various.php','various',7);
REPLACE INTO "homepage_links" ("id", "name", "link", "image", "position") VALUES
	(6,'Forum','forum.php','forum',9);
REPLACE INTO "homepage_links" ("id", "name", "link", "image", "position") VALUES
	(7,'Album','images.php','album',5);
/*!40000 ALTER TABLE "homepage_links" ENABLE KEYS;*/
UNLOCK TABLES;


#
# Table structure for table 'images'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ "images" (
  "id" tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  "name" varchar(50) NOT NULL,
  "alt" varchar(50) DEFAULT NULL,
  "owner" tinyint(3) unsigned NOT NULL DEFAULT '0',
  "album_id" tinyint(3) unsigned DEFAULT NULL,
  "news_id" tinyint(3) unsigned DEFAULT NULL,
  PRIMARY KEY ("id"),
  UNIQUE KEY "id" ("id"),
  KEY "id_2" ("id")
) AUTO_INCREMENT=106;



#
# Dumping data for table 'images'
#

LOCK TABLES "images" WRITE;
/*!40000 ALTER TABLE "images" DISABLE KEYS;*/
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(1,'382348365.jpg','Ciresica are',0,8,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(2,'546139373.jpg','mere ciresel',0,8,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(17,'1259076371.jpg','cere ciresica2',0,1,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(18,'1259076581.JPG','nu setetete',0,1,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(19,'1259077264.JPG','-dura ciresel',0,1,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(20,'1259858045.JPG','vine si',0,1,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(21,'1259858286.JPG','fura',0,1,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(22,'1259858449.JPG','hoootii hoootii',0,1,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(23,'1259923118.JPG','la furat',0,1,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(26,'1259924491.JPG','chilotii',0,1,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(27,'1259924656.JPG','chilooootiiii',0,1,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(28,'1259925093.JPG','pac pac',0,1,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(30,'1260011467.jpg','',0,1,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(32,'1260011533.jpg','',0,1,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(33,'1260011567.jpg','frrewfds',0,1,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(34,'1260011771.jpg','Dedeman vasile',0,1,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(35,'1260012027.jpg','dasrw',0,1,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(36,'1260012501.jpg','43fds',0,1,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(37,'1260012653.jpg','rwfdsfsd',0,1,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(39,'1260014005.jpg','43fff',0,1,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(40,'1260014108.jpg','qqq',0,1,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(41,'1260020141.jpg',NULL,0,8,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(42,'1260020258.jpg',NULL,0,8,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(43,'1260024674.JPG','4343',0,6,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(44,'1260024762.jpg','wewe',0,6,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(45,'1260024914.jpg','fgfg',0,6,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(46,'1260036865.jpg','Dedeman vasile',0,9,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(47,'1260036900.jpg','3232',0,7,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(48,'1260098363.jpg','dddddddddddd',0,1,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(49,'1260098425.jpg','dddddddddddd',0,1,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(50,'1260098438.jpg','dddddddddddd',0,1,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(51,'1260100266.jpg','',0,1,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(52,'1260100267.jpg','',0,1,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(53,'1260100268.JPG','',0,1,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(54,'1260100269.jpg','',0,1,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(55,'1260100270.jpg','',0,1,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(56,'1260100271.jpg','',0,1,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(57,'1260100272.jpg','',0,1,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(58,'1260100273.jpg','',0,1,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(59,'1260100274.jpg','',0,1,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(60,'1260100275.jpg','',0,1,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(61,'1260100529.jpg','',0,9,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(62,'1260100530.jpg','',0,9,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(63,'1260100531.JPG','',0,9,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(64,'1260100539.jpg','',0,9,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(65,'1260100540.jpg','',0,9,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(66,'1260100543.jpg','',0,9,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(67,'1260100545.jpg','',0,9,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(68,'1260100546.jpg','',0,9,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(69,'1260100547.jpg','',0,9,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(70,'1260100548.jpg','',0,9,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(71,'1260100621.jpg','',0,10,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(72,'1260100622.jpg','',0,10,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(73,'1260100623.JPG','',0,10,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(74,'1260100631.jpg','',0,10,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(75,'1260100632.jpg','',0,10,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(76,'1260100637.jpg','',0,10,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(77,'1260100643.jpg','',0,10,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(78,'1260100645.jpg','',0,10,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(79,'1260100650.jpg','',0,10,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(80,'1260100653.jpg','',0,10,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(81,'1260103442.jpg','',0,10,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(82,'1260103443.jpg','',0,10,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(83,'1260103444.JPG','',0,10,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(84,'1260103451.jpg','',0,10,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(85,'1260103453.jpg','',0,10,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(86,'1260103455.jpg','',0,10,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(87,'1260103456.jpg','',0,10,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(88,'1260103457.jpg','',0,10,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(89,'1260103458.jpg','',0,10,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(90,'1260103459.jpg','',0,10,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(91,'1260103797.jpg','',0,10,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(92,'1260103799.jpg','',0,10,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(93,'1260103800.JPG','',0,10,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(94,'1260103807.jpg','',0,10,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(95,'1260103808.jpg','',0,10,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(96,'1260103813.jpg','',0,10,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(97,'1260103817.jpg','',0,10,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(98,'1260103818.jpg','',0,10,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(99,'1260103821.jpg','',0,10,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(100,'1260103823.jpg','',0,10,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(101,'1260106316.jpg','4444',0,1,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(102,'1260106488.JPG','t45rf',0,1,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(103,'1260106562.JPG','t45rf2',0,1,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(104,'1260106638.JPG','t45rf2',0,1,NULL);
REPLACE INTO "images" ("id", "name", "alt", "owner", "album_id", "news_id") VALUES
	(105,'1260106700.jpg','yyy',0,1,NULL);
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
  "profile_image" tinyint(3) unsigned NOT NULL DEFAULT '0',
  "ride" varchar(50) DEFAULT NULL,
  "start_date" varchar(50) DEFAULT NULL,
  "hidden" tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY ("id"),
  UNIQUE KEY "id" ("id"),
  KEY "id_2" ("id")
) AUTO_INCREMENT=16;



#
# Dumping data for table 'members'
#

LOCK TABLES "members" WRITE;
/*!40000 ALTER TABLE "members" DISABLE KEYS;*/
REPLACE INTO "members" ("id", "name", "nickname", "location", "profile_image", "ride", "start_date", "hidden") VALUES
	(1,'Andrei Seredenciuc','Dracu','Radauti',1,'Ducati Indiana','Fondator',0);
REPLACE INTO "members" ("id", "name", "nickname", "location", "profile_image", "ride", "start_date", "hidden") VALUES
	(2,'Eugen Cocalea','Puc','Iasi',2,'Kawasaki Vulcan Drifter 1500','2007',0);
REPLACE INTO "members" ("id", "name", "nickname", "location", "profile_image", "ride", "start_date", "hidden") VALUES
	(3,'Vasile Vasilescu','D','SD',1,'DA','4332',0);
REPLACE INTO "members" ("id", "name", "nickname", "location", "profile_image", "ride", "start_date", "hidden") VALUES
	(4,'Ion Ionescu','DeLaBrad','dfda',2,'fdsfs','r432',0);
REPLACE INTO "members" ("id", "name", "nickname", "location", "profile_image", "ride", "start_date", "hidden") VALUES
	(5,'Gica Contra','Anti','dass',42,'fdasfswre','r4',0);
REPLACE INTO "members" ("id", "name", "nickname", "location", "profile_image", "ride", "start_date", "hidden") VALUES
	(8,'vasile','vasea','barlad',1,'maica-sa','2000',0);
REPLACE INTO "members" ("id", "name", "nickname", "location", "profile_image", "ride", "start_date", "hidden") VALUES
	(9,'george2','pipipu2','ploesti2',41,'zz2','2002',0);
REPLACE INTO "members" ("id", "name", "nickname", "location", "profile_image", "ride", "start_date", "hidden") VALUES
	(10,'mimi','ff','gf',1,'fd','432',0);
REPLACE INTO "members" ("id", "name", "nickname", "location", "profile_image", "ride", "start_date", "hidden") VALUES
	(13,'re432','g3','43',1,'435','543',0);
REPLACE INTO "members" ("id", "name", "nickname", "location", "profile_image", "ride", "start_date", "hidden") VALUES
	(14,'George Georgel Georgescu','Geo','Vaslui',1,'MotoGuzzi','2001',0);
REPLACE INTO "members" ("id", "name", "nickname", "location", "profile_image", "ride", "start_date", "hidden") VALUES
	(15,'testing423','vasea33','gff32',1,'432','3232',0);
/*!40000 ALTER TABLE "members" ENABLE KEYS;*/
UNLOCK TABLES;


#
# Table structure for table 'news'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ "news" (
  "id" tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  "title" varchar(250) NOT NULL,
  "content" longtext NOT NULL,
  "category_id" tinyint(3) unsigned NOT NULL DEFAULT '1',
  "post_date" date NOT NULL DEFAULT '2009-12-12',
  PRIMARY KEY ("id"),
  UNIQUE KEY "id" ("id"),
  KEY "id_2" ("id")
) AUTO_INCREMENT=26;



#
# Dumping data for table 'news'
#

LOCK TABLES "news" WRITE;
/*!40000 ALTER TABLE "news" DISABLE KEYS;*/
REPLACE INTO "news" ("id", "title", "content", "category_id", "post_date") VALUES
	(1,'Am luat bacu 7','<p>Vasilescu2</p>',1,'2009-10-30');
REPLACE INTO "news" ("id", "title", "content", "category_id", "post_date") VALUES
	(2,'Iar am luat bacu','<p>&nbsp;</p>
<p>&nbsp;</p>
<p><img height="200" align="left" width="200" src="http://localhost/bmc/images/382348365.jpg" alt="" /></p>
<p style="margin-left: 120px;"><span style="font-family: Courier New;">Before text editors existed, computer text was punched into punched cards with keypunch machines. The text was carried as a physical box of these thin cardboard cards, and read into a card-reader.  The first text editors were line editors oriented on typewriter style terminals and they did not provide a window or screen-oriented display. They usually had very short commands (to minimize typing) that reproduced the current line. Among them were a command to print a selected section(s) of the file on the typewriter (or printer) in case of necessity. An &quot;edit cursor&quot;, an imaginary insertion point, could be moved by special commands that operated with line numbers of specific text strings (context). Later, the context strings were extended to regular expressions. To see the changes, the file needed to be printed on the printer. These &quot;line-based text editors&quot; were considered revolutionary improvements over keypunch machines. In case typewriter-based terminals were not available, they were adapted to keypunch equipment. In this case the user needed to punch the commands into the separate deck of cards and feed them into the computer in order to edit the file.  When computer terminals with video screens became available, screen-based text editors became common. One of the earliest &quot;full screen&quot; editors was O26 - which was written for the operator console of the CDC 6000 series machines in 1967. Another early full screen editor is vi. Written in the 1970s, vi is still a standard editor for Unix and Linux operating systems. The productivity of editing using full-screen editors (compared to the line-based editors) motivated many of the early purchases of video terminals.</span></p>
<p>&nbsp;</p>
<p>SSS</p>',1,'2008-11-30');
REPLACE INTO "news" ("id", "title", "content", "category_id", "post_date") VALUES
	(3,'Maica maica-sii','Some text editors are small and simple, while others offer a broad and complex range of functionality. For example, Unix and Unix-like operating systems have the vi editor (or a variant), but many also include the Emacs editor. Microsoft Windows systems come with the very simple Notepad, though many people—especially programmers—prefer to use one of many other Windows text editors with more features. Under Apple Macintosh''s classic Mac OS there was the native SimpleText, which was replaced under OSX by TextEdit. Some editors, such as WordStar, have dual operating modes allowing them to be either a text editor or a word processor.',1,'2007-11-30');
REPLACE INTO "news" ("id", "title", "content", "category_id", "post_date") VALUES
	(4,'Ahaaa','    * String searching algorithm – search string with a replacement string. Different methods are employed, Global(ly) Search And Replace, Conditional Search and Replace, Unconditional Search and Replace.',1,'2009-09-24');
REPLACE INTO "news" ("id", "title", "content", "category_id", "post_date") VALUES
	(5,'This title is going to be a little longer than all other titles','When It''s All Text! plugin has been installed, a little blue edit button will appear at the bottom right corner of the textarea. Just click the button to open the contents of the text area in your editor.
When It''s All Text! plugin has been installed, a little blue edit button will appear at the bottom right corner of the textarea. Just click the button to open the contents of the text area in your editor.

However, before you can use It''s All Text!, you need to specify the path to your editor in the Preferences dialog box. The Preferences dialog opens automatically when you use It''s All Text! for the first time, but you can open it manually as follows: Right click in the textarea to open context menu; select "It''s All Text"
 "Preferences".

If your editor requires some other command line options in addition to the filename, use a shell script (.bat file) to call your editor, and specify path to that script instead of calling your editor directly. In addition, you can add filename extension for wiki file type in Preferences dialog, in case your editor uses file type specific configuration.

Once the above is done, you can edit any textarea in your editor by clicking at the Edit button at the lower-right corner of the textarea. Alternatively, you can right-click on the text area. From the "It''s All Text" menu, you can choose which filename extension to use for editing. Next time you use the blue edit button, the extension will be the one you used last time.

After editing, just save the file from your editor. The contents will be automatically copied to the textarea in Firefox. To indicate this, the textarea turns yellow briefly.

A tmp file is created for editing and it will be removed at the end. So if you want to preserve a text file for later editing, you can change the filename and/or save the file to another directory.
[edit] Using vim or another console editor

Some macro may work under vim, but not under gvim for some reasons (e.g., the macro to format text paragraphs). Or you just want to use vim within an X terminal as you used to do, instead of using gvim. To invoke vim within an X terminal window, you can write a shell script (see below) to invoke an X terminal and to run the vim command within that X terminal, or generally your preferred editor. Assume that the filename of this script is wiki.edit.vim, and that you put the script in the directory /home_dir/bin/ so that the path of the script would be',1,'2007-12-30');
REPLACE INTO "news" ("id", "title", "content", "category_id", "post_date") VALUES
	(7,'Am luat bacu virgula 33','<p>Vasilescudoi are un ratzatzoi!</p>
<p>Vasilescudoi are un ratzatzoi! Vasilescudoi are un ratzatzoi!Vasilescudoi are un ratzatzoi!</p>
<p>Vasilescudoi are un ratzatzoi! Vasilescudoi are un ratzatzoi!Vasilescudoi are un ratzatzoi!</p>',1,'2009-12-12');
REPLACE INTO "news" ("id", "title", "content", "category_id", "post_date") VALUES
	(8,'Michael Jackson edit','<p>Are mere. Pana si Michael Jackson are mere.</p>
<p>A, am aflat acum de ce trebuie sample.css...</p>',1,'2009-12-12');
REPLACE INTO "news" ("id", "title", "content", "category_id", "post_date") VALUES
	(11,'About BMC','Bukowina Motor Club (BMC) a luat fiinta in luna august 2006 si este singurul club moto din Bucovina. A fost fondat in Radauti, de 7 membri iar in momentul de fata numarul acestora depaseste 30. Numele clubului arata in mod simplu locatia si natura acestuia iar "Bukowina" a fost ales dupa denumirea originala a acestei zone. Clubul este deschis tuturor celor care se simt cu sufletul in Bucovina, sunt motociclisti (indiferent daca sunt indragostiti de speed, enduro, chopper, old timer, tourer ...), ne impartasesc modul nostru de a fi si il reprezinta intr-o maniera respectabila. Activitatile pe care ne-am propus sa le facem impreuna sunt diverse si includ plimbari cu motocicletele, achizitionarea de echipamente si motociclete, suport si ajutor in cazul excursiilor, organizarea de evenimente motociclistice publice, petreceri sau o simpla bere impreuna. Insemnele BMC au fost create avand la baza stema originala a Bucovinei.',0,'2009-12-12');
REPLACE INTO "news" ("id", "title", "content", "category_id", "post_date") VALUES
	(12,'Inca o stire de umplutura','Aici e un text de umplutura',1,'2008-12-03');
REPLACE INTO "news" ("id", "title", "content", "category_id", "post_date") VALUES
	(19,'Inca o stire de umplutura','Inca o stire de umplutura',1,'2009-12-12');
REPLACE INTO "news" ("id", "title", "content", "category_id", "post_date") VALUES
	(20,'Inca o stire de umplutura','Inca o stire de umplutura',1,'2009-12-12');
REPLACE INTO "news" ("id", "title", "content", "category_id", "post_date") VALUES
	(21,'Inca o stire de umplutura','Inca o stire de umplutura',1,'2009-12-12');
REPLACE INTO "news" ("id", "title", "content", "category_id", "post_date") VALUES
	(22,'Inca o stire de umplutura','Inca o stire de umplutura',1,'2009-12-12');
REPLACE INTO "news" ("id", "title", "content", "category_id", "post_date") VALUES
	(23,'Inca o stire de umplutura','Inca o stire de umplutura',1,'2009-12-12');
REPLACE INTO "news" ("id", "title", "content", "category_id", "post_date") VALUES
	(24,'Hmm','<p>Unde dracu s-a dus</p>',1,'2009-12-12');
REPLACE INTO "news" ("id", "title", "content", "category_id", "post_date") VALUES
	(25,'Deci','<h3 style="color: Red;">Red title</h3>
<p><span style="background-color: Lime;">green stuff</span></p>
<p><tt>typewriter</tt></p>
<p>&nbsp;</p>
<p><tt>si acum comitem!</tt></p>',1,'2009-12-12');
/*!40000 ALTER TABLE "news" ENABLE KEYS;*/
UNLOCK TABLES;


#
# Table structure for table 'users'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ "users" (
  "id" tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  "username" varchar(50) NOT NULL,
  "password" varchar(100) NOT NULL,
  "is_admin" tinyint(3) unsigned NOT NULL DEFAULT '0',
  "realname" varchar(50) NOT NULL,
  PRIMARY KEY ("id"),
  UNIQUE KEY "id" ("id"),
  KEY "id_2" ("id")
) AUTO_INCREMENT=4;



#
# Dumping data for table 'users'
#

LOCK TABLES "users" WRITE;
/*!40000 ALTER TABLE "users" DISABLE KEYS;*/
REPLACE INTO "users" ("id", "username", "password", "is_admin", "realname") VALUES
	(1,'admin','0cc175b9c0f1b6a831c399e269772661',1,'Administrator');
REPLACE INTO "users" ("id", "username", "password", "is_admin", "realname") VALUES
	(2,'eugen','92eb5ffee6ae2fec3ad71c777531578f',1,'Eugen aka Puc');
REPLACE INTO "users" ("id", "username", "password", "is_admin", "realname") VALUES
	(3,'irina','0cc175b9c0f1b6a831c399e269772661',0,'Irina aka Puca');
/*!40000 ALTER TABLE "users" ENABLE KEYS;*/
UNLOCK TABLES;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE;*/
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;*/
