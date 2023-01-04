-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2023 at 07:43 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(250) NOT NULL,
  `image` varchar(400) NOT NULL,
  `CreateDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `image`, `CreateDate`) VALUES
(1, 'admin', 'admin@gmail.com', '202cb962ac59075b964b07152d234b70', 'jahangir.jpg', '2023-01-04 03:14:30');

-- --------------------------------------------------------

--
-- Table structure for table `admin_form`
--

CREATE TABLE `admin_form` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_form`
--

INSERT INTO `admin_form` (`id`, `name`, `email`, `password`, `image`) VALUES
(1, '', '', '202cb962ac59075b964b07152d234b70', 'jahangir.jpg'),
(2, 'Md Nayeemul', 'nayeem@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'jahangir.jpg'),
(3, 'nayeemul', 'nayeem@gmail.com', '202cb962ac59075b964b07152d234b70', 'dietitian2.jpg'),
(4, 'Admin', 'admin@gmail.com', '202cb962ac59075b964b07152d234b70', 'c3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `number` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `DietitianName` varchar(250) NOT NULL,
  `drid` int(11) NOT NULL,
  `VisitingTime` varchar(250) NOT NULL,
  `Message` varchar(250) NOT NULL,
  `status` int(100) NOT NULL DEFAULT 0,
  `appointment_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `username`, `number`, `email`, `DietitianName`, `drid`, `VisitingTime`, `Message`, `status`, `appointment_time`) VALUES
(1, 'abid', '', 'abid@gmail.com', '', 0, '', '', 1, '2022-12-25 19:51:51'),
(2, 'sakib', '', 'sakib@123', '', 26, '', '', 1, '2022-12-25 20:21:28'),
(3, 'testing', '121012451', 'test@gmail.com', 'test', 0, '', '', 0, '2023-01-03 22:02:12'),
(4, 'testing', '121012451', 'test@gmail.com', 'test', 0, '', '', 0, '2023-01-03 22:03:26'),
(5, 'testing', '121012451', 'test@gmail.com', 'test', 0, 'Prof. Dr. Md. Mahbubur Rahman Major ', ' 11am to 1pm & 6pm to 9pm (Every day)', 0, '2023-01-03 22:04:57'),
(6, 'testing', '121012451', 'test@gmail.com', 'hi', 0, 'Prof. Dr. Md. Mahbubur Rahman Major ', ' 11am to 1pm & 6pm to 9pm (Every day)', 0, '2023-01-03 22:06:33'),
(7, 'testing', '121012451', 'test@gmail.com', 'Prof. Dr. Md. Mahbubur Rahman Major ', 0, ' 11am to 1pm & 6pm to 9pm (Every day)', 'test', 0, '2023-01-03 22:07:29'),
(8, 'testing', '121012451', 'test@gmail.com', 'Prof. Dr. Md. Mahbubur Rahman Major', 0, ' 11am to 1pm & 6pm to 9pm (Eve', 'test everything ok', 0, '2023-01-03 22:30:12'),
(9, 'salman', '01705548264', 'sksalmanmiah@gmail.com', 'Dr.Jahangir Kabir', 0, '6.00-11.00 PM', 'test', 0, '2023-01-04 17:02:45'),
(10, 'salman', '01705548264', 'sksalmanmiah@gmail.com', 'Hassain', 0, '11am to 1pm & 6pm to 9pm (Ever', 'hasain test', 0, '2023-01-04 17:02:59'),
(11, 'salman', '01705548264', 'sksalmanmiah@gmail.com', 'Hassain', 27, '11am to 1pm & 6pm to 9pm (Ever', 'test id', 0, '2023-01-04 17:12:06'),
(12, 'salman', '01705548264', 'sksalmanmiah@gmail.com', 'Hassain', 27, '11am to 1pm & 6pm to 9pm (Ever', 'test id', 0, '2023-01-04 17:39:14');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(5) NOT NULL,
  `blog_title` varchar(1000) NOT NULL,
  `blog_content` text NOT NULL,
  `blog_image` varchar(400) NOT NULL,
  `blog_create_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `blog_title`, `blog_content`, `blog_image`, `blog_create_date`) VALUES
(1, 'This is blog 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse semper, purus non aliquam dictum, risus elit feugiat tortor, non euismod diam mi eget felis. Ut rhoncus felis id nibh interdum, in porttitor lacus pharetra. Etiam efficitur lacus erat, vitae ullamcorper lectus tempor ut. Donec auctor, ipsum sit amet tempus pharetra, risus diam accumsan dolor, eu dictum orci ex ultrices mauris. Nu', '../assets/images/blog-1.jpg', '2022-12-29 10:06:14'),
(23, 'blog 2', 'khjsddghfshfgd', '../uploaded_img/blog-2.jpg', '2023-01-04 04:14:47');

-- --------------------------------------------------------

--
-- Table structure for table `booked`
--

CREATE TABLE `booked` (
  `id` int(10) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(30) NOT NULL,
  `TrainerName` varchar(250) NOT NULL,
  `trainerId` int(11) NOT NULL,
  `BookingDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booked`
--

INSERT INTO `booked` (`id`, `name`, `email`, `TrainerName`, `trainerId`, `BookingDate`) VALUES
(35, 'salman', 'sksalmanmiah@gmail.com', '', 4, '2023-01-04 18:04:22'),
(36, 'salman', 'sksalmanmiah@gmail.com', '', 5, '2023-01-04 18:04:24'),
(37, 'salman', 'sksalmanmiah@gmail.com', '', 3, '2023-01-04 18:04:26');

-- --------------------------------------------------------

--
-- Table structure for table `dietitian`
--

CREATE TABLE `dietitian` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `info` varchar(1000) NOT NULL,
  `number` varchar(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `visiting_time` varchar(30) NOT NULL,
  `image` varchar(400) NOT NULL,
  `password` varchar(250) NOT NULL,
  `d-acc_create_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dietitian`
--

INSERT INTO `dietitian` (`id`, `name`, `info`, `number`, `email`, `address`, `visiting_time`, `image`, `password`, `d-acc_create_date`) VALUES
(8, 'Dr.Jahangir Kabir', 'MBBS,FCGP,CCD(BIRDEM),Diploma in Diabetes,Asthm& COPD(UK). Lifestyle Modifier and diabetes Specialist.', '01458759654', 'dr.jahangirkabir@gmail.com', 'Health Revolution,Aftabnogor', '6.00-11.00 PM', 'uploaded_img/jahangir.jpg', '', '2022-12-30 03:46:51'),
(9, 'Prof. Dr. Md. Mahbubur Rahman Major', 'Consultant, Neuromedicine. Neurologist', '01458759654', 'mahabuburrahaman@gmail.com', 'Ibn Sina Diagnostic & Imaging Center. Dhanmondi, House 48, Road 9/A, Dhaka-1209', ' 11am to 1pm & 6pm to 9pm (Eve', 'uploaded_img/c2.jpg', '', '2022-12-30 18:05:11'),
(10, 'Professor Dr. Md. Abdul Hayee', 'Qualifications: FCPS (Paediatrics) ellow in Paediatric Cardiology (AIMS, India)\r\n\r\nSpeciality: Associate Consultant – Paediatric Cardiology', '01745845214', 'dr.abdulhayee@gmail.com', 'Asgar Ali Hospital. 111/1/A, Distillary road, gendaria, Dhaka-1204', ' 9am to 1pm (Only Friday)', 'uploaded_img/c2.jpg', '', '2022-12-31 10:57:36'),
(11, 'Professor Dr. Md. Abdul Hayee', 'Qualifications: FCPS (Paediatrics) ellow in Paediatric Cardiology (AIMS, India)\r\n\r\nSpeciality: Associate Consultant – Paediatric Cardiology', '01745845214', 'dr.abdulhayee@gmail.com', 'Asgar Ali Hospital. 111/1/A, Distillary road, gendaria, Dhaka-1204', ' 9am to 1pm (Only Friday)', 'uploaded_img/c2.jpg', '', '2023-01-01 22:15:24'),
(16, 'Prof. Dr. Md. Rahman Major', 'MBBS,FCGP,CCD(BIRDEM),Diploma in Diabetes,Asthm& COPD(UK). Lifestyle Modifier and diabetes Specialist.', '0161111111', 'dr.mahabub@gmail.com', 'Square Hospital ,Panthapath, Dhaka', '11am to 1pm & 6pm to 9pm (Ever', '/../admin/uploaded_img/dietitian2.jpg', '202cb962ac59075b964b07152d234b70', '2023-01-04 01:42:17'),
(17, 'Prof. Dr. Md. Rahman Major', 'gjhkfgdgjcgvc n', '016000000', 'user2@gmail.com', 'Square Hospital ,Panthapath, Dhaka', '11am to 1pm & 6pm to 9pm (Ever', '../uploaded_img/2.jpg', '', '2023-01-04 01:46:44'),
(18, 'Prof. Dr. Md. Rahman Major', 'khjhksfg', '01458759654', 'tonmoy@gmail.com', 'Square Hospital ,Panthapath, Dhaka', '11am to 1pm & 6pm to 9pm (Ever', '../uploaded_img/dietitian3.jpg', '202cb962ac59075b964b07152d234b70', '2023-01-04 01:47:40'),
(19, 'Prof. Dr. Md. Rahman Major', 'sghjdghvc', '0124587', 'user2@gmail.com', 'Square Hospital ,Panthapath, Dhaka', '11am to 1pm & 6pm to 9pm (Ever', '../uploaded_img/blog-5.jpg', '202cb962ac59075b964b07152d234b70', '2023-01-04 01:53:37'),
(20, 'Prof. Dr. Md. Rahman Major', 'hjkghjgfhf', '0124587', 'tonmoy@gmail.com', 'Square Hospital ,Panthapath, Dhaka', '11am to 1pm & 6pm to 9pm (Ever', '../uploaded_img/blog-5.jpg', '', '2023-01-04 01:54:15'),
(21, 'Prof. Dr. Md. Mahbubur Rahman Major', 'sdsghfjlhgjkbnm,', '12451232654', 'asjabed@gmai.com', 'Square Hospital ,Panthapath, Dhaka', '11am to 1pm & 6pm to 9pm (Ever', '../uploaded_img/3.jpg', '', '2023-01-04 01:58:29'),
(26, 'Prof. Dr. Md. Rahman Major', 'kljhfgcfghmv', '0124587', 'admin@gmail.com', 'Square Hospital ,Panthapath, Dhaka', '11am to 1pm & 6pm to 9pm (Ever', '7548DFD5-908E-4671-A0AC-DAA97E21FA8A.jpeg', '202cb962ac59075b964b07152d234b70', '2023-01-04 03:38:07'),
(27, 'Hassain', 'jksgfdgjhkjhb', '016000000', 'admin@gmail.com', 'Square Hospital ,Panthapath, Dhaka', '11am to 1pm & 6pm to 9pm (Ever', '../uploaded_img/blog-2.jpg', 'd41d8cd98f00b204e9800998ecf8427e', '2023-01-04 03:50:50');

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE `trainer` (
  `id` int(10) NOT NULL,
  `title` varchar(250) DEFAULT NULL,
  `content` varchar(250) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `number` varchar(12) DEFAULT NULL,
  `image` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `Createdate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`id`, `title`, `content`, `email`, `number`, `image`, `password`, `Createdate`) VALUES
(3, 'Saimon Fitness', 'Saimon Fitness is the male/ female based online fitness training class in Bangladesh.', 'saimonfitness007@gmail.com', '1780094244', '../uploaded_img/saimon.JPG', '', '2023-01-02 16:02:06'),
(4, 'Burn Out Fitness', 'Burn Out Fitness is a both online and offline Gym/ Physical Ffitness center.It is also specialized in Yoga', 'Burnoutfitnessbysabrina@gmail.', '01784635030', '../uploaded_img/burn.JPG', '', '2023-01-02 16:10:01'),
(5, 'SheActive', 'SheActive is a female based health and wellness related online center.', 'sadia.sheactive@gmail.com', '01744132456', '../uploaded_img/trainer3.jpg', '202cb962ac59075b964b07152d234b70', '2023-01-04 15:53:58');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `number` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `username`, `email`, `number`, `password`) VALUES
(1, 'a', 'b', '', 'user2@gmail.com', '124587', 'c20ad4d76fe97759aa27a0c99bff6710'),
(5, 'a', 'b', '', 'asjabed@gmai.com', '16000000', '202cb962ac59075b964b07152d234b70'),
(6, 'c', 'd', '', 'cd@gmai.com', '161111111', 'c20ad4d76fe97759aa27a0c99bff6710'),
(7, 'md', 'nayeem', '', 'nayeem@gmail.com', '1458759654', '698d51a19d8a121ce581499d7b701668'),
(8, 'as', 'Abir', '', 'abir@gmail.com', '2147483647', '698d51a19d8a121ce581499d7b701668'),
(9, 'as', 'abir', '', 'abir@gmail.com', '2147483647', '698d51a19d8a121ce581499d7b701668'),
(10, 'as', 'abir', '', 'abir@gmail.com', '2147483647', '698d51a19d8a121ce581499d7b701668'),
(11, 'as', 'abir', 'abir', 'abir@gmail.com', '2147483647', '698d51a19d8a121ce581499d7b701668'),
(12, 'MS', 'Antor', 'Antor', 'antor@gmail.com', '2147483647', '698d51a19d8a121ce581499d7b701668'),
(13, 'as', 'Abir', '', 'abir@gmail.com', '2147483647', '698d51a19d8a121ce581499d7b701668'),
(14, 'simran', 'akter', 'Simran', 'simran@gmail.com', '2147483647', '698d51a19d8a121ce581499d7b701668'),
(15, 'test', 'test', 'testing', 'test@gmail.com', '121012451', '202cb962ac59075b964b07152d234b70'),
(16, 'Tonmoy', 'Sarker', 'Ashibul', 'tonmoy@gmail.com', '2147483647', '202cb962ac59075b964b07152d234b70'),
(17, 'sheikh', 'salman', 'salman', 'sksalmanmiah@gmail.com', '01705548264', '5f2f2a8e1222fe2b960a58593ddafe0b');

-- --------------------------------------------------------

--
-- Table structure for table `workshop`
--

CREATE TABLE `workshop` (
  `id` int(10) NOT NULL,
  `title` varchar(250) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `link` varchar(250) NOT NULL,
  `image` varchar(400) NOT NULL,
  `CreateDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `workshop`
--

INSERT INTO `workshop` (`id`, `title`, `content`, `link`, `image`, `CreateDate`) VALUES
(5, 'WorkShop 1', ' 1	Saimon Fitness is the male/ female based online fitness training class in Bangladesh.', 'https://www.facebook.com/', '../uploaded_img/pp.jpg', '2023-01-04 04:27:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_form`
--
ALTER TABLE `admin_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booked`
--
ALTER TABLE `booked`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dietitian`
--
ALTER TABLE `dietitian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workshop`
--
ALTER TABLE `workshop`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_form`
--
ALTER TABLE `admin_form`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `booked`
--
ALTER TABLE `booked`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `dietitian`
--
ALTER TABLE `dietitian`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `trainer`
--
ALTER TABLE `trainer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `workshop`
--
ALTER TABLE `workshop`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
