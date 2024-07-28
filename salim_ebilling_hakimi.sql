-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 13, 2024 at 06:53 AM
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
-- Database: `salim_ebilling_hakimi`
--

-- --------------------------------------------------------

--
-- Table structure for table `billings`
--

CREATE TABLE `billings` (
  `id` int(11) NOT NULL,
  `salesmen_id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `customer_number` varchar(255) NOT NULL,
  `pay_by_cash` varchar(255) NOT NULL DEFAULT '0',
  `pay_by_online` varchar(255) NOT NULL DEFAULT '0',
  `discount` varchar(255) NOT NULL DEFAULT '0',
  `total_quntity` varchar(255) NOT NULL,
  `total_amount` varchar(255) NOT NULL,
  `total_item` varchar(255) NOT NULL,
  `create_date` date NOT NULL,
  `create_time` time NOT NULL,
  `priting_type` enum('Orignal','Copy') NOT NULL DEFAULT 'Orignal'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `billings_details`
--

CREATE TABLE `billings_details` (
  `details_id` int(11) NOT NULL,
  `billing_id` int(11) NOT NULL,
  `category_name` text NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) NOT NULL,
  `category_code` varchar(255) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_status` enum('active','inactive') NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_code`, `category_name`, `category_status`) VALUES
(2, '001', 'Dress girls TOPs', 'active'),
(3, '002', 'TOP', 'active'),
(4, '003', 'LAGINS OK', 'active'),
(5, '004', 'T-shirt', 'active'),
(6, '005', 'Dress Girls', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('550v7bf05cumevkrckjrk9q2sghgmjb3', '::1', 1705120316, 0x5f5f63695f6c6173745f726567656e65726174657c693a313730353132303331363b),
('a4bvafingdo455kvepp7akljkoq1g3rv', '::1', 1705121100, 0x5f5f63695f6c6173745f726567656e65726174657c693a313730353132313130303b),
('b9srvbogcfcjltlo4isg3su28cf8qq01', '::1', 1705119199, 0x5f5f63695f6c6173745f726567656e65726174657c693a313730353131393139393b),
('celamoa3scoe2r8qvs2q90g7ot3s7qnq', '::1', 1705120781, 0x5f5f63695f6c6173745f726567656e65726174657c693a313730353132303738313b),
('e72g8uq7tlv2rfbetafd7aq79h9f9v75', '::1', 1705123557, 0x5f5f63695f6c6173745f726567656e65726174657c693a313730353132333535373b),
('ejon1pnva4ger6f4ll2as9qe5mnac8u8', '::1', 1705119996, 0x5f5f63695f6c6173745f726567656e65726174657c693a313730353131393939363b),
('fqsip8tm66d677d7msup8aovdd4njl3e', '::1', 1705121761, 0x5f5f63695f6c6173745f726567656e65726174657c693a313730353132313736313b),
('h7k0qmeffo1aefcijhli5htnvnkfqma5', '::1', 1705123861, 0x5f5f63695f6c6173745f726567656e65726174657c693a313730353132333836313b),
('h81g4j349bqt9492h2k4jnq0cpr9umll', '::1', 1705124398, 0x5f5f63695f6c6173745f726567656e65726174657c693a313730353132343339383b),
('m3sjo1md4sj25kd0tb46j3ocolsa3ktp', '::1', 1705119587, 0x5f5f63695f6c6173745f726567656e65726174657c693a313730353131393538373b),
('oofg5ubcerfbjnn9v2vg4cin5vspussm', '::1', 1705122857, 0x5f5f63695f6c6173745f726567656e65726174657c693a313730353132323835373b),
('pcciub3qg9hgeoim6ddj90lqahc066e4', '::1', 1705124950, 0x5f5f63695f6c6173745f726567656e65726174657c693a313730353132343736303b),
('rchobr6537uaia1490pq5fgg4tpp0vkd', '::1', 1705123196, 0x5f5f63695f6c6173745f726567656e65726174657c693a313730353132333139363b),
('sg946p2i3a04eppnvm1r75r2e6p76og1', '::1', 1705124760, 0x5f5f63695f6c6173745f726567656e65726174657c693a313730353132343736303b),
('u3o802psp3d1u5rujpmt852t01si0ot2', '::1', 1705121460, 0x5f5f63695f6c6173745f726567656e65726174657c693a313730353132313436303b);

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `uri` varchar(255) NOT NULL,
  `method` varchar(6) NOT NULL,
  `params` text DEFAULT NULL,
  `api_key` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `time` int(11) NOT NULL,
  `rtime` float DEFAULT NULL,
  `authorized` varchar(1) NOT NULL,
  `response_code` smallint(3) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `restric_hki`
--

CREATE TABLE `restric_hki` (
  `id` int(10) NOT NULL,
  `next_date` varchar(255) NOT NULL,
  `type` enum('per','temp') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `restric_hki`
--

INSERT INTO `restric_hki` (`id`, `next_date`, `type`) VALUES
(1, '2024-01-15', 'temp');

-- --------------------------------------------------------

--
-- Table structure for table `salesman`
--

CREATE TABLE `salesman` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `number` varchar(255) NOT NULL,
  `alt_number` varchar(255) NOT NULL,
  `creation_date` varchar(255) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `salesman`
--

INSERT INTO `salesman` (`id`, `name`, `father_name`, `address`, `number`, `alt_number`, `creation_date`, `status`) VALUES
(1, 'tesr', 'testss', 'dewas', '782827877', '7828278779', '', 'active'),
(2, 'Salim2', 'Father test', 'asd', '801212121', '121331212', '', 'active'),
(3, 'Salim1', 'Father test', 'asd', '801212121', '121331212', '', 'active'),
(4, 'Salim3', 'Father test', 'asd', '801212121', '121331212', '', 'active'),
(5, 'Salim4', 'Father test', 'asd', '801212121', '121331212', '', 'active'),
(6, 'Salim5', 'Father test', 'asd', '801212121', '121331212', '', 'active'),
(7, 'Salim7', 'Father test', 'asd', '801212121', '121331212', '', 'active'),
(8, 'Assif', 'test', 'sadasda', '7828278770', '99239232', '', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE `shops` (
  `id` int(10) NOT NULL,
  `shop_name` varchar(255) NOT NULL,
  `shop_gst` varchar(255) NOT NULL,
  `shop_number` varchar(255) NOT NULL,
  `shop_address` varchar(255) NOT NULL,
  `shop_alt_number` varchar(255) NOT NULL,
  `shop_status` enum('active','inactive') NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`id`, `shop_name`, `shop_gst`, `shop_number`, `shop_address`, `shop_alt_number`, `shop_status`) VALUES
(1, 'HAKIMI Dress', '0213112asasd', '7828282222', 'dewasd road', '2131231231', 'active'),
(2, 'HAKIMI CLOthes', '213qweqw', '7828282222', 'dewasd sfdsaa asd', '2131231231', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` enum('admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `username`, `password`, `user_type`) VALUES
(1, 'admin', '34fe0696bd4b33e1851ebac6247402c74fc17b8e3f5ecd6371e99c087dd2560649945883219af6c4f5fee078b807c18b0901a681dc9f6bc656cb35c41eea3ca0e4RPv1ksT1eByv2xs1meFFd2Fz8koYU4ixoIa1jmYP0=', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billings`
--
ALTER TABLE `billings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `billings_details`
--
ALTER TABLE `billings_details`
  ADD PRIMARY KEY (`details_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restric_hki`
--
ALTER TABLE `restric_hki`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salesman`
--
ALTER TABLE `salesman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `billings`
--
ALTER TABLE `billings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `billings_details`
--
ALTER TABLE `billings_details`
  MODIFY `details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `restric_hki`
--
ALTER TABLE `restric_hki`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `salesman`
--
ALTER TABLE `salesman`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `shops`
--
ALTER TABLE `shops`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
