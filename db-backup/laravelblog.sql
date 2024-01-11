-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Gegenereerd op: 11 jan 2024 om 15:00
-- Serverversie: 10.4.27-MariaDB
-- PHP-versie: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravelblog`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `comment` text NOT NULL,
  `post_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `comments`
--

INSERT INTO `comments` (`id`, `name`, `comment`, `post_id`, `created_at`, `updated_at`) VALUES
(38, 'bob', 'testComment', '2', '2023-11-14 12:30:57', '2023-11-14 12:30:57'),
(39, 'bob', 'testComment', '2', '2023-11-14 12:30:57', '2023-11-14 12:30:57'),
(40, 'bob', 'fwfwfwfwf', '2', '2023-11-14 12:32:34', '2023-11-14 12:32:34'),
(41, 'bob', 'fwfwfwfwf', '2', '2023-11-14 12:32:34', '2023-11-14 12:32:34'),
(42, 'ikergngerer', 'ergermbokerboe rblo', '1', '2023-11-14 12:41:02', '2023-11-14 12:41:02'),
(43, 'ikergngerer', 'ergermbokerboe rblo', '1', '2023-11-14 12:41:02', '2023-11-14 12:41:02'),
(44, 'vwwv', 'wvwvw', '2', '2023-11-14 12:45:27', '2023-11-14 12:45:27'),
(45, 'vwwv', 'wvwvw', '2', '2023-11-14 12:45:27', '2023-11-14 12:45:27'),
(46, 'wfwef', 'wfefw', '2', '2023-11-14 12:47:06', '2023-11-14 12:47:06'),
(47, 'wfwef', 'wfefw', '2', '2023-11-14 12:47:06', '2023-11-14 12:47:06'),
(48, 'ermgberg', 'irgij43rngij4rngip4npkj4', '2', '2023-11-14 12:47:17', '2023-11-14 12:47:17'),
(49, 'ermgberg', 'irgij43rngij4rngip4npkj4', '2', '2023-11-14 12:47:17', '2023-11-14 12:47:17'),
(50, 'ererg', 'ergege', '2', '2023-11-14 12:47:29', '2023-11-14 12:47:29'),
(51, 'ererg', 'ergege', '2', '2023-11-14 12:47:29', '2023-11-14 12:47:29'),
(52, 'ferf', 'efe', '2', '2023-11-14 12:51:07', '2023-11-14 12:51:07'),
(53, 'ferf', 'efe', '2', '2023-11-14 12:51:07', '2023-11-14 12:51:07'),
(54, 'rogbmbokm', 'fglblrgbrbokrmrb', '1', '2023-11-14 12:54:55', '2023-11-14 12:54:55'),
(55, 'rogbmbokm', 'fglblrgbrbokrmrb', '1', '2023-11-14 12:54:55', '2023-11-14 12:54:55'),
(56, 'wfwf', 'fwwffwf', '1', '2023-11-14 13:05:45', '2023-11-14 13:05:45'),
(57, 'wfwf', 'fwwffwf', '1', '2023-11-14 13:05:45', '2023-11-14 13:05:45'),
(58, 'wef', 'wefwefwf', '1', '2023-11-14 13:06:14', '2023-11-14 13:06:14'),
(59, 'wef', 'wefwefwf', '1', '2023-11-14 13:06:14', '2023-11-14 13:06:14'),
(60, 'emkvkev', 'ervl erlv elv', '1', '2023-11-14 13:09:08', '2023-11-14 13:09:08'),
(61, 'emkvkev', 'ervl erlv elv', '1', '2023-11-14 13:09:08', '2023-11-14 13:09:08'),
(62, 'wefwef', 'wfwfwf', '1', '2023-11-14 13:16:46', '2023-11-14 13:16:46'),
(63, 'wefwef', 'wfwfwf', '1', '2023-11-14 13:16:46', '2023-11-14 13:16:46'),
(64, 'b', 'ebeb vtekmegb', '1', '2023-11-14 13:16:58', '2023-11-14 13:16:58'),
(65, 'b', 'ebeb vtekmegb', '1', '2023-11-14 13:16:58', '2023-11-14 13:16:58'),
(66, 'fw', 'fwef', '1', '2023-11-14 13:17:55', '2023-11-14 13:17:55'),
(67, 'fw', 'fwef', '1', '2023-11-14 13:17:55', '2023-11-14 13:17:55'),
(68, 'bob', 'comment op pagina 7', '7', '2023-11-14 14:24:32', '2023-11-14 14:24:32'),
(69, 'bob', 'comment op pagina 7', '7', '2023-11-14 14:24:32', '2023-11-14 14:24:32'),
(70, 'bob', 'efwfwf', '6', '2023-11-14 17:17:05', '2023-11-14 17:17:05'),
(71, 'bob', 'efwfwf', '6', '2023-11-14 17:17:05', '2023-11-14 17:17:05'),
(72, 'test', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '7', '2023-11-15 06:55:09', '2023-11-15 06:55:09'),
(73, 'test', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '7', '2023-11-15 06:55:09', '2023-11-15 06:55:09'),
(74, 'testetstsvr', 'mbejonbenberbneriob', '7', '2023-11-15 07:08:57', '2023-11-15 07:08:57'),
(75, 'testetstsvr', 'mbejonbenberbneriob', '7', '2023-11-15 07:08:57', '2023-11-15 07:08:57'),
(76, 'twtstfwfwfw', 'wefwwef', '7', '2023-11-15 07:09:34', '2023-11-15 07:09:34'),
(77, 'test', 'f', '6', '2023-11-15 07:24:42', '2023-11-15 07:24:42'),
(78, 'etwryfgw', 'whefvge', '7', '2023-11-16 08:27:58', '2023-11-16 08:27:58'),
(79, 'kjgrtbr', 'mrgbjbgbr', '7', '2023-11-18 09:56:16', '2023-11-18 09:56:16'),
(80, 'bob', 'wefijwejhife', '5', '2023-11-21 15:38:05', '2023-11-21 15:38:05'),
(81, 'tjy', 'tyjtyj', '6', '2024-01-11 12:59:46', '2024-01-11 12:59:46');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_01_144742_create_posts_table', 2),
(6, '2023_11_07_144930_create_test_table', 3),
(7, '2023_11_07_145925_create_comments_table', 4);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `excerpt` text NOT NULL,
  `body` text NOT NULL,
  `info` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `published_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `posts`
--

INSERT INTO `posts` (`id`, `title`, `excerpt`, `body`, `info`, `created_at`, `updated_at`, `published_at`) VALUES
(1, 'De titel van post 1', 'Dit is het test uittreksel van post 1', 'Dit is de body  test van post 1. Dit is de body van post 1.', 'de info van post 1', '2023-11-02 10:34:47', '2023-11-02 10:34:47', NULL),
(2, 'De titel van post 2', 'Dit is het uittreksel van post 2', 'Dit is de body van post 2. Dit is de body van post 2.', 'Dit is de info van post 2', '2023-11-02 10:37:17', '2023-11-02 10:37:17', NULL),
(3, 'De titel van post 3', 'Dit is het uittreksel van post 3', 'Dit is de body van post 3. Dit is de body van post 3.', 'Dit is de info van post 3', '2023-11-07 13:17:31', '2023-11-07 13:17:31', NULL),
(4, 'De titel van post 4', 'Dit is het uittreksel van post 4', 'Dit is de body van post 1. Dit is de body van post 4.', 'de info van post 4', '2023-11-10 12:53:28', '2023-11-10 12:53:28', NULL),
(5, 'De titel van post 5', 'Dit is het uittreksel van post 5', 'Dit is de body van post 5.', 'de info van post 5', '2023-11-10 12:53:58', '2023-11-10 12:53:58', NULL),
(6, 'De titel van post 6', 'Dit is het uittreksel van post 6', 'Dit is de body van post 6.', 'de info van post 6', '2023-11-10 12:54:19', '2023-11-10 12:54:19', NULL),
(7, 'De titel van post 7', 'Dit is het uittreksel van post 7', 'Dit is de body van post 7.', 'de info van post 7', '2023-11-10 12:54:19', '2023-11-10 12:54:19', NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `test`
--

CREATE TABLE `test` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(14, 'deanblok', 'wefw', 'efwf@fwefw.nl', NULL, '$2y$10$nk89g5YUwPCGic2LAe6CJusNdNLWN4Aqh3MZCeTjjRpnnMtw7h.7i', NULL, '2023-11-16 07:35:34', '2023-11-16 07:35:34'),
(15, 'deanblokwfw', 'ergeg', 'egegrg@ergreg.nl', NULL, '$2y$10$A6K6qlan/CHbxlROGp6rXuob60hJG0kr.30qLAwwUYYMsFrNcqyIe', NULL, '2023-11-16 07:35:54', '2023-11-16 07:35:54'),
(16, 'deanblokvvwvw vwv', 'TestName', 'wiinjnw@kernwkjf.nl', NULL, '$2y$10$G7OIneSHssilePH8ac8bJuG4b32AR/1OBx68j8nMJJ85vGL4dVcTi', NULL, '2023-11-16 08:35:24', '2023-11-16 08:35:24'),
(17, 'deanblokwef', 'erferergerg', 'ererg@vernij.nl', NULL, '$2y$10$Yrbc6k80HoAMM4SE3JGXCO3okeHyXAd.eNHfreU/nFtcV4uJIU.7K', NULL, '2023-11-16 08:42:20', '2023-11-16 08:42:20'),
(18, 'deanblokfr', 'fwfwef', 'wfwfefwfw@fewf.nl', NULL, '$2y$10$QLF9NVJ4KjtdneJXGXrb3.pco4tAgOsETITNkvvW/Q775HVEUX4JK', NULL, '2023-11-16 08:43:47', '2023-11-16 08:43:47'),
(19, 'Bob', 'Bob', 'Test@test.com', NULL, '$2y$10$FIB1lM72hmbbTlPAxZvSZOgwL6/kFqvh4.GwfXrmYf4TdKAAx2I5m', NULL, '2023-11-16 11:53:02', '2023-11-16 11:53:02'),
(21, 'Naam', 'TestNaam', 'nrnj@vdknvn.nl', NULL, '$2y$10$zOqwbjvMZ6I6/2Kbj05YVeatiu7KIg/AqB2FqszlckuIMDRwUJi3m', NULL, '2023-11-18 10:05:32', '2023-11-18 10:05:32'),
(22, 'UniekeUser', 'test', 'fewjberj@kjbevb.nl', NULL, '$2y$10$spP99EeYCHxRLKwUJxnuRunaVt1JiTWJ1gs3YRzlXUHNRADm.qZ4W', NULL, '2023-11-21 12:04:20', '2023-11-21 12:04:20');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexen voor tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexen voor tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexen voor tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT voor een tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT voor een tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT voor een tabel `test`
--
ALTER TABLE `test`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
