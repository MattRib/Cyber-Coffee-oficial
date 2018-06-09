-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06-Jun-2018 às 22:12
-- Versão do servidor: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_cyber_cafe`
--
CREATE DATABASE IF NOT EXISTS `bd_cyber_cafe` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `bd_cyber_cafe`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `computador`
--

DROP TABLE IF EXISTS `computador`;
CREATE TABLE IF NOT EXISTS `computador` (
  `id_computador` int(11) NOT NULL AUTO_INCREMENT,
  `nome_computador` varchar(20) NOT NULL,
  `senha_computador` varchar(20) NOT NULL,
  PRIMARY KEY (`id_computador`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `computador`
--

INSERT INTO `computador` (`id_computador`, `nome_computador`, `senha_computador`) VALUES
(1, 'maquina1', '1234'),
(2, 'maquina2', '1234'),
(3, 'maquina3', '1234'),
(4, 'maquina4', '1234');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
