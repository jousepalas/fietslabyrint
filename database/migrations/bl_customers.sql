-- phpMyAdmin SQL Dump
-- version 4.9.10
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generated on: 14 nov 2022 om 16:06
-- Serverversie: 10.3.36-MariaDB
-- PHP-versie: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

-- --------------------------------------------------------

--
-- Tabelstructure for table `bl_customers`
--

CREATE TABLE `bl_customers` (
  `id` int(11) NOT NULL,
  `added_on` date NOT NULL,
  `last_update` date NOT NULL,
  `company_name` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `street` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `street_nr` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `zip` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `city` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `contact_person` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `e_mail` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `phone` varchar(30) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

INSERT INTO `bl_customers` (`id`, `added_on`, `last_update`, `company_name`, `street`, `street_nr`, `zip`, `city`, `contact_person`, `e_mail`, `phone`) VALUES
(1, '2020-10-11', '2022-11-10', 'Z-power', 'Valdezstraat', '34', '3433KK', 'Utrecht', 'Jan Janssen', 'jan@janssen.nl', '073-45555524'),
(2, '2022-10-03', '2022-10-04', 'Fridgeplus', 'Kingstreet', '2', '5534JJ', 'Breda', 'John Smith', 'john@gmail.com', '078-54354732'),
(3, '2022-07-12', '2022-07-25', 'Biky', 'Delatourstraat', '788', '3433LK', 'Maastricht', 'Jennifer de Jong', 'de.jong@gmail.com', '078-545463545'),
(4, '2022-06-05', '2022-07-30', 'Zpower', 'Dam', '7', '1022PA', 'Amsterdam', 'Leila de le Tour', 'le.tour@zpower.nl', '020-45646756'),
(5, '2022-03-06', '2022-06-10', 'Philips', 'Superstraat', '99a', '3343DO', 'Oegstgeest', 'Pim Paardenkoper', 'pim@philips.nl', '078-5454545'),
(6, '2022-10-26', '2022-10-27', 'Sony', 'Copastraat', '8', '3433LL', 'Amstelveen', 'Linda Johnson', 'linda@sony.com', '787845454');


--
-- Index for table `bl_customers`
--
ALTER TABLE `bl_customers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for table `bl_customers`
--
ALTER TABLE `bl_customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
