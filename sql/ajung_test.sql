-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Fev-2021 às 19:08
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
  `cnpj` varchar(18) NOT NULL,
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
(36, 'William Rodrigues', 'willrodrigues4@gmail.com', '11 9 83596070', 'FATEC', '20.560.829/0001-56', '94055-370', 'Rua México', 'São Jerônimo', 777, 'Gravataí', 'RS', '2021-02-19 14:58:20'),
(37, 'Alexandre', 'alexandre@santos.com.br', '23783920', 'Los Santos Investimentos ', '27.650.442/0001-30', '57316-335', 'Rua Antônio Fernandes', 'Nova Esperança', 88, 'Arapiraca', 'AL', '2021-02-19 15:05:06'),
(38, 'Amanda Santiago', 'amanda_advogada@hotmail.com', '11 9 45327896', 'A.S Advocacia', '15.562.768/0001-26', '57086-432', 'Quadra B', 'Benedito Bentes', 444, 'Maceió', 'AL', '2021-02-19 15:06:47'),
(39, 'Nathalia', 'nath@tavares.uk', '11 34654762', 'Nath Imports', '15.562.768/0001-26', '97110-140', 'Rua Bolívia', 'Camobi', 1, 'Santa Maria', 'RS', '2021-02-19 15:07:51');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
