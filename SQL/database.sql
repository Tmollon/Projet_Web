-- MySQL dump 10.13  Distrib 5.7.36, for Linux (x86_64)
--
-- Host: localhost    Database: drugs
-- ------------------------------------------------------
-- Server version	5.7.36-0ubuntu0.18.04.1

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
-- Table structure for table `Avis`
--

DROP TABLE IF EXISTS `Avis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Avis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `NomPrenom` varchar(25) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Avis` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Avis`
--

LOCK TABLES `Avis` WRITE;
/*!40000 ALTER TABLE `Avis` DISABLE KEYS */;
INSERT INTO `Avis` VALUES (1,'zaza','test@gmail.com','zaazza'),(2,'feazfzea','test@gmail.com','fezafzeaf'),(3,'efazefzaer','test1@gmail.com','fezafzeafzae'),(4,'eazfezafeza','test2@gmail.com','azefzeafazef'),(5,'eztretg','blabla@gmail.fr','eferafafr'),(6,'faze','ezafzef@fzeafe.fr','ezfazf'),(7,'efaezff','ezafeazf@efaezf.fr','azefeazfezfa'),(8,'efaezff','ezafeazf@efaezf.fr','azefeazfezfa'),(9,'azerfezaf','ezafaezf@hrezhgre.fr','efzaezfazefe'),(10,'azerfezaf','ezafaezf@hrezhgre.fr','efzaezfazefe'),(11,'greazgza','tom@gmol.com','feazfaze'),(12,'greazgza','tom@gmol.com','feazfaze'),(13,'teztazg','azeazer@gmail.com','zeafezfaze');
/*!40000 ALTER TABLE `Avis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `membres`
--

DROP TABLE IF EXISTS `membres`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `membres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(25) NOT NULL,
  `mdp` char(32) NOT NULL,
  `email` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `membres`
--

LOCK TABLES `membres` WRITE;
/*!40000 ALTER TABLE `membres` DISABLE KEYS */;
INSERT INTO `membres` VALUES (1,'root','5f4dcc3b5aa765d61d8327deb882cf99',''),(2,'test','d693b084ed2de11b14bfbdfdc65742e6',''),(3,'','',''),(4,'test1','64d37ec5ca5c21c72dc0fdee5a9ca897','test1@gmail.com'),(5,'rererere','1f3962c1cadd011b08b4050f87545aa1','tom.mollon@gmail.com'),(6,'aaa','47bce5c74f589f4867dbd57e9ca9f808','aaa@aaa.com'),(7,'test42','098f6bcd4621d373cade4e832627b4f6','test42@gmail.com');
/*!40000 ALTER TABLE `membres` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `panier`
--

DROP TABLE IF EXISTS `panier`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `panier` (
  `IDpanier` int(11) NOT NULL,
  `Contenue` varchar(100) DEFAULT NULL,
  `Total` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`IDpanier`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `panier`
--

LOCK TABLES `panier` WRITE;
/*!40000 ALTER TABLE `panier` DISABLE KEYS */;
/*!40000 ALTER TABLE `panier` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produit`
--

DROP TABLE IF EXISTS `produit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produit` (
  `id` int(11) NOT NULL,
  `NomProduit` varchar(100) DEFAULT NULL,
  `Quantité` varchar(100) DEFAULT NULL,
  `Prix` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produit`
--

LOCK TABLES `produit` WRITE;
/*!40000 ALTER TABLE `produit` DISABLE KEYS */;
/*!40000 ALTER TABLE `produit` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-11-30 19:51:04
