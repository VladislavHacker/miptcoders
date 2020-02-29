-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 29, 2020 at 11:56 PM
-- Server version: 5.7.29-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `miptcoders`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `name` varchar(400) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `name`) VALUES
(1, 'Кафедра высшей математики'),
(2, 'Кафедра общей физики'),
(3, 'Кафедра прикладной механики'),
(4, 'Кафедра дискретной математики');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` int(11) NOT NULL,
  `author` int(11) NOT NULL,
  `answerer` int(11) NOT NULL,
  `teacher` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `author`, `answerer`, `teacher`, `status`) VALUES
(1, 1, 0, 1, 0),
(2, 1, 0, 1, 0),
(3, 1, 0, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks_meessages`
--

CREATE TABLE `feedbacks_meessages` (
  `id` int(11) NOT NULL,
  `feedback` int(11) NOT NULL,
  `sender` int(11) NOT NULL,
  `message` int(11) NOT NULL,
  `sendmoment` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `pools`
--

CREATE TABLE `pools` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_bin NOT NULL,
  `start_time` date NOT NULL,
  `end_time` date NOT NULL,
  `tech_school` int(11) NOT NULL,
  `faculty` int(11) NOT NULL,
  `direction` int(11) NOT NULL,
  `course` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `pools`
--

INSERT INTO `pools` (`id`, `name`, `start_time`, `end_time`, `tech_school`, `faculty`, `direction`, `course`) VALUES
(1, 'Плановый опрос ФИВТ ПМИ', '2020-02-12', '2020-02-28', 1, 1, 1, 1),
(2, 'Плановый опрос ФИВТ ПМИ', '2020-02-12', '2020-02-28', 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pool_answers`
--

CREATE TABLE `pool_answers` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `pool` int(11) NOT NULL,
  `question` int(11) NOT NULL,
  `mark` int(11) NOT NULL,
  `comment` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `pool_answers`
--

INSERT INTO `pool_answers` (`id`, `user`, `pool`, `question`, `mark`, `comment`) VALUES
(2, 1, 1, 1, 1, 'esfesf'),
(3, 1, 1, 2, 3, 'sefsef'),
(4, 1, 1, 1, 3, 'ft'),
(5, 1, 1, 2, 3, 'sfsdf'),
(6, 1, 1, 1, 8, 'LOLOLOL'),
(7, 1, 1, 2, 7, 'GUGUGU');

-- --------------------------------------------------------

--
-- Table structure for table `pool_questions`
--

CREATE TABLE `pool_questions` (
  `id` int(11) NOT NULL,
  `pool` int(11) NOT NULL,
  `teacher` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `pool_questions`
--

INSERT INTO `pool_questions` (`id`, `pool`, `teacher`) VALUES
(1, 1, 1),
(2, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `name` varchar(80) COLLATE utf8_bin NOT NULL,
  `last_name` varchar(100) COLLATE utf8_bin NOT NULL,
  `patronymic` varchar(80) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `last_name`, `patronymic`) VALUES
(1, 'Беклемишев', 'Дмитрий', 'Владимирович'),
(2, 'Иванова', 'Светлана', 'Владимировна');

-- --------------------------------------------------------

--
-- Table structure for table `teachers_departments`
--

CREATE TABLE `teachers_departments` (
  `id` int(11) NOT NULL,
  `department` int(11) NOT NULL,
  `teacher` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `teachers_departments`
--

INSERT INTO `teachers_departments` (`id`, `department`, `teacher`) VALUES
(1, 1, 1),
(2, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(80) COLLATE utf8_bin NOT NULL,
  `last_name` varchar(100) COLLATE utf8_bin NOT NULL,
  `patronymic` varchar(80) COLLATE utf8_bin NOT NULL,
  `email` varchar(300) COLLATE utf8_bin NOT NULL,
  `password` varchar(500) COLLATE utf8_bin NOT NULL,
  `access` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `last_name`, `patronymic`, `email`, `password`, `access`) VALUES
(1, 'Vladislav', 'Troyan-Golovyan', 'Dmitrievich', 'vh@gmail.com', 'e957d4da2470c17a1349afe5545c75a3', 255);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedbacks_meessages`
--
ALTER TABLE `feedbacks_meessages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pools`
--
ALTER TABLE `pools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pool_answers`
--
ALTER TABLE `pool_answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pool_questions`
--
ALTER TABLE `pool_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers_departments`
--
ALTER TABLE `teachers_departments`
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
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `feedbacks_meessages`
--
ALTER TABLE `feedbacks_meessages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pools`
--
ALTER TABLE `pools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pool_answers`
--
ALTER TABLE `pool_answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `pool_questions`
--
ALTER TABLE `pool_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `teachers_departments`
--
ALTER TABLE `teachers_departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
