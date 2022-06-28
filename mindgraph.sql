-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Jun 2022 pada 13.14
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mindgraph`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `events`
--

CREATE TABLE `events` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `startAt` datetime DEFAULT NULL,
  `endAt` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `events`
--

INSERT INTO `events` (`id`, `name`, `slug`, `created_at`, `updated_at`, `startAt`, `endAt`, `deleted_at`) VALUES
('96a4f5ba-1477-4463-9912-d1e43d6416ce', 'Ophelia Nasyiah', 'minus-maxime-sint-soluta-officia', '2022-06-27 18:53:34', '2022-06-28 04:14:07', '2022-06-30 12:31:51', '2022-06-30 15:31:51', '2022-06-28 11:14:07'),
('96a4f5ba-2026-44f7-9b40-10a95fb2351c', 'Bakianto Sinaga', 'eveniet-a-nulla-quos', '2022-06-27 18:53:34', '2022-06-27 18:53:34', '2022-07-01 08:46:33', '2022-07-01 11:46:33', NULL),
('96a4f5ba-2199-4ad6-b31c-7fb39eca51c6', 'Ajimat Hidayat', 'explicabo-omnis-voluptatibus-consequuntur-sed', '2022-06-27 18:53:34', '2022-06-27 18:53:34', '2022-07-01 00:07:38', '2022-07-01 02:07:38', NULL),
('96a4f5ba-22ae-429e-a22d-320650e604d8', 'Mumpuni Firgantoro', 'minima-consequatur-consectetur-facere-dolorem-repellendus-quo-odio-voluptatem', '2022-06-27 18:53:34', '2022-06-27 18:53:34', '2022-06-30 17:38:16', '2022-06-30 22:38:16', NULL),
('96a4f5ba-240a-486b-aa35-d95dc8e2dded', 'Sabrina Tari Zulaika', 'praesentium-et-praesentium-saepe-et-facilis-quae', '2022-06-27 18:53:34', '2022-06-27 18:53:34', '2022-07-01 10:15:58', '2022-07-01 14:15:58', NULL),
('96a4f5ba-2534-4268-8c0e-90222cac4daf', 'Mila Lailasari', 'a-possimus-dolorem-esse-voluptas-et-et-exercitationem', '2022-06-27 18:53:34', '2022-06-27 18:53:34', '2022-07-02 07:18:32', '2022-07-02 14:18:32', NULL),
('96a4f5ba-26b1-4d9c-9736-754aa35d235f', 'Pranata Lazuardi', 'praesentium-fuga-sed-non-aut-consectetur-ipsa', '2022-06-27 18:53:34', '2022-06-27 18:53:34', '2022-07-03 23:44:46', '2022-07-04 05:44:46', NULL),
('96a4f5ba-2843-48b5-84c4-1d0199759a36', 'Saiful Prayoga Lazuardi S.Sos', 'aut-fuga-quibusdam-harum', '2022-06-27 18:53:34', '2022-06-27 18:53:34', '2022-06-30 04:27:53', '2022-06-30 05:27:53', NULL),
('96a4f5ba-29b8-4e44-868d-f5f9be61b17c', 'Mujur Habibi', 'qui-itaque-harum-ut', '2022-06-27 18:53:34', '2022-06-27 18:53:34', '2022-07-02 11:58:21', '2022-07-02 12:58:21', NULL),
('96a4f5ba-2b44-44ad-9812-997e49542b9c', 'Bahuraksa Iswahyudi', 'debitis-fugiat-occaecati-vel-eos-et-earum', '2022-06-27 18:53:34', '2022-06-27 18:53:34', '2022-07-02 23:46:25', '2022-07-03 01:46:25', NULL),
('96a4f5ba-2cca-4ebc-b2e3-3bd63e04e652', 'Paramita Uchita Mardhiyah', 'qui-voluptatem-qui-consequuntur', '2022-06-27 18:53:34', '2022-06-27 18:53:34', '2022-07-02 19:35:43', '2022-07-03 03:35:43', NULL),
('96a4f5ba-2e7c-4db0-acb7-b79a8fd5fa59', 'Cecep Latupono S.Gz', 'error-sint-hic-enim-qui-porro-consequatur-sed-in', '2022-06-27 18:53:34', '2022-06-27 18:53:34', '2022-07-03 12:45:45', '2022-07-03 18:45:45', NULL),
('96a4f5ba-3016-44ee-8f88-24b9fc0d4534', 'Hana Oliva Padmasari S.I.Kom', 'autem-architecto-iste-eum-et-qui-odio', '2022-06-27 18:53:34', '2022-06-27 18:53:34', '2022-06-30 06:12:25', '2022-06-30 08:12:25', NULL),
('96a4f5ba-31b4-4f21-a0ff-bd01e0c2b54d', 'Yani Wastuti', 'repellendus-neque-magni-qui-quam-quae-consequatur', '2022-06-27 18:53:34', '2022-06-27 18:53:34', '2022-07-01 13:41:18', '2022-07-01 15:41:18', NULL),
('96a4f5ba-336d-4b6a-942f-3e1b33a44db1', 'Eva Novitasari', 'incidunt-quia-quia-velit-enim-officiis-vero', '2022-06-27 18:53:34', '2022-06-27 18:53:34', '2022-07-01 15:40:30', '2022-07-01 18:40:30', NULL),
('96a4f5ba-358d-4643-a351-902bfc691f6f', 'Galur Timbul Sihombing M.Pd', 'fugit-sed-doloremque-aut-in-dolorum', '2022-06-27 18:53:34', '2022-06-27 18:53:34', '2022-07-03 18:27:07', '2022-07-03 21:27:07', NULL),
('96a4f5ba-37ce-4e18-b995-c321e8bb8c8a', 'Zulfa Purnawati', 'qui-repudiandae-fugiat-delectus-adipisci', '2022-06-27 18:53:34', '2022-06-27 18:53:34', '2022-07-02 23:00:29', '2022-07-03 06:00:29', NULL),
('96a4f5ba-39f3-441b-8da7-d4f14f6253c7', 'Cinthia Salimah Kuswandari', 'numquam-vel-voluptatem-voluptate-distinctio-amet-omnis-nostrum', '2022-06-27 18:53:34', '2022-06-27 18:53:34', '2022-07-04 21:13:07', '2022-07-05 03:13:07', NULL),
('96a4f5ba-3c4e-40fc-9838-c8bc912f6edf', 'Ika Puspa Zulaika S.I.Kom', 'sit-et-voluptatem-error-pariatur', '2022-06-27 18:53:34', '2022-06-27 18:53:34', '2022-07-04 06:42:21', '2022-07-04 13:42:21', NULL),
('96a4f5ba-3e8e-45f0-8e0d-667b7fabb7e4', 'Oni Suartini', 'exercitationem-consequatur-consequuntur-sed-hic-dolores', '2022-06-27 18:53:34', '2022-06-27 18:53:34', '2022-07-03 00:32:00', '2022-07-03 05:32:00', NULL),
('96a5b926-a4eb-4343-af10-f43d6e96d96a', 'Jalan Sehat Asean 2022 Ayo bisa', 'jalan-sehat-asean-2022-ayo-bisa', '2022-06-28 04:00:00', '2022-06-28 04:32:49', '2022-06-28 10:59:00', '2022-07-07 11:01:00', NULL),
('96a624c8-ee76-4f10-8567-f9d920ca34b6', 'hdhdkahh', 'hdhdkahh', '2022-06-28 09:00:58', '2022-06-28 09:02:18', '2022-06-28 15:00:00', '2022-07-05 15:00:00', '2022-06-28 16:02:18'),
('96a62558-9527-49d3-81ba-08b556a273b0', 'hjgaggdjajdag', 'hjgaggdjajdag', '2022-06-28 09:02:33', '2022-06-28 09:02:33', '2022-06-28 15:02:00', '2022-06-30 15:02:00', NULL),
('96a627f1-2fe3-4b97-836b-b20b06aef74e', 'hjgaggdjajdagdddd', 'hjgaggdjajdagdddd', '2022-06-28 09:09:48', '2022-06-28 09:09:48', '2022-06-28 15:02:00', '2022-06-30 15:02:00', NULL),
('96a628d4-667d-405e-bb81-2684783e0d35', 'ffffff', 'ffffff', '2022-06-28 09:12:17', '2022-06-28 09:12:17', '2022-06-28 15:02:00', '2022-06-30 15:02:00', NULL),
('96a62a32-a255-47e6-b060-2d0b3115f9eb', 'ddddd', 'ddddd', '2022-06-28 09:16:07', '2022-06-28 09:16:07', '2022-06-28 15:02:00', '2022-06-30 15:02:00', NULL),
('96a62a7e-7181-424a-89dd-09c352504c17', 'dddddddsssss', 'dddddddsssss', '2022-06-28 09:16:56', '2022-06-28 09:16:56', '2022-06-28 15:02:00', '2022-06-30 15:02:00', NULL),
('96a62b22-83b7-455b-a209-f1cc8d0af697', 'aaaaaa', 'aaaaaa', '2022-06-28 09:18:44', '2022-06-28 09:18:44', '2022-06-28 16:18:00', '2022-07-02 15:18:00', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_06_27_144419_create_events_table', 1),
(6, '2022_06_27_233632_add_start_at_to_events_table', 2),
(7, '2022_06_28_005911_add_deleted_at_to_events_table', 3),
(8, '2022_06_28_181030_add_type_to_users_table', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `type`) VALUES
(1, 'Hardy Prabowo', 'vanturgo16@gmail.com', NULL, '$2y$10$6jjCnRrtV5DNzTm2rVr.Re4WdIB52tdJN4v596VKOEn.opO8hHici', NULL, '2022-06-28 11:33:49', '2022-06-28 11:33:49', 'admin'),
(2, 'Selly', 'selly@gmail.com', NULL, '$2y$10$NV5h.SA/eRXkQOMLU5oDhOLi40xIK77YFJwQMKJ6/jFxixvkld7Vq', NULL, '2022-06-28 12:07:53', '2022-06-28 12:07:53', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `events_slug_unique` (`slug`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
