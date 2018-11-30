-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.6.26-log


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema smartride
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ smartride;
USE smartride;

--
-- Table structure for table `smartride`.`colegios`
--

DROP TABLE IF EXISTS `colegios`;
CREATE TABLE `colegios` (
  `idcolegios` int(11) NOT NULL,
  `colegio` varchar(45) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `logo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idcolegios`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `smartride`.`colegios`
--

/*!40000 ALTER TABLE `colegios` DISABLE KEYS */;
/*!40000 ALTER TABLE `colegios` ENABLE KEYS */;


--
-- Table structure for table `smartride`.`conductor`
--

DROP TABLE IF EXISTS `conductor`;
CREATE TABLE `conductor` (
  `idconductor` int(11) NOT NULL,
  `conductor` varchar(45) DEFAULT NULL,
  `telefono` varchar(8) DEFAULT NULL,
  `cedula` varchar(45) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `UnidadTransporte_idUnidadTransporte` int(11) NOT NULL,
  `usuarios_idusuarios` int(11) NOT NULL,
  PRIMARY KEY (`idconductor`),
  KEY `fk_conductor_UnidadTransporte1_idx` (`UnidadTransporte_idUnidadTransporte`),
  KEY `fk_conductor_usuarios1_idx` (`usuarios_idusuarios`),
  CONSTRAINT `fk_conductor_UnidadTransporte1` FOREIGN KEY (`UnidadTransporte_idUnidadTransporte`) REFERENCES `unidadtransporte` (`idUnidadTransporte`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_conductor_usuarios1` FOREIGN KEY (`usuarios_idusuarios`) REFERENCES `usuarios` (`idusuarios`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `smartride`.`conductor`
--

/*!40000 ALTER TABLE `conductor` DISABLE KEYS */;
/*!40000 ALTER TABLE `conductor` ENABLE KEYS */;


--
-- Table structure for table `smartride`.`hijos`
--

DROP TABLE IF EXISTS `hijos`;
CREATE TABLE `hijos` (
  `idhijos` int(11) NOT NULL,
  `nombres` varchar(45) DEFAULT NULL,
  `apellidos` varchar(45) DEFAULT NULL,
  `qr` varchar(45) DEFAULT NULL,
  `colegios_idcolegios` int(11) NOT NULL,
  PRIMARY KEY (`idhijos`),
  KEY `fk_hijos_colegios1_idx` (`colegios_idcolegios`),
  CONSTRAINT `fk_hijos_colegios1` FOREIGN KEY (`colegios_idcolegios`) REFERENCES `colegios` (`idcolegios`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `smartride`.`hijos`
--

/*!40000 ALTER TABLE `hijos` DISABLE KEYS */;
/*!40000 ALTER TABLE `hijos` ENABLE KEYS */;


--
-- Table structure for table `smartride`.`hijos_has_padres`
--

DROP TABLE IF EXISTS `hijos_has_padres`;
CREATE TABLE `hijos_has_padres` (
  `hijos_idhijos` int(11) NOT NULL,
  `padres_idpadres` int(11) NOT NULL,
  PRIMARY KEY (`hijos_idhijos`,`padres_idpadres`),
  KEY `fk_hijos_has_padres_padres1_idx` (`padres_idpadres`),
  KEY `fk_hijos_has_padres_hijos1_idx` (`hijos_idhijos`),
  CONSTRAINT `fk_hijos_has_padres_hijos1` FOREIGN KEY (`hijos_idhijos`) REFERENCES `hijos` (`idhijos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_hijos_has_padres_padres1` FOREIGN KEY (`padres_idpadres`) REFERENCES `padres` (`idpadres`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `smartride`.`hijos_has_padres`
--

/*!40000 ALTER TABLE `hijos_has_padres` DISABLE KEYS */;
/*!40000 ALTER TABLE `hijos_has_padres` ENABLE KEYS */;


--
-- Table structure for table `smartride`.`imagentransporte`
--

DROP TABLE IF EXISTS `imagentransporte`;
CREATE TABLE `imagentransporte` (
  `idImagenTransporte` int(11) NOT NULL,
  `imagen` varchar(90) DEFAULT NULL,
  `UnidadTransporte_idUnidadTransporte` int(11) NOT NULL,
  PRIMARY KEY (`idImagenTransporte`),
  KEY `fk_ImagenTransporte_UnidadTransporte1_idx` (`UnidadTransporte_idUnidadTransporte`),
  CONSTRAINT `fk_ImagenTransporte_UnidadTransporte1` FOREIGN KEY (`UnidadTransporte_idUnidadTransporte`) REFERENCES `unidadtransporte` (`idUnidadTransporte`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `smartride`.`imagentransporte`
--

/*!40000 ALTER TABLE `imagentransporte` DISABLE KEYS */;
/*!40000 ALTER TABLE `imagentransporte` ENABLE KEYS */;


--
-- Table structure for table `smartride`.`padres`
--

DROP TABLE IF EXISTS `padres`;
CREATE TABLE `padres` (
  `idpadres` int(11) NOT NULL,
  `nombres` varchar(45) DEFAULT NULL,
  `apellidos` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `usuarios_idusuarios` int(11) NOT NULL,
  PRIMARY KEY (`idpadres`),
  KEY `fk_padres_usuarios1_idx` (`usuarios_idusuarios`),
  CONSTRAINT `fk_padres_usuarios1` FOREIGN KEY (`usuarios_idusuarios`) REFERENCES `usuarios` (`idusuarios`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `smartride`.`padres`
--

/*!40000 ALTER TABLE `padres` DISABLE KEYS */;
/*!40000 ALTER TABLE `padres` ENABLE KEYS */;


--
-- Table structure for table `smartride`.`transportistas`
--

DROP TABLE IF EXISTS `transportistas`;
CREATE TABLE `transportistas` (
  `idtransportistas` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `cedula` varchar(45) DEFAULT NULL,
  `usuarios_idusuarios` int(11) NOT NULL,
  PRIMARY KEY (`idtransportistas`),
  KEY `fk_transportistas_usuarios_idx` (`usuarios_idusuarios`),
  CONSTRAINT `fk_transportistas_usuarios` FOREIGN KEY (`usuarios_idusuarios`) REFERENCES `usuarios` (`idusuarios`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `smartride`.`transportistas`
--

/*!40000 ALTER TABLE `transportistas` DISABLE KEYS */;
/*!40000 ALTER TABLE `transportistas` ENABLE KEYS */;


--
-- Table structure for table `smartride`.`turnos`
--

DROP TABLE IF EXISTS `turnos`;
CREATE TABLE `turnos` (
  `idturnos` int(11) NOT NULL,
  `turno` varchar(45) DEFAULT NULL,
  `colegios_idcolegios` int(11) NOT NULL,
  PRIMARY KEY (`idturnos`),
  KEY `fk_turnos_colegios1_idx` (`colegios_idcolegios`),
  CONSTRAINT `fk_turnos_colegios1` FOREIGN KEY (`colegios_idcolegios`) REFERENCES `colegios` (`idcolegios`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `smartride`.`turnos`
--

/*!40000 ALTER TABLE `turnos` DISABLE KEYS */;
/*!40000 ALTER TABLE `turnos` ENABLE KEYS */;


--
-- Table structure for table `smartride`.`unidadtransporte`
--

DROP TABLE IF EXISTS `unidadtransporte`;
CREATE TABLE `unidadtransporte` (
  `idUnidadTransporte` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `transportistas_idtransportistas` int(11) NOT NULL,
  `colegios_idcolegios` int(11) NOT NULL,
  PRIMARY KEY (`idUnidadTransporte`),
  KEY `fk_UnidadTransporte_transportistas1_idx` (`transportistas_idtransportistas`),
  KEY `fk_UnidadTransporte_colegios1_idx` (`colegios_idcolegios`),
  CONSTRAINT `fk_UnidadTransporte_colegios1` FOREIGN KEY (`colegios_idcolegios`) REFERENCES `colegios` (`idcolegios`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_UnidadTransporte_transportistas1` FOREIGN KEY (`transportistas_idtransportistas`) REFERENCES `transportistas` (`idtransportistas`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `smartride`.`unidadtransporte`
--

/*!40000 ALTER TABLE `unidadtransporte` DISABLE KEYS */;
/*!40000 ALTER TABLE `unidadtransporte` ENABLE KEYS */;


--
-- Table structure for table `smartride`.`unidadtransporte_has_imagentransporte`
--

DROP TABLE IF EXISTS `unidadtransporte_has_imagentransporte`;
CREATE TABLE `unidadtransporte_has_imagentransporte` (
  `UnidadTransporte_idUnidadTransporte` int(11) NOT NULL,
  `ImagenTransporte_idImagenTransporte` int(11) NOT NULL,
  PRIMARY KEY (`UnidadTransporte_idUnidadTransporte`,`ImagenTransporte_idImagenTransporte`),
  KEY `fk_UnidadTransporte_has_ImagenTransporte_ImagenTransporte1_idx` (`ImagenTransporte_idImagenTransporte`),
  KEY `fk_UnidadTransporte_has_ImagenTransporte_UnidadTransporte1_idx` (`UnidadTransporte_idUnidadTransporte`),
  CONSTRAINT `fk_UnidadTransporte_has_ImagenTransporte_ImagenTransporte1` FOREIGN KEY (`ImagenTransporte_idImagenTransporte`) REFERENCES `imagentransporte` (`idImagenTransporte`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_UnidadTransporte_has_ImagenTransporte_UnidadTransporte1` FOREIGN KEY (`UnidadTransporte_idUnidadTransporte`) REFERENCES `unidadtransporte` (`idUnidadTransporte`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `smartride`.`unidadtransporte_has_imagentransporte`
--

/*!40000 ALTER TABLE `unidadtransporte_has_imagentransporte` DISABLE KEYS */;
/*!40000 ALTER TABLE `unidadtransporte_has_imagentransporte` ENABLE KEYS */;


--
-- Table structure for table `smartride`.`usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `idusuarios` int(11) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `Foto` varchar(45) DEFAULT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idusuarios`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `smartride`.`usuarios`
--

/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
