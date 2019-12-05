-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 22-Nov-2019 às 00:33
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `cquiz`
--
CREATE DATABASE IF NOT EXISTS `cquiz` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cquiz`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `alternativa`
--

CREATE TABLE IF NOT EXISTS `alternativa` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(200) DEFAULT NULL,
  `verdadeira` tinyint(1) DEFAULT NULL,
  `id_pergunta` int(30) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_pergunta` (`id_pergunta`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pergunta`
--

CREATE TABLE IF NOT EXISTS `pergunta` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) DEFAULT NULL,
  `id_quiz` int(30) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_quiz` (`id_quiz`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `quiz`
--

CREATE TABLE IF NOT EXISTS `quiz` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) DEFAULT NULL,
  `id_usuario` int(30) DEFAULT NULL,
  `data_criacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `id_usuario` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `login` varchar(200) DEFAULT NULL,
  `senha` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `alternativa`
--
ALTER TABLE `alternativa`
  ADD CONSTRAINT `alternativa_ibfk_1` FOREIGN KEY (`id_pergunta`) REFERENCES `pergunta` (`id`);

--
-- Limitadores para a tabela `pergunta`
--
ALTER TABLE `pergunta`
  ADD CONSTRAINT `pergunta_ibfk_1` FOREIGN KEY (`id_quiz`) REFERENCES `quiz` (`id`);

--
-- Limitadores para a tabela `quiz`
--
ALTER TABLE `quiz`
  ADD CONSTRAINT `quiz_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
CREATE TABLE `quiz`.`usuario` ( `nome` VARCHAR NOT NULL , `email` VARCHAR NOT NULL , `cpf` VARCHAR NOT NULL , `telefone` VARCHAR NOT NULL , `sexo` CHAR NOT NULL , `senha` VARCHAR NOT NULL , `dataNasc` DATE NOT NULL , `id` INT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;