-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2025 at 09:27 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdihsaniyah`
--

-- --------------------------------------------------------

--
-- Table structure for table `angkatans`
--

CREATE TABLE `angkatans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `angkatan` varchar(255) NOT NULL,
  `total_kuota` int(11) NOT NULL,
  `kuota_tersisa` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `angkatans`
--

INSERT INTO `angkatans` (`id`, `angkatan`, `total_kuota`, `kuota_tersisa`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'Tahun Ajaran 2026/2027', 300, 15, 'Alhamdulillah! Sudah terisi 3 kelas dan kuota tersisa 1 kelas.', '2025-08-20 21:00:04', '2025-08-20 21:00:04'),
(2, 'Tahun Ajaran 2027/2028', 300, 290, 'Pendaftaran dibuka lebih awal. Segera daftarkan Putra-Putri anda.', '2025-08-20 21:02:10', '2025-08-20 21:02:26'),
(3, 'Tahun Ajaran 2028/2029', 300, 298, 'Pendaftaran dibuka lebih awal. Segera daftarkan Putra-Putri anda.', '2025-08-20 21:02:47', '2025-08-20 21:02:47');

-- --------------------------------------------------------

--
-- Table structure for table `deskripsis`
--

CREATE TABLE `deskripsis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `deskripsi` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deskripsis`
--

INSERT INTO `deskripsis` (`id`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'SD Ihsaniyah 1 Kota Tegal didaulat menjadi Sekolah Rujukan Jenjang Sekolah Dasar oleh Pemerintah Kota Tegal dan Dinas Pendidikan dan Kebudayaan Kota Tegal. Alhamdulillah Terima Kasih atas doa, dukungan dan usaha kita semua sehingga SD Ihsaniyah 1 Kota Tegal berhasil meraih predikat tersebut.', '2025-08-21 03:14:38', '2025-08-21 03:14:38');

-- --------------------------------------------------------

--
-- Table structure for table `ekstrakulikulers`
--

CREATE TABLE `ekstrakulikulers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `kategori` enum('Seni & Akademik','Olahraga & Kepemimpinan') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ekstrakulikulers`
--

INSERT INTO `ekstrakulikulers` (`id`, `judul`, `kategori`, `created_at`, `updated_at`) VALUES
(1, 'Drum Band', 'Seni & Akademik', '2025-08-20 20:32:26', '2025-08-20 20:32:26'),
(2, 'English Club', 'Seni & Akademik', '2025-08-20 20:32:37', '2025-08-20 20:32:37'),
(3, 'Kaligrafi', 'Seni & Akademik', '2025-08-20 20:32:45', '2025-08-20 20:32:45'),
(4, 'Mathematics Club', 'Seni & Akademik', '2025-08-20 20:32:55', '2025-08-20 20:32:55'),
(5, 'Melukis', 'Seni & Akademik', '2025-08-20 20:33:03', '2025-08-20 20:33:03'),
(6, 'Rebana', 'Seni & Akademik', '2025-08-20 20:33:11', '2025-08-20 20:33:11'),
(7, 'Science Club & Karya Ilmiah', 'Seni & Akademik', '2025-08-20 20:33:20', '2025-08-20 20:33:20'),
(8, 'Tari', 'Seni & Akademik', '2025-08-20 20:33:27', '2025-08-20 20:33:27'),
(9, 'Tilawah', 'Seni & Akademik', '2025-08-20 20:33:35', '2025-08-20 20:33:35'),
(10, 'Archery Club', 'Olahraga & Kepemimpinan', '2025-08-20 20:33:44', '2025-08-20 20:33:44'),
(11, 'Futsal', 'Olahraga & Kepemimpinan', '2025-08-20 20:33:55', '2025-08-20 20:33:55'),
(12, 'Karate', 'Olahraga & Kepemimpinan', '2025-08-20 20:34:02', '2025-08-20 20:34:02'),
(13, 'Kepanduan / Pramuka', 'Olahraga & Kepemimpinan', '2025-08-20 20:34:11', '2025-08-20 20:34:11'),
(14, 'Renang', 'Olahraga & Kepemimpinan', '2025-08-20 20:34:19', '2025-08-20 20:34:19'),
(15, 'Sepak Takraw', 'Olahraga & Kepemimpinan', '2025-08-20 20:34:26', '2025-08-20 20:34:26'),
(16, 'Tenis Meja', 'Olahraga & Kepemimpinan', '2025-08-20 20:34:34', '2025-08-20 20:34:34');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `foto` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id`, `foto`, `judul`, `created_at`, `updated_at`) VALUES
(1, 'fasilitas/MO0VnTPV8MTh0VrGAP0eIO1qEiHtBGaJ8AG66n7g.jpg', 'Ruang kelas nyaman, bersih dan ber AC', '2025-08-20 20:27:21', '2025-08-20 20:27:21'),
(2, 'fasilitas/HQ4ondAuUyILQF1ADLgylB5jzGaEOLSS4PkYah2D.jpg', 'Lab komputer', '2025-08-20 20:27:33', '2025-08-20 20:27:33'),
(3, 'fasilitas/T1TXq5WaJZ5EoWRVnMrzrmNkMBliQTylkBwLOmja.jpg', 'Lab Bahasa', '2025-08-20 20:27:45', '2025-08-20 20:27:45'),
(4, 'fasilitas/5QQhPz0UlO25IGq0yqquSU9WU3dYBAZ0Off6aHED.jpg', 'Perpusatakaan dengan akreditasi A', '2025-08-20 20:29:04', '2025-08-20 20:29:04'),
(5, 'fasilitas/qrbDrcpBeyuGVHuEgPNkyB9MNNAdx9B5cnH3MPPG.jpg', 'Taman edukasi', '2025-08-20 20:29:14', '2025-08-20 20:29:14'),
(6, 'fasilitas/dIg9O6rvmz74BXhNfIAFDAnh93uWNTZnPqYkjoRK.png', 'Gazebo', '2025-08-20 20:29:24', '2025-08-20 20:29:24'),
(7, 'fasilitas/IlDIlI5Prp7ycf2tDEngNNhvaMIONAbG5zXlaoq4.jpg', 'Tempat cuci tangan', '2025-08-20 20:29:35', '2025-08-20 20:29:35'),
(8, 'fasilitas/t4fQ0W6rbM5yYWb0EiB8jO5MTbqP4EDNu1hAfR0v.jpg', 'Kantin sehat bersertifikat BPOM Gambar Fasilitas', '2025-08-20 20:29:54', '2025-08-20 20:29:54'),
(9, 'fasilitas/PQXlRWigSQd6mYa2mhEegdLyFSRYFibNKDtqCajq.jpg', 'Toilet bersih', '2025-08-20 20:30:04', '2025-08-20 20:30:04');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas_lainnyas`
--

CREATE TABLE `fasilitas_lainnyas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fasilitas_lainnyas`
--

INSERT INTO `fasilitas_lainnyas` (`id`, `judul`, `created_at`, `updated_at`) VALUES
(1, 'Media pembelajaran yang lengkap', '2025-08-23 19:54:17', '2025-08-23 19:54:17'),
(2, 'Ruang Tunggu Siswa', '2025-08-23 19:54:27', '2025-08-23 19:54:27'),
(3, 'Ruang UKS bersih', '2025-08-23 19:54:34', '2025-08-23 19:54:34'),
(4, 'Ruang kelas dilengkapi LCD Proyektor', '2025-08-23 19:54:42', '2025-08-23 19:54:52');

-- --------------------------------------------------------

--
-- Table structure for table `footers`
--

CREATE TABLE `footers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `deskripsi_sekolah` text NOT NULL,
  `kalimat_ajakan` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `foto_ekstrakulikulers`
--

CREATE TABLE `foto_ekstrakulikulers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `foto_ekstrakulikulers`
--

INSERT INTO `foto_ekstrakulikulers` (`id`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'ekskuls/v7uRQHPTs5begCMM4tArYNP7uTHHlH9nYO4FH9ZC.jpg', '2025-08-21 03:30:39', '2025-08-20 20:31:21'),
(2, 'ekskuls/y9TZsDpFSKZCCKOftNfIb87ic82YdBtP0AhV7wrY.jpg', '2025-08-21 03:30:58', '2025-08-20 20:31:32'),
(3, 'ekskuls/WhCCGRE0kSjyvFHB0hFdL9uMVWNKxkhyftqJtbKe.jpg', '2025-08-21 03:30:58', '2025-08-20 20:31:37');

-- --------------------------------------------------------

--
-- Table structure for table `foto_kurikulums`
--

CREATE TABLE `foto_kurikulums` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `foto_kurikulums`
--

INSERT INTO `foto_kurikulums` (`id`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'kurikulums/MIUV44qGX9ofe5VRz6KEWDhzBtaKCG5fa7wuIY0M.jpg', '2025-08-21 02:57:18', '2025-08-20 19:58:08'),
(2, 'kurikulums/ZHAbs3Ll8PJ5p0nf8hlSuKFAR6hnyrQFdw4j2dt6.jpg', '2025-08-21 02:57:18', '2025-08-20 19:58:23'),
(3, 'kurikulums/PmA9sIktVsstaE5TObeRkBpDGWzvkt0v6hPWZfpT.jpg', '2025-08-21 02:57:35', '2025-08-20 19:58:45');

-- --------------------------------------------------------

--
-- Table structure for table `foto_prestasis`
--

CREATE TABLE `foto_prestasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `foto_prestasis`
--

INSERT INTO `foto_prestasis` (`id`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'prestasis/OiRnFmN6v7hN1sDR7EAohekBkOiwdyw5VuwTcaZS.jpg', '2025-08-21 03:36:41', '2025-08-20 20:38:07'),
(2, 'prestasis/H1GraFk7Qx08Uj2tlX6VHahJjiZRdTm2YlOWkodU.jpg', '2025-08-21 03:36:41', '2025-08-20 20:38:19'),
(3, 'prestasis/4I9HgJPCJk675sBoOAVcdpIfWuvhb7VfML5ZVqif.jpg', '2025-08-21 03:36:41', '2025-08-20 20:38:23');

-- --------------------------------------------------------

--
-- Table structure for table `foto_tentangs`
--

CREATE TABLE `foto_tentangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `foto_tentangs`
--

INSERT INTO `foto_tentangs` (`id`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'tentangs/RUeMejDZEs5ePt8m91eeyVbGbvzCr92FrKmibQfU.jpg', '2025-08-21 03:09:53', '2025-08-20 20:10:57'),
(2, 'tentangs/NazAq4GaTPDQd3gejhQxQHNjSGBZwpagckgDEyJt.jpg', '2025-08-21 03:09:53', '2025-08-20 20:13:13'),
(3, 'tentangs/KFC29TExYNfXq3J5nhcXnKOh5y9rq7v6t7H8O0Hz.jpg', '2025-08-21 03:09:53', '2025-08-20 20:13:20');

-- --------------------------------------------------------

--
-- Table structure for table `jumbotrons`
--

CREATE TABLE `jumbotrons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `foto` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jumbotrons`
--

INSERT INTO `jumbotrons` (`id`, `foto`, `judul`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'jumbotrons/eYcykqzdYoBpWbUQy8YaVvsEz9QgArzWJJ8UtGu8.jpg', 'Welcome to SD Ihsaniyah 1 Kota Tegal', 'Terwujudnya insan kamil yang memiliki aqidah yang shohihah, ibadah yang salimah, akhlak yang karimah, akal yang dzakiyah dan tsaqofatul bi\'ah', '2025-08-20 19:54:16', '2025-08-20 19:54:16'),
(2, 'jumbotrons/OBZ2Pnkj76usQH8RgmzmylesduGRWpxRvSna0B9z.jpg', 'PPDB 2026 – 2029: Pendaftaran Sudah Dibuka!', 'Tidak hanya tahun 2026/2027, pendaftaran untuk 2027/2028 dan 2028/2029 juga sudah bisa dilakukan lebih awal. Cek jadwal, persyaratan, dan panduan lengkap agar anak Anda siap menempuh pendidikan tanpa hambatan.', '2025-08-20 19:55:11', '2025-08-20 19:55:11');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatans`
--

CREATE TABLE `kegiatans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `foto` varchar(255) NOT NULL,
  `foto2` varchar(255) DEFAULT NULL,
  `foto3` varchar(255) DEFAULT NULL,
  `foto4` varchar(255) DEFAULT NULL,
  `foto5` varchar(255) DEFAULT NULL,
  `judul` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `deskripsi` longtext NOT NULL,
  `unggulan` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kegiatans`
--

INSERT INTO `kegiatans` (`id`, `foto`, `foto2`, `foto3`, `foto4`, `foto5`, `judul`, `tanggal`, `deskripsi`, `unggulan`, `created_at`, `updated_at`) VALUES
(1, 'kegiatans/dwp7t1iqfhgBW7n4NIiLFIeIw6JCVNmyOxUQPRyR.jpg', NULL, NULL, NULL, NULL, 'Profil SD Ihsaniyah 1 Kota Tegal', '2025-08-21', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia magnam, odit, ratione quasi asperiores maxime,\r\nblanditiis expedita cum facere quisquam porro delectus eum dolores ullam odio officiis sequi reprehenderit deserunt\r\nharum nulla ipsum! Eligendi facilis vero officia deserunt deleniti, blanditiis illum laborum molestias at quibusdam\r\nullam quia ipsam tenetur earum laboriosam. Deserunt adipisci quae numquam hic, alias excepturi maiores nemo. Minima\r\nmaiores quos porro rem voluptate temporibus sequi itaque quas. Quae placeat recusandae delectus minus, ea dignissimos\r\nincidunt laudantium a?', 1, '2025-08-20 20:51:16', '2025-08-25 23:32:27'),
(2, 'kegiatans/6yhygm9nuM99At77hgxzonvLfMGKhmZqFoY9I0LM.jpg', NULL, NULL, NULL, NULL, 'asd', '2025-08-22', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia magnam, odit, ratione quasi asperiores maxime,\r\nblanditiis expedita cum facere quisquam porro delectus eum dolores ullam odio officiis sequi reprehenderit deserunt\r\nharum nulla ipsum! Eligendi facilis vero officia deserunt deleniti, blanditiis illum laborum molestias at quibusdam\r\nullam quia ipsam tenetur earum laboriosam. Deserunt adipisci quae numquam hic, alias excepturi maiores nemo. Minima\r\nmaiores quos porro rem voluptate temporibus sequi itaque quas. Quae placeat recusandae delectus minus, ea dignissimos\r\nincidunt laudantium a?', 0, '2025-08-20 20:54:13', '2025-08-25 23:32:20'),
(3, 'kegiatans/8ckjwWOzQlaAEAgz1GXYmjHvxfSh5au5W9A1hYy3.jpg', NULL, 'kegiatans/l6UW6himaDXwsXI1RFiBpcUNhcK2if3FbLbiNN5S.jpg', NULL, NULL, 'asdasdasd', '2025-08-15', '✨SANTUNAN RAMADHAN✨\r\n\r\nBerbagi Menebar Kebaikan\r\n\r\nRamadhan adalah waktu yang tepat untuk peduli dan berbagi. Berbagi bukan tentang seberapa banyak yang kita beri, tapi seberapa tulus kita memberi. Kebahagiaan sejati adalah saat kita bisa berbagi dengan sesama. Semoga berkah Ramadhan selalu menyertai.🤲🏻\r\n\r\nJazakumullah khairan katsiiron, semoga segala amal kebaikan kita mendapat Ridho dari Allah dan bisa menjadikan amalan yang akan membawa kita masuk syurga Allah SWT. Aminnn..🤲\r\n\r\nSemoga semua sodaqoh kita melalui Santunan Ramadhan akan membawa keberkahan dunia dan akhirat. Aamiin', 1, '2025-08-20 20:57:05', '2025-08-25 10:53:22'),
(4, 'kegiatans/DvUAISLCPBJR5WhBY74A5SmDmtN17U7AwOeZkQTE.jpg', 'kegiatans/H3S6lvf7h8JYGie3YuxN16BVZcLwAyhHRaw4mS0Q.jpg', 'kegiatans/YQEW0QXO5SlM9vLiuh8LQssbrGi1rCB8tW5Env08.png', 'kegiatans/I6s1y5sqydFyuF75h5l2yoxuOJaQwWgercWgSQWC.jpg', 'kegiatans/WdrKxoFYmxckovG3bP7q9e8yFAHfd2urxbjVA7q6.jpg', 'Profil SD Ihsaniyah 1 Kota Tegal', '2025-08-20', 'aasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 1, '2025-08-25 10:33:55', '2025-08-25 23:11:04'),
(5, 'kegiatans/1B0HkQgZK9tYEEVDITqj760m2KbPunOgFFLHwVvK.jpg', NULL, NULL, NULL, NULL, 'Profil SD Ihsaniyah 1 Kota Tegal', '2025-08-14', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Error ratione expedita quae similique quis cupiditate exercitationem? Iusto facilis et impedit, exercitationem ullam quaerat esse non optio sunt, sed reiciendis ea officia eum? Eius non delectus reprehenderit eos suscipit nemo soluta officiis libero doloribus! Modi quidem magnam vitae ducimus eius iure!', 0, '2025-08-25 10:34:21', '2025-08-25 23:31:58');

-- --------------------------------------------------------

--
-- Table structure for table `kontaks`
--

CREATE TABLE `kontaks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `whatsapp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `jam_kerja` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kontaks`
--

INSERT INTO `kontaks` (`id`, `whatsapp`, `email`, `telepon`, `jam_kerja`, `instagram`, `facebook`, `youtube`, `created_at`, `updated_at`) VALUES
(1, '6287899101232', 'webihsaniyah1@gmail.com', '0283 – 341942', 'Senin-Jumat 07:00-14:30 WIB', 'ihsaniyah', 'ihsaniyaha', 'ihsaniyah', '2025-08-21 03:57:59', '2025-08-25 07:39:59');

-- --------------------------------------------------------

--
-- Table structure for table `kurikulums`
--

CREATE TABLE `kurikulums` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kurikulums`
--

INSERT INTO `kurikulums` (`id`, `judul`, `created_at`, `updated_at`) VALUES
(1, 'Nasional', '2025-08-20 20:01:05', '2025-08-20 20:01:05'),
(2, 'Diniyah', '2025-08-20 20:01:13', '2025-08-20 20:01:13'),
(3, 'Internasional', '2025-08-20 20:01:27', '2025-08-20 20:01:27');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2025_08_14_095612_create_jumbotrons_table', 1),
(6, '2025_08_15_060740_create_profils_table', 1),
(7, '2025_08_15_063952_create_kurikulums_table', 1),
(8, '2025_08_15_064001_create_unggulans_table', 1),
(9, '2025_08_15_064130_create_prestasi_sections_table', 1),
(10, '2025_08_15_064155_create_testimonis_table', 1),
(11, '2025_08_15_064217_create_pertanyaans_table', 1),
(12, '2025_08_15_125901_create_deskripsis_table', 1),
(13, '2025_08_15_125906_create_visis_table', 1),
(14, '2025_08_15_125909_create_misis_table', 1),
(15, '2025_08_15_125914_create_tujuans_table', 1),
(16, '2025_08_15_170802_create_programs_table', 1),
(17, '2025_08_15_170808_create_fasilitas_table', 1),
(18, '2025_08_15_235304_create_foto_ekstrakulikulers_table', 1),
(19, '2025_08_15_235304_create_foto_kurikulums_table', 1),
(20, '2025_08_15_235304_create_foto_tentangs_table', 1),
(21, '2025_08_15_235321_create_ekstrakulikulers_table', 1),
(22, '2025_08_16_143000_create_foto_prestasis_table', 1),
(23, '2025_08_16_143007_create_prestasis_table', 1),
(24, '2025_08_16_211708_create_kegiatans_table', 1),
(25, '2025_08_17_050850_create_kontaks_table', 1),
(26, '2025_08_17_181459_create_pesans_table', 1),
(27, '2025_08_18_025915_create_angkatans_table', 1),
(28, '2025_08_18_060802_create_pendaftars_table', 1),
(29, '2025_08_18_170019_create_footers_table', 1),
(30, '2025_08_24_024728_create_fasilitas_lainnyas_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `misis`
--

CREATE TABLE `misis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `misis`
--

INSERT INTO `misis` (`id`, `judul`, `created_at`, `updated_at`) VALUES
(1, 'Meningkatkan kualitas iman dan taqwa setiap pribadi peserta didik.', '2025-08-20 20:16:35', '2025-08-20 20:16:35'),
(2, 'Menanamkan aqidah, ibadah, dan akhlak sesuai dengan Al-Qur’an dan As-Sunnah.', '2025-08-20 20:16:44', '2025-08-20 20:16:44'),
(3, 'Mengoptimalkan proses pembelajaran dan bimbingan bagi peserta didik.', '2025-08-20 20:16:51', '2025-08-20 20:16:51'),
(4, 'Mengembangkan pengetahuan di bidang IPTEK, bahasa, bakat, dan minat peserta didik.', '2025-08-20 20:16:58', '2025-08-20 20:16:58'),
(5, 'Menjalin kerja sama yang harmonis antara warga sekolah dengan lingkungan.', '2025-08-20 20:17:09', '2025-08-20 20:17:09');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pendaftars`
--

CREATE TABLE `pendaftars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nik` varchar(255) NOT NULL,
  `nisn` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `nama_panggilan` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `agama` enum('islam','kristen','katolik','hindu','buddha','konghucu') NOT NULL,
  `anak_ke` varchar(255) NOT NULL,
  `jumlah_saudara` varchar(255) NOT NULL,
  `bahasa` varchar(255) NOT NULL,
  `berat` int(11) NOT NULL,
  `tinggi` int(11) NOT NULL,
  `riwayat_penyakit` varchar(255) NOT NULL,
  `hobi` varchar(255) NOT NULL,
  `bakat` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `angkatan_id` bigint(20) UNSIGNED NOT NULL,
  `jenis_kelas` enum('intensif','bilingual') NOT NULL,
  `asal_pendidikan` enum('tk','ra','kb','sps','paud','tpa') NOT NULL,
  `nama_sekolah` varchar(255) NOT NULL,
  `alamat_sekolah` text NOT NULL,
  `nama_ayah` varchar(255) NOT NULL,
  `nik_ayah` varchar(255) NOT NULL,
  `tempat_lahir_ayah` varchar(255) NOT NULL,
  `tanggal_lahir_ayah` date NOT NULL,
  `pendidikan_ayah` varchar(255) NOT NULL,
  `pekerjaan_ayah` varchar(255) NOT NULL,
  `penghasilan_ayah` varchar(255) NOT NULL,
  `alamat_ayah` text NOT NULL,
  `no_telepon_ayah` varchar(255) NOT NULL,
  `email_ayah` varchar(255) NOT NULL,
  `nama_ibu` varchar(255) NOT NULL,
  `nik_ibu` varchar(255) NOT NULL,
  `tempat_lahir_ibu` varchar(255) NOT NULL,
  `tanggal_lahir_ibu` date NOT NULL,
  `pendidikan_ibu` varchar(255) NOT NULL,
  `pekerjaan_ibu` varchar(255) NOT NULL,
  `penghasilan_ibu` varchar(255) NOT NULL,
  `alamat_ibu` text NOT NULL,
  `no_telepon_ibu` varchar(255) NOT NULL,
  `email_ibu` varchar(255) NOT NULL,
  `berkas_kk` varchar(255) NOT NULL,
  `berkas_akta` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `status` enum('Menunggu','Tidak Diterima','Diterima','') DEFAULT NULL,
  `berkas_psikotes` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pendaftars`
--

INSERT INTO `pendaftars` (`id`, `nik`, `nisn`, `nama_lengkap`, `nama_panggilan`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `anak_ke`, `jumlah_saudara`, `bahasa`, `berat`, `tinggi`, `riwayat_penyakit`, `hobi`, `bakat`, `alamat`, `angkatan_id`, `jenis_kelas`, `asal_pendidikan`, `nama_sekolah`, `alamat_sekolah`, `nama_ayah`, `nik_ayah`, `tempat_lahir_ayah`, `tanggal_lahir_ayah`, `pendidikan_ayah`, `pekerjaan_ayah`, `penghasilan_ayah`, `alamat_ayah`, `no_telepon_ayah`, `email_ayah`, `nama_ibu`, `nik_ibu`, `tempat_lahir_ibu`, `tanggal_lahir_ibu`, `pendidikan_ibu`, `pekerjaan_ibu`, `penghasilan_ibu`, `alamat_ibu`, `no_telepon_ibu`, `email_ibu`, `berkas_kk`, `berkas_akta`, `foto`, `status`, `berkas_psikotes`, `created_at`, `updated_at`) VALUES
(14, '14124124', '451', '45', '123', '321', '2025-08-08', 'laki-laki', 'kristen', '231', '231', '312', 231, 231, '213', '321', '321', '231', 1, 'bilingual', 'ra', '231', '321', '312', '321', '321', '2025-08-14', '312', '321', '312', '312', '231', 'astronouttanparoket@gmail.com', '123', '123', '321', '2025-08-07', '231', '123', '231', '213', '321', 'sd@gasdf.com', 'pendaftar/kk/nHTHlDK1ycPQtIqThxsDjSiVGaQTWX67y6w7iVN4.pdf', 'pendaftar/akta/q2ZesXORiOnehDfIvc4uNb8rBck1b5ipVxlgJYyQ.pdf', 'pendaftar/foto/v7pN1J1Fleia26xy9b1e4uFppERxerx7MKmZp6kn.jpg', 'Diterima', NULL, '2025-08-24 06:05:30', '2025-08-24 06:05:30'),
(15, '2434123', '12334235', '123', '123', '231', '2025-08-27', 'perempuan', 'islam', '123', '132', '321', 23, 231, '213', '231', '231', '231', 2, 'intensif', 'kb', '231', '321', '231', '123', '231', '2025-08-13', '312', '321', '231', '312', '312', 'astronouttanparoket@gmail.com', '231', '213', '231', '2025-08-05', '231', '312', '231', '213', '213', 'sd@gasdf.com', 'pendaftar/kk/4tvLt9M5rSEgXwhUiixuPS01yLt2WHO9t496pg31.pdf', 'pendaftar/akta/ftcFcv4sA4ALaACIKbhYVWCpahipMBqOe7ympeTM.pdf', 'pendaftar/foto/tzJ6SEUFG8HTPtoawRLApqAphG4laMec8PIbRk0c.jpg', 'Diterima', 'pendaftar/kk/5gzXStLllMLDvjemsqFIyzhNF89k06rg4HwmdLPE.pdf', '2025-08-24 06:06:56', '2025-08-26 00:26:18');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `pertanyaans`
--

CREATE TABLE `pertanyaans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pertanyaans`
--

INSERT INTO `pertanyaans` (`id`, `judul`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'Kami ingin mendengar sesuatu darimu', 'Lorem ipsum dolor sit amet consectetur adipisicing.', '2025-08-21 03:08:48', '2025-08-20 20:09:12');

-- --------------------------------------------------------

--
-- Table structure for table `pesans`
--

CREATE TABLE `pesans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subjek` varchar(255) NOT NULL,
  `pesan` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesans`
--

INSERT INTO `pesans` (`id`, `nama`, `email`, `subjek`, `pesan`, `created_at`, `updated_at`) VALUES
(1, 'Mas budi', 'doktortj@gmail.com', 'as', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis eveniet repellendus sit pariatur. Qui, illo. Doloribus blanditiis iusto distinctio sapiente?', '2025-08-20 21:03:39', '2025-08-20 21:03:39');

-- --------------------------------------------------------

--
-- Table structure for table `prestasis`
--

CREATE TABLE `prestasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `kategori` enum('internasional','nasional','provinsi','kota') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prestasis`
--

INSERT INTO `prestasis` (`id`, `judul`, `kategori`, `created_at`, `updated_at`) VALUES
(1, '19’th Honorable mention OSN Sains Tingkat Nasional 2022', 'nasional', '2025-08-20 20:39:56', '2025-08-20 20:39:56'),
(2, 'Juara 1 FLS2N Cabang Pantomim Tingkat Kota 2022', 'kota', '2025-08-20 20:40:07', '2025-08-20 20:40:07'),
(3, 'Juara 1 FLS2N Cabang Pantomim Tingkat Kota 2022', 'kota', '2025-08-20 20:40:15', '2025-08-20 20:40:15'),
(4, 'Juara 1 Karate Tingkat Provinsi 2022', 'provinsi', '2025-08-20 20:41:16', '2025-08-20 20:41:16'),
(5, 'Juara 1 Mapsi Cabang Tilawah Putra Tingkat Kota 2022', 'kota', '2025-08-20 20:41:25', '2025-08-20 20:41:25'),
(6, 'Juara 1 Mapsi Cabang Tilawah Putri Tingkat Kota 2022', 'kota', '2025-08-20 20:41:36', '2025-08-20 20:41:36'),
(7, 'Juara 1 Pekan Seni Cabang Menari Putra Tingkat Kecamatan 2022', 'kota', '2025-08-20 20:41:44', '2025-08-20 20:41:44'),
(8, 'Juara 1 Pekan Seni Cabang Puisi Putra Tingkat Kota 2022', 'kota', '2025-08-20 20:41:55', '2025-08-20 20:41:55'),
(9, 'Juara 1 Porsadin Cabang Puisi Islami Tingkat Kota 2022', 'kota', '2025-08-20 20:42:04', '2025-08-20 20:42:04'),
(10, 'Juara 1 Porsadin Cabang Puisi Putra Tingkat Kota 2022', 'kota', '2025-08-20 20:42:13', '2025-08-20 20:42:13'),
(11, 'Juara 1 Porsadin Cabang Tahfidzul Qur’an Putri Tingkat Kota 2022', 'kota', '2025-08-20 20:42:23', '2025-08-20 20:42:23'),
(12, 'Juara 1 Porsadin Cabang Tilawah Putra Tingkat Kota 2022', 'kota', '2025-08-20 20:42:31', '2025-08-20 20:42:31'),
(13, 'Juara 1 Porsadin Cabang Tilawah Putri Tingkat Kota 2022', 'kota', '2025-08-20 20:42:39', '2025-08-20 20:42:39'),
(14, 'Juara 2 Dokter Kecil Tingkat Kota 2022', 'kota', '2025-08-20 20:42:47', '2025-08-20 20:42:47'),
(15, 'Juara 2 Mapsi Cabang Kaligrafi Tingkat Kota 2022', 'kota', '2025-08-20 20:42:56', '2025-08-20 20:42:56'),
(16, 'Juara 2 Mapsi Cabang Menyanyi Religi Putri Tingkat Kota 2022', 'kota', '2025-08-20 20:43:06', '2025-08-20 20:43:06'),
(17, 'Juara 2 Pekan Seni Cabang Gambar Bercerita Tingkat Kota 2022', 'kota', '2025-08-20 20:43:14', '2025-08-20 20:43:14'),
(18, 'Juara 2 Pekan Seni Cabang Menyanyi Putri Tingkat Kota 2022', 'kota', '2025-08-20 20:43:22', '2025-08-20 20:43:22'),
(20, 'Juara 3 Tunas Bahasa Ibu Cabang Dongeng Tegalan Tingkat Kota 2022', 'kota', '2025-08-20 20:43:47', '2025-08-20 20:43:47'),
(21, 'Juara harapan 2 Porsadin Cabang Tahfidzul Qur\'an tingkat Provinsi 2022', 'kota', '2025-08-20 20:43:56', '2025-08-20 20:43:56');

-- --------------------------------------------------------

--
-- Table structure for table `prestasi_sections`
--

CREATE TABLE `prestasi_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prestasi_sections`
--

INSERT INTO `prestasi_sections` (`id`, `judul`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'Prestasi SD Ihsaniyah 1 Kota Tegal', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.a', '2025-08-21 03:04:01', '2025-08-20 20:04:55');

-- --------------------------------------------------------

--
-- Table structure for table `profils`
--

CREATE TABLE `profils` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profils`
--

INSERT INTO `profils` (`id`, `judul`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'Profil SD Ihsaniyah 1 Kota Tegal', 'SD Ihsaniyah 1 Kota Tegal merupakan solusi alternatif bagi orang tua yang mencari sekolah dengan penanaman karakter kuat. SD Ihsaniyah 1 Kota Tegal mengajarkan anak-anak untuk teguh kepada Al Qur\'an dan Hadist, juga selalu berusaha untuk menguasai Sains, Teknologi dan bahasa asing, serta yang tak kalah penting selalu mengedepankan akhlakul karimah.', '2025-08-21 02:56:57', '2025-08-21 02:57:02');

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `foto` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `foto`, `judul`, `created_at`, `updated_at`) VALUES
(1, 'programs/PDJ6cOPzTUMpTvoCBYwcfL9ep60E67FIFwiD3zWC.jpg', 'Tahfidz', '2025-08-20 20:21:00', '2025-08-20 20:21:00'),
(2, 'programs/s7yD4d1FsJJB01IAKBtHIJFkvBJm6b8Ra5GN6mGs.jpg', 'Program Parenting', '2025-08-20 20:21:20', '2025-08-20 20:21:20'),
(3, 'programs/BGDfBQ9xvJre6ha6uvIfRRq0Qau1TvzkMVszZlzm.jpg', 'Bilingual Program', '2025-08-20 20:21:38', '2025-08-20 20:21:38'),
(4, 'programs/2s7CWZxFtM88c7xc7WkDSZodBTmvrbe8pCI1bQyt.jpg', 'Bimbingan Konseling', '2025-08-20 20:21:52', '2025-08-20 20:21:52'),
(5, 'programs/uC1km6KkyBXI8TyPG8CMnLLqmgMnMnwjmCsqn1uh.jpg', 'MDTA', '2025-08-20 20:22:01', '2025-08-20 20:22:01'),
(6, 'programs/RlRLJCoiP3t2SIqMwAPvcyVKk0XsXrSGH9ATB8CF.jpg', 'TPQ', '2025-08-20 20:22:11', '2025-08-20 20:22:11');

-- --------------------------------------------------------

--
-- Table structure for table `testimonis`
--

CREATE TABLE `testimonis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `foto` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `sebagai` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonis`
--

INSERT INTO `testimonis` (`id`, `foto`, `nama`, `sebagai`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'testimonis/RJis0vuiuqJBjnkMAuqpdmhB1w28zvetlAD7V72D.jpg', 'Osas', 'Alumni 2020', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt', '2025-08-20 20:06:13', '2025-08-20 20:06:13'),
(2, 'testimonis/2xGAVUKHwkwt6seursJmA1ZkjEwZB4LTPMyRlryV.jpg', 'Uvuv', 'Wali Murid', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur possimus praesentium perspiciatis incidunt laboriosam ipsam ab ratione aliquid ipsa similique modi quod tempore, quisquam aut?', '2025-08-20 20:07:51', '2025-08-20 20:07:51'),
(3, 'testimonis/AdLQB8GbFLDJjud2dHOwEDZQaKMvsMSLrn7Vd90h.jpg', 'Kwaza', 'Alumni 2020', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam necessitatibus ex dicta tempora, atque neque deleniti facere.', '2025-08-20 20:08:23', '2025-08-20 20:08:23');

-- --------------------------------------------------------

--
-- Table structure for table `tujuans`
--

CREATE TABLE `tujuans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tujuans`
--

INSERT INTO `tujuans` (`id`, `judul`, `created_at`, `updated_at`) VALUES
(1, 'Mampu mengamalkan seluruh hasil proses pembelajaran dalam kegiatan pembiasaan.', '2025-08-20 20:17:47', '2025-08-20 20:17:47'),
(2, 'Menguasai dasar-dasar ilmu diniyah sebagai bekal untuk mengamalkan ajaran Islam.', '2025-08-20 20:17:58', '2025-08-20 20:18:14'),
(3, 'Menguasai dasar-dasar ilmu pengetahuan dan teknologi.', '2025-08-20 20:18:07', '2025-08-20 20:18:07'),
(4, 'Meraih prestasi akademik maupun non-akademik minimal tingkat kecamatan.', '2025-08-20 20:18:24', '2025-08-20 20:18:24'),
(5, 'Menjadi sekolah pelopor yang diminati masyarakat.', '2025-08-20 20:18:31', '2025-08-20 20:18:31');

-- --------------------------------------------------------

--
-- Table structure for table `unggulans`
--

CREATE TABLE `unggulans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `unggulans`
--

INSERT INTO `unggulans` (`id`, `judul`, `created_at`, `updated_at`) VALUES
(1, 'Tahfidul Qur\'an', '2025-08-20 20:02:13', '2025-08-20 20:02:13'),
(2, 'MDTA Pusaka', '2025-08-20 20:02:20', '2025-08-20 20:02:20'),
(3, 'TPQ', '2025-08-20 20:02:26', '2025-08-20 20:02:26'),
(4, 'Robotic', '2025-08-20 20:02:48', '2025-08-20 20:02:48'),
(5, 'Desain Grafis', '2025-08-20 20:02:57', '2025-08-20 20:02:57'),
(6, 'Olimpiade Club', '2025-08-20 20:03:09', '2025-08-20 20:03:09'),
(7, 'English Program', '2025-08-20 20:03:21', '2025-08-20 20:03:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','super-admin') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'ihsaniyah', 'ihsaniyah@gmail.com', '$2y$10$rz8tYLx.5qfrqjKEpXCVKuk3QrY/7reCiK/R/mh8QHdQkRNWKiU5u', 'super-admin', '2025-08-21 02:53:04', '2025-08-21 02:53:04');

-- --------------------------------------------------------

--
-- Table structure for table `visis`
--

CREATE TABLE `visis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `deskripsi` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visis`
--

INSERT INTO `visis` (`id`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, '“Terwujudnya insan kamil yang memiliki aqidah yang shohihah, ibadah yang salimah, akhlak yang karimah, akal yang dzakiyah dan tsaqofatul bi\'ah”', '2025-08-21 03:16:00', '2025-08-21 03:16:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `angkatans`
--
ALTER TABLE `angkatans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deskripsis`
--
ALTER TABLE `deskripsis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ekstrakulikulers`
--
ALTER TABLE `ekstrakulikulers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fasilitas_lainnyas`
--
ALTER TABLE `fasilitas_lainnyas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footers`
--
ALTER TABLE `footers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foto_ekstrakulikulers`
--
ALTER TABLE `foto_ekstrakulikulers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foto_kurikulums`
--
ALTER TABLE `foto_kurikulums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foto_prestasis`
--
ALTER TABLE `foto_prestasis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foto_tentangs`
--
ALTER TABLE `foto_tentangs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jumbotrons`
--
ALTER TABLE `jumbotrons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kegiatans`
--
ALTER TABLE `kegiatans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontaks`
--
ALTER TABLE `kontaks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kurikulums`
--
ALTER TABLE `kurikulums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `misis`
--
ALTER TABLE `misis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pendaftars`
--
ALTER TABLE `pendaftars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pendaftars_angkatan_id_foreign` (`angkatan_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pertanyaans`
--
ALTER TABLE `pertanyaans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesans`
--
ALTER TABLE `pesans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prestasis`
--
ALTER TABLE `prestasis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prestasi_sections`
--
ALTER TABLE `prestasi_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profils`
--
ALTER TABLE `profils`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonis`
--
ALTER TABLE `testimonis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tujuans`
--
ALTER TABLE `tujuans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unggulans`
--
ALTER TABLE `unggulans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visis`
--
ALTER TABLE `visis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `angkatans`
--
ALTER TABLE `angkatans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `deskripsis`
--
ALTER TABLE `deskripsis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ekstrakulikulers`
--
ALTER TABLE `ekstrakulikulers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `fasilitas_lainnyas`
--
ALTER TABLE `fasilitas_lainnyas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `footers`
--
ALTER TABLE `footers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `foto_ekstrakulikulers`
--
ALTER TABLE `foto_ekstrakulikulers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `foto_kurikulums`
--
ALTER TABLE `foto_kurikulums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `foto_prestasis`
--
ALTER TABLE `foto_prestasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `foto_tentangs`
--
ALTER TABLE `foto_tentangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jumbotrons`
--
ALTER TABLE `jumbotrons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kegiatans`
--
ALTER TABLE `kegiatans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kontaks`
--
ALTER TABLE `kontaks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kurikulums`
--
ALTER TABLE `kurikulums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `misis`
--
ALTER TABLE `misis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pendaftars`
--
ALTER TABLE `pendaftars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pertanyaans`
--
ALTER TABLE `pertanyaans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pesans`
--
ALTER TABLE `pesans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `prestasis`
--
ALTER TABLE `prestasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `prestasi_sections`
--
ALTER TABLE `prestasi_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `profils`
--
ALTER TABLE `profils`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `testimonis`
--
ALTER TABLE `testimonis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tujuans`
--
ALTER TABLE `tujuans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `unggulans`
--
ALTER TABLE `unggulans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visis`
--
ALTER TABLE `visis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pendaftars`
--
ALTER TABLE `pendaftars`
  ADD CONSTRAINT `pendaftars_angkatan_id_foreign` FOREIGN KEY (`angkatan_id`) REFERENCES `angkatans` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
