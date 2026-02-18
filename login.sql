-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2026 at 04:26 AM
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
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `subject` varchar(50) DEFAULT NULL,
  `question` text DEFAULT NULL,
  `option1` varchar(200) DEFAULT NULL,
  `option2` varchar(200) DEFAULT NULL,
  `option3` varchar(200) DEFAULT NULL,
  `option4` varchar(100) DEFAULT NULL,
  `correct_option` int(11) DEFAULT NULL,
  `sub_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `subject`, `question`, `option1`, `option2`, `option3`, `option4`, `correct_option`, `sub_id`) VALUES
(1, 'Html', 'What does HTML stand for?', 'Hyper Text Markup Language', 'Home Tool Markup Language', 'Hyperlinks and Text Markup Language', 'Hypertext transfer language', 1, 1),
(2, 'Html', 'Choose the correct HTML element for the largest heading :', '<h1>', '<heading>', '<h6>', '<a>', 1, 1),
(3, ' Html', 'Which of these Elements are all <table> elements?', '<table><tr><tt>', '<table><tr><td>', '<table><head><tfoot>', '<table><head><tfoot><td><tr>', 1, 1),
(4, 'Html', 'Choose the correct element to define emphasized text', '<i>', '<em>', '<b>', '<small>', 2, 1),
(5, 'Html', 'Which character is used to indicate an end tag?', '*', '>', '/', '*', 3, 1),
(6, 'Html', 'Which tag used to define a paragraph in html?', '<p>', '<para>', '<paragraph>', '<pg>', 1, 1),
(7, 'Html', 'Which HTML tag is used to insert an image?', '<image>', '<img>', '<pic>', '<src>', 2, 1),
(8, 'Html', 'Which attribute is used to provide an image path?', 'link', 'href', 'src', 'path', 3, 1),
(9, 'Html', 'Which HTML tag is used to create a line break?', '<break>', '<lb>', '<br>', '<newline>', 3, 1),
(10, 'Html', 'Which tag is used to create an ordered list?', '<ul>', '<ol>', '<list>', '<dl>', 2, 1),
(11, 'Html', 'Which attribute is used to open a link in a new tab?', 'new', 'open', 'target=\"_blank\"', 'href=\"_new\"', 3, 1),
(12, 'Html', 'Which tag is used to make text bold?', '<strong>', '<bold>', '<b>', 'A and B', 4, 1),
(13, 'Html', 'Which HTML tag is used to create a form?', '<input>', '<form>', '<field>', '<data>', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `email`, `id`) VALUES
('admin', '123', NULL, 1),
('prerna', '12345678', 'prernapatil20763@gmail.com', 2),
('shraddha', '12345678', 'shraddhapanskar312@gmail.com', 3),
('admin', '$2y$10$Y805hTJxiC1JRbXAI9VEP.YjaPjE0.Nux8MrJrd8b5w', 'matkarprerana@gmail.com', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
