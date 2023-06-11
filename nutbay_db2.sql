-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2023 at 02:16 PM
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
-- Database: `nutbay_db2`
--

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `bid` int(11) NOT NULL COMMENT 'bank id',
  `bname` varchar(255) DEFAULT NULL COMMENT 'bank name',
  `code` varchar(100) DEFAULT NULL COMMENT 'bank code',
  `active` int(11) DEFAULT NULL COMMENT 'status',
  `country` varchar(20) DEFAULT NULL COMMENT 'bank country',
  `currency` varchar(10) DEFAULT NULL COMMENT 'currency',
  `type` varchar(10) DEFAULT NULL COMMENT 'type',
  `cdate` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'date created',
  `udate` varchar(50) DEFAULT NULL COMMENT 'date updated'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `bid` int(11) NOT NULL COMMENT 'Blog ID',
  `userid` int(11) NOT NULL COMMENT 'User ID',
  `author` text DEFAULT NULL COMMENT 'Blog Author name',
  `title` text DEFAULT NULL COMMENT 'Blog Title',
  `bslug` text DEFAULT NULL COMMENT 'SEO friendly blog title',
  `content` longtext DEFAULT NULL COMMENT 'Blog Content',
  `create_date` datetime NOT NULL DEFAULT current_timestamp() COMMENT 'Create date',
  `update_date` varchar(50) DEFAULT NULL COMMENT 'Update date',
  `publish_date` varchar(100) DEFAULT NULL COMMENT 'Publish date',
  `status` int(11) DEFAULT NULL COMMENT 'Status (published or Draft)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cid` int(11) NOT NULL COMMENT 'Cart ID',
  `userid` int(11) DEFAULT NULL,
  `certID` int(11) NOT NULL COMMENT 'Document ID',
  `split_code` varchar(50) DEFAULT NULL COMMENT 'payout Split code',
  `sname` varchar(255) DEFAULT NULL COMMENT 'Service Name, Description',
  `simage` varchar(100) DEFAULT NULL,
  `sno` varchar(50) DEFAULT NULL COMMENT 'Service number',
  `sprice` varchar(100) DEFAULT NULL COMMENT 'Service price',
  `sqty` int(25) DEFAULT NULL COMMENT 'service quantity',
  `stotal` varchar(25) DEFAULT NULL,
  `cdate` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Date Created',
  `tdate` datetime NOT NULL COMMENT 'Today date'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `certID` int(11) NOT NULL COMMENT 'auto ID',
  `inst_ID` int(11) DEFAULT NULL,
  `userID` int(11) DEFAULT NULL COMMENT 'Operator User ID',
  `CertNo` text DEFAULT NULL COMMENT 'Certificate Number',
  `docType` varchar(20) DEFAULT NULL COMMENT 'Document Type, Transcript or Certificate',
  `CertOwner` text DEFAULT NULL COMMENT 'Certificate Owner',
  `IssueDate` date DEFAULT NULL COMMENT 'Date Issued',
  `IssuerName` varchar(255) DEFAULT NULL COMMENT 'Staff Issuing the Certificate',
  `Receivedby` varchar(255) DEFAULT NULL COMMENT 'Receiver Name',
  `ReceivedbyNo` varchar(25) DEFAULT NULL COMMENT 'Receiver Phone',
  `Dept` varchar(100) DEFAULT NULL COMMENT 'Department',
  `cert_file` varchar(255) DEFAULT NULL COMMENT 'Cert file URL',
  `uploadedBy` varchar(100) DEFAULT NULL COMMENT 'Operator Name',
  `UploadDate` timestamp NULL DEFAULT NULL COMMENT 'Date Uploaded',
  `UpdateDate` timestamp NULL DEFAULT NULL COMMENT 'Date updated',
  `modifiedby` varchar(50) DEFAULT NULL COMMENT 'The admin that modified the record',
  `verifCount` int(20) DEFAULT NULL COMMENT 'Verification Count'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `country_list`
--

CREATE TABLE `country_list` (
  `cid` int(11) NOT NULL,
  `cname` varchar(50) DEFAULT NULL,
  `created_by` varchar(20) DEFAULT NULL,
  `cdate_created` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `did` int(11) NOT NULL COMMENT 'Department ID',
  `instid` int(11) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `dcode` varchar(25) NOT NULL COMMENT 'Department Code',
  `dtitle` varchar(100) NOT NULL COMMENT 'Department Title',
  `datecreated` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `emoluments`
--

CREATE TABLE `emoluments` (
  `emid` int(11) NOT NULL COMMENT 'emolument ID',
  `userid` int(11) DEFAULT NULL COMMENT 'user ID',
  `acctno` varchar(50) DEFAULT NULL COMMENT 'Account Number',
  `bcode` varchar(100) DEFAULT NULL COMMENT 'bank code',
  `acctname` varchar(100) DEFAULT NULL COMMENT 'Account Name',
  `accttype` varchar(30) DEFAULT NULL COMMENT 'Account Type',
  `paypalid` varchar(50) DEFAULT NULL COMMENT 'PayPal email ID',
  `subacct_code` varchar(200) DEFAULT NULL COMMENT 'Subaccount code',
  `split_code` varchar(50) DEFAULT NULL,
  `cdate` datetime DEFAULT current_timestamp() COMMENT 'Payment date'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `fdbkid` int(11) NOT NULL COMMENT 'Feedback ID',
  `useremail` varchar(100) NOT NULL COMMENT 'Sender email ',
  `fdbktitle` varchar(100) NOT NULL COMMENT 'Feedback Title',
  `fdbkcontent` longtext NOT NULL COMMENT 'Feedback Content',
  `fdbkdate` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Feedback date'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `institutions`
--

CREATE TABLE `institutions` (
  `instID` int(25) NOT NULL,
  `userID` int(11) DEFAULT NULL,
  `inst_type` varchar(50) DEFAULT NULL,
  `inst_name` varchar(255) DEFAULT NULL,
  `inst_address` varchar(255) DEFAULT NULL,
  `inst_email` varchar(50) DEFAULT NULL,
  `inst_country` varchar(20) DEFAULT NULL,
  `inst_state` varchar(25) DEFAULT NULL,
  `inst_phone` varchar(25) DEFAULT NULL,
  `inst_logo` varchar(50) DEFAULT NULL,
  `inst_stamp` varchar(50) DEFAULT NULL,
  `inst_privatekey` varchar(255) DEFAULT NULL,
  `inst_publickey` varchar(255) DEFAULT NULL,
  `inst_admin_name` varchar(100) NOT NULL,
  `inst_admin_email` varchar(50) NOT NULL,
  `inst_admin_prof` varchar(50) NOT NULL,
  `inst_admin_phone` varchar(25) NOT NULL,
  `inst_admin_dept` varchar(100) NOT NULL,
  `createdby` varchar(100) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `date_updated` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `nid` int(11) NOT NULL,
  `nemail` varchar(50) NOT NULL COMMENT 'newsletter email',
  `cdate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newsletters`
--

INSERT INTO `newsletters` (`nid`, `nemail`, `cdate`) VALUES
(1, 'smart@unizik.edu.ng', '2023-06-11 11:01:11');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `oid` int(11) NOT NULL COMMENT 'Auto Increment order ID',
  `orderid` varchar(50) NOT NULL COMMENT 'Order ID',
  `userid` int(11) DEFAULT NULL,
  `certID` int(11) DEFAULT NULL COMMENT 'Document ID from Certificate table',
  `split_code` varchar(50) DEFAULT NULL,
  `usage_count` int(11) DEFAULT 0 COMMENT 'Usage count',
  `sname` varchar(255) DEFAULT NULL COMMENT 'Service Name, Description',
  `simage` varchar(100) DEFAULT NULL,
  `sno` varchar(50) DEFAULT NULL COMMENT 'Service number',
  `sqty` int(25) DEFAULT NULL COMMENT 'service quantity',
  `stotal` varchar(25) DEFAULT NULL,
  `txn_id` varchar(50) DEFAULT NULL COMMENT 'Transaction ID',
  `status` int(11) DEFAULT NULL COMMENT 'Order Status',
  `payment_ref` int(50) NOT NULL DEFAULT 0 COMMENT 'payment reference',
  `cdate` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Date Created'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `pmt_id` int(11) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `userid` int(11) DEFAULT NULL,
  `api_verif_msg` varchar(255) NOT NULL,
  `payment_amt` double(10,2) NOT NULL,
  `payment_status` varchar(55) NOT NULL,
  `payment_id` int(50) DEFAULT NULL,
  `payment_ref` varchar(255) NOT NULL,
  `payment_channel` varchar(255) NOT NULL,
  `payment_ip` varchar(255) NOT NULL,
  `payment_charge` double(10,2) NOT NULL,
  `payment_date` timestamp NULL DEFAULT NULL,
  `card_auth_code` varchar(255) NOT NULL,
  `card_bin` varchar(100) NOT NULL,
  `card_last4` varchar(50) NOT NULL,
  `card_expmonth` int(11) NOT NULL,
  `card_expyr` int(50) NOT NULL,
  `card_channel` varchar(50) NOT NULL,
  `card_type` varchar(50) NOT NULL,
  `card_bank` varchar(255) NOT NULL,
  `card_reuse` tinyint(1) NOT NULL,
  `card_sign` varchar(255) NOT NULL,
  `name_oncard` varchar(255) NOT NULL,
  `customer_id` varchar(255) NOT NULL,
  `txn_value_date` timestamp NULL DEFAULT NULL,
  `date_received` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payout`
--

CREATE TABLE `payout` (
  `poid` int(11) NOT NULL COMMENT 'Payout ID',
  `emid` int(11) DEFAULT NULL COMMENT 'Emolument ID',
  `amount` varchar(100) DEFAULT NULL COMMENT 'Amount Received',
  `dater` datetime NOT NULL DEFAULT current_timestamp() COMMENT 'Payment Date',
  `valuedate` datetime DEFAULT NULL COMMENT 'Actual value date'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `description`) VALUES
('Administrator', 'Has all permission'),
('Guest', 'Has Guest level Permission'),
('Manager', 'Has Document Management Permission'),
('User', 'Has User level Permission');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `sid` int(11) NOT NULL COMMENT 'Service ID',
  `sname` varchar(255) DEFAULT NULL COMMENT 'Service Name, Description',
  `simage` varchar(100) DEFAULT NULL,
  `sno` varchar(50) DEFAULT NULL COMMENT 'Service number',
  `sprice` varchar(100) DEFAULT NULL COMMENT 'Service price',
  `sqty` int(25) DEFAULT NULL COMMENT 'service quantity',
  `sdate` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Date Created'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `subID` int(11) NOT NULL,
  `inst_ID` int(11) DEFAULT NULL,
  `sub_type` int(11) DEFAULT NULL,
  `sub_price` varchar(50) DEFAULT NULL,
  `sub_term` varchar(20) DEFAULT NULL,
  `sub_status` varchar(25) DEFAULT NULL,
  `sub_upatedate` datetime DEFAULT NULL,
  `sub_createdby` int(11) NOT NULL,
  `sub_createdate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `phone` varchar(50) NOT NULL,
  `account_type` varchar(25) DEFAULT NULL,
  `account_status` int(11) DEFAULT NULL,
  `activation_code` varchar(25) DEFAULT NULL,
  `activation_date` varchar(20) DEFAULT NULL,
  `sent_email` int(11) DEFAULT NULL,
  `password` char(32) NOT NULL,
  `terms` varchar(11) DEFAULT NULL,
  `profile_picture` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `firstname`, `lastname`, `phone`, `account_type`, `account_status`, `activation_code`, `activation_date`, `sent_email`, `password`, `terms`, `profile_picture`, `created_at`, `updated_at`) VALUES
(1, 'ue.anionovo@unizik.edu.ng', 'Engr.', 'Ugochukwu', '+2347038908180', NULL, 1, '5349368', '2023-06-10 04:09:01', NULL, '3e36e1f854abbe8a57a3576a1758c2d2', 'agree', NULL, '2023-06-10 01:34:27', NULL),
(2, 'samson.ugohukz@gmail.com', 'Hope', 'Rising', '0703668908180', NULL, 1, '7501663', '2023-06-10 04:16:43', NULL, '3e36e1f854abbe8a57a3576a1758c2d2', 'agree', NULL, '2023-06-10 03:12:34', NULL),
(12, 'smartegor@aol.com', 'Smart', 'Egor', '217038918180', NULL, 1, '5557929', '2023-06-11 12:12:14', NULL, '3e36e1f854abbe8a57a3576a1758c2d2', 'agree', NULL, '2023-06-11 11:11:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `userid` int(10) UNSIGNED NOT NULL,
  `roleid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`userid`, `roleid`) VALUES
(1, 'User'),
(2, 'User'),
(11, 'User'),
(12, 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`bid`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`bid`),
  ADD KEY `bslug` (`bslug`(768));

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`certID`),
  ADD KEY `userID` (`userID`),
  ADD KEY `inst_ID` (`inst_ID`);
ALTER TABLE `certificates` ADD FULLTEXT KEY `cert_search_index` (`CertNo`,`CertOwner`);

--
-- Indexes for table `country_list`
--
ALTER TABLE `country_list`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`did`),
  ADD KEY `instID` (`instid`),
  ADD KEY `userid` (`userid`),
  ADD KEY `dcode` (`dcode`);

--
-- Indexes for table `emoluments`
--
ALTER TABLE `emoluments`
  ADD PRIMARY KEY (`emid`),
  ADD KEY `userid` (`userid`),
  ADD KEY `bcode` (`bcode`),
  ADD KEY `subacct_code` (`subacct_code`,`split_code`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`fdbkid`),
  ADD UNIQUE KEY `fdbktitle` (`fdbktitle`),
  ADD KEY `useremail` (`useremail`);

--
-- Indexes for table `institutions`
--
ALTER TABLE `institutions`
  ADD PRIMARY KEY (`instID`),
  ADD UNIQUE KEY `inst_email` (`inst_email`,`inst_phone`,`inst_admin_email`,`inst_admin_phone`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`nid`),
  ADD UNIQUE KEY `nemail` (`nemail`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`oid`),
  ADD KEY `payment_ref` (`payment_ref`),
  ADD KEY `txn_id` (`txn_id`),
  ADD KEY `certID` (`certID`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`pmt_id`),
  ADD UNIQUE KEY `payment_ref` (`payment_ref`);

--
-- Indexes for table `payout`
--
ALTER TABLE `payout`
  ADD PRIMARY KEY (`poid`),
  ADD KEY `emid` (`emid`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`subID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`userid`,`roleid`) USING BTREE,
  ADD UNIQUE KEY `userid` (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'bank id', AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Blog ID';

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Cart ID', AUTO_INCREMENT=173;

--
-- AUTO_INCREMENT for table `certificates`
--
ALTER TABLE `certificates`
  MODIFY `certID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'auto ID', AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `country_list`
--
ALTER TABLE `country_list`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=196;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Department ID', AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `emoluments`
--
ALTER TABLE `emoluments`
  MODIFY `emid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'emolument ID', AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `fdbkid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Feedback ID';

--
-- AUTO_INCREMENT for table `institutions`
--
ALTER TABLE `institutions`
  MODIFY `instID` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `nid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Auto Increment order ID', AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `payout`
--
ALTER TABLE `payout`
  MODIFY `poid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Payout ID';

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Service ID', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `subID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
