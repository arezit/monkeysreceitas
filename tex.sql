-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 16-Nov-2017 às 17:23
-- Versão do servidor: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tex`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `codCategoria` int(11) NOT NULL,
  `descCategoria` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`codCategoria`, `descCategoria`) VALUES
(1, 'Doce'),
(2, 'Salgado'),
(3, 'Bebida / AlcoÃ³lica'),
(4, 'Bebida / NÃ£o AlcoÃ³lica'),
(5, 'Salada');

-- --------------------------------------------------------

--
-- Estrutura da tabela `receita`
--

CREATE TABLE `receita` (
  `codReceita` int(11) NOT NULL,
  `nomeReceita` varchar(255) DEFAULT NULL,
  `ingredientes` text,
  `modoPreparo` text CHARACTER SET utf8 COLLATE utf8_bin,
  `codCategoria` int(11) DEFAULT NULL,
  `codTempo` int(11) DEFAULT NULL,
  `codUsuario` int(11) DEFAULT NULL,
  `totalVotos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `receita`
--

INSERT INTO `receita` (`codReceita`, `nomeReceita`, `ingredientes`, `modoPreparo`, `codCategoria`, `codTempo`, `codUsuario`, `totalVotos`) VALUES
(26, 'asd', 'asdsdsddsdd', 'asd', 1, 1, 2, 2),
(27, 'pojkq', 'pjvoiweoweljegnwewgwg', 'olwegowegbwebjweofoweihjngbwefwemgay', 1, 1, 2, 1),
(31, 'Ã³Ã­', 'Ã©ÃºÃ¡', 'Ã­Ã¹', 4, 13, 3, 1),
(32, 'pÃ£o', '6kg de batata\r\n500gr farinha\r\nxd', 'mexer tudo e botar no forno', 2, 13, 3, 0),
(33, 'asdasd', 'sadasdsa', 'asdasdas', 1, 9, 1, 0),
(36, 'ty', 'gg', 'ez', 3, 13, 2, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tempo`
--

CREATE TABLE `tempo` (
  `codTempo` int(11) NOT NULL,
  `descTempo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tempo`
--

INSERT INTO `tempo` (`codTempo`, `descTempo`) VALUES
(1, '5 minutos'),
(2, '10 minutos'),
(3, '15 minutos'),
(4, '20 minutos'),
(5, '25 minutos'),
(6, '30 minutos'),
(7, '35 minutos'),
(8, '40 minutos'),
(9, '45 minutos'),
(10, '50 minutos'),
(11, '55 minutos'),
(12, '60 minutos'),
(13, '65 minutos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `codUsuario` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `login` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`codUsuario`, `nome`, `email`, `login`, `senha`) VALUES
(1, 'a', 'a', 'a', 'a'),
(2, 'aa', 'aa', 'aa', 'aa'),
(3, 'josÃ©', 'josÃ©', 'josÃ©', 'josÃ©'),
(4, '123', '123', '123', '123'),
(5, 'qwdasd', 'adsad@asdasfd', 'asdfsadf', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `voto`
--

CREATE TABLE `voto` (
  `codVoto` int(11) NOT NULL,
  `codReceita` int(11) NOT NULL,
  `codUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`codCategoria`);

--
-- Indexes for table `receita`
--
ALTER TABLE `receita`
  ADD PRIMARY KEY (`codReceita`),
  ADD KEY `CodCategoria` (`codCategoria`),
  ADD KEY `CodTempo` (`codTempo`),
  ADD KEY `FK_receitaUsuario` (`codUsuario`);

--
-- Indexes for table `tempo`
--
ALTER TABLE `tempo`
  ADD PRIMARY KEY (`codTempo`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`codUsuario`);

--
-- Indexes for table `voto`
--
ALTER TABLE `voto`
  ADD PRIMARY KEY (`codVoto`),
  ADD KEY `codReceita` (`codReceita`),
  ADD KEY `codUsuario` (`codUsuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `codCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `receita`
--
ALTER TABLE `receita`
  MODIFY `codReceita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `tempo`
--
ALTER TABLE `tempo`
  MODIFY `codTempo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `codUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `voto`
--
ALTER TABLE `voto`
  MODIFY `codVoto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `receita`
--
ALTER TABLE `receita`
  ADD CONSTRAINT `CodCategoria` FOREIGN KEY (`codCategoria`) REFERENCES `categoria` (`codCategoria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `CodTempo` FOREIGN KEY (`codTempo`) REFERENCES `tempo` (`codTempo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_receitaUsuario` FOREIGN KEY (`codUsuario`) REFERENCES `usuario` (`codUsuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `voto`
--
ALTER TABLE `voto`
  ADD CONSTRAINT `fk_codReceita` FOREIGN KEY (`codReceita`) REFERENCES `receita` (`codReceita`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_codUsuario` FOREIGN KEY (`codUsuario`) REFERENCES `usuario` (`codUsuario`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
