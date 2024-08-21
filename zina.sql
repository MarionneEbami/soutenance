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
-- Database: `zina`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `nom` varchar(24) NOT NULL,
  `prenom` varchar(24) NOT NULL,
  `email` varchar(23) NOT NULL,
  `motdepasse` varchar(23) NOT NULL,
  `texte_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`nom`, `prenom`, `email`, `motdepasse`, `texte_image`) VALUES
('ebami', 'marion', 'blanche@gmail.com', '$2y$10$DoNE.4nLeCNEEgXP', 'Mild Splendour of the various-vested Night!\nMother of wildly-working visions! hail!\nI watch thy gliding, while with watery light\nThy weak eye glimmers through a fleecy veil;\nAnd when thou lovest thy pale orb to shroud\nBehind the gather’d blackness lost on high;\nAnd when thou dartest from the wind-rent cloud\nThy placid lightning o’er the awaken’d sky.'),
('ebami', 'marion', 'blanche3@gmail.com', '$2y$10$nDho/KxWPccyWiMG', 'This is a lot of 12 point text to test the\nocr code and see if it works on all types\nof file format,\n\nThe quick brown dog jumped over the\nlazy fox. The quick brown dog jumped\nover the lazy fox. The quick brown dog\njumped over the lazy fox. The quick\nbrown dog jumped over the lazy fox'),
('ebami', 'marion', 'moki@gmail.com', '$2y$10$UOKYb/kc67TJEVlv', 'Mild Splendour of the various-vested Night!\nMother of wildly-working visions! hail!\nI watch thy gliding, while with watery light\nThy weak eye glimmers through a fleecy veil;\nAnd when thou lovest thy pale orb to shroud\nBehind the gather’d blackness lost on high;\nAnd when thou dartest from the wind-rent cloud\nThy placid lightning o’er the awaken’d sky.'),
('ebami', 'marion', 'moki@gmail.com', '$2y$10$e/jtPIh7M6YHAAF.', 'Mild Splendour of the various-vested Night!\nMother of wildly-working visions! hail!\nI watch thy gliding, while with watery light\nThy weak eye glimmers through a fleecy veil;\nAnd when thou lovest thy pale orb to shroud\nBehind the gather’d blackness lost on high;\nAnd when thou dartest from the wind-rent cloud\nThy placid lightning o’er the awaken’d sky.'),
('ebami', 'marion', 'moki@gmail.com', '$2y$10$a3/di.jImJE4rH.2', 'Mild Splendour of the various-vested Night!\nMother of wildly-working visions! hail!\nI watch thy gliding, while with watery light\nThy weak eye glimmers through a fleecy veil;\nAnd when thou lovest thy pale orb to shroud\nBehind the gather’d blackness lost on high;\nAnd when thou dartest from the wind-rent cloud\nThy placid lightning o’er the awaken’d sky.'),
('ebami', 'marion', 'moki@gmail.com', '$2y$10$CK8f1yfANTbMFcHJ', 'Mild Splendour of the various-vested Night!\nMother of wildly-working visions! hail!\nI watch thy gliding, while with watery light\nThy weak eye glimmers through a fleecy veil;\nAnd when thou lovest thy pale orb to shroud\nBehind the gather’d blackness lost on high;\nAnd when thou dartest from the wind-rent cloud\nThy placid lightning o’er the awaken’d sky.'),
('ebami', 'marion', 'moki@gmail.com', '$2y$10$/nZeL85Vwb4fGxY0', 'Mild Splendour of the various-vested Night!\nMother of wildly-working visions! hail!\nI watch thy gliding, while with watery light\nThy weak eye glimmers through a fleecy veil;\nAnd when thou lovest thy pale orb to shroud\nBehind the gather’d blackness lost on high;\nAnd when thou dartest from the wind-rent cloud\nThy placid lightning o’er the awaken’d sky.'),
('ebami', 'marion', 'moki@gmail.com', '$2y$10$o2lwRKqwHtwnINSI', 'Mild Splendour of the various-vested Night!\nMother of wildly-working visions! hail!\nI watch thy gliding, while with watery light\nThy weak eye glimmers through a fleecy veil;\nAnd when thou lovest thy pale orb to shroud\nBehind the gather’d blackness lost on high;\nAnd when thou dartest from the wind-rent cloud\nThy placid lightning o’er the awaken’d sky.'),
('ebami', 'marion', 'wew@gmail.com', '$2y$10$MKsKug.IG4jlbuj1', 'This is a lot of 12 point text to test the\nocr code and see if it works on all types\nof file format,\n\nThe quick brown dog jumped over the\nlazy fox. The quick brown dog jumped\nover the lazy fox. The quick brown dog\njumped over the lazy fox. The quick\nbrown dog jumped over the lazy fox'),
('ebami', 'marion', 'wew@gmail.com', '$2y$10$HcaGV.eQXD6SaqYW', 'This is a lot of 12 point text to test the\nocr code and see if it works on all types\nof file format,\n\nThe quick brown dog jumped over the\nlazy fox. The quick brown dog jumped\nover the lazy fox. The quick brown dog\njumped over the lazy fox. The quick\nbrown dog jumped over the lazy fox'),
('ebami', 'marion', 'wew@gmail.com', '$2y$10$NrGWquIgocbC9Crf', 'This is a lot of 12 point text to test the\nocr code and see if it works on all types\nof file format,\n\nThe quick brown dog jumped over the\nlazy fox. The quick brown dog jumped\nover the lazy fox. The quick brown dog\njumped over the lazy fox. The quick\nbrown dog jumped over the lazy fox'),
('ebami', 'marion', 'wew@gmail.com', '$2y$10$7ucL.r8bD3FuHw.8', 'This is a lot of 12 point text to test the\nocr code and see if it works on all types\nof file format,\n\nThe quick brown dog jumped over the\nlazy fox. The quick brown dog jumped\nover the lazy fox. The quick brown dog\njumped over the lazy fox. The quick\nbrown dog jumped over the lazy fox'),
('ebami', 'marion', 'wew@gmail.com', '$2y$10$Yf6ERm4FC2VkgzAk', 'This is a lot of 12 point text to test the\nocr code and see if it works on all types\nof file format,\n\nThe quick brown dog jumped over the\nlazy fox. The quick brown dog jumped\nover the lazy fox. The quick brown dog\njumped over the lazy fox. The quick\nbrown dog jumped over the lazy fox'),
('ebami', 'marion', 'wew@gmail.com', '$2y$10$RKca5dXCDTzqCroL', 'This is a lot of 12 point text to test the\nocr code and see if it works on all types\nof file format,\n\nThe quick brown dog jumped over the\nlazy fox. The quick brown dog jumped\nover the lazy fox. The quick brown dog\njumped over the lazy fox. The quick\nbrown dog jumped over the lazy fox');

-- --------------------------------------------------------

--
-- Table structure for table `etudiant`
--

CREATE TABLE `etudiant` (
  `nom` varchar(34) NOT NULL,
  `prenom` varchar(12) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `objets`
--

CREATE TABLE `objets` (
  `nom` varchar(24) NOT NULL,
  `description` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `objets`
--

INSERT INTO `objets` (`nom`, `description`) VALUES
('eswsw', 'ededew'),
('ddxxx', 'ewsxsxsxs');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_nom` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nom` varchar(23) NOT NULL,
  `role` varchar(23) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nom`, `role`) VALUES
('ebami', 'user'),
('ebami', 'user'),
('ebami', 'administrateur'),
('ebami', 'user'),
('ebami', 'user'),
('bisseki', 'administrateur');

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `nom` varchar(24) NOT NULL,
  `prenom` varchar(24) NOT NULL,
  `email` varchar(24) NOT NULL,
  `motdepasse` varchar(24) NOT NULL,
  `role` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`nom`, `prenom`, `email`, `motdepasse`, `role`) VALUES
('ebami', 'marion', '', '', ''),
('bisseki', 'lolo', '', '', ''),
('bisseki', 'lory', '', '', ''),
('ebami', 'marion', 'marionne@gmail.com', '$2y$10$JemX1OcGkQo6B5LvN', ''),
('papouka', 'lolo', 'marionne1@gmail.com', '$2y$10$DmF7NORi7ivaSPo5D', ''),
('ebami', 'aimee', 'marionne3@gmail.com', '$2y$10$39.SJFFIu3sH7kd/g', ''),
('ebami', 'marion', 'marionne8@gmail.com', '$2y$10$bBl9SzjOEx6ZDsRDA', ''),
('ebami', 'marion', 'marionneb@gmail.com', '$2y$10$ITZUmwiSoLFhuzJzk', ''),
('ebakisse', 'aimee', 'ebakisseaimee@gmail.com', '$2y$10$AXQaSYPWgjIDfNHaP', ''),
('ebami', 'marion', 'marionnes@gmail.com', '$2y$10$ddAx4Lc4J1tcJY5Vy', ''),
('bisseki', 'leonnie', 'aimeepapouka@gmail.com', '$2y$10$fqRckyUS3hLnZ2gO6', ''),
('ebami', 'marion', 'marionnesd@gmail.com', '$2y$10$EIyFX7bmZCSPn9MBI', ''),
('ebakisse', 'aimee', 'ebakisse@gmail.com', '$2y$10$urBpMtuhGrhQghhLu', ''),
('peguy', 'lo', 'peguy@gmail.com', '$2y$10$UfFCyMvpVRCqYPLvc', ''),
('yo', 'yo', 'yo@gmail.com', '$2y$10$dNjRZIQio9e3gb2ZX', ''),
('ebakisse', 'lory', 'ebakisselory@gmail.con', '$2y$10$UVrPx71Gsjc1wCyvb', ''),
('elobe', 'leonnie', 'elobeleonnie@gmail.com', '$2y$10$DDi3MCEa5r1nMMYy.', ''),
('ebami', 'blanche', 'blanche@gmail.com', '$2y$10$1vZ9QVC99geH9Z/iV', ''),
('ebami', 'marion', 'blanche12@gmail.com', '$2y$10$MG4Jfa5JkVQw4aNEo', ''),
('ebami', 'lory', 'blanche23@gmail.com', '$2y$10$hXSttE7QxBbrJH/Cv', ''),
('ebami', 'marion', 'blanche23@gmail.com', '$2y$10$wyIv1GiRGn6kbPZ2X', 'user'),
('peguy', 'marion', '', '', ''),
('ebami', 'lory', 'marionne@gmail.com', '$2y$10$5F1/1j7F.pmLC5g7D', 'utilisateur'),
('bisseki', 'aimee', 'elobeleonnie@gmail.com', '$2y$10$bDJr7wyUZGphdwaAp', 'administrateur'),
('ebami', 'marion', 'yoy@gmail.com', '$2y$10$sMUXrwUrIg.Tk0y8u', 'utilisateur'),
('ebami', 'marion', 'ange@gamil.com', '$2y$10$XmxsDavnUkgZeuFVY', 'utilisateur'),
('ebami', 'marion', 'leonnie@gmail.com', '$2y$10$3NA/TxrRgvY75rxYQ', 'utilisateur'),
('ebami', 'marion', 'jiju@gmail.com', '$2y$10$IlgFrXGHhHBju6Ub.', ''),
('ebami', 'marion', 'yuti@gmail.com', '$2y$10$8bsl9FxI8StDycfFx', ''),
('NKOUEBO', 'Peguy', 'peguynkouebo100@gmail.co', '$2y$10$4QsCvDJTzTB3yLX3B', ''),
('ebami', 'marion', 'lok@gmail.com', '$2y$10$JAL80CLdsUGHSgjM4', ''),
('ebami', 'marion', 'yiy@gmail.com', '$2y$10$quQPExmlHj1DmMu6w', '');

-- --------------------------------------------------------

--
-- Table structure for table `utilsateurs`
--

CREATE TABLE `utilsateurs` (
  `nom` varchar(24) NOT NULL,
  `prenom` varchar(24) NOT NULL,
  `email` varchar(23) NOT NULL,
  `motdepasse` varchar(23) NOT NULL,
  `photo` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `utilsateurs`
--

INSERT INTO `utilsateurs` (`nom`, `prenom`, `email`, `motdepasse`, `photo`) VALUES
('ebami', 'marion', 'peguynkouebo100@gmail.c', '$2y$10$kGR552R/23BFdD4q', ''),
('ebami', 'marion', 'blanche@gmail.com', '$2y$10$.bHV5.9wGsE5ROFV', ''),
('ebami', 'marion', 'yeyu@gmail.com', '$2y$10$K1DSPN3uhVk9tvbK', ''),
('NKOUEBO', 'Peguy', 'peguynkouebo100@gmail.c', '$2y$10$Hyflq/lbIYJlPliJ', ''),
('NKOUEBO', 'Peguy', 'peguynkouebo@gmail.com', '$2y$10$Tc/5JRh0H23RI1AQ', ''),
('NKOUEBO', 'Peguy', 'peguynkoue@gmail.com', '$2y$10$dZPcBleXe4hP5zSJ', ''),
('NKOUEBO', 'Peguy', 'peguy@gmail.com', '$2y$10$Ec7L1VtiUvpSPbKp', ''),
('NKOUEBO', 'Peguy', 'peguypipi@gmail.com', '$2y$10$H1udbFHfWhSLdLRg', ''),
('NKOUEBO', 'Peguy', 'peguyppi@gmail.com', '$2y$10$nVGLiXnS6h02CI8d', ''),
('ebami', 'aimee', 'ange@gamil.com', '$2y$10$7jtLihcgPYXVe3Bt', ''),
('ebami', 'marion', 'tiyu@gmail.com', '$2y$10$J9./6hK5e/xNkaCc', ''),
('papouka', 'lory', 'lorypapouka@gmail.com', '$2y$10$3i2y5ipg1bAxsozA', ''),
('ebami', 'aimee', 'yeti@gmail.com', '$2y$10$f0VK4VF5vgavQBUg', ''),
('Ebakisse', 'aimee', 'aimeepapouka@gmail.com', '$2y$10$j1JKramdTqP/WEev', ''),
('ebami', 'marion', 'hety@gmail.com', '$2y$10$1SE8/Cc4BeShRg5R', 'uploads/popo (1).jpg'),
('ebami', 'marion', 'rere@gmail.com', '$2y$10$AHRNUcB3IKQ6gkah', 'uploads/popo (2).jpg'),
('ebami', 'marion', 'very@gmail.com', '$2y$10$AlVCCr9iOxJ.Oipa', 'uploads/popo (2).jpg'),
('ebami', 'marion', 'hyru@gmail.com', '$2y$10$GZ6VziuLbOQw8ITZ', 'images/popo (1).jpg'),
('papouka', 'lory', 'rylo@gmail.com', '$2y$10$ze88tXm/snFjN16e', 'images/popo (2).jpg'),
('peguy', 'marionne', 'pouty@gmail.com', '$2y$10$hh4mN0QTT1XQxiwX', 'images/popo (1).jpg'),
('bisseki', 'leonnie', 'gege@gmail.com', '$2y$10$MZV6OnEYriicOiqS', 'images/popo (1).jpg'),
('NKOUEBO', 'Peguy', 'pery@gmail.com', '$2y$10$WMjqlzq3JlsATpM9', 'images/popo (1).jpg'),
('ebakisse', 'aimee', 'julo@gmail.com', '$2y$10$./7cf3zb1IfdYOlT', 'uploads/popo (1).jpg'),
('papouka', 'marion', 'manou@gmail.com', '$2y$10$pR.7AejJSM9XNvQl', 'uploads/popo (2).jpg'),
('ebakisse', 'vicky', 'vickybelle@gmail.com', '$2y$10$JrE3in/ANYYkGz4f', 'uploads/popo (1).jpg'),
('vicky', 'aimee', 'vickyaimee@gmail.com', '$2y$10$LcJyR8HI/LCHAJgO', 'uploads/popo (2).jpg'),
('ebami', 'vicky', 'papouka@gmail.com', '$2y$10$V5ZuHZ2V1Ju.HvBh', 'uploads/popo (1).jpg'),
('ebakisse', 'patience', 'victoire@gmail.com', '$2y$10$3JgmEA3EZ2zzAIbV', 'uploads/popo (2).jpg'),
('ebami', 'marionne', 'marionn12e@gmail.com', '$2y$10$NOEPOWQtcRryntiQ', 'uploads/.jpg'),
('ebami', 'marion', 'blanche456@gmail.com', '$2y$10$HeRdExet4JaFahOD', 'uploads/.jpg'),
('papouka', 'marion', 'lolk@gmail.com', '$2y$10$zqQ9PuaTE2pUgIZD', 'uploads/eng_bw.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
