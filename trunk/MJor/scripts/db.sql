-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.5.27 - MySQL Community Server (GPL)
-- SO del servidor:              Win32
-- HeidiSQL Versión:             8.1.0.4545
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura de base de datos para mjor
CREATE DATABASE IF NOT EXISTS `mjor` /*!40100 DEFAULT CHARACTER SET latin1 COLLATE latin1_spanish_ci */;
USE `mjor`;


-- Volcando estructura para tabla mjor.campanias
CREATE TABLE IF NOT EXISTS `campanias` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(300) COLLATE latin1_spanish_ci NOT NULL,
  `Active` char(1) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- La exportación de datos fue deseleccionada.


-- Volcando estructura para tabla mjor.empleados
CREATE TABLE IF NOT EXISTS `empleados` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(300) COLLATE latin1_spanish_ci NOT NULL,
  `Address` varchar(300) COLLATE latin1_spanish_ci NOT NULL,
  `DNI` varchar(10) COLLATE latin1_spanish_ci NOT NULL,
  `CUIL` varchar(15) COLLATE latin1_spanish_ci NOT NULL,
  `EntryDate` date NOT NULL,
  `BookNumber` int(10) NOT NULL,
  `PageNumber` int(10) NOT NULL,
  `Active` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `SocioId` int(10) NOT NULL,
  `TarifaId` int(10) NOT NULL,
  `TarifaEspId` int(10) DEFAULT NULL,
  `FincaTrabId` int(10) NOT NULL,
  `FincaCobroId` int(10) NOT NULL,
  `CreatedOn` datetime NOT NULL,
  `ModifiedOn` datetime NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `FK_empleados_socios` (`SocioId`),
  KEY `FK_empleados_tarifas` (`TarifaId`),
  KEY `FK_empleados_tarifas_2` (`TarifaEspId`),
  KEY `FK_empleados_fincas` (`FincaTrabId`),
  KEY `FK_empleados_fincas_2` (`FincaCobroId`),
  CONSTRAINT `FK_empleados_fincas` FOREIGN KEY (`FincaTrabId`) REFERENCES `fincas` (`Id`),
  CONSTRAINT `FK_empleados_fincas_2` FOREIGN KEY (`FincaCobroId`) REFERENCES `fincas` (`Id`),
  CONSTRAINT `FK_empleados_socios` FOREIGN KEY (`SocioId`) REFERENCES `socios` (`Id`),
  CONSTRAINT `FK_empleados_tarifas` FOREIGN KEY (`TarifaId`) REFERENCES `tarifas` (`Id`),
  CONSTRAINT `FK_empleados_tarifas_2` FOREIGN KEY (`TarifaEspId`) REFERENCES `tarifas` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- La exportación de datos fue deseleccionada.


-- Volcando estructura para tabla mjor.fincas
CREATE TABLE IF NOT EXISTS `fincas` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(300) COLLATE latin1_spanish_ci NOT NULL,
  `Active` char(1) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- La exportación de datos fue deseleccionada.


-- Volcando estructura para tabla mjor.socios
CREATE TABLE IF NOT EXISTS `socios` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(300) COLLATE latin1_spanish_ci NOT NULL,
  `Active` char(1) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- La exportación de datos fue deseleccionada.


-- Volcando estructura para tabla mjor.tareas
CREATE TABLE IF NOT EXISTS `tareas` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(300) COLLATE latin1_spanish_ci NOT NULL,
  `Active` char(1) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- La exportación de datos fue deseleccionada.


-- Volcando estructura para tabla mjor.tarifas
CREATE TABLE IF NOT EXISTS `tarifas` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(300) COLLATE latin1_spanish_ci NOT NULL,
  `Value` float NOT NULL,
  `Active` char(1) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- La exportación de datos fue deseleccionada.


-- Volcando estructura para tabla mjor.vales
CREATE TABLE IF NOT EXISTS `vales` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `text` varchar(500) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- La exportación de datos fue deseleccionada.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
