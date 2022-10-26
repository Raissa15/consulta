-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Set-2022 às 19:05
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projetoweb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `consulta`
--

CREATE TABLE `consulta` (
  `id` int(3) NOT NULL,
  `email` varchar(40) NOT NULL,
  `senha` varchar(40) NOT NULL,
  `endereco` varchar(60) NOT NULL,
  `bairro` varchar(60) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `cidade` varchar(40) NOT NULL,
  `estado` enum('AC','AL','AP','AM','BA','CE','ES','GO','MA','MT','MS','MG','PA','PB','PR','PE','PI','RJ','RN','RS','RO','RR','SC','SP','SE','TO') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `consulta`
--

INSERT INTO `consulta` (`id`, `email`, `senha`, `endereco`, `bairro`, `cep`, `cidade`, `estado`) VALUES
(1, 'saedfegsdf@gmail.com', 'tteyg', 'tetyher', 'eryedtg', '354634', 'dsfafsd', 'AM');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `consulta`
--
ALTER TABLE `consulta`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
