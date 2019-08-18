CREATE DATABASE IF NOT EXISTS `round1` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `round1`;

-- --------------------------------------------------------

--
-- Table structure for table `contest`
--

CREATE TABLE `contest` (
  `teamname` varchar(255) NOT NULL,
  `pid` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `code` varchar(100) NOT NULL DEFAULT '""',
  `time_min` bigint(20) NOT NULL DEFAULT '0',
  `time_sec` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contest`
--

INSERT INTO `contest` (`teamname`, `pid`, `score`, `code`, `time_min`, `time_sec`) VALUES
('test', 14, 100, 'uploads/test/14/test_08-01-46.cpp', -17250, -13),
('test', 15, 60, 'uploads/test/15/test_09-01-08.cpp', -17231, -52),
('test', 11, 30, 'uploads/test/11/test_07-01-38.cpp', -16616, -22),
('sikander', 1, 30, 'uploads/sikander/1/sikander_07-01-23.cpp', 1, 10),
('sikander', 2, 30, 'uploads/sikander/2/sikander_07-01-04.cpp', 2, 52),
('sikander', 5, 30, 'uploads/sikander/5/sikander_07-01-36.cpp', 2, 23),
('sikander', 6, 30, 'uploads/sikander/6/sikander_07-01-14.cpp', 6, 2),
('test', 16, 100, 'uploads/test/16/test_06-01-06.cpp', -11626, -52),
('test', 17, 60, 'uploads/test/17/test_07-01-01.cpp', -11533, -59),
('test', 18, 100, 'uploads/test/18/test_08-01-42.cpp', -11507, -4),
('admin', 15, 0, 'uploads/admin/15/admin_05-01-10.cpp', -512627, -59),
('admin', 2, 0, 'uploads/admin/2/admin_02-02-20.cpp', -501278, -49),
('flying_panda', 1, 30, 'uploads/flying_panda/1/flying_panda_08-03-56.cpp', 2, 36),
('flying_panda', 2, 30, 'uploads/flying_panda/2/flying_panda_08-03-07.cpp', 3, 46),
('flying_panda', 5, 30, 'uploads/flying_panda/5/flying_panda_08-03-19.cpp', 3, 59),
('flying_panda', 3, 60, 'uploads/flying_panda/3/flying_panda_09-03-04.cpp', 29, 45),
('flying_panda', 14, 0, 'uploads/flying_panda/14/flying_panda_09-03-19.cpp', 30, 0),
('admin', 1, 0, 'uploads/admin/1/admin_08-04-11.cpp', -403815, -58),
('abcd', 1, 30, 'uploads/abcd/1/abcd_08-04-43.cpp', 2, 56);

--
-- Triggers `contest`
--
DELIMITER $$
CREATE TRIGGER `before_insert` BEFORE INSERT ON `contest` FOR EACH ROW BEGIN
declare diff bigint;
declare a timestamp;
declare b timestamp;
select end_time into a from user where teamname=new.teamname;
set b=now();
set diff=TIMESTAMPDIFF(SECOND,a,b);
set new.time_min=diff/60;
set new.time_sec=diff%60;
end
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `before_update` BEFORE UPDATE ON `contest` FOR EACH ROW BEGIN
declare diff bigint;
declare a timestamp;
declare b timestamp;
select end_time into a from user where teamname=new.teamname;
set b=now();
set diff=TIMESTAMPDIFF(SECOND,a,b);
set new.time_min=diff/60;
set new.time_sec=diff%60;
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `leaderboard`
--

CREATE TABLE `leaderboard` (
  `teamname` varchar(40) NOT NULL,
  `score` int(20) NOT NULL DEFAULT '0',
  `time_min` bigint(20) DEFAULT '0',
  `time_sec` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leaderboard`
--

INSERT INTO `leaderboard` (`teamname`, `score`, `time_min`, `time_sec`) VALUES
('abcd', 30, 2, 56),
('flying_panda', 150, 30, 0),
('sikander', 120, 6, 2),
('test', 450, -11507, -4);

--
-- Triggers `leaderboard`
--
DELIMITER $$
CREATE TRIGGER `time_update` BEFORE UPDATE ON `leaderboard` FOR EACH ROW BEGIN
declare diff bigint;
declare a timestamp;
declare b timestamp;
select end_time into a from user where teamname=new.teamname;
set b=now();
set diff=TIMESTAMPDIFF(SECOND,a,b);
set new.time_min=diff/60;
set new.time_sec=diff%60;
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `problems`
--

CREATE TABLE `problems` (
  `pid` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `score` int(11) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `test_cases` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `problems`
--

INSERT INTO `problems` (`pid`, `title`, `score`, `description`, `test_cases`) VALUES
(1, 'Factorial', 30, 'easy', 3),
(2, 'Simple Array Sum', 30, 'easy', 3),
(3, 'Mini-Max Sum', 60, 'medium', 6),
(4, 'Birthday Cake Candles', 60, 'medium', 6),
(5, 'A Very Big Sum', 30, 'easy', 3),
(6, 'Diagonal Difference', 30, 'easy', 3),
(7, 'Between Two Sets', 60, 'medium', 6),
(8, 'Staircase', 30, 'easy', 3),
(10, 'Modulus of two numbers', 60, 'medium', 6),
(11, 'Triangle', 30, 'easy', 3),
(12, 'Counting numbers ', 60, 'medium', 6),
(13, 'Last K digits', 100, 'hard', 10),
(14, 'Pernicious number', 100, 'hard', 10),
(15, 'K-th digit', 60, 'medium', 6),
(16, 'Divisible By 6', 100, 'hard', 10),
(17, 'Array Remainder', 60, 'medium', 6),
(18, 'Carry in Sum', 100, 'hard', 10);

-- --------------------------------------------------------

--
-- Table structure for table `submission`
--

CREATE TABLE `submission` (
  `teamname` varchar(25) NOT NULL,
  `pid` int(11) DEFAULT NULL,
  `code` varchar(2555) DEFAULT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `submission`
--

INSERT INTO `submission` (`teamname`, `pid`, `code`, `time_stamp`) VALUES
('test', 14, 'uploads/test/14/test_08-01-46.cpp', '2018-01-18 19:41:46'),
('test', 15, 'uploads/test/15/test_09-01-08.cpp', '2018-01-18 20:01:08'),
('test', 11, 'uploads/test/11/test_07-01-43.cpp', '2018-01-19 06:05:43'),
('test', 11, 'uploads/test/11/test_07-01-23.cpp', '2018-01-19 06:07:23'),
('test', 11, 'uploads/test/11/test_07-01-55.cpp', '2018-01-19 06:07:55'),
('test', 11, 'uploads/test/11/test_07-01-47.cpp', '2018-01-19 06:09:47'),
('test', 11, 'uploads/test/11/test_07-01-53.cpp', '2018-01-19 06:14:53'),
('test', 11, 'uploads/test/11/test_07-01-38.cpp', '2018-01-19 06:15:38'),
('test', 11, 'uploads/test/11/test_07-01-36.cpp', '2018-01-19 06:17:36'),
('sikander', 1, 'uploads/sikander/1/sikander_07-01-06.cpp', '2018-01-19 06:19:06'),
('sikander', 1, 'uploads/sikander/1/sikander_07-01-16.cpp', '2018-01-19 06:19:16'),
('sikander', 1, 'uploads/sikander/1/sikander_07-01-23.cpp', '2018-01-19 06:19:23'),
('sikander', 2, 'uploads/sikander/2/sikander_07-01-50.cpp', '2018-01-19 06:19:50'),
('sikander', 2, 'uploads/sikander/2/sikander_07-01-58.cpp', '2018-01-19 06:19:58'),
('sikander', 2, 'uploads/sikander/2/sikander_07-01-04.cpp', '2018-01-19 06:20:04'),
('sikander', 5, 'uploads/sikander/5/sikander_07-01-27.cpp', '2018-01-19 06:20:27'),
('sikander', 5, 'uploads/sikander/5/sikander_07-01-36.cpp', '2018-01-19 06:20:36'),
('sikander', 6, 'uploads/sikander/6/sikander_07-01-05.cpp', '2018-01-19 06:24:05'),
('sikander', 6, 'uploads/sikander/6/sikander_07-01-14.cpp', '2018-01-19 06:24:14'),
('test', 6, 'uploads/test/6/test_06-01-01.cpp', '2018-01-22 17:21:01'),
('test', 16, 'uploads/test/16/test_06-01-06.cpp', '2018-01-22 17:26:06'),
('test', 16, 'uploads/test/16/test_06-01-21.cpp', '2018-01-22 17:27:21'),
('test', 16, 'uploads/test/16/test_06-01-14.cpp', '2018-01-22 17:30:14'),
('test', 16, 'uploads/test/16/test_06-01-05.cpp', '2018-01-22 17:32:05'),
('test', 16, 'uploads/test/16/test_06-01-22.cpp', '2018-01-22 17:33:22'),
('test', 16, 'uploads/test/16/test_06-01-54.cpp', '2018-01-22 17:33:54'),
('test', 16, 'uploads/test/16/test_06-01-40.cpp', '2018-01-22 17:34:40'),
('test', 16, 'uploads/test/16/test_06-01-47.cpp', '2018-01-22 17:34:47'),
('test', 16, 'uploads/test/16/test_06-01-02.cpp', '2018-01-22 17:35:02'),
('test', 16, 'uploads/test/16/test_06-01-10.cpp', '2018-01-22 17:35:10'),
('test', 16, 'uploads/test/16/test_06-01-59.cpp', '2018-01-22 17:35:59'),
('test', 16, 'uploads/test/16/test_06-01-44.cpp', '2018-01-22 17:37:44'),
('test', 16, 'uploads/test/16/test_06-01-00.cpp', '2018-01-22 17:38:00'),
('test', 16, 'uploads/test/16/test_06-01-54.cpp', '2018-01-22 17:44:54'),
('test', 16, 'uploads/test/16/test_06-01-30.cpp', '2018-01-22 17:50:30'),
('test', 16, 'uploads/test/16/test_06-01-16.cpp', '2018-01-22 17:51:16'),
('test', 16, 'uploads/test/16/test_06-01-41.cpp', '2018-01-22 17:51:41'),
('test', 16, 'uploads/test/16/test_06-01-11.cpp', '2018-01-22 17:53:11'),
('test', 16, 'uploads/test/16/test_06-01-31.cpp', '2018-01-22 17:53:31'),
('test', 16, 'uploads/test/16/test_06-01-24.cpp', '2018-01-22 17:54:24'),
('test', 16, 'uploads/test/16/test_06-01-31.cpp', '2018-01-22 17:54:31'),
('test', 16, 'uploads/test/16/test_06-01-58.cpp', '2018-01-22 17:54:58'),
('test', 16, 'uploads/test/16/test_06-01-37.cpp', '2018-01-22 17:55:37'),
('test', 16, 'uploads/test/16/test_06-01-38.cpp', '2018-01-22 17:59:38'),
('test', 16, 'uploads/test/16/test_07-01-44.cpp', '2018-01-22 18:00:44'),
('test', 16, 'uploads/test/16/test_07-01-31.cpp', '2018-01-22 18:01:31'),
('test', 16, 'uploads/test/16/test_07-01-59.cpp', '2018-01-22 18:01:59'),
('test', 16, 'uploads/test/16/test_07-01-07.cpp', '2018-01-22 18:02:07'),
('test', 16, 'uploads/test/16/test_07-01-48.cpp', '2018-01-22 18:02:48'),
('test', 16, 'uploads/test/16/test_07-01-22.cpp', '2018-01-22 18:05:22'),
('test', 16, 'uploads/test/16/test_07-01-43.cpp', '2018-01-22 18:05:43'),
('test', 16, 'uploads/test/16/test_07-01-58.cpp', '2018-01-22 18:08:58'),
('test', 16, 'uploads/test/16/test_07-01-13.cpp', '2018-01-22 18:11:13'),
('test', 16, 'uploads/test/16/test_07-01-45.cpp', '2018-01-22 18:11:45'),
('test', 16, 'uploads/test/16/test_07-01-57.cpp', '2018-01-22 18:15:57'),
('test', 17, 'uploads/test/17/test_07-01-07.cpp', '2018-01-22 18:57:07'),
('test', 17, 'uploads/test/17/test_07-01-03.cpp', '2018-01-22 18:58:03'),
('test', 17, 'uploads/test/17/test_07-01-01.cpp', '2018-01-22 18:59:01'),
('test', 17, 'uploads/test/17/test_08-01-00.cpp', '2018-01-22 19:00:00'),
('test', 17, 'uploads/test/17/test_08-01-36.cpp', '2018-01-22 19:00:36'),
('test', 17, 'uploads/test/17/test_08-01-08.cpp', '2018-01-22 19:01:08'),
('test', 17, 'uploads/test/17/test_08-01-21.cpp', '2018-01-22 19:01:21'),
('test', 17, 'uploads/test/17/test_08-01-39.cpp', '2018-01-22 19:01:39'),
('test', 17, 'uploads/test/17/test_08-01-51.cpp', '2018-01-22 19:01:51'),
('test', 17, 'uploads/test/17/test_08-01-37.cpp', '2018-01-22 19:02:37'),
('test', 17, 'uploads/test/17/test_08-01-45.cpp', '2018-01-22 19:02:45'),
('test', 17, 'uploads/test/17/test_08-01-49.cpp', '2018-01-22 19:06:49'),
('test', 17, 'uploads/test/17/test_08-01-04.cpp', '2018-01-22 19:07:04'),
('test', 18, 'uploads/test/18/test_08-01-39.cpp', '2018-01-22 19:24:39'),
('test', 18, 'uploads/test/18/test_08-01-42.cpp', '2018-01-22 19:24:42'),
('test', 18, 'uploads/test/18/test_08-01-07.cpp', '2018-01-22 19:30:07'),
('test', 18, 'uploads/test/18/test_08-01-24.cpp', '2018-01-22 19:34:24'),
('admin', 15, 'uploads/admin/15/admin_05-01-10.cpp', '2018-01-25 16:31:10'),
('admin', 2, 'uploads/admin/2/admin_02-02-20.cpp', '2018-02-02 13:40:20'),
('flying_panda', 1, 'uploads/flying_panda/1/flying_panda_08-03-27.cpp', '2018-03-17 07:50:27'),
('flying_panda', 1, 'uploads/flying_panda/1/flying_panda_08-03-56.cpp', '2018-03-17 07:50:56'),
('flying_panda', 2, 'uploads/flying_panda/2/flying_panda_08-03-54.cpp', '2018-03-17 07:51:54'),
('flying_panda', 2, 'uploads/flying_panda/2/flying_panda_08-03-07.cpp', '2018-03-17 07:52:07'),
('flying_panda', 5, 'uploads/flying_panda/5/flying_panda_08-03-19.cpp', '2018-03-17 07:52:19'),
('flying_panda', 3, 'uploads/flying_panda/3/flying_panda_08-03-46.cpp', '2018-03-17 07:59:46'),
('flying_panda', 3, 'uploads/flying_panda/3/flying_panda_09-03-04.cpp', '2018-03-17 08:00:04'),
('flying_panda', 14, 'uploads/flying_panda/14/flying_panda_09-03-19.cpp', '2018-03-17 08:01:19'),
('admin', 1, 'uploads/admin/1/admin_08-04-11.cpp', '2018-04-11 06:03:11'),
('abcd', 1, 'uploads/abcd/1/abcd_08-04-55.cpp', '2018-04-11 06:03:55'),
('abcd', 1, 'uploads/abcd/1/abcd_08-04-29.cpp', '2018-04-11 06:05:29'),
('abcd', 1, 'uploads/abcd/1/abcd_08-04-43.cpp', '2018-04-11 06:05:43');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `teamname` varchar(25) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `user1` varchar(25) DEFAULT NULL,
  `user2` varchar(25) DEFAULT 'X0X0X0',
  `email1` varchar(25) DEFAULT NULL,
  `email2` varchar(25) DEFAULT 'X0X0X0',
  `type` varchar(255) DEFAULT 'user',
  `end_time` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`teamname`, `password`, `user1`, `user2`, `email1`, `email2`, `type`, `end_time`) VALUES
('abcd', 'e2fc714c4727ee9395f324cd2e7f331f', 'abcd', 'abcd', 'abcd@abcd', 'abcd@abd', 'user', '2018-04-11 06:03:50'),
('admin', '81dc9bdb52d04dc20036dbd8313ed055', NULL, 'X0X0X0', NULL, 'X0X0X0', 'admin', '2019-01-16 16:18:09'),
('flying_panda', 'ce4dd986b74f00e363a12d2d15fa0f0b', 'Sikander Singh', '', 'sikander441@gmail.com', '', 'user', '2018-03-17 07:31:21'),
('sikander', '81dc9bdb52d04dc20036dbd8313ed055', 'Sikander Singh', '', 'sikander441@gmail.com', '', 'user', '2018-01-19 06:18:13'),
('test', '098f6bcd4621d373cade4e832627b4f6', 'Sikander Singh', '', 'sikander441@gmail.com', '', 'admin', '2018-01-30 19:12:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `leaderboard`
--
ALTER TABLE `leaderboard`
  ADD PRIMARY KEY (`teamname`);

--
-- Indexes for table `problems`
--
ALTER TABLE `problems`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`teamname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `problems`
--
ALTER TABLE `problems`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;