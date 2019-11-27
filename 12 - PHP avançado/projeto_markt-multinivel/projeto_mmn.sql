-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 27-Nov-2019 às 11:07
-- Versão do servidor: 5.7.24
-- versão do PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto_mmn`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `patentes`
--

DROP TABLE IF EXISTS `patentes`;
CREATE TABLE IF NOT EXISTS `patentes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `minimo` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `patentes`
--

INSERT INTO `patentes` (`id`, `nome`, `minimo`) VALUES
(1, 'Iniciante', 0),
(2, 'Junior', 1),
(3, 'Diretor', 3),
(4, 'Diretor Sênior', 5),
(5, 'Executivo', 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pai` int(11) DEFAULT NULL,
  `patente` int(11) NOT NULL DEFAULT '1',
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `id_pai`, `patente`, `nome`, `email`, `senha`) VALUES
(1, NULL, 4, 'Sistema', 'sistema@hotmail.com', '698dc19d489c4e4db73e28a713eab07b'),
(2, 1, 1, 'Fulano', 'fulano@gmail.com', 'fbad19c19e9c4baff8b963e8fc6f794b'),
(3, 1, 4, 'Ciclano', 'ciclano@gmail.com', 'a09e494e8207f7bf76a7450e355fe3e3'),
(4, 3, 3, 'Paulo', 'paulo@gmail.com', '6ee236e4d0ab7380bb1bee87b8f0dce5'),
(5, 3, 1, 'Pedro', 'pedro@gmail.com', 'c3b7f393410fe6185ba5d966a213a38f'),
(6, 4, 2, 'João', 'joao@gmail.com', 'e52d270281261b738fcd413c72d8ad4c'),
(7, 6, 2, 'Pedrinho', 'pedrinho@gmail.com', 'a9d0cf0bd640913b43b0b2d3b917765f'),
(8, 7, 1, 'Roberto', 'roberto@gmail.com', '5f177272b67a69c573dc1de61c853157');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
