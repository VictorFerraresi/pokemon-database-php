-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.6.20 - MySQL Community Server (GPL)
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              8.3.0.4694
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Copiando estrutura do banco de dados para pokemon
CREATE DATABASE IF NOT EXISTS `pokemon` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `pokemon`;


-- Copiando estrutura para tabela pokemon.golpes
CREATE TABLE IF NOT EXISTS `golpes` (
  `id` int(4) NOT NULL AUTO_INCREMENT COMMENT 'ID único do golpe',
  `name` varchar(20) NOT NULL COMMENT 'Nome do golpe',
  `damage` int(3) NOT NULL COMMENT 'Dano do golpe',
  `type` int(2) NOT NULL COMMENT 'Tipo do golpe',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela pokemon.golpes: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `golpes` DISABLE KEYS */;
/*!40000 ALTER TABLE `golpes` ENABLE KEYS */;


-- Copiando estrutura para tabela pokemon.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(3) NOT NULL AUTO_INCREMENT COMMENT 'ID único da conta',
  `user` varchar(30) NOT NULL DEFAULT '0' COMMENT 'Nome de usuário para login',
  `email` varchar(60) NOT NULL DEFAULT '0' COMMENT 'Email do usuário',
  `password` varchar(129) NOT NULL DEFAULT '0' COMMENT 'Senha do usuário em Whirlpool',
  `admin` int(3) DEFAULT '0' COMMENT 'Nível administrativo do usuário',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela pokemon.usuarios: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;

CREATE TABLE IF NOT EXISTS `frases` 
(
  `id` int(2) NOT NULL AUTO_INCREMENT COMMENT 'ID único da frase',
  `frase` varchar(100) NOT NULL DEFAULT '0' COMMENT 'Frase',
  PRIMARY KEY (`id`)
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `frases` (`id`, `frase`) VALUES
	(1, 'Hit me with your best shot!');
INSERT INTO `frases` (`id`, `frase`) VALUES
	(2, 'Press B to run!');

CREATE TABLE IF NOT EXISTS `bugs`
(
  `id` int(4) NOT NULL PRIMARY KEY AUTO_INCREMENT COMMENT 'ID �nico do report',
  `report` varchar(500) NOT NULL DEFAULT '0' COMMENT 'Report', 
);

INSERT INTO `usuarios` (`id`, `user`, `email`, `password`, `admin`) VALUES
	(1, 'victor', 'victor_ferraresi@hotmail.com', '344907e89b981caf221d05f597eb57a6af408f15f4dd7895bbd1b96a2938ec24a7dcf23acb94ece0b6d7b0640358bc56bdb448194b9305311aff038a834a079f', 1);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;