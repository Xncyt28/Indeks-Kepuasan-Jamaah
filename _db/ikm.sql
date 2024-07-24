-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jan 2024 pada 07.17
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ikm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `answers`
--

CREATE TABLE `answers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) NOT NULL,
  `kuesioner_id` bigint(20) UNSIGNED NOT NULL,
  `responden_id` bigint(20) UNSIGNED NOT NULL,
  `answer` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `answers`
--

INSERT INTO `answers` (`id`, `uuid`, `kuesioner_id`, `responden_id`, `answer`, `created_at`, `updated_at`) VALUES
(1, '04c77a0c-6974-4d02-8597-697e22b46b68', 1, 1, 3, '2024-01-14 23:05:33', '2024-01-14 23:05:33'),
(2, '74f034a2-d8ba-4993-bf59-392d8d6e2b58', 2, 1, 2, '2024-01-14 23:05:33', '2024-01-14 23:05:33'),
(3, '3adbc154-72fe-4732-95cc-e38818a6eb82', 3, 1, 3, '2024-01-14 23:05:33', '2024-01-14 23:05:33'),
(4, 'b86c2ce9-9b29-4106-a5b7-446d854cf7f6', 4, 1, 4, '2024-01-14 23:05:34', '2024-01-14 23:05:34'),
(5, '6a573f48-87bb-4004-b03a-70456d4d337b', 5, 1, 3, '2024-01-14 23:05:34', '2024-01-14 23:05:34'),
(6, 'd55c8ca7-45cd-496f-827b-c946a8c76ada', 6, 1, 3, '2024-01-14 23:05:34', '2024-01-14 23:05:34'),
(7, 'a770950e-bfc1-4e64-906f-47d81459ba83', 7, 1, 4, '2024-01-14 23:05:34', '2024-01-14 23:05:34'),
(8, 'f1ef0341-d992-499d-8863-959603e51b5e', 8, 1, 3, '2024-01-14 23:05:34', '2024-01-14 23:05:34'),
(9, '4270a5f1-a13f-4df0-aff9-ef697dc8f7dc', 9, 1, 3, '2024-01-14 23:05:34', '2024-01-14 23:05:34'),
(10, '92156ff1-e5d7-4602-99b6-11422b8c7e86', 10, 1, 3, '2024-01-14 23:05:34', '2024-01-14 23:05:34'),
(11, '50e01336-3705-406e-98b3-53c2d40f20b5', 11, 1, 3, '2024-01-14 23:05:34', '2024-01-14 23:05:34'),
(12, '6496ff2f-b75d-4943-a1b7-307e5e97433f', 12, 1, 3, '2024-01-14 23:05:34', '2024-01-14 23:05:34'),
(13, '824942e7-d79b-4d21-87c6-927802c9a763', 13, 1, 4, '2024-01-14 23:05:35', '2024-01-14 23:05:35'),
(14, '05424de5-6c1e-4730-9849-61ac7ce2968b', 14, 1, 3, '2024-01-14 23:05:35', '2024-01-14 23:05:35'),
(15, 'd5cbe405-01f0-489f-b401-bd404db7f1ff', 15, 1, 3, '2024-01-14 23:05:35', '2024-01-14 23:05:35'),
(16, '67089d3a-ef40-4e24-832a-941ec164a8a4', 16, 1, 2, '2024-01-14 23:05:35', '2024-01-14 23:05:35'),
(17, '2fe18aaa-be23-4b81-b5b5-9b128f93c36c', 17, 1, 1, '2024-01-14 23:05:35', '2024-01-14 23:05:35'),
(18, '1b04b5f1-4d7a-413c-a464-27800dd3adfc', 18, 1, 2, '2024-01-14 23:05:35', '2024-01-14 23:05:35'),
(19, 'e9ebb755-4a23-41a0-8484-87a82327aedf', 19, 1, 3, '2024-01-14 23:05:35', '2024-01-14 23:05:35'),
(20, '3f648c95-56d8-4b9c-b322-b95856d230e4', 20, 1, 4, '2024-01-14 23:05:35', '2024-01-14 23:05:35'),
(21, 'd282e250-4a30-44e5-b8a5-7a8350e1bca3', 21, 1, 1, '2024-01-14 23:05:35', '2024-01-14 23:05:35'),
(22, '1bf93d4d-b2f5-4d19-acf0-c2bac6805df3', 22, 1, 2, '2024-01-14 23:05:35', '2024-01-14 23:05:35'),
(23, 'ba28a630-ee7e-4acd-916b-34d1938e176f', 23, 1, 1, '2024-01-14 23:05:35', '2024-01-14 23:05:35'),
(24, 'd6c78146-eceb-49e4-a2d2-880b9533617d', 24, 1, 2, '2024-01-14 23:05:35', '2024-01-14 23:05:35'),
(25, 'bc7cb8b8-daad-4140-a5e6-a7ca43328fed', 25, 1, 3, '2024-01-14 23:05:35', '2024-01-14 23:05:35'),
(26, '6cf652ad-3299-4f04-bf6d-1ca5726b3348', 26, 1, 4, '2024-01-14 23:05:36', '2024-01-14 23:05:36'),
(27, '9dc6fd86-cf0e-4037-ab50-6def18d541a1', 27, 1, 1, '2024-01-14 23:05:36', '2024-01-14 23:05:36'),
(28, 'd2da863a-f87c-4051-beca-173bb9fc70e7', 1, 2, 2, '2024-01-14 23:09:16', '2024-01-14 23:09:16'),
(29, '48e4fb1a-df40-412f-855f-7fe7dd6bd61b', 2, 2, 2, '2024-01-14 23:09:16', '2024-01-14 23:09:16'),
(30, 'b8d83bea-4513-496c-b641-f57f9413640b', 3, 2, 3, '2024-01-14 23:09:16', '2024-01-14 23:09:16'),
(31, 'ddf4976d-9913-4e95-be70-58f2da37b3f3', 4, 2, 2, '2024-01-14 23:09:17', '2024-01-14 23:09:17'),
(32, '681f4135-5468-4978-b752-5eea3dea6c91', 5, 2, 3, '2024-01-14 23:09:17', '2024-01-14 23:09:17'),
(33, 'cfd1a9f5-71ec-4c49-b457-4538ef34c3c1', 6, 2, 2, '2024-01-14 23:09:17', '2024-01-14 23:09:17'),
(34, 'd3ee8157-9b27-4233-bbe7-1d55209030a3', 7, 2, 4, '2024-01-14 23:09:17', '2024-01-14 23:09:17'),
(35, '9253835e-c2c4-4c08-9c14-a88fa574dc2d', 8, 2, 4, '2024-01-14 23:09:18', '2024-01-14 23:09:18'),
(36, 'e779806b-1cda-42aa-a0f3-e69abad19c3b', 9, 2, 3, '2024-01-14 23:09:18', '2024-01-14 23:09:18'),
(37, 'fe997d17-090c-47ae-8641-cedbec74b420', 10, 2, 2, '2024-01-14 23:09:18', '2024-01-14 23:09:18'),
(38, 'fef8b888-a410-4388-a45c-3c9cb8ec86f3', 11, 2, 3, '2024-01-14 23:09:18', '2024-01-14 23:09:18'),
(39, 'bf3a6b56-13e4-44fb-bd19-3d56910c2ad3', 12, 2, 2, '2024-01-14 23:09:18', '2024-01-14 23:09:18'),
(40, 'bc4385c5-17df-41c2-bd33-1f249b8e23d2', 13, 2, 3, '2024-01-14 23:09:18', '2024-01-14 23:09:18'),
(41, '14f70d62-4766-48ae-867d-6249e188c86e', 14, 2, 3, '2024-01-14 23:09:18', '2024-01-14 23:09:18'),
(42, '7c7c907e-e9e9-47ed-9e19-6ae20edcee91', 15, 2, 3, '2024-01-14 23:09:18', '2024-01-14 23:09:18'),
(43, '5431ba8c-d126-4ff7-aaa2-ea24a7a4ae59', 16, 2, 3, '2024-01-14 23:09:18', '2024-01-14 23:09:18'),
(44, 'e556a6dc-a682-4e71-a249-d8055776bb1b', 17, 2, 4, '2024-01-14 23:09:18', '2024-01-14 23:09:18'),
(45, 'dafa00e8-ff08-49b4-9a3d-5925135a6509', 18, 2, 2, '2024-01-14 23:09:18', '2024-01-14 23:09:18'),
(46, '5f71348c-573b-48c0-8ca9-af7a3841f21f', 19, 2, 3, '2024-01-14 23:09:18', '2024-01-14 23:09:18'),
(47, '289e6eb3-fae0-4f3e-a7cd-d7a39212bbab', 20, 2, 4, '2024-01-14 23:09:19', '2024-01-14 23:09:19'),
(48, '7630c8b6-d363-4943-b2dd-90074c83e3a4', 21, 2, 3, '2024-01-14 23:09:19', '2024-01-14 23:09:19'),
(49, '18917579-e540-41e7-b5f7-a28291872206', 22, 2, 4, '2024-01-14 23:09:19', '2024-01-14 23:09:19'),
(50, 'ba1ae496-0dfa-4c99-83d5-09e82b32e2cb', 23, 2, 4, '2024-01-14 23:09:19', '2024-01-14 23:09:19'),
(51, '887d9f8c-644f-4358-afae-bf430a9ae949', 24, 2, 3, '2024-01-14 23:09:19', '2024-01-14 23:09:19'),
(52, '4ec3e5c1-2b07-4545-8fd9-8982324b2c0a', 25, 2, 2, '2024-01-14 23:09:19', '2024-01-14 23:09:19'),
(53, 'fe9e5ffc-073d-417c-a820-d947aa8c9e96', 26, 2, 3, '2024-01-14 23:09:19', '2024-01-14 23:09:19'),
(54, 'd02d539b-e6a7-4e8d-8975-0b251de7ebe9', 27, 2, 2, '2024-01-14 23:09:19', '2024-01-14 23:09:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) NOT NULL,
  `responden_id` bigint(20) UNSIGNED NOT NULL,
  `feedback` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `feedback`
--

INSERT INTO `feedback` (`id`, `uuid`, `responden_id`, `feedback`, `created_at`, `updated_at`) VALUES
(1, 'acb67e0a-0a65-43d2-92b8-0a24bf959381', 1, 'Tolong perbaiki bagian pelayanan ya', '2024-01-14 23:05:33', '2024-01-14 23:05:33'),
(2, '66c810d4-7976-4cd4-ab56-14e6d9636042', 2, 'Masih banyak yang perlu di perbaiki, terutama saat menunggu pelayanan, mohon ruangan ber AC, dan dilengkapi dengan kursi pijit repleksi', '2024-01-14 23:09:16', '2024-01-14 23:09:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kuesioners`
--

CREATE TABLE `kuesioners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) NOT NULL,
  `unsur_id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kuesioners`
--

INSERT INTO `kuesioners` (`id`, `uuid`, `unsur_id`, `question`, `created_at`, `updated_at`) VALUES
(1, '11508100-ff01-4202-a616-88efbcf1b9ad', 1, 'Seberapa Puas Bapak/Ibu dengan Layana umrah Zafa Tour?', '2024-01-14 22:55:37', '2024-01-14 22:55:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2019_12_14_000002_create_unsurs_table', 1),
(6, '2023_09_27_175260_create_kuesioners_table', 1),
(7, '2023_09_29_175629_create_respondens_table', 1),
(8, '2023_09_29_175758_create_answers_table', 1),
(9, '2023_10_01_081531_create_feedback_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `respondens`
--

CREATE TABLE `respondens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `tempat_tinggal` varchar(255) NOT NULL,
  `tempat_mendaftar` varchar(255) NOT NULL,
  `tanggal_keberangkatan` varchar(255) NOT NULL,
  `paket_dilih` varchar(255) NOT NULL,
  `nama_tl` varchar(255) NOT NULL,
  `mutowif` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `respondens`
--

INSERT INTO `respondens` (`id`, `uuid`, `name`, `gender`, `age`, `created_at`, `updated_at`) VALUES
(1, 'efb2766b-3520-4a9c-a046-f329fe0ec474', 'Yudi', 'Laki-laki', 46, '2024-01-14 23:05:33', '2024-01-14 23:05:33'),
(2, '4738c479-c39b-4285-89a8-2e7f82d08b63', 'Nadia', 'Perempuan', 24, '2024-01-14 23:09:16', '2024-01-14 23:09:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `unsurs`
--

CREATE TABLE `unsurs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `unsur` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `unsurs`
--

INSERT INTO `unsurs` (`id`, `unsur`, `created_at`, `updated_at`) VALUES
(1, 'Pertanyaan Umum', '2024-01-14 22:06:09', '2024-01-14 22:06:09'),
(2, 'Tour Leader', '2024-01-14 22:06:10', '2024-01-14 22:06:10'),
(3, 'Mutowif', '2024-01-14 22:06:10', '2024-01-14 22:06:10'),
(4, 'Fasilitas', '2024-01-14 22:06:10', '2024-01-14 22:06:10'),
(5, 'Lainnya', '2024-01-14 22:06:10', '2024-01-14 22:06:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `avatar`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin IKM', 'admin@admin.com', '2024-01-14 22:06:08', '$2y$10$sXNXZXsMsuYmbHK4xJEDBuNL.WIB7G973R9epG6RDIims5eRT17gq', 'https://www.gravatar.com/avatar/5d4ee428568d05b22f3eb71c1a23ac03d16c046d5b1b2a4cb094d7f2a876f467', 'V0VpEa8Wfz', '2024-01-14 22:06:08', '2024-01-14 22:06:08');

-- --------------------------------------------------------

--




--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `answers_uuid_unique` (`uuid`),
  ADD KEY `answers_kuesioner_id_foreign` (`kuesioner_id`),
  ADD KEY `answers_responden_id_foreign` (`responden_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `feedback_uuid_unique` (`uuid`),
  ADD KEY `feedback_responden_id_foreign` (`responden_id`);

--
-- Indeks untuk tabel `kuesioners`
--
ALTER TABLE `kuesioners`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kuesioners_uuid_unique` (`uuid`),
  ADD KEY `kuesioners_unsur_id_foreign` (`unsur_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);



--
-- Indeks untuk tabel `unsurs`
--
ALTER TABLE `unsurs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);



--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `answers`
--
ALTER TABLE `answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kuesioners`
--
ALTER TABLE `kuesioners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `respondens`
--
ALTER TABLE `respondens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `unsurs`
--
ALTER TABLE `unsurs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;



--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_kuesioner_id_foreign` FOREIGN KEY (`kuesioner_id`) REFERENCES `kuesioners` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `answers_responden_id_foreign` FOREIGN KEY (`responden_id`) REFERENCES `respondens` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_responden_id_foreign` FOREIGN KEY (`responden_id`) REFERENCES `respondens` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kuesioners`
--
ALTER TABLE `kuesioners`
  ADD CONSTRAINT `kuesioners_unsur_id_foreign` FOREIGN KEY (`unsur_id`) REFERENCES `unsurs` (`id`) ON DELETE CASCADE;



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
