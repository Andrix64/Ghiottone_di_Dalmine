-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: 89.46.111.188
-- Creato il: Mar 02, 2021 alle 19:19
-- Versione del server: 5.7.32-35-log
-- Versione PHP: 7.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Sql1426785_2`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `Alimenti`
--

CREATE TABLE `Alimenti` (
  `ID` int(11) NOT NULL,
  `Nome` varchar(40) NOT NULL,
  `Ingredienti` varchar(300) NOT NULL,
  `Costo` varchar(5) NOT NULL,
  `Usata` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `Alimenti`
--

INSERT INTO `Alimenti` (`ID`, `Nome`, `Ingredienti`, `Costo`, `Usata`) VALUES
(1, 'Arrotolata', 'pomodoro, mozzarella, funghi, grana, salamino piccante, a fine cottura crudo', '7.00', 1),
(2, 'Bismarck', 'pomodoro, mozzarella, prosciutto, uovo, grana', '6.50', 1),
(3, 'Boombastica', 'pomodoro, mozzarella, porcini, acciughe, grana, pomodori freschi', '8.00', 1),
(4, 'Boscaiola', 'pomodoro, mozzarella, pancetta, porcini', '7.50', 1),
(5, 'Bresaola e rucola', 'pomodoro, mozzarella, bresaola, rucola', '8.00', 1),
(6, 'Campagnola', 'pomodoro, mozzarella, pancetta, polenta, salsiccia, grana', '7.80', 1),
(7, 'Carbonara', 'pomodoro, mozzarella, uova, grana, pancetta affumicata, panna', '7.00', 1),
(8, 'Crudo', 'pomodoro, mozzarella, a fine cottura crudo', '8.00', 1),
(9, 'Casereccia', 'pomodoro, mozzarella, scamorza, rucola, speck', '8.50', 1),
(10, 'Del nonno', 'pomodoro, mozzarella, branzi, taleggio, salame, pancetta, cipolle, olive', '8.00', 1),
(11, 'Fattoria', 'pomodoro, mozzarella, speck, cipolle, grana, carciofi rustici, olio, salsiccia, origano', '7.00', 1),
(12, 'Fresca', 'pomodoro, mozzarella, bresaola, grana, rucola, glassa all aceto balsamico', '8.00', 1),
(13, 'Golosa', 'pomodoro, mozzarella, radicchio trevisano, fantasia di funghi, branzi', '7.50', 1),
(14, 'Luna', 'pomodoro, mozzarella, speck, spinaci, panna, porcini, carciofi', '8.50', 1),
(15, 'Lombarda', 'pomodoro, mozzarella, cipolle, salsiccia', '6.50', 1),
(16, 'Maiala', 'pomodoro, mozzarella, salumi assortiti', '8.00', 1),
(17, 'Montanara', 'pomodoro, mozzarella, speck, porcini, brie', '8.50', 1),
(18, 'Perla Nera', 'pat&egrave di olive, mozzarella, funghi misti, prosciutto di Parma, taleggio', '8.50', 1),
(19, 'Porcini', 'pomodoro, mozzarella, funghi porcini', '7.00', 1),
(20, 'Rustica', 'pomodoro, mozzarella, speck, carciofi rustici', '8.20', 1),
(21, 'Speciale', 'pomodoro, mozzarella, gorgonzola, grana, salame, polenta', '7.50', 1),
(22, 'Speck', 'pomodoro, mozzarella, speck', '8.00', 1),
(23, 'Susi', 'pomodoro, mozzarella, fantasia di funghi, taleggio, salsiccia, rosmarino', '8.00', 1),
(24, 'Trentino', 'pomodoro, mozzarella, funghi chiodini, emmental, speck', '8.50', 1),
(25, 'Trevisana', 'pomodoro, mozzarella, radicchio trevisano, funghi, pancetta affumicata', '7.00', 1),
(26, 'Universale', 'pomodoro, mozzarella, olive, porcini, grana, pancetta, wurstel, salamino piccante, speck, spinaci, tonno, peperoni', '8.50', 1),
(27, 'Valtellina', 'pomodoro, mozzarella, funghi chiodini, bresaola', '8.50', 1),
(28, 'Zingara', 'pomodoro, mozzarella, funghi, peperoni, olive', '6.00', 1),
(29, 'Americana', 'pomodoro, mozzarella, wurstel, patatine', '6.50', 1),
(30, 'Bufala', 'pomodoro, mozzarella di bufala', '7.50', 1),
(31, 'Calzone ', 'pomodoro, mozzarella, prosciutto', '6.00', 1),
(32, 'Calzone con ricotta', 'pomodoro, mozzarella, ricotta di bufala, prosciutto', '6.50', 1),
(33, 'Calzone farcito', 'pomodoro, mozzarella, prosciutto, carciofi, olive, funghi', '7.00', 1),
(34, 'Caprese', 'pomodoro, mozzarella di bufala, pomodori freschi, rucola', '7.50', 1),
(35, 'Capricciosa', 'pomodoro, mozzarella, prosciutto, olive, funghi, carciofi, capperi', '6.50', 1),
(36, 'Focaccia', 'pasta doppia, olio, rosmarino', '4.00', 1),
(37, 'Focaccia Davide', 'pasta doppia, grana, pancetta affumicata, salvia, olio extra vergine', '5.20', 1),
(38, 'Funghi', 'pomodoro, mozzarella, funghi', '5.50', 1),
(39, 'Ghiottone', 'pomodoro, mozzarella, salsiccia, olive, funghi, origano, carciofi', '7.00', 1),
(40, 'Margherita', 'pomodoro, mozzarella', '5.00', 1),
(41, 'Marinara', 'pomodoro, aglio, origano', '4.00', 1),
(42, 'Prosciutto', 'pomodoro, mozzarella, prosciutto', '6.00', 1),
(43, 'Prosciutto e funghi', 'pomodoro, mozzarella, prosciutto, funghi', '6.50', 1),
(44, 'Quattro stagioni', 'pomodoro, mozzarella, prosciutto, funghi, carciofi', '6.50', 1),
(45, 'Romana', 'pomodoro, mozzarella, acciughe, capperi, olive, origano', '6.00', 1),
(46, 'Sorriso', 'pomodoro, mozzarella, patatine fritte', '5.50', 1),
(47, 'Wurstel', 'pomodoro, mozzarella, wurstel', '5.50', 1),
(48, 'Bruschetta', 'olio, olive, aglio, cipolla, gorgonzola, pancetta, speck, salamino piccante, grana, origano', '7.50', 1),
(49, 'Biancaneve', 'mozzarella, carciofi rustici, branzi, taleggio, polenta, porcini', '7.50', 1),
(50, 'Cremosa', 'brie, taleggio, emmenthal, mozzarella, gorgonzola, salvia', '7.50', 1),
(51, 'Jessica', 'spinaci freschi, mozzarella, funghi trifolati, taleggio', '7.50', 1),
(52, 'Riviera', 'pomodori freschi, pesto, mozzarella, scamorza, salame piccante', '7.50', 1),
(53, 'Genovese', 'pomodori a fette, mozzarella, pesto, grana', '7.00', 1),
(54, 'Asparagi', 'pomodoro, mozzarella, asparagi', '5.50', 1),
(55, 'Calzone verde', 'pomodoro, mozzarella, spinaci, prosciutto, ricotta di bufala, grana', '7.00', 1),
(56, 'Contadina', 'pomodoro, mozzarella, asparagi, spinaci, ricotta di bufala, grana', '7.00', 1),
(57, 'Delizia', 'pomodoro, mozzarella, funghi, rucola, grana', '6.50', 1),
(58, 'Italia', 'pomodoro, mozzarella, cipolle, peperoni, spinaci, grana', '7.00', 1),
(59, 'Mediterranea', 'pomodoro, mozzarella, pomodori freschi, grana', '6.50', 1),
(60, 'Milanese', 'pomodoro, mozzarella, asparagi, uovo, grana', '6.50', 1),
(61, 'Ortolana', 'pomodoro, mozzarella, radicchio trevisano, zucchine, spinaci, melanzane, peperoni', '8.00', 1),
(62, 'Parmigiana', 'pomodoro, mozzarella, melanzane, grana', '6.00', 1),
(63, 'Peperoni', 'pomodoro, mozzarella, peperoni', '6.00', 1),
(64, 'Pugliese', 'pomodoro, mozzarella, cipolle, peperoni, spinaci, grana', '5.50', 1),
(65, 'Paesana', 'pomodoro, mozzarella, melanzane, asparagi, spinaci, pomodoro fresco', '7.50', 1),
(66, 'Ricotta e spinaci', 'pomodoro, mozzarella, ricotta di bufala, spinaci freschi', '6.00', 1),
(67, 'Rucola', 'pomodoro, mozzarella, rucola', '5.50', 1),
(68, 'Vegetariana', 'pomodoro, mozzarella, zucchine, melanzane', '6.50', 1),
(69, 'Amatriciana', 'pomodoro, mozzarella, cipolle, pomodori freschi, guanciale di maiale, peperoncino', '7.50', 1),
(70, 'Beppe', 'pomodoro, mozzarella, tonno, grana, slamino piccante, gorgonzola, origano', '8.00', 1),
(71, 'Calabra', 'pomodoro, mozzarella, salamino piccante', '6.50', 1),
(72, 'Diavola', 'pomodoro, grana, peperoncino, origano', '5.50', 1),
(73, 'Duetto', 'pomodoro, mozzarella, scamorza, carciofi, salame piccante, olio extravergine, doppia pasta', '8.50', 1),
(74, 'Greca', 'pomodoro, mozzarella, cipolla, olive schiacciate, pomodorini semi secchi, peperoncino, origano', '8.50', 1),
(75, 'Indiavolata', 'pomodoro, mozzarella, peperoncino, salsa piccante, peperoni, funghi, capperi, tonno', '7.00', 1),
(76, 'Inferno', 'pomodoro, mozzarella, peperoncino, olive, salamino piccante, acciughe, capperi, origano', '7.20', 1),
(77, 'Messicana', 'pomodoro, mozzarella, cipolla, mais, salame piccante, peperoni', '7.20', 1),
(78, 'Sfiziosa', 'pomodoro, mozzarella, salamino piccante, scamorza', '7.00', 1),
(79, 'Strega', 'pomodoro, mozzarella, acciughe, salamino piccante, pomodori freschi, origano', '7.00', 1),
(80, 'Super pizza', 'pomodoro, mozzarella, funghi, salamino piccante, wurstel, origano', '7.50', 1),
(81, 'Vulcano', 'pomodoro, mozzarella, wurstel, olive, prosciutto, salamino piccante', '8.00', 1),
(82, 'Frutti di mare', 'pomodoro, frutti di mare', '7.50', 1),
(83, 'Gamberetti', 'pomodoro, mozzarella, gamberetti', '7.50', 1),
(84, 'Mare e monti', 'pomodoro, mozzarella, salmone, porcini', '8.00', 1),
(85, 'Napoletana', 'pomodoro, mozzarella, acciughe, origano', '5.50', 1),
(86, 'Salmone', 'pomodoro, mozzarella, salmone', '8.00', 1),
(87, 'Tonno', 'pomodoro, mozzarella, tonno', '6.00', 1),
(88, 'Tonno e zola', 'pomodoro, mozzarella, tonno, gorgonzola', '6.50', 1),
(89, 'Tonno e cipolle', 'pomodoro, mozzarella, tonno, cipolle', '6.50', 1),
(90, 'Bergamasca', 'pomodoro, mozzarella, branzi, taleggio, salame nostrano', '7.00', 1),
(91, 'Formaggi', 'pomodoro, mozzarella, branzi, taleggio, emmenthal', '7.00', 1),
(92, 'Romagnola', 'pomodoro, mozzarella, formaggi, zola, crudo', '8.50', 1),
(93, 'Stuzzichino', 'pomodoro, grana, olio, origano', '5.50', 1),
(94, 'Zola', 'pomodoro, mozzarella, gorgonzola', '6.00', 1),
(95, 'Zola e noci', 'pomodoro, mozzarella, gorgonzola, noci', '6.50', 1),
(96, 'Patatine fritte', 'scatola piccola', '1.50', 1),
(97, 'Patatine fritte', 'scatola grande', '3.00', 1),
(98, 'Crocchette di patate', 'piccole 5 pezzi', '2.00', 1),
(99, 'Crocchette di patate', 'grandi 10 pezzi', '3.50', 1),
(100, 'Olive ascolane', 'piccola 5 pezzi', '2.00', 1),
(101, 'Olive ascolane', 'grande 10 pezzi', '3.50', 1),
(102, 'Mozzarelline panate', '7 pezzi', '3.00', 1),
(103, 'Anelli di cipolla', '10 pezzi', '2.00', 1),
(104, 'Bocconcini di pollo', '8 pezzi', '3.50', 1),
(105, 'Chele di granchio', '5 pezzi', '3.50', 1),
(106, 'Verdure miste pastellate', 'scatola grande', '4.00', 1),
(107, 'Peperoncini al formaggio', '5 pezzi', '4.50', 1),
(125, 'Piera', 'Mozzarella', '3.00', 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `Categorie`
--

CREATE TABLE `Categorie` (
  `ID` int(11) NOT NULL,
  `Nome` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `Categorie`
--

INSERT INTO `Categorie` (`ID`, `Nome`) VALUES
(1, 'Le specialità'),
(2, 'Le classiche'),
(3, 'Le bianche'),
(4, 'L\'orto'),
(5, 'Il fuoco'),
(6, 'Il mare'),
(7, 'I formaggi'),
(8, 'I Fritti'),
(9, 'Le Limited');

-- --------------------------------------------------------

--
-- Struttura della tabella `CategorieAlimenti`
--

CREATE TABLE `CategorieAlimenti` (
  `ID` int(11) NOT NULL,
  `ID_Alimenti` int(11) NOT NULL,
  `ID_Categorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `CategorieAlimenti`
--

INSERT INTO `CategorieAlimenti` (`ID`, `ID_Alimenti`, `ID_Categorie`) VALUES
(1, 1, 1),
(168, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 1),
(6, 6, 1),
(7, 7, 1),
(8, 8, 1),
(9, 9, 1),
(10, 10, 1),
(11, 11, 1),
(12, 12, 1),
(13, 13, 1),
(14, 14, 1),
(15, 15, 1),
(16, 16, 1),
(17, 17, 1),
(18, 18, 1),
(51, 18, 3),
(19, 19, 1),
(20, 20, 1),
(21, 21, 1),
(22, 22, 1),
(23, 23, 1),
(24, 24, 1),
(25, 25, 1),
(26, 26, 1),
(27, 27, 1),
(28, 28, 1),
(29, 29, 2),
(30, 30, 2),
(31, 31, 2),
(32, 32, 2),
(33, 33, 2),
(34, 34, 2),
(35, 35, 2),
(36, 36, 2),
(48, 36, 3),
(37, 37, 2),
(49, 37, 3),
(38, 38, 2),
(39, 39, 2),
(40, 40, 2),
(41, 41, 2),
(42, 42, 2),
(43, 43, 2),
(44, 44, 2),
(45, 45, 2),
(46, 46, 2),
(47, 47, 2),
(50, 48, 3),
(76, 48, 5),
(52, 49, 3),
(98, 49, 7),
(53, 50, 3),
(99, 50, 7),
(54, 51, 3),
(63, 51, 4),
(55, 52, 3),
(84, 52, 5),
(56, 53, 3),
(61, 53, 4),
(57, 54, 4),
(58, 55, 4),
(59, 56, 4),
(60, 57, 4),
(62, 58, 4),
(64, 59, 4),
(65, 60, 4),
(66, 61, 4),
(67, 62, 4),
(68, 63, 4),
(125, 64, 4),
(70, 65, 4),
(71, 66, 4),
(72, 67, 4),
(73, 68, 4),
(131, 69, 5),
(75, 70, 5),
(77, 71, 5),
(78, 72, 5),
(79, 73, 5),
(80, 74, 5),
(81, 75, 5),
(82, 76, 5),
(83, 77, 5),
(85, 78, 5),
(86, 79, 5),
(87, 80, 5),
(88, 81, 5),
(89, 82, 6),
(90, 83, 6),
(91, 84, 6),
(92, 85, 6),
(93, 86, 6),
(94, 87, 6),
(95, 88, 6),
(96, 89, 6),
(97, 90, 7),
(100, 91, 7),
(101, 92, 7),
(102, 93, 7),
(103, 94, 7),
(104, 95, 7),
(108, 96, 8),
(109, 97, 8),
(110, 98, 8),
(111, 99, 8),
(112, 100, 8),
(113, 101, 8),
(114, 102, 8),
(115, 103, 8),
(116, 104, 8),
(117, 105, 8),
(118, 106, 8),
(119, 107, 8),
(172, 125, 9);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `Alimenti`
--
ALTER TABLE `Alimenti`
  ADD PRIMARY KEY (`ID`);

--
-- Indici per le tabelle `Categorie`
--
ALTER TABLE `Categorie`
  ADD PRIMARY KEY (`ID`);

--
-- Indici per le tabelle `CategorieAlimenti`
--
ALTER TABLE `CategorieAlimenti`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_Alimenti` (`ID_Alimenti`,`ID_Categorie`),
  ADD KEY `ID_Categorie` (`ID_Categorie`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `Alimenti`
--
ALTER TABLE `Alimenti`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT per la tabella `Categorie`
--
ALTER TABLE `Categorie`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT per la tabella `CategorieAlimenti`
--
ALTER TABLE `CategorieAlimenti`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `CategorieAlimenti`
--
ALTER TABLE `CategorieAlimenti`
  ADD CONSTRAINT `CategorieAlimenti_ibfk_1` FOREIGN KEY (`ID_Categorie`) REFERENCES `Categorie` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `CategorieAlimenti_ibfk_2` FOREIGN KEY (`ID_Alimenti`) REFERENCES `Alimenti` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
