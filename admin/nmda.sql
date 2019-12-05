-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2019 at 12:43 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nmda`
--

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gallery_id` int(100) NOT NULL,
  `gallery_title` varchar(200) NOT NULL,
  `main_image` varchar(500) NOT NULL,
  `publish` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gallery_id`, `gallery_title`, `main_image`, `publish`) VALUES
(2, 'Shoe', '0001shBenBR_1.JPG', 1),
(3, 'Harry potter', 'harry.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `gallery_images`
--

CREATE TABLE `gallery_images` (
  `id` int(100) NOT NULL,
  `gallery_id` int(100) NOT NULL,
  `gallery_image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery_images`
--

INSERT INTO `gallery_images` (`id`, `gallery_id`, `gallery_image`) VALUES
(4, 2, 'her.jpg'),
(12, 3, 'her.jpg'),
(13, 3, 'Ron Weasley (I).jpg'),
(16, 0, 'Ron Weasley (I).jpg'),
(17, 2, 'harry.jpg'),
(18, 2, 'her.jpg'),
(19, 2, 'Ron Weasley (I).jpg'),
(35, 0, '0001shBenBR_3.JPG'),
(36, 0, '0001shBenGR_1.JPG'),
(37, 0, '0001shBenGR_2.JPG'),
(41, 3, '0001ShCBenBl_2.jpg'),
(42, 3, '0001ShCBenBl_4.jpg'),
(43, 3, '0004ShCBenBl_4.jpg'),
(44, 3, '0001ShCBenTa_2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `member_info`
--

CREATE TABLE `member_info` (
  `id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone_no` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `publish` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member_info`
--

INSERT INTO `member_info` (`id`, `name`, `email`, `phone_no`, `state`, `pic`, `publish`) VALUES
(1, 'Harry Potter', 'harry@hotmail.com', '987456125', 'State 3', 'harry.jpg', 1),
(2, 'Hermione 123', 'hermione@gmail.com', '98745658566', 'State 1', 'her.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `newsId` int(100) NOT NULL,
  `news_title` varchar(200) NOT NULL,
  `news_article` varchar(1000) NOT NULL,
  `publish` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`newsId`, `news_title`, `news_article`, `publish`) VALUES
(1, 'News 1', '<p><span style=\"font-size:18px\"><span style=\"font-family:Georgia,serif\">This is article 1</span></span></p>\r\n', 1),
(3, 'News 2', '<p><span style=\"font-family:Courier New,Courier,monospace\">This is 2nd new</span></p>\r\n', 1),
(4, 'Hermione Granger', '<p><img alt=\"\" src=\"img/her.jpg\" style=\"height:216px; width:234px\" /></p>\r\n\r\n<h1>Hermione Granger</h1>\r\n\r\n<p><strong>Hermione Jean Granger</strong>&nbsp;is a fictional character in&nbsp;J. K. Rowling&#39;s&nbsp;<em>Harry Potter</em>&nbsp;series. She first appears in&nbsp;<em>Harry Potter and the Philosopher&#39;s Stone</em>, as a new student on her way to&nbsp;Hogwarts. After&nbsp;Harry&nbsp;and&nbsp;Ron&nbsp;save her from a mountain&nbsp;troll&nbsp;in the girls&#39; toilets, she becomes best friends with them and often uses her quick wit, deft recall, and encyclopaedic knowledge to help them. Rowling has stated that Hermione resembles herself at a younger age, with her insecurity and fear of failure.</p>\r\n', 1),
(5, 'Harry Potter', '<h1><em>Harry Potter</em></h1>\r\n\r\n<p>Since the release of the first novel,&nbsp;<em>Harry Potter and the Philosopher&#39;s Stone</em>, on 26 June 1997, the books have found immense popularity, critical acclaim and commercial success worldwide. They have attracted a wide adult audience as well as younger readers and are often considered cornerstones of modern young adult literature.</p>\r\n\r\n<p><img alt=\"\" src=\"img/harry.jpg\" /></p>\r\n\r\n<p>he series has also had its share of criticism, including concern about the increasingly dark tone as the series progressed, as well as the often gruesome and graphic violence it depicts.</p>\r\n', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `gallery_images`
--
ALTER TABLE `gallery_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member_info`
--
ALTER TABLE `member_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`newsId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gallery_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gallery_images`
--
ALTER TABLE `gallery_images`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `member_info`
--
ALTER TABLE `member_info`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `newsId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
