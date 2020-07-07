-- MySQL dump 10.17  Distrib 10.3.22-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: comidaya
-- ------------------------------------------------------
-- Server version	10.3.22-MariaDB-1ubuntu1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `detalle_pro`
--

DROP TABLE IF EXISTS `detalle_pro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detalle_pro` (
  `id_detalleped` int(11) NOT NULL,
  `id_factura` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `catidad` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  PRIMARY KEY (`id_detalleped`),
  KEY `id_producto` (`id_producto`),
  KEY `id_factura` (`id_factura`),
  CONSTRAINT `detalle_pro_ibfk_2` FOREIGN KEY (`id_factura`) REFERENCES `factura` (`id_factura`),
  CONSTRAINT `detalle_pro_ibfk_3` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detalle_pro`
--

LOCK TABLES `detalle_pro` WRITE;
/*!40000 ALTER TABLE `detalle_pro` DISABLE KEYS */;
/*!40000 ALTER TABLE `detalle_pro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `domicilio`
--

DROP TABLE IF EXISTS `domicilio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `domicilio` (
  `id_domicilio` int(11) NOT NULL AUTO_INCREMENT,
  `pais` varchar(30) NOT NULL,
  `provincia` varchar(30) NOT NULL,
  `partido` varchar(30) NOT NULL,
  `dirección` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `altura` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `cp` varchar(10) NOT NULL,
  `latitud` double NOT NULL,
  `longitud` double NOT NULL,
  PRIMARY KEY (`id_domicilio`),
  KEY `id_pais` (`pais`),
  KEY `id_provincia` (`provincia`),
  KEY `id_partido` (`partido`),
  KEY `id_cp` (`cp`),
  CONSTRAINT `domicilio_ibfk_4` FOREIGN KEY (`id_domicilio`) REFERENCES `usuarios` (`id_domicilio`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `domicilio`
--

LOCK TABLES `domicilio` WRITE;
/*!40000 ALTER TABLE `domicilio` DISABLE KEYS */;
/*!40000 ALTER TABLE `domicilio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estado`
--

DROP TABLE IF EXISTS `estado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estado` (
  `id_estado` int(11) NOT NULL AUTO_INCREMENT,
  `des_estado` varchar(30) NOT NULL,
  PRIMARY KEY (`id_estado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estado`
--

LOCK TABLES `estado` WRITE;
/*!40000 ALTER TABLE `estado` DISABLE KEYS */;
/*!40000 ALTER TABLE `estado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `factura`
--

DROP TABLE IF EXISTS `factura`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `factura` (
  `id_factura` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `id_numerodeped` int(11) NOT NULL,
  `importe_total` int(11) NOT NULL,
  PRIMARY KEY (`id_factura`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_numerodeped` (`id_numerodeped`),
  CONSTRAINT `factura_ibfk_2` FOREIGN KEY (`id_numerodeped`) REFERENCES `pedidos` (`id_numerodeped`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `factura`
--

LOCK TABLES `factura` WRITE;
/*!40000 ALTER TABLE `factura` DISABLE KEYS */;
/*!40000 ALTER TABLE `factura` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `incidentes`
--

DROP TABLE IF EXISTS `incidentes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `incidentes` (
  `id_incidente` int(11) NOT NULL,
  `id_numerodeped` int(11) NOT NULL,
  `altaincidencia` datetime NOT NULL,
  `bajaincidencia` datetime NOT NULL,
  `obs_incidencia` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  PRIMARY KEY (`id_incidente`),
  KEY `id_numerodeped` (`id_numerodeped`),
  CONSTRAINT `incidentes_ibfk_1` FOREIGN KEY (`id_numerodeped`) REFERENCES `pedidos` (`id_numerodeped`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `incidentes`
--

LOCK TABLES `incidentes` WRITE;
/*!40000 ALTER TABLE `incidentes` DISABLE KEYS */;
/*!40000 ALTER TABLE `incidentes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `locales`
--

DROP TABLE IF EXISTS `locales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `locales` (
  `id_local` int(11) NOT NULL AUTO_INCREMENT,
  `razon_social` varchar(50) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `cuit` int(11) NOT NULL,
  `descripcion` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `act` int(10) NOT NULL,
  PRIMARY KEY (`id_local`),
  KEY `id_usuario` (`id_usuario`),
  CONSTRAINT `locales_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `locales`
--

LOCK TABLES `locales` WRITE;
/*!40000 ALTER TABLE `locales` DISABLE KEYS */;
INSERT INTO `locales` VALUES (3,'0',126,0,'0',0),(4,'0',128,0,'0',0);
/*!40000 ALTER TABLE `locales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedidos`
--

DROP TABLE IF EXISTS `pedidos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedidos` (
  `id_numerodeped` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `fechacreado` datetime NOT NULL,
  `fechaentregado` datetime NOT NULL,
  `id_estado` int(11) NOT NULL,
  `id_rep` int(11) NOT NULL,
  `importe_total` int(11) NOT NULL,
  PRIMARY KEY (`id_numerodeped`),
  KEY `id_rep` (`id_rep`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_estado` (`id_estado`),
  CONSTRAINT `pedidos_ibfk_4` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`),
  CONSTRAINT `pedidos_ibfk_5` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`),
  CONSTRAINT `pedidos_ibfk_6` FOREIGN KEY (`id_rep`) REFERENCES `repartidor` (`id_rep`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedidos`
--

LOCK TABLES `pedidos` WRITE;
/*!40000 ALTER TABLE `pedidos` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedidos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permiso`
--

DROP TABLE IF EXISTS `permiso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permiso` (
  `id_permiso` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_permiso`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permiso`
--

LOCK TABLES `permiso` WRITE;
/*!40000 ALTER TABLE `permiso` DISABLE KEYS */;
/*!40000 ALTER TABLE `permiso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `producto`
--

DROP TABLE IF EXISTS `producto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `producto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_producto` int(10) NOT NULL,
  `nombreprod` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `precio` int(11) NOT NULL,
  `stock` int(10) NOT NULL,
  `descripcionpro` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `id_local` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `nombreprod` (`nombreprod`),
  KEY `id_local` (`id_local`),
  CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_local`) REFERENCES `locales` (`id_local`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `producto`
--

LOCK TABLES `producto` WRITE;
/*!40000 ALTER TABLE `producto` DISABLE KEYS */;
INSERT INTO `producto` VALUES (1,0,'Coca Cola',115,50,'Gaseosa',3),(2,0,'Gaseosa Manaos',50,50,'Gaseosa Economica',3),(3,0,'Fernet',60,60,'Bebida Alcohólica',3),(4,0,'Gancia',155,50,'Bebida Alcoholica',3),(5,0,'Gancia one',155,50,'Bebida Alcohólica',3),(6,0,'Gaseosa de Prueba',120,50,'Gaseosa de Prueba',3),(7,1,'Milanesa',150,50,'de carne',3),(8,1,'Hamburguesa completa',50,20,'con huevo,lechuga y tomate',4),(9,1,'Empanada',78,50,'De pollo',3),(10,1,'Empanada',78,50,'De pollo',3),(14,0,'Cerveza',110,150,'Bebida Alcohólica',3);
/*!40000 ALTER TABLE `producto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `repartidor`
--

DROP TABLE IF EXISTS `repartidor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `repartidor` (
  `id_rep` int(11) NOT NULL AUTO_INCREMENT,
  `estado` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `tipoveh` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `modeloveh` varchar(30) NOT NULL,
  `n_motor` varchar(30) NOT NULL,
  `n_patente` varchar(30) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `act` int(10) NOT NULL,
  PRIMARY KEY (`id_rep`),
  KEY `id_vehiculo` (`tipoveh`),
  KEY `id_usuario` (`id_usuario`),
  CONSTRAINT `repartidor_ibfk_3` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `repartidor`
--

LOCK TABLES `repartidor` WRITE;
/*!40000 ALTER TABLE `repartidor` DISABLE KEYS */;
/*!40000 ALTER TABLE `repartidor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `tipodoc` varchar(30) NOT NULL,
  `n_documento` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `id_domicilio` int(11) NOT NULL,
  `telefono` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `clave` varchar(64) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `condicion` int(1) NOT NULL,
  `cod_activacion` varchar(100) NOT NULL,
  `tipo` varchar(10) NOT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `id_domicilio_3` (`id_domicilio`),
  KEY `id_domicilio` (`id_domicilio`),
  KEY `id_tipodoc` (`tipodoc`),
  KEY `id_domicilio_2` (`id_domicilio`)
) ENGINE=InnoDB AUTO_INCREMENT=129 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (41,'leandro','arganaraz','DNI','39336782',5,'1526149636','leandrito.0220@gmail.com','$2y$10$.pbl1rgMt7q.VW7D7rA39.xZpmABr2zLOMjUGkoBXV6Q/6JE5dYde',0,'05baedbc33cc7367f13ba5a47e1e7a64','0'),(44,'leandro','arganaraz','DNI','39853728',6,'1526149636','leandromati@gmail.com','$2y$10$q6jnNI80cOhspoFcIuMUFelucTjhqXSiYSrw3uZ.I3MhDyzqEnXau',0,'16805acc50701e4904620cfe12273731','0'),(45,'leandro','arganaraz','DNI','39334712',7,'1526149636','leandromatias.0220sda@gmail.com','$2y$10$pgWx9K5uWYUcSolvNIo4l.q8.xw4SRXUQRA8K9/p39ZtmMJFohyme',0,'21f5b7b39e743f988897e59db5359949','0'),(46,'leandro','arganaraz','DNI','39335728',8,'1526149636','leandromatias.0220asdasd@gmail.com','$2y$10$TJwDS9P8YurJiGUeA2.sQeki/wfNirwjhue7JlQsYU5/q9i4LI7rS',0,'1b34d47c57a081fbfeec93a1065e69bd','0'),(49,'leandro','arganaraz','DNI','35336728',9,'1526149636','leandromatias.0220asdsad@gmail.com','$2y$10$4gLq7JCAQXBIO9nd/LipP.JUCBgfxSEUxvscgUth06Cxx20r2N/hy',0,'152c82f16b0a4fe70634ef1d30b1fff1','0'),(52,'leandro','arganaraz','DNI','39376728',12,'1526149636','leandromatias.0220jhgj@gmail.com','$2y$10$rxo7aOIrJO.1kGnDwLBmN.ntr.Y3xTw68lsCM0ukB/M237IYm8x1y',0,'ff121b1a4e7ae8cb80f69c61577dbb1f','0'),(53,'leandro','arganaraz','DNI','37336728',13,'1526149636','leandromatias.0220fdbf@gmail.com','$2y$10$dAG/XC.E1d/Na3avz.x75OycPgT7OCXJf9zPnKYJO/cbedmMKoN/6',1,'b87546c7a8c2532d1c07c4399786f5ac','0'),(66,'Nazarena','Almada','DNI','20235135165',19,'0','nazarenadelrosarioalmada@gmail.com','$2y$10$cCed5QUdwfcb4dbks10Ht.LnvWvr5dlK6w6tYVq6xgnjkETsq/bga',0,'8184b8efe7b7ce40169f16cd1e49a176','0'),(126,'leandro','argañaraz','DNI','39336728',20,'0','leandromatias.0220@gmail.com','$2y$10$e9GiJElb0nltLJzLIEsIJ.SlsElMYtefQuQh0tQdOnL82YQ7fvixC',1,'0524495e6d66cb5db1bae29c4fad6941','1'),(127,'leandro','argañaraz','DNI','39336728',21,'0','leandromatiasarganaraz@gmail.com','$2y$10$yN0baS0jV7Z2.AJSClZwROYyjfU8MwYtv1gtH7gu78Fe6Ax1O1SAq',1,'95452ea29caea2a49ecc4d1c10789c67','0'),(128,'leandro','arganaraz','DNI','39336728',22,'0','pruebasleandrom@gmail.com','$2y$10$12s8sSTan/s3B6pCalF.4uAaT4E9fsAJUYNfcYsT7YE..4pYPlpaS',1,'755c1adfab9a0e4a2be72c25e7eeccca','1');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios_permiso`
--

DROP TABLE IF EXISTS `usuarios_permiso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios_permiso` (
  `id_usario_permiso` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `id_permiso` int(11) NOT NULL,
  PRIMARY KEY (`id_usario_permiso`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_permiso` (`id_permiso`),
  CONSTRAINT `usuarios_permiso_ibfk_3` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`),
  CONSTRAINT `usuarios_permiso_ibfk_4` FOREIGN KEY (`id_permiso`) REFERENCES `permiso` (`id_permiso`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios_permiso`
--

LOCK TABLES `usuarios_permiso` WRITE;
/*!40000 ALTER TABLE `usuarios_permiso` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuarios_permiso` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-07-07 16:46:49
