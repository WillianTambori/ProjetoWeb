-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Jun-2023 às 03:00
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ulx`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `cod` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `marca` varchar(100) DEFAULT NULL,
  `modelo` varchar(100) DEFAULT NULL,
  `dataFabr` date DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `valor` varchar(100) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`cod`, `id`, `nome`, `marca`, `modelo`, `dataFabr`, `descricao`, `valor`, `foto`) VALUES
(1, 6, 'Impressora', 'HP', 'Wireless 2040', '2023-06-19', 'Multifuncional', '632,50', 'img/usu6_impressoraHP.png'),
(2, 6, 'Mouse', 'Logitec', 'Com fio', '2023-02-06', 'Mouse comum', '33,00', 'img/usu6_mouse.jpg'),
(3, 6, 'Computador de Mesa', 'DELL', 'Dell table using', '2023-04-28', 'HD 500GB e 700gb de memória', '3.423,76', 'img/usu6_pc.png'),
(4, 6, 'SmartPhone', 'MultiCellRoger', 'MultQuad500', '2022-06-07', 'Faz e recebe ligação', '978,00', 'img/usu6_celular.png'),
(5, 6, 'Mouse Gamer', 'RogerMarc', 'WhiteMouse', '2023-04-19', 'Mouse ultra sensível', '99,00', 'img/usu6_mouosegamer.PNG'),
(6, 6, 'Computador Vintage', 'iMac', 'Azul Translúcido', '2014-05-11', 'HD 2TB, 256gb de ram', '1.545,00', 'img/usu6_compac.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `sobrenome` varchar(100) DEFAULT NULL,
  `DataNasc` date DEFAULT NULL,
  `cpf` varchar(50) DEFAULT NULL,
  `telefone` varchar(50) DEFAULT NULL,
  `endereco` varchar(200) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `cep` varchar(100) DEFAULT NULL,
  `bairro` varchar(100) DEFAULT NULL,
  `cidade` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `sobrenome`, `DataNasc`, `cpf`, `telefone`, `endereco`, `numero`, `cep`, `bairro`, `cidade`, `email`, `senha`, `foto`) VALUES
(6, 'Rogério', 'Maciel', '2023-06-13', '5', '(18) 988267558', 'Rua Que sobe e desce', 143, '5', 'Bela Vista', 'Prudente', 'rogerio.souza31@fatec.sp.gov.br', '123', 'img/perfil_5_roger.jpg');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`cod`,`id`),
  ADD KEY `id` (`id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `produto_ibfk_1` FOREIGN KEY (`id`) REFERENCES `usuario` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
