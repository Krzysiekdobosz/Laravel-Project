-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 25 Sty 2024, 22:25
-- Wersja serwera: 10.4.16-MariaDB
-- Wersja PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `gamza`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 2),
(6, '2019_05_14_114748_create_permission_tables', 2),
(7, '2019_05_15_180937_create_students_table', 2),
(8, '2019_05_15_181154_create_parents_table', 2),
(9, '2019_05_15_181254_create_teachers_table', 2),
(10, '2019_05_15_181552_create_grades_table', 2),
(11, '2019_05_16_174745_create_subjects_table', 2),
(12, '2019_05_16_175620_create_grade_subject_table', 2),
(13, '2019_05_17_133226_create_attendances_table', 2),
(14, '2024_01_22_173846_create_tickets_table', 2),
(17, '2024_01_22_185340_add_user_id_to_tickets_table', 3),
(18, '2024_01_22_185724_add_user_id_to_tickets_table', 4),
(19, '2024_01_23_090118_add_dance_group_and_ticket_type_to_tickets_table', 5),
(20, '2024_01_25_000554_add_role_to_users_table', 6);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tickets`
--

CREATE TABLE `tickets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `dance_group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ticket_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiry_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `tickets`
--

INSERT INTO `tickets` (`id`, `user_id`, `dance_group`, `ticket_type`, `expiry_date`, `created_at`, `updated_at`) VALUES
(27, 2, 'poczatkowa', 'monthly', '2024-02-23', '2024-01-23 16:41:06', '2024-01-23 16:41:06'),
(28, 2, 'reprezentacja', 'monthly', '2024-02-23', '2024-01-23 16:52:26', '2024-01-23 16:52:26'),
(29, 3, 'poczatkowa', 'monthly', '2024-02-24', '2024-01-24 16:57:00', '2024-01-24 16:57:00'),
(30, 4, 'reprezentacja', 'monthly', '2024-02-24', '2024-01-24 22:20:44', '2024-01-24 22:20:44'),
(31, 4, 'kontynuacja', 'monthly', '2024-02-24', '2024-01-24 22:24:50', '2024-01-24 22:24:50'),
(32, 4, 'kontynuacja', 'monthly', '2024-02-25', '2024-01-24 23:09:13', '2024-01-24 23:09:13'),
(33, 3, 'poczatkowa', 'monthly', '2024-02-25', '2024-01-25 19:11:09', '2024-01-25 19:11:09'),
(37, 3, 'reprezentacja', 'annual', '2025-01-25', '2024-01-25 19:46:38', '2024-01-25 19:46:38'),
(38, 3, 'poczatkowa', 'monthly', '2024-02-25', '2024-01-25 19:56:13', '2024-01-25 19:56:13'),
(39, 6, 'poczatkowa', 'monthly', '2024-02-25', '2024-01-25 20:04:21', '2024-01-25 20:04:21');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'Krzysztof', 'abc@gmail.com', NULL, '$2y$12$OZzCYrUX8ikjbny28lnjqeGne3toYn2SwiYi3uKXKb726LQrF41g2', 'U77s7JhwfoE7dxvNDhUsWEeDYOKAPdxma1Pasal0WUPvb6wgRCMBFmkpryRk', '2024-01-20 14:48:10', '2024-01-20 14:48:10', 'user'),
(2, 'abc', 'abcabc@gmail.com', NULL, '$2y$12$iYamZM8VniwPTiKUX10IP.UcOQR.s58OBReLtvgOMYKpHja8Arg42', NULL, '2024-01-20 19:06:19', '2024-01-20 19:06:19', 'user'),
(3, 'admin', 'admin@gmail.com', NULL, '$2y$12$rt3IHIV1TR8PMogeqUSLXu7RpK6VP0/97iXSyYv9ct36sWQ0YDXoO', 'EKYlaem81bD93B1gfE1XleTAkevT9UTb2N0rYZzUnFIANyWwdHEIq1sw0LXt', '2024-01-22 14:36:49', '2024-01-25 19:50:05', 'admin'),
(4, 'abcdefgh', 'abcdefgh@gmail.com', NULL, '$2y$12$UtDwH66ZpjVGGNPixEI6L.z5hg1G5fDRGJ8Ac8ypuZYm2Uph6jQbq', NULL, '2024-01-24 16:13:34', '2024-01-24 22:54:08', 'user'),
(6, 'TEST', 'test@gmail.com', NULL, '$2y$12$nH6JiSZiecnn25Bq65zpE.lIkKQIEVjXfwwNV9LmNwFGpWNjfZ7oK', NULL, '2024-01-25 19:56:54', '2024-01-25 19:56:54', 'user');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tickets_user_id_foreign` (`user_id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT dla tabeli `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `tickets`
--
ALTER TABLE `tickets`
  ADD CONSTRAINT `tickets_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
