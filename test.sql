-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2023 at 02:27 PM
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
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `aboutus_id` int(11) NOT NULL,
  `aboutus_text` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`aboutus_id`, `aboutus_text`) VALUES
(1, 'new about us');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `faq_id` int(11) NOT NULL,
  `faq_question` longtext NOT NULL,
  `faq_answer` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`faq_id`, `faq_question`, `faq_answer`) VALUES
(1, 'Q: How can I place an order for delivery?', 'A: To place an order for delivery, visit our website, select the items you want, and proceed to the checkout. You can also call our hotline to place a phone order.'),
(2, 'Q: What is the estimated delivery time?', 'A: The estimated delivery time varies based on your location and current order volume. During the checkout process, you will be provided with an estimated delivery time.'),
(3, 'Q: What payment methods do you accept?', 'A: We accept online payments through credit/debit cards. Cash on delivery is also available for certain locations.');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Email` varchar(50) NOT NULL,
  `Feedbacks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Email`, `Feedbacks`) VALUES
('siam@gmail.com', 'Fffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff'),
('siamgmail.com', 'dddfvfv'),
('siamgmail.com', 'Siam'),
('farhan@gmail.com', 'cc'),
('siam@gmail.com', 'hello'),
('siam@gmail.com', 'hello'),
('siam@gmail.com', 'gg'),
('siams@gmail.com', 'gg'),
('siams@gmail.com', 'gg'),
('siams@gmail.com', 'ff'),
('siam@gmail.com', 'ff'),
('siams@gmail.com', 'kk'),
('siam@gmail.com', 'mm'),
('siam@gmail.com', 'll'),
('siam@gmail.com', 'll'),
('siams@gmail.com', 'vv'),
('siams@gmail.com', 'vv'),
('siams@gmail.com', 'cc'),
('farhan@gmail.com', 'ddd'),
('siam@gmail.com', 'cc'),
('siam@gmail.com', 'ff'),
('siam@gmail.com', 'ff'),
('siam@gmail.com', 'ff'),
('siam@gmail.com', 'gg'),
('siams@gmail.com', 'kk'),
('siams@gmail.com', 'kk'),
('siams@gmail.com', 'kk'),
('siams@gmail.com', 'vvv'),
('siams@gmail.com', 'ff'),
('siams@gmail.com', 'll'),
('siams@gmail.com', 'oo'),
('siams@gmail.com', 'll'),
('Arfin@gmail.com', 'hh'),
('Arfin@gmail.com', 'hh'),
('Arfin@gmail.com', 'hh'),
('siam.edu.nas@gmail.com', 'ssss'),
('nateto3171@pubpng.com', 'very bad');

-- --------------------------------------------------------

--
-- Table structure for table `notify`
--

CREATE TABLE `notify` (
  `ID` int(11) NOT NULL,
  `Notifications` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notify`
--

INSERT INTO `notify` (`ID`, `Notifications`) VALUES
(3, '20% discount in burger'),
(4, 'check'),
(5, 'check');

-- --------------------------------------------------------

--
-- Table structure for table `orderhistory`
--

CREATE TABLE `orderhistory` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `food_name` varchar(100) NOT NULL,
  `food_quantity` int(100) NOT NULL,
  `total_amount` varchar(100) NOT NULL,
  `payment_type` varchar(100) NOT NULL,
  `amount_paid` varchar(100) NOT NULL,
  `adress` varchar(100) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `tracking_key` varchar(10) NOT NULL,
  `estimated_ready_time` varchar(50) NOT NULL,
  `preparation_status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orderhistory`
--

INSERT INTO `orderhistory` (`id`, `username`, `food_name`, `food_quantity`, `total_amount`, `payment_type`, `amount_paid`, `adress`, `date`, `tracking_key`, `estimated_ready_time`, `preparation_status`) VALUES
(5, 'user1', 'Pizza', 7, '35', 'card', '35', 'dhaka', '2023-11-15', 'ABC123', '08:32', 'out_for_delivery'),
(6, 'user1', 'Pizza', 3, '15', 'cash', '15', 'uttara', '2023-11-15', '', '', ''),
(8, 'user1', 'Pizza', 2, '10', 'card', '10', 'dhaka', '2023-11-15', '', '', ''),
(9, 'ahmed_21', 'Pizza', 4, '20', 'cash', '20', 'dhaka', '2023-11-15', '', '', ''),
(10, 'validuse_1', 'Pizza', 2, '10', 'card', '10', 'basundhara', '2023-11-15', '', '', ''),
(11, 'user1', 'Pizza', 6, '30', 'cash', '30', 'uttara', '2023-11-15', '', '', ''),
(12, 'user1', 'Pizza', 4, '20', 'card', '20', 'dhaka', '2023-11-15', '', '', ''),
(13, 'user1', 'Pizza', 6, '30', 'card', '30', 'basundhara', '2023-11-15', '', '', ''),
(14, 'user1', 'Pizza', 3, '15', 'card', '15', 'dhaka', '2023-11-20', '', '', ''),
(15, 'user1', 'Burger', 1, '8', 'cash', '8', 'dhaka', '2023-12-13', '', '', ''),
(16, 'user1', 'Burger', 2, '16', 'cash', '16', 'dhaka', '2023-12-13', '', '', ''),
(17, 'Tanvir10', 'Burger', 3, '24', 'card', '24', 'uttara', '2023-12-13', '', '', ''),
(18, 'adnan21', 'Burger', 2, '16', 'cash', '16', 'kuril', '2023-12-13', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `promotion`
--

CREATE TABLE `promotion` (
  `promotion_id` int(10) NOT NULL,
  `promotion` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `promotion`
--

INSERT INTO `promotion` (`promotion_id`, `promotion`) VALUES
(24, 'new offers coming soon!'),
(25, 'test'),
(26, 'test1'),
(37, ''),
(38, ''),
(39, '');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `ID` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` text NOT NULL,
  `phone` bigint(20) NOT NULL,
  `userType` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`ID`, `firstName`, `lastName`, `userName`, `email`, `password`, `gender`, `phone`, `userType`) VALUES
(3, 'Arfin', 'Nokibul', 'siam20', 'Arfin@gmail.com', '1310', 'male', 1575267982, 'admin'),
(4, 'Sayma', 'Sayma', 'Sayma10', 'sayma@gmail.com', 'Sayma12', 'female', 1575267983, ''),
(5, 'Tanvir', 'Islam', 'Tanvir10', 'tanvir@gmail.com', 'tanvir50', 'male', 1575267989, 'customer'),
(12, 'Siam', 'Nokibul', 'siam2', 'siam@gmail.com', '111111@', 'male', 1775267989, ''),
(16, 'siam', 'arfin', 'siam100', 'siam@mail.com', 'siampassword12#', 'male', 1866430959, ''),
(17, 'siam', 'arfin', 'siam100', 'test@gmail.com', 'siampassword#', 'male', 1866430959, 'customer'),
(22, 'sadi', 'siam', 'sadi15', 'sadi@gmail.com', 'password123#', 'male', 1866430959, 'customer'),
(23, '', '', 'user1', '', 'userpassword', '', 0, 'customer'),
(24, 'admin', 'admin', 'admin', 'admin@mail.com', 'adminpassword', '', 165434232, 'admin'),
(25, 'sadi', 'bd', 'sadi1011', 'sadi@gmail.com', 'sadi123#', 'male', 1866430959, 'customer'),
(26, 'siam', 'ahmed', 'siam2122', 'mail@gmail.com', 'password123#', 'male', 1866430959, 'customer'),
(27, 'sadi', 'ahmed', 'sadi1112', 'sadi@gmail.com', 'sadi123#', 'male', 1866430959, 'admin'),
(28, 'adnan', 'ahmed', 'adnan21', 'test@gmail.com', 'adnan123#', 'male', 1866430959, 'customer');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `Name` varchar(50) NOT NULL,
  `Number` bigint(11) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `Guests` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`Name`, `Number`, `Date`, `Time`, `Guests`) VALUES
('shariar', 1575267982, '2023-12-14', '08:50:00', 3),
('ahmed', 1964218311, '2023-12-01', '16:30:00', 3);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `reviewType` varchar(100) NOT NULL,
  `review` mediumtext NOT NULL,
  `rating` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `username`, `reviewType`, `review`, `rating`) VALUES
(1, 'test11', 'food', 'good', 5),
(2, 'test11', 'retaurant', 'check', 3),
(3, 'user1', 'food', 'good one', 3),
(4, 'user1', 'retaurant', 'bad', 1),
(5, 'test100', 'retaurant', 'ddd', 1),
(6, 'shahriarsazin', 'food', 'weew', 1),
(7, 'perfecetusername', 'food', 'worst food ever', 1),
(8, 'user1', 'retaurant', 'hkbhjk', 1),
(9, 'user1', 'food', 'check', 3),
(10, 'user1', 'retaurant', 'very good', 5),
(11, 'user1', 'retaurant', 'nafis', 1),
(12, 'user1', 'retaurant', 'good', 4),
(13, 'user1', 'food', 'testing', 1),
(14, 'user1', 'food', 'testing', 1),
(26, 'user1', 'retaurant', 'rr', 1),
(27, 'user1', 'food', 'ter', 2),
(28, 'user1', 'food', 'asasas', 1),
(29, 'user1', 'retaurant', 'not bad', 4),
(30, 'user1', 'food', 'dndsbds', 1),
(31, 'user1', 'food', 'asasas', 1),
(32, 'Tanvir10', 'food', 'dffgfgdfg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `storelocation`
--

CREATE TABLE `storelocation` (
  `area` varchar(50) NOT NULL,
  `road_no` varchar(20) NOT NULL,
  `house_no` varchar(20) NOT NULL,
  `contact_no` varchar(11) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `storelocation`
--

INSERT INTO `storelocation` (`area`, `road_no`, `house_no`, `contact_no`, `email`) VALUES
('Bashundhara', 'Rd No : 22', 'Hs No : 33', '01612509899', 'bashundharabranch@gmail.com'),
('Dhanmondi', 'Rd No : 11', 'Hs No : 1', '01612509811', 'dhanmondibranch@gmail.com'),
('Mirpur', '12', '21', '01866430959', 'mirpurbranch@gmail.com'),
('Uttara', 'Rd No : 22', 'Hs No : 20', '01753123099', 'uttarabranch@gmail.com'),
('Wari', 'Rd No : 99', 'Hs No : 99', '01612509999', 'waribranch@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`) VALUES
(1, 'user1', 'userpassword1', 'user1@mail.com'),
(2, 'shahriar', 'shahriar123', 'shahriar@mail.com'),
(3, 'username21', 'password11', 'username@mail.com'),
(4, 'any_user', 'passsword123', 'any_user@mail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`aboutus_id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`faq_id`);

--
-- Indexes for table `notify`
--
ALTER TABLE `notify`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `orderhistory`
--
ALTER TABLE `orderhistory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`promotion_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `storelocation`
--
ALTER TABLE `storelocation`
  ADD PRIMARY KEY (`area`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `aboutus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `faq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `notify`
--
ALTER TABLE `notify`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orderhistory`
--
ALTER TABLE `orderhistory`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `promotion`
--
ALTER TABLE `promotion`
  MODIFY `promotion_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
