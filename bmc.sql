# HeidiSQL Dump 
#
# --------------------------------------------------------
# Host:                         127.0.0.1
# Database:                     bmc
# Server version:               5.1.41-community
# Server OS:                    Win32
# Target compatibility:         ANSI SQL
# HeidiSQL version:             4.0
# Date/time:                    2009-11-30 23:06:15
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
	(7,'Album','album.php','album',5);
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
) AUTO_INCREMENT=20;



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
	(4,'Ion Ionescu','DeLaBrad','dfda',2,'fdsfs','r432');
REPLACE INTO "members" ("id", "name", "nickname", "location", "profile_image", "ride", "start_date") VALUES
	(5,'Gica Contra','Anti','dass',1,'fdasfswre','r4');
REPLACE INTO "members" ("id", "name", "nickname", "location", "profile_image", "ride", "start_date") VALUES
	(6,'fsd','fsfs','fsfds',17,'fsfds','fdsdsfdsf');
REPLACE INTO "members" ("id", "name", "nickname", "location", "profile_image", "ride", "start_date") VALUES
	(7,'43','fs','fsfs',18,'fsfsd','fdsfsd');
REPLACE INTO "members" ("id", "name", "nickname", "location", "profile_image", "ride", "start_date") VALUES
	(8,'vasile','vasea','barlad',19,'maica-sa','2000');
REPLACE INTO "members" ("id", "name", "nickname", "location", "profile_image", "ride", "start_date") VALUES
	(9,'george','pipipu','ploesti',3,'zz','200');
REPLACE INTO "members" ("id", "name", "nickname", "location", "profile_image", "ride", "start_date") VALUES
	(10,'mimi','ff','gf',3,'fd','432');
REPLACE INTO "members" ("id", "name", "nickname", "location", "profile_image", "ride", "start_date") VALUES
	(11,'fds','fwre','t43',1,'rwe','4');
REPLACE INTO "members" ("id", "name", "nickname", "location", "profile_image", "ride", "start_date") VALUES
	(12,'fds','45343','tgf',1,'fsd','432');
REPLACE INTO "members" ("id", "name", "nickname", "location", "profile_image", "ride", "start_date") VALUES
	(13,'re432','g3','43',1,'435','543');
/*!40000 ALTER TABLE "members" ENABLE KEYS;*/
UNLOCK TABLES;


#
# Table structure for table 'news'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ "news" (
  "id" tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  "title" varchar(250) NOT NULL,
  "content" longtext NOT NULL,
  "category_id" tinyint(3) unsigned NOT NULL,
  "post_date" date NOT NULL DEFAULT '2009-12-12',
  PRIMARY KEY ("id"),
  UNIQUE KEY "id" ("id"),
  KEY "id_2" ("id")
) AUTO_INCREMENT=11;



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
	(5,'fds','When It''s All Text! plugin has been installed, a little blue edit button will appear at the bottom right corner of the textarea. Just click the button to open the contents of the text area in your editor.
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
	(6,'trfdgfd','<p>fdsfdsfds</p>
<p>rew</p>
<p>fdfds</p>
<p>f</p>
<p>dsf</p>
<p>rew</p>
<p>&nbsp;</p>
<p>fds</p>
<p>f</p>
<p>dsf</p>
<p>dsf</p>
<p>sd</p>
<p>f</p>
<p>ds</p>',1,'2009-12-12');
REPLACE INTO "news" ("id", "title", "content", "category_id", "post_date") VALUES
	(7,'Am luat bacu 3','<p>Vasilescu</p>',1,'2009-12-12');
REPLACE INTO "news" ("id", "title", "content", "category_id", "post_date") VALUES
	(8,'Michael Jackson','<p>Are mere. Pana si Michael Jackson are mere.</p>',1,'2009-12-12');
REPLACE INTO "news" ("id", "title", "content", "category_id", "post_date") VALUES
	(9,'Am luat bacu 5','<p>Ionescu</p>',1,'2009-12-12');
REPLACE INTO "news" ("id", "title", "content", "category_id", "post_date") VALUES
	(10,'Am luat bacu 2','<p>Vasilescu</p>',1,'2009-12-12');
/*!40000 ALTER TABLE "news" ENABLE KEYS;*/
UNLOCK TABLES;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE;*/
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;*/
