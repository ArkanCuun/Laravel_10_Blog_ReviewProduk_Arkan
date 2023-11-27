-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Nov 2023 pada 06.00
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `databaselaravel`
--

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_09_19_151351_create_posts_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `image`, `title`, `content`, `created_at`, `updated_at`) VALUES
(14, '0beasRf74Gzf4EwL29A9tKrj0Rl55bU56bzZgPJc.jpg', 'Bakso', '<p>Menurut saya bakso merupakan makanan yang berkuah dengan cita rasa yang khas dari bumbu bumbu yang dipadukan dengan daging.</p>\r\n\r\n<p>Berikut merupakan beberapa tempat makan yang pernah saya kunjungi di Trenggalek :</p>\r\n\r\n<p>1. Bakso Bakir (★★★★★) 5.0 &quot;Bakso nya sangat enak dan kuah nya lezat&quot;</p>\r\n\r\n<p>2. Bakso Solo Pak BG (★★★★) 4.0 &quot;Baksonya enak namun harganya terlalu mahal&quot;</p>\r\n\r\n<p>3. Bakso Arema Cak Boy (★★★★★) 5.0 &quot;Baksonya sangat enak dan harganya terjangkau&quot;</p>', '2023-10-12 23:01:23', '2023-11-25 21:37:42'),
(15, 'X4qOD3aTzLaeQrZ356pKeyF2jD72M3Tryb0TeuDr.jpg', 'Mie Ayam', '<p>Menurut saya mie ayam yang enak adalah mie yang memiliki rasa gurih dan&nbsp;ayam yang masih fresh.</p>\r\n\r\n<p>Berikut merupakan beberapa tempat makan yang pernah saya kunjungi di Trenggalek :</p>\r\n\r\n<p>1. Mie Ayam Tunggal Rasa (★★★★★) 5.0 &quot;Harganya murah dan porsinya banyak, serta harganya yang lumayan terjangkau&quot;</p>\r\n\r\n<p>2. Mie Ayam Lestari (★★★★★) 5.0 &quot;Mie ayam nya sangat enak, ditambah pangsit bakso nya enak banget&quot;</p>\r\n\r\n<p>3. Mie Ayam Pangsit Tenesan (★★★★★) 5.0 &quot;Rasa mie nya enak, tempatnya nyaman dan harganya terjangkau&quot;</p>', '2023-10-12 23:06:13', '2023-11-25 21:32:39'),
(16, 'Zi5LrD7j1zn2fbV0ubOv1Fcx7oAnJiMM5Te7QHWd.jpg', 'Soto Ayam', '<p>Menurut saya soto ayam adalah makanan yang nikmat jika di nikmati saat masih hangat dan dicuaca hujan.</p>\r\n\r\n<p>Berikut merupakan beberapa tempat makan yang pernah saya kunjungi di Trenggalek :</p>\r\n\r\n<p>1. Soto Ayam Pak Tembel (★★★★★) 5.0 &quot;Sotonya sangat enak dengan harga yang terjangkau&quot;</p>\r\n\r\n<p>2. Soto Dok Cak Ji Khas Lamongan (★★★★★) 5.0 &quot;Soto campurnya sangat enak, tempatnya bersih dan juga nyaman&quot;</p>\r\n\r\n<p>3. Soto Ayam Pak Pri (★★★★) 4.0 &quot;Sotonya lumayan enak, namun bumbunya kurang berasa&quot;</p>', '2023-10-12 23:07:39', '2023-11-25 21:33:06'),
(17, 'bsLMVoBH5xmiuFpNTQG3dWxLpyT0LuSedYxOsupp.jpg', 'Rendang', '<p>Menurut saya rendang adalah makanan khas Indonesia yang memiliki cita rasa rempah-rempah yang meresap kedalam daging yang membuat rasanya enak.</p>\r\n\r\n<p>Berikut merupakan beberapa tempat makan yang pernah saya kunjungi di Trenggalek :</p>\r\n\r\n<p>1. Warung Bu Sri (★★★★) 4.0 &quot;Rendang nya enak, namun penjualnya tidak ramah&quot;</p>\r\n\r\n<p>2. Warung UDA (★★★★★) 5.0 &quot;Rendang nya enak, tempat makan yang sehat dan higienis dengan harga yang terjangkau serta tempat parkir yang memadai&quot;</p>\r\n\r\n<p>&nbsp;</p>', '2023-10-12 23:11:30', '2023-11-25 20:44:23'),
(18, 'gNMadjDEgrBpAwPh8KZCSNtsvawAneIeFNx2HK1j.jpg', 'Nasi Goreng', '<p>Menurut saya nasi goreng sangat enak bila dimakan disaat masih hangat dan rasanya yang dibuat pedas.</p>\r\n\r\n<p>Berikut merupakan beberapa tempat makan yang pernah saya kunjungi di Trenggalek :</p>\r\n\r\n<p>1.&nbsp;Warung Restu Dan Nasgor Sedap Rasa Kirun (★★★★) 4.0 &quot;Rasanya enak namun bumbunya kurang terasa&quot;</p>\r\n\r\n<p>2.&nbsp;Nasi Goreng Pak Yanto (★★★★) 4.0 &quot;Rasa nasi gorengnya enak, namun seperti nasi goreng pada umumnya&quot;</p>', '2023-10-12 23:12:22', '2023-11-25 20:37:39'),
(37, 'p60KyAGp4HO6uoNXiXN1ZnK5MqJcF6e3SG7wc1I6.jpg', 'Sate Ayam', '<p>Menurut saya sate sangat enak bila baru selesai di masak, rasanya yang sangat khas membuat sate menjadi sangat enak.</p>\r\n\r\n<p>Berikut merupakan beberapa tempat makan yang pernah saya kunjungi di Trenggalek :</p>\r\n\r\n<p>1. Sate Ayam Pak Mislan (★★★★★) 5.0 &quot;Sate&nbsp;terenak yang pernah saya makan&quot;</p>\r\n\r\n<p>2. Warung Sate Ayam Madura Bu Nur (★★★★★) 5.0 &quot;Satenya enak dan harganya murah&quot;&nbsp;</p>', '2023-10-20 00:49:01', '2023-11-25 19:47:47'),
(39, 'SeCSV9b3tnPNiTDwFN7FlItfzkXrX5SqXB0gXT0n.jpg', 'Nasi Gegok', '<p>Menurut saya nasi gegok adalah makanan dengan bahan ikan dan sambal terenak yang pernah saya makan.</p>\r\n\r\n<p>Berikut merupakan beberapa tempat makan yang pernah saya kunjungi di Trenggalek :</p>\r\n\r\n<p>1. Nasi Gegok Bu May (★★★★) 4.0 &quot;Rasanya enak tapi pedasnya kurang berasa&quot;</p>\r\n\r\n<p>2. Nasi Gegok Bu Winarti (★★★★★) 5.0 &quot;Nasi gegoknya sangat pedas dan harganya terjangkau&quot;</p>\r\n\r\n<p>3. Nasi Gegok Mbah Tumirah (★★★★★) 5.0 &quot;Nasi gegoknya enak dan pemandangan nya bagus&quot;</p>', '2023-10-20 00:52:36', '2023-11-25 19:25:17'),
(99, '289wj3gvBcQRJkRWlIGiJI95XrVuQDu57ghfDbEf.jpg', 'Rujak Sayur', '<p>Menurut saya rujak sayur merupakan makanan yang kaya akan nutrisi dan sangat bergizi karena lauk yang digunakan kebanyak adalah sayuran.</p>\r\n\r\n<p>Berikut merupakan beberapa tempat makan yang pernah saya kunjungi di Trenggalek :</p>\r\n\r\n<p>1.&nbsp;Rujak Bu Mardi (★★★★★) 5.0 &quot;Rujaknya sangat enak dan tempatnya juga bersih&quot;</p>\r\n\r\n<p>2. Rujak Cingur Bu Anggih (★★★★★) 5.0 &quot;Rasanya enak, harga bersahabat dan tempatnya bersih&quot;</p>\r\n\r\n<p>3. Warung Rujak Bu Jiyah (★★★★★) 5.0 &quot;Rasanya enak dan harganya murah&quot;</p>', '2023-11-23 05:23:52', '2023-11-25 19:13:10'),
(100, 'eZ1Oh13egwLWgzwkNF3nxLbIl9bAxXIN8nIK4ouk.jpg', 'Pecel Lele', '<p>Menurut saya pecel lele akan sangat enak bila lele dan lauk lain yang dihidangkan masih fresh.</p>\r\n\r\n<p>Berikut merupakan beberapa tempat makan yang pernah saya kunjungi di Trenggalek :</p>\r\n\r\n<p>1. Pecel Jago (★★★★) 4.0 &quot;Pecelnya lumayan banyak porsinya dan&nbsp;pilihan lauk nya cukup beragam&quot;</p>\r\n\r\n<p>2.&nbsp;Warung Pecel Mak Rokah (★★★★★) 5.0 &quot;Rasanya enak dan harganya terjangkau&quot;</p>\r\n\r\n<p>3. Warung Pecel Bu Endang (★★★★★) 5.0&quot;Sambalnya luket dan&nbsp;tidak encer, rasanya sangat enak&quot;</p>', '2023-11-23 05:25:08', '2023-11-25 21:32:05'),
(101, 'brm423l0n5xf4PPeFOQYxcry5tAPUVVIRTZr4NNK.jpg', 'Lodho Ayam', '<p>Menurut saya lodho ayam akan enak jika dibuat agak pedas.</p>\r\n\r\n<p>Berikut merupakan beberapa tempat makan yang pernah saya kunjungi di Trenggalek :</p>\r\n\r\n<p>1. Ayam Lodho Bu In (★★★★★) 5.0 &quot;Rasanya enak dan pelayanannya sangat ramah&quot;</p>\r\n\r\n<p>2.&nbsp;Lodho Ayam Kampung Mbah Mardi Lodho (★★★★) 4.0 &quot;Porsinya banyak dengan harga yg murah &quot;</p>\r\n\r\n<p>3.&nbsp;Ayam Lodho Pak Yusuf (★★★★★) 5.0 &quot;Ayamnya sangat enak, harganya yang ramah dikantong dan pelayannnya ramah&quot;</p>', '2023-11-23 05:26:08', '2023-11-25 01:26:10'),
(102, '2bwC6dGrUWYYAwYn8aw5HYpxFgRFjvIYdsJldY0a.jpg', 'Mie Gacoan', '<p>Menurut saya mie gacoan akan enak bila mie nya dibuat agak pedas.</p>\r\n\r\n<p>Berikut merupakan beberapa tempat makan yang pernah saya kunjungi di Trenggalek :</p>\r\n\r\n<p>1. Mie Time (★★★) 3.0 &quot;Mie nya enak tapi pelayanannya kurang ramah&quot;</p>\r\n\r\n<p>2. Mie G Trenggalek (★★★★) 4.0 &quot;Rasanya enak dan harganya bersahabat&quot;</p>', '2023-11-23 05:28:04', '2023-11-25 19:25:03'),
(103, 'VcO0TAvCPmz0sVvA1IUSBe8hDqAGZKf8r14oT8Fs.jpg', 'Seblak', '<p>Menurut saya seblak sangat enak bila dimakan saat masih hangat, karena perpaduan kuah dan sambal nya membuat cita rasa seblak semakin nikmat.</p>\r\n\r\n<p>Berikut merupakan beberapa tempat makan yang pernah saya kunjungi di Trenggalek :</p>\r\n\r\n<p>1. Ratu Seblak (★★★★★) 5.0 &quot;Banyak pilihan topping dan tempatnya nyaman&quot;</p>\r\n\r\n<p>2. Red Seblak Trenggalek (★★★★★) 5.0 &quot;Seblaknya enak, murah dan pelayanannya sangat ramah&quot;</p>\r\n\r\n<p>3. Kedai Seblak Blo&#39;on (★★★★) 4.0 &quot;Seblaknya kurang pedas&quot;</p>', '2023-11-23 05:29:37', '2023-11-25 01:20:41'),
(104, 'jbp2xdm8eVeVPMLM81Yp9RSeOGFZxX4I3POX37Mu.jpg', 'Ayam Geprek', '<p>Menurut saya ayam geprek sangat lezat karena rasa ayamnya yang gurih dan sambalnya yang luar biasa membuat kita ketagihan.</p>\r\n\r\n<p>Berikut merupakan beberapa tempat makan yang pernah saya kunjungi di Trenggalek :</p>\r\n\r\n<p>1. Kedai Jawara (★★★★★) 5.0 &quot;Ayam geprek disini sangat lezat dan nikmat, dan sambal nya sangat pedas&quot;</p>\r\n\r\n<p>2. Geprek Kharisma (★★★) 3.0 &quot;Sambal geprek nya kurang pedas&quot;</p>\r\n\r\n<p>3. Geprek Menter (★★★★) 4.0 &quot;Ayam geprek disini lumayan enak dan pedas &quot;</p>\r\n\r\n<p>4. Ayam Geprek Teman (★★★★★) 5.0 &quot;Harga nya yang terjangkau dan sangat enak&quot;</p>', '2023-11-23 05:31:10', '2023-11-25 21:32:15');

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Arkan Arya Reza Maulana\r\n', 'arkanarya060@gmail.com', NULL, '$2y$10$LYLdCUrH4.fo/IHeM86p0.OeRCHXKXG88f/096Hdq3i6kNMVoivwu', NULL, '2023-11-07 06:09:08', '2023-11-07 06:09:08'),
(4, 'Nanda', 'nanda@gmail.com', NULL, '$2y$10$97f75ZC3idZib4ZyPAQV8utbL4RJEFiVBZ1eC/RmSD1/LFJigi7AO', NULL, '2023-11-07 07:09:15', '2023-11-07 07:09:15'),
(9, 'Arkan Ar', 'arkan1@gmail.com', NULL, '$2y$10$UNPyN6p6KdSyLvoL.Nf2huRXiWooEC/ZnFoxPTdozG5MtRQEa3Uoe', NULL, '2023-11-16 00:40:56', '2023-11-16 00:40:56'),
(10, 'arya', 'arya@gmail.com', NULL, '$2y$10$B40VnsiomyABX1R/ERumHO7hbUoG2s67C8QFPJqMBE53FyDmkfoiG', NULL, '2023-11-16 01:13:37', '2023-11-16 01:13:37'),
(11, 'Arion', 'arion@gmail.com', NULL, '$2y$10$57ww3Myumn1HvkPglXs2rOO7X4FEz4jEq7N4haiGLyrOnkF8pzQcm', NULL, '2023-11-23 20:30:00', '2023-11-23 20:30:00');

--
-- Indexes for dumped tables
--

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
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
