-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Fev-2021 às 22:52
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ajung_test`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `companies`
--

CREATE TABLE `companies` (
  `id` int(11) NOT NULL,
  `contato` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(13) NOT NULL,
  `empresa` varchar(50) NOT NULL,
  `cnpj` varchar(14) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `logradouro` varchar(100) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `numero` int(10) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `data_registro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `companies`
--

INSERT INTO `companies` (`id`, `contato`, `email`, `telefone`, `empresa`, `cnpj`, `cep`, `logradouro`, `bairro`, `numero`, `cidade`, `estado`, `data_registro`) VALUES
(19, 'William Rodrigues', 'wrodrigues@gmail.com', '11984356789', 'CHAMA FIO', '11111111111111', '40323-270', 'Conjunto IAPI', 'IAPI', 444, 'Salvador', 'BA', '2021-02-17 17:48:39');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
