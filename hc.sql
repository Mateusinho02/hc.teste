-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01/08/2023 às 04:10
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `hc`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastros`
--

CREATE TABLE `cadastros` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cadastros`
--

INSERT INTO `cadastros` (`id`, `nome`, `email`, `telefone`, `data_cadastro`) VALUES
(1, 'mateus', 'mateus_mariano@estudante.sesisenai.org.br', '232223', '2023-07-06 03:00:00'),
(2, 'mateus', 'mateus_mariano@estudante.sesisenai.org.br', '232223', '2023-07-06 03:00:00'),
(3, 'mateus', 'mateus_mariano@estudante.sesisenai.org.br', '5555555', '2023-07-12 03:00:00'),
(4, 'mateus', 'mateus_mariano@estudante.sesisenai.org.br', '5555555', '2023-07-12 03:00:00'),
(5, 'mateus', '123@gmail.com', '5555555', '2023-06-27 03:00:00'),
(6, 'mateus', 'ramaianejorge123@gmail.com', '232223', '2023-07-05 03:00:00'),
(7, 'das', 'ramaianejorge123@gmail.com', '5555555', '2023-06-28 03:00:00'),
(8, 'das', 'ramaianejorge123@gmail.com', '5555555', '2023-06-28 03:00:00');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cadastros`
--
ALTER TABLE `cadastros`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastros`
--
ALTER TABLE `cadastros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
