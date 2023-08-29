-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 23 juil. 2023 à 13:18
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
-- Structure de la table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categorie_id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcategorie_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subcategorie_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcategorie_status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `subcategories`
--

INSERT INTO `subcategories` (`id`, `categorie_id`, `nom`, `subcategorie_description`, `subcategorie_slug`, `subcategorie_status`, `created_at`, `updated_at`) VALUES
(4, 42, 'Mathématiques', '<p>Science qui &eacute;tudie par le moyen du raisonnement d&eacute;ductif les propri&eacute;t&eacute;s d\'&ecirc;tres abstraits (nombres, figures g&eacute;om&eacute;triques, fonctions, espaces, etc.) ainsi que les relations qui s\'&eacute;tablissent entre eux.</p>\r\n<p>Ensemble des disciplines math&eacute;matiques, consid&eacute;r&eacute;es en ce qu\'elles sont suppos&eacute;es former un tout organique.</p>\r\n<p>Qui exclut toute incertitude, toute inexactitude&nbsp;: <span class=\"ExempleDefinition\">Pr&eacute;cision math&eacute;matique.</span></p>\r\n<p>&nbsp;</p>', '32315fa650eed7916123503247dc5c727b3ba78f', 'active', '2023-07-22 04:15:23', '2023-07-22 04:15:23'),
(6, 46, 'Anglais', '<p><span class=\"js-about-item-abstr\">L\'anglais est une langue indo-europ&eacute;enne germanique originaire d\'Angleterre qui tire ses racines de langues du nord de l\'Europe dont le vocabulaire a &eacute;t&eacute; enrichi et la syntaxe et la grammaire modifi&eacute;es par le fran&ccedil;ais anglo-normand, apport&eacute; par les Normands, puis par le fran&ccedil;ais avec les Plantagen&ecirc;t.</span></p>', '3d841d8990927545e7a4fd592fb264bff2fbb7df', 'active', '2023-07-23 06:26:38', '2023-07-23 06:26:38');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subcategories_subcategorie_slug_unique` (`subcategorie_slug`),
  ADD KEY `subcategories_categorie_id_foreign` (`categorie_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `subcategories_categorie_id_foreign` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
