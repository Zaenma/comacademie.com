-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 23 juil. 2023 à 13:15
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `comacademie.com`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categorie_nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categorie_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categorie_status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `categorie_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `categorie_nom`, `categorie_description`, `categorie_status`, `created_at`, `updated_at`, `categorie_slug`) VALUES
(42, 'Sciences', '<ol>\r\n<li>Ensemble coh&eacute;rent de connaissances relatives &agrave; certaines cat&eacute;gories de faits, d\'objets ou de ph&eacute;nom&egrave;nes ob&eacute;issant &agrave; des lois et/ou v&eacute;rifi&eacute;s par les m&eacute;thodes exp&eacute;rimentales.</li>\r\n<li>Chacune des branches de la connaissance, du savoir (souvent pluriel) : <span class=\"ExempleDefinition\">Les sciences math&eacute;matiques.</span></li>\r\n<li>&nbsp;<span class=\"indicateurDefinition\">Litt&eacute;raire. </span>Connaissance approfondie d\'un domaine quelconque, acquise par la r&eacute;flexion ou l\'exp&eacute;rience&nbsp;: <span class=\"ExempleDefinition\">La science du c&oelig;ur humain.</span></li>\r\n<li>Mani&egrave;re habile de mettre en &oelig;uvre des connaissances acquises dans une technique :&nbsp;<span class=\"ExempleDefinition\">La science des couleurs.</span></li>\r\n<li class=\"DivisionDefinition\">&nbsp;Disciplines ayant pour objet l\'&eacute;tude des faits, des relations v&eacute;rifiables.</li>\r\n<li class=\"DivisionDefinition\">Disciplines scolaires et universitaires comprenant la physique, la chimie, les math&eacute;matiques, la biologie, les sciences de la Terre, par opposition aux <span class=\"Renvois\"><a class=\"lienarticle\" href=\"https://www.larousse.fr/dictionnaires/francais/lettre/46798\">lettres</a></span> et aux sciences humaines.</li>\r\n</ol>', 'active', '2023-07-22 04:12:47', '2023-07-22 04:12:47', '$2y$10$nptPvQCA.cRr.7g8jvYS4OlCjqwpqFeMfH41BkrGK8/Plr28eG4fy'),
(43, 'Informatique et Technologie', '<p>Les <strong>technologies de l\'information et de la communication</strong> ou <strong>techniques de l\'information et de la communication</strong><sup id=\"cite_ref-1\" class=\"reference\"><a href=\"https://fr.wikipedia.org/wiki/Technologies_de_l%27information_et_de_la_communication#cite_note-1\">1</a></sup> (<strong>TIC</strong>, transcription de l\'anglais <em><span class=\"lang-en\" lang=\"en\">information and communication technologies</span></em>, <em>ICT</em>) sont, principalement dans le <a title=\"Universit&eacute;\" href=\"https://fr.wikipedia.org/wiki/Universit%C3%A9\">monde universitaire</a>, le domaine de la <em><a title=\"T&eacute;l&eacute;matique\" href=\"https://fr.wikipedia.org/wiki/T%C3%A9l%C3%A9matique\">t&eacute;l&eacute;matique</a></em>, c\'est-&agrave;-dire les <a title=\"Technique\" href=\"https://fr.wikipedia.org/wiki/Technique\">techniques</a> de l\'<a title=\"Informatique\" href=\"https://fr.wikipedia.org/wiki/Informatique\">informatique</a>, de l\'<a title=\"Audiovisuel\" href=\"https://fr.wikipedia.org/wiki/Audiovisuel\">audiovisuel</a>, des <a class=\"mw-redirect\" title=\"Multim&eacute;dias\" href=\"https://fr.wikipedia.org/wiki/Multim%C3%A9dias\">multim&eacute;dias</a>, d\'<a title=\"Internet\" href=\"https://fr.wikipedia.org/wiki/Internet\">Internet</a> et des <a title=\"T&eacute;l&eacute;communications\" href=\"https://fr.wikipedia.org/wiki/T%C3%A9l%C3%A9communications\">t&eacute;l&eacute;communications</a> qui permettent aux utilisateurs de communiquer, d\'acc&eacute;der aux <a title=\"Source (information)\" href=\"https://fr.wikipedia.org/wiki/Source_(information)\">sources d\'information</a>, de <a title=\"Stockage d\'information\" href=\"https://fr.wikipedia.org/wiki/Stockage_d%27information\">stocker</a>, de manipuler, de produire et de transmettre l\'information sous diff&eacute;rentes formes&nbsp;: <a title=\"Texte\" href=\"https://fr.wikipedia.org/wiki/Texte\">texte</a>, <a title=\"Musique\" href=\"https://fr.wikipedia.org/wiki/Musique\">musique</a>, <a title=\"Son (physique)\" href=\"https://fr.wikipedia.org/wiki/Son_(physique)\">son</a>, <a title=\"Image\" href=\"https://fr.wikipedia.org/wiki/Image\">image</a>, <a title=\"Vid&eacute;o\" href=\"https://fr.wikipedia.org/wiki/Vid%C3%A9o\">vid&eacute;o</a> et <a title=\"Interface graphique\" href=\"https://fr.wikipedia.org/wiki/Interface_graphique\">interface graphique</a> interactive (<a title=\"Interactions homme-machine\" href=\"https://fr.wikipedia.org/wiki/Interactions_homme-machine\">IHM</a>). Les textes <a title=\"Droit\" href=\"https://fr.wikipedia.org/wiki/Droit\">juridiques</a> et r&eacute;glementaires utilisent la locution &laquo;&nbsp;<a class=\"mw-redirect\" title=\"Communications &eacute;lectroniques\" href=\"https://fr.wikipedia.org/wiki/Communications_%C3%A9lectroniques\">communications &eacute;lectroniques</a> &raquo;</p>', 'active', '2023-07-22 05:06:45', '2023-07-22 05:06:45', '$2y$10$IXWjitNmI5fgEOgEktT8b.N2MT5upJrjOcgO7kmySsRKxAkakcfBW'),
(44, 'Littérature', '<ol class=\"Definitions\">\r\n<li class=\"DivisionDefinition\">&nbsp;Ensemble des &oelig;uvres &eacute;crites auxquelles on reconna&icirc;t une finalit&eacute; esth&eacute;tique.</li>\r\n<li class=\"DivisionDefinition\">&nbsp;Ces &oelig;uvres, consid&eacute;r&eacute;es du point de vue du pays, de l\'&eacute;poque, du milieu o&ugrave; elles s\'inscrivent, du genre auquel elles appartiennent&nbsp;: <span class=\"ExempleDefinition\">La litt&eacute;rature fran&ccedil;aise du XVII<sup>e</sup>&nbsp;s.</span></li>\r\n<li class=\"DivisionDefinition\">Ensemble des connaissances et des &eacute;tudes qui se rapportent &agrave; ces &oelig;uvres et &agrave; leurs auteurs : <span class=\"ExempleDefinition\">Cours de litt&eacute;rature.</span></li>\r\n<li class=\"DivisionDefinition\">Activit&eacute;, m&eacute;tier de l\'&eacute;crivain, de l\'homme de lettres.</li>\r\n<li class=\"DivisionDefinition\">Ensemble des ouvrages, des articles de journaux, etc., consacr&eacute;s &agrave; quelqu\'un, &agrave; un sujet : <span class=\"ExempleDefinition\">Cette affaire a suscit&eacute; une abondante litt&eacute;rature.</span></li>\r\n<li class=\"DivisionDefinition\"><span class=\"indicateurDefinition\">Familier. </span>Correspondance &eacute;pistolaire abondante, verbeuse, d&eacute;lay&eacute;e&nbsp;: <span class=\"ExempleDefinition\">Qu\'est-ce qu\'il t\'envoie comme litt&eacute;rature&nbsp;!</span></li>\r\n</ol>', 'active', '2023-07-22 05:08:43', '2023-07-22 05:08:43', '$2y$10$annBcx8CFFbeLAzzGpIgK.2NIqTKr4ijyfnG.ofwlbO4.fXu1U51i'),
(45, 'Histoire', '<p><span class=\"js-about-item-abstr\">L\'histoire est &agrave; la fois l\'&eacute;tude et l\'&eacute;criture des faits et des &eacute;v&eacute;nements pass&eacute;s quelles que soient leur vari&eacute;t&eacute; et leurs complexit&eacute;s. Ce mot est souvent &eacute;crit avec la premi&egrave;re lettre en majuscule. L\'histoire est &eacute;galement une science humaine et sociale.</span></p>', 'active', '2023-07-23 06:13:15', '2023-07-23 06:13:15', '$2y$10$eZKO0MmgtPcdk5zj0XjNmO7gKeRCHHuQeT6O1N/EdLE6zWygN8czC'),
(46, 'Langues', '<p><span class=\"js-about-item-abstr\">Une langue est un syst&egrave;me &eacute;volutif de signes linguistiques, vocaux, graphiques ou gestuels, qui permet la communication entre les individus.</span></p>', 'active', '2023-07-23 06:14:01', '2023-07-23 06:14:01', '$2y$10$Y/TRqYOb3gIdu5M2ly3U.eZ18pE00dcLN5H6G7cUwKhigadA8Q0mK'),
(47, 'Arts et Musique', '<p><span class=\"js-about-item-abstr\">La musique est un art et une activit&eacute; culturelle consistant &agrave; combiner sons et silences au cours du temps. Les param&egrave;tres principaux sont le rythme, la hauteur, les nuances et le timbre. Elle est aujourd\'hui consid&eacute;r&eacute;e comme une forme de po&eacute;sie moderne. La musique donne lieu &agrave; des cr&eacute;ations, des repr&eacute;sentations</span></p>', 'active', '2023-07-23 06:15:37', '2023-07-23 06:15:37', '$2y$10$28zE6xv8Xvnu4cd7tc7y/.nRaO4wuzeSYs8eiUjOA.VlP954oM5sK'),
(48, 'Géographie', '<p><span class=\"js-about-item-abstr\">La g&eacute;ographie est une science centr&eacute;e sur le pr&eacute;sent, ayant pour objet la description de la Terre et en particulier l\'&eacute;tude des ph&eacute;nom&egrave;nes physiques, biologiques et humains qui se produisent sur le globe terrestre, &agrave; un certain niveau d\'abstraction relative qui s\'y pr&ecirc;te, pluridisciplinarit&eacute; comprise voire transdisciplinarit&eacute; en un certain sens.</span></p>', 'active', '2023-07-23 06:16:10', '2023-07-23 06:16:10', '$2y$10$C5aluUGe1Z91WjoLfW7QAeyFuuQmgT57.cR7p1GPhnFG81HzzA04S'),
(49, 'Sciences Humaines', '<p><span class=\"js-about-item-abstr\">Les d&eacute;nominations des actuelles &laquo; sciences humaines et sociales &raquo; varient dans l\'histoire et selon les pays, sans toujours recouvrir exactement les m&ecirc;mes champs de recherche concern&eacute;s</span></p>', 'active', '2023-07-23 06:17:15', '2023-07-23 06:17:15', '$2y$10$wXwOvoYw8998XdaKTLkNM.4dJgLsTyeTtfXOuAOXFG8nPWO2IPh56'),
(50, 'Sciences de l\'Éducation', '<p><span class=\"js-about-item-abstr\">Les sciences de l\'&eacute;ducation concernent l\'&eacute;tude de diff&eacute;rents aspects de l\'&eacute;ducation, et font appel &agrave; diverses disciplines : histoire de l\'&eacute;ducation, sociologie de l\'&eacute;ducation, didactique des disciplines, psychologie des apprentissages, p&eacute;dagogie, ou encore philosophie.</span></p>', 'active', '2023-07-23 06:17:57', '2023-07-23 06:17:57', '$2y$10$CNK9m5O1pxD8MydgymYBReuwydWarDhU.FIa8tarR4xIZpwMgZ.zO'),
(51, 'Sciences Économiques et Gestion', '<p><span class=\"js-about-item-abstr\">Les sciences de gestion ou sciences du management sont une discipline des sciences sociales principalement issue de l\'&eacute;conomie, des math&eacute;matiques mais aussi du droit, de la sociologie et de la psychologie.</span></p>', 'active', '2023-07-23 06:18:34', '2023-07-23 06:18:34', '$2y$10$0twr77kd/H9.EXxDQ7sx1eKG.mLNUWJwAI6iw.5M7mU8F1s465Pmu'),
(52, 'Sciences de la Santé', '<p><span class=\"js-about-item-abstr\">La <strong>sant&eacute;</strong> est <span class=\"citation\">&laquo;&nbsp;un &eacute;tat de complet <a title=\"Bien-&ecirc;tre\" href=\"https://fr.wikipedia.org/wiki/Bien-%C3%AAtre\">bien-&ecirc;tre</a> <a title=\"Physique\" href=\"https://fr.wikipedia.org/wiki/Physique\">physique</a>, <a title=\"Psychologie\" href=\"https://fr.wikipedia.org/wiki/Psychologie\">mental</a> et <a title=\"Sociologie\" href=\"https://fr.wikipedia.org/wiki/Sociologie\">social</a>, et ne consiste pas seulement en une absence de <a title=\"Maladie\" href=\"https://fr.wikipedia.org/wiki/Maladie\">maladie</a> ou d\'<a title=\"Handicap\" href=\"https://fr.wikipedia.org/wiki/Handicap\">infirmit&eacute;</a>&nbsp;&raquo;</span></span></p>', 'active', '2023-07-23 06:19:58', '2023-07-23 06:19:58', '$2y$10$vTTTHTpPKThyRCHLHMZ/beuZC4KZ8nV5psfW2DXZvIOUb0k82Ltjy'),
(53, 'Sciences Environnementales', '<p><span class=\"js-about-item-abstr\">Les <strong>&eacute;tudes sur l\'environnement</strong>, <strong>sciences de l\'environnement</strong> ou <strong>sciences environnementales</strong> sont une rencontre de disciplines incluant la <a title=\"Politique\" href=\"https://fr.wikipedia.org/wiki/Politique\">politique</a>, la <a title=\"Sociologie\" href=\"https://fr.wikipedia.org/wiki/Sociologie\">sociologie</a>, l\'<a title=\"&Eacute;conomie (discipline)\" href=\"https://fr.wikipedia.org/wiki/%C3%89conomie_(discipline)\">&eacute;conomie</a>, l\'<a title=\"&Eacute;cologie\" href=\"https://fr.wikipedia.org/wiki/%C3%89cologie\">&eacute;cologie</a>, les <a title=\"Sciences de la Terre\" href=\"https://fr.wikipedia.org/wiki/Sciences_de_la_Terre\">sciences de la Terre</a>, la <a title=\"G&eacute;ographie\" href=\"https://fr.wikipedia.org/wiki/G%C3%A9ographie\">g&eacute;ographie</a>, la <a title=\"G&eacute;ologie\" href=\"https://fr.wikipedia.org/wiki/G%C3%A9ologie\">g&eacute;ologie</a>, la <a title=\"Climatologie\" href=\"https://fr.wikipedia.org/wiki/Climatologie\">climatologie</a>, la <a title=\"M&eacute;decine\" href=\"https://fr.wikipedia.org/wiki/M%C3%A9decine\">m&eacute;decine</a>, etc. autour de probl&eacute;matiques environnementales communes.</span></p>', 'active', '2023-07-23 06:21:19', '2023-07-23 06:21:19', '$2y$10$khK169zBfTmLrAnlZiMjrOhEp0F.oXI8toLXW6vmGhl1RTiQk9ABq');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categorie_slug` (`categorie_slug`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
