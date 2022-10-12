-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2020 at 03:14 AM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `recruitment`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
`member_id` int(11) NOT NULL,
  `member_title` varchar(50) NOT NULL,
  `member_name` varchar(100) NOT NULL,
  `member_latname` varchar(100) NOT NULL,
  `member_idcard` varchar(20) NOT NULL,
  `member_pass` varchar(100) NOT NULL,
  `member_email` varchar(200) NOT NULL,
  `member_postion` varchar(300) NOT NULL,
  `accept` int(2) NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `member_title`, `member_name`, `member_latname`, `member_idcard`, `member_pass`, `member_email`, `member_postion`, `accept`, `Status`) VALUES
(6, 'นาย', 'ชินวัตร', 'นนเลาพล', '1499900191042', 'bf9357ef2126d0659cc7b277cd33a99b', 'chinnavat.1725@gmail.com', '2', 1, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `rec_candidate`
--

CREATE TABLE IF NOT EXISTS `rec_candidate` (
`can_id` int(10) NOT NULL,
  `can_postion` varchar(150) NOT NULL,
  `can_salary` varchar(10) NOT NULL,
  `can_filepic` varchar(100) NOT NULL,
  `can_filecrad` varchar(100) NOT NULL,
  `can_filehouse` varchar(100) NOT NULL,
  `can_fileedu` varchar(100) NOT NULL,
  `can_filephysical` varchar(100) NOT NULL,
  `can_filedriver` varchar(100) NOT NULL,
  `can_filepermit` varchar(100) NOT NULL,
  `can_filepfess` varchar(100) NOT NULL,
  `can_fileother` varchar(100) NOT NULL,
  `can_nameth` varchar(100) NOT NULL,
  `can_nameeng` varchar(100) NOT NULL,
  `can_sex` varchar(20) NOT NULL,
  `can_nikname` varchar(10) NOT NULL,
  `can_brithday` date NOT NULL,
  `can_old` varchar(2) NOT NULL,
  `can_locationbrith` varchar(100) NOT NULL,
  `can_height` varchar(3) NOT NULL,
  `can_weight` varchar(3) NOT NULL,
  `can_blood` varchar(3) NOT NULL,
  `can_nationality` varchar(50) NOT NULL,
  `can_race` int(50) NOT NULL,
  `can_religion` varchar(100) NOT NULL,
  `can_phonea` varchar(100) NOT NULL,
  `can_tela` varchar(100) NOT NULL,
  `can_emaila` varchar(100) NOT NULL,
  `can_addcur` text NOT NULL,
  `can_addcrad` text NOT NULL,
  `can_idcard` varchar(20) NOT NULL,
  `can_dateout` date NOT NULL,
  `can_dateexpri` date NOT NULL,
  `can_cradlocation` varchar(200) NOT NULL,
  `can_taxid` varchar(20) NOT NULL,
  `can_vehicle` varchar(10) NOT NULL,
  `can_linedrive` varchar(100) NOT NULL,
  `can_livingsta` int(100) NOT NULL,
  `can_familysta` int(11) NOT NULL,
  `can_militarysta` int(11) NOT NULL,
  `employeecode` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `rec_family`
--

CREATE TABLE IF NOT EXISTS `rec_family` (
`fam_id` int(11) NOT NULL,
  `fam_namefat` varchar(100) NOT NULL,
  `fam_oldfat` varchar(3) NOT NULL,
  `fam_postionfat` varchar(200) NOT NULL,
  `fam_locationfat` varchar(200) NOT NULL,
  `fam_phonefat` varchar(12) NOT NULL,
  `fam_namemot` varchar(100) NOT NULL,
  `fam_oldmot` varchar(3) NOT NULL,
  `fam_postionmot` varchar(200) NOT NULL,
  `fam_locationmot` varchar(200) NOT NULL,
  `fam_phonemot` varchar(12) NOT NULL,
  `fam_brethren` varchar(100) NOT NULL,
  `fam_youare` varchar(100) NOT NULL,
  `fam_namewihu` varchar(100) NOT NULL,
  `fam_oldwihu` varchar(3) NOT NULL,
  `fam_postionwihu` varchar(200) NOT NULL,
  `fam_locationwihu` varchar(200) NOT NULL,
  `fam_phonwihu` varchar(12) NOT NULL,
  `fam_child` varchar(100) NOT NULL,
  ` employeecode` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
 ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `rec_candidate`
--
ALTER TABLE `rec_candidate`
 ADD PRIMARY KEY (`can_id`,`employeecode`);

--
-- Indexes for table `rec_family`
--
ALTER TABLE `rec_family`
 ADD PRIMARY KEY (`fam_id`,` employeecode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `rec_candidate`
--
ALTER TABLE `rec_candidate`
MODIFY `can_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rec_family`
--
ALTER TABLE `rec_family`
MODIFY `fam_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
