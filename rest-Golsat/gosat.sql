-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 13-Jan-2019 às 05:56
-- Versão do servidor: 5.7.23
-- versão do PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ajofer`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `gosat`
--

DROP TABLE IF EXISTS `gosat`;
CREATE TABLE IF NOT EXISTS `gosat` (
  `id_msg` int(11) NOT NULL AUTO_INCREMENT,
  `hr_gravacao` datetime NOT NULL,
  `id` varchar(255) NOT NULL,
  `placa` varchar(255) NOT NULL,
  `serialNumber` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `end` varchar(255) NOT NULL,
  `dInc` varchar(255) NOT NULL,
  `dPos` varchar(255) NOT NULL,
  `motorista` varchar(255) NOT NULL,
  `odo` varchar(255) NOT NULL,
  `rpm` varchar(255) NOT NULL,
  `vel` varchar(255) NOT NULL,
  `ign` varchar(255) NOT NULL,
  `log` varchar(255) NOT NULL,
  `gps` varchar(255) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `src` varchar(255) NOT NULL,
  PRIMARY KEY (`id_msg`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
