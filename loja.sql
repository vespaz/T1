-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 06-Abr-2018 às 19:00
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `loja`
--
CREATE DATABASE IF NOT EXISTS `loja` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `loja`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `loja_cadastro`
--

CREATE TABLE IF NOT EXISTS `loja_cadastro` (
  `cod_cidade` int(11) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  PRIMARY KEY (`cpf`),
  KEY `cod_cidade` (`cod_cidade`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `loja_cadastro`
--

INSERT INTO `loja_cadastro` (`cod_cidade`, `cpf`, `nome`, `email`, `sexo`) VALUES
(1, '00000000001', 'Jamal', 'Jamal@gmail.com', 'M'),
(1, '00000000002', 'Pedro', 'Pedro@gmail.com', 'M'),
(2, '00000000003', 'Igor', 'Igor@gmial.com', 'M'),
(2, '00000000004', 'Bianca', 'Bianca@gmail.com', 'F'),
(3, '00000000005', 'Júlia', 'Julia@gmail.com', 'F'),
(3, '00000000006', 'Victória', 'Victoria@gmail.com', 'F'),
(4, '00000000007', 'Matheus', 'Matheus@gmail.com', 'M'),
(4, '00000000008', 'Amanda', 'Amanda@gmail.com', 'F'),
(5, '00000000009', 'Beatriz', 'Beatriz@gmial.com', 'F'),
(5, '00000000010', 'Maria', 'MP@Hotmail.com', 'F'),
(6, '00000000011', 'Akiza', 'Akiza@gmail.com', 'F'),
(6, '00000000012', 'Ruan', 'Ruan@gmail.com', 'M'),
(7, '00000000013', 'Beluzo', 'Beluzo@gmail.com', 'M'),
(7, '00000000014', 'Gabriel', 'Gabriel@gmail.com', 'F'),
(8, '00000000015', 'Natali', 'Natali@gmail.com', 'F'),
(8, '00000000016', 'Vinicius', 'Vini@gmail.com', 'M'),
(9, '00000000017', 'Lívia', 'Livia@gmail.com', 'F'),
(9, '00000000018', 'Gabriela', 'Gabriela@gmail.com', 'F'),
(10, '00000000019', 'Giovana', 'Giovana', 'F'),
(10, '00000000020', 'Rilari', 'Rilari@gmail.com', 'F');

-- --------------------------------------------------------

--
-- Estrutura da tabela `loja_cidade`
--

CREATE TABLE IF NOT EXISTS `loja_cidade` (
  `id_cidade` int(11) NOT NULL,
  `nome_cidade` varchar(100) NOT NULL,
  `cod_estado` int(11) NOT NULL,
  PRIMARY KEY (`id_cidade`),
  KEY `cod_estado` (`cod_estado`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `loja_cidade`
--

INSERT INTO `loja_cidade` (`id_cidade`, `nome_cidade`, `cod_estado`) VALUES
(1, 'Araraquara', 1),
(2, 'Barretos', 1),
(3, 'Sorocaba', 1),
(4, 'Santos', 1),
(5, 'Guarulhos', 1),
(6, 'Rio de Janeiro', 2),
(7, 'Angra dos Reis', 2),
(8, 'São Gonçalo', 2),
(9, 'Duque de Caxias', 2),
(10, 'Paraty', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `loja_estado`
--

CREATE TABLE IF NOT EXISTS `loja_estado` (
  `id_estado` int(11) NOT NULL,
  `sigla` varchar(2) NOT NULL,
  `nome_estado` varchar(50) NOT NULL,
  PRIMARY KEY (`id_estado`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `loja_estado`
--

INSERT INTO `loja_estado` (`id_estado`, `sigla`, `nome_estado`) VALUES
(1, 'SP', 'São Paulo'),
(2, 'RJ', 'Rio de Janeiro');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `loja_cadastro`
--
ALTER TABLE `loja_cadastro`
  ADD CONSTRAINT `loja_cadastro_ibfk_1` FOREIGN KEY (`cod_cidade`) REFERENCES `loja_cidade` (`id_cidade`);

--
-- Limitadores para a tabela `loja_cidade`
--
ALTER TABLE `loja_cidade`
  ADD CONSTRAINT `loja_cidade_ibfk_1` FOREIGN KEY (`cod_estado`) REFERENCES `loja_estado` (`id_estado`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
