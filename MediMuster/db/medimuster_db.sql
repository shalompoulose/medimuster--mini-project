-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2022 at 10:26 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medimuster_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bid` int(11) NOT NULL,
  `uid` varchar(44) NOT NULL,
  `sid` varchar(44) NOT NULL,
  `vaccine` varchar(44) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(44) NOT NULL DEFAULT 'Paid'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bid`, `uid`, `sid`, `vaccine`, `date`, `status`) VALUES
(1, '1', '1', 'SecondDose', '2021-10-22', 'Vaccinated'),
(2, '4', '2', 'FirstDose', '2022-01-05', 'Vaccinated'),
(3, '5', '3', 'FirstDose', '2022-01-07', 'Vaccinated');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fid` int(11) NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `feedback` varchar(200) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `uid`, `feedback`, `date`) VALUES
(1, 5, 'Kollam', '2022-03-09');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `lid` int(11) NOT NULL,
  `uid` varchar(44) NOT NULL,
  `uname` varchar(44) NOT NULL,
  `psw` varchar(44) NOT NULL,
  `type` varchar(44) NOT NULL,
  `status` varchar(44) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`lid`, `uid`, `uname`, `psw`, `type`, `status`) VALUES
(1, '1', '9562301478', 'tom123', 'User', 'Approved'),
(2, '2', '9652320252', 'bibi123', 'User', 'Approved'),
(3, '3', '8675674564', 'jeena', 'User', 'Approved'),
(4, '0', 'admin@gmail.com', 'admin', 'Admin', 'Approved'),
(5, '2', '8796878576', '123456', 'VCenter', 'Approved'),
(7, '4', '9090909090', '12345', 'User', 'Approved'),
(8, '3', '9877899870', '1234', 'VCenter', 'Approved'),
(9, '5', '9876543210', '1234', 'User', 'Approved'),
(10, '4', '9090909091', '12345', 'VCenter', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `slots`
--

CREATE TABLE `slots` (
  `sid` int(11) NOT NULL,
  `vid` varchar(44) NOT NULL,
  `vaccine` varchar(44) NOT NULL,
  `slot` varchar(44) NOT NULL,
  `date` varchar(44) NOT NULL,
  `status` varchar(44) NOT NULL DEFAULT 'Available'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slots`
--

INSERT INTO `slots` (`sid`, `vid`, `vaccine`, `slot`, `date`, `status`) VALUES
(1, '2', 'Covishield', '28', '2021-10-23', 'Available'),
(2, '3', 'Covishield', '199', '2022-01-06', 'Available'),
(3, '4', 'Covishield', '49', '2022-01-08', 'Available'),
(4, '3', 'Sputnik V', '10', '2022-01-09', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `name` varchar(44) NOT NULL,
  `address` varchar(44) NOT NULL,
  `aadhar` varchar(44) NOT NULL,
  `dist` varchar(44) NOT NULL,
  `age` varchar(44) NOT NULL,
  `gender` varchar(44) NOT NULL,
  `email` varchar(44) NOT NULL,
  `phone` varchar(44) NOT NULL,
  `img` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `name`, `address`, `aadhar`, `dist`, `age`, `gender`, `email`, `phone`, `img`) VALUES
(1, 'Tom Jose Antony', 'Kuttamassery, Thottumugham, Kerala 683105', '7986868576585', 'Ernakulam', '24', 'male', 'tom@gmail.com', '9562301478', 0x696d616765732f63312e6a7067),
(2, 'Bibi Krishna', 'Thottakkattukara, Aluva, Kerala', '57587865464546', 'Ernakulam', '29', 'female', 'bibi@gmail.com', '9652320252', 0x696d616765732f7465737469312e6a7067),
(3, 'Jeena Jintu', 'PRA-33, Padivattom, Edappally, Kochi, Kerala', '4556787654457765', 'Ernakulam', '28', 'female', 'jeena@gmail.com', '8675674564', 0x696d616765732f7465737469332e6a7067),
(4, 'Akhil', 'AK\r\nAdrs', '12345678909876', 'TSR', '23', 'male', 'ak@mail.com', '9090909090', 0x696d616765732f6973206c6967687420626c756520636f6c6f72732e2e204c6967687420426c7565204772756e67652044657369676e20506f776572506f696e74206261636b67726f756e64202e2e2e202831292e6a7067),
(5, 'Vishnu', 'Vishnu \r\nAdrs', '134341431431341431', 'EKM', '22', 'male', 'vi@mail.com', '9876543210', 0x696d616765732f32373836386531322d393938652d346432652d623835392d6664656236633766313638322e2e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `vaccine`
--

CREATE TABLE `vaccine` (
  `vid` int(11) NOT NULL,
  `type` varchar(44) NOT NULL,
  `description` varchar(300) NOT NULL,
  `stock` varchar(44) NOT NULL,
  `price` varchar(44) NOT NULL,
  `date` varchar(44) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vaccine`
--

INSERT INTO `vaccine` (`vid`, `type`, `description`, `stock`, `price`, `date`) VALUES
(1, 'Covishield', 'The vaccine created by the Central Drugs Sta', '300', '750', '21/10/21'),
(2, 'Sputnik V', 'The global health agency this week said that', '78', '750', '21/10/21'),
(3, 'Covaxin', 'It is recommended that the 2nd dose of COVAXIN should be administered .', '25', '750', '21/10/21'),
(4, 'PP', 'PPPPPPPPPPPPppp', '900', '900', '22/03/09');

-- --------------------------------------------------------

--
-- Table structure for table `v_center`
--

CREATE TABLE `v_center` (
  `uid` int(11) NOT NULL,
  `name` varchar(44) NOT NULL,
  `address` varchar(400) NOT NULL,
  `dist` varchar(44) NOT NULL,
  `reg_id` varchar(44) NOT NULL,
  `contact` varchar(44) NOT NULL,
  `email` varchar(44) NOT NULL,
  `img` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `v_center`
--

INSERT INTO `v_center` (`uid`, `name`, `address`, `dist`, `reg_id`, `contact`, `email`, `img`) VALUES
(2, 'Lekshmi Hospital', 'By Pass Junction, Aroor, Alleppey, Thoppumpady .', 'Ernakulam', '34354536454', '8796878576', 'lekshmihospital@gmail.com', 0x696d616765732f6c616b73686d692d686f73706974616c2e6a7067),
(3, 'ViS', 'ViS\r\nAdrs', 'EKM', '1234567', '9877899870', 'vis@mail.com', 0x696d616765732f6973206c6967687420626c756520636f6c6f72732e2e204c6967687420426c7565204772756e67652044657369676e20506f776572506f696e74206261636b67726f756e64202e2e2e202831292e6a7067),
(4, 'DD', 'DD\r\nAdrs', 'EKM', '123456', '9090909090', 'dd@gmail.com', 0x696d616765732f706578656c732d706978616261792d34353137302e6a7067);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`lid`);

--
-- Indexes for table `slots`
--
ALTER TABLE `slots`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `vaccine`
--
ALTER TABLE `vaccine`
  ADD PRIMARY KEY (`vid`);

--
-- Indexes for table `v_center`
--
ALTER TABLE `v_center`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `lid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `slots`
--
ALTER TABLE `slots`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vaccine`
--
ALTER TABLE `vaccine`
  MODIFY `vid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `v_center`
--
ALTER TABLE `v_center`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
