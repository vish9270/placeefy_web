-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2018 at 06:40 PM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new_placeefy`
--

-- --------------------------------------------------------

--
-- Table structure for table `acco_service_detail`
--

CREATE TABLE IF NOT EXISTS `acco_service_detail` (
  `as_id` int(11) NOT NULL,
  `s_id` int(9) NOT NULL,
  `total_no_of_rooms` int(9) NOT NULL,
  `bedroom` int(9) NOT NULL,
  `vacancy` int(9) NOT NULL,
  `no_of_cust_acoommodate` int(9) NOT NULL,
  `bathroom_type` int(1) NOT NULL,
  `no_of_bathroom` int(9) NOT NULL,
  `rent_per_month` int(9) NOT NULL,
  `expected_rent_per_month` int(9) NOT NULL,
  `deposit` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE IF NOT EXISTS `applicants` (
  `ap_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` int(10) NOT NULL,
  `experience` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `area_master`
--

CREATE TABLE IF NOT EXISTS `area_master` (
  `a_id` int(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `no_of_hostel` int(50) NOT NULL,
  `no_of_rooms` int(50) NOT NULL,
  `no_of_tiffin` int(50) NOT NULL,
  `no_of_mess` int(50) NOT NULL,
  `no_of_flat` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `blog_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `PostBy` varchar(50) NOT NULL,
  `tags` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` varchar(500) NOT NULL,
  `image_path` varchar(100) NOT NULL,
  `no_of_comments` int(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `bo_id` int(11) NOT NULL,
  `cu_id` int(9) NOT NULL,
  `account_id` int(9) NOT NULL,
  `tr_id` int(9) NOT NULL,
  `payment_mode` int(1) NOT NULL,
  `payment_amount` int(9) NOT NULL,
  `date` date NOT NULL,
  `time` datetime NOT NULL,
  `CreatedBy` varchar(200) NOT NULL,
  `ModifiedBy` varchar(200) NOT NULL,
  `pr_id` int(9) NOT NULL,
  `s_id` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `business_detail`
--

CREATE TABLE IF NOT EXISTS `business_detail` (
  `b_id` int(11) NOT NULL,
  `s_id` int(9) NOT NULL,
  `as_id` int(9) NOT NULL,
  `fs_id` int(9) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `requirement` varchar(200) NOT NULL,
  `rules` varchar(200) NOT NULL,
  `license` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `c_id` int(11) NOT NULL,
  `blog_id` int(9) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `website` varchar(200) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `time` datetime NOT NULL,
  `date` datetime NOT NULL,
  `approve` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `c_id` int(11) DEFAULT NULL,
  `u_id` int(9) NOT NULL,
  `s_id` int(9) NOT NULL,
  `account_details` varchar(100) NOT NULL,
  `tr_id` int(9) NOT NULL,
  `payment_mode` int(1) NOT NULL,
  `price` int(9) NOT NULL,
  `CreatedBy` varchar(50) NOT NULL,
  `CreatedDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `LastModifiedBy` varchar(50) NOT NULL,
  `LastModifiedDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE IF NOT EXISTS `faq` (
  `f_id` int(11) NOT NULL,
  `question` varchar(200) NOT NULL,
  `answer` varchar(200) NOT NULL,
  `CreatedBy` varchar(200) NOT NULL,
  `CreatedDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `LastModifiedBy` varchar(200) NOT NULL,
  `LastModifiedDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `food_service_detail`
--

CREATE TABLE IF NOT EXISTS `food_service_detail` (
  `fs_id` int(11) NOT NULL,
  `s_id` int(9) NOT NULL,
  `capacity` int(9) NOT NULL,
  `preference` int(9) NOT NULL,
  `service_type` varchar(20) NOT NULL,
  `timimg_morning` time NOT NULL,
  `timimg_evening` time NOT NULL,
  `serving_area` varchar(50) NOT NULL,
  `cuisine_id` int(9) NOT NULL,
  `am_id` int(9) NOT NULL,
  `deposit` int(9) NOT NULL,
  `rate_per_veg` int(9) NOT NULL,
  `rate_per_nonveg` int(9) NOT NULL,
  `rate_veg_per_month_2_time` int(9) NOT NULL,
  `rate_veg_per_month_1_time` int(9) NOT NULL,
  `rate_nonveg_per_month_2_time` int(9) NOT NULL,
  `rate_nonveg_per_month_1_time` int(9) NOT NULL,
  `off_days` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE IF NOT EXISTS `job` (
  `j_id` int(11) NOT NULL,
  `job_name` varchar(200) NOT NULL,
  `job_description` varchar(200) NOT NULL,
  `job_vacancy` int(9) NOT NULL,
  `job_responsibility` varchar(200) NOT NULL,
  `job_skills` varchar(200) NOT NULL,
  `job_type` int(1) NOT NULL,
  `job_location` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `master_amenities`
--

CREATE TABLE IF NOT EXISTS `master_amenities` (
  `am_id` int(9) NOT NULL,
  `amenity_grp` varchar(50) NOT NULL,
  `amenity_type` varchar(50) NOT NULL,
  `amenity` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_amenities`
--

INSERT INTO `master_amenities` (`am_id`, `amenity_grp`, `amenity_type`, `amenity`) VALUES
(1, 'room_feature', 'both', 'wash_basin'),
(2, 'room_feature', 'accommodation', 'cupboard'),
(5, 'extra', 'accommodation', 'geyser'),
(6, 'extra', 'accommodation', 'shelves'),
(7, 'essential', 'accommodation', 'bedding'),
(8, 'essential', 'accommodation', 'table'),
(9, 'extra', 'accommodation', 'bedsheet'),
(10, 'extra', 'both', 'cooler'),
(11, 'extra', 'both', 'dinning_room'),
(12, 'extra', 'accommodation', 'house_keeping'),
(13, 'more_extra', 'both', 'power_backup'),
(14, 'essential', 'both', 'water_purifier'),
(15, 'extra', 'both', 'water_cooler'),
(16, 'extra', 'both', 'tv'),
(17, 'more_extra', 'accommodation', 'elevator'),
(18, 'more_extra', 'accommodation', 'induction'),
(19, 'extra', 'accommodation', 'gas'),
(20, 'extra', 'both', 'newspaper'),
(21, 'more_extra', 'both', 'magazine '),
(22, 'more_extra', 'accommodation', 'wifi'),
(23, 'essential', 'accommodation', 'mattress'),
(24, 'essential', 'accommodation', 'pillow'),
(25, 'security', 'accommodation', 'door_lens'),
(26, 'more_extra', 'accommodation', 'washing_machine'),
(27, 'extra', 'accommodation', 'refrigerator '),
(28, 'more_extra', 'accommodation', 'oven'),
(29, 'more_extra', 'accommodation', 'gym'),
(30, 'more_extra', 'accommodation', 'playground '),
(31, 'more_extra', 'accommodation', 'indoor_games'),
(32, 'more_extra', 'accommodation', 'terrace_garden'),
(33, 'more_extra', 'accommodation', 'library'),
(34, 'more_extra', 'accommodation', 'entertainment_lounge'),
(35, 'essential', 'both', 'free_parking'),
(36, 'more_extra', 'accommodation', 'rooms_for_guardians'),
(37, 'security', 'accommodation', 'guard'),
(38, 'security', 'both', 'cctv'),
(39, 'security', 'accommodation', 'biometric_door_access'),
(40, 'security', 'accommodation', 'chain_gate'),
(41, 'more_extra', 'accommodation', 'travel_concierge'),
(42, 'more_extra', 'accommodation', 'dr_on_call'),
(43, 'more_extra', 'accommodation', 'social_activities '),
(44, 'extra', 'food', 'dahi'),
(45, 'more_extra', 'food', 'music_system'),
(46, 'extra', 'food', 'papad'),
(47, 'extra', 'food', 'salad'),
(48, 'extra', 'food', 'pickle'),
(49, 'extra', 'food', 'two_sabji');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE IF NOT EXISTS `service` (
  `s_id` int(11) NOT NULL,
  `e_id` int(9) NOT NULL,
  `u_id` int(9) NOT NULL,
  `service` int(1) NOT NULL,
  `type` int(1) NOT NULL,
  `subtype` int(1) NOT NULL,
  `a_plot_no` int(9) NOT NULL,
  `a_area` varchar(50) NOT NULL,
  `a_road` varchar(50) NOT NULL,
  `a_landmark` varchar(50) NOT NULL,
  `a_city` varchar(50) NOT NULL,
  `a_pincode` int(6) NOT NULL,
  `am_id` int(11) NOT NULL,
  `gender_specific` int(1) NOT NULL,
  `suitable_for` varchar(20) NOT NULL,
  `age_group` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE IF NOT EXISTS `terms` (
  `t_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `details` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL,
  `CreatedBy` varchar(200) NOT NULL,
  `CreatedDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `LastModifiedBy` varchar(200) NOT NULL,
  `LastModifiedDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaction_details`
--

CREATE TABLE IF NOT EXISTS `transaction_details` (
  `tr_id` int(11) NOT NULL,
  `data_of_purchase` datetime NOT NULL,
  `service_plan` int(1) NOT NULL,
  `service_type` int(1) NOT NULL,
  `time` datetime NOT NULL,
  `rates` int(9) NOT NULL,
  `starting_date` datetime NOT NULL,
  `expiry_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `u_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `gender` int(1) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int(10) NOT NULL,
  `a_plot_no` int(9) NOT NULL,
  `a_area` varchar(50) NOT NULL,
  `a_latitude` float NOT NULL,
  `a_longitude` float NOT NULL,
  `a_road` varchar(50) NOT NULL,
  `a_landmark` varchar(50) NOT NULL,
  `a_city` varchar(50) NOT NULL,
  `pincode` int(6) NOT NULL,
  `referral_code` int(9) NOT NULL,
  `type` varchar(50) NOT NULL,
  `IP` int(50) NOT NULL,
  `about` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acco_service_detail`
--
ALTER TABLE `acco_service_detail`
  ADD PRIMARY KEY (`as_id`);

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`ap_id`);

--
-- Indexes for table `area_master`
--
ALTER TABLE `area_master`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bo_id`);

--
-- Indexes for table `business_detail`
--
ALTER TABLE `business_detail`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `food_service_detail`
--
ALTER TABLE `food_service_detail`
  ADD PRIMARY KEY (`fs_id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`j_id`);

--
-- Indexes for table `master_amenities`
--
ALTER TABLE `master_amenities`
  ADD PRIMARY KEY (`am_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `transaction_details`
--
ALTER TABLE `transaction_details`
  ADD PRIMARY KEY (`tr_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acco_service_detail`
--
ALTER TABLE `acco_service_detail`
  MODIFY `as_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `ap_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `area_master`
--
ALTER TABLE `area_master`
  MODIFY `a_id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bo_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `business_detail`
--
ALTER TABLE `business_detail`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `food_service_detail`
--
ALTER TABLE `food_service_detail`
  MODIFY `fs_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `j_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `master_amenities`
--
ALTER TABLE `master_amenities`
  MODIFY `am_id` int(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `transaction_details`
--
ALTER TABLE `transaction_details`
  MODIFY `tr_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
