-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2023 at 08:16 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sample`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `birthdate` varchar(255) NOT NULL,
  `age` int(2) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_no` bigint(12) NOT NULL,
  `civil_stat` varchar(255) NOT NULL,
  `gender` varchar(12) NOT NULL,
  `education_level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `firstname`, `middlename`, `lastname`, `birthdate`, `age`, `address`, `contact_no`, `civil_stat`, `gender`, `education_level`) VALUES
(11, 'Cherryl ', 'Machuca', 'Mainit', 'April 01, 2000', 0, 'Sogod leyte', 9654882656, 'Single', 'Female', ''),
(14, 'Mary Grace', 'Turalba', 'Siega', 'October 30 2000', 23, 'Olisihan', 923636324, 'Single', 'Female', ''),
(15, 'Dianne', 'Siega', 'Olayvar ', '', 21, 'Union', 0, 'Single ', 'Female ', ''),
(16, 'Anthony ', 'Miano', 'Saguisa ', 'Secret ', 0, 'jsdbfkjbsfksb@gmail.com', 9223372036854775807, 'Single', 'Male', 'Hubog '),
(17, 'Kylla jane', 'Benero', 'Octobre ', '', 0, 'Tampoong Sogod Southern Leyte ', 0, '', '', ''),
(18, 'Jomaico ', 'Dulog', 'Abusca', '07/07/2002', 12, 'South Carolina 254 street', 9305111879, 'Single ', 'Prefer not t', 'Depende sa sabot'),
(19, 'Niña', 'Lindio', 'Gay', '01/24/2001', 21, 'Consolacion, Sogod Southern Leyte ', 9512263835, 'Single', 'Female', 'College '),
(20, 'Zal Gabriel', 'Lagahit', 'Banque', '02/11/2003', 20, 'Timba Malitbog So, Leyte', 9502494794, 'Single', 'Male', '3rd year '),
(21, 'Meryjie ', 'Sarsaparilla ', 'Meking ', '03-01-2003', 20, 'Poblacion Bontoc Southern Leyte ', 9123456789, 'Single ', 'Female ', ''),
(22, 'John Wendell ', '', 'Cuadra', '07/28/2003', 20, 'Maujo Malitbog Southern Leyte', 9639641523, 'Single', 'Male', '3rd year'),
(23, 'April jean', 'Ajoc', 'Bucog', 'April 29, 2003', 20, 'Taytagan, Bontoc, Southern Leyte', 9274629523, 'Single', 'Female', ''),
(24, 'Regine', 'Ariscon', 'Rellon', 'June 24, 2002', 21, 'Sogod Southern leyte', 9991112341, 'single', 'Female', '3rd year'),
(25, 'Mari Jon', 'Villamor ', 'Himaya', '', 0, 'Tampoong Sogod Southern Leyte', 0, 'Single', 'Male', '3rd year college '),
(26, 'Beberlly ', '', 'Palconit ', 'June 16,2003', 20, 'Concepcion 1 Sogod Southern Leyte  Snake street purok 7', 22222, 'Single', 'Female', '3rd Year'),
(27, 'Rhemcel', 'Arellano', 'Templa', 'November 5 2001', 22, 'Olisihan ', 9121532503, 'Single', 'Female', '3rdyr'),
(28, 'Ana Leona ', 'Mangaca', 'Pontud', 'Dec. 13 2000', 22, 'Brgy. Zone V Sogod So. Leyte', 9069236697, 'Single', 'Female', '3rd Year College'),
(29, 'Vanessa ', 'E.', 'Lawag', '09/24/1999', 0, 'Sitio cagang, Polahongon, mahaplag, leyte', 0, 'single', 'Female', '3year'),
(30, 'Jhiela', 'Mañable', 'Laroga', 'June5, 2002', 21, 'Canlupao Tomas Oppus, So Leyte', 9659843512, 'Single', 'Female', ''),
(31, 'Joseph Janedro', 'Singson', 'Tundag', '3-22-2002', 21, 'Mahayahay ', 0, '', '', ''),
(32, 'Christian jay', 'Avelino', 'Abrao', '08-04199', 23, 'Purok malonggay Union bontoc southern Leyte ', 912097125, 'Single', 'Male', '3year'),
(33, 'Bea', 'Ganda', 'Morales', 'November 14,2001', 22, 'Pangi Bontoc So. Leyte', 9515112949, 'Single', 'Female', 'College '),
(34, 'Angela', 'silverio', 'Ladao', '', 0, 'Sogod Southern leyte', 0, '', '', ''),
(35, 'Jeliebeth ', 'Elan', 'Galimba ', '09/30/2002', 21, 'Tabugon, Liloan, Southern Leyte ', 9856312270, 'Single', 'Female ', 'Third Year'),
(36, 'Clint Ryan', 'B', 'Migue', '11/30/2002', 19, 'Canlupao Tomas Oppus ', 9124677, 'Single ', 'Male', '3rd year '),
(37, 'Rizalyn', 'C', 'Lita', 'December 30 2002', 20, 'San Miguel tomas opus southern leyte', 9485973712, 'Single ', 'Female ', '3'),
(38, 'Mary Grace ', 'Quibel', 'Briones', '09/23/2002', 21, 'Sogod So. Leyte', 9056734232, 'Single ', 'Female ', 'College '),
(39, 'Korina', 'Dumali', 'Bernido', '01-01-2001', 18, 'San Vicente, Bontoc, So. Leyte', 9757741089, 'Single', 'Female', 'Og mo fourth year'),
(40, 'Ehla ', 'Amongan', 'Arellano', '', 0, 'Libagon southern leyte', 0, '', '', ''),
(41, 'Ruby Grace', 'Ranque', 'Manigo', 'April 13 2003', 20, 'Tigbao,Libagon Southern Leyte', 9512071605, 'S', 'F', '3rd year'),
(42, 'Melissa Mae', 'Montajes', 'Sibunga', '05/15/2002', 21, 'Mayuga, Libagon.So.Leyte', 9120666898, 'single', 'female', '3rd year'),
(43, 'Joedane', 'Angelo', 'Simo', '11/23/2002', 21, 'Manglit, Pintuyan Southern Leyte', 0, 'Single', 'Male', '3rd year'),
(44, 'Apple Mae', 'Catigan', 'Quiban', 'June 16, 2001', 22, 'Suba, Sogod, Southern Leyte', 9753989567, 'single', 'Female', '3rd year'),
(45, 'Helee Joy ', 'Nocalan', 'Oppus', 'September 03,2001', 22, 'Himakilo, Bontoc, Southern Leyte', 9056127336, 'Single', 'F', '3rd College'),
(47, 'John Kenneth', 'A.', 'Pamogas', 'June 10 2003', 20, 'Sto. Niño Matalom Leyte', 0, '', 'Male', ''),
(48, 'Renia Mae', 'Perez', 'Jabay', 'January 29,2002', 21, 'Pamahawan Bontoc Southern Leyte', 9454850349, 'Single ', 'Female ', '3'),
(49, 'Sandra', '', 'Baul', 'October 28,2002', 21, 'Canlupao', 9608096415, 'Single', '20', ''),
(50, 'Erica Ann', 'Makilang', 'Subiaga', '06/20/2002', 21, 'San Jose Sogod Southern Leyte', 9630503342, 'single', 'female', '3rd year'),
(52, 'Annabel', 'L.', 'Abadines', '', 0, 'Malbago, Bontoc So.Leyte', 0, 'Single', 'Fenale', '3 Year'),
(53, 'Argie', 'Gaviola', 'Maitem', 'November 24, 2001', 22, 'San Salvador Matalom, Leyte', 0, '', 'Male', ''),
(54, 'Ira Marie', 'Entrimotsa', 'Salar', 'August 03,2001', 22, 'Union, Bontoc Southern Leyte ', 9502825572, 'Single', 'Female', '3rd College');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
