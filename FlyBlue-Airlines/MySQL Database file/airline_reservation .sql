-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Juin 30, 2020 at 04:09 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airlines_reservation`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`Harry`@`localhost` PROCEDURE `GetFlightStatistics` (IN `j_date` DATE)  BEGIN
 select flight_no,departure_date,IFNULL(no_of_passengers, 0) as no_of_passengers,total_capacity from (
select f.flight_no,f.departure_date,sum(t.no_of_passengers) as no_of_passengers,j.total_capacity 
from flight_details f left join ticket_details t 
on t.booking_status='CONFIRMED' 
and t.flight_no=f.flight_no 
and f.departure_date=t.journey_date 
inner join jet_details j on j.jet_id=f.jet_id
group by flight_no,journey_date) k where departure_date=j_date;
 END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(20) NOT NULL,
  `pwd` varchar(30) DEFAULT NULL,
  `staff_id` varchar(20) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `pwd`, `staff_id`, `name`, `email`) VALUES
('bertrand', 'birthou13', '101', 'Bertrand Leon', 'judme13@gmail.com'),
('bernard', 'berny90', '100', 'Bernard Lindor', 'bernardlindor90@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` varchar(20) NOT NULL,
  `pwd` varchar(20) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL,
  `phone_no` varchar(15) DEFAULT NULL,
  `address` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `pwd`, `name`, `email`, `phone_no`, `address`) VALUES
('fabienne', 'password', 'Fabienne Janvier', 'janvierfabienne@gmail.com', '+84 785-812-345', '144, Xuan Thuy, Cau Giay Hanoi'),
('jennifer', 'password', 'Jennifer Thomas', 'jenniferthomasgmail@gmail.com', '+84 918-556-764', '144, Xuan Thuy, Cau Giay Hanoi'),
('michelet', 'password', 'Juste Michelet', 'justemichelet@gmail.com', '+84 993-498-570', '144, Xuan Thuy, Cau Giay Hanoi'),
('astrel', 'password', 'Telemaque Astrel', 'astreltelemaque@gmail.com', '+84 909-090-090', '144, Xuan Thuy, Cau Giay Hanoi'),
('achille', 'password', 'Achille Peterson ', 'achillepeterson@gmail.com', '+84 680-808-080', '144, Xuan Thuy, Cau Giay Hanoi'),
('hyggens', 'password', 'Vaillant Hyggens', 'vaillanthyggens@gmail.com', '+84 984-571-336', '144, Xuan Thuy, Cau Giay Hanoi'),
('bertrand', 'password', 'Bertrand Leon', 'judme13@gmail.com', '+84 584-531-336', '144, Xuan Thuy, Cau Giay Hanoi'),
('peterson', 'password', 'Bertelot Peterson', 'peterson@gmail.com', '+84 584-531-636', '144, Xuan Thuy, Cau Giay Hanoi');

-- --------------------------------------------------------

--
-- Table structure for table `flight_details`
--

CREATE TABLE `flight_details` (
  `flight_no` varchar(10) NOT NULL,
  `from_city` varchar(20) DEFAULT NULL,
  `to_city` varchar(20) DEFAULT NULL,
  `departure_date` date NOT NULL,
  `arrival_date` date DEFAULT NULL,
  `departure_time` time DEFAULT NULL,
  `arrival_time` time DEFAULT NULL,
  `seats_economy` int(5) DEFAULT NULL,
  `seats_business` int(5) DEFAULT NULL,
  `price_economy` int(10) DEFAULT NULL,
  `price_business` int(10) DEFAULT NULL,
  `jet_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flight_details`
--

INSERT INTO `flight_details` (`flight_no`, `from_city`, `to_city`, `departure_date`, `arrival_date`, `departure_time`, `arrival_time`, `seats_economy`, `seats_business`, `price_economy`, `price_business`, `jet_id`) VALUES
('AA101', 'Da Nang', 'Hanoi', '2020-07-01', '2020-07-01', '21:00:00', '01:00:00', 195, 96, 5000, 7500, '10001'),
('AA102', 'Lyon', 'Paris', '2020-07-02', '2020-07-02', '10:00:00', '12:00:00', 200, 73, 2300, 3000, '10002'),
('AA103', 'Hanoi', 'Da Nang', '2020-07-03', '2020-07-03', '17:00:00', '18:45:00', 150, 75, 1100, 1500, '10003'),
('AA104', 'Beshisktas', 'Instanbul', '2020-07-04', '2020-07-04', '09:00:00', '09:17:00', 37, 4, 500, 750, '10004'),
('AA105', 'Da Nang', 'Ho chi Minh', '2020-07-05', '2020-07-05', '14:00:00', '19:00:00', 150, 75, 3000, 3750, '10005'),
('AA106', 'Ho Chi Minh', 'Hanoi', '2020-07-06', '2020-07-06', '11:00:00', '14:30:00', 123, 85, 2500, 2750, '10006'),
('AA107', 'Chicago', 'New-York', '2020-07-07', '2020-07-07', '18:00:00', '23:00:00', 167, 45, 1250, 1750, '10007'),
('AA108', 'Washington', 'Florida', '2020-07-08', '2020-07-08', '13:00:00', '15:45:00', 187, 47, 3300, 3750, '10008'),
('AA109', 'Jacmel', 'Port-au-Prince', '2020-07-09', '2020-07-09', '10:20:00', '12:00:00', 190, 80, 600, 750, '10009'),
('AA110', 'Port-au-Prince', 'Cap-Haitien', '2020-07-10', '2020-07-10', '15:00:00', '19:20:00', 103, 75, 750, 850, '10010'),
('AA111', 'Michigan', 'Fort-Lauderdale', '2020-07-11', '2020-07-11', '16:45:00', '21:00:00', 156, 20, 1200, 1789, '10011'),
('AA112', 'Florida', 'Chicago', '2020-07-12', '2020-07-12', '14:00:00', '20:05:00', 159, 60, 2000, 2375, '10012'),
('AA113', 'Bergame', 'Venise', '2020-07-13', '2020-07-13', '04:50:00', '09:00:00', 149, 90, 650, 790, '10013'),
('AA114', 'Naples', 'Rome', '2020-07-14', '2020-07-14', '10:05:00', '13:15:00', 112, 26, 980, 1140, '10014'),
('AA115', 'Dijon', 'Marseille', '2020-07-15', '2020-07-15', '01:00:00', '03:25:00', 190, 68, 2000, 2430, '10015'),
('AA116', 'Valence', 'Barcelone', '2020-07-16', '2020-07-16', '01:00:00', '04:00:00', 245, 70, 3000, 3240, '10016'),
('AA117', 'Manchester', 'Londres', '2020-07-17', '2020-07-17', '13:00:00', '16:20:00', 175, 75, 3500, 3755, '10017'),
('AA118', 'Seville', 'Madrid', '2020-07-18', '2020-07-18', '15:30:00', '18:00:00', 120, 90, 1500, 1759, '10018'),
('AA119', 'Breme', 'Munich', '2020-07-19', '2020-07-19', '14:00:00', '18:30:00', 123, 54, 3500, 3815, '10019'),
('AA120', 'Pao Salonique', 'Athenes', '2020-08-20', '2020-08-20', '11:00:00', '14:00:00', 164, 71,1000, 1250, '10020'),
('AA121', 'Chicago', 'Washington', '2020-07-21', '2020-07-21', '09:25:00', '12:45:00', 67, 98, 1000, 1129, '10021'),
('AA122', 'Baltimore', 'Maryland', '2020-07-22', '2020-07-22', '13:00:00', '19:25:00', 98, 84, 1900, 2000, '10022'),
('AA123', 'Cap-Haitien', 'Les Cayes', '2020-07-23', '2020-07-23', '10:00:00', '12:40:00', 10, 35, 1900, 2020, '10023'),
('AA124', 'Port-au-Prince', 'Jacmel', '2020-07-24', '2020-07-24', '03:00:00', '07:00:00', 150, 69, 1000, 1300, '10024'),
('AA125', 'Ney-York', 'Florida', '2020-07-25', '2020-07-25', '04:00:00', '08:00:00', 134, 73, 1200, 1500, '10025'),
('AA126', 'Michigan', 'Texas', '2020-07-26', '2020-07-26', '11:00:00', '13:30:00', 94, 70, 3000, 3200, '10026'),
('AA127', 'Sao Paolo', 'Brasilia', '2020-07-27', '2020-07-27', '12:00:00', '14:45:00', 160, 75, 3100, 3250, '10027'),
('AA128', 'Washington', 'Porto rico', '2020-07-28', '2020-07-28', '12:00:00', '14:45:00', 142, 75, 3100, 3250, '10028'),
('AA129', 'Amsterdam', 'Heindoven', '2020-07-29', '2020-07-29', '12:00:00', '15:45:00', 170, 75, 3400, 3750, '10029'),
('AA130', 'Strasbourg', 'Dortmund', '2020-07-30', '2020-07-30', '11:00:00', '13:45:00', 180, 75, 1100, 1250, '10030');

-- --------------------------------------------------------

--
-- Table structure for table `frequent_flier_details`
--

CREATE TABLE `frequent_flier_details` (
  `frequent_flier_no` varchar(20) NOT NULL,
  `customer_id` varchar(20) DEFAULT NULL,
  `mileage` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `frequent_flier_details`
--

INSERT INTO `frequent_flier_details` (`frequent_flier_no`, `customer_id`, `mileage`) VALUES
('10001000', 'bertrand', 375),
('20002000', 'fabienne', 150),
('30001000', 'michelet', 350),
('20004000', 'astrel', 175);

-- --------------------------------------------------------

--
-- Table structure for table `jet_details`
--

CREATE TABLE `jet_details` (
  `jet_id` varchar(10) NOT NULL,
  `jet_type` varchar(20) DEFAULT NULL,
  `total_capacity` int(5) DEFAULT NULL,
  `active` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jet_details`
--

INSERT INTO `jet_details` (`jet_id`, `jet_type`, `total_capacity`, `active`) VALUES
('10001', 'Dreamliner', 300, 'Yes'),
('10002', 'Airbus A380', 275, 'Yes'),
('10003', 'ATR', 50, 'Yes'),
('10004', 'Boeing 737', 445, 'Yes'),
('10005', 'Airbus A300-600ST', 350, 'Yes'),
('10006', 'Airbus A300-P2F', 125, 'Yes'),
('10007', 'Airbus A330-743L', 310, 'Yes'),
('10008', 'Boeing 627A', 360, 'Yes'),
('10009', 'Antonov An-124', 325, 'Yes'),
('10010', 'Antonov An-72', 255, 'Yes'),
('10011', 'Antonov An-225', 365, 'Yes'),
('10012', 'Boeing 747-40 Large', 425, 'Yes'),
('10013', 'Boeing 767-300F', 415, 'Yes'),
('10014', 'Bristol Freighter', 325, 'Yes'),
('10015', 'Carvair', 125, 'Yes'),
('10016', 'McDonnell Douglas DC-19', 225, 'Yes'),
('10017', 'Mini Guppy', 325, 'Yes'),
('10018', 'Boeing 789', 425, 'Yes'),
('10019', 'Super Guppy', 310, 'no'),
('10020', 'Short Skyvan', 225, 'Yes'),
('10021', 'Airbus B18', 215, 'no'),
('10022', 'Boeing 765', 435, 'Yes'),
('10023', 'Antonov An-75', 245, 'no'),
('10024', 'Boeing 737-A80', 385, 'Yes'),
('10025', 'Antonov An-123', 275, 'no'),
('10026', 'Cargo Freighter', 425, 'Yes'),
('10027', 'Test_Model', 250, 'Yes'),
('10028', 'Antonov An-128', 260, 'Yes'),
('10029', 'Boeing 5197', 350, 'no'),
('10030', 'Antonov An-1468', 450, 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `passengers`
--

CREATE TABLE `passengers` (
  `passenger_id` int(10) NOT NULL,
  `pnr` varchar(15) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `gender` varchar(8) DEFAULT NULL,
  `meal_choice` varchar(5) DEFAULT NULL,
  `frequent_flier_no` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passengers`
--

INSERT INTO `passengers` (`passenger_id`, `pnr`, `name`, `age`, `gender`, `meal_choice`, `frequent_flier_no`) VALUES
(1, '1669050', 'bertrand', 20, 'male', 'yes', '10001000'),
(1, '2369143', 'astrel', 20, 'male', 'yes', '20004000'),
(1, '3027167', 'fabienne', 25, 'female', 'yes', '20002000'),
(1, '3773951', 'peterson', 51, 'male', 'yes', NULL),
(1, '4797983', 'bernard', 34, 'male', 'yes', NULL),
(1, '5421865', 'achille', 30, 'male', 'yes', NULL),
(1, '6980157', 'hyggens', 20, 'male', 'yes', NULL),
(1, '8503285', 'jennifer', 29, 'female', 'yes', NULL),
(2, '1669050', 'bertrand', 20, 'male', 'yes', NULL),
(2, '2369143', 'astrel', 20, 'male', 'yes', '20004000'),
(2, '3027167', 'fabienne', 25, 'female', 'yes', '20002000'),
(2, '3773951', 'peterson', 51, 'male', 'yes', NULL),
(2, '4797983', 'bernard', 34, 'male', 'yes', NULL),
(2, '5421865', 'achille', 30, 'male', 'yes', NULL),
(2, '6980157', 'hyggens', 20, 'male', 'yes', NULL),
(2, '8503285', 'jennifer', 29, 'female', 'yes', NULL),
(3, '1669050', 'bertrand', 20, 'male', 'yes', NULL),
(3, '2369143', 'astrel', 20, 'male', 'yes', '20004000'),
(3, '3773951', 'peterson', 51, 'male', 'yes', NULL),
(3, '4797983', 'bernard', 34, 'male', 'yes', NULL),
(3, '5421865', 'achille', 30, 'male', 'yes', NULL),
(4, '2369143', 'astrel', 20, 'male', 'yes', '20004000');


-- --------------------------------------------------------

--
-- Table structure for table `payment_details`
--

CREATE TABLE `payment_details` (
  `payment_id` varchar(20) NOT NULL,
  `pnr` varchar(15) DEFAULT NULL,
  `payment_date` date DEFAULT NULL,
  `payment_amount` int(6) DEFAULT NULL,
  `payment_mode` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_details`
--

INSERT INTO `payment_details` (`payment_id`, `pnr`, `payment_date`, `payment_amount`, `payment_mode`) VALUES
('120000248', '4797983', '2020-06-25', 4200, 'credit card'),
('142539461', '3773951', '2020-06-26', 4050, 'credit card'),
('165125569', '8503285', '2020-06-27', 7500, 'net banking'),
('467972527', '2369143', '2020-06-30', 33400, 'debit card'),
('557778944', '6980157', '2020-06-20', 11700, 'credit card'),
('620041544', '1669050', '2020-06-21', 4800, 'debit card'),
('665360715', '5421865', '2020-06-22', 15750, 'net banking'),
('862686553', '3027167', '2020-06-24', 10700, 'debit card');

--
-- Triggers `payment_details`
--
DELIMITER $$
CREATE TRIGGER `update_ticket_after_payment` AFTER INSERT ON `payment_details` FOR EACH ROW UPDATE ticket_details
     SET booking_status='CONFIRMED', payment_id= NEW.payment_id
   WHERE pnr = NEW.pnr
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `ticket_details`
--

CREATE TABLE `ticket_details` (
  `pnr` varchar(15) NOT NULL,
  `date_of_reservation` date DEFAULT NULL,
  `flight_no` varchar(10) DEFAULT NULL,
  `journey_date` date DEFAULT NULL,
  `class` varchar(10) DEFAULT NULL,
  `booking_status` varchar(20) DEFAULT NULL,
  `no_of_passengers` int(5) DEFAULT NULL,
  `lounge_access` varchar(5) DEFAULT NULL,
  `priority_checkin` varchar(5) DEFAULT NULL,
  `insurance` varchar(5) DEFAULT NULL,
  `payment_id` varchar(20) DEFAULT NULL,
  `customer_id` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket_details`
--

INSERT INTO `ticket_details` (`pnr`, `date_of_reservation`, `flight_no`, `journey_date`, `class`, `booking_status`, `no_of_passengers`, `lounge_access`, `priority_checkin`, `insurance`, `payment_id`, `customer_id`) VALUES
('1669050', '2020-06-21', 'AA104', '2020-07-04', 'business', 'CONFIRMED', 3, 'yes', 'yes', 'yes', '620041544', 'bertrand'),
('2369143', '2020-06-30', 'AA101', '2020-07-01', 'business', 'CONFIRMED', 4, 'yes', 'yes', 'yes', '467972527', 'astrel'),
('3027167', '2020-06-24', 'AA101', '2020-07-01', 'economy', 'CONFIRMED', 2, 'no', 'no', 'yes', '862686553', 'fabienne'),
('3773951', '2020-05-26', 'AA104', '2020-07-04', 'economy', 'CONFIRMED', 3, 'yes', 'yes', 'yes', '142539461', 'peterson'),
('4797983', '2020-06-25', 'AA104', '2020-07-04', 'business', 'CONFIRMED', 3, 'yes', 'no', 'yes', '120000248', 'michelet'),
('5421865', '2020-06-22', 'AA101', '2020-07-01', 'economy', 'CONFIRMED', 3, 'no', 'no', 'no', '665360715', 'achille'),
('6980157', '2020-06-20', 'AA101', '2020-07-01', 'economy', 'CONFIRMED', 2, 'yes', 'yes', 'yes', '557778944', 'hyggens'),
('8503285', '2020-06-27', 'AA102', '2020-07-02', 'business', 'CONFIRMED', 2, 'yes', 'yes', 'no', '165125569', 'jennifer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `flight_details`
--
ALTER TABLE `flight_details`
  ADD PRIMARY KEY (`flight_no`,`departure_date`),
  ADD KEY `jet_id` (`jet_id`);

--
-- Indexes for table `frequent_flier_details`
--
ALTER TABLE `frequent_flier_details`
  ADD PRIMARY KEY (`frequent_flier_no`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `jet_details`
--
ALTER TABLE `jet_details`
  ADD PRIMARY KEY (`jet_id`);

--
-- Indexes for table `passengers`
--
ALTER TABLE `passengers`
  ADD PRIMARY KEY (`passenger_id`,`pnr`),
  ADD KEY `pnr` (`pnr`),
  ADD KEY `frequent_flier_no` (`frequent_flier_no`);

--
-- Indexes for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `pnr` (`pnr`);

--
-- Indexes for table `ticket_details`
--
ALTER TABLE `ticket_details`
  ADD PRIMARY KEY (`pnr`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `journey_date` (`journey_date`),
  ADD KEY `flight_no` (`flight_no`),
  ADD KEY `flight_no_2` (`flight_no`,`journey_date`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `flight_details`
--
ALTER TABLE `flight_details`
  ADD CONSTRAINT `flight_details_ibfk_1` FOREIGN KEY (`jet_id`) REFERENCES `jet_details` (`jet_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `frequent_flier_details`
--
ALTER TABLE `frequent_flier_details`
  ADD CONSTRAINT `frequent_flier_details_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `passengers`
--
ALTER TABLE `passengers`
  ADD CONSTRAINT `passengers_ibfk_1` FOREIGN KEY (`pnr`) REFERENCES `ticket_details` (`pnr`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `passengers_ibfk_2` FOREIGN KEY (`frequent_flier_no`) REFERENCES `frequent_flier_details` (`frequent_flier_no`) ON UPDATE CASCADE;

--
-- Constraints for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD CONSTRAINT `payment_details_ibfk_1` FOREIGN KEY (`pnr`) REFERENCES `ticket_details` (`pnr`) ON UPDATE CASCADE;

--
-- Constraints for table `ticket_details`
--
ALTER TABLE `ticket_details`
  ADD CONSTRAINT `ticket_details_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ticket_details_ibfk_3` FOREIGN KEY (`flight_no`,`journey_date`) REFERENCES `flight_details` (`flight_no`, `departure_date`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
