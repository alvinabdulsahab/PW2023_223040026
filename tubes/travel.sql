-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Waktu pembuatan: 11 Jun 2023 pada 05.32
-- Versi server: 5.7.39
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `purpose` varchar(191) NOT NULL,
  `quantity_people` int(11) NOT NULL,
  `travel_date` date NOT NULL,
  `return_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `bookings`
--

INSERT INTO `bookings` (`id`, `user_id`, `purpose`, `quantity_people`, `travel_date`, `return_date`) VALUES
(1, 2, 'Situ Cilenca', 1, '2023-06-11', '2023-06-12'),
(2, 4, 'Surabaya', 1, '2023-06-11', '2023-06-12'),
(3, 1, 'Yogyakarta', 2, '2023-06-11', '2023-06-12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `phone_number` varchar(15) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `level` enum('Admin','User') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone_number`, `address`, `level`) VALUES
(1, 'Alvin', 'alvin@gmail.com', '$2y$10$6mLXeRjnE6MuM3rHhd0.ze8ffhQZ9r3dQEo4P.14Jmy1q7Q3WTXlG', '8901234123', 'Bandung Setiabudi', 'Admin'),
(2, 'Gina Joe', 'gina@gmail.com', '$2y$10$CcATB/8jWb9QdSs2NmaOb.C0UA/uEEiI8miFcCbF835/hYAsXun9u', NULL, NULL, 'User'),
(3, 'Ahmad Doe', 'ahmaddoe@gmail.com', '$2y$10$6mLXeRjnE6MuM3rHhd0.ze8ffhQZ9r3dQEo4P.14Jmy1q7Q3WTXlG', NULL, NULL, 'User'),
(4, 'jhon Doe', 'jhondoe@gmail.com', '$2y$10$xtfeoZv.yFW0cgVzI/nbme0JpG5vYQ0VMr4hVLP1iwhMHb/DDfkcu', '08123456789', 'Cicangkudu', 'User');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
