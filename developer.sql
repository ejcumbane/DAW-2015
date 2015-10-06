-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2015 at 01:00 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `developer`
--

-- --------------------------------------------------------

--
-- Table structure for table `alocations`
--

CREATE TABLE IF NOT EXISTS `alocations` (
  `id` int(3) NOT NULL,
  `name` varchar(45) NOT NULL,
  `group_id` int(3) NOT NULL,
  `user_id` int(3) NOT NULL,
  `ocupation_id` int(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COMMENT='Esta tabela serve para alocar as tarefas aos membros dos grupos. ';

--
-- Dumping data for table `alocations`
--

INSERT INTO `alocations` (`id`, `name`, `group_id`, `user_id`, `ocupation_id`) VALUES
(1, 'aloc 1', 1, 1, 2),
(2, 'aloc 3', 2, 1, 1),
(3, 'aloc 5', 3, 2, 4),
(4, 'aloc 2', 1, 1, 1),
(5, 'aloc 4', 2, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='Esta tabela guarda os cargos.';

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `created`, `modified`) VALUES
(1, 'administradores', '2015-09-22 17:05:29', '2015-09-29 13:43:03'),
(2, 'Gestores', '2015-09-23 10:57:28', '2015-09-29 13:43:19'),
(3, 'Outros', '2015-09-24 07:47:48', '2015-09-29 13:43:51');

-- --------------------------------------------------------

--
-- Table structure for table `ocupations`
--

CREATE TABLE IF NOT EXISTS `ocupations` (
  `id` int(3) NOT NULL,
  `name` varchar(20) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `user_id` int(3) NOT NULL,
  `dataregisto` date NOT NULL,
  `prazo` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ocupations`
--

INSERT INTO `ocupations` (`id`, `name`, `descricao`, `user_id`, `dataregisto`, `prazo`) VALUES
(1, 'desenvolvedor 1', 'web designer', 1, '2015-05-01', '2015-08-31'),
(2, 'webmaster', 'acompanhar o trabalh', 1, '2015-04-14', '2015-09-15'),
(3, 'Web master', 'web designer primeiro nivel', 1, '2015-09-04', '2015-09-08'),
(4, 'Designer', 'saaaaaaaaaaaaaa', 2, '2015-09-02', '2015-09-08');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `body` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `created`, `modified`) VALUES
(2, 'A title once again', 'And the post body follows.', '2013-06-10 11:05:26', NULL),
(3, 'Title strikes back', 'This is really exciting! Not.', '2013-06-10 11:05:26', NULL),
(4, 'Ribamar', 'Ribamar FS testando.', '2013-06-10 11:20:52', '2013-06-10 11:20:52'),
(5, 'Teste', 'Apenas', '2013-10-17 08:20:47', '2013-10-17 08:20:47');

-- --------------------------------------------------------

--
-- Table structure for table `privileges`
--

CREATE TABLE IF NOT EXISTS `privileges` (
  `id` int(11) NOT NULL,
  `group_name` char(11) NOT NULL,
  `controller` varchar(50) NOT NULL,
  `action` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `privileges`
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
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` char(40) NOT NULL,
  `group_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `group_id`, `created`, `modified`) VALUES
(1, 'EstevÃ£o Cumbane', 'estevao', '5900f401a112eefa927904e69ea2b17b937d77e0', 1, '2015-09-18 07:57:06', '2015-09-29 13:56:06'),
(2, 'Calito Bulo', 'bulo', '5900f401a112eefa927904e69ea2b17b937d77e0', 2, '2015-09-18 07:57:18', '2015-09-29 14:00:28'),
(3, 'Sumbane', 'sumbane', '5900f401a112eefa927904e69ea2b17b937d77e0', 1, '2015-10-02 18:06:03', '2015-10-02 18:06:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alocations`
--
ALTER TABLE `alocations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ocupations`
--
ALTER TABLE `ocupations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privileges`
--
ALTER TABLE `privileges`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `controller` (`controller`,`action`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alocations`
--
ALTER TABLE `alocations`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ocupations`
--
ALTER TABLE `ocupations`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `privileges`
--
ALTER TABLE `privileges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
