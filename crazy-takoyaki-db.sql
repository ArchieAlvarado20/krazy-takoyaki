-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2023 at 02:34 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crazy-takoyaki-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblbrand`
--

CREATE TABLE `tblbrand` (
  `id` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblbrand`
--

INSERT INTO `tblbrand` (`id`, `brand`) VALUES


-- --------------------------------------------------------

--
-- Table structure for table `tblcancel`
--

CREATE TABLE `tblcancel` (
  `id` int(11) NOT NULL,
  `t_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `void_by` varchar(255) NOT NULL,
  `cancel_request` varchar(255) NOT NULL,
  `action` varchar(255) NOT NULL,
  `c_qty` int(11) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblcart`
--

CREATE TABLE `tblcart` (
  `id` int(11) NOT NULL,
  `transno` varchar(255) NOT NULL,
  `p_id` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` decimal(18,2) NOT NULL,
  `disc` decimal(18,2) NOT NULL,
  `total` decimal(18,2) NOT NULL,
  `sdate` date NOT NULL,
  `stime` time NOT NULL,
  `status` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `trans_count` int(11) NOT NULL,
  `trans_month` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Triggers `tblcart`
--
DELIMITER $$
CREATE TRIGGER `cart_qty` BEFORE INSERT ON `tblcart` FOR EACH ROW SET new.total = ((new.price) * (new.qty))
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE `tblcategory` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`id`, `category`) VALUES
(2, 'A-5'),
(3, 'A-4'),
(4, 'A-3'),
(7, 'A-2'),
(38, 'A-1');

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `id` int(11) NOT NULL,
  `pcode` varchar(255) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `category` tinyint(11) DEFAULT 0,
  `percent` int(11) NOT NULL,
  `barcode` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `cost` decimal(18,2) NOT NULL,
  `price` decimal(18,2) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `profit` decimal(18,2) NOT NULL,
  `qty` int(11) NOT NULL,
  `re_order` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `view` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`id`, `pcode`, `p_name`, `brand`, `category`, `percent`, `barcode`, `description`, `cost`, `price`, `date`, `profit`, `qty`, `re_order`, `image`, `status`, `user_id`, `view`) VALUES
(1, 'PC-294608', 'A1', '', 1, 0, '', '4pcs octo-bits w/ veggies alacart', 0.00, 35.00, '2023-09-19 04:05:28', 0.00, -45, 0, 'upload/8ecd1036a67821107a987fac442ccb5538a31b02_8353.1', 1, 1, 29),
(3, 'PC-430296', 'A2', '', 1, 0, '', '6pcs octo-bits w/ veggies alacart', 0.00, 50.00, '2023-09-19 04:28:18', 0.00, -22, 0, 'upload/a39f4b77406142417866719f09d563177dc53f7f_1196.1', 1, 1, 15),
(4, 'PC-154087', 'A3', '', 1, 0, '', '8pcs octo-bits w/  veggies alacart', 0.00, 70.00, '2023-09-19 06:45:39', 0.00, -25, 0, 'upload/0a5874187e33d917139bf51ce32693120f6da08e_8663.1', 1, 1, 13),
(5, 'PC-284956', 'A4', '', 1, 0, '', '12pcs octo-bits w/ veggies alacart', 0.00, 100.00, '2023-09-19 06:46:25', 0.00, -22, 0, 'upload/88cd3f3385d1652d2f4252b8eeac3e6b83bda13a_4546.1', 1, 1, 19),
(6, 'PC-690485', 'A1-C', '', 1, 0, '', '4pcs octo-bits w/ veggies and 1pc coke mismo', 0.00, 50.00, '2023-09-19 06:47:27', 0.00, -50, 0, 'upload/3b3a71b0cd364a93cef9bccf40a8ca4f79b56a2c_6679.1', 1, 1, 32),
(7, 'PC-972186', 'A1-S', '', 1, 0, '', '4pcs octo-bits w/ veggies and 1pc sprite mismo', 0.00, 50.00, '2023-09-19 06:48:16', 0.00, -27, 0, 'upload/86f5741b331adadab72dd5a1fd8977619c9acf81_4945.1', 1, 1, 21),
(8, 'PC-573609', 'A1-R', '', 1, 0, '', '4pcs octo-bits w/ veggies and 1pc royal mismo', 0.00, 50.00, '2023-09-19 06:48:59', 0.00, -39, 0, 'upload/d1311fccf6a6c5a803b05dbf3434f7cfce5fc161_5300.1', 1, 1, 28),
(9, 'PC-346871', 'B1', '', 1, 0, '', '4pcs crab-bits w/ veggies alacart', 0.00, 35.00, '2023-09-19 06:49:51', 0.00, -31, 0, 'upload/6b7fbff95c6cfe64d3add435fa15c9cd817ceda9_4388.1', 1, 1, 31),
(10, 'PC-251709', 'B2', '', 1, 0, '', '6pcs crab-bits w/ veggies alacart', 0.00, 50.00, '2023-09-19 06:50:51', 0.00, -77, 0, 'upload/046b9a58f3ccc166b9525cceba3a968162226809_2652.1', 1, 1, 71),
(11, 'PC-794581', 'B3', '', 1, 0, '', '8pcs crab-bits w/ veggies alacart', 0.00, 70.00, '2023-09-19 06:51:18', 0.00, -13, 0, 'upload/019c4a88b4876e6e236fef2acb285f1ba907e40e_3945.1', 1, 1, 13),
(12, 'PC-539462', 'B4', '', 1, 0, '', '12pcs crab-bits w/ veggies alacart', 0.00, 100.00, '2023-09-19 06:51:49', 0.00, -33, 0, 'upload/b6c06ce4b153f51eb899224a644785ffa2c43416_9682.1', 1, 1, 26),
(13, 'PC-471328', 'B1-C', '', 1, 0, '', '4pcs crab-bits w/ veggies and 1pc coke mismo', 0.00, 50.00, '2023-09-19 06:52:29', 0.00, -19, 0, 'upload/cf928519eed9fc31b3ab18b67ab27febaf516391_5060.1', 1, 1, 13),
(14, 'PC-326791', 'B1-S', '', 1, 0, '', '4pcs crab-bits w/ veggies and 1pc sprite mismo', 0.00, 50.00, '2023-09-19 06:52:57', 0.00, -40, 0, 'upload/e31cf9bd7b4201c063cb428c66e4f1e76b78894c_9742.1', 1, 1, 35),
(15, 'PC-523194', 'B1-R', '', 1, 0, '', '4pcs crab-bits w/ veggies and 1pc royal mismo', 0.00, 50.00, '2023-09-19 06:53:24', 0.00, -24, 0, 'upload/2d1cdedc3d95055d22d9cf250f16c02a3f196276_1100.1', 1, 1, 21),
(16, 'PC-162540', 'R', '', 1, 0, '', 'royal mismo 8oz', 0.00, 20.00, '2023-09-19 06:57:55', 0.00, -70, 0, 'upload/c2070cbdb0e63126e9572e30718beea7e520be6a_3543.1', 1, 1, 61),
(17, 'PC-805134', 'S', '', 1, 0, '', 'sprite mismo 8oz', 0.00, 20.00, '2023-09-19 07:59:09', 0.00, -53, 0, 'upload/8096309dabf9d1418280a98098b13e7942ebc1fe_5699.1', 1, 1, 45),
(30, 'PC-951603', 'BONITO FLAKES', '', 0, 0, '', '1ks pack', 0.00, 1.00, '2023-09-19 15:53:02', 0.00, 5, 0, 'upload/6b687487ad2aca436526c3c744a136caaeba80ea_6853.1', 0, 3, 0),
(31, 'PC-183920', 'FLOUR ', '', 0, 0, '', '25kg', 0.00, 1000.00, '2023-09-19 16:25:17', 0.00, 0, 0, 'upload/fc012fb72227ce28f099de6cda58a0819b338615_2304.1', 1, 3, 0);

--
-- Triggers `tblproduct`
--
DELIMITER $$
CREATE TRIGGER `critical` BEFORE UPDATE ON `tblproduct` FOR EACH ROW BEGIN
      IF (NEW.qty <= NEW.re_order) THEN
            SET NEW.status = 1;
      ELSE
            SET NEW.status = 0;
      END IF;
    END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tblreference`
--

CREATE TABLE `tblreference` (
  `id` int(11) NOT NULL,
  `refno` varchar(11) NOT NULL,
  `stock_by` varchar(255) NOT NULL,
  `stock_at` date NOT NULL,
  `supplier` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `tsdate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblstock`
--

CREATE TABLE `tblstock` (
  `id` int(11) NOT NULL,
  `p_id` int(11) DEFAULT NULL,
  `ref_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblsupplier`
--

CREATE TABLE `tblsupplier` (
  `id` int(11) NOT NULL,
  `supplier` varchar(255) NOT NULL,
  `contact_person` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblsupplier`
--

INSERT INTO `tblsupplier` (`id`, `supplier`, `contact_person`, `phone`, `email`, `address`) VALUES
(1, 'Aaron', 'Archie Trinidad Alvarado', '09915582404', 'archiealvarado20@gmail.com', '#33 B4 L9 Santol St.'),
(2, 'Dali', 'Archie Trinidad Alvarado', '09194398233', 'archiealvarado20@gmail.com', 'B81 L 3 Bel. Aldea Sudb. Brgy. San Francisco Gen. Trias Cavite'),
(5, 'Puregold', 'Archie Trinidad Alvarado', '09915582404', 'archiealvarado20@gmail.com', '#33 B4 L9 Santol St.'),
(6, 'Sm Supermarket', 'Ms. Laura', '09784545454', 'SmSuppermarket@mail.com', 'SM Dasmarinas');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `verify_token` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'admin',
  `image` varchar(255) NOT NULL,
  `is_ban` tinyint(1) NOT NULL DEFAULT 0,
  `verify_status` tinyint(2) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `name`, `email`, `phone`, `password`, `gender`, `verify_token`, `role`, `image`, `is_ban`, `verify_status`, `created_at`) VALUES
(1, 'Archie Trinidad Alvarado', 'archiealvarado20@gmail.com', '09915582404', '$2y$10$DWtW/dRjhsBKQVicnhFIY.Aze/F839VkArhBax0K8xC2WzDaayLbm', '', '', 'admin', '', 0, 1, '2023-09-21 03:45:53');

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_cancel`
-- (See below for the actual view)
--
CREATE TABLE `vw_cancel` (
`id` int(11)
,`t_id` int(11)
,`p_id` int(11)
,`transno` varchar(255)
,`price` decimal(18,2)
,`t_qty` int(11)
,`total` decimal(18,2)
,`sdate` date
,`stime` time
,`status` varchar(255)
,`pcode` varchar(255)
,`description` varchar(255)
,`void_by` varchar(255)
,`cancel_request` varchar(255)
,`c_qty` int(11)
,`action` varchar(255)
,`reason` varchar(255)
,`date` date
,`time` time
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_sales`
-- (See below for the actual view)
--
CREATE TABLE `vw_sales` (
`id` int(11)
,`transno` varchar(255)
,`pcode` varchar(255)
,`p_name` varchar(255)
,`description` varchar(255)
,`p_id` varchar(255)
,`price` decimal(18,2)
,`qty` int(11)
,`disc` decimal(18,2)
,`total` decimal(18,2)
,`sdate` date
,`stime` time
,`status` varchar(255)
,`user_id` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_stock`
-- (See below for the actual view)
--
CREATE TABLE `vw_stock` (
`id` int(11)
,`p_id` int(11)
,`ref_id` int(11)
,`qty` int(11)
,`status` varchar(255)
,`pcode` varchar(255)
,`barcode` varchar(255)
,`description` varchar(255)
,`refno` varchar(11)
,`category` tinyint(11)
,`p_name` varchar(255)
,`stock_by` varchar(255)
,`stock_at` date
,`supplier` varchar(255)
);

-- --------------------------------------------------------

--
-- Structure for view `vw_cancel`
--
DROP TABLE IF EXISTS `vw_cancel`;

CREATE VIEW `vw_cancel`  AS SELECT `tblcancel`.`id` AS `id`, `tblcancel`.`t_id` AS `t_id`, `tblcancel`.`p_id` AS `p_id`, `tblcart`.`transno` AS `transno`, `tblcart`.`price` AS `price`, `tblcart`.`qty` AS `t_qty`, `tblcart`.`total` AS `total`, `tblcart`.`sdate` AS `sdate`, `tblcart`.`stime` AS `stime`, `tblcart`.`status` AS `status`, `tblproduct`.`pcode` AS `pcode`, `tblproduct`.`description` AS `description`, `tblcancel`.`void_by` AS `void_by`, `tblcancel`.`cancel_request` AS `cancel_request`, `tblcancel`.`c_qty` AS `c_qty`, `tblcancel`.`action` AS `action`, `tblcancel`.`reason` AS `reason`, `tblcancel`.`date` AS `date`, `tblcancel`.`time` AS `time` FROM ((`tblcancel` join `tblcart` on(`tblcart`.`id` = `tblcancel`.`t_id`)) join `tblproduct` on(`tblproduct`.`id` = `tblcancel`.`p_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `vw_sales`
--
DROP TABLE IF EXISTS `vw_sales`;

CREATE VIEW `vw_sales`  AS SELECT `tblcart`.`id` AS `id`, `tblcart`.`transno` AS `transno`, `tblproduct`.`pcode` AS `pcode`, `tblproduct`.`p_name` AS `p_name`, `tblproduct`.`description` AS `description`, `tblcart`.`p_id` AS `p_id`, `tblcart`.`price` AS `price`, `tblcart`.`qty` AS `qty`, `tblcart`.`disc` AS `disc`, `tblcart`.`total` AS `total`, `tblcart`.`sdate` AS `sdate`, `tblcart`.`stime` AS `stime`, `tblcart`.`status` AS `status`, `tblusers`.`name` AS `user_id` FROM ((`tblcart` join `tblproduct` on(`tblproduct`.`id` = `tblcart`.`p_id`)) join `tblusers` on(`tblusers`.`id` = `tblcart`.`user_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `vw_stock`
--
DROP TABLE IF EXISTS `vw_stock`;

CREATE VIEW `vw_stock`  AS SELECT `tblstock`.`id` AS `id`, `tblstock`.`p_id` AS `p_id`, `tblstock`.`ref_id` AS `ref_id`, `tblstock`.`qty` AS `qty`, `tblstock`.`status` AS `status`, `tblproduct`.`pcode` AS `pcode`, `tblproduct`.`barcode` AS `barcode`, `tblproduct`.`description` AS `description`, `tblreference`.`refno` AS `refno`, `tblproduct`.`category` AS `category`, `tblproduct`.`p_name` AS `p_name`, `tblreference`.`stock_by` AS `stock_by`, `tblreference`.`stock_at` AS `stock_at`, `tblreference`.`supplier` AS `supplier` FROM ((`tblstock` join `tblproduct` on(`tblproduct`.`id` = `tblstock`.`p_id`)) join `tblreference` on(`tblreference`.`id` = `tblstock`.`ref_id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblbrand`
--
ALTER TABLE `tblbrand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcancel`
--
ALTER TABLE `tblcancel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcart`
--
ALTER TABLE `tblcart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblreference`
--
ALTER TABLE `tblreference`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblstock`
--
ALTER TABLE `tblstock`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pcode` (`p_id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `tblsupplier`
--
ALTER TABLE `tblsupplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblbrand`
--
ALTER TABLE `tblbrand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT for table `tblcancel`
--
ALTER TABLE `tblcancel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblcart`
--
ALTER TABLE `tblcart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblcategory`
--
ALTER TABLE `tblcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tblreference`
--
ALTER TABLE `tblreference`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblstock`
--
ALTER TABLE `tblstock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblsupplier`
--
ALTER TABLE `tblsupplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
