-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2018 at 07:20 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `byit`
--

-- --------------------------------------------------------

--
-- Table structure for table `adm_usuarios`
--

CREATE TABLE `adm_usuarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(100) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `nivel` varchar(50) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adm_usuarios`
--

INSERT INTO `adm_usuarios` (`id`, `nome`, `usuario`, `senha`, `nivel`, `datetime`) VALUES
(1, 'Administrador', 'admin', 'admin102030', '0', '2018-10-31 02:40:33');

-- --------------------------------------------------------

--
-- Table structure for table `seo`
--

CREATE TABLE `seo` (
  `id` int(11) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `titulo_site` varchar(255) NOT NULL,
  `descricao_site` varchar(255) NOT NULL,
  `imagem_facebook` varchar(255) NOT NULL,
  `favicon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `seo`
--

INSERT INTO `seo` (`id`, `keywords`, `titulo_site`, `descricao_site`, `imagem_facebook`, `favicon`) VALUES
(1, 'Agência web Sorocaba, criacao de sites, criacao de lojas virtuais, Agência de Publicidade Sorocaba, marketing, planejamento estratégico, SEO, otimização sites, desenvolvimento sites sorocaba, criação de sites são paulo', 'Musca.org - Agência web em Sorocaba', 'Musca é uma agência web em sorocaba', '52ecd5853359377916f4f969c981c057.jpg', 'a8f20de72158b141dc9c52928d1e7e1d.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adm_usuarios`
--
ALTER TABLE `adm_usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- Indexes for table `seo`
--
ALTER TABLE `seo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adm_usuarios`
--
ALTER TABLE `adm_usuarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `seo`
--
ALTER TABLE `seo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
