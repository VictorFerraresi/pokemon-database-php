-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3308
-- Generation Time: 21-Maio-2015 às 16:28
-- Versão do servidor: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pokemon`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `bugs`
--

CREATE TABLE IF NOT EXISTS `bugs` (
`id` int(5) NOT NULL,
  `user` int(5) NOT NULL,
  `type` varchar(32) NOT NULL,
  `text` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `frases`
--

CREATE TABLE IF NOT EXISTS `frases` (
`id` int(2) NOT NULL COMMENT 'ID único da frase',
  `frase` varchar(100) NOT NULL DEFAULT '0' COMMENT 'Frase'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `frases`
--

INSERT INTO `frases` (`id`, `frase`) VALUES
(1, 'Hit me with your best shot!'),
(2, 'Press B to run!'),
(3, 'Frase 3'),
(4, 'Frase 4');

-- --------------------------------------------------------

--
-- Estrutura da tabela `golpes`
--

CREATE TABLE IF NOT EXISTS `golpes` (
`id` int(4) NOT NULL COMMENT 'ID único do golpe',
  `name` varchar(20) NOT NULL COMMENT 'Nome do golpe',
  `damage` int(3) NOT NULL COMMENT 'Dano do golpe',
  `type` int(2) NOT NULL COMMENT 'Tipo do golpe'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
`id` int(3) NOT NULL COMMENT 'ID único da conta',
  `user` varchar(30) NOT NULL DEFAULT '0' COMMENT 'Nome de usuário para login',
  `email` varchar(60) NOT NULL DEFAULT '0' COMMENT 'Email do usuário',
  `password` varchar(129) NOT NULL DEFAULT '0' COMMENT 'Senha do usuário em Whirlpool',
  `admin` int(3) DEFAULT '0' COMMENT 'Nível administrativo do usuário'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `user`, `email`, `password`, `admin`) VALUES
(4, 'victor', 'victor_ferraresi@hotmail.com', '344907e89b981caf221d05f597eb57a6af408f15f4dd7895bbd1b96a2938ec24a7dcf23acb94ece0b6d7b0640358bc56bdb448194b9305311aff038a834a079f', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bugs`
--
ALTER TABLE `bugs`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `frases`
--
ALTER TABLE `frases`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `golpes`
--
ALTER TABLE `golpes`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bugs`
--
ALTER TABLE `bugs`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `frases`
--
ALTER TABLE `frases`
MODIFY `id` int(2) NOT NULL AUTO_INCREMENT COMMENT 'ID único da frase',AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `golpes`
--
ALTER TABLE `golpes`
MODIFY `id` int(4) NOT NULL AUTO_INCREMENT COMMENT 'ID único do golpe';
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `id` int(3) NOT NULL AUTO_INCREMENT COMMENT 'ID único da conta',AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
