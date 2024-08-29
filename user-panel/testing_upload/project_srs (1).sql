-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2023 at 10:03 PM
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
-- Database: `project_srs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(100) DEFAULT NULL,
  `admin_email` varchar(100) DEFAULT NULL,
  `admin_password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`) VALUES
(1, 'Hamza', 'hamza@gmail.com', '12345'),
(2, 'gulzar', 'g@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `Credit_Card_Number` bigint(20) DEFAULT NULL,
  `cvv` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`id`, `name`, `email`, `Address`, `city`, `Credit_Card_Number`, `cvv`) VALUES
(1, 'hamza ashraf', 'hamza@gmail.com', 'shadman town karachi', 'karachi', 11111, 232),
(2, 'hamza ashraf', 'hamza@gmail.com', 'shadman town karachi', 'karachi', 11111, 232),
(3, 'fahad Zahid', 'f@gmail.com', 'shadman town karachi', 'karachi', 202, 11121);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `message` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'fahad Zahid', 'f@gmail.com', 'hello ', 'hi'),
(2, 'hamza ashraf', 'hamza@gmail.com', 'hello ', 'hi'),
(3, 'hammad', 'hammad@gmail.com', 'hello ', 'wellcom');

-- --------------------------------------------------------

--
-- Table structure for table `order_now`
--

CREATE TABLE `order_now` (
  `id` int(11) NOT NULL,
  `fisrt_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `company_name` varchar(100) DEFAULT NULL,
  `company_email` varchar(100) DEFAULT NULL,
  `company_bank_account` varchar(200) DEFAULT NULL,
  `testing_brief` varchar(250) DEFAULT NULL,
  `component_name` varchar(100) DEFAULT NULL,
  `component_detail` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT 'Pending',
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_now`
--

INSERT INTO `order_now` (`id`, `fisrt_name`, `last_name`, `phone`, `company_name`, `company_email`, `company_bank_account`, `testing_brief`, `component_name`, `component_detail`, `status`, `user_id`) VALUES
(12, 'hamza', 'ashraf', 3482232969, 'comapny', 's@gmail.com', 'Soneri Bank Limited', 'AA NiMH Batteries.jpg', 's', 's', 'Rejected', 1),
(13, 'Gulzar', 'khan', 3382232868, 'Multinational Office depart ', 'gulzar@gmail.com', 'Allied Aitebar Islamic Banking.', 'AA NiMH Batteries.jpg', 'AA NiMH Batteries', 'testing ', 'Approved', 9),
(14, 'fahad', 'zahid', 3111231234, 'k.A Brother', 'f@gmail.com', 'Select Your Bank Company Account', 'AA NiMH Batteries.jpg', 'Batteries Nimh testing', 'testing ', 'Rejected', 12),
(15, 'Hammad', 'Rehman', 301231233, 'Multinational Office depart', 'hammad@gmail.com', 'Allied Aitebar Islamic Banking.', 'capicitor.jpg', 'AA Capicitor', 'AA Capicitor', 'Approved', 16);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` bigint(100) NOT NULL,
  `image` varchar(250) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `image`, `category`) VALUES
(1, ' 10pcs 2200uF 50V Electrolytic Radial Capacitor 10', 800, 'capacitor.jpg', 'Capacitors'),
(2, ' AA NiMH Batteries', 1000, 'AA NiMH Batteries.jpg', 'Batteries'),
(3, 'Chanzon 100pcs 1/2W (0.5W) 1K Ω ohm Metal Film Fix', 500, 'Metal Film Fixed Resistor.jpg', 'Resistors'),
(4, 'Fuse 5 Amp Fast-Blow', 9900, '1e7f4ab7080f169dcde793b871977efd.jpg_300x0q75.webp', 'Product'),
(5, '8 X Panasonic D Batteries Super Heavy Duty Carbon ', 1200, 'Panasonic D Batteries.jpg', 'Batteries'),
(6, ' Roll over image to zoom in Duracell Coppertop AA ', 2000, 'Coppertop AA Batteries.jpg', 'Batteries'),
(7, 'Chanzon 2pcs Wirewound Aluminum Shell Resistor 10 ', 999, 'Wirewound Aluminum Shell.jpg', 'Resistors'),
(8, 'Metal Film Resistor', 500, 'metal-film-resistor-250x250.webp', 'Product'),
(9, 'Dorman 973-523 HVAC Blower Motor Resistor Kit Comp', 800, 'Resistor Motor.jpg', 'Resistors'),
(10, 'ENERLITES Toggle Light Wall Plate Bundle, Single P', 700, 'Pole Electrical Switch.jpg', 'Switches'),
(11, 'ENERLITES 3 Speed In Wall Ceiling Fan Control, Sli', 1300, 'Ceiling Fan Control switch.jpg', 'Switches'),
(12, 'Chanzon 100pcs 0805 SMD Resistor 10K Ω ohm 1/8W 0.', 1600, 'SMD Resistor.jpg', 'Resistors'),
(13, 'uxcell 15 Pcs Axial Lead 1% Tolerance Metal Film R', 600, 'Oxide Film Resistors.jpg', 'Resistors'),
(14, 'Energizer 2032 Batteries, Lithium CR2032 Watch Bat', 1200, 'Energizer 2032 Batteries,.jpg', 'Batteries'),
(15, 'Basics 4-Pack 9 Volt Alkaline Everyday Batteries', 1000, 'Batteries.jpg', 'Product'),
(16, '10Pcs 15A Low Profile Mini Micro Blade Fuse 15 Amp', 700, 'Mini Micro Blade Fuse.jpg', 'Fuses'),
(17, 'Bussmann S-15 15 Amp Type S Time-Delay Dual-Elemen', 500, 'bussman fusses.jpg', 'Fuses'),
(18, 'Bussmann NO.95BK 95 ATC/ATR Bulk Fuse Assortment', 900, 'ATR Bulk Fuse Assortment.jpg', 'Fuses'),
(19, 'Amazon Basics 8-Pack 9 Volt Alkaline Performance A', 1200, 'All-Purpose Batteries.jpg', 'Batteries'),
(20, 'Twidec/2Pcs 50W 10 Ohm Wirewound Resistors Aluminu', 500, 'Wirewound Resistors.jpg', 'Resistors'),
(21, 'Himel 2 USB with International Socket', 600, 'international-socket.webp', 'Sockets'),
(22, ' Smart Light Switch KS200, Single Pole, Neutral Wi', 900, 'Smart Light Switch.jpg', 'Switches'),
(23, 'GE Genteq Round Capacitor 70 7.5 uf MFD 370 Volt 2', 1200, 'capacitors.webp', 'Capacitors'),
(24, 'Replacement for 6 pcs Panasonic FM Series Capacito', 1000, 'Panasonic FM Series Capacitors.jpg', 'Capacitors'),
(25, 'Twidec/2Pcs 50W 10 Ohm Wirewound Resistors Aluminu', 800, 'SMD Resistor.jpg', 'Product'),
(26, '10pcs 2200uF 50V Electrolytic Radial Capacitor 10', 800, 'capacitor.jpg', 'Product'),
(27, 'Bussmann S-15 15 Amp Type S Time-Delay Dual-Elemen', 500, 'bussman fusses.jpg', 'Product'),
(28, 'EBL 3.7V Li-ion Rechargeable Batteries 3000mAh 18J', 300, 'rechargeable batterie.jpg', 'Batteries');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_contact` bigint(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`user_id`, `user_name`, `user_email`, `user_password`, `user_contact`) VALUES
(1, 'hamza', 'hamza@gmail.com', '12345', 3482212123),
(2, 'fahad', 'a@gmail.com', '1234', 1232323123),
(9, 'gulzar', 'gulzar@gmail.com', '1234', 3111231234),
(11, 'hamza', 'hamza@gmail.com', '12345', 3482212123),
(12, 'fahad', 'a@gmail.com', '1234', 1232323123),
(14, 'muskan', 'muskan@gmail.com', '1234', 3451234321),
(15, 'aqdas', 'aqdas@gmail.com', '1234', 301231230),
(16, 'hammad', 'hammad@gmail.com', '123', 312212121);

-- --------------------------------------------------------

--
-- Table structure for table `singup`
--

CREATE TABLE `singup` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `singup`
--

INSERT INTO `singup` (`id`, `name`, `email`, `password`) VALUES
(1, 'hamza', 'hamza@gmail.com', '1234567'),
(8, 'hamza', 'h@gmail.com', '12345'),
(9, 'fahad', 'f@gmail.com', '12345'),
(10, 'fahad', 'fahad@gmail.com', '12345'),
(11, 'hamza', 'a@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `user_signup`
--

CREATE TABLE `user_signup` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `useremail` varchar(50) DEFAULT NULL,
  `userpassword` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_now`
--
ALTER TABLE `order_now`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `singup`
--
ALTER TABLE `singup`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_signup`
--
ALTER TABLE `user_signup`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `useremail` (`useremail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order_now`
--
ALTER TABLE `order_now`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `singup`
--
ALTER TABLE `singup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_signup`
--
ALTER TABLE `user_signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_now`
--
ALTER TABLE `order_now`
  ADD CONSTRAINT `order_now_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `registration` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
