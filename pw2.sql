-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2021 at 08:48 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw2`
--

-- --------------------------------------------------------

--
-- Table structure for table `datacenter`
--

CREATE TABLE `datacenter` (
  `id` int(11) NOT NULL,
  `tahun` varchar(128) NOT NULL,
  `bulan` varchar(128) NOT NULL,
  `bidang` varchar(128) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `file` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datacenter`
--

INSERT INTO `datacenter` (`id`, `tahun`, `bulan`, `bidang`, `judul`, `file`) VALUES
(14, '2016', 'Januari', 'Ketahanan Pangan', 'Luas Panen, Produksi dan Produktivitas Tanaman Palawija', 't1_3.pdf'),
(15, '2011', 'Januari', 'Pertanian', 'Angka Tetap Tanaman Sayur 2011', 'atap_sayur2011.pdf'),
(16, '2010', 'Maret', 'Pertanian', 'Angka Tetap Tanaman Buah 2010', 'atap_buah2010.pdf'),
(17, '2009', 'April', 'Perikanan', 'Tabel Produksi Daging di DIY', 'tabel_6_produksi_daging_kab_kota_di_diy.pdf'),
(18, '2013', 'April', 'Ketahanan Pangan', 'Luas Panen Tanaman Padi dan Palawija per sub Round', '16-18_2013_(1).pdf'),
(19, '2014', 'April', 'Ketahanan Pangan', 'Luas Panen Tanaman Padi dan Palawija per sub Round', 't4_6kota.pdf'),
(20, '2011', 'November', 'Pertanian', 'Angka Tetap Tanaman Obat tahun 2011', 'atap_tobat2011.pdf'),
(21, '2010', 'Agustus', 'Pertanian', 'Angka Tetap Tanaman Hias tahun 2010', 'atap_flori_10.pdf'),
(22, '2006', 'Juni', 'Perikanan', 'Produksi Daging, Telur dan Susu', 'hal6.pdf'),
(23, '2005', 'Juli', 'Perikanan', 'Populasi Ternak Kecil, Besar dan Unggas', 'tb1.pdf'),
(24, '2021', 'Januari', 'Pertanian', 'File coba 1', 'FILE_1.docx'),
(25, '2020', 'Februari', 'Perikanan', 'File coba 2', 'FILE_2.docx'),
(26, '2019', 'Maret', 'Ketahanan Pangan', 'File coba 3', 'FILE_3.docx'),
(27, '2018', 'April', 'Pertanian', 'File coba 4', 'FILE_4.pdf'),
(28, '2017', 'Mei', 'Perikanan', 'File coba 5', 'FILE_5.pdf'),
(29, '2021', 'Desember', 'Ketahanan Pangan', 'File coba 6 Update', 'FILE_61.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Bima Pramudya Asadulloh', 'prambima@gmail.com', 'Bima-Pramudya-Asaddulloh1.jpg', '$2y$10$Rl44p5CInyd1HSNMfF8jDO576KaBeLX1V2rZSN4FilUh5Y/JDXuGi', 2, 1, 1609886667),
(2, 'Bakri Ahmad Ridhwan', 'bakri@gmail.com', 'Bakri_Ar_on_Instagram___Foto_Lawas_--__Bu6Kf4RAz5J_0(JPG).jpg', '$2y$10$dFOTFHsMrwhqK5ZWmnr/hegp7cV/X3XWKi.sQR3D04nmRYah1iB1q', 1, 1, 1609886725),
(4, 'David Dzakiy Al Maghribi', 'daviddzakiy@gmail.com', 'default.jpg', '$2y$10$8zFjw3qGPo.u4qS6o02Kcemcizp6Sft/QHXSnANdfeXlr/bX0.UxG', 2, 1, 1609898532),
(8, 'Firman Asharudin', 'firman@gmail.com', '38_AMIKOMY.png', '$2y$10$f9ty5SEdOOsHxX6tM8P4EOLeYmxOs0lUgIu/H.M2ExREbNdRv9y2q', 2, 1, 1610052627),
(20, 'Wahid Kurnia Mahardika', 'dhika@gmail.com', 'default.jpg', '$2y$10$w2.lOK0MqHJO8/dFaRbG4.YWBel0ysomyprJL0ahs8H0HhBXbpyUS', 2, 1, 1610251418),
(21, 'Rosyid Majid', 'rosyid@gmail.com', 'default.jpg', '$2y$10$upzxmdIiteQaI9TgRlWkDubD6QBMUnmQc5.wKZZXAb2k3c/iAr2pC', 2, 1, 1610251440),
(22, 'Firman Asharudin2', 'firman2@gmail.com', '38_AMIKOMY1.png', '$2y$10$zDNYEFMsUoDCfAKp/WPRdegkPdL5dHoWzmrFoAOMTxQ0yl8OoPybm', 1, 1, 1610252508),
(23, 'Testing testing', 'testing@gmail.com', 'default.jpg', '$2y$10$DBuNOBac2ZSvId6OcGIBHO0w5r94/VgINZN6XmDjyQPOFDLs.H076', 2, 1, 1610305850);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 1, 3),
(6, 1, 5),
(7, 2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(5, 'Data Center'),
(7, 'Testing'),
(8, 'Testing Update 2');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member'),
(3, 'Mahasiswa Test'),
(5, 'Dosen'),
(8, 'Testing');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-home', 1),
(2, 2, 'My Profile', 'user/tampilkanProfil', 'fas fa-user', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-user-edit', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-folder', 1),
(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-folder-open', 1),
(7, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(8, 2, 'Change Password', 'user/changepassword', 'fas fa-key', 1),
(9, 5, 'Data', 'user/tampilkanData', 'fas fa-database', 1),
(10, 1, 'Management Data', 'admin/mUser', 'fas fa-users', 1),
(12, 1, 'Coba', 'coba/coba', 'fab fa-youtube', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datacenter`
--
ALTER TABLE `datacenter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datacenter`
--
ALTER TABLE `datacenter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
