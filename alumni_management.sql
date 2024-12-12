-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2024 at 07:26 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumni_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(20) NOT NULL,
  `city` varchar(40) NOT NULL,
  `address` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `alumni_id` varchar(20) NOT NULL,
  `class_id` varchar(20) NOT NULL,
  `batch` varchar(20) NOT NULL,
  `passing_year` varchar(20) NOT NULL,
  `contact_number` varchar(15) NOT NULL,
  `full_address` varchar(200) NOT NULL,
  `city` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `department` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `announcement_id` int(30) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(30) NOT NULL,
  `title` varchar(255) NOT NULL,
  `type` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `u_id` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_comments`
--

CREATE TABLE `blog_comments` (
  `comment_id` int(30) NOT NULL,
  `blog_id` int(30) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `u_id` varchar(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(30) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `location` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `image_id` int(30) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `uploaded_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `job_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `type` varchar(50) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `experience` text NOT NULL,
  `location` varchar(255) NOT NULL,
  `sallary` text NOT NULL,
  `description` text NOT NULL,
  `apply_info` varchar(200) NOT NULL,
  `u_id` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`job_id`, `title`, `type`, `company_name`, `experience`, `location`, `sallary`, `description`, `apply_info`, `u_id`, `created_at`) VALUES
(1, 'Software Developer', 'Full-time', 'TechCorp', '2-3 years', 'New York', '75000', 'We are seeking a skilled Software Developer to design, build, and maintain efficient, reusable, and reliable code. The ideal candidate will collaborate with cross-functional teams to develop innovative software solutions that align with user needs. Responsibilities include debugging, testing, and deploying applications while maintaining software functionality and scalability. This role requires strong problem-solving skills, attention to detail, and proficiency in programming languages such as Java, Python, or C++. Previous experience in an agile environment and familiarity with version control systems like Git are preferred.', '', '123', '2024-11-17 18:25:49'),
(2, 'Graphic Designer', 'Part-time', 'Creative Studio', '1-2 years', 'Los Angeles', '40000', 'Creative Studio is looking for a talented Graphic Designer to produce high-quality visual content for various digital and print platforms. Responsibilities include conceptualizing and executing innovative designs, ensuring branding consistency, and collaborating with marketing and content teams. Proficiency in design tools such as Adobe Photoshop, Illustrator, and InDesign is essential. The ideal candidate should have a keen eye for aesthetics and detail, a strong portfolio, and the ability to manage multiple projects under tight deadlines. Experience with motion graphics and video editing tools will be an added advantage.', '', '124', '2024-11-17 18:25:49'),
(3, 'Data Analyst', 'Contract', 'DataSolutions', '3-5 years', 'Chicago', '85000', 'Join DataSolutions as a Data Analyst to transform raw data into actionable insights. Key responsibilities include collecting and analyzing large datasets, creating data visualizations, and generating reports to support business decisions. The ideal candidate should have a strong background in statistics, excellent knowledge of SQL, and experience with BI tools like Tableau or Power BI. Familiarity with programming languages such as Python or R is a plus. The role demands attention to detail, problem-solving skills, and the ability to communicate complex findings in a simple, clear manner.', '', '125', '2024-11-17 18:25:49'),
(4, 'HR Manager', 'Full-time', 'PeopleFirst', '5+ years', 'Houston', '95000', 'We are hiring an experienced HR Manager to oversee all aspects of human resource practices and processes. The role includes managing recruitment, employee relations, performance reviews, and compliance with labor regulations. The ideal candidate should have strong leadership skills, excellent communication abilities, and a proven track record in HR management. Familiarity with HR software, payroll systems, and employee engagement strategies is essential. This position also involves developing HR policies that align with organizational goals and fostering a positive workplace culture. A degree in HR or related field and PHR/SPHR certification are highly desirable.', '', '126', '2024-11-17 18:25:49');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` varchar(20) NOT NULL,
  `class_id` varchar(20) NOT NULL,
  `department` text NOT NULL,
  `batch` varchar(20) NOT NULL,
  `full_address` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `study_material`
--

CREATE TABLE `study_material` (
  `material_id` int(30) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `u_id` varchar(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` varchar(20) NOT NULL,
  `first_Name` varchar(100) NOT NULL,
  `last_Name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`alumni_id`);

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`announcement_id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `blog_comments`
--
ALTER TABLE `blog_comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `study_material`
--
ALTER TABLE `study_material`
  ADD PRIMARY KEY (`material_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
