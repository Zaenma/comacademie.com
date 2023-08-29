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
-- Structure de la table `childsubcategories`
--

CREATE TABLE `childsubcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subcategorie_id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `childsubcategorie_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `childsubcategorie_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `childsubcategorie_status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `categorie_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `childsubcategories`
--

INSERT INTO `childsubcategories` (`id`, `subcategorie_id`, `nom`, `childsubcategorie_description`, `childsubcategorie_slug`, `childsubcategorie_status`, `created_at`, `updated_at`, `categorie_id`) VALUES
(3, 4, 'Mathématiques Financières', '<p><span class=\"js-about-item-abstr\">Les math&eacute;matiques financi&egrave;res sont une branche des math&eacute;matiques appliqu&eacute;es ayant pour but la mod&eacute;lisation, la quantification et la compr&eacute;hension des ph&eacute;nom&egrave;nes r&eacute;gissant les op&eacute;rations financi&egrave;res d\'une certaine dur&eacute;e et notamment les march&eacute;s financiers</span></p>', '$2y$10$GHbUW5RQy0mQ.I78iMLQRu06qv3Mi4hkCt/LATFtn5xxNPDCTCD3.', 'active', '2023-07-22 04:17:58', '2023-07-22 04:17:58', 42);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `childsubcategories`
--
ALTER TABLE `childsubcategories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `childsubcategories_childsubcategorie_slug_unique` (`childsubcategorie_slug`),
  ADD KEY `childsubcategories_subcategorie_id_foreign` (`subcategorie_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `childsubcategories`
--
ALTER TABLE `childsubcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `childsubcategories`
--
ALTER TABLE `childsubcategories`
  ADD CONSTRAINT `childsubcategories_subcategorie_id_foreign` FOREIGN KEY (`subcategorie_id`) REFERENCES `subcategories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
