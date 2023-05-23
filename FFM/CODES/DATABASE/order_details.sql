-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2023 at 02:39 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `order_details`
--

-- --------------------------------------------------------

--
-- Table structure for table `entry_details`
--

CREATE TABLE `entry_details` (
  `full_name` varchar(100) NOT NULL,
  `extra_masala` varchar(100) NOT NULL,
  `address1` varchar(100) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `quantity` int(5) NOT NULL,
  `size` varchar(100) NOT NULL,
  `payment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `entry_details`
--

INSERT INTO `entry_details` (`full_name`, `extra_masala`, `address1`, `phone_number`, `quantity`, `size`, `payment`) VALUES
('karthick', 'Chicken Masala, Fish Fry Masala', 'Ragavendhira Nagar', '6381145567', 11, 'Small', 'Cash on delivery'),
('Karthick', 'Fish Fry Masala', 'Ragavendhira Nagar', '0123456789', 5, 'Medium', 'Credit/Debit Card'),
('Senthil', 'Chicken65 Masala, Mutton Masala', 'Ragavendhira Nagar', '7894561230', 52, 'Small', 'Cash on delivery');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
