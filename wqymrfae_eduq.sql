-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 01, 2020 at 02:16 PM
-- Server version: 5.7.29-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wqymrfae_eduq`
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
(3, 'МОУ'),
(4, 'Алгоритмов и тех. прог.');

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
(3, 1, 0, 2, 0),
(4, 1, 0, 1, 0),
(5, 1, 0, 3, 0),
(6, 1, 0, 1, 0),
(7, 1, 0, 1, 0),
(8, 1, 0, 6, 0),
(9, 2, 0, 3, 0),
(10, 2, 0, 1, 0),
(11, 2, 0, 1, 0);

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
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `feedback` int(11) NOT NULL,
  `sender` int(11) NOT NULL,
  `datetime` datetime NOT NULL,
  `text` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `feedback`, `sender`, `datetime`, `text`) VALUES
(1, 6, 1, '2020-03-01 07:28:09', 'regerg'),
(2, 6, 1, '2020-03-01 07:45:14', '        ewfewf    '),
(3, 6, 1, '2020-03-01 07:45:16', '            wef'),
(4, 6, 1, '2020-03-01 07:45:17', '            wef'),
(5, 6, 1, '2020-03-01 07:45:18', '            wef'),
(6, 6, 1, '2020-03-01 07:45:20', '            wef'),
(7, 6, 1, '2020-03-01 07:45:21', '            wefw'),
(8, 6, 1, '2020-03-01 07:45:22', '            wef'),
(9, 5, 1, '2020-03-01 07:45:27', '            wefwe'),
(10, 5, 1, '2020-03-01 07:52:37', 'trh'),
(11, 5, 1, '2020-03-01 07:52:40', 'rth'),
(12, 4, 1, '2020-03-01 07:48:12', ''),
(13, 5, 1, '2020-03-01 07:48:16', ''),
(14, 7, 1, '2020-03-01 09:28:11', 'm'),
(15, 8, 1, '2020-03-01 09:28:23', 'k'),
(16, 9, 2, '2020-03-01 11:10:15', 'd'),
(17, 10, 2, '2020-03-01 11:10:33', 'g'),
(18, 11, 2, '2020-03-01 11:10:44', ' n');

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
(3, 'Плановый опрос', '2020-03-01', '2020-03-01', 1, 1, 1, 1),
(4, 'Плановый опрос', '2020-03-01', '2020-03-01', 1, 1, 1, 1),
(5, 'Плановый опрос', '2020-03-01', '2020-03-01', 1, 1, 1, 1),
(6, 'Плановый опрос', '2020-03-01', '2020-03-01', 1, 1, 1, 1),
(7, 'Плановый опрос', '2020-03-01', '2020-03-01', 1, 1, 1, 1),
(8, 'Плановый опрос', '2020-03-01', '2020-03-01', 1, 1, 1, 1),
(9, 'Плановый опрос', '2020-03-01', '2020-03-01', 1, 1, 1, 1),
(10, 'Плановый опрос', '2020-03-01', '2020-03-01', 1, 1, 1, 1),
(11, 'Плановый опрос', '2020-03-01', '2020-03-01', 1, 1, 1, 1);

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
(7, 1, 1, 2, 7, 'GUGUGU'),
(8, 1, 5, 12, 1, 'неуд2'),
(9, 1, 5, 13, 1, 'Ужос'),
(10, 1, 7, 15, 3, 'eww'),
(11, 1, 8, 16, 9, 'wdawd'),
(12, 1, 4, 7, 2, 'wadawdwa'),
(13, 1, 4, 8, 1, 'wad'),
(14, 1, 4, 9, 1, 'wadwd'),
(15, 1, 4, 10, 1, 'wd'),
(16, 1, 4, 11, 1, 'wd'),
(17, 1, 7, 15, 1, 'awdawd'),
(18, 1, 9, 17, 7, 'sc'),
(19, 1, 9, 18, 9, 'sc'),
(20, 1, 9, 19, 8, 'sc'),
(21, 1, 9, 20, 8, 'x'),
(22, 1, 3, 3, 1, 'sdcs'),
(23, 1, 3, 4, 7, 'dvdv'),
(24, 1, 3, 5, 6, 'sdv'),
(25, 1, 3, 6, 5, 'sdv'),
(26, 1, 10, 21, 6, 'wefewf'),
(27, 1, 9, 17, 3, 'x'),
(28, 1, 9, 18, 1, 'x'),
(29, 1, 9, 19, 6, 'x'),
(30, 1, 9, 20, 5, 'x'),
(31, 1, 9, 17, 1, 'e'),
(32, 1, 9, 18, 1, 'r'),
(33, 1, 9, 19, 1, 'r'),
(34, 1, 9, 20, 1, 'r'),
(35, 3, 9, 17, 10, 'Люблю тавтологию.'),
(36, 3, 9, 18, 10, 'У человека прога головного мозга. Надо спасать.'),
(37, 3, 9, 19, 5, 'Верните Плиса плиз'),
(38, 3, 9, 20, 10, 'Кто не хочет думать и понимать - идите в Высшую школу развала экономики'),
(39, 4, 8, 16, 9, 'Влад смени дизайн '),
(40, 4, 11, 22, 5, 'В чом смысл '),
(41, 4, 11, 22, 1, 'Зачем я прохожу этот опрос снова'),
(42, 4, 11, 22, 1, 'Опрос не пропадает'),
(43, 4, 11, 22, 1, 'Много одних и тех же ответов'),
(44, 4, 11, 22, 1, 'На один из 10 вопросов, ибо на остальные ответить не могу'),
(45, 4, 11, 22, 1, 'Да кто такая эта ваша иванова'),
(46, 4, 1, 1, 1, 'В чем смысол'),
(47, 4, 1, 2, 1, 'Зочем десять подвопросов'),
(48, 4, 8, 16, 1, 'Вы как гугл формы пока'),
(49, 4, 8, 16, 1, 'Сделайте выбор вариантов ответов '),
(50, 4, 11, 22, 9, 'Кукусики '),
(51, 2, 11, 22, 5, 'j');

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
(2, 1, 2),
(3, 3, 1),
(4, 3, 3),
(5, 3, 5),
(6, 3, 2),
(7, 4, 1),
(8, 4, 2),
(9, 4, 3),
(10, 4, 4),
(11, 4, 5),
(12, 5, 1),
(13, 5, 2),
(14, 6, 1),
(15, 7, 1),
(16, 8, 1),
(17, 9, 6),
(18, 9, 7),
(19, 9, 4),
(20, 9, 5),
(21, 10, 7),
(22, 11, 2);

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
(2, 'Иванова', 'Светлана', 'Владимировна'),
(3, 'Валерий', 'Плис', 'Иванович'),
(4, 'Владимир', 'Усков', 'Владимирович'),
(5, 'Владимир', 'Овчинкин', 'Александрович'),
(6, 'Иванов', 'Иван', 'Иваныч'),
(7, 'Владислав', 'Троян-Головян', 'Дмитриевич');

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
(2, 1, 2),
(3, 2, 3),
(4, 2, 4),
(5, 2, 5),
(6, 3, 6),
(7, 4, 7);

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
(1, 'Vladislav', 'Troyan-Golovyan', 'Dmitrievich', 'vh@gmail.com', 'e957d4da2470c17a1349afe5545c75a3', 255),
(2, '', '', '', 'li.d@phystech.edu', 'f3a67d9f9c4d7b4acdf976ed7470aa3f', 3),
(3, '', '', '', 'Steblovskii.DK@phystech.edu', '296d72d965d57bce6440cdd7536f634d', 3),
(4, '', '', '', 'dzhangirli.ee@phystech.edu', '459760e729c93e67230b70a9f62903ab', 3);

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
-- Indexes for table `messages`
--
ALTER TABLE `messages`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `feedbacks_meessages`
--
ALTER TABLE `feedbacks_meessages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pools`
--
ALTER TABLE `pools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pool_answers`
--
ALTER TABLE `pool_answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `pool_questions`
--
ALTER TABLE `pool_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `teachers_departments`
--
ALTER TABLE `teachers_departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
