-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2022 at 04:07 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL,
  `img` varchar(500) NOT NULL,
  `biodata` varchar(1700) NOT NULL,
  `subTitle` varchar(700) NOT NULL,
  `bioDescription` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `user_id`, `title`, `description`, `img`, `biodata`, `subTitle`, `bioDescription`) VALUES
(1, 1, 'ABOUT ME', 'He suffers great pains. The consequences of his avoidance had to do with some. May they be the main game. No one had any desire. And no one who hinders receives them otherwise. It is because he shuns the services which he\'s been in the advantage of.', 'testimonials-3.jpg', '{\r\n   \"Birthday\":\"1 May,1995\",\r\n   \"Website\":\"www.example.com\",\r\n   \"Phone\":\"+1234567890\",\r\n   \"City\":\"New York,USA\",\r\n   \"demo\": \"ddd\"\r\n}', 'Web Developer', ' Choosing the offices, therefore, is the choice of the duties of labor and the tenderness of pain. Anyone can reach out and get everything. None of the prosecutors attended the incident at the time. And all of him. Eagerness to be called the most important services indeed. But hey, because he countered, and so did not.\n');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `banner_img` varchar(700) NOT NULL,
  `banner_name` varchar(140) NOT NULL,
  `position` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `user_id`, `banner_img`, `banner_name`, `position`) VALUES
(1, 1, 'hero.jpg', 'Brandon ', 'DEVELOPER'),
(2, 2, 'HFH', 'XG', 'Designer, Developer, Freelancer, Photographer'),
(3, 3, 'jhv', 'hjvj', 'nb nb');

-- --------------------------------------------------------

--
-- Table structure for table `common`
--

CREATE TABLE `common` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `fact_title` varchar(255) NOT NULL,
  `fact_desc` varchar(255) NOT NULL,
  `skill_title` varchar(255) NOT NULL,
  `skill_desc` varchar(255) NOT NULL,
  `resume_title` varchar(255) NOT NULL,
  `resume_desc` varchar(255) NOT NULL,
  `service_title` varchar(255) NOT NULL,
  `service_desc` varchar(255) NOT NULL,
  `testi_title` varchar(255) NOT NULL,
  `contact_title` varchar(255) NOT NULL,
  `port_sec_title` varchar(255) NOT NULL,
  `port_sec_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `common`
--

INSERT INTO `common` (`id`, `user_id`, `fact_title`, `fact_desc`, `skill_title`, `skill_desc`, `resume_title`, `resume_desc`, `service_title`, `service_desc`, `testi_title`, `contact_title`, `port_sec_title`, `port_sec_desc`) VALUES
(1, 1, 'Facts', 'Fact description', 'Skills', 'skill description', 'Resume', 'resume description', 'Service', 'service description', 'Testimonial', 'Contacts', 'Portfolios', 'Portfolio Description');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cont_name` varchar(100) NOT NULL,
  `cont_email` varchar(255) NOT NULL,
  `cont_subj` varchar(255) NOT NULL,
  `cont_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `user_id`, `cont_name`, `cont_email`, `cont_subj`, `cont_desc`) VALUES
(1, 1, 'sadia', 'sadia@gmail.com', 'lorem ipsum', 'Description');

-- --------------------------------------------------------

--
-- Table structure for table `fact`
--

CREATE TABLE `fact` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `fact_title` varchar(255) NOT NULL,
  `fact_description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fact`
--

INSERT INTO `fact` (`id`, `user_id`, `icon`, `fact_title`, `fact_description`) VALUES
(1, 1, 'smile-o', '232', 'Happy Clients\r\n\r\n'),
(2, 1, 'tasks', '521', 'Projects'),
(3, 1, 'ticket', '1463', 'Hours Of Support'),
(4, 1, 'trophy', '25', 'awards');

-- --------------------------------------------------------

--
-- Table structure for table `general`
--

CREATE TABLE `general` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `addr` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `phone` varchar(300) NOT NULL,
  `footer_text` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `general`
--

INSERT INTO `general` (`id`, `user_id`, `addr`, `email`, `phone`, `footer_text`) VALUES
(1, 1, 'A108 dam Street, New York, NY 535022', 'info@example.com', '+1 5589 55488 55', '© Copyright MyResume. All Rights Reserved\r\nDesigned by BootstrapMade');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `port_title` varchar(100) NOT NULL,
  `port_category` varchar(100) NOT NULL,
  `link` varchar(300) NOT NULL,
  `img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `user_id`, `port_title`, `port_category`, `link`, `img`) VALUES
(1, 1, 'App 1', 'App', '#', 'portfolio-1.jpg'),
(2, 1, 'App 2', 'App', '#', 'portfolio-2.jpg'),
(3, 1, 'Card 1', 'Card', '#', 'portfolio-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE `resume` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `resume_type` enum('experience','education','summery') NOT NULL,
  `course_title` varchar(255) NOT NULL,
  `course_duration` varchar(255) NOT NULL,
  `course_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resume`
--

INSERT INTO `resume` (`id`, `user_id`, `resume_type`, `course_title`, `course_duration`, `course_desc`) VALUES
(1, 1, 'education', 'MASTER OF FINE ARTS & GRAPHIC DESIGN', '2015 - 2016', 'Rochester Institute of Technology, Rochester, NY\r\n\r\nQui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero voluptatum qui ut dignissimos deleniti nerada porti sand markend'),
(2, 1, 'experience', 'SENIOR GRAPHIC DESIGN SPECIALIST', '2019 - Present', 'Experion, New York, NY\r\n\r\nLead in the design, development, and implementation of the graphic, layout, and production communication materials\r\nDelegate tasks to the 7 members of the design team and provide counsel on all aspects of the project.\r\nSupervise the assessment of all graphic materials in order to ensure quality and accuracy of the design\r\nOversee the efficient use of production project budgets ranging from $2,000 - $25,000'),
(3, 1, 'summery', 'BRANDON JOHNSON', '', 'Innovative and deadline-driven Graphic Designer with 3+ years of experience designing and developing user-centered digital/print marketing material from initial concept to final, polished deliverable.\r\n\r\nPortland par 127,Orlando, FL\r\n(123) 456-7891\r\nalice.barkley@example.com');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `service_icon` varchar(600) NOT NULL,
  `service_title` varchar(100) NOT NULL,
  `service_desc` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `user_id`, `service_icon`, `service_title`, `service_desc`) VALUES
(1, 1, 'facebook', 'Lorem Ipsum', 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi');

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `skill_name` varchar(250) NOT NULL,
  `skill_percent` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`id`, `user_id`, `skill_name`, `skill_percent`) VALUES
(1, 1, 'HTML', '100'),
(2, 1, 'CSS', '90'),
(3, 1, 'PHP', '80'),
(4, 1, 'WORDPRESS/CMS', '90'),
(5, 1, 'JAVASCRIPT', '75'),
(6, 1, 'PHOTOSHOP', '55');

-- --------------------------------------------------------

--
-- Table structure for table `social_link`
--

CREATE TABLE `social_link` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `social_link`
--

INSERT INTO `social_link` (`id`, `user_id`, `icon`, `link`) VALUES
(1, 1, 'facebook', '#'),
(2, 1, 'twitter', '#');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `testi_name` varchar(100) NOT NULL,
  `testi_position` varchar(100) NOT NULL,
  `testi_desc` text NOT NULL,
  `testi_img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `user_id`, `testi_name`, `testi_position`, `testi_desc`, `testi_img`) VALUES
(1, 1, 'Matt Brandon', 'Freelancer', 'Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.\r\n                  ', 'testimonials-4.jpg'),
(2, 1, 'John Doe', 'Desinger', 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown', 'testimonials-3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `status`) VALUES
(1, 'demo', 'demo@gmail.com', '12345', 'active'),
(2, 'hello', 'hello@gmail.com', '12345', 'active'),
(3, 'bn n', 'hgch@gmail.com', '12345', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `common`
--
ALTER TABLE `common`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `fact`
--
ALTER TABLE `fact`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `general`
--
ALTER TABLE `general`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `portfolio_ibfk_1` (`user_id`);

--
-- Indexes for table `resume`
--
ALTER TABLE `resume`
  ADD PRIMARY KEY (`id`),
  ADD KEY `resume_ibfk_1` (`user_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_ibfk_1` (`user_id`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `skill_ibfk_1` (`user_id`);

--
-- Indexes for table `social_link`
--
ALTER TABLE `social_link`
  ADD PRIMARY KEY (`id`),
  ADD KEY `social_link_ibfk_1` (`user_id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`),
  ADD KEY `testimonial_ibfk_1` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `common`
--
ALTER TABLE `common`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fact`
--
ALTER TABLE `fact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `general`
--
ALTER TABLE `general`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `resume`
--
ALTER TABLE `resume`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `social_link`
--
ALTER TABLE `social_link`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `about`
--
ALTER TABLE `about`
  ADD CONSTRAINT `about_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `banner`
--
ALTER TABLE `banner`
  ADD CONSTRAINT `banner_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `common`
--
ALTER TABLE `common`
  ADD CONSTRAINT `common_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `contact_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `fact`
--
ALTER TABLE `fact`
  ADD CONSTRAINT `fact_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `general`
--
ALTER TABLE `general`
  ADD CONSTRAINT `general_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD CONSTRAINT `portfolio_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `resume`
--
ALTER TABLE `resume`
  ADD CONSTRAINT `resume_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `service_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `skill`
--
ALTER TABLE `skill`
  ADD CONSTRAINT `skill_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `social_link`
--
ALTER TABLE `social_link`
  ADD CONSTRAINT `social_link_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD CONSTRAINT `testimonial_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
