-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.24-MariaDB


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema jojovana
--

CREATE DATABASE IF NOT EXISTS jojovana;
USE jojovana;

--
-- Definition of table `desenhos`
--

DROP TABLE IF EXISTS `desenhos`;
CREATE TABLE `desenhos` (
  `iddesenhos` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `img` varchar(145) NOT NULL,
  `descricao` varchar(205) NOT NULL,
  `preco` double NOT NULL,
  `cadastro` datetime NOT NULL,
  `alteracao` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ativo` char(1) NOT NULL DEFAULT 'A',
  `titulo` varchar(60) NOT NULL,
  PRIMARY KEY (`iddesenhos`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `desenhos`
--

/*!40000 ALTER TABLE `desenhos` DISABLE KEYS */;
INSERT INTO `desenhos` (`iddesenhos`,`img`,`descricao`,`preco`,`cadastro`,`alteracao`,`ativo`,`titulo`) VALUES 
 (1,'realismo.jpg','desenho com traços finos de lápis A',100,'2023-06-27 00:00:00','2023-06-27 21:02:19','A','Realistico'),
 (2,'diabo.jpg','arte renascentista com aparencia malefica',50,'2023-06-27 00:00:00','2023-06-27 22:20:53','A','Renascentista');
/*!40000 ALTER TABLE `desenhos` ENABLE KEYS */;


--
-- Definition of table `produto`
--

DROP TABLE IF EXISTS `produto`;
CREATE TABLE `produto` (
  `idproduto` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(145) NOT NULL,
  `img` varchar(145) NOT NULL,
  `descricao` varchar(145) NOT NULL,
  `cadastro` datetime NOT NULL,
  `alteracao` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ativo` char(1) NOT NULL DEFAULT 'A',
  `link` varchar(200) NOT NULL,
  PRIMARY KEY (`idproduto`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produto`
--

/*!40000 ALTER TABLE `produto` DISABLE KEYS */;
INSERT INTO `produto` (`idproduto`,`titulo`,`img`,`descricao`,`cadastro`,`alteracao`,`ativo`,`link`) VALUES 
 (1,'Desenhos Realistas','realista.jpg','Uma pasta de desenhos focada em arte realista retratando com precisão a realidade.','2023-06-23 00:00:00','2023-06-27 21:28:55','A','realismo.php'),
 (2,'Desenhos de Mangá/Animação','kimetsu.jpg','A pasta \"Desenhos de Anime\" é um tesouro visual repleto de ilustrações de personagens e cenas de animes famosos. Explore e descubra um universo d','2023-06-27 00:00:00','2023-06-27 22:17:05','A','anime.php'),
 (3,'Cartoon','finn.jpg','Desenho cartoon','2023-06-27 00:00:00','2023-06-27 21:22:17','A','cartoon.php');
/*!40000 ALTER TABLE `produto` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
