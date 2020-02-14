-- MySQL dump 10.13  Distrib 8.0.19, for macos10.15 (x86_64)
--
-- Host: localhost    Database: elbosque
-- ------------------------------------------------------
-- Server version	5.7.26

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `rutas`
--

DROP TABLE IF EXISTS `rutas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rutas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vehiculo` varchar(6) DEFAULT NULL,
  `material` varchar(45) DEFAULT NULL,
  `distancia` int(11) DEFAULT NULL,
  `peso` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rutas`
--

LOCK TABLES `rutas` WRITE;
/*!40000 ALTER TABLE `rutas` DISABLE KEYS */;
INSERT INTO `rutas` VALUES (1,'FFT55j','ARENA',45,45),(2,'MTV23E','VIGA DE ACERO',45,45),(3,'MTV23k','CEMENTO',78,88),(4,'hhhhhg','ARENA',777,0),(5,'FFT555','ARENA',777,0);
/*!40000 ALTER TABLE `rutas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'mesguerra','fc5364bf9dbfa34954526becad136d4b','Mauricio','Esguerra');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vehiculo`
--

DROP TABLE IF EXISTS `vehiculo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `vehiculo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `placa` varchar(6) NOT NULL,
  `conductor` varchar(50) NOT NULL,
  `tecnico_fecha_ini` date NOT NULL,
  `tecnico_fecha_fin` date NOT NULL,
  `soat_fecha_ini` date NOT NULL,
  `sota_fecha_fin` date NOT NULL,
  `seguro_fecha_ini` date NOT NULL,
  `seguro_fecha_fin` date NOT NULL,
  `capacidad` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vehiculo`
--

LOCK TABLES `vehiculo` WRITE;
/*!40000 ALTER TABLE `vehiculo` DISABLE KEYS */;
INSERT INTO `vehiculo` VALUES (1,'MTV233','1','2020-02-02','2020-02-08','2020-02-03','2020-02-04','2020-02-03','2020-02-04',30),(2,'FFT555','JUAN MARTINEZ','2020-02-13','2020-02-13','2020-02-20','2020-02-29','2020-02-29','2020-02-29',30),(6,'MTV23E','JUAN MARTINEZ','2020-01-31','2020-02-21','2020-02-14','2020-02-29','2020-02-21','2020-02-23',48),(8,'MTV238','JUAN MARTINEZ','2020-02-08','2020-02-13','2020-02-21','2020-02-15','2020-02-08','2020-02-13',1),(9,'MTV2yy','JUAN MARTINEZ','2020-12-30','2020-12-31','2020-12-31','2020-12-31','2020-12-31','2020-12-31',55),(10,'MTV23k','JUAN MARTINEZ','2020-12-31','2020-12-31','2020-12-31','2020-12-31','2020-12-31','2020-12-31',5),(11,'hhhhhh','JUAN MARTINEZ','2020-12-31','2020-12-31','2020-12-31','2020-12-31','2020-12-31','2020-12-31',6),(12,'hhhhhd','JUAN MARTINEZ','2020-12-31','2020-12-31','2020-12-31','2020-12-31','2020-12-31','2020-12-31',6),(13,'hhhhhg','JUAN MARTINEZ','2020-12-31','2020-12-31','2020-12-31','2020-12-31','2020-12-31','2020-12-31',6),(14,'FFFFFF','JUAN MARTINEZ','2020-12-31','2020-12-31','2020-12-31','2020-01-01','2020-01-01','2020-01-01',1),(15,'MTV23i','JUAN MARTINEZ','2020-12-31','2020-12-31','2020-12-31','2020-12-31','2020-12-31','2020-12-31',3),(16,'FFT55j','ggggg','2020-12-31','2020-12-31','2020-12-31','2020-12-31','2020-12-31','2020-12-31',90);
/*!40000 ALTER TABLE `vehiculo` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-02-13 22:58:41
