-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 17-Mar-2022 às 19:48
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pizzaria_login`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `busca`
--

DROP TABLE IF EXISTS `busca`;
CREATE TABLE IF NOT EXISTS `busca` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `descricao` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `imagem` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `busca`
--

INSERT INTO `busca` (`id`, `nome`, `preco`, `descricao`, `imagem`) VALUES
(1, 'Pizza de Alho', '28.00', 'Tamanho Familia', './upload/pizza_alho.png'),
(2, 'Pizza de Alho ', '21.90', 'Brotinho', './upload/pizza_alho.png'),
(3, 'Pizza de Atum', '35.00', 'Tamanho Familia', './upload/pizza atum.jpg'),
(4, 'Pizza de Atum', '21.90', 'Brotinho', './upload/pizza atum.jpg'),
(5, 'Pizza de Bacon', '38.90', 'Tamanho Familia', './upload/pizza_bacon'),
(6, 'Pizza de Bacon', '21.90', 'Brotinho', './upload/pizza_bacon'),
(7, 'Pizza de Calabresa', '28.00', 'Tamanho Familia', './upload/pizza de calabresa.jpg'),
(8, 'Pizza de Calabresa', '21.90', 'Brotinho', './upload/pizza de calabresa'),
(9, 'Pizza Marguerita', '35.00', 'Tamanho Familia', './upload/pizza marguerita.jpg'),
(10, 'Pizza Marguerita', '21.90', 'Brotinho', './upload/pizza marguerita.jpg'),
(11, 'Pizza de Frango', '38.00', 'Tamanho Familia', './upload/pizza frango c catupiry.jpg'),
(12, 'Pizza de Frango', '21.90', 'Brotinho', './upload/pizza frango c catupiry.jpg'),
(13, 'Pizza Muçarela', '38.00', 'Tamanho Familia', './upload/pizza_mucarela.jpg'),
(14, 'Pizza Muçarela', '21.90', 'Brotinho', './upload/pizza_mucarela.jpg'),
(15, 'Pizza Portuguesa', '25.00', 'Tamanho Familia', './upload/pizza_portuguesa'),
(16, 'Pizza Portuguesa', '21.90', 'Brotinho', './upload/pizza_portuguesa'),
(17, 'Pizza Quatro Queijos', '28.00', 'Tamanho Familia', './upload/pizza quatro queijos.jpg'),
(18, 'Pizza Quatro Queijos', '21.90', 'Brotinho', './upload/pizza quatro queijos.jpg'),
(19, 'Pizza de Azeitona', '39.90', 'Tamanho Familia', './upload/pizza_azeitona.jpg'),
(20, 'Pizza de Azeitona', '21.90', 'Brotinho', './upload/pizza_azeitona.jpg'),
(21, 'Pizza de Brócolis', '29.90', 'Tamanho Familia', './upload/pizza_brocolis.jpg'),
(22, 'Pizza de Brócolis', '21.90', 'Brotinho', './upload/pizza_brocolis.jpg'),
(23, 'Pizza de Cabola Caramelizada', '39.90', 'Tamanho Familia', './upload/pizza cebola caramelizada.jpg'),
(24, 'Pizza Cebola Caramelizada', '21.90', 'Brotinho', './upload/pizza cebola caramelizada.jpg'),
(25, 'Pizza de Palmito', '29.90', 'Tamanho Familia', './upload/pizza_palmito.jpg'),
(26, 'Pizza de Palmito', '21.90', 'Brotinho', './upload/pizza_palmito.jpg'),
(27, 'Pizza de Rúcula', '29.90', 'Tamanho Familia', './upload/pizza_rucula.jpg'),
(28, 'Pizza de Rúcula', '21.90', 'Brotinho', './upload/pizza_rucula.jpg'),
(29, 'Pizza Azeitona e Milho Verde', '39.90', 'Tamanho Familia', './upload/pizza_vegana.jpg'),
(30, 'Pizza Azeitona e Milho Verde', '21.90', 'Brotinho', './upload/pizza_vegana.jpg'),
(31, 'Pizza Brownie', '39.90', 'Tamanho Familia', './upload/pizza_brownie.jpg'),
(32, 'Pizza Brownie', '21.90', 'Brotinho', './upload/pizza_brownie.jpg'),
(33, 'Pizza de Banana', '29.90', 'Tamanho familia', './upload/pizza_banana.jpg'),
(34, 'Pizza de Banana', '21.90', 'Brotinho', './upload/pizza_banana.jpg'),
(35, 'Pizza de Chocolate', '39.90', 'Tamanho Familia', './upload/pizza_chocolate.jpg'),
(36, 'Pizza de Banana', '21.90', 'Brotinho', './upload/pizza_chocolate.jpg'),
(37, 'Pizza de Brigadeiro', '29.90', 'Tamanho Familia', './upload/pizza_brigadeiro.jpg'),
(38, 'Pizza de Brigadeiro', '21.90', 'Brotinho', './upload/pizza_brigadeiro.jpg'),
(39, 'Pizza de Prestígio', '29.90', 'Tamanho Familia', './upload/piza_prestigio.jpg'),
(40, 'Pizza de Prestígio', '21.90', 'Brotinho', './upload/piza_prestigio.jpg'),
(41, 'Pizza Romeu e Julieta', '39.90', 'Tamanho Familia', './upload/pizza_romeu_julieta.jpg'),
(42, 'Pizza Romeu e Julieta', '21.90', 'Brotinho', './upload/pizza_romeu_julieta.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `imagem` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `preco`, `imagem`) VALUES
(1, 'Pizza de Alho ', '28.00', './upload/pizza_alho.png'),
(2, 'Pizza de Atum ', '35.00', './upload/pizza atum.jpg'),
(3, 'Pizza de Bacon', '38.90', './upload/pizza_bacon.jpg'),
(4, 'Pizza de Calabresa', '28.00', './upload/pizza de calabresa.jpg'),
(5, 'Pizza Marguerita', '35.00', './upload/pizza marguerita.jpg'),
(6, 'Pizza de Frango', '38.00', './upload/pizza frango c catupiry.jpg'),
(7, 'Pizza Muçarela', '38.00', './upload/pizza_mucarela.jpg'),
(8, 'Pizza Portuguesa', '25.00', './upload/pizza_portuguesa'),
(9, 'Pizza Quatro Queijos', '28.00', './upload/pizza quatro queijos.jpg'),
(10, 'Pizza de Azeitona', '39.90', './upload/pizza_azeitona.jpg'),
(11, 'Pizza de Brócolis', '29.90', './upload/pizza_brocolis.jpg'),
(12, 'Pizza Cebola Caramelizada', '39.90', './upload/pizza cebola caramelizada.jpg'),
(13, 'Pizza Palmito', '29.90', './upload/pizza_palmito.jpg'),
(14, 'Pizza de Rúcula', '29.90', './upload/pizza_rucula.jpg'),
(15, 'Pizza Azeitona e Milho Verde', '39.90', './upload/pizza_bacon.vegana'),
(16, 'Pizza Brownie', '39.90', './upload/pizza_brownie.jpg'),
(17, 'Pizza de Banana', '29.90', './upload/pizza_banana.jpg'),
(18, 'Pizza de Chocolate', '39.90', './upload/pizza_chocolate.jpg'),
(19, 'Pizza de Brigadeiro', '29.90', './upload/pizza_brigadeiro.jpg'),
(20, 'Pizza Prestigio', '29.90', './upload/pizza_prestigio.jpg'),
(21, 'Pizza Romeu e Julieta', '39.90', './upload/pizza_romeu_julieta.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) DEFAULT NULL,
  `telefone` varchar(30) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `senha` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome`, `telefone`, `email`, `senha`) VALUES
(1, 'Daniela', '73999898987', 'danisantos@gmail.com', 'caa9c8f8620cbb30679026bb6427e11f'),
(2, 'Bruno Santos', '21989897868', 'santosbruno@gmail.com', 'caa9c8f8620cbb30679026bb6427e11f'),
(3, 'Simon Gabriel', '73998321601', 'simons@gmail.com', 'caa9c8f8620cbb30679026bb6427e11f'),
(4, 'teste', '9999999', 'teste1@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759'),
(5, 'Vinicius Santos', '7189898988', 'santosvinicius1@gmail.com', '114fdfefd3d69799f0b6f73ef764d405');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
