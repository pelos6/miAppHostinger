-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.6.23 - MySQL Community Server (GPL)
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.1.0.4867
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura de base de datos para javier
CREATE DATABASE IF NOT EXISTS `javier` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `javier`;


-- Volcando estructura para tabla javier.peso
CREATE TABLE IF NOT EXISTS `peso` (
  `fecha` date NOT NULL,
  `peso` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`fecha`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla javier.peso: ~47 rows (aproximadamente)
/*!40000 ALTER TABLE `peso` DISABLE KEYS */;
INSERT INTO `peso` (`fecha`, `peso`) VALUES
	('2015-07-26', 81.70),
	('2015-07-27', 80.20),
	('2015-07-28', 79.50),
	('2015-07-29', 78.80),
	('2015-07-30', 79.50),
	('2015-07-31', 77.90),
	('2015-08-01', 79.00),
	('2015-08-02', 78.80),
	('2015-08-03', 76.60),
	('2015-08-04', 77.90),
	('2015-08-05', 77.40),
	('2015-08-06', 77.50),
	('2015-08-07', 78.00),
	('2015-08-08', 77.70),
	('2015-08-09', 77.40),
	('2015-08-10', 76.80),
	('2015-08-11', 76.70),
	('2015-08-12', 76.50),
	('2015-08-13', 76.80),
	('2015-08-14', 77.50),
	('2015-08-15', 76.20),
	('2015-08-16', 77.50),
	('2015-08-17', 77.40),
	('2015-08-18', 76.60),
	('2015-08-19', 76.10),
	('2015-08-20', 77.30),
	('2015-08-21', 77.80),
	('2015-08-22', 76.30),
	('2015-08-23', 77.20),
	('2015-08-24', 76.80),
	('2015-08-25', 78.00),
	('2015-08-26', 78.10),
	('2015-08-27', 77.00),
	('2015-08-28', 77.80),
	('2015-08-29', 78.80),
	('2015-08-30', 76.90),
	('2015-08-31', 76.60),
	('2015-09-01', 77.10),
	('2015-09-02', 77.70),
	('2015-09-03', 77.10),
	('2015-09-04', 77.10),
	('2015-09-05', 78.40),
	('2015-09-06', 79.30),
	('2015-09-07', 78.60),
	('2015-09-08', 77.20),
	('2015-09-09', 77.00),
	('2015-09-10', 77.00);
/*!40000 ALTER TABLE `peso` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
