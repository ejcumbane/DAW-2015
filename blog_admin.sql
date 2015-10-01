-- phpMyAdmin SQL Dump
-- version 3.5.8.1deb1
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 18-Out-2013 às 11:53
-- Versão do servidor: 5.5.32-0ubuntu0.13.04.1
-- versão do PHP: 5.4.9-4ubuntu2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `blog_admin`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `groups`
--

INSERT INTO `groups` (`id`, `name`, `created`, `modified`) VALUES
(1, 'admins', '2013-06-22 17:05:29', '2013-06-22 17:05:29'),
(2, 'managers', '2013-06-23 10:57:28', '2013-06-23 10:57:28'),
(3, 'users', '2013-06-24 07:47:48', '2013-06-24 07:47:48');

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `body` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `created`, `modified`) VALUES
(2, 'A title once again', 'And the post body follows.', '2013-06-10 11:05:26', NULL),
(3, 'Title strikes back', 'This is really exciting! Not.', '2013-06-10 11:05:26', NULL),
(4, 'Ribamar', 'Ribamar FS testando.', '2013-06-10 11:20:52', '2013-06-10 11:20:52'),
(5, 'Teste', 'Apenas', '2013-10-17 08:20:47', '2013-10-17 08:20:47');

-- --------------------------------------------------------

--
-- Estrutura da tabela `privileges`
--

CREATE TABLE IF NOT EXISTS `privileges` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` char(11) NOT NULL,
  `controller` varchar(50) NOT NULL,
  `action` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `controller` (`controller`,`action`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Extraindo dados da tabela `privileges`
--

INSERT INTO `privileges` (`id`, `group_name`, `controller`, `action`) VALUES
(1, 'admins', 'privileges', 'add'),
(2, 'admins', 'privileges', 'edit'),
(3, 'admins', 'privileges', 'delete'),
(4, 'admins', 'privileges', 'view'),
(5, 'admins', 'privileges', 'index'),
(11, 'admins', 'groups', 'add'),
(12, 'admins', 'groups', 'edit'),
(13, 'admins', 'groups', 'delete'),
(14, 'admins', 'groups', 'view'),
(15, 'admins', 'groups', 'index'),
(18, 'admins', 'users', 'index'),
(19, 'admins', 'users', 'view'),
(20, 'admins', 'users', 'add'),
(21, 'admins', 'users', 'edit'),
(22, 'admins', 'users', 'delete'),
(23, 'managers', 'clientes', 'add'),
(24, 'managers', 'clientes', 'index');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` char(40) NOT NULL,
  `group_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `group_id`, `created`, `modified`) VALUES
(1, 'admin', '3a3534f6b743387475f37d6c7a4807082c0daff7', 1, '2013-10-18 07:57:06', '2013-10-18 10:20:13'),
(2, 'manager', '42b915d5aa34db5cb61adfa53037f6fa74ee566c', 2, '2013-10-18 07:57:18', '2013-10-18 10:20:21');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
