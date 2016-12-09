-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Ven 11 Septembre 2015 à 15:38
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `agence_medicale`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_nom` varchar(255) NOT NULL,
  `cat_ordre` int(11) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`cat_id`, `cat_nom`, `cat_ordre`) VALUES
(1, 'appareillage', 1),
(2, 'Hypodermie', 3),
(3, 'Poids et Mesures', 3),
(4, 'Urgence', 2),
(5, 'cat7', 1);

-- --------------------------------------------------------

--
-- Structure de la table `famille`
--

CREATE TABLE IF NOT EXISTS `famille` (
  `fam_id` int(11) NOT NULL AUTO_INCREMENT,
  `fam_nom` varchar(50) NOT NULL,
  `fam_ordre` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  PRIMARY KEY (`fam_id`),
  KEY `cat_id` (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `famille`
--

INSERT INTO `famille` (`fam_id`, `fam_nom`, `fam_ordre`, `cat_id`) VALUES
(1, 'Diagnostic medical', 1, 1),
(2, 'Instrument Examen', 4, 1),
(3, 'Mobiliers et fournitures', 3, 2),
(4, 'Ortheses', 5, 2),
(5, 'Orthopedie', 3, 4),
(6, 'protections vetements', 2, 3);

-- --------------------------------------------------------

--
-- Structure de la table `marque`
--

CREATE TABLE IF NOT EXISTS `marque` (
  `marq_id` int(11) NOT NULL AUTO_INCREMENT,
  `marq_nom` varchar(255) NOT NULL,
  `marq_image` varchar(100) NOT NULL,
  PRIMARY KEY (`marq_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Contenu de la table `marque`
--

INSERT INTO `marque` (`marq_id`, `marq_nom`, `marq_image`) VALUES
(11, 'Simed', 'Simed.jpg'),
(12, 'sofap', 'sofap.png'),
(13, 'Siphat', 'Siphat.png');

-- --------------------------------------------------------

--
-- Structure de la table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `men_id` int(11) NOT NULL AUTO_INCREMENT,
  `men_titre` varchar(150) NOT NULL,
  `men_cont` text NOT NULL,
  `men_parent` int(11) NOT NULL,
  `men_type` varchar(50) NOT NULL,
  PRIMARY KEY (`men_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE IF NOT EXISTS `produit` (
  `prod_id` int(11) NOT NULL AUTO_INCREMENT,
  `prod_nom` varchar(255) NOT NULL,
  `prod_image` varchar(255) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `fam_id` int(11) NOT NULL,
  `marq_id` int(11) NOT NULL,
  `prod_spec` text NOT NULL,
  `prod_desc` text NOT NULL,
  `prod_ordre` int(11) NOT NULL,
  `prod_etat` varchar(100) NOT NULL,
  PRIMARY KEY (`prod_id`),
  KEY `cat_id` (`cat_id`),
  KEY `fam_id` (`fam_id`),
  KEY `marq_id` (`marq_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Contenu de la table `produit`
--

INSERT INTO `produit` (`prod_id`, `prod_nom`, `prod_image`, `cat_id`, `fam_id`, `marq_id`, `prod_spec`, `prod_desc`, `prod_ordre`, `prod_etat`) VALUES
(13, 'Autopiqueur', 'Autopiqueur.jpg', 1, 1, 11, '<p>La vente de ce mat&eacute;riel m&eacute;dical est r&eacute;serv&eacute;e aux &eacute;tablissements de sant&eacute;, m&eacute;decins et cabinets m&eacute;dicaux.</p>', '<p><strong>L''autopiqueur de Beurer</strong><span>&nbsp;est destin&eacute; au pr&eacute;l&egrave;vement de sang</span><strong>&nbsp;pour le calcul du taux de glyc&eacute;mie et de cholest&eacute;rol dans le sang.</strong><br /><br /><span>La profondeur de la piq&ucirc;re est r&eacute;glable et l''autopiqueur est fourni avec un capuchon AST.</span><br /><br /><span>L''autopiqueur dispose d''un &eacute;jecteur de lancettes (lancettes &agrave; usages uniques non fournies).&nbsp;</span></p>\n<p>&nbsp;</p>', 1, 'nouveaute'),
(15, 'Set', 'Set.jpg', 1, 1, 12, '<p><span class="gras">Composition de chaque</span><span>&nbsp;</span><strong>set de cryoth&eacute;rapie</strong><span>:</span><br /><span>- 1 flacon de 170 ml de gaz </span><br />', '<p><span>Le&nbsp;</span><strong>set portatif Cryo Professional</strong><span>&nbsp;est un set de cryoth&eacute;rapie con&ccedil;u pour faire dispara&icirc;tre les verrues et autres l&eacute;sions cutan&eacute;es b&eacute;nignes.</span><br /><br /><span>La temp&eacute;rature d&rsquo;action (-55&deg; C) est atteinte en 15 secondes.</span><br /><span>Les applicateurs &agrave; usage unique s&rsquo;adaptent &agrave; chaque l&eacute;sion.</span></p>', 1, 'promotion'),
(16, 'Spirometre', 'Spirometre.jpg', 1, 2, 11, '<p><span>- Dimensions : 145 x 70 x 40 mm.</span><br /><span>- Poids : 165 g.</span><br /><span>- Alimentation pile 9V.</span><br />', '<p><span>Le&nbsp;</span><strong>spirom&egrave;tre de poche Micro Vitalograph</strong><span>&nbsp;est muni d''un pneumotachom&egrave;tre Fleisch permettant d''effectuer des mesures rapides et pr&eacute;cises.</span><br /><br />', 2, 'nouveaute'),
(17, 'Draps ', 'draps.jpg', 1, 1, 11, '<p><span>Dimensions :- Format : 60 cm x 35 cm.</span><br /><span>- Longueur totale : 47 m&egrave;tres (135 formats).</span><br /><span>', '<p><span>Confort et r&eacute;sistance.</span><br /><br /><strong>Draps d''examen</strong><span>&nbsp;tr&egrave;s r&eacute;sistants r&eacute;alis&eacute;s dans une ouate double &eacute;paisseur assembl&eacute;e par&nbsp;</span><span class="gras">proc&eacute;d&eacute; de gaufrage collage</span><span>.</span><br /><br /><span>Ces draps assurent un confort d''utilisation id&eacute;al gr&acirc;ce au gaufrage point &agrave; point.&nbsp;</span><br /><br /><span>Utilisation : cabinets m&eacute;dicaux, milieu hospitalier, gyn&eacute;cologie, p&eacute;diatrie.&nbsp;</span><br /><br /><span class="gras">Conditionnement : Lot de 9 rouleaux de</span><span>&nbsp;</span><strong>draps d''examen gaufr&eacute;s coll&eacute;s</strong><span>.</span></p>', 2, 'nouveaute'),
(18, 'Sacoche', 'Sacoche.jpg', 1, 2, 11, '<p><span>Dimensions : 30 x 27 x 20 cm.</span><br /><span>Poids : 745 g.</span></br><span>Poids : 745 g.</span></p>', '<p><span>Sacoche con&ccedil;ue pour prot&eacute;ger et transporter le moniteur de signes vitaux EDAN M3A en toute s&eacute;curit&eacute;.</span><br /><br /><span>L''utilisateur peut laisser l''appareil dans le sac et acc&eacute;der facilement aux fonctions SpO2, PNI, temp&eacute;rature, imprimante et recharge.</span><br /><br /><span>Le sac est &eacute;quip&eacute; d''une poign&eacute;e &agrave; main et bandouli&egrave;re ainsi que de trois fermetures &agrave; glissi&egrave;re (deux sur les c&ocirc;t&eacute;s et une sur la face avant).</span><br /><br /><span>Dimensions : 30 x 27 x 20 cm.</span></p>', 3, 'promotion'),
(21, 'Lecteur de glycemie sanguine', 'Lecteur de glycemie sanguine.jpg', 1, 1, 12, '<p>Lecteur de glycemie sanguine</p>', '<p>Lecteur de glycemie sanguine</p>', 3, 'nouveaute'),
(22, 'Lecteur', 'Lecteur.jpg', 1, 1, 12, '<p>Lecteur&nbsp;</p>', '<p>Lecteur&nbsp;</p>', 4, 'nouveaute'),
(23, 'prod5', 'Monofilament.jpg', 1, 1, 13, 'prod5</br>prod5</br>prod5', 'prod5</br>prod5</br>prod5', 1, 'nouveaute');

-- --------------------------------------------------------

--
-- Structure de la table `q_s_n`
--

CREATE TABLE IF NOT EXISTS `q_s_n` (
  `presentation` text NOT NULL,
  `historique` text NOT NULL,
  `savoir_faire` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `q_s_n`
--

INSERT INTO `q_s_n` (`presentation`, `historique`, `savoir_faire`) VALUES
('<p>A_M&eacute;dicale est votre meilleur alli&eacute; en produits orthop&eacute;diques et parapharmaceutiques, articles de s&eacute;rie ou sur mesures, corsets, semelles, proth&egrave;ses , chaussures m&eacute;dicales, semelles orthop&eacute;diques, fauteuils roulants, appareils d&rsquo;orthop&eacute;die et tous ce qui a trait &agrave; l&rsquo;orthop&eacute;die.</p>\r\n<p>La soci&eacute;t&eacute; Sant&eacute; Plus a pour but d&rsquo;am&eacute;liorer le confort des traumatis&eacute;s et handicap&eacute;s moteurs de naissance ou victimes d&rsquo;accidents.</p>', '<p>Situ&eacute;e &agrave; Avenu 14 Janvier Immeuble Rami 4 &eacute;me &eacute;tage Bureau 3, A_M&eacute;dicale, vous ouvre les portes de ses espaces d&eacute;di&eacute;s &agrave; la d&eacute;couverte de produits orthop&eacute;diques et parapharmaceutiques.</p>\r\n<p>En effet, A_M&eacute;dicale, ayant pour slogan "...Plus pour la vie " met &agrave; votre disposition son savoir-faire et sa grande exp&eacute;rience dans le domaine pour vous garantir des produits et des services orthop&eacute;diques et parapharmaceutiques de haut niveau.</p>', '<p><span>Cumulant plusieurs ann&eacute;es d&rsquo;exp&eacute;rience dans ce domaine, Sant&eacute; Plus a r&eacute;ussi &agrave; se construire, par une pr&eacute;sence remarqu&eacute;e sur le terrain, une r&eacute;putation sans &eacute;gale en vous proposant des produits de haute qualit&eacute;, de grande marque, aux prix bien &eacute;tudi&eacute;s, des conseils personnalis&eacute;s et des services sur-mesure, avec livraison &eacute;ventuelle &agrave; domicile.</span></p>');

-- --------------------------------------------------------

--
-- Structure de la table `temoignages`
--

CREATE TABLE IF NOT EXISTS `temoignages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `parole` text NOT NULL,
  `date_temoin` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `temoignages`
--

INSERT INTO `temoignages` (`id`, `nom`, `image`, `parole`, `date_temoin`) VALUES
(1, 'Ptrica Coln', 'http://localhost/Agence_M&eacutedicale/images/blog/blog-two.jpg', '<p><span>&ldquo;Bonjour, ce t&eacute;moignage pour vous remercier de la qualit&eacute; de votre service m&eacute;dicale. J&rsquo;utilise votre hotline ainsi que votre assistante,il m&rsquo;a sembl&eacute; important d&rsquo;&eacute;crire ma satisfaction quant &agrave; votre m&eacute;thode&rdquo;.</span></p>', 'DEC 5, 2015'),
(2, 'Carolina', 'http://localhost/Agence_M&eacutedicale/images/blog/blog-three.jpg', '<p>&ldquo;Bonjour, ce t&eacute;moignage pour vous remercier de la qualit&eacute; de votre service m&eacute;dicale. J&rsquo;utilise votre hotline ainsi que votre assistante,il m&rsquo;a sembl&eacute; important d&rsquo;&eacute;crire ma satisfaction quant &agrave; votre service&rdquo;.</p>', 'DEC 5, 2014');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `famille`
--
ALTER TABLE `famille`
  ADD CONSTRAINT `famille_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `categorie` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `produit_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `categorie` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `produit_ibfk_3` FOREIGN KEY (`marq_id`) REFERENCES `marque` (`marq_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `produit_ibfk_5` FOREIGN KEY (`fam_id`) REFERENCES `famille` (`fam_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
