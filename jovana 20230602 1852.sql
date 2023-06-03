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
-- Create schema dbpizzaria
--

CREATE DATABASE IF NOT EXISTS dbpizzaria;
USE dbpizzaria;

--
-- Definition of table `avaliacao`
--

DROP TABLE IF EXISTS `avaliacao`;
CREATE TABLE `avaliacao` (
  `idavaliacao` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(45) NOT NULL,
  `comentario` longtext NOT NULL,
  `nome` varchar(45) NOT NULL,
  `cadastro` datetime NOT NULL,
  `avaliacao` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ativo` char(1) NOT NULL DEFAULT 'A',
  PRIMARY KEY (`idavaliacao`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `avaliacao`
--

/*!40000 ALTER TABLE `avaliacao` DISABLE KEYS */;
/*!40000 ALTER TABLE `avaliacao` ENABLE KEYS */;


--
-- Definition of table `banner`
--

DROP TABLE IF EXISTS `banner`;
CREATE TABLE `banner` (
  `idbanner` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `img` varchar(145) NOT NULL,
  `titulo` varchar(120) NOT NULL,
  `descricao` longtext NOT NULL,
  `video` longtext NOT NULL,
  `cadastro` datetime NOT NULL,
  `alteracao` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ativo` char(1) NOT NULL DEFAULT 'A',
  PRIMARY KEY (`idbanner`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

/*!40000 ALTER TABLE `banner` DISABLE KEYS */;
INSERT INTO `banner` (`idbanner`,`img`,`titulo`,`descricao`,`video`,`cadastro`,`alteracao`,`ativo`) VALUES 
 (1,'https://i.pinimg.com/564x/e8/65/6e/e8656ec5143ebd5dd6559d2a976041e7.jpg','Black Hole','É uma espécie de abismo cósmico que suga para si tudo o que se aproxima - a uma determinada distância - dele.','https://www.youtube.com/watch?v=h6nu0nZ037Q','2023-06-01 00:00:00','2023-06-01 22:17:18','A');
/*!40000 ALTER TABLE `banner` ENABLE KEYS */;


--
-- Definition of table `cardapio`
--

DROP TABLE IF EXISTS `cardapio`;
CREATE TABLE `cardapio` (
  `idcardapio` int(10) unsigned NOT NULL,
  `idmenucardapio` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `img` varchar(145) NOT NULL,
  `descricao` longtext NOT NULL,
  `preco` double NOT NULL,
  `alteracao` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ativo` char(1) NOT NULL DEFAULT 'A',
  `cadastro` datetime NOT NULL,
  PRIMARY KEY (`idcardapio`,`idmenucardapio`) USING BTREE,
  KEY `FK_cardapio_menucardapio` (`idmenucardapio`),
  CONSTRAINT `FK_cardapio_menucardapio` FOREIGN KEY (`idmenucardapio`) REFERENCES `menucardapio` (`idmenucardapio`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cardapio`
--

/*!40000 ALTER TABLE `cardapio` DISABLE KEYS */;
/*!40000 ALTER TABLE `cardapio` ENABLE KEYS */;


--
-- Definition of table `cards`
--

DROP TABLE IF EXISTS `cards`;
CREATE TABLE `cards` (
  `idcards` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(145) NOT NULL,
  `descricao` longtext NOT NULL,
  `icone` varchar(145) DEFAULT NULL,
  `cadastro` datetime NOT NULL,
  `alteracao` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ativo` char(1) NOT NULL DEFAULT 'A',
  PRIMARY KEY (`idcards`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cards`
--

/*!40000 ALTER TABLE `cards` DISABLE KEYS */;
/*!40000 ALTER TABLE `cards` ENABLE KEYS */;


--
-- Definition of table `chefe`
--

DROP TABLE IF EXISTS `chefe`;
CREATE TABLE `chefe` (
  `idchefe` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `titulo` varchar(145) NOT NULL,
  `descricao` longtext NOT NULL,
  `profissao` varchar(45) NOT NULL,
  `cadastro` datetime NOT NULL,
  `alteracao` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ativo` char(1) NOT NULL DEFAULT 'A',
  PRIMARY KEY (`idchefe`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chefe`
--

/*!40000 ALTER TABLE `chefe` DISABLE KEYS */;
/*!40000 ALTER TABLE `chefe` ENABLE KEYS */;


--
-- Definition of table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE `cliente` (
  `idcliente` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `mensagem` longtext NOT NULL,
  PRIMARY KEY (`idcliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cliente`
--

/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;


--
-- Definition of table `comentario`
--

DROP TABLE IF EXISTS `comentario`;
CREATE TABLE `comentario` (
  `idcomentario` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `img` varchar(145) NOT NULL,
  `cadastro` datetime NOT NULL,
  `alteracao` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ativo` char(1) NOT NULL DEFAULT 'A',
  PRIMARY KEY (`idcomentario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comentario`
--

/*!40000 ALTER TABLE `comentario` DISABLE KEYS */;
/*!40000 ALTER TABLE `comentario` ENABLE KEYS */;


--
-- Definition of table `contato`
--

DROP TABLE IF EXISTS `contato`;
CREATE TABLE `contato` (
  `idcontato` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `endereco` varchar(105) NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `email` varchar(200) NOT NULL,
  `horarios` text NOT NULL,
  `cadastro` datetime NOT NULL,
  `alteracao` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ativo` char(1) NOT NULL DEFAULT 'A',
  PRIMARY KEY (`idcontato`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contato`
--

/*!40000 ALTER TABLE `contato` DISABLE KEYS */;
/*!40000 ALTER TABLE `contato` ENABLE KEYS */;


--
-- Definition of table `estatistica`
--

DROP TABLE IF EXISTS `estatistica`;
CREATE TABLE `estatistica` (
  `idestatistica` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `img` varchar(145) NOT NULL,
  `cadastro` datetime NOT NULL,
  `alteracao` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ativo` char(1) NOT NULL DEFAULT 'A',
  PRIMARY KEY (`idestatistica`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `estatistica`
--

/*!40000 ALTER TABLE `estatistica` DISABLE KEYS */;
/*!40000 ALTER TABLE `estatistica` ENABLE KEYS */;


--
-- Definition of table `eventos`
--

DROP TABLE IF EXISTS `eventos`;
CREATE TABLE `eventos` (
  `ideventos` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `img` varchar(145) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `descricao` longtext NOT NULL,
  `preco` double NOT NULL,
  `cadastro` datetime NOT NULL,
  `alteracao` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ativo` char(1) NOT NULL DEFAULT 'A',
  PRIMARY KEY (`ideventos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eventos`
--

/*!40000 ALTER TABLE `eventos` DISABLE KEYS */;
/*!40000 ALTER TABLE `eventos` ENABLE KEYS */;


--
-- Definition of table `galeria`
--

DROP TABLE IF EXISTS `galeria`;
CREATE TABLE `galeria` (
  `idgaleria` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `img` varchar(145) NOT NULL,
  `cadastro` datetime NOT NULL,
  `alteracao` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ativo` char(1) NOT NULL DEFAULT 'A',
  PRIMARY KEY (`idgaleria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galeria`
--

/*!40000 ALTER TABLE `galeria` DISABLE KEYS */;
/*!40000 ALTER TABLE `galeria` ENABLE KEYS */;


--
-- Definition of table `menucardapio`
--

DROP TABLE IF EXISTS `menucardapio`;
CREATE TABLE `menucardapio` (
  `idmenucardapio` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menu` varchar(45) NOT NULL,
  `cadastro` datetime NOT NULL,
  `alteracao` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ativo` char(1) NOT NULL DEFAULT 'A',
  PRIMARY KEY (`idmenucardapio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menucardapio`
--

/*!40000 ALTER TABLE `menucardapio` DISABLE KEYS */;
/*!40000 ALTER TABLE `menucardapio` ENABLE KEYS */;


--
-- Definition of table `reserva`
--

DROP TABLE IF EXISTS `reserva`;
CREATE TABLE `reserva` (
  `idreserva` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `email` varchar(105) NOT NULL,
  `telefone` varchar(25) NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `numeropessoas` int(10) unsigned NOT NULL,
  `mensagem` text NOT NULL,
  `cadastro` datetime NOT NULL,
  `alteracao` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ativo` char(1) NOT NULL DEFAULT 'A',
  PRIMARY KEY (`idreserva`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reserva`
--

/*!40000 ALTER TABLE `reserva` DISABLE KEYS */;
/*!40000 ALTER TABLE `reserva` ENABLE KEYS */;


--
-- Definition of table `sobrenos`
--

DROP TABLE IF EXISTS `sobrenos`;
CREATE TABLE `sobrenos` (
  `idsobrenos` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `imagem` varchar(145) NOT NULL,
  `descricao` longtext NOT NULL,
  `video` longtext NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `cadastro` datetime NOT NULL,
  `alteracao` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ativo` char(1) NOT NULL DEFAULT 'A',
  PRIMARY KEY (`idsobrenos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sobrenos`
--

/*!40000 ALTER TABLE `sobrenos` DISABLE KEYS */;
/*!40000 ALTER TABLE `sobrenos` ENABLE KEYS */;

--
-- Create schema dbescola
--

CREATE DATABASE IF NOT EXISTS dbescola;
USE dbescola;

--
-- Definition of table `filho`
--

DROP TABLE IF EXISTS `filho`;
CREATE TABLE `filho` (
  `idfilho` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idpai` int(10) unsigned NOT NULL,
  `nome` varchar(50) NOT NULL,
  `nascimento` date DEFAULT NULL,
  `ativo` char(1) DEFAULT 'a',
  PRIMARY KEY (`idfilho`,`idpai`),
  KEY `fk_idpai` (`idpai`),
  CONSTRAINT `fk_idpai` FOREIGN KEY (`idpai`) REFERENCES `pai` (`idpai`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `filho`
--

/*!40000 ALTER TABLE `filho` DISABLE KEYS */;
INSERT INTO `filho` (`idfilho`,`idpai`,`nome`,`nascimento`,`ativo`) VALUES 
 (2,5,'paola','2010-09-14','a'),
 (6,5,'jesus','2010-07-12','a'),
 (7,5,'maria','2010-08-09','a'),
 (9,4,'judas','2009-06-04','a'),
 (11,6,'Karl marx','2010-07-12','a'),
 (13,6,'Karl marx','2010-07-12','a'),
 (14,10,'marcos','2009-01-11','a');
/*!40000 ALTER TABLE `filho` ENABLE KEYS */;


--
-- Definition of table `idade`
--

DROP TABLE IF EXISTS `idade`;
CREATE TABLE `idade` (
  `ididade` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idpai` int(10) unsigned NOT NULL,
  `idade` int(3) DEFAULT NULL,
  PRIMARY KEY (`ididade`,`idpai`),
  KEY `fk_idpai_ididade` (`idpai`),
  CONSTRAINT `fk_idpai_ididade` FOREIGN KEY (`idpai`) REFERENCES `pai` (`idpai`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `idade`
--

/*!40000 ALTER TABLE `idade` DISABLE KEYS */;
INSERT INTO `idade` (`ididade`,`idpai`,`idade`) VALUES 
 (2,11,34),
 (3,11,34),
 (4,5,25),
 (6,13,56),
 (7,14,47),
 (8,17,30),
 (9,19,47),
 (10,19,47);
/*!40000 ALTER TABLE `idade` ENABLE KEYS */;


--
-- Definition of table `pai`
--

DROP TABLE IF EXISTS `pai`;
CREATE TABLE `pai` (
  `idpai` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) DEFAULT NULL,
  `ativo` char(1) NOT NULL DEFAULT 'a',
  PRIMARY KEY (`idpai`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pai`
--

/*!40000 ALTER TABLE `pai` DISABLE KEYS */;
INSERT INTO `pai` (`idpai`,`nome`,`ativo`) VALUES 
 (4,'Benjamim','a'),
 (5,'José','a'),
 (6,'Bernardo','a'),
 (7,'Mauricio','a'),
 (8,'gelberto','a'),
 (9,'Afonso','a'),
 (10,'Marcos','a'),
 (11,'juninho','a'),
 (12,'jesus','a'),
 (13,'jesus cristo','a'),
 (14,'luciano','a'),
 (16,'lucas','a'),
 (17,'igor','a'),
 (18,'pitoco','a'),
 (19,'kawan','a'),
 (20,'miguel','a'),
 (21,'gabriel','a'),
 (22,'tales','a'),
 (23,'guilherme','a'),
 (24,'davi','a');
/*!40000 ALTER TABLE `pai` ENABLE KEYS */;


--
-- Definition of table `portaria`
--

DROP TABLE IF EXISTS `portaria`;
CREATE TABLE `portaria` (
  `idportaria` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ididade` int(10) unsigned NOT NULL,
  `entrada` char(1) DEFAULT 's',
  PRIMARY KEY (`idportaria`,`ididade`),
  KEY `fk_ididade_portaria` (`ididade`),
  CONSTRAINT `fk_ididade_portaria` FOREIGN KEY (`ididade`) REFERENCES `idade` (`ididade`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portaria`
--

/*!40000 ALTER TABLE `portaria` DISABLE KEYS */;
INSERT INTO `portaria` (`idportaria`,`ididade`,`entrada`) VALUES 
 (3,2,'n'),
 (4,3,'s'),
 (5,4,'s'),
 (7,6,'s'),
 (8,7,'s'),
 (9,8,'n'),
 (10,9,'s'),
 (11,10,'s');
/*!40000 ALTER TABLE `portaria` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
