-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2022 at 09:08 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tracer_study`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumnis`
--

CREATE TABLE `alumnis` (
  `nim` int(11) NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prodi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `th_lulus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alumnis`
--

INSERT INTO `alumnis` (`nim`, `nama`, `password`, `prodi`, `th_lulus`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(11, 'Abdul Haris', 'eyJpdiI6Imd5d0lYTGVJYXNuN0R1ZlhUTXZpVlE9PSIsInZhbHVlIjoib2lIa3hjVjIzVnI5K1FUazZ0M0dXdz09IiwibWFjIjoiNWM1OGMyZmI5ZDE4NzdmNGI4NzA5MDU1NzAxYzU4NjYxNGU4MWJmNGZjZmNjOTExYTVhZGZjZDcwNTY1OWM3ZCIsInRhZyI6IiJ9', 'Rekayasa Perangkat Lunak', '2022', 'Melanjutkan Studi', NULL, '2022-07-26 14:27:22', '2022-07-27 15:00:43');

-- --------------------------------------------------------

--
-- Table structure for table `beritas`
--

CREATE TABLE `beritas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul_berita` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar_berita` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `isi_berita` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `penulis_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beritas`
--

INSERT INTO `beritas` (`id`, `judul_berita`, `slug`, `gambar_berita`, `isi_berita`, `penulis_id`, `created_at`, `updated_at`) VALUES
(3, 'Persiapan Masuk Tahun Ajaran 2022/2023', 'persiapan-masuk-tahun-ajaran-20222023', '1657461808.jpg', '<p>Tahun Ajaran baru 2022/2023 akan segera dimulai. Tidak lama lagi para siswa akan kembali masuk sekolah setelah libur panjang kenaikan kelas, lalu ada pertanyaan kapan hari pertama masuk sekolah di tahun ajaran 2022/2023 ?&nbsp;</p><p>&nbsp;</p><p>Pada umumnya, setiap Dinas Pendidikan memiliki jadwal hari pertama masuk sekolah 2022 lebih banyak menerapkan masuk sekolah pada hari senin tanggal 11 Juli 2022, namun Kementrian Agama sekolah di bawah naungan lembaga tersebut masuk sekolah dimulai pada hari senin tanggal 18 Juli 2022.</p><p>&nbsp;</p><p>Untuk Tahun Ajaran baru 2022/2023 ini rata-rata sekolah menerapkan tatap muka langsung dengan protokol COVID-19, karena sekolah sudah terlalu lama menerapkan sistem daring kurang maksimal dalam mentransfer pengetahuan kepada peserta didik.&nbsp;</p>', 3, '2022-07-10 07:03:28', '2022-07-10 07:03:28');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `jawaban_alumnis`
--

CREATE TABLE `jawaban_alumnis` (
  `id` int(10) UNSIGNED NOT NULL,
  `nim` int(11) NOT NULL,
  `id_pertanyaan` int(10) UNSIGNED NOT NULL,
  `jawaban` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jawaban_alumnis`
--

INSERT INTO `jawaban_alumnis` (`id`, `nim`, `id_pertanyaan`, `jawaban`, `created_at`, `updated_at`) VALUES
(1, 11, 1, '2021', '2022-07-27 01:26:17', '2022-07-27 01:26:17'),
(2, 11, 2, 'Wirausaha', '2022-07-27 01:26:17', '2022-07-27 01:26:17'),
(3, 11, 3, '1  - 3 Bulan', '2022-07-27 01:26:17', '2022-07-27 01:26:17'),
(4, 11, 4, '4.000.000 - 6.000.000', '2022-07-27 01:26:17', '2022-07-27 01:26:17');

-- --------------------------------------------------------

--
-- Table structure for table `jawaban_pengguna_alumnis`
--

CREATE TABLE `jawaban_pengguna_alumnis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `id_pertanyaan` bigint(20) UNSIGNED NOT NULL,
  `jawaban` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jawaban_pengguna_alumnis`
--

INSERT INTO `jawaban_pengguna_alumnis` (`id`, `id_user`, `id_pertanyaan`, `jawaban`, `created_at`, `updated_at`) VALUES
(20, 69, 1, 'baik', '2022-07-21 05:48:43', '2022-07-21 05:48:43'),
(21, 69, 2, 'cukup', '2022-07-21 05:48:43', '2022-07-21 05:48:43'),
(22, 69, 3, 'sangat baik', '2022-07-21 05:48:43', '2022-07-21 05:48:43'),
(23, 70, 1, 'baik', '2022-07-21 08:59:17', '2022-07-21 08:59:17'),
(24, 70, 2, 'baik', '2022-07-21 08:59:17', '2022-07-21 08:59:17'),
(25, 70, 3, 'cukup', '2022-07-21 08:59:17', '2022-07-21 08:59:17'),
(26, 71, 1, 'sangat buruk', '2022-07-22 01:28:55', '2022-07-22 01:28:55'),
(27, 71, 2, 'sangat buruk', '2022-07-22 01:28:55', '2022-07-22 01:28:55'),
(28, 71, 3, 'sangat buruk', '2022-07-22 01:28:55', '2022-07-22 01:28:55'),
(44, 77, 1, 'cukup', '2022-07-25 04:58:06', '2022-07-25 04:58:06'),
(45, 77, 2, 'buruk', '2022-07-25 04:58:06', '2022-07-25 04:58:06'),
(46, 77, 3, 'buruk', '2022-07-25 04:58:06', '2022-07-25 04:58:06');

-- --------------------------------------------------------

--
-- Table structure for table `kuisioner_alumnis`
--

CREATE TABLE `kuisioner_alumnis` (
  `id` int(10) UNSIGNED NOT NULL,
  `pertanyaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jawaban_a` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jawaban_b` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jawaban_c` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jawaban_d` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jawaban_e` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kuisioner_alumnis`
--

INSERT INTO `kuisioner_alumnis` (`id`, `pertanyaan`, `jawaban_a`, `jawaban_b`, `jawaban_c`, `jawaban_d`, `jawaban_e`, `created_at`, `updated_at`) VALUES
(1, 'Kapan anda lulus dari Polindra ?', '2018', '2019', '2020', '2021', '2022', '2022-07-26 14:20:24', '2022-07-26 14:20:24'),
(2, 'Apa status anda setelah lulus?', 'Bekerja', 'Menganggur', 'Wirausaha', 'Melanjutkan Studi', 'Berdagang', '2022-07-26 14:24:15', '2022-07-26 14:24:15'),
(3, 'Lama waktu tunggu yang anda perlukan untuk mendapatkan pekerjaan/studi lanjut sejak waktu wisuda ?', '1  - 3 Bulan', '3 - 6 Bulan', '6 - 12 Bulan', 'Lebih dari 1 Tahun', 'Lebih dari 2 tahun', '2022-07-26 14:24:44', '2022-07-26 14:24:44'),
(4, 'Berapa besaran gaji yang diterima setiap bulan?', 'Rp. 300.000 - 1.000.000', '1.000.000 - 2.000.000', '2.000.000 - 4.000.000', '4.000.000 - 6.000.000', '6.000.000 - 10.000.000', '2022-07-26 14:27:03', '2022-07-26 14:27:03');

-- --------------------------------------------------------

--
-- Table structure for table `kuisioner_pengguna_alumnis`
--

CREATE TABLE `kuisioner_pengguna_alumnis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pertanyaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jawaban_a` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jawaban_b` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jawaban_c` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jawaban_d` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jawaban_e` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kuisioner_pengguna_alumnis`
--

INSERT INTO `kuisioner_pengguna_alumnis` (`id`, `pertanyaan`, `jawaban_a`, `jawaban_b`, `jawaban_c`, `jawaban_d`, `jawaban_e`, `created_at`, `updated_at`) VALUES
(1, 'Bagaimana sikap/etika lulusan kami yang bekerja di tempat Anda?', 'sangat baik', 'baik', 'cukup', 'buruk', 'sangat buruk', '2022-07-07 01:13:17', '2022-07-07 01:13:17'),
(2, 'Bagaimana keahlian lulusan kami yang bekerja di tempat Anda berdasarkan bidang ilmunya?', 'sangat baik', 'baik', 'cukup', 'buruk', 'sangat buruk', '2022-07-07 01:13:48', '2022-07-07 01:13:48'),
(3, 'Bagaimana kemampuan berteknologi lulusan kami yang bekerja di tempat Anda?', 'sangat baik', 'baik', 'cukup', 'buruk', 'sangat buruk', '2022-07-07 01:14:17', '2022-07-10 11:45:57'),
(4, 'Bagaimana kemampuan kerjasama lulusan kami yang bekerja di tempat Anda?', 'sangat baik', 'baik', 'cukup', 'buruk', 'sangat buruk', '2022-07-25 13:31:58', '2022-07-25 13:31:58');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_06_29_082359_create_beritas_table', 1),
(6, '2022_07_04_075950_create_kuisioner_alumnis_table', 1),
(7, '2022_07_04_155104_create_kuisioner_pengguna_alumnis_table', 1),
(8, '2022_07_11_081834_create_pengguna_alumnis_table', 2),
(9, '2022_07_14_073233_create_jawaban_pengguna_alumnis_table', 3),
(10, '2022_07_18_164031_create_alumnis_table', 4),
(11, '2022_07_24_123339_create_tentangs_table', 5),
(12, '2022_07_04_075951_create_kuisioner_alumnis_table', 6),
(13, '2022_07_18_164032_create_alumnis_table', 6),
(14, '2022_07_26_205014_create_jawaban_alumnis', 7),
(15, '2022_07_26_205015_create_jawaban_alumnis', 8),
(16, '2022_07_26_205016_create_jawaban_alumnis', 9),
(17, '2022_07_04_075952_create_kuisioner_alumnis_table', 10),
(18, '2022_07_26_205017_create_jawaban_alumnis', 11),
(19, '2022_07_26_205018_create_jawaban_alumnis', 12);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengguna_alumnis`
--

CREATE TABLE `pengguna_alumnis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perusahaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` int(11) NOT NULL,
  `nama_mhs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `th_lulus` int(11) NOT NULL,
  `prodi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengguna_alumnis`
--

INSERT INTO `pengguna_alumnis` (`id`, `nama`, `email`, `perusahaan`, `jabatan`, `alamat`, `nim`, `nama_mhs`, `th_lulus`, `prodi`, `created_at`, `updated_at`) VALUES
(69, 'Fauzi', 'fauzi@gmail.com', 'PT Maju mundur', 'CEO', 'Bekasi', 1403003, 'Agung Maulana', 2017, 'ti', '2022-07-21 05:48:43', '2022-07-21 05:48:43'),
(70, 'Kikis Maulana', 'kikismaulana@gmail.com', 'PT Afedigi', 'Analyst System', 'Jl. Raya Tambak, Karangsong, Indramayu', 1905007, 'Fauziah Herdiyanti', 2023, 'ti', '2022-07-21 08:59:17', '2022-07-21 08:59:17'),
(71, 'Minima', 'banyqinyb@mailinator.com', 'jozenekuqa', 'kedasoly', 'meqejed', 1503070, 'tuvy', 2019, 'Rekayasa Perangkat Lunak', '2022-07-22 01:28:55', '2022-07-22 01:28:55'),
(77, 'Labore', 'tasisebas@mailinator.com', 'nulacaz', 'velyp', 'hiqewavyp', 11, 'haris', 2023, 'Rekayasa Perangkat Lunak', '2022-07-25 04:58:06', '2022-07-25 04:58:06');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `tentangs`
--

CREATE TABLE `tentangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tentangs`
--

INSERT INTO `tentangs` (`id`, `judul`, `isi`, `created_at`, `updated_at`) VALUES
(1, 'Tracer Study', 'Tracer Study atau yang sering disebut sebagai survey alumni atau survey “follow up” adalah studi mengenai lulusan lembaga penyelenggara pendidikan tinggi. Studi ini mampu menyediakan berbagai informasi yang bermanfaat bagi kepentingan evaluasi hasil pendidikan tinggi dan selanjutnya dapat digunakan untuk penyempurnaan dan penjaminan kualitas lembaga pendidikan tinggi yang bersangkutan. Tracer Study  juga bermanfaat dalam menyediakan informasi penting mengenai hubungan antara pendidikan tinggi dan dunia kerja professional, menilai relevansi pendidikan tinggi, informasi bagi pemangku kepentingan (stakeholders), dan kelengkapan persyaratan bagi akreditasi pendidikan tinggi.', '2022-07-24 06:12:55', '2022-07-24 06:12:55'),
(2, 'Manfaat Tracer Study', 'Manfaat Tracer Study tidak terbatas pada perguruan tinggi saja, tetapi lebih jauh lagi dapat memberikan informasi penting mengenai hubungan antara dunia pendidikan tinggi dengan dunia usaha dan industri. Tracer Study dapat menyajikan informasi mendalam dan rinci mengenai kecocokan kerja baik horisontal (antar berbagai bidang ilmu) maupun vertikal (antar berbagai level/strata pendidikan).\r\nDengan demikian, Tracer Study dapat ikut membantu mengatasi permasalahan kesenjangan kesempatan kerja dan upaya perbaikannya. Bagi perguruan tinggi, informasi mengenai kompetensi yang relevan bagi dunia usaha dan industri dapat membantu upaya perbaikan kurikulum dan sistem pembelajaran. Di sisi lain, dunia usaha dan industri dapat melihat ke dalam perguruan tinggi melalui Tracer Study, dan dengan demikian dapat menyiapkan diri dengan menyediakan pelatihan-pelatihan yang lebih relevan bagi sarjana pencari kerja baru.', '2022-07-24 06:13:34', '2022-07-24 09:07:02'),
(5, 'Tujuan Tracer Study', 'Tracer Study bertujuan untuk mengetahui hasil pendidikan dalam bentuk transisi dari dunia pendidikan tinggi ke dunia usaha dan industri, keluaran pendidikan berupa penilaian diri terhadap penguasaan dan pemerolehan kompetensi, proses pendidikan berupa evaluasi proses pembelajaran dan kontribusi pendidikan tinggi terhadap pemerolehan kompetensi serta input pendidikan berupa penggalian lebih lanjut terhadap informasi lulusan.', '2022-07-24 06:58:26', '2022-07-24 06:58:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` enum('admin','mahasiswa') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Ciaran Graham', 'misovuho@mailinator.com', NULL, '$2y$10$WV3ltBPQfTAG6eWwXKk12eCBoEWf.Mv3eTS.3jTuXYhq3prAsnjvG', 'admin', NULL, '2022-07-05 06:40:39', '2022-07-05 06:40:39'),
(3, 'admin', 'admin@gmail.com', NULL, '$2y$10$kbIWLViO/UFtgscKk5emzutIbVskZDSGNrM8NlLO9xBwRBOoEw.46', 'admin', NULL, '2022-07-05 06:41:48', '2022-07-05 06:41:48'),
(4, 'azhari', 'azhari@gmail.com', NULL, '$2y$10$thIlH9gtu9pZkqle.8b6P.8cFH765pDnwcobg7Di5XqfyOx0znKOe', 'admin', NULL, '2022-07-06 06:41:55', '2022-07-06 06:41:55'),
(5, 'nanang', 'nanangcoki@gmail.com', NULL, '$2y$10$cp0x8C36UgKEVcC6K5nUuOfcKK7CM8VnsVdkRTJrVpYSf9V6JuNbC', 'admin', NULL, '2022-07-20 11:02:44', '2022-07-20 11:02:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumnis`
--
ALTER TABLE `alumnis`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `beritas_penulis_id_foreign` (`penulis_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jawaban_alumnis`
--
ALTER TABLE `jawaban_alumnis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jawaban_alumnis_nim_foreign` (`nim`),
  ADD KEY `jawaban_alumnis_id_pertanyaan_foreign` (`id_pertanyaan`);

--
-- Indexes for table `jawaban_pengguna_alumnis`
--
ALTER TABLE `jawaban_pengguna_alumnis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jawaban_pengguna_alumnis_id_user_foreign` (`id_user`),
  ADD KEY `jawaban_pengguna_alumnis_id_pertanyaan_foreign` (`id_pertanyaan`);

--
-- Indexes for table `kuisioner_alumnis`
--
ALTER TABLE `kuisioner_alumnis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kuisioner_pengguna_alumnis`
--
ALTER TABLE `kuisioner_pengguna_alumnis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pengguna_alumnis`
--
ALTER TABLE `pengguna_alumnis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `tentangs`
--
ALTER TABLE `tentangs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jawaban_alumnis`
--
ALTER TABLE `jawaban_alumnis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jawaban_pengguna_alumnis`
--
ALTER TABLE `jawaban_pengguna_alumnis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `kuisioner_alumnis`
--
ALTER TABLE `kuisioner_alumnis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kuisioner_pengguna_alumnis`
--
ALTER TABLE `kuisioner_pengguna_alumnis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `pengguna_alumnis`
--
ALTER TABLE `pengguna_alumnis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tentangs`
--
ALTER TABLE `tentangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `beritas`
--
ALTER TABLE `beritas`
  ADD CONSTRAINT `beritas_penulis_id_foreign` FOREIGN KEY (`penulis_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `jawaban_alumnis`
--
ALTER TABLE `jawaban_alumnis`
  ADD CONSTRAINT `jawaban_alumnis_id_pertanyaan_foreign` FOREIGN KEY (`id_pertanyaan`) REFERENCES `kuisioner_alumnis` (`id`),
  ADD CONSTRAINT `jawaban_alumnis_nim_foreign` FOREIGN KEY (`nim`) REFERENCES `alumnis` (`nim`);

--
-- Constraints for table `jawaban_pengguna_alumnis`
--
ALTER TABLE `jawaban_pengguna_alumnis`
  ADD CONSTRAINT `jawaban_pengguna_alumnis_id_pertanyaan_foreign` FOREIGN KEY (`id_pertanyaan`) REFERENCES `kuisioner_pengguna_alumnis` (`id`),
  ADD CONSTRAINT `jawaban_pengguna_alumnis_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `pengguna_alumnis` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
