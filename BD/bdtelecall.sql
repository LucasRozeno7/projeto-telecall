-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27/11/2023 às 03:17
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
-- Banco de dados: `bdtelecall`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `dados`
--

CREATE TABLE `dados` (
  `iddados` int(11) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `nomemae` varchar(80) NOT NULL,
  `celular` varchar(17) NOT NULL,
  `telfixo` varchar(16) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `datanasc` date NOT NULL,
  `genero` varchar(10) NOT NULL,
  `email` varchar(45) NOT NULL,
  `cep` int(11) NOT NULL,
  `rua` varchar(45) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `bairro` varchar(45) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `estado` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `dados`
--

INSERT INTO `dados` (`iddados`, `nome`, `nomemae`, `celular`, `telfixo`, `cpf`, `datanasc`, `genero`, `email`, `cep`, `rua`, `numero`, `bairro`, `cidade`, `estado`) VALUES
(1, 'sddddddddddddsdaddddddd', 'aaaaaaaaaaaaaaaaaaaaaaaaaa', '(52) 11 23451-234', '(52) 11 2341-234', '824.689.515-06', '2002-11-29', 'Masculino', 'email@email.com', 21040282, 'Rua da Proclamação', '2', 'Bonsucesso', 'Rio de Janeiro', 'RJ'),
(2, 'sddddddddddddsdaddddddd', 'dgggggggggggggaaa', '(52) 11 23451-234', '(52) 11 2341-234', '824.689.515-06', '2000-11-07', 'Masculino', 'email@email.com', 21040282, 'Rua da Proclamação', '2', 'Bonsucesso', 'Rio de Janeiro', 'RJ'),
(3, 'bbbbbbbbb3', 'aaaaaaaaaaaaaaaaaaaaaaaaaa', '(52) 11 23451-234', '(52) 11 2341-234', '824.689.515-06', '2001-11-14', 'Feminino', 'email@email.com', 21040282, 'Rua da Proclamação', '1', 'Bonsucesso', 'Rio de Janeiro', 'RJ'),
(4, 'nome', 'aaaaaaaaaaaaaaaaaaaaaaaaaa', '(52) 11 23451-234', '(52) 11 2341-234', '824.689.515-06', '2002-11-29', 'Masculino', 'email@email.com', 21040282, 'Rua da Proclamação', '77', 'Bonsucesso', 'Rio de Janeiro', 'RJ'),
(5, 'sddddddddddddsdaddddddd', 'aaaaaaaaaaaaaaaaaaaaaaaaaa', '(52) 11 23451-234', '(52) 11 2341-234', '824.689.515-06', '2002-11-29', 'Masculino', 'email@email.com', 21040282, 'Rua da Proclamação', '2', 'Bonsucesso', 'Rio de Janeiro', 'RJ'),
(6, 'sddddddddddddsdaddddddd', 'aaaaaaaaaaaaaaaaaaaaaaaaaa', '(21) 12 34512-345', '(52) 11 2341-234', '824.689.515-06', '2002-11-27', 'Masculino', 'email@email.com', 21040282, 'Rua da Proclamação', '77', 'Bonsucesso', 'Rio de Janeiro', 'RJ'),
(7, 'aaaaaaaaaaaaaaaaaaaaaa', 'nomemaeaaaaaaaaaaaaaaaaaaaaa', '(52) 11 23451-234', '(52) 11 2341-234', '824.689.515-06', '2001-11-30', 'Masculino', 'email@email.com', 21040282, 'Rua da Proclamação', '2', 'Bonsucesso', 'Rio de Janeiro', 'RJ'),
(8, 'sddddddddddddsdaddddddd', 'aaaaaaaaaaaaaaaaaaaaaaaaaa', '(52) 11 23451-234', '(52) 11 2341-234', '824.689.515-06', '2002-11-22', 'Masculino', 'email@email.com', 21040282, 'Rua da Proclamação', '2', 'Bonsucesso', 'Rio de Janeiro', 'RJ'),
(9, 'sddddddddddddsdaddddddd', 'aaaaaaaaaaaaaaaaaaaaaaaaaa', '(21) 12 34512-345', '(52) 11 2341-234', '824.689.515-06', '2002-11-16', 'Masculino', 'email@email.com', 21040282, 'Rua da Proclamação', '2', 'Bonsucesso', 'Rio de Janeiro', 'RJ'),
(10, '10', 'aaaaaaaaaaaaaaaaaaaaaaaaaa', '(52) 11 23451-234', '(52) 11 2341-234', '824.689.515-06', '2002-11-15', 'Masculino', 'email@email.com', 21040282, 'Rua da Proclamação', '77', 'Bonsucesso', 'Rio de Janeiro', 'RJ');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuarios` int(10) NOT NULL,
  `usuario` varchar(6) NOT NULL,
  `senha` varchar(8) NOT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`idusuarios`, `usuario`, `senha`, `tipo`) VALUES
(1, 'testee', 'testeeee', 0),
(2, 'contaa', 'senhaaaa', 0),
(3, 'contad', 'senhuuuu', 0),
(4, 'adminn', 'pppppppp', 1),
(5, 'loginn', 'jjjjjjjj', 0),
(6, 'novooo', 'novooooo', 0),
(7, 'aiaiai', 'aiaiaiai', 0),
(8, 'yyyyyy', 'yyyyyyyy', 0),
(9, 'jjjjjj', 'jjjjjjjj', 0),
(10, 'xxxxxx', 'xxxxxxxx', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `dados`
--
ALTER TABLE `dados`
  ADD PRIMARY KEY (`iddados`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuarios`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `dados`
--
ALTER TABLE `dados`
  MODIFY `iddados` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuarios` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
