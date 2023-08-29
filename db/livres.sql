-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 23 juil. 2023 à 13:19
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
-- Structure de la table `livres`
--

CREATE TABLE `livres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `livre_titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `livre_categorie_id` bigint(20) UNSIGNED NOT NULL,
  `livre_subcategorie_id` bigint(20) UNSIGNED DEFAULT NULL,
  `livre_childsubcategorie_id` bigint(20) UNSIGNED DEFAULT NULL,
  `livre_auteur` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `livre_langue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Française',
  `livre_telecharegement` int(11) NOT NULL DEFAULT 0,
  `livre_page_garde` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `livre_pdf` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `livre_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `livres`
--

INSERT INTO `livres` (`id`, `livre_titre`, `livre_categorie_id`, `livre_subcategorie_id`, `livre_childsubcategorie_id`, `livre_auteur`, `livre_langue`, `livre_telecharegement`, `livre_page_garde`, `livre_pdf`, `livre_description`, `created_at`, `updated_at`) VALUES
(1, 'Mathématiques Terminale S', 42, 4, NULL, NULL, 'Français', 1, 'assets/images/page_garde/1772200844153482.jpg', 'assets/pdf/1772200844153482.pdf', '<h2>Tout ce qu&rsquo;il faut savoir</h2>', '2023-07-23 04:53:48', '2023-07-23 06:09:05'),
(2, 'Anglais Terminale, séries ES, L, S - Reviser son bac avec Le Monde et Courrier International - Edition 2016', 46, 6, NULL, NULL, 'Français', 0, 'assets/images/page_garde/1772206827706316.jpg', 'assets/images/page_garde/1772206827706316.pdf', '<p>L\'essentiel du cours &mdash; Les exercices et les sujets corrig&eacute;s &mdash; Les articles en anglais du Courrier international &mdash; Les articles du Monde Comment optimiser vos r&eacute;visions et &ecirc;tre s&ucirc;r(e) de ma&icirc;triser en profondeur les th&egrave;mes et les enjeux du programme d\'anglais ? Le jour du bac, comment rendre une copie qui saura faire toute la diff&eacute;rence et vous assurer la meilleure note possible ? Pour vous y aider, voici une collection r&eacute;alis&eacute;e en collaboration avec Le Monde et le Courrier international qui a fait ses preuves ! Elle est la premi&egrave;re et la seule &agrave; vous proposer &mdash; en plus des r&eacute;visions traditionnelles &mdash; d\'&eacute;toffer vos connaissances gr&acirc;ce aux articles du c&eacute;l&egrave;bre quotidien et de Courrier international. Enrichissement culturel et linguistique, approfondissement des th&eacute;matiques au programme, consolidation du lexique et des notions cl&eacute;s : chaque article est une mine d\'informations &agrave; exploiter pour optimiser la qualit&eacute; de vos productions &eacute;crites et orales le jour de l\'examen. Inspir&eacute;e de la presse, la mise en page met en valeur l\'information et facilite la m&eacute;morisation des points importants. S&eacute;lectionn&eacute;s pour leur pertinence par rapport &agrave; un th&egrave;me pr&eacute;cis du programme, les articles sont accompagn&eacute;s : - des mots cl&eacute;s et rep&egrave;res essentiels &agrave; retenir ; - d\'exercices d\'entra&icirc;nement (questions de compr&eacute;hension, exercices de grammaire et sujets de bac corrig&eacute;s) pour une parfaite ma&icirc;trise de la langue anglaise. Sans oublier la m&eacute;thodologie des &eacute;preuves et les conseils pour s\'y pr&eacute;parer. Avec un cahier sp&eacute;cial de 16 pages pour se tester avant le bac.&nbsp;</p>', '2023-07-23 06:28:54', '2023-07-23 06:28:54');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `livres`
--
ALTER TABLE `livres`
  ADD PRIMARY KEY (`id`),
  ADD KEY `livres_livre_categorie_id_foreign` (`livre_categorie_id`),
  ADD KEY `livres_livre_subcategorie_id_foreign` (`livre_subcategorie_id`),
  ADD KEY `livres_livre_childsubcategorie_id_foreign` (`livre_childsubcategorie_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `livres`
--
ALTER TABLE `livres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `livres`
--
ALTER TABLE `livres`
  ADD CONSTRAINT `livres_livre_categorie_id_foreign` FOREIGN KEY (`livre_categorie_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `livres_livre_childsubcategorie_id_foreign` FOREIGN KEY (`livre_childsubcategorie_id`) REFERENCES `childsubcategories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `livres_livre_subcategorie_id_foreign` FOREIGN KEY (`livre_subcategorie_id`) REFERENCES `subcategories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
