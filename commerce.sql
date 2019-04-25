-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 25 avr. 2019 à 19:58
-- Version du serveur :  10.1.37-MariaDB
-- Version de PHP :  7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `commerce`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `idCategorie` int(4) NOT NULL,
  `nomCategorie` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`idCategorie`, `nomCategorie`) VALUES
(1, 'ciments'),
(2, 'briques'),
(3, 'truelles'),
(4, 'brouettes'),
(5, 'pelles');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `idCommande` int(4) NOT NULL,
  `numeroCommande` int(255) NOT NULL,
  `dateCommande` date NOT NULL,
  `fraisCommande` int(255) NOT NULL,
  `montantCommande` int(255) NOT NULL,
  `montantTotal` int(255) NOT NULL,
  `idUser` int(4) NOT NULL,
  `idLivraison` int(4) NOT NULL,
  `paiement` varchar(255) COLLATE utf8_bin NOT NULL,
  `produit` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`idCommande`, `numeroCommande`, `dateCommande`, `fraisCommande`, `montantCommande`, `montantTotal`, `idUser`, `idLivraison`, `paiement`, `produit`) VALUES
(6, 2001602056, '2019-04-22', 100000, 515000, 615000, 6, 3, 'A La Livraison', '<figure class=\"table\"><table><tbody><tr><th>nom Produit</th><th>Quantite</th></tr><tr><th>QT 14-15 Block Making Machine</th><th>1</th></tr><tr><th>Truelle Portugaise</th><th>1</th></tr></tbody></table></figure>'),
(7, 1742800288, '2019-04-22', 10000, 69700, 79700, 6, 7, 'A La Livraison', '<figure class=\"table\"><table><tbody><tr><th>nom Produit</th><th>Quantite</th></tr><tr><th>BRIQUE 15 CREUX</th><th>100</th></tr><tr><th>Pelle ronde</th><th>3</th></tr></tbody></table></figure>'),
(8, 213893017, '2019-04-25', 50000, 180600, 230600, 5, 6, 'A La Livraison', '<figure class=\"table\"><table><tbody><tr><th>nom Produit</th><th>Quantite</th></tr><tr><th>cuirasse 32.5R</th><th>2</th></tr><tr><th>Pelle a neige</th><th>2</th></tr></tbody></table></figure>');

-- --------------------------------------------------------

--
-- Structure de la table `frais`
--

CREATE TABLE `frais` (
  `idFrais` int(4) NOT NULL,
  `minMont` int(255) NOT NULL,
  `maxMont` int(255) NOT NULL,
  `frais` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `frais`
--

INSERT INTO `frais` (`idFrais`, `minMont`, `maxMont`, `frais`) VALUES
(1, 1000, 10000, 1000),
(2, 10001, 50000, 5000),
(3, 50001, 100000, 10000),
(4, 100001, 500000, 50000),
(5, 500001, 1000000, 100000),
(6, 1000001, 999999999, 500000);

-- --------------------------------------------------------

--
-- Structure de la table `livraison`
--

CREATE TABLE `livraison` (
  `idLivraison` int(4) NOT NULL,
  `joursLivraison` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `livraison`
--

INSERT INTO `livraison` (`idLivraison`, `joursLivraison`) VALUES
(1, 'lundi'),
(2, 'mardi'),
(3, 'mercredi'),
(4, 'jeudi'),
(5, 'vendredi'),
(6, 'samedi'),
(7, 'lundi prochain'),
(8, 'mardi prochain'),
(9, 'mercredi prochain');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `idProduit` int(4) NOT NULL,
  `nomProduit` varchar(255) COLLATE utf8_bin NOT NULL,
  `detailProduit` mediumtext COLLATE utf8_bin NOT NULL,
  `prixProduit` int(11) NOT NULL,
  `imageProduit` varchar(255) COLLATE utf8_bin NOT NULL,
  `stockProduit` varchar(255) COLLATE utf8_bin NOT NULL,
  `idCategorie` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`idProduit`, `nomProduit`, `detailProduit`, `prixProduit`, `imageProduit`, `stockProduit`, `idCategorie`) VALUES
(2, 'bÃ©lier Classic 32.5', '<p><a href=\"https://afrimarket.fr/ci/ciment-belier-classic-portland-au-calcaire-32-5-la-tonne-abidjan.html#product.info.description\">Description</a></p><p>Le&nbsp;Ciment&nbsp;BÃ©lier&nbsp;Classic&nbsp;Portland au&nbsp;Calcaire&nbsp;32.5 la tonne est&nbsp;idÃ©al&nbsp;pour les travaux courants tels que la fabrication des briques, des enduits et des dallages. C\'est un mÃ©lange de&nbsp;Clinker&nbsp;Portland et de calcaire avec du sulfate de calcium. Facile Ã  manier, il vous garantit des constructions solides.&nbsp;</p>', 89000, 'assets/upload/BÃ©lier Classic 32.51555724726.jpg', 'disponible', 1),
(3, 'cuirasse 32.5R', '<p>Le ciment cuirasse 32.5 la tonne est un matÃ©riel de construction convenant Ã  la fabrication de bÃ©ton armÃ©. Il est trÃ¨s rÃ©pandu dans l\'industrie de la construction du fait de sa rÃ©sistance et de sa qualitÃ©.&nbsp;Il est utilisÃ© dans pratiquement toutes les formes dâ€™ouvrages Ã  savoir un&nbsp;hÃ´pital, une Ã©cole ou une rÃ©sidence. Avec le ciment&nbsp;cuirasse&nbsp;32.5 T, soyez sure d\'avoir une construction&nbsp;impÃ©cable.</p>', 87000, 'assets/upload/cuirasse 32.5R1555728022.jpg', 'disponible', 1),
(4, 'belier extra cpj 42.5R', '<p>Le&nbsp;Ciment BÃ©lier extra-portland&nbsp;au calcaire est idÃ©al pour la construction des&nbsp;bÃ¢timents, la prÃ©fabrication des produits en bÃ©ton et des dalles. Il est obtenu Ã  partir d\'un mÃ©lange de&nbsp;Clinker&nbsp;Portland et de calcaire avec du sulfate de calcium. Il garantit une manipulation facile du bÃ©ton et une rÃ©duction en utilisation d\'eau. Avec le&nbsp;Ciment BÃ©lier portland&nbsp;au calcaire, obtenez les meilleures constructions en&nbsp;bÃ¢timents.</p>', 88000, 'assets/upload/belier extra cpj 42.5R1555889444.jpg', 'disponible', 1),
(5, 'Ciment GuÃ©pard 42.5', '<p><strong>Utilisation</strong> :</p><p>poids: 1 tonne</p><p>- MaÃ§onnerie</p><ul><li>Enduire</li><li>Carreler</li><li>Monter des Murs</li></ul><p>- Sols</p><ul><li>Les fondations (bÃ©ton de propretÃ©, bÃ©ton de semelle)</li><li>les dalles</li></ul><p>- Structure</p><ul><li>Ouvrages en beton arme</li></ul><p><strong>Conseils de stockage</strong>: Lâ€™humiditÃ© dans le ciment peut provoquer une agglomÃ©ration et une perte de rÃ©sistance. Veuillez conserver dans des conditions appropriÃ©es.</p><p><strong>Conseils dâ€™Utilisation</strong>: La boue dans le sable peut provoquer la baisse de la rÃ©sistance du bÃ©ton, ce qui affecte la tolÃ©rance entre le ciment et le plastifiant.</p>', 92000, 'assets/upload/Ciment GuÃ©pard 42.51555907887.jpg', 'disponible', 1),
(6, 'Ciment Blanc sac de 25 Kg', '<p><strong>Poids :</strong> 25 kg &nbsp;</p><p>Le ciment blanc possÃ¨de les mÃªmes propriÃ©tÃ©s que le ciment gris. il est utilisÃ© dans la construction Ã  des fins dÃ©coratives pour des finitions esthÃ©tiques.<br>&nbsp;</p><h2><strong>Utilisation :</strong></h2><p>- Eviter le sous-dosage en ciment, qui altÃ¨re la durabilitÃ© des bÃ©tons&nbsp;<br>- respecter le rapport eau/ciment, pour Ã©viter la diminution des rÃ©sistances et l\'augmentation de la porositÃ©&nbsp;<br>- vÃ©rifier la compatibilitÃ© entre le ciment et les adjuvants utilisÃ©s (rhÃ©ologie, rÃ©sistances)&nbsp;<br>- ajuster la vibration du bÃ©ton Ã  sa consistance pour obtenir une compacitÃ© maximale, sans sÃ©grÃ©gation&nbsp;<br>- prendre toutes les dispositions pour Ã©viter une dessiccation prÃ©coce, par temps chaud ou par vent dessÃ©chant, en procÃ©dant Ã  une cure adaptÃ©e (paillasson, eau pulvÃ©risÃ©e, produit de cure)</p>', 7500, 'assets/upload/Ciment Blanc sac de 25 Kg1555908108.jpg', 'disponible', 1),
(7, 'BRIQUE A08', '<p>Câ€™est une brique isolante dure et lÃ©gÃ¨re avec 8 alvÃ©oles. Elle a une forme caractÃ©ristique de parallÃ©lÃ©pipÃ¨de rectangle. Elle est produite par filage (passage de l\'argile dans la filiÃ¨re). La pose du B8 est relativement facile.</p><p>Les briques de huit trous permettent de monter des murs intÃ©rieurs et extÃ©rieurs, simple ou double cloisons, non porteurs. Ces mures peuvent Ãªtre enduites sur les deux faces.</p><p>La construction en B8 est homogÃ¨ne et compacte. Elle est durable et respectueuse de l\'environnement. Elle ne moisit pas et garde toutes ses qualitÃ©s.</p>', 10000, 'assets/upload/BRIQUE A081555909151.jpg', 'disponible', 2),
(8, 'BRIQUE A12', '<p>Câ€™est une brique dure et lÃ©gÃ¨re, fabriquÃ©e avec des matÃ©riaux naturels (argile et sable) par filage (passage de l\'argile dans la filiÃ¨re).Elle comporte 12 alvÃ©oles. Ces perforations renferment de lâ€™air qui forme une barriÃ¨re de protection contre les dÃ©perditions thermiques. Ainsi, pendant lâ€™hiver elles accumulent la chaleur de la journÃ©e et la restituent la nuit, En Ã©tÃ©, elles prÃ©servent la fraÃ®cheur Ã  lâ€™intÃ©rieur du bÃ¢timent. La brique de B12 a la forme caractÃ©ristique de parallÃ©lÃ©pipÃ¨de rectangle. Elle est durable et respectueuse de l\'environnement.</p><p>Elle ne moisit pas et garde toutes ses qualitÃ©s. Sa pose, et sa manipulation sont relativement faciles. La brique de douze trous permet de monter des murs extÃ©rieurs et intÃ©rieurs, simples ou doubles cloisons, non porteurs et de toutes les formes sollicitÃ©es. Elles peuvent Ãªtre enduites sur les deux faces.</p>', 50000, 'assets/upload/BRIQUE A121555909254.jpg', 'disponible', 2),
(9, 'BRIQUE ROUGE', '<p>Ce type de brique permet de se passer d\'isolation supplÃ©mentaire si le mur est suffisamment Ã©pais.</p><p>De plus, elle ne nÃ©cessite qu\'une colle pour le montage.</p><p>Ses autres avantages&nbsp;:</p><ul><li>stabilitÃ© dimensionnelle,</li><li>durabilitÃ©,</li><li>rÃ©sistance au feu,</li><li>matÃ©riau naturel et recyclable,</li><li>pas d\'Ã©mission nocive Ã  la mise en Å“uvre et dans le temps,</li><li>inerte&nbsp;: restitue la nuit la chaleur accumulÃ©e le jour,</li><li>poreuse&nbsp;: laisse respirer le mur.</li></ul>', 5000, 'assets/upload/BRIQUE ROUGE1555919605.jpg', 'disponible', 2),
(10, 'BRIQUE PLEINE 15', '<p>Brique 15 pleines sert a faire la fondation de vos batiments</p>', 550, 'assets/upload/BRIQUE PLEINE 151555922940.jpg', 'disponible', 2),
(11, 'BRIQUE 15 CREUX', '<p><strong>Materiel utilse: </strong>Sable ou&nbsp;Gravillon 0/5 ou&nbsp;Gravillon 2/4</p>', 400, 'assets/upload/BRIQUE 15 CREUX1555924998.jpg', 'disponible', 2),
(12, 'QT 14-15 Block Making Machine', '<h2><strong>DonnÃ©es techniques de la machine de fabrication de blocs creux QT4-15:</strong></h2><figure class=\"table\"><table><thead><tr><th>MatiÃ¨re premiÃ¨re</th><th>Sable, ciment, cendres volantes, bÃ©ton, laitier de chaudiÃ¨re, farine de montagne, dÃ©chets industriels.</th></tr></thead><tbody><tr><td>Usage</td><td>Pour produire des blocs creux, des briques pleines, des blocs poreux, des briques de pavage, des briques emboÃ®tables et des pavÃ©s par Ã©change de moule</td></tr><tr><td>Taille de la palette</td><td>1020 Ã— 570 Ã— 30 mm (palette en bois)&nbsp;<br>1020 Ã— 570 Ã— 20 mm (palette en PVC)<br>&nbsp;</td></tr><tr><td>Pression hydraulique</td><td>15MPA</td></tr><tr><td>Force passionnante</td><td>380KN<br>&nbsp;</td></tr><tr><td>Cycle de formation</td><td>15 secondes</td></tr><tr><td>Type de vibration</td><td>Vibration de table</td></tr><tr><td>Puissance</td><td>21.8kw</td></tr><tr><td>FrÃ©quence de vibration</td><td>4600 / min</td></tr><tr><td>Travailleurs</td><td>6 ~ 10 personnes</td></tr><tr><td>Aire d\'atterrissage</td><td>1000mÂ²</td></tr><tr><td>Poids</td><td>4613KG</td></tr><tr><td>Taille de bloc</td><td>6800 Ã— 1650 Ã— 2450mm</td></tr></tbody></table></figure>', 500000, 'assets/upload/QT 14-15 Block Making Machine1555925429.jpg', 'disponible', 2),
(13, 'Truelle briquer', '<ul><li>Acier trempÃ©.</li><li>Manche bois verni.</li><li>Epaisseur : 2 mm.</li><li>Largeur : 22cm</li></ul>', 5000, 'assets/upload/Truelle briquer1555926901.jpg', 'disponible', 3),
(14, 'Truelle  paris briqueteuse', '<p>Manche bois. Lame Ã©paisse acier (1,9 mm) trÃ¨s rigide, pour casser les briques. Patte forgÃ©e. Soie traversante et rivetÃ©e, virole laitonnÃ©e. Longueur : 200 mm</p>', 11000, 'assets/upload/Truelle  paris briqueteuse1555937132.jpg', 'disponible', 3),
(15, 'Truelle liseuse ronde', '<p>Truelle lisseuse macon ronde, manche bois - lame 20cm</p>', 6500, 'assets/upload/Truelle liseuse ronde1555933146.jpg', 'disponible', 3),
(16, 'Truelle triangulaire', '<p><strong>Truelle triangulaire Outibat - Dimensions 16 cm</strong><br>Lame demi-souple acier trempÃ© 10/10Ã¨me. Patte forgÃ©e Ã˜&nbsp;8 mm, manche bois, virole laitonnÃ©e.</p><ul><li><strong>Marque</strong> : Outibat</li><li><strong>RÃ©fÃ©rence fournisseur</strong> : 3665B-C0B071</li><li><strong>Type de produit</strong> : Truelle</li><li><strong>MatiÃ¨re</strong> : Lame : acier Manche : bois</li><li><strong>Finition</strong> : Lame : trempÃ©e Virole : laitonnÃ©e Patte : forgÃ©e</li><li><strong>Type de truelle</strong> : Truelle triangulaire</li><li><strong>Utilisation</strong> : Lisser</li><li><strong>Corps de mÃ©tier</strong> : MaÃ§on</li><li><strong>Dimensions</strong> : 16 cm</li></ul>', 2620, 'assets/upload/Truelle triangulaire1555933371.jpg', 'disponible', 3),
(17, 'Truelle platoir', '<p>PLATOIR inox manche Ergonomique Bi-Mat 130x280mm &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;- Lame Acier inoxydable, Manche Ergonomique bi-matiÃ¨re. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; QualitÃ© supÃ©rieure pour tous travaux de MaÃ§onnerie et plÃ¢trage.<br>&nbsp;</p>', 12500, 'assets/upload/Truelle platoir1555933326.jpg', 'disponible', 3),
(18, 'Truelle Portugaise', '<p>Truelle 180 mm avec une lame en acier carbone de qualitÃ©, trempÃ© pour la force et la durabilitÃ©. Dispose d\'une poignÃ©e en bois durable. Diamwood Expert en Ã©quipement.</p><ul><li>RÃ©fÃ©rence : OX-OXT017718</li><li>Truelle : Truelle Portugaise - manche bois 180 mm - OXT017718 - OX Trade</li></ul>', 15000, 'assets/upload/Truelle Portugaise1555937088.jpg', 'disponible', 3),
(19, 'Truelle d\'angle inox', '<p>TRUELLE D\'ANGLE INOX EXTER.80X60 Outifrance - TRUELLE D\'ANGLE INOX EXTER.80X60 - 10.211.080<br>&nbsp;</p>', 6000, 'assets/upload/Truelle d\'angle inox1555937047.jpg', 'disponible', 3),
(20, 'Truelle de jardin', '<p>Cette truelle tranchante robuste est dotÃ©e d\'une tÃªte spÃ©cialement conÃ§ue pour pÃ©nÃ©trer facilement tous les types de sols, ce qui facilite grandement la plantation de graines et le dÃ©sherbage. La lame rÃ©sistante Ã  la rouille est Ã©paisse pour la force et la longÃ©vitÃ©, large et concave pour creuser, correctement conÃ§ue pour des applications professionnelles.&nbsp;</p>', 4600, 'assets/upload/Truelle de jardin1555930657.jpg', 'disponible', 3),
(21, 'Pelle ronde', '<p>Outil trempÃ© Manche bois 1,10 m Poids : 1,05 kg DÃ©signation : Pelle ronde 27 cm</p>', 9900, 'assets/upload/Pelle ronde1555944531.jpg', 'disponible', 5),
(22, 'Pelle a neige', '<p>Pelle Ã  neige Plastkon - Permettant de dÃ©gager des voies obstruÃ©es par la neige - Tige en bois et lame en alu - MatÃ©riel : en polypropylÃ¨ne - Dimensions : 41 x 130 cm - Coloris : bleu.</p>', 3300, 'assets/upload/Pelle a neige1555942581.jpg', 'disponible', 5),
(23, 'Mini pelle arrondie', '<p>Petite pelle avec tÃªte en acier ultra-rÃ©sistant et manche en fibres de verre avec poignÃ©e en D. SpÃ©cialement conÃ§ue pour pouvoir y exercer une force maximale. IdÃ©ale pour creuser dans des endroits Ã©troits tels que trous profonds et fossÃ©s.<br>&nbsp;</p>', 7300, 'assets/upload/Mini pelle arrondie1555942685.jpg', 'disponible', 5),
(24, 'Pelle pioche pliante', '<figure class=\"table\"><table><tbody><tr><th colspan=\"2\">Informations gÃ©nÃ©rales sur le produit</th></tr><tr><th>Marque</th><th><a href=\"https://www.cdiscount.com/m-28315-cao.html\">CAO</a>&nbsp;<br>&nbsp;</th></tr><tr><th>Nom du produit</th><th>Pelle pioche pliante&nbsp;<br>&nbsp;</th></tr><tr><th>CatÃ©gorie</th><th>OUTILLAGE DE CAMPING&nbsp;<br>&nbsp;</th></tr><tr><th colspan=\"2\">GÃ©nÃ©ral</th></tr><tr><th>Type de Produit</th><th>Pelle pioche&nbsp;<br>&nbsp;</th></tr><tr><th>Niveau de pratique</th><th>RÃ©gulier&nbsp;<br>&nbsp;</th></tr><tr><th>Famille de sport</th><th>Camping&nbsp;<br>&nbsp;</th></tr><tr><th>Sports</th><th>Camping&nbsp;<br>&nbsp;</th></tr><tr><th>MatiÃ¨res</th><th>Acier&nbsp;<br>&nbsp;</th></tr><tr><th>Couleur(s)</th><th>Vert armÃ©e&nbsp;<br>&nbsp;</th></tr><tr><th colspan=\"2\">CaractÃ©ristiques</th></tr><tr><th>Description du produit</th><th>Triple nervure&nbsp;<br>Pliante&nbsp;<br>&nbsp;</th></tr><tr><th colspan=\"2\">Dimensions et poids</th></tr><tr><th>Dimensions</th><th>68 cm&nbsp;<br>&nbsp;</th></tr><tr><th>Dimensions pliÃ©</th><th>15,5 x 52 x 6 cm&nbsp;<br>&nbsp;</th></tr><tr><th>Poids</th><th>1,236 kg&nbsp;</th></tr></tbody></table></figure>', 32000, 'assets/upload/Pelle pioche pliante1555943065.jpg', 'disponible', 5),
(25, 'Pelle Traineau', '<p>TRAINEAU CHASSE NEIGE ARTIC L - EXTRA PROFOND TRES GRANDE CAPACITE 2 ROULETTES DE MANIEMENT POIGNEE MONTABLE DEMONTABLE PAR VIS PAPILLON</p>', 38000, 'assets/upload/Pelle Traineau1555943190.jpg', 'disponible', 5),
(26, 'Pelle terrasier', '<figure class=\"table\"><table><tbody><tr><th>Type de manche</th><td>Pomme</td></tr><tr><th>Certification</th><td>PEFC</td></tr><tr><th>Essence du bois</th><td>FrÃªne</td></tr><tr><th>Fabrication franÃ§aise</th><td>Oui</td></tr><tr><th>Garantie (en annÃ©e)</th><td>10</td></tr><tr><th>Largeur de tÃªte (en cm)</th><td>27</td></tr><tr><th>Longueur du manche (en cm)</th><td>110</td></tr><tr><th>MatiÃ¨re de la tÃªte</th><td>Acier</td></tr><tr><th>MatiÃ¨re du manche</th><td>Bois</td></tr><tr><th>Type de produit</th><td>Terrassier</td></tr><tr><th>Poids du produit nu (en kg)</th><td>1,8</td></tr><tr><th>Produit emballÃ© : hauteur (en cm)</th><td>138</td></tr><tr><th>Produit emballÃ© : largeur (en cm)</th><td>27</td></tr><tr><th>Produit emballÃ© : profondeur (en cm)</th><td>18</td></tr><tr><th>Produit emballÃ© : poids (en kg)</th><td>1,8</td></tr></tbody></table></figure>', 7300, 'assets/upload/Pelle terrasier1555943767.jpg', 'disponible', 5),
(27, 'Pelle Anglaise', '<p>PELLE ANGLAISE DE 26 EMYD. Poids : 2.200 Kg. largeur : 26 cm. Poids fer : 1.420 kg. MatiÃ¨re : acier au bore. Fabrication : forgÃ© Ã  chaud. Traitement thermique : trempe du fer. DuretÃ© : 170/180 kg/mmÂ². Finition : peinture hydrosoluble non polluante.</p><p>Marque: Outils Perrin</p><p>RÃ©fÃ©rence Outils Perrin: 131526</p><p>Fabrication franÃ§aise</p><p>La SociÃ©tÃ© Perrin SA implantÃ©e en Bourgogne depuis 1644 est le dernier fabriquant franÃ§ais indÃ©pendant d\'outils Ã  main pour le bÃ¢timent, le jardin et le dÃ©neigement. La quasi-totalitÃ© des produits Outils Perrin est fabriquÃ©e en France dans leur usine de Til-ChÃ¢tel, Ã  proximitÃ© de Dijon.</p>', 24300, 'assets/upload/Pelle Anglaise1555943886.jpg', 'disponible', 5),
(28, 'Brouette francaise', '<ul><li>Nombre de roue : 1</li><li>Contenance : 100 L / 120 kg</li></ul><p>Utile pour le deplacement du materiel sur le chantier.</p>', 33000, 'assets/upload/Brouette francaise1556033587.jpg', 'disponible', 4),
(29, 'Brouette renforcÃ©e', '<p>NOTE POUR LE MONTAGE: La brouette est livrÃ© dÃ©sassemblÃ©e. CaractÃ©ristiques techniques : CapacitÃ©: +/- 100L Chassis Powder Coated MatÃ©riau bac: mÃ©tal galvanisÃ© 0.7mm Dimensions montÃ©e: 154x58x69cm DiamÃ¨tre des tubes: +/- 3cm DiamÃ¨tre des pneus: +/- 37cm Hauteur du rebord de charge: 62cm CapacitÃ© de charge max: 200Kg Poids: 8Kg Coloris des poignÃ©es ou roue non contractuels<br>&nbsp;</p>', 24500, 'assets/upload/Brouette renforcÃ©e1556033769.jpg', 'disponible', 4),
(30, 'Brouette basculante', '<p>SystÃ¨me de basculement permettant de vider trÃ¨s facilement la brouette. L\'inclination Ã  165Â° la vide entiÃ¨rement en un seul geste et la cuve revient dans sa position initiale. Cuve grande capacitÃ©, fixÃ©e sur un chÃ¢ssis avec 2 roues&nbsp;gonflables &nbsp;de 400 x 80 montÃ©es sur roulement Ã  billes<br>MatiÃ¨re : Cuve : PolyÃ©thylÃ¨ne - ChÃ¢ssis galvanisÃ© - Dimensions : Hors tout : L 1.56 x l 0.93 x h 1.08 m - Cuve : L 1.56 x 0.93 x h 050 m - Couleur : Kaki</p>', 200000, 'assets/upload/Brouette basculante1556033888.jpg', 'disponible', 4),
(31, 'Brouette fourrage', '<figure class=\"table\"><table><tbody><tr><td>Longueur&nbsp;:</td><td>0,90 m</td></tr><tr><td>Largeur&nbsp;:</td><td>0,85 m</td></tr><tr><td>ModÃ¨le&nbsp;:</td><td>brouette Ã  fourrage</td></tr><tr><td>MatiÃ¨re&nbsp;:</td><td>Acier galvanisÃ©</td></tr><tr><td>Type&nbsp;:</td><td>standard</td></tr><tr><td>Poids net&nbsp;:</td><td>19 kg</td></tr><tr><td>Charge maxi&nbsp;:</td><td>200 kg</td></tr><tr><td>ChÃ¢ssis&nbsp;:</td><td>monobloc</td></tr><tr><td>Roue(s)&nbsp;:</td><td>1</td></tr></tbody></table></figure>', 90000, 'assets/upload/Brouette fourrage1556034141.jpg', 'disponible', 4),
(32, 'Brouette moteur', '<h2>&nbsp;</h2><p>1) Motorisation Ã©lectrique pour rÃ©duire les nuisances, faciliter la manutention et gagner en efficacitÃ©<br>2) Charge utile max; 300 kg</p><p><strong>Pour dÃ©placer les matÃ©riaux sur vos chantiers en franchissant tous les obstacles (terrains accidentÃ©s et encombrÃ©s).</strong></p><ul><li>CARACTERISTIQUES</li></ul><p>Type :</p><p>Dumper</p><p>Poids (kg) :</p><p>127</p><p>Largeur (m) :</p><p>0.78</p><p>Longueur (m) :</p><p>1.17</p><p>Hauteur (m) :</p><p>1.05</p><p>Energie :</p><p>Batterie</p><p>Mode de retrait :</p><p>LivrÃ© ou emportÃ©</p>', 400000, 'assets/upload/Brouette moteur1556034488.jpg', 'disponible', 4),
(33, 'Brouette fumier', '<p>Ces brouettes sont conÃ§ues Ã  partir dâ€™un chÃ¢ssis galvanisÃ© Ã  basculement intÃ©gral et dâ€™une cuve en rÃ©sine de polyÃ©thylÃ¨ne stabilisÃ© aux UV et au gel. EquipÃ©es de roues de 400 x 8 - 4 plys gonflables sur roulement Ã  rouleaux graissÃ©s avec Ã©paulement de 80 mm, jantes mÃ©talliques (hors modÃ¨le 200 L).<br>ConÃ§ues sur un chÃ¢ssis trÃ¨s Ã©quilibrÃ© afin de mieux rÃ©partir la charge et obtenir un confort d\'utilisation optimal.</p><p>ChÃ¢ssis en tÃ´lerie et tubes forte section galvanisÃ©s mÃ©canosoudÃ©s.<br>Tampons dâ€™arrÃªt de cuve en position basculement.<br>Patins anti-usure sous les sabots et protection de cuve avec barre de renfort.</p><figure class=\"table\"><table><tbody><tr><td>Longueur</td><td>2 m</td></tr><tr><td>Largeur</td><td>0,94 m</td></tr><tr><td>Hauteur</td><td>0,94 m</td></tr><tr><td>ModÃ¨le</td><td>Brouette 450 L</td></tr><tr><td>Contenance</td><td>450 l</td></tr><tr><td>Poids net</td><td>55 kg</td></tr><tr><td>Charge maxi.</td><td>400 kg</td></tr><tr><td>ChÃ¢ssis</td><td>MÃ©cano soudÃ© galva</td></tr><tr><td>Jantes</td><td>MÃ©talliques</td></tr><tr><td>UnitÃ© de vente</td><td>L\'unitÃ©</td></tr><tr><td>Emballage</td><td>Palette</td></tr><tr><td>MatiÃ¨re de la cuve</td><td>RÃ©sine</td></tr></tbody></table></figure>', 400000, 'assets/upload/Brouette fumier1556035010.jpg', 'disponible', 4),
(34, 'Brouette electrique', '<p>Brouette Ã©lectrique multi usage TROLEM, pratique et facile d\'utilisation.</p><p>Silencieuse et Ã©cologique</p><p>Structure : acier, peinture Ã©poxy</p><p>Variateur de vitesse, 0 Ã  7 km/heure</p><p>Puissance 180 watt</p><p>Contacteur marche / arrÃªt</p><p>Indicateur de charge</p><p>Autonomie :&nbsp;4-6 heures</p><p>Batterie plomb rechargeable, 17AH spÃ©ciale cycles</p><p>Dimensions : hauteur 61cms / longueur 147cms / largeur 68.5cms</p><p>Poids : 22kgs</p>', 100000, 'assets/upload/Brouette electrique1556035103.jpg', 'disponible', 4);

-- --------------------------------------------------------

--
-- Structure de la table `suggestion`
--

CREATE TABLE `suggestion` (
  `id` int(4) NOT NULL,
  `nom` varchar(255) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(255) COLLATE utf8_bin NOT NULL,
  `mail` varchar(255) COLLATE utf8_bin NOT NULL,
  `contact` int(20) NOT NULL,
  `message` mediumtext COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `suggestion`
--

INSERT INTO `suggestion` (`id`, `nom`, `prenom`, `mail`, `contact`, `message`) VALUES
(1, 'kouadio', 'zoraobabel', 'michael@gmail.com', 2147483647, 'Je Vous encourage bonne chance!!'),
(6, 'kouadio', 'dagobert', 'dagobert@gmail.com', 78789696, 'J\'aimerais que vous essayer de faire la livraison a l\'etranger.'),
(7, 'rootshadow', 'franck', 'doudou@fr.com', 47859612, 'J\'aimerais que vous vendiez aussi des materiaux comme les carreaux , peinture etc...');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(4) NOT NULL,
  `nomUser` varchar(255) COLLATE utf8_bin NOT NULL,
  `prenomUser` varchar(255) COLLATE utf8_bin NOT NULL,
  `mailUser` varchar(255) COLLATE utf8_bin NOT NULL,
  `paysUser` varchar(255) COLLATE utf8_bin NOT NULL,
  `villeUser` varchar(255) COLLATE utf8_bin NOT NULL,
  `quartierUser` varchar(255) COLLATE utf8_bin NOT NULL,
  `contactUser` int(20) NOT NULL,
  `passeUser` varchar(255) COLLATE utf8_bin NOT NULL,
  `adresseUser` varchar(255) COLLATE utf8_bin NOT NULL,
  `typeUser` int(2) NOT NULL,
  `isLock` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nomUser`, `prenomUser`, `mailUser`, `paysUser`, `villeUser`, `quartierUser`, `contactUser`, `passeUser`, `adresseUser`, `typeUser`, `isLock`) VALUES
(3, 'anasse', 'joel', 'anassejean@gmail.com', 'cote d\'ivoire', 'abidjan', '', 55297961, 'b0399d2029f64d445bd131ffaa399a42d2f8e7dc', '23 bp 346 abidjan', 1, 1),
(5, 'mickael', 'zoraobabel', 'jean@gmail.com', 'cote d\'ivoire', 'abidjan', 'petit toit rouge', 14789652, '009e058c883c683e1330228851ecafe3265c8f51', '23 bp 345 abidjan', 2, 1),
(6, 'kouadio', 'junior', 'junior@gmail.com', 'cote d\'ivoire', 'abidjan', 'toit rouge', 2556932, 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', '23 bp 214 abidjan', 2, 1),
(8, 'kouadio', 'leontine', 'kouadio@gmail.com', 'cote d\'ivoire', 'abidjan', 'cocody', 2147483647, '6e09f794ed4ba5ee7c13e5cc0d01f88b8ccbd0fc', '45 bp 459 cocody', 2, 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`idCategorie`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`idCommande`);

--
-- Index pour la table `frais`
--
ALTER TABLE `frais`
  ADD PRIMARY KEY (`idFrais`);

--
-- Index pour la table `livraison`
--
ALTER TABLE `livraison`
  ADD PRIMARY KEY (`idLivraison`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`idProduit`);

--
-- Index pour la table `suggestion`
--
ALTER TABLE `suggestion`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `idCategorie` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `idCommande` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `frais`
--
ALTER TABLE `frais`
  MODIFY `idFrais` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `livraison`
--
ALTER TABLE `livraison`
  MODIFY `idLivraison` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `idProduit` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT pour la table `suggestion`
--
ALTER TABLE `suggestion`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
