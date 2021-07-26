/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE TABLE IF NOT EXISTS `operation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_profil` int(11) NOT NULL,
  `id_transaction` int(11) NOT NULL,
  `transaction_type` enum('c','u','i') COLLATE utf8_german2_ci NOT NULL DEFAULT 'c',
  `transaction_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `id_profil` (`id_profil`),
  KEY `id_transaction` (`id_transaction`),
  CONSTRAINT `FK__profil` FOREIGN KEY (`id_profil`) REFERENCES `profil` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK__transaction` FOREIGN KEY (`id_transaction`) REFERENCES `transaction` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_german2_ci;

CREATE TABLE IF NOT EXISTS `profil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_german2_ci DEFAULT 'John Doe',
  `email` varchar(50) COLLATE utf8_german2_ci DEFAULT 'johndoe@secret.com',
  `token` varchar(50) COLLATE utf8_german2_ci DEFAULT NULL,
  `status` enum('on','off') COLLATE utf8_german2_ci DEFAULT 'off',
  `number` int(11) DEFAULT NULL,
  `password` varchar(50) COLLATE utf8_german2_ci DEFAULT NULL,
  `role` enum('sec','dir','adm') COLLATE utf8_german2_ci DEFAULT 'sec',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_german2_ci;

CREATE TABLE IF NOT EXISTS `transaction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` enum('om','momo') COLLATE utf8_german2_ci DEFAULT NULL,
  `subtype` enum('depot','retrait') COLLATE utf8_german2_ci DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8 COLLATE=utf8_german2_ci;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
