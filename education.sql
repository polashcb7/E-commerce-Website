-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2018 at 09:08 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `education`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `email` varchar(255) NOT NULL,
  `psw` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `adminsignup`
--

CREATE TABLE `adminsignup` (
  `id` int(32) NOT NULL,
  `psw` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminsignup`
--

INSERT INTO `adminsignup` (`id`, `psw`) VALUES
(1, 1),
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `apparatusup`
--

CREATE TABLE `apparatusup` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `apparatus` varchar(1000) NOT NULL,
  `acategory` varchar(1000) NOT NULL,
  `aprice` varchar(1000) NOT NULL,
  `adetails` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `apparatusup`
--

INSERT INTO `apparatusup` (`id`, `name`, `apparatus`, `acategory`, `aprice`, `adetails`) VALUES
(1, 'ap1.jpg', 'Bristlebot Robotics Kit', 'Physics', 'TK 1050', 'Build three different kinds of wiggling, wobbling robots for a fun introduction to robotics'),
(2, 'ap2.jpg', 'Quantity Discount Pricing - Save Big', 'Physics', 'TK 2000', 'Make teaching about electricity & magnetism easy with this complete study in static electricity, current electricity, magnetism, and electromagnetism.'),
(3, 'ap3.jpg', 'Digital Multimeter', 'Physics', 'TK 1020', 'Measure DC/AC voltage, DC current and resistance using this 19-function digital pocket multimeter.\r\n\r\n'),
(4, 'ap4.jpg', 'Sound Measurement Kit', 'Physics', 'TK 2010', 'Measure sound wave lengths and determine the speed of sound with this inexpensive resonance kit.\r\n\r\n'),
(5, 'ap5.jpg', 'Inertia Apparatus', 'Physics', 'TK 1020', 'This kit contains everything you need for a hands-on demonstration of inertia or Newtons First Law of motion.\r\n'),
(6, 'ap6.jpg', 'Digital Scale, 2000 g x 0.1 g', 'Physics', 'TK 1020', 'This high-capacity digital science scale makes it easy to weigh out chemicals and more. Measure up to 2000 grams with 0.1 gram accuracy with this scale of motion.\r\n'),
(7, 'ap7.jpg', 'Tape Measure, Steel, 3 meters', 'Physics', 'TK 100', 'This flexible steel retractable tape measure ideally meets most experimental measurement needs.'),
(8, 'ap8.jpg', 'Rainbow Fire Kit', 'Physics', 'Tk 1100', 'Have you ever watched fireworks and wondered how all the different colors are made? With this physics experiment, you will use a simple flame test to explore different chemical compounds and create your own rainbow fire.'),
(9, 'ap9.jpg', 'Spring Scales, assorted', 'Physics', 'TK 1110', 'Measure weight or force by hanging objects from the spring scale hook.'),
(10, 'ac1.jpg', 'Chemistry of Food Experiment Kit', 'Chemistry', 'TK 1020', 'If you are what you eat, what makes up your food? Show the connections between chemistry & nutrition for a meaningful STEM activity.'),
(11, 'ac2.jpg', 'Lab Chemistry Hardware Set', 'Chemistry', 'TK 1020', 'Our chemistry hardware set contains items that you will use again and again.'),
(12, 'ac3.jpg', 'Chemical Splash Safety Goggles, Child', 'Chemistry', 'TK 250', 'Protect young eyes from splashes as kids work with chemicals. These safety goggles also protect from particles or projectiles. Designed for kids up to 90 lbs.'),
(13, 'ab1.jpg', 'Introductory Dissection Kit', 'Biology', 'TK 1500', 'This economical kit has everything needed for dissecting a frog, earthworm, and grasshopper, making it a great way to introduce kids to dissection.'),
(14, 'ab2.jpg', 'Home Microscope', 'Biology', 'TK 3000', 'With this affordable, high-quality compound microscope you will be able to study biology up close! It has fluorescent lighting and 400x magnification, making it an ideal microscope for kids and for high school student labs. Plus, a lifetime warranty.'),
(15, 'ab3.jpg', 'Brain Model, small', 'Biology', 'TK 1200', 'See how the parts of the brain work together as you assemble this economical, 31-piece model.');

-- --------------------------------------------------------

--
-- Table structure for table `bookup`
--

CREATE TABLE `bookup` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `book` varchar(1000) NOT NULL,
  `bcategory` varchar(1000) NOT NULL,
  `bprice` varchar(1000) NOT NULL,
  `bdetails` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bookup`
--

INSERT INTO `bookup` (`id`, `name`, `book`, `bcategory`, `bprice`, `bdetails`) VALUES
(1, 'bp1.jpg', 'Nuclear Physics (Graduate Texts in Physics) (Hardcover)', 'Physics', 'TK 130', 'This book is about nuclear physics'),
(2, 'bp2.gif', 'Modern Physics (Paperback)', 'Physics', 'TK 2050', 'This book is about modern physics'),
(3, 'bp3.gif', 'Physics Experiments (Paperback)', 'Physics', 'TK 516', 'This book is about different types of experiments in physics'),
(4, 'bp4.gif', 'Fundamentals Of Physics With Applications (Paperback)', 'Physics', 'TK 700', 'This book is about applications of fundamental physics'),
(5, 'bp5.jpg', 'Modern Particle Physics  (Hardcover)', 'Physics', 'TK 1330', 'This book is about modern particle physics'),
(6, 'bp6.jpg', 'Solid State Physics (Paperback)', 'Physics', 'TK 1008', 'This book is about solid state physics'),
(7, 'bc1.jpg', 'Quantum Mechanics in Chemistry (Physical Chemistry Textbook Series)', 'Chemistry', 'TK 1470', 'This book is about Quantum Mechanics in Chemistry '),
(8, 'bc2.GIF', 'General Chemistry', 'Chemistry', 'TK 1090', 'This book is about General Chemistry'),
(9, 'bc3.jpg', 'Analytical Chemistry (Hardcover)', 'Chemistry', 'TK 1040', 'This book is about Analytical Chemistry '),
(10, 'bb1.jpg', 'Campbell Biology (Paperback)', 'Biology', 'TK 6110', 'This book is about  Campbell Biology'),
(11, 'bb2.gif', 'Cell Biology Genetics And Molecular Biology (Paperback)', 'Biology', 'TK 535', 'This book is about  Cell Biology Genetics And Molecular Biology'),
(12, 'bb3.gif', 'Plant Cell Biology', 'Biology', 'TK 1020', 'This book is about  Plant Cell Biology'),
(13, 'bm1.gif', 'Fundamentals of Mathematics', 'Mathematics', 'TK 213', 'This book is about  Fundamentals of Mathematics'),
(14, 'bm2.jpg', 'Mathematics Dictionary (Paperback)', 'Mathematics', 'TK 375', 'This book is about  Mathematics Dictionary '),
(15, 'bm3.gif', 'Engineering Mathematics (Paperback)', 'Mathematics', 'TK 810', 'This book is about  Engineering Mathematics '),
(16, 'bm4.jpg', 'Discrete Mathematics  (Paperback)', 'Mathematics', 'TK 643', 'This book is about  Discrete Mathematics  ');

-- --------------------------------------------------------

--
-- Table structure for table `buy`
--

CREATE TABLE `buy` (
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(32) NOT NULL,
  `card_number` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buy`
--

INSERT INTO `buy` (`fullname`, `email`, `phone`, `card_number`) VALUES
('', '', 0, 0),
('', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `commenttable`
--

CREATE TABLE `commenttable` (
  `ID` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comment` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commenttable`
--

INSERT INTO `commenttable` (`ID`, `email`, `comment`) VALUES
(1, 'sajidshahnawaz@gmail.com', 'a'),
(2, 'sajidshahnawaz@gmail.com', 'as'),
(3, 'sajidshahnawaz@gmail.com', 'testing');

-- --------------------------------------------------------

--
-- Table structure for table `institutionsview`
--

CREATE TABLE `institutionsview` (
  `iid` int(100) NOT NULL,
  `iname` varchar(100) NOT NULL,
  `icatagory` varchar(100) NOT NULL,
  `iaddress` varchar(100) NOT NULL,
  `iphone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `institutionsview`
--

INSERT INTO `institutionsview` (`iid`, `iname`, `icatagory`, `iaddress`, `iphone`) VALUES
(1, 'North South University', 'university', 'Plot, 15, Block B Kuril - NSU Rd, Dhaka 1229', '02-55668200'),
(2, 'RAJUK Uttara Model College', 'College', 'Sector: 6, Dhaka 1230', '02-58952780'),
(3, 'Motijheel Ideal School', 'school', 'Dhaka 1000', '02-9330177');

-- --------------------------------------------------------

--
-- Table structure for table `joinus`
--

CREATE TABLE `joinus` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) NOT NULL,
  `profession` varchar(100) DEFAULT NULL,
  `organisation` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `checklist` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `joinus`
--

INSERT INTO `joinus` (`id`, `firstname`, `middlename`, `lastname`, `profession`, `organisation`, `phone`, `email`, `checklist`) VALUES
(21, 'Sajid', 'kobutor', 'Shahnawaz', 'student', 'nsu', '0177641', 'sajidshahnawaz@gmail.com', 'Physics '),
(22, 'Faria', 'Karim', 'Porna', 'Student', 'North South University', '0171137656', 'aaa@gmail.com', 'Physics '),
(23, 'Faria', 'Karim', 'Porna', 'Student', 'North South University', '0171137656', 'aaa@gmail.com', 'Physics '),
(24, 'a', 'b', 'c', 'student', 'nsu', '123', 'abir@gmail.com', 'Physics ');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(255) NOT NULL,
  `psw` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `psw` varchar(32) NOT NULL,
  `pswrepeat` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`fullname`, `email`, `psw`, `pswrepeat`) VALUES
('', '', '', ''),
('Faria Karim', 'myselffariakarimporna@gmail.com', '12345', '12345'),
('F Karim', 'faria@gmail.com', '12341234', '12341234'),
('', '', '', ''),
('Ataul Karim Rony', 'ataul@gmail.com', '12345678', '12345678'),
('', '', '', ''),
('Ataul Karim Rony', 'aaa@gmail.com', '12345678', '12345678'),
('', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `videoup`
--

CREATE TABLE `videoup` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `video` varchar(1000) NOT NULL,
  `vcategory` varchar(1000) NOT NULL,
  `vprice` varchar(1000) NOT NULL,
  `vdetails` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `videoup`
--

INSERT INTO `videoup` (`id`, `name`, `video`, `vcategory`, `vprice`, `vdetails`) VALUES
(1, 'vp1.mp4', 'Intro to vectors & scalars | One-dimensional motion ', 'Physics', 'TK 20', 'This lecture is about vectors & scalars. Here the detail idea about vector and scalar quantities have been given.'),
(2, 'vp2.mp4', 'Calculating average velocity or speed | One-dimensional motion ', 'Physics', 'TK 20', 'This lecture is about velocity or speed in one dimensional motion. Here some related mathematical problems also have been solved.'),
(3, 'vp3.mp4', 'Solving for time | One-dimensional motion ', 'Physics', 'TK 20', 'This lecture is about solving mathematical problems which are related with times.'),
(4, 'vp4.mp4', 'Displacement from time and velocity example | One-dimensional motion ', 'Physics', 'TK 20', 'This lecture is about displacement.'),
(5, 'vp5.mp4', 'Acceleration | One-dimensional motion ', 'Physics', 'TK 20', 'This lecture is about acceleration.'),
(6, 'vp6.mp4', 'More on Newtons first law of motion ', 'Physics', 'TK 20', 'This lecture is about newtons first law of motion '),
(7, 'vp7.mp4', 'Newtons second law of motion | Forces and Newtons laws of motion', 'Physics', 'TK 20', 'This lecture is about newtons second law of motion '),
(8, 'vp8.mp4', 'Newtons third law of motion | Forces and Newtons laws of motion ', 'Physics', 'TK 20', 'This lecture is about newtons third law of motion.'),
(10, 'vc1.mp4', 'Introduction to chemistry | Atoms, compounds, and ions ', 'Chemistry', 'TK 20', 'This lecture is about Atoms, compounds, and ions '),
(11, 'vc2.mp4', 'Elements and atoms | Atoms, compounds, and ions ', 'Chemistry', 'TK 20', 'This lecture is about Elements and atoms '),
(12, 'vc3.mp4', 'Orbitals | Electronic structure of atoms | ', 'Chemistry', 'TK 20', 'This lecture is about Electronic structure of atoms '),
(13, 'vb1.mp4', 'Introduction to Evolution and Natural Selection', 'Biology', 'TK 20', 'This lecture is about Evolution and Natural Selection\r\n'),
(14, 'vb2.mp4', 'Chromosomes, Chromatids, Chromatin, etc.', 'Biology', 'TK 20', 'This lecture is Chromosomes, Chromatids, Chromatin, etc.\r\n'),
(15, 'vb3.mp4', 'Mitosis, Meiosis and Sexual Reproduction', 'Biology', 'TK 20', 'This lecture is Mitosis, Meiosis and Sexual Reproduction.\r\n'),
(16, 'vm1.mp4', 'Logarithms | Logarithms | Algebra II', 'Mathematics', 'TK 20', 'This lecture is about Logarithms | Logarithms | Algebra II\r\n'),
(18, 'vm3.mp4', 'Binomial theorem | Polynomial and rational functions | Algebra II', 'Mathematics', 'TK 20', 'This lecture is about Binomial theorem, Polynomial and rational functions.\r\n'),
(19, 'vm2.mp4', 'Finding a percentage | Decimals | Pre-Algebra', 'Mathematics', 'TK 20', 'This lecture is about Finding a percentage\r\n'),
(20, '', '', '', '', ''),
(21, '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apparatusup`
--
ALTER TABLE `apparatusup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookup`
--
ALTER TABLE `bookup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commenttable`
--
ALTER TABLE `commenttable`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `institutionsview`
--
ALTER TABLE `institutionsview`
  ADD PRIMARY KEY (`iid`);

--
-- Indexes for table `joinus`
--
ALTER TABLE `joinus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videoup`
--
ALTER TABLE `videoup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apparatusup`
--
ALTER TABLE `apparatusup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `bookup`
--
ALTER TABLE `bookup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `commenttable`
--
ALTER TABLE `commenttable`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `institutionsview`
--
ALTER TABLE `institutionsview`
  MODIFY `iid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `joinus`
--
ALTER TABLE `joinus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `videoup`
--
ALTER TABLE `videoup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
