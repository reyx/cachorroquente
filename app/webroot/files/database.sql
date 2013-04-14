-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 03/03/2013 às 21:36:07
-- Versão do Servidor: 5.5.29
-- Versão do PHP: 5.4.6-1ubuntu1.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Banco de Dados: `festival_web`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `apoiadores`
--

CREATE TABLE IF NOT EXISTS `apoiadores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(155) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `responsavel` varchar(155) NOT NULL,
  `empresa` varchar(155) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `classificacoes`
--

CREATE TABLE IF NOT EXISTS `classificacoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dogueiro_id` int(11) NOT NULL,
  `posicao` int(11) NOT NULL,
  `ano` int(4) NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (dogueiro_id) REFERENCES dogueiros(id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `dogueiros`
--

CREATE TABLE IF NOT EXISTS `dogueiros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numero` int(11) NOT NULL,
  `nome` varchar(155) NOT NULL,
  `email` varchar(155) NOT NULL,
  `foto` varchar(255) NULL,
  `foto_dir` varchar(255) NULL,
  `cpf` varchar(11) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `img_dir` varchar(255) DEFAULT NULL,
  `makingof_id` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(255) DEFAULT NULL,
  `label` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=72 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `makingofs`
--

CREATE TABLE IF NOT EXISTS `makingofs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `label` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `materias`
--

CREATE TABLE IF NOT EXISTS `materias` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `type` int(11) NOT NULL,
  `label` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `program` varchar(50) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `position` int(11) NOT NULL,
  `title` varchar(155) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `schedules`
--

CREATE TABLE IF NOT EXISTS `schedules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time` time NOT NULL,
  `event` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `votos`
--

CREATE TABLE IF NOT EXISTS `votos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dogueiro_id` int(11) NOT NULL,
  `ip` varchar(25) NOT NULL,
  `email` varchar(155) NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (dogueiro_id) REFERENCES dogueiros(id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;
