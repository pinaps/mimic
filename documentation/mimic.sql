-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 15 Février 2016 à 16:10
-- Version du serveur :  10.1.8-MariaDB
-- Version de PHP :  5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mimic`
--

-- --------------------------------------------------------

--
-- Structure de la table `etiquettes`
--

CREATE TABLE `etiquettes` (
  `idetiquettes` int(11) NOT NULL,
  `nom` varchar(90) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `etiquettes_has_strips`
--

CREATE TABLE `etiquettes_has_strips` (
  `etiquettes_idetiquettes` int(11) NOT NULL,
  `strips_idstrips` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `strips`
--

CREATE TABLE `strips` (
  `idstrips` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `image1` varchar(255) DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `image3` varchar(255) DEFAULT NULL,
  `texte1` varchar(255) DEFAULT NULL,
  `texte2` varchar(255) DEFAULT NULL,
  `texte3` varchar(255) DEFAULT NULL,
  `date_creation` varchar(45) DEFAULT NULL,
  `nbre_like` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `strips`
--

INSERT INTO `strips` (`idstrips`, `titre`, `image1`, `image2`, `image3`, `texte1`, `texte2`, `texte3`, `date_creation`, `nbre_like`) VALUES
(1, 'Strip d''essai - le premier', 'image_test_11.jpg', 'image_test_12.jpg', 'image_test_13.jpg', 'Le texte qui illustre la première image de la première série.', 'Le texte qui illustre la deuxième image de la première série.', 'Etc...', '160215113900', 55),
(2, 'Deuxième essai, presque muet', 'image_test_21.jpg', 'image_test_22.jpg', 'image_test_23.jpg', '', '', 'Des émoticônes, ce serait bien !', '160215113905', 12),
(3, 'Troisième essai, le premier dans l''ordre chronologique. Et aussi le plus bavard', 'image_test_31.jpg', 'image_test_32.jpg', 'image_test_33.jpg', 'On commence avec une bose dose de Lorem.\r\nHanc regionem praestitutis celebritati diebus invadere parans dux ante edictus per solitudines Aboraeque amnis herbidas ripas, suorum indicio proditus, qui admissi flagitii metu exagitati ad praesidia desciver ale', 'On en rajoute encore une couche ( toujours 255 caractères, c''est le maximum possible dans cette zone de saisie).\r\nIl faudra prévoir la possibilité d''aller à la ligne.\r\nEt aussi d''introduire des caractères spéciaux. Dux ante edictus per solitudines Aboraet', 'Des émoticônes, ce serait bien !\r\n\r\nLà, j''ai fait deux sauts de ligne.\r\nEt là un seul.\r\nAllez, encore une bonne couche de 255 caractères. Ce truc doit vraiment devenir illisible, non ? c''est le maximum possible dans cette zone de saisie). J''en suis à 255 ', '160215113000', 12),
(4, 'Quatrième essai, le second dans l''ordre chronologique.', 'image_test_41.jpg', 'image_test_42.jpg', 'image_test_43.jpg', 'On recommence,', 'encore,', 'et toujours', '160215113200', 120);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `etiquettes`
--
ALTER TABLE `etiquettes`
  ADD PRIMARY KEY (`idetiquettes`);

--
-- Index pour la table `etiquettes_has_strips`
--
ALTER TABLE `etiquettes_has_strips`
  ADD PRIMARY KEY (`etiquettes_idetiquettes`,`strips_idstrips`),
  ADD KEY `fk_etiquettes_has_strips_strips1_idx` (`strips_idstrips`),
  ADD KEY `fk_etiquettes_has_strips_etiquettes_idx` (`etiquettes_idetiquettes`);

--
-- Index pour la table `strips`
--
ALTER TABLE `strips`
  ADD PRIMARY KEY (`idstrips`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `etiquettes`
--
ALTER TABLE `etiquettes`
  MODIFY `idetiquettes` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `strips`
--
ALTER TABLE `strips`
  MODIFY `idstrips` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `etiquettes_has_strips`
--
ALTER TABLE `etiquettes_has_strips`
  ADD CONSTRAINT `fk_etiquettes_has_strips_etiquettes` FOREIGN KEY (`etiquettes_idetiquettes`) REFERENCES `etiquettes` (`idetiquettes`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_etiquettes_has_strips_strips1` FOREIGN KEY (`strips_idstrips`) REFERENCES `strips` (`idstrips`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
