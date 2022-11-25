-- --------------------------------------------------------
-- Host:                         ???
-- Server Version:               10.9.3-MariaDB-1:10.9.3+maria~ubu2204 - mariadb.org binary distribution
-- Server Betriebssystem:        debian-linux-gnu
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Exportiere Datenbank Struktur für serverbanner
CREATE DATABASE IF NOT EXISTS `serverbanner` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `serverbanner`;

-- Exportiere Struktur von Tabelle serverbanner.events
CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `deleted` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;

-- Exportiere Daten aus Tabelle serverbanner.events: ~20 rows (ungefähr)
DELETE FROM `events`;
INSERT INTO `events` (`id`, `name`, `date`, `deleted`) VALUES
	(1, 'Testevent', '2021-11-09 17:50:00', 0),
	(2, 'Testevent2', '2021-11-09 18:00:00', 0),
	(3, 'Testevent3 bla bla test test', '2021-11-09 21:15:00', 0),
	(4, 'Testevent4', '2021-11-09 19:15:00', 0),
	(5, 'Testevent5', '2021-11-09 19:30:00', 0),
	(6, 'TestEvent6', '2021-11-09 19:35:00', 0),
	(7, 'TestEvent7', '2021-11-09 19:40:00', 0),
	(8, 'TestEvent8', '2021-11-10 20:45:00', 0),
	(9, 'Spieleabend', '2021-11-19 20:00:00', 0),
	(10, 'Spieleabend', '2021-12-17 21:00:00', 1),
	(11, 'TestTestTest', '2022-01-08 21:55:21', 1),
	(12, 'ArmA 3 Coop-Mission', '2022-01-23 16:00:00', 0),
	(13, 'test', '2022-03-01 19:30:00', 0),
	(14, 'ArmA 3 Coop-Mission', '2022-03-12 16:00:00', 0),
	(15, 'Test123', '2022-03-12 21:30:00', 0),
	(16, 'ArmA 3 COOP @ Tanoa', '2022-04-24 17:00:00', 0),
	(17, 'Test12345', '2022-06-14 20:30:40', 1),
	(18, 'Tabletop Simulator', '2022-09-02 20:00:00', 0),
	(19, 'Test', '2022-10-28 22:00:00', 1),
	(20, 'Test für Marcel', '2022-09-26 10:15:00', 0);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
