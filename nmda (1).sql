-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2019 at 07:08 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

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
(43, 3, '0004ShCBenBl_4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE `loan` (
  `id` int(100) NOT NULL,
  `title` varchar(200) NOT NULL,
  `nep_title` varchar(255) CHARACTER SET ucs2 COLLATE ucs2_unicode_ci DEFAULT NULL,
  `article` varchar(1000) NOT NULL,
  `nep_article` varchar(5000) CHARACTER SET ucs2 COLLATE ucs2_unicode_ci NOT NULL,
  `publish` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan`
--

INSERT INTO `loan` (`id`, `title`, `nep_title`, `article`, `nep_article`, `publish`) VALUES
(1, 'Loan1 ', 'लाेन क', '<p>This is description for loan 1.</p>\r\n', 'याे लाेन क काे हाे                                  \r\n                         ', 1),
(2, 'loan 2', 'लाेन ख', '<p>this is description of loan 2</p>\r\n', 'याे लाेन ख काे हाे।                          \r\n                         ', 1),
(3, 'Overdraft Loan', 'अधिविकर्ष कर्जा ', '<p style=\"text-align:justify\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">This type of loan is disbursed for one year in maximum. At the maturity of one year from the loan disbursement, either the credit is settled or renewed for the next period based on the mutual understanding between the bank and the credit parties. Overdraft loan comprises business and personal overdraft.</span></span></p>\r\n', 'अधिविकर्ष कर्जा (Overdraft Loan)ः– यो शीर्षकमा स्वीकृत भएको कर्जा ग्राहकले एक वर्षभित्रमा चुक्ता गर्नुपर्नेछ । ग्राहकलाई कर्जा आवश्यक परेमा बैंकले प्रत्येक वर्ष नविकरण गरि दिनसक्नेछ ।                          \r\n                         ', 1);

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
  `nep_title` varchar(255) CHARACTER SET ucs2 COLLATE ucs2_unicode_ci DEFAULT NULL,
  `news_article` varchar(1000) NOT NULL,
  `nep_article` varchar(5000) CHARACTER SET ucs2 COLLATE ucs2_unicode_ci NOT NULL,
  `publish` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`newsId`, `news_title`, `nep_title`, `news_article`, `nep_article`, `publish`) VALUES
(1, 'News 1', NULL, '<p><span style=\"font-size:18px\"><span style=\"font-family:Georgia,serif\">This is article 1</span></span></p>\r\n', '', 1),
(3, 'News 2', NULL, '<p><span style=\"font-family:Courier New,Courier,monospace\">This is 2nd new</span></p>\r\n', '', 1),
(4, 'Hermione Granger', NULL, '<p><img alt=\"\" src=\"img/her.jpg\" style=\"height:216px; width:234px\" /></p>\r\n\r\n<h1>Hermione Granger</h1>\r\n\r\n<p><strong>Hermione Jean Granger</strong>&nbsp;is a fictional character in&nbsp;J. K. Rowling&#39;s&nbsp;<em>Harry Potter</em>&nbsp;series. She first appears in&nbsp;<em>Harry Potter and the Philosopher&#39;s Stone</em>, as a new student on her way to&nbsp;Hogwarts. After&nbsp;Harry&nbsp;and&nbsp;Ron&nbsp;save her from a mountain&nbsp;troll&nbsp;in the girls&#39; toilets, she becomes best friends with them and often uses her quick wit, deft recall, and encyclopaedic knowledge to help them. Rowling has stated that Hermione resembles herself at a younger age, with her insecurity and fear of failure.</p>\r\n', '', 1),
(5, 'Harry Potter', 'दनाना', '<h1><span style=\"font-size:11px\">Since the release of the first novel,&nbsp;<em>Harry Potter and the Philosopher&#39;s Stone</em>, on 26 June 1997, the books have found immense popularity, critical acclaim and commercial success worldwide. They have attracted a wide adult audience as well as younger readers and are often considered cornerstones of modern young adult literature.</span></h1>\r\n\r\n<p><span style=\"font-size:11px\">he series has also had its share of criticism, including concern about the increasingly dark tone as the series progressed, as well as the often gruesome and graphic violence it depicts.</span></p>\r\n', 'बकमानजवपिसु', 1),
(6, 'Current', 'चल्ती', '<p>abcd</p>\r\n', '                जनाजलनाना                  \r\n                         ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(100) NOT NULL,
  `title` varchar(200) NOT NULL,
  `nep_title` varchar(255) CHARACTER SET ucs2 COLLATE ucs2_unicode_ci DEFAULT NULL,
  `article` varchar(1000) NOT NULL,
  `nep_article` varchar(5000) CHARACTER SET ucs2 COLLATE ucs2_unicode_ci NOT NULL,
  `doc` varchar(255) DEFAULT NULL,
  `publish` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `title`, `nep_title`, `article`, `nep_article`, `doc`, `publish`) VALUES
(1, 'notice 1', 'नाेतीस क', '<p>description for notice 1</p>\r\n', '<p>नाेतीस क काे बारेमा</p>\r\n', 'Booking.com_-Confirmation.pdf', 1),
(2, 'notice 2', 'नाेतीस ख', '<p>description about notice 2</p>\r\n', '<p>नाेतीस ख काे बारेमा ।</p>\r\n', 'Daraz-Seller-Center.pdf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `privilage` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `name`, `username`, `password`, `privilage`) VALUES
(1, 'bentleytheleather', 'bentleytheleather', 'bentley@125', 'Editor'),
(5, 'sumitra', 'sumi', '12345', 'Administrator');

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
-- Indexes for table `loan`
--
ALTER TABLE `loan`
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
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

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
-- AUTO_INCREMENT for table `loan`
--
ALTER TABLE `loan`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `member_info`
--
ALTER TABLE `member_info`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `newsId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
