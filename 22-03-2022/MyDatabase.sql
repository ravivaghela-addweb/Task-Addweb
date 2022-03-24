-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 24, 2022 at 10:40 AM
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
-- Database: `MyDatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `Apple Stores`
--

CREATE TABLE `Apple Stores` (
  `Store_ID` int(5) NOT NULL,
  `Area` varchar(20) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Pincode` bigint(6) NOT NULL,
  `State` varchar(20) NOT NULL,
  `Country` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Apple Stores`
--

INSERT INTO `Apple Stores` (`Store_ID`, `Area`, `City`, `Pincode`, `State`, `Country`) VALUES
(1, 'Navaranpura', 'Ahmedabad', 380009, 'Gujarat', 'India'),
(2, 'Thaltej', 'Ahmedabad', 380052, 'Gujarat', 'India'),
(3, 'Tirupati Market', 'Patan', 384110, 'Gujarat', 'India'),
(4, 'Infocity', 'Gandhinagar', 382421, 'Gujarat', 'India'),
(5, 'Sola', 'Ahmedabad', 380060, 'Gujarat', 'India'),
(6, 'Radhanpur Cross Road', 'Mehsana', 385340, 'Gujarat', 'India'),
(7, 'Chandkheda', 'Ahmedabad', 380005, 'Gujarat', 'India'),
(8, 'Gandhi Chowk', 'Unjha', 384170, 'Gujarat', 'India'),
(9, 'Oberoi mall', 'Mumbai', 400063, 'Maharashtra', 'India'),
(10, 'Growels Mall', 'Mumbai', 400101, 'Maharashtra', 'India');

-- --------------------------------------------------------

--
-- Table structure for table `Book Details`
--

CREATE TABLE `Book Details` (
  `Book_ID` bigint(5) NOT NULL,
  `Book_Name` varchar(50) NOT NULL,
  `Book_Type` varchar(30) NOT NULL,
  `Book_Author` varchar(50) NOT NULL,
  `Published_By` varchar(50) NOT NULL,
  `Published_Year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Book Details`
--

INSERT INTO `Book Details` (`Book_ID`, `Book_Name`, `Book_Type`, `Book_Author`, `Published_By`, `Published_Year`) VALUES
(1, 'The Power of Your Subconscious Mind', 'Self Improvement', 'Dr. Joseph Murphy', 'Fingerprint Publishing', 2017),
(2, 'Atomic Habits', 'Self Improvement', 'James Arthur', 'Random House Business Books', 2018),
(3, 'The Psychology of Money ', 'Money and Business Management', 'Morgan Housel', 'Jaico Publishing House', 2020),
(4, 'She: A History of Adventure', 'Novel', 'H. Rider Haggard', 'Longmans', 1992),
(5, 'The Hobbit', 'Fantasy Fiction', 'J. R. R. Tolkien', 'George Allen & Unwin (UK)', 1937),
(6, 'Frankenstein', 'Gothic Novel', 'Mary Shelley', 'Simon & Schuster', 1902),
(7, 'Rich Dad Poor Dad', 'Perseus Books Group', 'Robert Kiyosaki and Sharon L. Lechter', 'Warner Books', 2000),
(8, 'The Power of Now', 'Self Help', 'Eckhart Tolle', 'Namaste Publishing) ', 1996),
(9, 'On the Road ', 'Novel', 'Jack Kerouac', 'Viking Press', 1957),
(10, 'Long Walk to Freedom ', 'Autobiography', 'Nelson Mandela', 'Little Brown & Co', 1994);

-- --------------------------------------------------------

--
-- Table structure for table `Customers`
--

CREATE TABLE `Customers` (
  `Customer_ID` bigint(50) NOT NULL,
  `Full_Name` varchar(50) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Mobile_Number` bigint(10) NOT NULL,
  `City` varchar(50) NOT NULL,
  `State` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Customers`
--

INSERT INTO `Customers` (`Customer_ID`, `Full_Name`, `Gender`, `Mobile_Number`, `City`, `State`) VALUES
(12345, 'Ravi Vaghela', 'Male', 9601919359, 'Patan', 'Gujarat'),
(23456, 'Jinal Shah', 'Female', 7994561234, 'Ahmedabad', 'Gujarat'),
(34567, 'Ronak Jain', 'Male', 7412589632, 'Jaipur', 'Rajshthan'),
(45678, 'Biswajit Sharma', 'Male', 7412589632, 'Mumbai', 'Maharashtra'),
(56789, 'Manshi Gandhi', 'Female', 8521479632, 'Noida', 'Uttar Pradesh'),
(67890, 'Manish Singh', 'Male', 8794561238, 'Amritsar', 'Punjab'),
(78910, 'Bijoy Deol', 'Male', 8523614678, 'Kolkata', 'West Bengal'),
(89101, 'Kenvy Verma', 'Female', 879485624, 'Malappuram', 'Kerala'),
(91011, 'Visva Kapoor', 'Female', 8521237895, 'Kochi', 'Kerala'),
(99999, 'Alex Steve', 'Male', 7412589632, 'Benglore', 'Karnatraka');

-- --------------------------------------------------------

--
-- Table structure for table `Employee`
--

CREATE TABLE `Employee` (
  `Emp_ID` int(5) NOT NULL,
  `Emp_Name` char(30) NOT NULL,
  `Emp_Email` varchar(50) NOT NULL,
  `Emp_Mobile_No` bigint(10) NOT NULL,
  `Emp_City` char(20) NOT NULL,
  `Emp_Join_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Employee`
--

INSERT INTO `Employee` (`Emp_ID`, `Emp_Name`, `Emp_Email`, `Emp_Mobile_No`, `Emp_City`, `Emp_Join_Date`) VALUES
(1, 'Ravi Vaghela', 'ravi.s.addweb@gmail.com', 9601919359, 'Patan', '2022-02-02'),
(2, 'Nidhi Jain', 'nidhi.addweb@gmail.com', 7894561237, 'Dehgam', '2022-02-02'),
(3, 'Jinal Shah', 'jinal.addweb@gmail.com', 7894563132, 'Ahmedabad', '2022-02-02'),
(4, 'Ghanshyam Pandya', 'ghanshyam.addweb@gmail.com', 9789641258, 'Baluntri', '2022-02-02'),
(5, 'Aaqib Shaikh', 'aaqib.addweb$gmail.com', 7894568246, 'Ahmedabad', '2022-02-02'),
(6, 'Dipak Parmar', 'dipak.soltution@gmail.com', 7894567568, 'Patan', '2022-01-19'),
(7, 'Hardik Trivedi', 'hardik.solution@gmail.com', 8794561287, 'Patan', '2022-01-19'),
(8, 'Manthan Prajapati', 'manthan.moontech@gmail.com', 7854125896, 'Patan', '2022-01-22'),
(9, 'Sahil Metraniya', 'sahil.railwire@gmail.com', 7854963124, 'Deesa', '2020-08-01'),
(10, 'Dhruvi Thakkar', 'dhruvi.heckberry@gmail.com', 7894562589, 'Patan', '2022-01-25');

-- --------------------------------------------------------

--
-- Table structure for table `Famous Place`
--

CREATE TABLE `Famous Place` (
  `Place_ID` bigint(10) NOT NULL,
  `Famous_Place` varchar(25) NOT NULL,
  `City_Name` varchar(25) NOT NULL,
  `City_Pincode` bigint(6) NOT NULL,
  `State` varchar(20) NOT NULL,
  `Country` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Famous Place`
--

INSERT INTO `Famous Place` (`Place_ID`, `Famous_Place`, `City_Name`, `City_Pincode`, `State`, `Country`) VALUES
(1, 'Rani Ki Vav', 'Patan', 384110, 'Gujarat', 'India'),
(2, 'Sahastraling Talav', 'Patan', 384110, 'Gujarat', 'India'),
(3, 'Adalaj ni Vav', 'Ahmedabad', 382421, 'Gujarat', 'India'),
(4, 'Hill Station Mount Abu', 'Abu', 307501, 'Rajasthan', 'India'),
(5, 'Taj Mahal', 'Agra', 282001, 'Uttar Pradesh', 'India'),
(6, 'The Golden Temple', 'Amritsar', 143006, 'Punjab', 'India'),
(7, 'The Red Fort', 'New Delhi', 110006, 'Delhi', 'India'),
(8, 'The Gateway of India', 'Mumbai', 400005, 'Maharashtra', 'India'),
(9, 'The Ellora Caves ', 'Aurangabad', 431102, 'Maharashtra', 'India'),
(10, 'Statue of Unity', 'Kevadiya', 393155, 'Gujarat', 'India');

-- --------------------------------------------------------

--
-- Table structure for table `Gas Booking`
--

CREATE TABLE `Gas Booking` (
  `Booking_ID` bigint(10) NOT NULL,
  `Customer_ID` bigint(10) NOT NULL,
  `Customer_Name` varchar(50) NOT NULL,
  `Cylinder_No` varchar(20) NOT NULL,
  `Date` date NOT NULL,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Gas Booking`
--

INSERT INTO `Gas Booking` (`Booking_ID`, `Customer_ID`, `Customer_Name`, `Cylinder_No`, `Date`, `Status`) VALUES
(1, 12345, 'Jitendra Shah', 'A12345', '2010-10-12', 'Active'),
(2, 23456, 'Ghanshyam Pandya', 'B12345', '2011-12-25', 'Inactive'),
(3, 34567, 'Jinal Shah', 'B12345', '2014-08-15', 'Active'),
(4, 45678, 'Aaqib Shaikh', 'C12345', '2002-12-30', 'Active'),
(5, 56789, 'Nidhi Jain', 'D12345', '2000-01-01', 'Active'),
(6, 67890, 'Ravi Vaghela', 'E12345', '2003-04-12', 'Active'),
(7, 78910, 'Dipak Parmar', 'F12345', '2001-10-20', 'Active'),
(8, 89101, 'Parth Ghadhvi ', 'G12345', '1999-11-10', 'Inactive'),
(9, 91011, 'Shreya Mewada', 'H12345', '2006-03-12', 'Active'),
(10, 99999, 'Hardik Trivedi', 'H12346', '2002-10-22', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `IT Companies`
--

CREATE TABLE `IT Companies` (
  `Company_ID` int(5) NOT NULL,
  `Company_Name` varchar(50) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Pincode` int(6) NOT NULL,
  `State` varchar(20) NOT NULL,
  `Country` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `IT Companies`
--

INSERT INTO `IT Companies` (`Company_ID`, `Company_Name`, `City`, `Pincode`, `State`, `Country`) VALUES
(1, 'AddWeb Solution Pvt. Ltd', 'Ahmedabad', 380009, 'Gujarat', 'India'),
(2, 'Solution Analysts', 'Ahmedabad', 380058, 'Gujarat', 'India'),
(3, 'BMC Software India', 'Pune', 411006, 'Maharashtra', 'India'),
(4, 'Global India Pvt. Ltd', 'Pune', 411057, 'Maharashtra', 'India'),
(5, 'Infosys Limited', 'Benglore', 560042, 'Karnataka', 'India'),
(6, 'Synopsys India Pvt. Ltd', 'Benglore', 560016, 'Karnataka', 'India'),
(7, 'Fingent Global Solutions Pvt. Ltd', 'Kochi', 682042, 'Kerala', 'India'),
(8, 'Atlanta IT Solutions Pvt. Ltd', 'Malappuram', 676519, 'Kerala', 'India'),
(9, 'Sparks IT Solutions', 'Noida', 201301, 'Uttar Pradesh', 'India'),
(10, 'Cyient Limited', 'Noida', 201305, 'Uttar Pradesh', 'India');

-- --------------------------------------------------------

--
-- Table structure for table `Passengers Details`
--

CREATE TABLE `Passengers Details` (
  `Passenger_ID` bigint(50) NOT NULL,
  `Passenger_Name` varchar(50) NOT NULL,
  `Passenger_City` varchar(50) NOT NULL,
  `On_Boarding_Point` varchar(50) NOT NULL,
  `Destination Point` varchar(50) NOT NULL,
  `Payment_Mode` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Passengers Details`
--

INSERT INTO `Passengers Details` (`Passenger_ID`, `Passenger_Name`, `Passenger_City`, `On_Boarding_Point`, `Destination Point`, `Payment_Mode`) VALUES
(1, 'Aakash Jha', 'Ahmedabad', 'Iscon Cross Road ', 'Adalaj Cross Road`', 'Offline'),
(2, 'Jinal Shah', 'Ahmedabad', 'Gitamandir', 'Khanbhat', 'Online'),
(3, 'Ghanshyam Pandya', 'Baluntri', 'Baluntri', 'Iscon Cross Road', 'Online'),
(4, 'Aaqib Shaikh ', 'Ahmedabad', 'Paldi ', 'Adalaj', 'Online'),
(5, 'Ravi Vaghela', 'Unjha', 'Unjha Cross Road', 'Ahmedabad', 'Online'),
(6, 'Nidhi Jain', 'Dehgam', 'Gandhinagar', 'Ahmedabad', 'Offline'),
(7, 'Dipak Parmar', 'Balisana', 'Balisana Highway', 'Ahmedabad ', 'Offline'),
(8, 'Hardik Trivedi', 'Patan', 'New Bus Stand Patan', 'Ahmedabad', 'Online'),
(9, 'Sahil Metraniya', 'Deesa', 'Juna Deesa', 'Chandkheda', 'Online'),
(10, 'Kuldip Suthar', 'Palanpur', 'Chhapi', 'Gandghinagar', 'Online');

-- --------------------------------------------------------

--
-- Table structure for table `Students`
--

CREATE TABLE `Students` (
  `Roll_No` int(5) NOT NULL,
  `Student_Name` char(30) NOT NULL,
  `Class` varchar(10) NOT NULL,
  `Course` varchar(30) NOT NULL,
  `School_Name` char(50) NOT NULL,
  `Percentage` float(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Students`
--

INSERT INTO `Students` (`Roll_No`, `Student_Name`, `Class`, `Course`, `School_Name`, `Percentage`) VALUES
(1, 'Ravi Vaghela', 'A', 'M.Sc(CA & IT)', 'Department of Computer Science, HNGU Patan', 89.99),
(2, 'Nidhi Jain', 'A+', 'B.E', 'Gandhinagar IT college', 92.50),
(3, 'Jinal Shah', 'A', 'M.Sc(CA & IT)', 'Gujarat Technical University', 90.46),
(4, 'Aaqib Shaikh', 'A+', 'B.E', 'Gujarat Technical University', 96.99),
(5, 'Ghanshyam Pandya', 'A', 'B.Tech', 'Ganpat University', 90.98),
(6, 'Dipak Parmar', 'A', 'M.Sc(CA & IT)', 'Department of Computer Science, HNGU Patan', 89.99),
(7, 'Sahil Metraniya', 'A', 'B.Sc(CA & IT)', 'Department of Computer Science, HNGU Patan', 89.80),
(8, 'Hardik Trivedi', 'B', 'M.Sc(CA & IT)', 'Department of Computer Science, HNGU Patan', 79.85),
(9, 'Manthan Prajapati', 'B', 'M.Sc(CA & IT)', 'Department of Computer Science, HNGU Patan', 76.85),
(10, 'Path Gadhavi', 'B', 'MCA', 'Department of Computer Science, HNGU Patan', 75.98);

-- --------------------------------------------------------

--
-- Table structure for table `Vehicles`
--

CREATE TABLE `Vehicles` (
  `Vehicle_ID` int(5) NOT NULL,
  `Vehicle_Model` varchar(20) NOT NULL,
  `Vehicle_Name` varchar(20) NOT NULL,
  `Vehicle_Company` varchar(20) NOT NULL,
  `Vehicle_Type` varchar(20) NOT NULL,
  `Year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Vehicles`
--

INSERT INTO `Vehicles` (`Vehicle_ID`, `Vehicle_Model`, `Vehicle_Name`, `Vehicle_Company`, `Vehicle_Type`, `Year`) VALUES
(1, 'C-Class', 'Mercedes Benz', 'Mercedes', 'Mid-Size Sudan', 2021),
(2, 'XSR155', 'Yamaha XSR155', 'Yamaha', 'Two Wheeler Bike', 2022),
(3, 'RS200', 'Pulsar', 'Bajaj', 'Two Wheeler Bike', 2019),
(4, '6G', 'Activa', 'Honda', 'Two Wheeler Scooter ', 2019),
(5, 'Glostar', 'MG', 'Morris Garages', '7 Seater SUV', 2020),
(6, 'Hector', 'MG', 'Morris Garages', '5 Seater SUV', 2018),
(7, 'Creta', 'Hundai Creta', 'Hudndai', '5 Seater SUV', 2017),
(8, 'Venue', 'Hundai Venue', 'Hundai', '5 Seater Mini SUV', 2019),
(9, 'Sonet', 'Kia Sonet', 'Hundai', '5 Seater Mini SUV', 2019),
(10, 'Seltos', 'Kia ', 'Hundai', '5 Seater SUV', 2019);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
