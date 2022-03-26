-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 26, 2022 at 09:29 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `SampleDatabase2`
--

-- --------------------------------------------------------

--
-- Table structure for table `Bank_Account_Details`
--

CREATE TABLE `Bank_Account_Details` (
  `Account_Number` bigint(100) NOT NULL,
  `Account_Holder` varchar(200) NOT NULL,
  `Mobile_No` bigint(10) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Transaction_ID` bigint(50) DEFAULT NULL,
  `Balance` bigint(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Bank_Account_Details`
--

INSERT INTO `Bank_Account_Details` (`Account_Number`, `Account_Holder`, `Mobile_No`, `Email`, `Transaction_ID`, `Balance`) VALUES
(10001, 'Jinal Shah', 9874563210, 'jinalshah@gmail.com', NULL, 1000000),
(10002, 'Ravi Vaghela', 9874578912, 'ravivaghela@gmail.com', NULL, 580000),
(10003, 'Aaqib Shaikh', 7894789987, 'aaqibshaikh@gmail.com', NULL, 850000),
(10004, 'Nidhi Jain', 7894578947, 'nidhijain@gmail.com', NULL, 750000),
(10005, 'Vinod Sojit', 8745962134, 'vidod@gmail.com', NULL, 870000),
(10006, 'Pashva Shah', 7411479879, 'pashvashah@gmail.com', NULL, 650000),
(10007, 'Amit Shah', 6543210147, 'amitshah@gmail.com', NULL, 560000),
(10008, 'Preet Jit', 9874569878, 'pritjit@gmail.com', NULL, 970000),
(10009, 'Raj Modi', 8080208020, 'rajmodi@gmail.com', NULL, 990000),
(10010, 'Pashva Samarth', 9020932030, 'pashv@gmail.com', NULL, 860000);

-- --------------------------------------------------------

--
-- Table structure for table `Department`
--

CREATE TABLE `Department` (
  `Employee_ID` bigint(10) NOT NULL,
  `Department_ID` bigint(10) NOT NULL,
  `Employee_Name` varchar(100) NOT NULL,
  `Employee_Role` varchar(100) NOT NULL,
  `Annual_Package` bigint(100) NOT NULL,
  `Joining_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Department`
--

INSERT INTO `Department` (`Employee_ID`, `Department_ID`, `Employee_Name`, `Employee_Role`, `Annual_Package`, `Joining_Date`) VALUES
(1, 10001, 'Jinal Shah', 'Full Stack Trainee', 275000, '2022-02-02'),
(2, 10002, 'Ravi Vaghela', 'Full Stack Trainee', 275000, '2022-02-02'),
(3, 10003, 'Aaqib Shaikh', 'Full Stack Trainee', 275000, '2022-02-02'),
(4, 10004, 'Nidhi Jain', 'Full Stack Trainee', 275000, '2022-02-02'),
(5, 10005, 'Vinod Sojit', 'Software Engineer', 2500000, '2020-10-10'),
(6, 10006, 'Pashva Shah', 'Web Developer', 500000, '2020-07-01'),
(7, 10007, 'Amit Shah', 'Manager', 5000000, '2015-10-01'),
(8, 10008, 'Preet Jit', 'Web Designer', 2000000, '2018-01-25'),
(9, 10009, 'Raj Modi', 'Software Engineer', 2500000, '2010-10-15'),
(10, 10010, 'Pashva Samarth', 'Software Engineer', 2500000, '2020-10-12');

-- --------------------------------------------------------

--
-- Table structure for table `Drivers_Details`
--

CREATE TABLE `Drivers_Details` (
  `Driver_ID` bigint(100) NOT NULL,
  `Driver_Name` varchar(200) NOT NULL,
  `Contact_Number` bigint(10) NOT NULL,
  `Driver_Address` varchar(500) NOT NULL,
  `Driver_Age` int(3) NOT NULL,
  `Driver_License` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Drivers_Details`
--

INSERT INTO `Drivers_Details` (`Driver_ID`, `Driver_Name`, `Contact_Number`, `Driver_Address`, `Driver_Age`, `Driver_License`) VALUES
(1, 'Rakesh Thakur', 9874561230, 'Sidhpur Cross Road, Patan', 42, 'ABC12345'),
(2, 'Ahemad Patel', 7894561237, 'Rani ki Vav Road, Patan', 40, 'BCD23456'),
(3, 'Mukesh Rathod', 7417417410, 'Highway Road, Unjha', 50, 'EFG34567'),
(4, 'Ranjit Thakor', 8521478523, 'Randhanpur Cross Road, Mahesana', 30, 'HIJ45678'),
(5, 'Rakesh Ghatad', 8524789654, 'Iscon Cross Road, Ahmedabad', 37, 'KLM56789'),
(6, 'Visnu Patel', 7485961425, 'TB Cross Road, Patan', 40, 'OPQ67891'),
(7, 'Rohit Sharma', 8574964567, 'Rajmandir, Deesa', 42, 'RST78910'),
(8, 'Mayank Agraval', 8576945879, 'City Point, Patan', 43, 'UVW89101'),
(9, 'Rahul Purohit', 9371824673, 'Rishikesh Society, Sidhpur', 45, 'XYZ91011'),
(10, 'Rinkesh Rohini', 9173822426, 'Vankapur Road, Kadi', 48, 'ABC98765');

-- --------------------------------------------------------

--
-- Table structure for table `Jailers_Details`
--

CREATE TABLE `Jailers_Details` (
  `Jailer_ID` bigint(100) NOT NULL,
  `Jailer_Name` varchar(200) NOT NULL,
  `Jailer_Contact` bigint(10) NOT NULL,
  `Jailer_Posting` varchar(500) NOT NULL,
  `Jailer_Age` int(3) NOT NULL,
  `Jailer_Qualification` varchar(20) NOT NULL DEFAULT '12th Pass'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Jailers_Details`
--

INSERT INTO `Jailers_Details` (`Jailer_ID`, `Jailer_Name`, `Jailer_Contact`, `Jailer_Posting`, `Jailer_Age`, `Jailer_Qualification`) VALUES
(1, 'Rajesh Thakur', 9874561230, 'Sujnipur Jail, Patan', 42, 'Graduation Degree'),
(2, 'Ahemad Shaikh', 7894561237, 'Patan Main Jail, Patan', 40, 'Master Degree'),
(3, 'Mukesh Rana', 7417417410, 'Sabarmati Jail, Ahmedabad', 50, '12th Pass'),
(4, 'Ranjit Patel', 8521478523, 'Randhanpur Jail, Mahesana', 30, 'Graduation Degree'),
(5, 'Rakesh Rathod', 8524789654, 'Mumbai Jail, Mumbai', 37, 'Phd Degree'),
(6, 'Narayan Soni', 8576945879, 'Noida Jail, Noida', 43, 'Master Degree'),
(7, 'Rohan Trivedi', 9371824673, 'Sidhpur Jail, Sidhpur', 45, '12th Pass'),
(8, 'Rinkesh Rohini', 9173822426, 'Vankapur Jail, Kadi', 48, '12th Pass'),
(9, 'Vinod Vyash', 7485961425, 'Pune Jail, Pune', 40, '12th Pass'),
(10, 'Keshav Rohinya', 8574964567, 'Deesa Jail, Deesa', 42, '12th Pass');

-- --------------------------------------------------------

--
-- Table structure for table `Orders_Details`
--

CREATE TABLE `Orders_Details` (
  `Order_ID` bigint(100) NOT NULL,
  `Customer_ID` bigint(100) DEFAULT NULL,
  `Customer_Name` varchar(200) NOT NULL,
  `Quantity` int(10) NOT NULL,
  `Total_Price` bigint(100) NOT NULL,
  `Time_of_Delivery` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Orders_Details`
--

INSERT INTO `Orders_Details` (`Order_ID`, `Customer_ID`, `Customer_Name`, `Quantity`, `Total_Price`, `Time_of_Delivery`) VALUES
(1, 101, 'Rajesh Thakur', 100, 10000, '2022-01-10 00:00:00'),
(2, 102, 'Ahemad Shaikh', 200, 20000, '2021-12-10 00:00:00'),
(3, 103, 'Mukesh Rana', 150, 15000, '2018-02-05 00:00:00'),
(4, 104, 'Ranjit Patel', 50, 5000, '2020-12-07 00:00:00'),
(5, 105, 'Rakesh Rajput', 225, 22500, '2017-06-25 00:00:00'),
(6, 106, 'Alex Steve', 250, 25500, '2019-12-17 00:00:00'),
(7, 107, 'Rohan Trivedi', 150, 15500, '2021-09-18 00:00:00'),
(8, 108, 'Rinkesh Rohini', 500, 50000, '2020-11-28 00:00:00'),
(9, 109, 'Sambhu Choksi', 700, 70000, '2016-12-10 00:00:00'),
(10, 110, 'Rajesh Shukla', 800, 80000, '2012-12-12 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `Patients_Details`
--

CREATE TABLE `Patients_Details` (
  `Patient_ID` bigint(100) DEFAULT NULL,
  `Patient_Name` varchar(200) NOT NULL,
  `Ward_No` varchar(300) NOT NULL,
  `Hospital` varchar(500) NOT NULL,
  `Admit_Date` date NOT NULL,
  `Discharge_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Patients_Details`
--

INSERT INTO `Patients_Details` (`Patient_ID`, `Patient_Name`, `Ward_No`, `Hospital`, `Admit_Date`, `Discharge_Date`) VALUES
(101, 'Alex Steve', 'A100', 'Civil Hospital, Ahemdabad', '2021-10-12', '2022-01-21'),
(102, 'Akash Gupta', 'A200', 'Government Medical, Dharpur', '2010-12-01', '2011-03-03'),
(103, 'Jetsav Jha', 'A300', 'Krishna Hospital, Patan', '2020-10-23', '2021-12-22'),
(104, 'Menka Vohra', 'A400', 'Shrusti Hospital, Unjha', '2010-12-31', '2011-02-03'),
(105, 'Rinkesh Rathod', 'A500', 'Chakshu Hospital, Surat', '2010-12-31', '2011-02-03'),
(106, 'Mayank Patel', 'A600', 'Universe Hospital, Mehsana', '2015-02-03', '2018-03-03'),
(107, 'Venisa Vyash', 'A700', 'Keshav Hospital, Vadodara', '2015-03-03', '2021-12-10'),
(108, 'Monika Desai', 'A800', 'SCG Multispecialist, Ahmedabad', '2000-05-10', '2001-03-18'),
(109, 'Priyank Viswas', 'A900', 'Acadian Medical Center, Ahmedabad', '2002-12-03', '2005-12-03'),
(110, 'Vyomesh Gandhi', 'A1000', 'Caldwell UNC Healthcare, Mumbai', '2003-12-31', '2004-01-29');

-- --------------------------------------------------------

--
-- Table structure for table `Persons_Details`
--

CREATE TABLE `Persons_Details` (
  `Person_ID` bigint(100) NOT NULL,
  `Full_Name` varchar(200) NOT NULL,
  `Email` varchar(300) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `City` varchar(200) NOT NULL,
  `State` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Persons_Details`
--

INSERT INTO `Persons_Details` (`Person_ID`, `Full_Name`, `Email`, `Address`, `City`, `State`) VALUES
(1, 'Ravi Vaghela', 'ravi.addweb@gmail.com', 'Indiranagar, AT-PO:- Kani', 'Patan', 'Gujarat'),
(2, 'Jinal Shah', 'jinal.addweb@gmail.com', 'Shantivan, AT-PO:- Paldi', 'Ahmedabad', 'Gujarat'),
(3, 'Aaqib Shaikh', 'aaqib.addweb@gmail.com', 'Lucky Park, AT-PO:- Paldi', 'Ahmedabad', 'Gujarat'),
(4, 'Nidhi Jain', 'nidhi.addweb@gmail.com', 'Kharakuva, AT-PO:-Dehgam ', 'Dehgam', 'Gujarat'),
(5, 'Bharti Choksi', 'Bharti@gmail.com', 'VC Road, AT-PO:- Patan', 'Patan', 'Gujarat'),
(6, 'Vijay Sharma', 'vijay@gmail.com', 'Khusinagar, AT-PO:- Sidhpur', 'Sidhpur', 'Gujarat'),
(7, 'Keshav Kapoor', 'keshav@gmail.com', 'Infosys Building, AT-PO:- Sector-07', 'Pune', 'Maharashtra'),
(8, 'Rahul Ghatad', 'rahul@gmail.com', 'Dharavi, AT-PO:- Cental Mumbai', 'Mumbai', 'Maharashtra'),
(9, 'Pruthvi Keshva', 'pruthvi@gmail.com', 'Sector-4, AT-PO:- Noida', 'Noida', 'Uttar Pradesh'),
(10, 'Khushi Karmani', 'khushi@gmail.com', 'Taj Mahal Road, AT-PO:- Agra', 'Agra', 'Uttar Pradesh');

-- --------------------------------------------------------

--
-- Table structure for table `Prisoners_Details`
--

CREATE TABLE `Prisoners_Details` (
  `Prisoner_ID` bigint(100) NOT NULL,
  `Prisoner_Name` varchar(200) NOT NULL,
  `Prisoner_Address` varchar(500) NOT NULL,
  `Prisoner_Age` int(3) NOT NULL,
  `Punishment` varchar(1000) NOT NULL,
  `Crimes` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Prisoners_Details`
--

INSERT INTO `Prisoners_Details` (`Prisoner_ID`, `Prisoner_Name`, `Prisoner_Address`, `Prisoner_Age`, `Punishment`, `Crimes`) VALUES
(1, 'Rajesh Thakur', 'TB Cross Road, Patan', 42, '5 Year Jail', 'Attempt to Murder'),
(2, 'Ahemad Shaikh', 'Main Bazar, Patan', 40, '2 Months Jail', 'Cheating'),
(3, 'Mukesh Rana', 'Jodhapur Road, Ahmedabad', 50, '1 Year Jail', 'Chain Snatching or Theft'),
(4, 'Ranjit Patel', 'Randhanpur Cross Road, Mahesana', 30, '10 Year Jail', 'Assualting'),
(5, 'Rakesh Rajput', 'Ayodhya, Uttar Pradesh', 37, '50 Years Jail', 'Communal Hatred'),
(6, 'Alex Steve', 'Secto-25, Noida', 43, 'Hanging to Death', 'Rape'),
(7, 'Rohan Trivedi', 'Khali Cross Road, Bhopal', 45, '5 Months Jail', 'Theft'),
(8, 'Rinkesh Rohini', 'Vankapur Road, Indore', 48, '40 Years Jail', 'Atrocities on Lower Caste'),
(9, 'Sambhu Choksi', 'Khali Road, Palanpur', 45, '5 Years Jail', 'Attempt Murder'),
(10, 'Rajesh Shukla', 'Vankapur Road, Kadi', 48, '5 Lakhs Fine', 'Fraud');

-- --------------------------------------------------------

--
-- Table structure for table `Schools_Details`
--

CREATE TABLE `Schools_Details` (
  `School_ID` bigint(100) NOT NULL,
  `School_Name` varchar(200) NOT NULL,
  `Contact_Number` bigint(20) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `School_Type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Schools_Details`
--

INSERT INTO `Schools_Details` (`School_ID`, `School_Name`, `Contact_Number`, `Email`, `Address`, `School_Type`) VALUES
(1, 'Niketan Boys Schools', 7412589630, 'niketan@gmail.com', 'Rajpur Road, Patan', 'Boys School'),
(2, 'Krishna School of Science', 7894569871, 'krishnaschool@gmail.com', 'Hanshapur Road, Patan', 'Boys and Girl School'),
(3, 'Gomati School', 7418529631, 'gomati@gmail.com', 'Gandhi Chaowk, Unjha', 'Girls School'),
(4, 'Kani Anupam Primary School', 9632587413, 'kanischool@gmail.com', 'Kani, Patan', 'Girls and Boys School'),
(5, 'Visakha Science School', 8523691789, 'visakhaschool@gmail.com', 'Balisana Road Circle, Unjha', 'Girls School'),
(6, 'Vidhyalay School', 8547965897, 'vidhyalay@gmail.com', ' Vidyalay Road, Mehasana', 'Girls and Boys School'),
(7, 'Vidhyapith School', 8271936497, 'vidhyapith@gmail.com', 'Radhanpur Cross Road, Mehasana', 'Girls and Boys School'),
(8, 'Gurukul School', 8527391492, 'gurukul@gmail.com', 'Gurukul Chaowk, Sidhpur', 'Boys School'),
(9, 'Newton School', 8271057963, 'newtonschool@gmail.com', 'Sarava Road, Patan', 'Boys School'),
(10, 'Tech School', 9484858679, 'techschool@gmail.com', 'Sardar Patel Road, Balisana', 'Girls School');

-- --------------------------------------------------------

--
-- Table structure for table `Subjects_Details`
--

CREATE TABLE `Subjects_Details` (
  `Subject_ID` bigint(100) NOT NULL,
  `Subject_Name` varchar(200) NOT NULL,
  `Stream` varchar(100) NOT NULL,
  `Course` varchar(100) NOT NULL,
  `Class` varchar(10) NOT NULL,
  `Assign_Teacher` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Subjects_Details`
--

INSERT INTO `Subjects_Details` (`Subject_ID`, `Subject_Name`, `Stream`, `Course`, `Class`, `Assign_Teacher`) VALUES
(1, 'Physics', 'Science', 'B.Sc', 'A2', 'Dr.Vishal Modi'),
(2, 'Maths', 'Computer Scince', 'M.E', 'A1', 'Viral Vyash'),
(3, 'English', 'Commerce', '12th', 'C3', 'Vaishali Patel'),
(4, 'Gujarati', 'Primary', '5th', 'D10', 'Rita Patel'),
(5, 'Sanskrit', 'Secondary', '10th', 'B11', 'Santoshi Patel'),
(6, 'Social Science', 'Secondary', '8th', 'C12', 'Suresh Yadav'),
(7, 'Python', 'Computer Science', 'M.Sc(CA & IT)', 'A', 'Viral Vyash'),
(8, 'Andorid', 'Computer Science', 'M.Sc(CA & IT)', 'A', 'Badal Kothari'),
(9, 'AI', 'Computer Science', 'M.Sc(CA & IT)', 'B1', 'Hinal Prajapti'),
(10, 'Algorithms', 'Computer Science', 'M.Sc(CA & IT)', 'B2', 'Kirit Patel');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Bank_Account_Details`
--
ALTER TABLE `Bank_Account_Details`
  ADD PRIMARY KEY (`Account_Number`),
  ADD UNIQUE KEY `Mobile_No` (`Mobile_No`),
  ADD UNIQUE KEY `Transaction_ID` (`Transaction_ID`);

--
-- Indexes for table `Department`
--
ALTER TABLE `Department`
  ADD PRIMARY KEY (`Employee_ID`);

--
-- Indexes for table `Drivers_Details`
--
ALTER TABLE `Drivers_Details`
  ADD PRIMARY KEY (`Driver_ID`),
  ADD UNIQUE KEY `Driver_License` (`Driver_License`);

--
-- Indexes for table `Jailers_Details`
--
ALTER TABLE `Jailers_Details`
  ADD PRIMARY KEY (`Jailer_ID`),
  ADD UNIQUE KEY `Jailer_Contact` (`Jailer_Contact`);

--
-- Indexes for table `Orders_Details`
--
ALTER TABLE `Orders_Details`
  ADD PRIMARY KEY (`Order_ID`),
  ADD UNIQUE KEY `Customer_ID` (`Customer_ID`);

--
-- Indexes for table `Patients_Details`
--
ALTER TABLE `Patients_Details`
  ADD UNIQUE KEY `Patient_ID` (`Patient_ID`);

--
-- Indexes for table `Persons_Details`
--
ALTER TABLE `Persons_Details`
  ADD PRIMARY KEY (`Person_ID`);

--
-- Indexes for table `Prisoners_Details`
--
ALTER TABLE `Prisoners_Details`
  ADD PRIMARY KEY (`Prisoner_ID`);

--
-- Indexes for table `Schools_Details`
--
ALTER TABLE `Schools_Details`
  ADD PRIMARY KEY (`School_ID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `Subjects_Details`
--
ALTER TABLE `Subjects_Details`
  ADD PRIMARY KEY (`Subject_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Department`
--
ALTER TABLE `Department`
  MODIFY `Employee_ID` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `Drivers_Details`
--
ALTER TABLE `Drivers_Details`
  MODIFY `Driver_ID` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `Jailers_Details`
--
ALTER TABLE `Jailers_Details`
  MODIFY `Jailer_ID` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `Orders_Details`
--
ALTER TABLE `Orders_Details`
  MODIFY `Order_ID` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `Persons_Details`
--
ALTER TABLE `Persons_Details`
  MODIFY `Person_ID` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `Prisoners_Details`
--
ALTER TABLE `Prisoners_Details`
  MODIFY `Prisoner_ID` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `Schools_Details`
--
ALTER TABLE `Schools_Details`
  MODIFY `School_ID` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `Subjects_Details`
--
ALTER TABLE `Subjects_Details`
  MODIFY `Subject_ID` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
