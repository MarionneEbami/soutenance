-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2024 at 02:55 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webcam`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `nom` varchar(24) NOT NULL,
  `prenom` varchar(24) NOT NULL,
  `contact` int(23) NOT NULL,
  `type_objet` varchar(23) NOT NULL,
  `date` datetime(6) NOT NULL,
  `image` varchar(50) NOT NULL,
  `extracted_text` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `nom`, `prenom`, `contact`, `type_objet`, `date`, `image`, `extracted_text`) VALUES
(33, 'ebami', 'marion', 2147483647, 'CNI', '0000-00-00 00:00:00.000000', 'eng_bw.png', 'Mild Splendour of the various-vested Night!\nMother of wildly-working visions! hail!\nI watch thy glid'),
(34, 'ebami', 'marion', 67898909, 'CNI', '0000-00-00 00:00:00.000000', 'WhatsApp Image 2024-08-16 at 08.24.41_ff3178df.jpg', 'Identifiant demande / Request identifi\n\nIONE a a\nLT12199I5J3N3OSV58L2\n\nPILIC LT12 - CIATSPXIIEMEARRD'),
(35, 'ebami', 'lory', 676876767, 'CNI', '0000-00-00 00:00:00.000000', 'WhatsApp Image 2024-08-16 at 08.24.41_ff3178df.jpg', 'Identifiant demande / Request identifi\n\nIONE a a\nLT12199I5J3N3OSV58L2\n\nPILIC LT12 - CIATSPXIIEMEARRD'),
(36, 'ebami', 'lory', 676876767, 'CNI', '0000-00-00 00:00:00.000000', 'WhatsApp Image 2024-08-16 at 08.24.41_ff3178df.jpg', 'Identifiant demande / Request identifi\n\nIONE a a\nLT12199I5J3N3OSV58L2\n\nPILIC LT12 - CIATSPXIIEMEARRD'),
(37, 'ebami', 'lory', 676876767, 'CNI', '0000-00-00 00:00:00.000000', 'WhatsApp Image 2024-08-16 at 08.24.41_ff3178df.jpg', 'Identifiant demande / Request identifi\n\nIONE a a\nLT12199I5J3N3OSV58L2\n\nPILIC LT12 - CIATSPXIIEMEARRD'),
(38, 'ebami', 'lory', 676876767, 'CNI', '0000-00-00 00:00:00.000000', 'WhatsApp Image 2024-08-16 at 08.24.41_ff3178df.jpg', 'Identifiant demande / Request identifi\n\nIONE a a\nLT12199I5J3N3OSV58L2\n\nPILIC LT12 - CIATSPXIIEMEARRD'),
(39, 'ebami', 'lory', 676876767, 'CNI', '0000-00-00 00:00:00.000000', 'WhatsApp Image 2024-08-16 at 08.24.41_ff3178df.jpg', 'Identifiant demande / Request identifi\n\nIONE a a\nLT12199I5J3N3OSV58L2\n\nPILIC LT12 - CIATSPXIIEMEARRD'),
(40, 'NKOUEBO', 'Peguy', 65568798, 'Passeport', '0000-00-00 00:00:00.000000', 'imag.jpg', 'Identifiant demande / Request identifi\n\nIONE a a\nLT12199I5J3N3OSV58L2\n\nPILIC LT12 - CIATSPXIIEMEARRD'),
(41, 'NKOUEBO', 'Peguy', 65568798, 'CNI', '0000-00-00 00:00:00.000000', 'imag.jpg', 'Identifiant demande / Request identifi\n\nIONE a a\nLT12199I5J3N3OSV58L2\n\nPILIC LT12 - CIATSPXIIEMEARRD'),
(42, 'papouka', 'lory', 65568798, 'CNI', '0000-00-00 00:00:00.000000', 'WhatsApp Image 2024-08-19 at 06.28.16_a3d5fc77.jpg', 'S ull\n9 uy NKolfbo 31 juil.\n\nft} ya 10 minutes\n\n23752919\nMTN CAM\n\n23752919\nMTN CAM\n\n23752919\n\n-NGAPM'),
(43, 'ebami', 'Peguy', 65568798, 'CNI', '0000-00-00 00:00:00.000000', 'WhatsApp Image 2024-08-19 at 06.28.16_a3d5fc77.jpg', 'S ull\n9 uy NKolfbo 31 juil.\n\nft} ya 10 minutes\n\n23752919\nMTN CAM\n\n23752919\nMTN CAM\n\n23752919\n\n-NGAPM'),
(44, 'ebami', 'Peguy', 65568798, 'CNI', '0000-00-00 00:00:00.000000', 'WhatsApp Image 2024-08-19 at 06.28.16_a3d5fc77.jpg', 'S ull\n9 uy NKolfbo 31 juil.\n\nft} ya 10 minutes\n\n23752919\nMTN CAM\n\n23752919\nMTN CAM\n\n23752919\n\n-NGAPM'),
(45, 'ebami', 'Peguy', 65568798, 'CNI', '0000-00-00 00:00:00.000000', 'WhatsApp Image 2024-08-19 at 06.28.16_a3d5fc77.jpg', 'S ull\n9 uy NKolfbo 31 juil.\n\nft} ya 10 minutes\n\n23752919\nMTN CAM\n\n23752919\nMTN CAM\n\n23752919\n\n-NGAPM'),
(46, 'papouka', 'marion', 65568798, 'CNI', '0000-00-00 00:00:00.000000', 'WhatsApp Image 2024-08-19 at 06.36.43_5c0d273d.jpg', 'OU0NS - CIAT DE BANGANGTE'),
(47, 'ebami', 'aimee', 65568798, 'CNI', '0000-00-00 00:00:00.000000', 'WhatsApp Image 2024-08-19 at 06.36.43_5c0d273d.jpg', 'OU0NS - CIAT DE BANGANGTE'),
(48, 'ebami', 'aimee', 65568798, 'CNI', '0000-00-00 00:00:00.000000', 'WhatsApp Image 2024-08-19 at 06.36.43_5c0d273d.jpg', 'OU0NS - CIAT DE BANGANGTE'),
(49, 'NKOUEBO', 'lory', 65568798, 'CNI', '0000-00-00 00:00:00.000000', 'WhatsApp Image 2024-08-19 at 06.36.43_5c0d273d.jpg', 'OU0NS - CIAT DE BANGANGTE'),
(50, 'NKOUEBO', 'lory', 65568798, 'CNI', '0000-00-00 00:00:00.000000', 'WhatsApp Image 2024-08-19 at 06.36.43_5c0d273d.jpg', 'OU0NS - CIAT DE BANGANGTE'),
(51, 'NKOUEBO', 'lory', 65568798, 'CNI', '0000-00-00 00:00:00.000000', 'WhatsApp Image 2024-08-19 at 06.36.43_5c0d273d.jpg', 'OU0NS - CIAT DE BANGANGTE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
