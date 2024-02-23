-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 23, 2024 at 06:59 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newsapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `categoryname` varchar(150) NOT NULL,
  `priority` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categoryname`, `priority`) VALUES
(1, 'Sport', 4),
(2, 'International', 3),
(4, 'Politics', 2),
(5, 'National', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(400) NOT NULL,
  `description` text NOT NULL,
  `news_date` date NOT NULL,
  `photopath` varchar(300) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `news_date`, `photopath`, `category_id`) VALUES
(2, 'Nepal VS Nz', 'NZ won by 64 runs  Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque quos velit cupiditate dolorem delectus voluptatum repudiandae sit suscipit quae beatae eligendi, dignissimos in facere, veritatis nemo, saepe voluptas incidunt nobis.', '2024-01-23', '1706073475_myimage.png', 1),
(3, 'Magh 16 Gate Holiday', 'Huna pani sakxa, nahuna pani sakxa  Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque quos velit cupiditate dolorem delectus voluptatum repudiandae sit suscipit quae beatae eligendi, dignissimos in facere, veritatis nemo, saepe voluptas incidunt nobis.', '2024-01-26', '1706157740_banner3_1697090126.jpg', 5),
(4, 'Parking Nisedh in New Road', 'New Road maa parking garna paidaina.  Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque quos velit cupiditate dolorem delectus voluptatum repudiandae sit suscipit quae beatae eligendi, dignissimos in facere, veritatis nemo, saepe voluptas incidunt nobis.', '2024-01-25', '1706157804_banner2_1697007706.jpg', 4),
(5, 'Japan ma bhukampa', 'Earthquake in Japan.  Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque quos velit cupiditate dolorem delectus voluptatum repudiandae sit suscipit quae beatae eligendi, dignissimos in facere, veritatis nemo, saepe voluptas incidunt nobis.', '2024-01-25', '1706157909_Cover Photo 2_1702897248_1703996408.jpg', 2),
(6, 'jhghjj', 'gjjjhhjj', '2024-02-11', '1707627846_banner2_1697007706.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `password`) VALUES
(1, 'Sudip Parajuli', 'sudip123', '962a36218a682120bee6374c0eb715a0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
