-- MySQL dump 10.13  Distrib 5.5.32, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: pruebas
-- ------------------------------------------------------
-- Server version	5.5.32-0ubuntu0.13.04.1

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
-- Table structure for table `pagos`
--

DROP TABLE IF EXISTS `pagos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pagos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(128) NOT NULL,
  `periodo` varchar(32) NOT NULL,
  `constante` tinyint(1) DEFAULT NULL,
  `monto` int(11) NOT NULL,
  `descripcion` text NOT NULL,
  `actualizacion` datetime NOT NULL,
  `creacion` datetime NOT NULL,
  `pago_realizado` int(11) DEFAULT NULL,
  `fecha_pago` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_usuario` (`id_usuario`),
  CONSTRAINT `pagos_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pagos`
--

LOCK TABLES `pagos` WRITE;
/*!40000 ALTER TABLE `pagos` DISABLE KEYS */;
INSERT INTO `pagos` VALUES (1,2,'Agua2','semanal',0,1000,'descripcion agua2','2013-11-03 20:45:24','2013-11-03 19:55:33',100000,'2013-06-03 00:00:00'),(2,2,'Luz','mayo',0,123000,'D luz','2013-11-03 20:04:57','2013-11-03 20:04:57',6000,'2013-04-04 00:00:00'),(3,2,'agua','semanal',1,123123,'descripcion','2013-11-03 20:29:31','2013-11-03 20:29:10',NULL,NULL),(4,2,'Telefono','mensual',1,50000,'Telefono','2013-11-03 20:34:37','2013-11-03 20:34:37',NULL,NULL),(5,3,'luz','mensual',1,50000,'Pago de la luz','2013-11-03 21:23:39','2013-11-03 21:23:39',50000,'2012-06-03 00:00:00'),(6,3,'agua','semanal',0,1000,'adasdfasdf','2013-11-03 21:25:44','2013-11-03 21:25:44',100000,'2008-01-01 00:00:00'),(7,2,'Universidad','semanal',1,50000,'Pago de la universidad','2013-11-14 12:39:22','2013-11-14 12:39:22',50000,'2013-11-14 00:00:00'),(8,2,'Universidad 2013-11-21','semanal',1,50000,'Pago de la universidad','2013-11-14 12:48:11','2013-11-14 12:48:11',50000,'2013-11-21 00:00:00'),(9,2,'Universidad 2013-11-21 2013-11-28','semanal',1,50000,'Pago de la universidad','2013-11-14 12:49:25','2013-11-14 12:49:25',NULL,NULL),(10,2,'Universidad 2','mensual',1,1000,'Universidad 2','2013-11-14 12:50:01','2013-11-14 12:50:01',1000,'2013-11-14 00:00:00'),(11,2,'Universidad 2 2013-12-14','mensual',1,1000,'Universidad 2','2013-11-14 12:50:14','2013-11-14 12:50:14',NULL,NULL);
/*!40000 ALTER TABLE `pagos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(128) NOT NULL,
  `clave` varchar(128) NOT NULL,
  `nombres` varchar(128) NOT NULL,
  `apellidos` varchar(128) NOT NULL,
  `fecha` datetime NOT NULL,
  `correo` varchar(128) NOT NULL,
  `salt` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'123','123','123','123','2008-01-01 00:00:00','123','123'),(2,'jorge','0wDcgeM1YbQNZDyBNfChcQ==','Jorge','Gonzalez','2008-01-01 00:00:00','jag2kn@gmail.com',''),(3,'michelle','0wDcgeM1YbQNZDyBNfChcQ==','Michelle','Garcia','2014-01-03 00:00:00','michelle@gmail.com','');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-11-14 13:21:06
