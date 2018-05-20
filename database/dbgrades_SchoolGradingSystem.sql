CREATE DATABASE  IF NOT EXISTS `dbgrades` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `dbgrades`;
-- MySQL dump 10.13  Distrib 5.7.12, for Win32 (AMD64)
--
-- Host: 127.0.0.1    Database: dbgrades
-- ------------------------------------------------------
-- Server version	5.6.34-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tblactivity`
--

DROP TABLE IF EXISTS `tblactivity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblactivity` (
  `intfkLog` int(11) NOT NULL,
  `strActivity` varchar(80) DEFAULT NULL,
  `timeHappen` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`intfkLog`),
  CONSTRAINT `tblactivity_ibfk_id_1` FOREIGN KEY (`intfkLog`) REFERENCES `tbllog` (`intLog`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblactivity`
--

LOCK TABLES `tblactivity` WRITE;
/*!40000 ALTER TABLE `tblactivity` DISABLE KEYS */;
INSERT INTO `tblactivity` VALUES (32,'Edited the teacher Keith Torres Liu','03:42 am'),(33,'Edited the student 2019000027','11:08 am');
/*!40000 ALTER TABLE `tblactivity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblclass`
--

DROP TABLE IF EXISTS `tblclass`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblclass` (
  `intClass` int(11) NOT NULL AUTO_INCREMENT,
  `strClassCode` int(11) NOT NULL,
  `strClassName` varchar(45) DEFAULT NULL,
  `strClassTrack` varchar(20) DEFAULT NULL,
  `strClassDesc` varchar(100) DEFAULT NULL,
  `strClassStat` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`intClass`),
  UNIQUE KEY `strClassCode_UNIQUE` (`strClassCode`),
  KEY `strClassCode_2` (`strClassCode`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblclass`
--

LOCK TABLES `tblclass` WRITE;
/*!40000 ALTER TABLE `tblclass` DISABLE KEYS */;
INSERT INTO `tblclass` VALUES (1,1,'1A','STEM','STEM Educational Track Class','Active'),(2,2,'1A','ABM','Office and Accounting Education','Active'),(3,3,'1B','ARS','Arts and Sociology','Active'),(4,4,'1C','ABM','Accounting','Active'),(5,5,'1D','ABM','Accounting and Mathematical Theory','Active'),(6,6,'1E','ICT','Information Technology','Active'),(7,7,'1B','STEM','Educational Basics','Active');
/*!40000 ALTER TABLE `tblclass` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbldetailrecord`
--

DROP TABLE IF EXISTS `tbldetailrecord`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbldetailrecord` (
  `intdetail` int(11) NOT NULL AUTO_INCREMENT,
  `intfkrecord` int(11) NOT NULL,
  `strfkStudent` varchar(45) DEFAULT NULL,
  `intMidterm` decimal(5,2) DEFAULT NULL,
  `intFinal` decimal(5,2) DEFAULT NULL,
  `decFinalGrade` decimal(5,2) DEFAULT NULL,
  `strReqRemarks` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`intdetail`),
  KEY `tbldetailrecord_ibfk_2_idx` (`strfkStudent`),
  KEY `tbldetailrecord_ibfk_1` (`intfkrecord`),
  CONSTRAINT `tbldetailrecord_ibfk_1` FOREIGN KEY (`intfkrecord`) REFERENCES `tblheaderrecord` (`intHeaderRecordID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `tbldetailrecord_ibfk_2` FOREIGN KEY (`strfkStudent`) REFERENCES `tblstudent` (`strStudCode`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbldetailrecord`
--

LOCK TABLES `tbldetailrecord` WRITE;
/*!40000 ALTER TABLE `tbldetailrecord` DISABLE KEYS */;
INSERT INTO `tbldetailrecord` VALUES (1,1,'2018000007   ',87.36,75.66,81.00,'PASSED'),(2,1,'2018000002    ',90.15,85.08,87.50,'PASSED'),(3,2,'2018000004  ',79.00,80.00,79.50,'PASSED'),(4,1,'2018000003  ',87.00,88.56,87.50,'PASSED'),(5,1,'2018000010     ',76.00,79.00,77.50,'PASSED'),(6,3,'2018000010     ',76.00,79.00,77.50,'PASSED'),(7,3,'2019000013    ',99.99,88.79,93.50,'PASSED'),(8,4,'2019000014     ',90.28,64.88,77.00,'PASSED');
/*!40000 ALTER TABLE `tbldetailrecord` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblheaderrecord`
--

DROP TABLE IF EXISTS `tblheaderrecord`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblheaderrecord` (
  `intHeaderRecordID` int(11) NOT NULL AUTO_INCREMENT,
  `strfkTeacher` varchar(10) DEFAULT NULL,
  `strfkClass` int(11) DEFAULT NULL,
  `intfkSubschedSubj` int(11) DEFAULT NULL,
  `strSemester` varchar(6) DEFAULT NULL,
  `strYear` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`intHeaderRecordID`),
  KEY `tblheaderreacord_ibfk_1_idx` (`strfkTeacher`),
  KEY `tblheaderrecord_ibfk_2_idx` (`strfkClass`),
  KEY `tblheaderrecord_ibfk_3_idx` (`intfkSubschedSubj`),
  CONSTRAINT `tblheaderrecord_ibfk_1` FOREIGN KEY (`strfkTeacher`) REFERENCES `tblteacher` (`strTeacherID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `tblheaderrecord_ibfk_2` FOREIGN KEY (`strfkClass`) REFERENCES `tblclass` (`strClassCode`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `tblheaderrecord_ibfk_3` FOREIGN KEY (`intfkSubschedSubj`) REFERENCES `tblsubsched` (`intSchedID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblheaderrecord`
--

LOCK TABLES `tblheaderrecord` WRITE;
/*!40000 ALTER TABLE `tblheaderrecord` DISABLE KEYS */;
INSERT INTO `tblheaderrecord` VALUES (1,'2018000001',1,1,NULL,NULL),(2,'2018000005',2,2,NULL,NULL),(3,'2018000002',3,3,NULL,NULL),(4,'2018000001',1,2,NULL,NULL),(5,'2018000002',1,3,NULL,NULL),(6,'2018000005',2,5,NULL,NULL),(7,'2018000001',3,3,NULL,NULL),(8,'2018000005',2,2,NULL,NULL);
/*!40000 ALTER TABLE `tblheaderrecord` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbllog`
--

DROP TABLE IF EXISTS `tbllog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbllog` (
  `intLog` int(11) NOT NULL AUTO_INCREMENT,
  `intfkAccountID` int(11) DEFAULT NULL,
  `dtmDateLog` date DEFAULT NULL,
  `timeLogin` varchar(10) DEFAULT NULL,
  `timeLogout` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`intLog`),
  KEY `tbllog_ibfk_id_1_idx` (`intfkAccountID`),
  CONSTRAINT `tbllog_ibfk_id_1` FOREIGN KEY (`intfkAccountID`) REFERENCES `tbluser` (`intUserID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbllog`
--

LOCK TABLES `tbllog` WRITE;
/*!40000 ALTER TABLE `tbllog` DISABLE KEYS */;
INSERT INTO `tbllog` VALUES (1,1,'2018-03-15','11:34 pm','12:15 am'),(2,1,'2018-03-16','12:15 am','12:16 am'),(3,45,'2018-03-16','12:16 am','12:16 am'),(4,1,'2018-03-16','12:16 am','12:17 am'),(5,2,'2018-03-16','12:17 am','12:17 am'),(6,1,'2018-03-16','12:24 am','present'),(7,1,'2018-03-16','07:10 am','present'),(8,1,'2018-03-16','05:25 pm','present'),(9,1,'2018-03-17','11:17 am','11:47 am'),(10,8,'2018-03-17','11:47 am','11:47 am'),(11,2,'2018-03-17','11:48 am','11:49 am'),(12,1,'2018-03-17','11:57 am','present'),(13,1,'2018-03-18','08:28 pm','10:40 pm'),(14,1,'2018-03-18','10:41 pm','11:37 pm'),(15,1,'2018-03-18','11:37 pm','11:38 pm'),(16,1,'2018-03-18','11:41 pm','11:44 pm'),(17,1,'2018-03-18','11:45 pm','11:48 pm'),(18,8,'2018-03-18','11:48 pm','11:48 pm'),(19,1,'2018-03-18','11:48 pm','11:49 pm'),(20,1,'2018-03-19','08:40 pm','present'),(21,1,'2018-03-19','09:55 pm','09:58 pm'),(22,1,'2018-03-20','10:43 am','11:13 am'),(23,2,'2018-03-20','11:13 am','11:15 am'),(24,2,'2018-03-20','11:15 am','11:15 am'),(25,8,'2018-03-20','11:15 am','11:15 am'),(26,1,'2018-03-20','11:22 am','present'),(27,1,'2018-03-22','02:42 am','03:34 am'),(28,2,'2018-03-22','03:35 am','03:35 am'),(29,1,'2018-03-22','03:35 am','03:38 am'),(30,1,'2018-03-22','03:39 am','03:40 am'),(31,1,'2018-03-22','03:40 am','03:41 am'),(32,1,'2018-03-22','03:42 am','04:58 am'),(33,1,'2018-03-22','11:05 am','11:20 am');
/*!40000 ALTER TABLE `tbllog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblstudent`
--

DROP TABLE IF EXISTS `tblstudent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblstudent` (
  `intStudent` int(11) NOT NULL AUTO_INCREMENT,
  `strStudCode` varchar(10) NOT NULL,
  `strStudFirstName` varchar(45) DEFAULT NULL,
  `strStudMidName` varchar(45) DEFAULT NULL,
  `strStudLastName` varchar(45) DEFAULT NULL,
  `strStudContact` varchar(11) DEFAULT NULL,
  `dtmStudBirth` date DEFAULT NULL,
  `strStudGender` varchar(6) DEFAULT NULL,
  `strStudMail` varchar(45) DEFAULT NULL,
  `strStudStat` varchar(8) DEFAULT NULL,
  `dtmStudRegi` date DEFAULT NULL,
  PRIMARY KEY (`intStudent`),
  UNIQUE KEY `strStudCode` (`strStudCode`),
  KEY `strStudCode_2` (`strStudCode`),
  KEY `tblstudent_ibfk_1_idx` (`strStudCode`),
  CONSTRAINT `tblstudent_ibfk_1_idx` FOREIGN KEY (`strStudCode`) REFERENCES `tbluser` (`strUserName`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblstudent`
--

LOCK TABLES `tblstudent` WRITE;
/*!40000 ALTER TABLE `tblstudent` DISABLE KEYS */;
INSERT INTO `tblstudent` VALUES (1,'2018000002','Michelle','Garcia','Lopez','09123456780','2001-02-02','Female','migalo@mail.com','Inactive','2018-01-22'),(2,'2018000003','Andrea','Montez','Mercado','09876543219','2001-03-12','Female','anmonmer@gmail.com','Inactive','2018-01-23'),(3,'2018000004','Hailey','Ramos','Perez','09123898989','2002-10-28','Female','hailrampergmail.com','Inactive','2018-01-30'),(4,'2018000006','Andrei','Liu','Song','09123456788','1999-09-09','Male','test@mail.com','Inactive','2018-02-18'),(5,'2018000007','Aaron','Lee','Yoon','09123456789','1999-09-09','Male','test@mail.com','Active','2018-02-18'),(6,'2013000002','Andrei','Lee','Sy','09123456789','1999-09-09','Male','testme@mail.com','Active','2018-02-18'),(7,'2018000010','LT','KL','TK','09999999999','1998-04-04','Female','ktl@ymail.com','Active','2018-03-11'),(8,'2019000001','Fiona','Ramirez','Layugan','09222001999','2001-09-09','Female','frl@mail.com','Active','2018-03-11'),(9,'2019000002','Paula','','Mendoza','09222001994','2001-07-07','Female','pmen@mail.com','Active','2018-03-11'),(10,'2019000003','Oswald','Hermina','Dela Cruz','09222001998','1999-12-02','Male','ohermdecru@outlook.com','Active','2018-03-11'),(11,'2019000004','Miannie','Rehxans','Lopez','09236767676','2001-01-02','Female','minrexlop@yahoo.com','Active','2018-03-15'),(12,'2019000005','Lolou','','Martinez','09187873817','2000-12-11','Female','lou2mart@mail.com','Active','2018-03-15'),(13,'2019000006','Miannie','','Dela Rosa','09236767676','2001-01-01','Female','mixlop@yahoo.com','Active','2018-03-15'),(14,'2019000007','Ann','Curry','Jun','09222001999','2000-12-26','Female','anncurjunp@yahoo.com','Active','2018-03-15'),(15,'2019000008','N','','N','09236767678','2000-12-04','Female','nali@yahoo.com','Active','2018-03-15'),(16,'2019000009','Men','','Rilan','09222001992','2001-01-01','Female','frl@mail.com','Active','2018-03-15'),(17,'2019000010','Mean','','Lean','09236767622','2001-01-01','Female','ml@outlook.com','Active','2018-03-15'),(18,'2019000011','Faline','','Evangelista','09222001991','2000-03-02','Female','falieval@mail.com','Active','2018-03-15'),(19,'2019000012','Monette','','Favian','09999988188','2000-01-04','Female','monfav@outlook.com','Active','2018-03-15'),(20,'2019000013','Mandie','Flores','Villanueve','09999182888','2000-12-11','Female','manflovil@forbes.com','Active','2018-03-15'),(21,'2019000014','Robin','Adriel','g','09123837474','1997-03-25','Female','robingo@yahoo.com','Active','2018-03-15'),(29,'2019000015','Lelouch','','Lamperouge','09236767676','2001-01-01','Male','leslieescaro@yahoo.com','Active','2018-03-16'),(30,'2019000016','Bea','Garcia','Hermina','09182838111','1999-09-01','Female','begahe@mail.com','Active','2018-03-16'),(31,'2019000017','Ohara','','Hara','09128384928','2001-11-11','Male','ohara@mail.com','Active','2018-03-16'),(32,'2019000018','Lyon','Klark','Tank','09182398912','2001-09-09','Male','lkt@mail.com','Active','2018-03-16'),(33,'2019000019','Tian','Tiere','Pascual','09128981231','1999-09-09','Male','ktl@gmail.com','Active','2018-03-16'),(34,'2019000020','Terry','','Kelly','09128888211','1997-08-09','Female','ltktk@gmail.com','Active','2018-03-16'),(35,'2019000021','Liliana','Ross','Go','09123918923','1998-09-09','Female','lilrosgo@yahoo.com','Active','2018-03-17'),(36,'2019000022','095','Ostia','Escaro','09123456789','1999-02-02','Female','lesie@yahoo.com','Inactive','2018-03-17'),(37,'2019000023','Dy','','Ming','09766456234','2001-02-02','Male','123a@mail.com','Active','2018-03-18'),(38,'2019000024','Mia','','Vera','09718781111','1998-12-09','Female','minrexlop@yahoo.com','Active','2018-03-20'),(39,'2019000025','Miriam','Dementia','Naga','09236767671','1999-09-09','Female','midena@yahoo.com','Active','2018-03-21'),(40,'2019000026','Jiannie','','Layugan','09182882819','2001-11-01','Female','jila@mail.com','Active','2018-03-21'),(41,'2019000027','Mikael','','Evangelista','09119292999','1999-02-22','Male','mikale@yahoo.com','Active','2018-03-22'),(42,'2019000028','Key','','Timbreza','09188282822','1992-11-11','Female','keytim@yahoo.com','Active','2018-03-22'),(43,'2019000029','Kim','','Lopez','09211111111','2001-11-11','Female','kimlo@mail.com','Active','2018-03-22');
/*!40000 ALTER TABLE `tblstudent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblsubject`
--

DROP TABLE IF EXISTS `tblsubject`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblsubject` (
  `intSubject` int(11) NOT NULL AUTO_INCREMENT,
  `strSubjectCode` varchar(10) NOT NULL,
  `strSubjectName` varchar(45) DEFAULT NULL,
  `strSubjectDesc` varchar(100) DEFAULT NULL,
  `strSubjectStat` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`intSubject`),
  KEY `strSubjectCode` (`strSubjectCode`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblsubject`
--

LOCK TABLES `tblsubject` WRITE;
/*!40000 ALTER TABLE `tblsubject` DISABLE KEYS */;
INSERT INTO `tblsubject` VALUES (1,'STEM001A','Science-Technology and Mathematics','Science, Academical Math and Computer','Active'),(2,'ABM0001A','Accounting and Management','Finance and Economical Basics','Active'),(3,'ART0001B','Art and Theater','Performing Arts and Musical Education','Active'),(4,'STEM001B','Science and English Skill Learning','For students aiming for broadcasting and research','Active'),(5,'STEM001C','Science and History','Science and History combined together','Active'),(6,'STEM001D','Math and English','Mathematical and Literary skills','Active'),(7,'STEM001E','Math, Science and English','Triacademic skills','Active'),(8,'STEM001F','History and Philosophy','Ideologies','Active');
/*!40000 ALTER TABLE `tblsubject` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblsubsched`
--

DROP TABLE IF EXISTS `tblsubsched`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblsubsched` (
  `intSchedID` int(11) NOT NULL AUTO_INCREMENT,
  `intfkSubject` int(11) DEFAULT NULL,
  `intfkDay` int(11) DEFAULT NULL,
  `dtmTimeFr` varchar(8) DEFAULT NULL,
  `dtmTimeTo` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`intSchedID`),
  KEY `tblSubSched_ibfk_id_1_idx` (`intfkSubject`),
  KEY `tblSubSched_ibfk_id_2_idx` (`intfkDay`),
  CONSTRAINT `tblSubSched_ibfk_id_1` FOREIGN KEY (`intfkSubject`) REFERENCES `tblsubject` (`intSubject`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `tblSubSched_ibfk_id_2` FOREIGN KEY (`intfkDay`) REFERENCES `tblweek` (`intDay`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblsubsched`
--

LOCK TABLES `tblsubsched` WRITE;
/*!40000 ALTER TABLE `tblsubsched` DISABLE KEYS */;
INSERT INTO `tblsubsched` VALUES (1,1,1,'15:00','16:00'),(2,1,3,'10:30','11:00'),(3,3,3,'09:00','10:00'),(4,2,3,'11:00','12:00'),(5,2,1,'12:00','13:00'),(6,2,1,'10:00','11:00');
/*!40000 ALTER TABLE `tblsubsched` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblteacher`
--

DROP TABLE IF EXISTS `tblteacher`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblteacher` (
  `intTeacher` int(11) NOT NULL AUTO_INCREMENT,
  `strTeacherID` varchar(10) NOT NULL,
  `strTeacherFirstName` varchar(45) DEFAULT NULL,
  `strTeacherMidName` varchar(45) DEFAULT NULL,
  `strTeacherLastName` varchar(45) DEFAULT NULL,
  `dtmTeacherBirth` date DEFAULT NULL,
  `strTeacherGender` varchar(6) DEFAULT NULL,
  `strTeacherMail` varchar(60) DEFAULT NULL,
  `strTeacherStatus` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`intTeacher`),
  UNIQUE KEY `strTeacherID` (`strTeacherID`),
  KEY `strTeacherID_2` (`strTeacherID`),
  KEY `tblteacher_ibfk_1_idx` (`strTeacherID`),
  CONSTRAINT `tblteacher_ibfk_1_idx` FOREIGN KEY (`strTeacherID`) REFERENCES `tbluser` (`strUserName`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblteacher`
--

LOCK TABLES `tblteacher` WRITE;
/*!40000 ALTER TABLE `tblteacher` DISABLE KEYS */;
INSERT INTO `tblteacher` VALUES (1,'2018000001','Alyannah','Ramos','Santos','1994-09-22','Female','alrosan@gmail.com','Inactive'),(2,'2018000005','Leslie','Ostia','Escaro','1997-02-02','Female','lesllieescaro@gmail.com','Inactive'),(6,'2018000002','Jophel Cyrus','Dacanay','Ibasan','1996-11-02','Male','iamshade02@gmail.com','Inactive'),(11,'2018000008','Kim','Tan','Liu','1994-09-09','Male','ktl@mail.com','Inactive'),(17,'2018000009','Kyle','TK','Tarroza','1990-09-09','Female','ktlktk@ymail.com','Active'),(18,'2018000011','Keith','Torres','Liu','1992-02-02','Male','ktl22@gmail.com','Active'),(19,'2018000012','Yoon','Gi','Min','1993-03-09','Male','myg@naver.com','Active'),(20,'2018000013','Lyndon','Montes','Cariaga','1998-09-09','Male','lmc@outlook.com','Active'),(21,'2018000014','Mycah','Lopez','Ferrero','1997-12-02','Female','mlf@naver.com','Active'),(22,'2018000015','Keith','Emanuel','Hajime','1997-12-01','Male','keh@mail.com','Active'),(23,'2018000016','JOph','Dacanay','Ohara','1996-09-09','Male','iamshade02@gmail.com','Active'),(27,'2018000017','Lia','Mar','Emar','1990-08-31','Female','limarmar@mail.com','Active'),(28,'2018000018','Alahn Mohamed','Merinda','Romero','1989-02-08','Male','almero@mail.com','Active'),(29,'2018000019','Lynnard','Cariaga','Jimenez','1997-09-09','Male','lmc@mail.com','Active'),(30,'2018000020','Mikaela','Lopez','Guerrero','1997-02-02','Female','flm@gmail.com','Active'),(31,'2018000021','Lyon','Marquez','Corrales','1997-09-09','Male','lmc@yahoo.com','Active'),(32,'2018000022','Mica','','Garcia','1992-09-09','Female','micagarcia@mail.com','Active'),(33,'2018000023','Le','mka','Ostia','1997-02-02','Female','leslie@yahoo.com','Active'),(34,'2018000024','Michelle','','Kim','1997-09-09','Female','ljaldj@mail.com','Active'),(35,'2018000025','Ria','','Po','1997-07-07','Female','hassd@mail.com','Active'),(36,'2018000026','An','Wen','Yi','1996-02-02','Female','tripleW@gmail.com','Active'),(37,'2018000027','Lia','','Ferrero','1992-05-05','Female','liferro@mail.com','Active'),(38,'2018000028','Lin','','Torres','1992-03-03','Female','tl@yahoo.com','Active'),(39,'2018000029','Min','Lee','Ho','1978-08-31','Male','minleeho@yahoo.com','Active');
/*!40000 ALTER TABLE `tblteacher` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbluser`
--

DROP TABLE IF EXISTS `tbluser`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbluser` (
  `intUserID` int(11) NOT NULL AUTO_INCREMENT,
  `strUserName` varchar(10) DEFAULT NULL,
  `strPassword` varchar(45) DEFAULT NULL,
  `intfkRole` int(11) DEFAULT NULL,
  PRIMARY KEY (`intUserID`),
  UNIQUE KEY `strUserName` (`strUserName`),
  KEY `strUserName_2` (`strUserName`),
  KEY `tbluser_ibfk_1_idx` (`intfkRole`),
  CONSTRAINT `tbluser_ibfk_1` FOREIGN KEY (`intfkRole`) REFERENCES `tbluserrole` (`intRole`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=98 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbluser`
--

LOCK TABLES `tbluser` WRITE;
/*!40000 ALTER TABLE `tbluser` DISABLE KEYS */;
INSERT INTO `tbluser` VALUES (1,'2018000000','123',1),(2,'2018000001','123',2),(3,'2018000002','123',3),(4,'2018000003','123',3),(5,'2018000004','123',3),(6,'2018000005','123',2),(7,'2018000006','123',3),(8,'2018000007','123',3),(9,'2013000002','123',3),(13,'2018000008','123',2),(17,'2018000010','123',3),(22,'2018000009','123',2),(23,'2018000011','123',2),(24,'2018000012','123',2),(25,'2018000013','123',2),(26,'2019000001','123',3),(27,'2019000002','123',3),(28,'2019000003','123',3),(29,'2019000004','123',3),(30,'2019000005','123',3),(31,'2019000006','123',3),(32,'2019000007','123',3),(33,'2019000008','123',3),(34,'2019000009','123',3),(35,'2019000010','123',3),(36,'2019000011','123',3),(37,'2019000012','123',3),(40,'2019000013','123',3),(42,'2018000014','123',2),(43,'2018000015','123',2),(44,'2018000016','123',2),(45,'2019000014','123',3),(58,'2019000015','123',3),(62,'2018000017','123',2),(63,'2018000018','123',2),(64,'2019000016','123',3),(67,'2019000017','123',3),(71,'2018000019','123',2),(72,'2018000020','123',2),(73,'2019000018','123',3),(74,'2018000021','123',2),(75,'2018000022','123',2),(76,'2019000019','123',3),(77,'2019000020','123',3),(78,'2019000021','123',3),(79,'2018000023','123',2),(80,'2019000022','123',3),(81,'2018000024','123',2),(82,'2018000025','123',2),(83,'2018000026','123',2),(84,'2019000023','123',3),(85,'2019000024','123',3),(89,'2019000025','123',3),(90,'2018000027','123',2),(91,'2019000026','123',3),(93,'2018000028','123',2),(94,'2019000027','123',3),(95,'2018000029','123',2),(96,'2019000028','123',3),(97,'2019000029','123',3);
/*!40000 ALTER TABLE `tbluser` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbluserrole`
--

DROP TABLE IF EXISTS `tbluserrole`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbluserrole` (
  `intRole` int(11) NOT NULL AUTO_INCREMENT,
  `strRoleName` varchar(45) DEFAULT NULL,
  `strRoleDesc` varchar(100) DEFAULT NULL,
  `strRoleStat` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`intRole`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbluserrole`
--

LOCK TABLES `tbluserrole` WRITE;
/*!40000 ALTER TABLE `tbluserrole` DISABLE KEYS */;
INSERT INTO `tbluserrole` VALUES (1,'Administrator','All Access and etc','Active'),(2,'Teacher','Encoding and Viewing of Student Grades, Viewing of Schedule','Active'),(3,'Student','Viewing of Grades and Class Schedules','Active'),(4,'Parent','View','Inactive'),(5,'Intern','Tester','Inactive'),(6,'Teacher','Nambabagsak','Active');
/*!40000 ALTER TABLE `tbluserrole` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblweek`
--

DROP TABLE IF EXISTS `tblweek`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblweek` (
  `intDay` int(11) NOT NULL AUTO_INCREMENT,
  `strWeekName` varchar(10) NOT NULL,
  PRIMARY KEY (`intDay`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblweek`
--

LOCK TABLES `tblweek` WRITE;
/*!40000 ALTER TABLE `tblweek` DISABLE KEYS */;
INSERT INTO `tblweek` VALUES (1,'Monday'),(2,'Tuesday'),(3,'Wednesday'),(4,'Thursday'),(5,'Friday'),(6,'Saturday');
/*!40000 ALTER TABLE `tblweek` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-03-22 11:24:26
