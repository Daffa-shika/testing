-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2024 at 11:56 PM
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
-- Database: `data_masuk`
--

-- --------------------------------------------------------

--
-- Table structure for table `beli_data`
--

CREATE TABLE `beli_data` (
  `id` int(11) NOT NULL,
  `makanan` varchar(100) NOT NULL,
  `harga` decimal(10,2) NOT NULL,
  `jumbel` int(30) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `method` varchar(100) NOT NULL,
  `date_art` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `beli_data`
--

INSERT INTO `beli_data` (`id`, `makanan`, `harga`, `jumbel`, `total`, `nama`, `alamat`, `nohp`, `method`, `date_art`) VALUES
(18, 'Martabak', 5000.00, 3, 15000.00, 'pandu', 'dfsdfsfdsdfsfs', '44446864', 'cod', '2024-08-19 16:08:02'),
(19, 'Martabak', 5000.00, 3, 15000.00, 'pandu', 'dfsdfsfdsdfsfs', '44446864', 'qris', '2024-08-19 16:08:50'),
(20, 'Teh Poci', 10000.00, 2, 20000.00, 'sdas', 'sadas', 'sads', 'qris', '2024-08-21 23:49:56');

-- --------------------------------------------------------

--
-- Table structure for table `data_makanan`
--

CREATE TABLE `data_makanan` (
  `id` int(11) NOT NULL,
  `nm_makanan` varchar(255) NOT NULL,
  `hrg_makanan` int(30) NOT NULL,
  `pst_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_makanan`
--

INSERT INTO `data_makanan` (`id`, `nm_makanan`, `hrg_makanan`, `pst_img`) VALUES
(3, 'Martabak', 5000, 'martabak.jpeg'),
(4, 'Teh Poci', 10000, 'teh poci.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `data_user`
--

CREATE TABLE `data_user` (
  `id` int(11) NOT NULL,
  `namalgkp` varchar(111) NOT NULL,
  `dt_username` varchar(20) NOT NULL,
  `dt_password` varchar(50) NOT NULL,
  `nohp` int(20) NOT NULL,
  `date_art` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_user`
--

INSERT INTO `data_user` (`id`, `namalgkp`, `dt_username`, `dt_password`, `nohp`, `date_art`) VALUES
(13, 'arata', 'arata70', 'arata7012', 2147483647, '2024-08-25 02:17:34'),
(14, 'arata', 'arata12', 'arata701244', 23423423, '2024-08-25 03:18:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beli_data`
--
ALTER TABLE `beli_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_makanan`
--
ALTER TABLE `data_makanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beli_data`
--
ALTER TABLE `beli_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `data_makanan`
--
ALTER TABLE `data_makanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_user`
--
ALTER TABLE `data_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
