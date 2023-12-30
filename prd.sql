-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2023 at 08:07 PM
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
-- Database: `prd`
--

-- --------------------------------------------------------

--
-- Table structure for table `featureinfo`
--

CREATE TABLE `featureinfo` (
  `FID` int(11) NOT NULL,
  `FeatureName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `featureinfo`
--

INSERT INTO `featureinfo` (`FID`, `FeatureName`) VALUES
(1, 'Login'),
(2, 'Dashboard'),
(3, 'Registration'),
(4, 'Profile'),
(5, 'Setting'),
(6, 'Forgot Password');

-- --------------------------------------------------------

--
-- Table structure for table `projectinfo`
--

CREATE TABLE `projectinfo` (
  `PID` int(11) NOT NULL,
  `ProjectName` varchar(100) NOT NULL,
  `FeatureName` varchar(100) NOT NULL,
  `SpecificationName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projectinfo`
--

INSERT INTO `projectinfo` (`PID`, `ProjectName`, `FeatureName`, `SpecificationName`) VALUES
(1, 'School management', 'Login,Dashboard,Registration,', 'Signup,'),
(2, 'School ', 'Login,Dashboard,Registration,', 'New,'),
(3, 'University Management', 'Login,Dashboard,Registration,Profile,', 'New,Signup,Menu,');

-- --------------------------------------------------------

--
-- Table structure for table `specificationinfo`
--

CREATE TABLE `specificationinfo` (
  `SID` int(11) NOT NULL,
  `SpecificationName` varchar(40) NOT NULL,
  `ScreenDefinition` varchar(500) NOT NULL,
  `UserStory` varchar(500) NOT NULL,
  `AcceptanceCriteria` varchar(500) NOT NULL,
  `picture` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `specificationinfo`
--

INSERT INTO `specificationinfo` (`SID`, `SpecificationName`, `ScreenDefinition`, `UserStory`, `AcceptanceCriteria`, `picture`) VALUES
(10, 'Menu', 'fgbvbfkvbf', 'dfdbfdsjksk', 'adsbnkeabdf', 'Uploads/Images/367405859_280712217922752_4212759630903017191_n.jpg'),
(11, 'Signup', 'rhklddhfvbv', 'dfdhfdfbkjd', 'ddfhjdiofjsf', 'Uploads/Images/Picture1.jpg.png'),
(12, 'Create Discussion', '<fieldset>\r\n<input=discussionTitle>\r\n<input=description>\r\n<button=createDiscussion>', '- Discussion Title (input)\r\n- Description (input)\r\n- Create Description (button) [Logic: If all the fields are filled properly, admin should be able to create a new discussion]', '- After loggin with a valid admin account admin can create discussion.\r\n- Admin can give a title for discussion.\r\n- Admin can give a description about the discussion within 150 character.\r\n- Admin can create discussion by clicking create discussion.\r\n', 'Uploads/Images/Picture.jgp.png'),
(13, 'Settings', '<fieldset>\r\n<ul>\r\n<link = changePassword>\r\n<link = editAndUpdateProfileInformation>', '- Change Password (link)\r\n- Edit and Update Profile Information (link)\r\n[Logic: Clicking on a link will send users to the destined page]', '- After logging in with a valid account anyone can enter settings.\r\n- From the setting every user can change thier password.\r\n- From the setting page every user can edit & update their own profile information.', 'Uploads/Images/Picture2.png');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `UserID` int(11) NOT NULL,
  `userName` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `Role` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`UserID`, `userName`, `password`, `Role`) VALUES
(1, 'user1', '1234', 'Analyst'),
(3, 'admin1', '1234', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `featureinfo`
--
ALTER TABLE `featureinfo`
  ADD PRIMARY KEY (`FID`);

--
-- Indexes for table `projectinfo`
--
ALTER TABLE `projectinfo`
  ADD PRIMARY KEY (`PID`);

--
-- Indexes for table `specificationinfo`
--
ALTER TABLE `specificationinfo`
  ADD PRIMARY KEY (`SID`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `featureinfo`
--
ALTER TABLE `featureinfo`
  MODIFY `FID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `projectinfo`
--
ALTER TABLE `projectinfo`
  MODIFY `PID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `specificationinfo`
--
ALTER TABLE `specificationinfo`
  MODIFY `SID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
