-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Mar-2023 às 00:30
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `nsolucoes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id`, `email`, `password`) VALUES
(1, 'test@test.com', 'd9b1d7db4cd6e70935368a1efb10e377');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cpf` char(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` varchar(10) NOT NULL,
  `cep` char(8) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `numero` int(5) NOT NULL,
  `complemento` varchar(100) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `estado` char(2) NOT NULL,
  `d_nacimento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `cpf`, `email`, `telefone`, `cep`, `endereco`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `d_nacimento`) VALUES
(2, 'test', '15546332654', 'vivi@vivi.com', '991378173', '38037510', 'test', 454, 'test', 'test', 'test', 'mg', '2012-11-01'),
(4, 'vinicius', '15546332654', 'vivi@vivi.com', '3499137817', '38037510', 'test', 454, 'test', 'test', 'test', 'mg', '0000-00-00'),
(5, 'vinicius', '15546332654', 'vivi@vivi.com', '3499137817', '38037510', 'test', 454, 'test', 'test', 'test', 'mg', '0000-00-00'),
(6, 'vinicius', '15546332654', 'vivi@vivi.com', '3499137817', '38037510', 'test', 454, 'test', 'test', 'test', 'mg', '0000-00-00'),
(7, 'vinicius', '15546332654', 'vivi@vivi.com', '3499137817', '38037510', 'test', 454, 'test', 'test', 'test', 'mg', '0000-00-00'),
(8, 'vinicius', '15546332654', 'vivi@vivi.com', '3499137817', '38037510', 'test', 454, 'test', 'test', 'test', 'mg', '0000-00-00'),
(9, 'vinicius', '15546332654', 'vivi@vivi.com', '3499137817', '38037510', 'test', 454, 'test', 'test', 'test', 'mg', '0000-00-00'),
(10, 'vinicius', '15546332654', 'vivi@vivi.com', '3499137817', '38037510', 'test', 454, 'test', 'test', 'test', 'mg', '0000-00-00'),
(11, 'vinicius', '15546332654', 'vivi@vivi.com', '3499137817', '38037510', 'test', 454, 'test', 'test', 'test', 'mg', '0000-00-00'),
(12, 'vinicius', '15546332654', 'vivi@vivi.com', '3499137817', '38037510', 'test', 454, 'test', 'test', 'test', 'mg', '0000-00-00'),
(13, 'hahaha', '15546332654', 'sadad@sdasdsa.com', '3499137817', '38037510', 'test', 55, 'test', 'test', 'test', 'te', '2000-07-07'),
(14, 'hahaha', '15546332654', 'sadad@sdasdsa.com', '3499137817', '38037510', 'test', 55, 'test', 'test', 'test', 'te', '2000-07-07'),
(15, 'hahaha', '15546332654', 'sadad@sdasdsa.com', '3499137817', '38037510', 'test', 55, 'test', 'test', 'test', 'te', '2000-07-07'),
(16, 'asda', '15546332654', 'sadasas@sadsad', '15151515', 'sadsa', '44', 0, 'adas', 'assa', 'PB', 'ad', '0000-00-00'),
(17, 'sadsa', '1554', 'sadasd', 'asasd', 'asasd', 'asdas', 0, 'asdas', 'asd', 'PB', 'as', '0000-00-00'),
(18, 'asdas', '15546325', 'asdsa', 'assad', 'sadasd', 'sadas', 0, 'asdasd', 'saasd', 'PB', 'as', '0000-00-00');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
