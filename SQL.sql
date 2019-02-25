-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 15, 2019 at 08:42 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `deb7255_mark`
--

-- --------------------------------------------------------

--
-- Table structure for table `Forum`
--

CREATE TABLE `Forum` (
  `ID` int(11) NOT NULL,
  `who` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `what` varchar(255) NOT NULL,
  `BindToPostID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Payup_Transactionhistory`
--

CREATE TABLE `Payup_Transactionhistory` (
  `ID` int(11) NOT NULL,
  `From_bankaccountID` int(11) NOT NULL,
  `To_bankaccountID` int(11) NOT NULL,
  `Value` int(11) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `why` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Payup_Users`
--

CREATE TABLE `Payup_Users` (
  `ID` int(11) NOT NULL,
  `First_Name` varchar(255) NOT NULL,
  `Last_Name` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Net_Worth` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Sign_Up_Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Forum`
--
ALTER TABLE `Forum`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Payup_Transactionhistory`
--
ALTER TABLE `Payup_Transactionhistory`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Payup_Users`
--
ALTER TABLE `Payup_Users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Forum`
--
ALTER TABLE `Forum`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Payup_Transactionhistory`
--
ALTER TABLE `Payup_Transactionhistory`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Payup_Users`
--
ALTER TABLE `Payup_Users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
