-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15/03/2024 às 20:43
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sistemacurriculo`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `dados_curriculo`
--

CREATE TABLE `dados_curriculo` (
  `nome_completo` varchar(100) NOT NULL,
  `datansc` varchar(45) NOT NULL,
  `nacionalidade` varchar(50) NOT NULL,
  `naturalidade` varchar(80) NOT NULL,
  `cpf` int(20) NOT NULL,
  `tipo_habilitacao` varchar(20) NOT NULL,
  `possui_deficiencia` varchar(20) NOT NULL,
  `genero` varchar(45) NOT NULL,
  `estado_civil` varchar(20) NOT NULL,
  `telefone` int(20) NOT NULL,
  `email` varchar(225) NOT NULL,
  `paiz` varchar(45) NOT NULL,
  `estado` varchar(45) NOT NULL,
  `cidadi` varchar(60) NOT NULL,
  `cep` int(50) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `rua` varchar(100) NOT NULL,
  `escolaridade` varchar(50) NOT NULL,
  `formacao_academica` varchar(50) NOT NULL,
  `nome_curso` varchar(100) NOT NULL,
  `incio_curso` varchar(45) NOT NULL,
  `fim_curso` varchar(45) NOT NULL,
  `situacao_curso` varchar(45) NOT NULL,
  `experiencia` varchar(225) NOT NULL,
  `instituicao` varchar(100) NOT NULL,
  `pais` varchar(50) NOT NULL,
  `estadu` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `cursos_complementares` varchar(225) NOT NULL,
  `idiomas` varchar(100) NOT NULL,
  `objetivo` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `dados_curriculo`
--

INSERT INTO `dados_curriculo` (`nome_completo`, `datansc`, `nacionalidade`, `naturalidade`, `cpf`, `tipo_habilitacao`, `possui_deficiencia`, `genero`, `estado_civil`, `telefone`, `email`, `paiz`, `estado`, `cidadi`, `cep`, `bairro`, `rua`, `escolaridade`, `formacao_academica`, `nome_curso`, `incio_curso`, `fim_curso`, `situacao_curso`, `experiencia`, `instituicao`, `pais`, `estadu`, `cidade`, `cursos_complementares`, `idiomas`, `objetivo`) VALUES
('aaa', '31321-02-12', 'SAA', 'SDADSAD', 0, 'SADASDAS', 'Sim', 'Masculino', 'Solteiro(a)', 34243243, 'me616376@gmail.com', 'DASDSADA', 'DSADADSADADADA', 'SDASFAf', 546454, 'vfba', 'bvdabvd', 'Ensino Fundamental', 'babaabb', 'ggg', '21312-03-12', '131123-12-31', 'Concluído', 'qeeq', '4536re', 'wtwwe', 'rtewtwet', 'wertwertet', 'dadaqq', 'tewtewrt, Não tem<, Não tem, Não tem', 'gfdfhngm'),
('Gustavin de Sousaua', '1998-06-16', 'Brasil', 'Bacabal', 606540604, 'A, B e C', 'Não', 'Masculino', 'Solteiro(a)', 2147483647, 'gustavosouasa023s@gmail.com', 'Brasil', 'Maranhão', 'Bacabal', 658000000, 'Centro', 'Traquinas de Azevedo', 'Ensino Superior', 'Engenheiro Agronomo', 'Agronomia1', '2020-01-22', '2024-01-22', 'Concluído', 'Assisnte adismintaravio', 'SerraNegra', 'Brasil', 'Maranhão', 'Bacabal', 'Tecniaria\r\nmadsidsa', 'Italiano, Básico, Intermediário, Intermediário', 'matar gente com agrotoxico'),
('Luzimaria da Silva Ferreira', '1996-09-12', 'Brasil', 'Carolina MA', 2147483647, 'A', 'Não', 'Feminino', 'Casado(a)', 998327927, 'mariaeduarda.pizzinatto@gmail.com', 'Brasil', 'Maranhão', 'Balsas', 658000000, 'Trizidil3andia', 'Antônio Jacobina Dias Leite', 'Pós Graduação(Especialização)', 'Enfermeira', 'Técnico em enfermagem', '2022-02-21', '2022-02-21', 'Concluído', 'Meter agulha', 'Balsas Urgente', 'Brasil', 'Maranhão', 'Carolina', 'Excel básico', 'Inglês, Básico, Intermediário, Avançado', 'Matar gente no soro');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `dados_curriculo`
--
ALTER TABLE `dados_curriculo`
  ADD PRIMARY KEY (`cpf`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
