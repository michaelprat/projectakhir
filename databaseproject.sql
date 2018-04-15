-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2018 at 02:00 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `databaseproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `activations`
--

CREATE TABLE `activations` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `activations`
--

INSERT INTO `activations` (`id`, `user_id`, `code`, `completed`, `completed_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'TrD4Lr7stxz1vyaQehMA0HEEdTULMoEL', 1, '2018-04-09 01:13:29', '2018-04-09 01:13:29', '2018-04-09 01:13:29'),
(2, 2, 'uuA4wRxoiWytgZcBR7lu4cmMQDVRl8AG', 1, '2018-04-09 01:13:29', '2018-04-09 01:13:29', '2018-04-09 01:13:29'),
(3, 3, 'LBcxcDrUrI08Qd1ekfmdG7i9NJ4JrKSF', 1, '2018-04-09 01:13:30', '2018-04-09 01:13:30', '2018-04-09 01:13:30'),
(4, 4, 'RvQ1sAquBskRylcyI7vuejvx53MQhviB', 1, '2018-04-10 06:10:56', '2018-04-10 06:10:56', '2018-04-10 06:10:56'),
(5, 5, 'jUfCSoQCMCkAsT7OolbVPH16ZpQVEHXD', 1, '2018-04-10 06:12:14', '2018-04-10 06:12:14', '2018-04-10 06:12:14'),
(6, 6, 'VHBNNjix4HxACTrzRHVDDgKuQp1g2Wz7', 1, '2018-04-14 09:26:57', '2018-04-14 09:26:57', '2018-04-14 09:26:57'),
(7, 7, '31zUv8VufraLT4qx3z0pZ3Jw7Tvf1UHb', 1, '2018-04-14 21:43:04', '2018-04-14 21:43:04', '2018-04-14 21:43:04'),
(8, 8, 'rqFwwWeLYKfyaHfYv0etQSUBFTbCNmTY', 1, '2018-04-14 21:46:15', '2018-04-14 21:46:15', '2018-04-14 21:46:15');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`) VALUES
(1, 'Buku'),
(2, 'Model-rakit');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_04_09_035158_migrasiproduk', 1),
(4, '2018_04_09_040052_migrasikategori', 2),
(5, '2018_04_09_040313_migrasitransaksi', 3),
(6, '2014_07_02_230147_migration_cartalyst_sentinel', 4),
(7, '2018_04_09_064703_tambahdatauser', 5),
(8, '2018_04_11_054811_tambahdataproduk', 6),
(9, '2018_04_11_060524_tambahdataproduk2', 7),
(10, '2018_04_11_082729_tambahdataproduk3', 8),
(11, '2018_04_14_061752_tambahdataproduk4', 9),
(12, '2018_04_14_113657_tambahdatatrans', 10);

-- --------------------------------------------------------

--
-- Table structure for table `persistences`
--

CREATE TABLE `persistences` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `persistences`
--

INSERT INTO `persistences` (`id`, `user_id`, `code`, `created_at`, `updated_at`) VALUES
(1, 1, 'BQ9wko85uGvHXLXh3aJIIi4Y77yuxxT9', '2018-04-09 01:31:33', '2018-04-09 01:31:33'),
(7, 5, 'gSZgEJkCTLE2Nf48Anc37c6RrEUjME17', '2018-04-10 07:15:34', '2018-04-10 07:15:34'),
(8, 5, 'mgWq5KzD3XzsAn2uASPeUXs5z3ADAwhN', '2018-04-10 23:10:19', '2018-04-10 23:10:19'),
(9, 5, 'WLRx46wue0K4mqVxlyLYa1uHYPcOF9tf', '2018-04-11 06:36:54', '2018-04-11 06:36:54'),
(11, 5, 'pD5J8g3B9Madn4ugHmaL4oQlgEwSZAu3', '2018-04-12 02:45:04', '2018-04-12 02:45:04'),
(12, 4, 'eeoTLFWae5vG8SaEcVMRcqmrgEexU2YM', '2018-04-13 20:49:27', '2018-04-13 20:49:27'),
(28, 6, 'gEo5HKN6VgPI4mHKLu8V4FyDCLZRMvns', '2018-04-14 10:15:11', '2018-04-14 10:15:11'),
(45, 5, 'MHGfV2uFvdCtMI983e6EVweebkslYf0a', '2018-04-15 00:28:43', '2018-04-15 00:28:43');

-- --------------------------------------------------------

--
-- Table structure for table `produks`
--

CREATE TABLE `produks` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_distributor` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `namagambar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `terjual` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `produks`
--

INSERT INTO `produks` (`id`, `nama`, `id_kategori`, `id_distributor`, `quantity`, `harga`, `created_at`, `updated_at`, `description`, `gambar`, `namagambar`, `terjual`) VALUES
(7, 'Buku Shin megami tensei 4 apocalypse', 1, 5, 0, 3000000, '2018-04-11 01:30:12', '2018-04-14 21:48:16', 'Contains the art from the famed game shin megami tensei 4', 'C:\\xampp\\htdocs\\projectakhir\\public\\images\\download (1).jpg', 'download (1).jpg', 3),
(8, 'Gunpla Mobile Suit Astray PBF02 Flight unit', 2, 5, 0, 3000000, '2018-04-11 07:02:50', '2018-04-14 21:19:55', 'Its Scale 1:100 HG ', 'C:\\xampp\\htdocs\\projectakhir\\public\\images\\download (3).jpg', 'download (3).jpg', 3),
(9, 'Granblue Chronicle 001', 1, 5, 0, 1000000, '2018-04-11 07:05:24', '2018-04-14 05:16:22', 'Contains the code for add-on in the games', 'C:\\xampp\\htdocs\\projectakhir\\public\\images\\download (2).jpg', 'download (2).jpg', 1),
(10, 'Gundam Wing', 2, 5, 21, 300000, '2018-04-12 02:13:20', '2018-04-14 23:09:19', 'model rakit mainan ', 'C:\\xampp\\htdocs\\projectakhir\\public\\images\\51qK3AADGGL._SL500_AC_SS350_.jpg', '51qK3AADGGL._SL500_AC_SS350_.jpg', 0),
(11, 'Gundam Zabanya', 2, 5, 12, 400000, '2018-04-12 02:13:20', '2018-04-14 04:48:41', 'model rakit mainan ', 'C:\r\nmpp\\htdocs\\projectakhir\\public\\images\r\nno_image.jpg', 'no_image.jpg', 0),
(12, 'Buku mainan', 1, 5, 4, 30000, '2018-04-12 02:19:57', '2018-04-14 04:48:41', 'ini buku', 'C:\r\nmpp\\htdocs\\projectakhir\\public\\images\r\nno_image.jpg', 'no_image.jpg', 0),
(13, 'Persona 4 ', 1, 5, 0, 300000, '2018-04-12 02:53:31', '2018-04-13 23:35:12', 'Fanart book persona 4', 'C:\\xampp\\htdocs\\projectakhir\\public\\images\\download (4).jpg', 'download (4).jpg', 1),
(14, 'Gundam Wing', 2, 6, 3, 300000, '2018-04-14 09:35:32', '2018-04-14 21:59:02', 'model rakit mainan ', 'C:\\xampp\\htdocs\\projectakhir\\public\\images\\81EacpB5lXL._SX355_.jpg', '81EacpB5lXL._SX355_.jpg', NULL),
(15, 'Gundam Zabanya', 2, 6, 3, 400000, '2018-04-14 09:35:32', '2018-04-14 09:35:32', 'model rakit mainan ', 'C:\r\nmpp\\htdocs\\projectakhir\\public\\images\r\nno_image.jpg', 'no_image.jpg', NULL),
(16, 'Buku mainan', 1, 6, 2, 30000, '2018-04-14 09:35:32', '2018-04-14 09:35:32', 'ini buku', 'C:\r\nmpp\\htdocs\\projectakhir\\public\\images\r\nno_image.jpg', 'no_image.jpg', NULL),
(17, 'Cory In the House', 1, 6, 2, 1000000, '2018-04-14 21:32:04', '2018-04-14 21:33:44', 'Best Anime Book', 'C:\\xampp\\htdocs\\projectakhir\\public\\images\\download (5).jpg', 'download (5).jpg', 1),
(18, 'Gundam Burning', 2, 5, 3, 300000, '2018-04-14 22:01:54', '2018-04-14 22:01:54', 'model rakit mainan ', 'C:\nmpp\\htdocs\\projectakhir\\public\\images\no_image.jpg', 'no_image.jpg', 0),
(19, 'Gundam Flame', 2, 5, 3, 400000, '2018-04-14 22:01:54', '2018-04-14 23:09:39', 'model rakit mainan ', 'C:\\xampp\\htdocs\\projectakhir\\public\\images\\10228102.jpg', '10228102.jpg', 0),
(20, 'Buku rakit', 1, 5, 2, 30000, '2018-04-14 22:01:54', '2018-04-14 22:01:54', 'ini buku', 'C:\nmpp\\htdocs\\projectakhir\\public\\images\no_image.jpg', 'no_image.jpg', 0),
(21, 'Gundam Burning', 2, 7, 3, 300000, '2018-04-15 01:52:42', '2018-04-15 01:52:42', 'model rakit mainan ', 'C:\nmpp\\htdocs\\projectakhir\\public\\images\no_image.jpg', 'no_image.jpg', 0),
(22, 'Gundam Flame', 2, 7, 3, 400000, '2018-04-15 01:52:43', '2018-04-15 01:52:43', 'model rakit mainan ', 'C:\nmpp\\htdocs\\projectakhir\\public\\images\no_image.jpg', 'no_image.jpg', 0),
(23, 'Buku rakit', 1, 7, 2, 30000, '2018-04-15 01:52:43', '2018-04-15 01:52:43', 'ini buku', 'C:\nmpp\\htdocs\\projectakhir\\public\\images\no_image.jpg', 'no_image.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `reminders`
--

CREATE TABLE `reminders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `reminders`
--

INSERT INTO `reminders` (`id`, `user_id`, `code`, `completed`, `completed_at`, `created_at`, `updated_at`) VALUES
(1, 4, 'bWpDpa3t80jixRmLuXoHsxML0rw88tct', 1, '2018-04-10 06:33:56', '2018-04-10 06:30:43', '2018-04-10 06:33:56');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `slug`, `name`, `permissions`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', '{\"home\":true,\"homelog\":true,\"homeadm\":true}', '2018-04-09 01:13:28', '2018-04-09 01:13:28'),
(2, 'user', 'User', '{\"home\":true,\"homelog\":true}', '2018-04-09 01:13:29', '2018-04-09 01:13:29'),
(3, 'supplier', 'Supplier', '{\"home\":true,\"homelog\":true,\"homesup\":true}', '2018-04-09 01:13:30', '2018-04-09 01:13:30');

-- --------------------------------------------------------

--
-- Table structure for table `role_users`
--

CREATE TABLE `role_users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role_users`
--

INSERT INTO `role_users` (`user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2018-04-09 01:13:29', '2018-04-09 01:13:29'),
(2, 2, '2018-04-09 01:13:30', '2018-04-09 01:13:30'),
(3, 3, '2018-04-09 01:13:30', '2018-04-09 01:13:30'),
(4, 2, '2018-04-10 06:10:57', '2018-04-10 06:10:57'),
(5, 3, '2018-04-10 06:12:14', '2018-04-10 06:12:14'),
(6, 3, '2018-04-14 09:26:58', '2018-04-14 09:26:58'),
(7, 3, '2018-04-14 21:43:04', '2018-04-14 21:43:04'),
(8, 2, '2018-04-14 21:46:15', '2018-04-14 21:46:15');

-- --------------------------------------------------------

--
-- Table structure for table `throttle`
--

CREATE TABLE `throttle` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `throttle`
--

INSERT INTO `throttle` (`id`, `user_id`, `type`, `ip`, `created_at`, `updated_at`) VALUES
(1, NULL, 'global', NULL, '2018-04-13 20:46:54', '2018-04-13 20:46:54'),
(2, NULL, 'ip', '127.0.0.1', '2018-04-13 20:46:54', '2018-04-13 20:46:54'),
(3, 4, 'user', NULL, '2018-04-13 20:46:54', '2018-04-13 20:46:54'),
(4, NULL, 'global', NULL, '2018-04-13 20:47:44', '2018-04-13 20:47:44'),
(5, NULL, 'ip', '127.0.0.1', '2018-04-13 20:47:44', '2018-04-13 20:47:44'),
(6, 4, 'user', NULL, '2018-04-13 20:47:44', '2018-04-13 20:47:44'),
(7, NULL, 'global', NULL, '2018-04-13 20:49:15', '2018-04-13 20:49:15'),
(8, NULL, 'ip', '127.0.0.1', '2018-04-13 20:49:15', '2018-04-13 20:49:15'),
(9, 4, 'user', NULL, '2018-04-13 20:49:15', '2018-04-13 20:49:15'),
(10, NULL, 'global', NULL, '2018-04-14 05:06:50', '2018-04-14 05:06:50'),
(11, NULL, 'ip', '127.0.0.1', '2018-04-14 05:06:50', '2018-04-14 05:06:50'),
(12, 4, 'user', NULL, '2018-04-14 05:06:50', '2018-04-14 05:06:50'),
(13, NULL, 'global', NULL, '2018-04-14 09:43:13', '2018-04-14 09:43:13'),
(14, NULL, 'ip', '127.0.0.1', '2018-04-14 09:43:13', '2018-04-14 09:43:13'),
(15, 4, 'user', NULL, '2018-04-14 09:43:13', '2018-04-14 09:43:13'),
(16, NULL, 'global', NULL, '2018-04-14 23:07:04', '2018-04-14 23:07:04'),
(17, NULL, 'ip', '127.0.0.1', '2018-04-14 23:07:04', '2018-04-14 23:07:04'),
(18, 5, 'user', NULL, '2018-04-14 23:07:04', '2018-04-14 23:07:04'),
(19, NULL, 'global', NULL, '2018-04-15 01:55:22', '2018-04-15 01:55:22'),
(20, NULL, 'ip', '127.0.0.1', '2018-04-15 01:55:23', '2018-04-15 01:55:23'),
(21, 4, 'user', NULL, '2018-04-15 01:55:23', '2018-04-15 01:55:23'),
(22, NULL, 'global', NULL, '2018-04-15 04:46:49', '2018-04-15 04:46:49'),
(23, NULL, 'ip', '127.0.0.1', '2018-04-15 04:46:49', '2018-04-15 04:46:49'),
(24, 1, 'user', NULL, '2018-04-15 04:46:49', '2018-04-15 04:46:49');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_barang` int(11) NOT NULL,
  `kode_transaksi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_distributor` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `barang_masuk` int(11) DEFAULT NULL,
  `barang_keluar` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `nama`, `id_barang`, `kode_transaksi`, `id_user`, `id_distributor`, `created_at`, `updated_at`, `barang_masuk`, `barang_keluar`) VALUES
(2, 'Pemasukan barang Buku Shin megami tensei 4 apo  Sebanyak 3 buah', 7, 1, 0, 5, '2018-04-11 01:30:13', '2018-04-11 01:30:13', 3, 0),
(3, 'Pemasukan barang Gunpla Mobile Suit Astray PBF02 Flight unit Sebanyak 3 buah', 8, 1, 0, 5, '2018-04-11 07:02:50', '2018-04-11 07:02:50', 3, 0),
(4, 'Pemasukan barang Granblue Chronicle 001 Sebanyak 1 buah', 9, 1, 0, 5, '2018-04-11 07:05:25', '2018-04-11 07:05:25', 1, 0),
(5, 'Pemasukan barang Gundam Wing Sebanyak 3 buah', 10, 1, 0, 5, '2018-04-12 02:13:20', '2018-04-12 02:13:20', 3, 0),
(6, 'Pemasukan barang Gundam Zabanya Sebanyak 3 buah', 11, 1, 0, 5, '2018-04-12 02:13:20', '2018-04-12 02:13:20', 3, 0),
(7, 'Pemasukan barang Buku mainan Sebanyak 2 buah', 12, 1, 0, 5, '2018-04-12 02:19:57', '2018-04-12 02:19:57', 2, 0),
(8, 'Pemasukan barang Persona 4  Sebanyak 3 buah', 13, 1, 0, 5, '2018-04-12 02:53:31', '2018-04-12 02:53:31', 4, 0),
(10, 'Penjualan barang Persona 4  Sebanyak 1 buah', 13, 2, 4, 0, '2018-04-13 23:35:12', '2018-04-13 23:35:12', 0, 1),
(11, 'Pemasukan barang Gundam Wing Sebanyak 3 buah', 10, 1, 0, 5, '2018-04-14 04:48:40', '2018-04-14 04:48:40', 3, 0),
(12, 'Pemasukan barang Gundam Zabanya Sebanyak 3 buah', 11, 1, 0, 5, '2018-04-14 04:48:41', '2018-04-14 04:48:41', 3, 0),
(13, 'Pemasukan barang Buku mainan Sebanyak 2 buah', 12, 1, 0, 5, '2018-04-14 04:48:41', '2018-04-14 04:48:41', 2, 0),
(14, 'Penjualan barang Granblue Chronicle 001 Sebanyak 1 buah', 9, 2, 4, 0, '2018-04-14 05:16:22', '2018-04-14 05:16:22', 0, 1),
(15, 'Penjualan barang Buku Shin megami tensei 4 apocalypse Sebanyak 1 buah', 7, 2, 4, 0, '2018-04-14 05:16:22', '2018-04-14 05:16:22', NULL, 1),
(16, 'Pemasukan barang Gundam Wing Sebanyak 3 buah', 14, 1, 0, 6, '2018-04-14 09:35:32', '2018-04-14 09:35:32', 3, 0),
(17, 'Pemasukan barang Gundam Zabanya Sebanyak 3 buah', 15, 1, 0, 6, '2018-04-14 09:35:32', '2018-04-14 09:35:32', 3, 0),
(18, 'Pemasukan barang Buku mainan Sebanyak 2 buah', 16, 1, 0, 6, '2018-04-14 09:35:32', '2018-04-14 09:35:32', 2, 0),
(19, 'Penjualan barang Gunpla Mobile Suit Astray PBF02 Flight unit Sebanyak 1 buah', 8, 2, 4, 0, '2018-04-14 21:13:22', '2018-04-14 21:13:22', 0, 1),
(20, 'Penjualan barang Gunpla Mobile Suit Astray PBF02 Flight unit Sebanyak 2 buah', 8, 2, 4, 0, '2018-04-14 21:19:55', '2018-04-14 21:19:55', 0, 2),
(21, 'Pemasukan barang Cory In the House Sebanyak 3 buah', 17, 1, 0, 6, '2018-04-14 21:32:05', '2018-04-14 21:32:05', 3, 0),
(22, 'Penjualan barang Cory In the House Sebanyak 1 buah', 17, 2, 4, 0, '2018-04-14 21:33:44', '2018-04-14 21:33:44', 0, 1),
(23, 'Penjualan barang Buku Shin megami tensei 4 apocalypse Sebanyak 2 buah', 7, 2, 8, 0, '2018-04-14 21:48:16', '2018-04-14 21:48:16', 0, 2),
(24, 'Pemasukan barang Gundam Burning Sebanyak 3 buah', 18, 1, 0, 5, '2018-04-14 22:01:54', '2018-04-14 22:01:54', 3, 0),
(25, 'Pemasukan barang Gundam Flame Sebanyak 3 buah', 19, 1, 0, 5, '2018-04-14 22:01:54', '2018-04-14 22:01:54', 3, 0),
(26, 'Pemasukan barang Buku rakit Sebanyak 2 buah', 20, 1, 0, 5, '2018-04-14 22:01:55', '2018-04-14 22:01:55', 2, 0),
(27, 'Pemasukan barang Gundam Burning Sebanyak 3 buah', 21, 1, 0, 7, '2018-04-15 01:52:42', '2018-04-15 01:52:42', 3, 0),
(28, 'Pemasukan barang Gundam Flame Sebanyak 3 buah', 22, 1, 0, 7, '2018-04-15 01:52:43', '2018-04-15 01:52:43', 3, 0),
(29, 'Pemasukan barang Buku rakit Sebanyak 2 buah', 23, 1, 0, 7, '2018-04-15 01:52:43', '2018-04-15 01:52:43', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `last_login` timestamp NULL DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telephone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `permissions`, `last_login`, `first_name`, `last_name`, `created_at`, `updated_at`, `address`, `telephone`) VALUES
(1, 'madmin@mail.com', '$2y$10$dhA13vY0lLVm2IjBAK6gMeFAGf/iS8aEhYQumDWibWNuaPMf.Jb8e', NULL, '2018-04-15 04:52:15', 'M', 'Admin', '2018-04-09 01:13:29', '2018-04-15 04:52:15', NULL, NULL),
(2, 'oda@email.com', '$2y$10$qxRsVM6lL.Cf0iqQ5nf66OIeH.2TDXBao6s2vHjomIis6bmcVeThG', NULL, NULL, 'Oda', 'E', '2018-04-09 01:13:29', '2018-04-15 04:46:21', 'jalan jambrud', '0821812812812'),
(3, 'Glukovich@e.com', '$2y$10$YCJHrAOJrY5hh/dsduxYmOzLnW.rn3/YO4eFHhMjwe3sGHxSPRYiG', NULL, NULL, 'Olga', 'Glukovich', '2018-04-09 01:13:30', '2018-04-09 01:13:30', NULL, NULL),
(4, 'michaelandgobaw@gmail.com', '$2y$10$7d7eGmDGlZoXW64JCZeg4e7l26t8iD0z0OUWU6sKI2L0cyFa2UlaW', NULL, '2018-04-15 01:55:30', 'Michael ', 'Pratama', '2018-04-10 06:10:56', '2018-04-15 01:55:30', 'Street Ambon', '08526782345678'),
(5, 'michaelandgobaws@gmail.com', '$2y$10$dzRyh3JLo7ORfIiI8kh0Z.k1lmpJLPQKZgeE3Fm2fCVQGDShxUdnO', NULL, '2018-04-15 04:58:10', 'Michael ', 'Suprapto', '2018-04-10 06:12:14', '2018-04-15 04:58:10', 'Street Ambon', '08526782345678'),
(6, 'jack@gmail.com', '$2y$10$CmqZgKklb3WHH8Bpl0hEwuTzfbHeBxWCr86sSC1Fxj9RpCVSJ5PFS', NULL, '2018-04-14 21:52:31', 'jack', 'danie', '2018-04-14 09:26:57', '2018-04-14 21:52:31', 'Baran Street', '082300002333'),
(7, 'cory@gmail.com', '$2y$10$U9k5gLv2krSWZF3ConpgaubuwVTHLk4l9zjFIUCHYMJLc8m/wXAwC', NULL, '2018-04-15 01:51:47', 'Cory', 'House', '2018-04-14 21:43:04', '2018-04-15 01:51:47', 'cory street', '021555302010'),
(8, 'coryz@gmail.com', '$2y$10$Zjt/6k1LofU4TTwugcnkPOqPVf8lwagn96RDKlDB.MZGCaI7p3d0m', NULL, '2018-04-15 01:51:36', 'cory', 'thehouse', '2018-04-14 21:46:15', '2018-04-15 01:51:36', 'its a surprise', '0214444412112');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activations`
--
ALTER TABLE `activations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `persistences`
--
ALTER TABLE `persistences`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `persistences_code_unique` (`code`);

--
-- Indexes for table `produks`
--
ALTER TABLE `produks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reminders`
--
ALTER TABLE `reminders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Indexes for table `role_users`
--
ALTER TABLE `role_users`
  ADD PRIMARY KEY (`user_id`,`role_id`);

--
-- Indexes for table `throttle`
--
ALTER TABLE `throttle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `throttle_user_id_index` (`user_id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
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
-- AUTO_INCREMENT for table `activations`
--
ALTER TABLE `activations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `persistences`
--
ALTER TABLE `persistences`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `produks`
--
ALTER TABLE `produks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `reminders`
--
ALTER TABLE `reminders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `throttle`
--
ALTER TABLE `throttle`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
