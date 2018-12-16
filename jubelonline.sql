-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 16 Des 2018 pada 18.35
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jubelonline`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(2, 'Makanan'),
(3, 'Minuman'),
(4, 'lain-lain'),
(5, 'Minuman Gelas'),
(8, 'Minuman Botol'),
(9, 'Minuman Kaleng');

-- --------------------------------------------------------

--
-- Struktur dari tabel `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `item_id` int(11) DEFAULT NULL,
  `path` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `images`
--

INSERT INTO `images` (`id`, `name`, `item_id`, `path`) VALUES
(1, 'Database Mahasiswa.accdb', NULL, 'assets/images/'),
(2, '', NULL, 'assets/images/'),
(3, '', NULL, 'assets/images/');

-- --------------------------------------------------------

--
-- Struktur dari tabel `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `code` varchar(25) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `items`
--

INSERT INTO `items` (`id`, `code`, `name`, `price`, `category_id`, `amount`) VALUES
(2, 'AQ2000ml', 'Aqua Botol 2L', 13000, 8, 19),
(3, 'SB025', 'Bear Brand', 9001, 9, 32),
(4, 'F111', 'Fanta 1500ml', 10100, 9, 22),
(10, 'F1211', 'Fanta Lemon 450ml', 6900, 9, 12),
(11, 'FL150', 'Floridina ', 4500, 8, 12),
(12, 'GD11150', 'Good Day Moccacino', 7502, 8, 24),
(13, 'JS3320', 'Air Gelas JS', 491, 5, 75),
(14, 'AQ3320', 'Air Gelas Aqua', 611, 5, 39),
(15, '34311001', 'Sari Roti', 4903, 2, 21),
(16, '13333880', 'Pop Mie Sedap Goreng', 6021, 2, 20),
(17, 'SS121150', 'Mie Sedap Soto', 2103, 2, 46),
(18, '', 'Roti Pia Gepeng', 1001, 2, 51),
(19, '', 'Jalankote Jumbo', 891, 2, 11),
(20, '', 'Jagung Rebus Meskam', 2302, 2, 8),
(21, 'MG15002111', 'Mie Gelas Bakar', 4991, 2, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transactions_history`
--

CREATE TABLE `transactions_history` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item` varchar(50) NOT NULL,
  `user` varchar(20) NOT NULL,
  `amount` int(11) NOT NULL DEFAULT '1',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transactions_history`
--

INSERT INTO `transactions_history` (`id`, `item_id`, `user_id`, `item`, `user`, `amount`, `date`) VALUES
(4, 3, 7, 'susu data', 'Sulaiman', 1, '2018-12-15 07:53:53'),
(6, 3, 7, 'susu data', 'Sulaiman', 1, '2018-12-15 08:06:17'),
(9, 3, 6, 'susu data', 'admin', 1, '2018-12-15 08:23:13'),
(10, 2, 6, 'Aqua Botol 2L', 'admin', 2, '2018-12-16 07:22:36'),
(11, 10, 8, 'Fanta Lemon 450ml', 'Akun Test', 2, '2018-12-16 08:48:32'),
(15, 2, 9, 'Aqua Botol 2L', 'Sari Hamka', 2, '2018-12-16 10:09:39'),
(17, 17, 11, 'Mie Sedap Soto', 'Wisnu Kristanto', 2, '2018-12-16 17:17:17'),
(22, 21, 11, 'Mie Gelas Bakar', 'Wisnu Kristanto', 13, '2018-12-16 17:29:55'),
(23, 20, 11, 'Jagung Rebus Meskam', 'Wisnu Kristanto', 1, '2018-12-16 17:33:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `balance` int(30) DEFAULT '0',
  `role` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `full_name`, `username`, `password`, `balance`, `role`) VALUES
(5, 'uji', 'uji', '$2y$10$ULRmbiToYpyTpPG.boQGVeDbCRiVLbj06F9PDDX0ZOksUFBsAO7T.', 50000, NULL),
(6, 'admin', 'admin', '$2y$10$swCcbM31ABv8w8uj.w2hE.V0FjOlfOtOYvdpZaikbVxF6ocWiyaVq', 124989, 'admin'),
(7, 'Sulaiman', 'Sule', '$2y$10$f37eeiqTjQ0oaQJ8LvXii.XFSBMSRQMLcjwkLW75EMcz.TdAzweJe', 100000, 'admin'),
(8, 'Akun Test', 'test', '$2y$10$AkHBKyNRYjAixdAe1mhXJext6gStlddFHgwkIXMn9y40PoTZKuuH6', 36200, NULL),
(9, 'Sari Hamka', 'sari', '$2y$10$CYQIS4gBn6GgySbo9dEZCeA3sMwfEnAzJAIobUzulkXkYf8.jd/n6', 124000, NULL),
(10, 'Berlian Putri', 'berlian', '$2y$10$xDJOIgXtt4WbpM.XXlx9juEUH3NfLPcJZEhDx3ZJ.APb2iF24UUqO', 0, NULL),
(11, 'Wisnu Kristanto', 'nano', '$2y$10$vkKnrgV3uhLwH2ky/g1TFuP6Mlx9H9OHAecUfRFkk4E4LyjfXxU4.', 28609, NULL),
(12, 'Kasim Rudi', 'rudi', '$2y$10$w9jZKqyjJmVJvPCMNySr6e8Dmz/IvVnxfqSaRDlP7/k85RbNC.fLy', 0, NULL),
(13, 'Fifi Lestari', 'fifi', '$2y$10$ADlWawff5WaxsT5RRZfk8eSrz/UDbVOzSsDeDeHdPvBhdhizlFFc6', 0, NULL),
(14, 'Reza Dharmadi', 'reza', '$2y$10$e/YtQYi5o9kycRokAO6zIe0hxiv7UAL8pzAZWqwYNKNJMafeG61na', 100000, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions_history`
--
ALTER TABLE `transactions_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `transactions_history`
--
ALTER TABLE `transactions_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
