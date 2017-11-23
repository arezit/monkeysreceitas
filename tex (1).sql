-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23-Nov-2017 às 02:10
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 5.6.30

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
(37, 'CamarÃ£o ao bafo', '300g de camarÃµes com casca;\r\n2 xÃ­caras (chÃ¡) de Ã¡gua;\r\nSal a gosto.', 'Tempere os camarÃµes com sal. Coloque a Ã¡gua em uma panela e, em cima desta, encaixe outra panela, com furos(como escorredor de macarrÃ£o). Deixe a Ã¡gua ferver. Coloque os camarÃµes nessa panela com furos e deixe por cerca de 10 minutos ou atÃ© que fiquem cozidos.', 2, 2, 6, 0),
(38, 'Moela de tainha', '8 colheres (sopa) de banha de porco ou azeite;\r\nSal a gosto;\r\n500g de moelas de tainha;\r\n4 dentes de alho ppicados.\r\n', 'Tempere as moelas com sal. Em uma frigideira, esquente bem a banha de porco e frite as moelas. Quando comeÃ§arem a dourar, junte o alho e termine de fritar.', 2, 2, 6, 0),
(39, 'Polvo na chapa', '3 litros de Ã¡gua;\r\nSal a gosto;\r\n300g de polvo;\r\n2 colheres (sopa) de azeite;\r\n3 e 1/2 colheres (sopa) de vinho branco seco.', 'AqueÃ§a 3 litros de Ã¡gua com sal. Depois de ferver, mergulhe o polvo, deixando cozinhar por 25 minutos. Retire e corte em pedaÃ§os de 2 cm. Tempere com sal, o azeite e o vinho branco seco. Em uma frigideira antiaderente, grelhe o polvo atÃ© comeÃ§ar a dourar, mexendo de em quando.', 2, 9, 6, 0),
(40, 'Canjica', '1 e 1/2 xÃ­cara (chÃ¡) de milho de canjica;\r\n1 litro e 4 xÃ­caras (chÃ¡) de Ã¡gua;\r\n4 xÃ­caras (chÃ¡) de leite;\r\n1 e 1/2 xÃ­cara (chÃ¡) de aÃ§ucar;\r\n1 e 1/4 xÃ­cara (chÃ¡) de coco ralado fresco;\r\nCanela em pÃ³ para polvinlhar.', 'Coloque o milho de canjica de molho em 1 litro de Ã¡gua por 12 horas. Depois disso, passe em Ã¡gua corrente e escorra. Cozinhe o milho nas 4 xÃ­caras (chÃ¡) de Ã¡gua e deixe reduzir, atÃ© a Ã¡gua ficar dois dedos acima da canjica. Acrescente o leite, o aÃ§ucar e o coco. Cozinhe por 30 minutos em fogo baixo ou atÃ© ficar bem cremoso. Sirva polvilhado de canela em pÃ³.', 1, 12, 6, 0),
(41, 'Doce de marmelo', '1 kg de marmelo;\r\n300g de aÃ§ucar.', 'Lave os marmelos muito bem com uma escovinha. Corte cada um em 4 pedaÃ§os e descasque, retirando as sementes. Ponha os pedaÃ§os em uma panela com Ã¡gua suficiente para cobri-los. Acrescente o aÃ§ucar e cozinhe em fogo brando, sem parar de mexer. Se for necessÃ¡rio, adicione mais Ã¡gua ou mais aÃ§ucar.', 1, 8, 6, 0),
(43, 'Sex on the beach', '1 Dose vodka;\r\n1 Dose licor de pessÃªgo;\r\n1 Dose suco de laranja;\r\n1 Colher de Sopa	groselha.', 'Coloque gelo no copo Adicione as doses e o suco de laranja Com ajuda de uma colher coloque a groselha (encoste a colher dentro do copo para que o liquido escorra para o fundo, sem que misture na bebida, por ser mais denso ficara no fundo).', 3, 1, 6, 0),
(44, 'Suco de maÃ§a/ abacaxi e gengibre', '400 ML de Ã¡gua;\r\n2 MaÃ§Ã£s;\r\n1 colher de chÃ¡ de gengibre ralado;\r\n1/2 Abacaxi.', 'Bata os ingredientes no liquidificador e coe.', 4, 1, 6, 0),
(45, 'Salada energÃ©tica', '1 xÃ­cara (chÃ¡) de macarrÃ£o penne integral;\r\n1 dente de alho amassado;\r\n1 colheres  (sobremesa) de Ã³leo de coco;\r\n2 colheres  (sopa) de azeitona-preta sem caroÃ§o;\r\n3 folhas de manjericÃ£o fresco;\r\n2 tomates- cereja;\r\n3 colheres (sopa) de atum light em lata escorrido;\r\n2 pimentas â€“ biquinho.', 'Cozinhe o macarrÃ£o em Ã¡gua fervente e reserve. Em uma panela, frite o alho no Ã³leo de coco com uma pitada de sal. Misture o macarrÃ£o, alho, sal e deixe esfriar. Depois de frio, coloque-o em um recipiente e acrescente o manjericÃ£o, os tomates-cereja cortados ao meio, a pimenta-biquinho, o atum e azeitonas.', 5, 6, 6, 0),
(46, 'Maminha', '1 maminha de 1/2kg a 1kg;\r\n2 colheres (sopa) de sal grosso ou a gosto;', 'Polvilhe a peÃ§a com sal grosso e leve Ã  grelha da churrasqueira, com o fogo nÃ£o muito forte. Asse dos dois lados durante 12 minutos cada.', 2, 5, 6, 0),
(47, 'Fraldinha ', '1/2kg de fraldinha;\r\n2 colheres (sopa) de sal grosso.\r\n', 'Polvilhe sal grosso sobre a carne e coloque-a no espeto. Leve ao fogo, que deve ser mÃ©dio. Asse por 30 minutos, virando para que cozinhe dos dois lados.', 2, 6, 6, 0),
(48, 'KnackwÃ¼rstchen mit sauerkrat und salat', '1 salsichÃ£o branco;\r\n1 salsichÃ£o vermelho.', 'Em uma panela com Ã¡gua (suficiente para cobrir os alimentos), afervente os salsichÃµes por 3 minutos. Escorra e sirva-os acompanhados de saladas de batatas, chucrute, mostarda-preta e raiz-forte preparada ', 2, 3, 6, 0),
(49, 'Pudim', '1 caixa de leite condensado;\r\n1 copo de leite lÃ­quido;\r\n3 ovos;\r\n6 colheres de aÃ§Ãºcar;\r\n2 colheres de Ã¡gua;\r\n1 pÃ£o adormecido.', 'No liquidificador coloque o leite condensado, o leite lÃ­quido, em seguida adicione os ovos. Acrescente o pÃ£o adormecido em pedaÃ§os. Bata atÃ© ficar homogÃªneo. Em uma forma de alumÃ­nio coloque as 6 colheres de aÃ§Ãºcar. Adicione as duas colheres de Ã¡gua e leve ao fogo baixo para caramelizar. Quando estiver no ponto a calda. Adicione a mistura homogÃªnea, leve ao forno por 1 hora e meia em banho maria ou direto por 1 hora. Depois desse tempo retire do forno, deixe esfriar e desenforme', 1, 13, 6, 0),
(50, 'Arroz doce', '1 xÃ­cara (chÃ¡) de arroz;\r\n2 cravos-da-Ã­ndia;\r\n3 canelas em pau;\r\nRaspas da casca de Â½ limÃ£o-siciliano;\r\nÂ½ litro de Ã¡gua;\r\n5 colheres (sopa) de adoÃ§ante em pÃ³ culinÃ¡rio;\r\n4 Â½ xÃ­caras (chÃ¡) de leite de arroz com sabor coco;\r\nCanela em pÃ³ (para polvilhar);\r\nLascas de amÃªndoas.', 'Coloque o arroz, os cravos, a canela em pau e as raspas de limÃ£o em uma panela prÃ³pria para doces. Acrescente Ã¡gua e adoÃ§ante em pÃ³. Cozinhe em fogo baixo, com a panela parcialmente tampada. Observe atÃ© a Ã¡gua secar completamente. Adicione o leite de arroz com sabor coco e cozinhe em fogo baixo, mexendo de vez em quando, atÃ© o arroz ficar macio e o caldo cremoso. Desligue o fogo e espere esfriar. Sirva em tacinhas individuais, polvilhada com a canela e lascas de amÃªndoas.', 1, 12, 6, 0),
(51, 'Mousse de chocolate', '3 ovos;\r\n200 g de chocolate meio amargo;\r\n2 colheres (sopa) de aÃ§Ãºcar;\r\n1 lata de creme de leite.', 'Bata as gemas atÃ© dobrarem de volume. Junte o aÃ§Ãºcar e continue batendo. Derreta o chocolate e acrescente Ã  gemada. Junte o creme de leite, batendo sempre. Por fim, acrescente as claras em neve (bem batidas mesmo), misturando rapidamente na batedeira. Leve Ã  geladeira e sirva-se, deliciando o melhor mousse e mais simples de fazer.', 1, 4, 6, 0),
(52, 'Beijinho', '2 latas de leite condensado;\r\n2 colheres (sopa) de manteiga;\r\n300 g de coco fresco ralado (fino);\r\nAÃ§Ãºcar cristal;\r\nCravos-da-Ã­ndia a gosto.', 'Numa panela, misture o leite condensado, a manteiga e o coco ralado.\r\nLeve ao fogo e misture por aproximadamente 15 minutos. Retire a mistura do fogo e deixe amornar. Modele a massa em formato de bolinhas, passe pelo aÃ§Ãºcar cristal ou coco ralado e finalize com cravos-da-Ã­ndia.', 1, 4, 6, 0),
(53, 'Salada magrinha', '1 chuchu pequeno;\r\n3 colheres (sopa) de atum light;\r\n1/2 cebola-roxa picada;\r\n4 tomates-cereja picados;\r\nOrÃ©gano a gosto.', 'Descasque o chuchu, corte-o ao meio, retire o miolo e cozinhe-o em Ã¡gua atÃ© ficar macio. Escorra o atum e passe em Ã¡gua corrente para eliminar o excesso de sal. Misture o atum, o orÃ©gano, a cebola e o tomate. Recheie o chuchu com a mistura e sirva.', 5, 3, 6, 0),
(54, 'Salada rejuvenescedora', '10 tomates-cereja;\r\n5 nÃ³s de muÃ§arela de bÃºfala;\r\n1/2 abacate pequeno;\r\n1 colheres (sobremesa) de azeite extravirgem;\r\n1 colheres (chÃ¡) de orÃ©gano desidratado;\r\n1 colheres (chÃ¡) de salsa desidrata.', 'Descasque e corte o abacate em fatias. Em seguida, passe as fatias na grelha quente por poucos segundos cada lado (caso o abacate esteja muito mole, deixe no congelador por uma hora). Corte os tomates ao meio. Misture os ingredientes e coloque o azeite, o orÃ©gano, o manjericÃ£o e a salsa por cima.', 5, 4, 6, 0),
(55, 'Salada nutritiva', '2 ovos cozidos cortados ao meio;\r\n1 tomate fatiado;\r\n6 cubos de queijo minas frescal light;\r\n1/2 espiga de milho cozida;\r\n4 folhas da alface lisa;\r\n1 lata de atum light;\r\n1/2 limÃ£o siciliano;\r\n1/2 pepino fatiado;\r\n1 posta de salmÃ£o sem pele.', 'Cozinhe o milho em Ã¡gua e retire os grÃ£os com auxÃ­lio de uma faca. Se vocÃª nÃ£o tiver a espiga de milho, pode ser milho enlatado, desde que lave-o em Ã¡gua corrente para diminuir o sÃ³dio da conserva. Reserve. Tempere o salmÃ£o com limÃ£o, sal e grelhe-o. Em um recipiente, junte todos os ingredientes e coloque um pouquinho de sal, se necessÃ¡rio, e um fio de azeite.', 5, 6, 6, 0),
(56, 'Salada anti-inflamatÃ³ria', '25 folhas de espinafre;\r\n1 pera;\r\n2 colheres (sobremesa) de ricota;\r\n1 colheres (chÃ¡) de tomate desidratado;\r\n1 colheres (chÃ¡) de canela em pÃ³;\r\nSal a gosto;\r\n1/2 limÃ£o;\r\n1 copo (200ml) de Ã¡gua.', 'Corte a pera em fatias finas e mergulhe-as por um minuto em um recipiente com 200 ml de Ã¡gua, o suco de 1/2 limÃ£o espremido e a canela em pÃ³. Escorra e reserve. Em um recipiente, misture a ricota com o tomate e salpique um pouco de sal. Depois, monte a salada em um prato. Primeiro, coloque as folhas de espinafre, as fatias de pera e a ricota com os tomates.', 5, 3, 6, 0),
(57, 'Salada para controlar a glicemia', '1 folha de repolho-roxo fatiado;\r\n1 batata yacÃ³n;\r\n6 folhas de rÃºcula;\r\n1 colheres (sopa) de uva-passa;\r\n1/3 de manga em fatias finas;\r\n4 ovos de codorna cozidos;\r\nSal a gosto.', 'Coloque a batata yacÃ³n para cozinhar no vapor, sem casca, por 12 minutos ou atÃ© ficar macia. Leve para esfriar na geladeira. Reserve. Em um recipiente, misture todos os ingredientes e sirva.', 5, 2, 6, 0),
(58, 'Espanhola', '500 Mls Vinho tinto;\r\n200 Mls Suco de abacaxi;\r\n200 Mls Leite condensado.', 'Bater tudo liquidificador. Decorar como preferir.', 3, 1, 6, 0),
(59, 'Eclipse', '25 Mls de conhaque;\r\n10 Mls licor de pera;\r\n5 Mls de Angostura bit-ter;\r\n1 Unidade pimenta dedo-de-moÃ§a.', 'Misture os ingredientes na coqueteleira e sirva em um copo com gelo. FaÃ§a pequenos cortes na pimenta para que ela libere ardÃªncia.', 3, 1, 6, 0),
(60, 'Limonada de Lavanda', '1 Xicara de chÃ¡	Ãgua fervida;\r\n6 Unidade Ramos de lavanda fresca;\r\n1500 Mls Ãgua gelada;\r\n4 Unidade LimÃ£o (suco);\r\n1 Colher de Sopa Mel.', 'Na sequÃªncia: Numa taÃ§a, colocar a Ã¡gua fervida, adicionar os ramos de flor de lavanda, deixar repousar durante 15 minutos, coar a infusÃ£o de lavanda e reservar. Fatiar 1 limÃ£o e reservar e fazer suco dos outros 3 limÃµes. Numa jarra, colocar 1,5 l de Ã¡gua bem fria e adicionar a infusÃ£o de lavanda, o sumo e as rodelas de limÃ£o e o mel. Mexer bem atÃ© que o mel se dissolva. Deixar repousar, dentro da geladeira, durante 2 horas antes de servir.', 3, 3, 6, 0),
(61, 'Frozen de banana', '100 Mls Vodca;\r\n1 Unidade Banana nanica;\r\n50 Mls	Suco de abacaxi;\r\n1 Unidade Bola de sorvete de creme;\r\n100 Mls	Leite gelado.', 'Bata todos os ingredientes no liquidificador com pedras de gelo (aproximadamente 6 pedras). A consistÃªncia tem que ser de frozen.', 3, 1, 6, 0),
(62, 'Sangue nos Olhos', '10 Mls	WISKY;\r\n10 Mls	CAMPARI;\r\n10 Mls	RUM;\r\n10 Mls	VODKA;\r\n10 Mls	MARTINI.', 'ADICIONAR TODOS OS ITENS COM 02 PEDRAS DE GELO EM COPO PARA WISKY E SERVIR EM SEGUIDA.', 3, 1, 6, 0),
(63, 'Suco de Bacuri com Leite', '1 Xicara de chÃ¡	Polpa de bacuri;\r\n1 Xicara de chÃ¡	Leite integral;\r\n1 Xicara de chÃ¡	Gelo;\r\n4 Colher de Sopa AÃ§Ãºcar refinado.', 'Bater todos os ingredientes no liquidificador e servir.', 4, 1, 6, 0),
(64, 'ChÃ¡ de Morango', '1 Litro	Ãgua;\r\n300 Gramas Morango;\r\n1 Unidade Pau de canela;\r\n2 Unidade Cravo;\r\n1 Colher de cafÃ© EssÃªncia de baunilha.', 'Amasse os morangos, junte Ã  Ã¡gua fervente com a canela e o cravo e deixe em fogo mÃ©dio por 10 minutos. Acrescente a essÃªncia de baunilha e desligue o fogo. Coe e sirva.', 4, 3, 6, 0),
(65, 'Suco de Amora com Ãgua de Coco', '1 Xicara de chÃ¡	Amora fresca;\r\n1 Unidade LimÃ£o espremido;\r\n200 Mls	Ãgua de coco.', 'Bata todos os ingredientes no liquidificador, coe e sirva.', 4, 1, 6, 0),
(66, 'Suco Caiana', '500 Mls	Caldo de cana;\r\n200 Leite de coco;\r\n1 Colher de sobremesa Mel;\r\n5 Unidade Pedras de gelo.', 'Bata dos os ingredientes no liquidificador e sirva gelado.', 4, 1, 6, 0),
(67, 'Suco de Tamarindo', '200 Gramas Tamarindo;\r\n1 Unidade Lata de leite condensado;\r\n2 Unidade Ãgua de coco - (usar a medida da lata).', 'Abra os tamarindos e retire as fibras. Junte 3 xÃ­caras de (chÃ¡) de Ã¡gua e cozinhe em fogo baixo cerca de 30 minutos. Retire do fogo e passe pela peneira aproveitando a polpa ao mÃ¡ximo. Coloque o suco no liquidificador e bata com o leite condensado e duas medidas da lata de Ã¡gua de coco gelada. Junte o gelo e sirva.', 4, 3, 6, 0);

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
(5, 'qwdasd', 'adsad@asdasfd', 'asdfsadf', '123'),
(6, 'Leonardo Soares Schiesl', 'leonardo.soares.schiesl@gmail.com', 'Schiesl', '20orelhudo');

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
  MODIFY `codReceita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT for table `tempo`
--
ALTER TABLE `tempo`
  MODIFY `codTempo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `codUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `voto`
--
ALTER TABLE `voto`
  MODIFY `codVoto` int(11) NOT NULL AUTO_INCREMENT;
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
