-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2015 at 06:18 PM
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
  `member_id` varchar(45) NOT NULL,
  `cargo_id` varchar(45) NOT NULL,
  `ocupation_id` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alocations`
--

INSERT INTO `alocations` (`id`, `name`, `member_id`, `cargo_id`, `ocupation_id`) VALUES
(1, 'job 1', '3', '3', '2'),
(2, 'job2', '1', '2', '1'),
(3, 'job3', '2', '3', '4'),
(4, 'job4', '1', '1', '1'),
(5, 'job5', '5', '2', '2');

-- --------------------------------------------------------

--
-- Table structure for table `cargos`
--

CREATE TABLE IF NOT EXISTS `cargos` (
  `id` int(3) NOT NULL,
  `name` varchar(45) NOT NULL,
  `ocupation_id` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cargos`
--

INSERT INTO `cargos` (`id`, `name`, `ocupation_id`) VALUES
(1, 'supervisor', '2'),
(2, 'gestor', '2'),
(3, 'engenheiro', '4');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(3) NOT NULL,
  `name` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `username`, `password`) VALUES
(1, 'augusto', 'augusto', '12345'),
(2, 'artur', 'augusto', '12345'),
(3, 'nico', 'bolo', 'mmmm'),
(4, 'Aldo', 'aldo', '12345'),
(5, 'Estevao', 'aldo', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `ocupations`
--

CREATE TABLE IF NOT EXISTS `ocupations` (
  `id` int(3) NOT NULL,
  `name` varchar(20) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `member_id` int(3) NOT NULL,
  `dataregisto` date NOT NULL,
  `prazo` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ocupations`
--

INSERT INTO `ocupations` (`id`, `name`, `descricao`, `member_id`, `dataregisto`, `prazo`) VALUES
(1, 'desenvolvedor 1', 'web designer', 1, '2015-05-01', '2015-08-31'),
(2, 'webmaster', 'acompanhar o trabalh', 1, '2015-04-14', '2015-09-15'),
(3, 'Web master', 'web designer primeiro nivel', 1, '2015-09-04', '2015-09-08'),
(4, 'Designer', 'saaaaaaaaaaaaaa', 2, '2015-09-02', '2015-09-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alocations`
--
ALTER TABLE `alocations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ocupations`
--
ALTER TABLE `ocupations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alocations`
--
ALTER TABLE `alocations`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `cargos`
--
ALTER TABLE `cargos`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `ocupations`
--
ALTER TABLE `ocupations`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
