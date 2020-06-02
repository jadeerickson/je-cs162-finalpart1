

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
`accountnumber` int(10) unsigned NOT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `phonenumber` int(10) DEFAULT NULL,
  `emername` varchar(100) DEFAULT NULL,
  `emernumber` int(10) DEFAULT NULL,
);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
`loginid` int(10) unsigned NOT NULL,
  `usname` varchar(30) DEFAULT NULL,
  `pass` varchar(30) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`loginid`, `usname`, `pass`) VALUES
(1, 'Admin', '1234'),

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE IF NOT EXISTS `employees` (
`id` int(10) unsigned NOT NULL,
  `title` varchar(52) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `news` text
);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(11) DEFAULT NULL,
  `title` varchar(5) DEFAULT NULL,
  `accountnumber` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `troom` varchar(30) DEFAULT NULL,
  `tbed` varchar(30) DEFAULT NULL,
  `nroom` int(11) DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `cout` date DEFAULT NULL,
  `ttot` double(8,2) DEFAULT NULL,
  `fintot` double(8,2) DEFAULT NULL,
  `mepr` double(8,2) DEFAULT NULL,
  `meal` varchar(30) DEFAULT NULL,
  `btot` double(8,2) DEFAULT NULL,
  `noofdays` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Table for `room`
--

CREATE TABLE IF NOT EXISTS `room` (
`roomid` int(10) unsigned NOT NULL,
  `type` varchar(15) DEFAULT NULL,
  `bed` varchar(10) DEFAULT NULL,
  `rate` varchar(10) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- room data
--

INSERT INTO `room` (`roomid`, `type`, `bed`, `rate`, `status`) VALUES
(101, 'Bedroom', 'Queen', '$85.95', 'Available', NULL),
(102, 'Bedroom', 'Double', '$92.50', 'Available', NULL),
(103, 'Studio', 'Double', '$112.50', 'Available', NULL),
(104, 'Bedroom', 'King', '$85.95', 'Available', NULL),
(105, 'Bedroom', 'Queen', '$98.75', 'Available', NULL),
(106, 'Bedroom', 'King', '$85.95', 'Available', NULL),
(107, 'Bedroom', 'Queen', '$98.75', 'Available', NULL),
(108, 'Bedroom', ' ', '$85.95', 'Available', NULL),
(110, 'Confrence', ' ', '$450.00', 'Available', NULL),
(112, 'Confrence', '', '$650.00', 'Available', NULL),
(114, 'Bedroom', 'King', '$98.75', 'Available', NULL),
(115, 'Bedroom', 'king', '$98.75', 'Available', NULL),
(116, 'Bedroom', 'Queen', '$85.95', 'Available', NULL),
(117, 'Bedroom', 'Queen', '$85.95', 'Available', NULL),
(118, 'Bedroom', 'King', '$98.75', 'Available', NULL)
(120, 'Studio', 'King ', '$124.95','Available', NULL),
(122, 'Confrence', ' ', '$725.00',' ', NULL),
(125, 'Bedroom', 'King', '$95.50', 'Available', NULL),
(126, 'Studio', 'King', '$124.95','Available',  NULL),
(127, 'Bedroom', 'Double', '$92.50', 'Available', NULL),
(128, 'Bedroom', 'Double', '$92.50','Available', NULL),
(130, 'Confrence', ' ', '$500.00','Available', NULL),
(201, 'Bedroom', 'Double', '$92.50','Available', NULL),
(202, 'Studio', 'King', '$124.95',' ', NULL),
(203, 'Studio', 'Queen', '$94.50','Available', NULL),
(204, 'Bedroom', 'Double', '$96.50','Available', NULL),
(205, 'Bedroom', 'Queen', '$85.95','Available', NULL),
(206, 'Bedroom', 'King', '$92.75', ' ', NULL),
(207, 'Bedroom', 'Queen', '$85.95', 'Available',NULL),
(208, 'Bedroom', 'Queen', '$85.95','Available', NULL),
(209, 'Bedroom', 'King', '$92.75','Available', NULL),
(210, 'Studio', 'Double', '$112.50',' ', NULL);

-- -----------------------------------------------------
-

--
-- Indexes for table `customers`
--
ALTER TABLE `Customers`
 ADD PRIMARY KEY (`customerid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`loginid`);

--
-- Indexes for table `employees`
--
ALTER TABLE `Employees`
 ADD PRIMARY KEY (`employeeid`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
 ADD PRIMARY KEY (`roomid`);


--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
MODIFY `customerid` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
MODIFY `loginid` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
MODIFY `employeeid` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
MODIFY `roomid` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--

