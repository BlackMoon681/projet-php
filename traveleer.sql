-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2022 at 04:10 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `traveleer`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `c_id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`c_id`, `name`, `email`, `password`) VALUES
(140, 'Mohamed Cherif', 'mohamed.cherif@esen.tn', 123),
(141, 'Ahmed marzouki', 'Ahmed.marzouki@esen.tn', 147);

-- --------------------------------------------------------

--
-- Table structure for table `commande`
--

CREATE TABLE `commande` (
  `id` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `service` varchar(100) NOT NULL,
  `qte` int(100) NOT NULL,
  `total` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `commande`
--

INSERT INTO `commande` (`id`, `email`, `service`, `qte`, `total`) VALUES
(75, 'mohamed.cherif@esen.tn', 'Kef Abed, Bizerte', 3, 1200),
(76, 'mohamed.cherif@esen.tn', 'Sac camping', 1, 127);

-- --------------------------------------------------------

--
-- Table structure for table `loginform`
--

CREATE TABLE `loginform` (
  `ID` int(11) NOT NULL,
  `User` varchar(100) NOT NULL,
  `Pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loginform`
--

INSERT INTO `loginform` (`ID`, `User`, `Pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `loginformt`
--

CREATE TABLE `loginformt` (
  `ID` int(100) NOT NULL,
  `User` varchar(100) NOT NULL,
  `Pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loginformt`
--

INSERT INTO `loginformt` (`ID`, `User`, `Pass`) VALUES
(3, 'travailleur', 'travailleur');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `desc` text NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `rrp` decimal(7,2) NOT NULL DEFAULT 0.00,
  `quantity` int(11) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `desc`, `price`, `rrp`, `quantity`, `img`) VALUES
(1, 'Sac camping', '<p>Emballage inclus: 1 x 80L sac à dos sac à bagages Caractéristiques: Couleur: COMME L\'IMAGE L\'INDIQUE Capacité: 80L Matière: 100% polyester Taille: Env. 70x40x20cm / 27.56x15.75x7.87 &quot; Caractéristiques: Le sac à dos super grand voyage rend votre voyage confortable et satisfait. Apportez tous vos effets personnels lorsque vous voyagez, et plusieurs poches zippées pour séparer les objets dans leur propre place.</p>', '126.90', '0.00', 1000, 'product-1.jpg'),
(2, 'Couteau', '', '29.90', '59.90', 34, 'product-2.jpg'),
(3, 'Lunettes', '', '120.00', '150.00', 23, 'product-3.jpg'),
(4, 'Espadrille ', '', '159.90', '200.00', 0, 'product-4.jpg'),
(56, 'Kef Abed, Bizerte', '<p>Le Chalet Est Situé Sur Les Hauteurs De Kef Abbed Et Entouré Par La Beauté Des Montagnes Sauvages De Bizerte À Seulement 40 Km Du Centre-Ville De Bizerte À 100 Km De Laéroport International Tunis Carthage Et 74 Km De La Belle Tabarka</p>', '400.00', '500.00', 23, 'img-3.jpg'),
(57, 'El Mgasseb, Beja', '<p>El Mgasseb, Un Coin Magique Attaché Au Gouvernorat De Bèja Du Nord-Ouest De La Tunisie Qui Est Située À Une Centaine De Kilomètres De Tunis Et À Une Cinquantaine De Kilomètres De La Frontière Tuniso-Algérienne, Précisément À Nefza.</p>', '320.00', '350.00', 34, 'img-2.jpg'),
(58, 'Bni mtir Ain drahem ', '<p>Beni MTir Ou Beni Metir Est Un Village Du Nord-Ouest De La Tunisie Situé Dans La Région Montagneuse De Kroumirie À Quelques Kilomètres DAïn Draham. La Ville Se Trouve Sur Le Territoire De La Confédération De Tribus Berbères Des Kroumirs.', '350.00', '400.00', 100, 'img-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `todos`
--

CREATE TABLE `todos` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp(),
  `checked` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `todos`
--

INSERT INTO `todos` (`id`, `title`, `date_time`, `checked`) VALUES
(47, 'Travailler', '2022-04-28 03:09:23', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loginform`
--
ALTER TABLE `loginform`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `loginformt`
--
ALTER TABLE `loginformt`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `todos`
--
ALTER TABLE `todos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `c_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT for table `commande`
--
ALTER TABLE `commande`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `loginform`
--
ALTER TABLE `loginform`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `loginformt`
--
ALTER TABLE `loginformt`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `todos`
--
ALTER TABLE `todos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
