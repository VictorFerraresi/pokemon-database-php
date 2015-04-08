-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3308
-- Generation Time: 08-Abr-2015 às 15:25
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
-- Estrutura da tabela `golpes`
--

CREATE TABLE IF NOT EXISTS `golpes` (
`id` int(4) NOT NULL COMMENT 'ID único do golpe',
  `nome` varchar(20) NOT NULL COMMENT 'Nome do golpe',
  `dano` int(3) NOT NULL COMMENT 'Dano do golpe',
  `tipo` int(2) NOT NULL COMMENT 'Tipo do golpe'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `golpes`
--
ALTER TABLE `golpes`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `golpes`
--
ALTER TABLE `golpes`
MODIFY `id` int(4) NOT NULL AUTO_INCREMENT COMMENT 'ID único do golpe';
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
