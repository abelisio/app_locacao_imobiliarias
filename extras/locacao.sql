-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.7.37-log - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.0.0.6468
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para locacao
CREATE DATABASE IF NOT EXISTS `locacao` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `locacao`;

-- Copiando estrutura para tabela locacao.contratos
CREATE TABLE IF NOT EXISTS `contratos` (
  `idcontrato` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `codimovel` varchar(100) NOT NULL DEFAULT '',
  `proprietario` varchar(100) NOT NULL,
  `taxa_adm` varchar(100) NOT NULL,
  `cliente` varchar(100) NOT NULL,
  `dataini` varchar(100) NOT NULL DEFAULT '',
  `datafim` varchar(100) NOT NULL DEFAULT '',
  `valor_aluguel` varchar(100) NOT NULL,
  `valor_cond` varchar(100) NOT NULL,
  `valor_iptu` varchar(100) NOT NULL,
  `estado_contrato` varchar(2) NOT NULL,
  `repasse` varchar(100) NOT NULL,
  `mensalidade` varchar(100) NOT NULL,
  PRIMARY KEY (`idcontrato`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela locacao.imoveis
CREATE TABLE IF NOT EXISTS `imoveis` (
  `idimovel` int(11) NOT NULL AUTO_INCREMENT,
  `endereco` varchar(400) NOT NULL,
  `locador` varchar(100) DEFAULT NULL,
  `codimovel` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idimovel`),
  UNIQUE KEY `codimovel` (`codimovel`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela locacao.locador
CREATE TABLE IF NOT EXISTS `locador` (
  `idlocador` int(11) NOT NULL AUTO_INCREMENT,
  `nome_locador` varchar(100) NOT NULL,
  `email_locador` varchar(100) NOT NULL,
  `telefone_locador` varchar(15) DEFAULT NULL,
  `dia_repasse_locador` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`idlocador`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela locacao.locatario
CREATE TABLE IF NOT EXISTS `locatario` (
  `idlocatario` int(11) NOT NULL AUTO_INCREMENT,
  `nome_locatario` varchar(100) NOT NULL,
  `email_locatario` varchar(100) NOT NULL,
  `telefone_locatario` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`idlocatario`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela locacao.parcelas
CREATE TABLE IF NOT EXISTS `parcelas` (
  `idparcela` int(11) NOT NULL AUTO_INCREMENT,
  `qtparcela` varchar(100) DEFAULT NULL,
  `status` enum('N','S') DEFAULT 'S',
  PRIMARY KEY (`idparcela`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela locacao.valores_contrato
CREATE TABLE IF NOT EXISTS `valores_contrato` (
  `idvalor` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `idcontrato` varchar(100) NOT NULL,
  `taxa_adm` varchar(100) NOT NULL,
  `valor_aluguel` varchar(100) NOT NULL,
  `valor_cond` varchar(100) NOT NULL,
  `valor_iptu` varchar(100) NOT NULL,
  `repasse` varchar(100) NOT NULL,
  PRIMARY KEY (`idvalor`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
