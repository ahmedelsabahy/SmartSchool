-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: mysql5040.site4now.net
-- Generation Time: Dec 26, 2020 at 11:21 AM
-- Server version: 5.6.46-log
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_a6c09f_elsabah`
--
CREATE DATABASE IF NOT EXISTS `db_a6c09f_elsabah` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `db_a6c09f_elsabah`;

-- --------------------------------------------------------

--
-- Table structure for table `admissions`
--

CREATE TABLE `admissions` (
  `adid` int(11) NOT NULL,
  `addname` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admissions`
--

INSERT INTO `admissions` (`adid`, `addname`) VALUES
(1, 'courses'),
(2, 'register course');

-- --------------------------------------------------------

--
-- Table structure for table `advertising`
--

CREATE TABLE `advertising` (
  `addid` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `details` varchar(200) NOT NULL,
  `link` varchar(150) NOT NULL,
  `enddate` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `advertising`
--

INSERT INTO `advertising` (`addid`, `title`, `details`, `link`, `enddate`) VALUES
(100, 'smart schoo', 'smart schoo smart schoosmart schoosmart schoosmart schoosmart schoosmart schoosmart schoosmart schoo', 'https://www.must.edu.eg/', '2020-12-31'),
(10, 'smart learning', 'smart schooooooooooooooolllllllllllll smarterrrrrrjb fbhbdb h bfdb', 'https://www.facebook.com/madaelsapa7e', '2020-12-31'),
(20, 'SMART', 'tfdkfhhuhfuhuufhuhfuhfhfhughfughhfuhgdh', 'https://www.youtube.com/', '2020-12-30');

-- --------------------------------------------------------

--
-- Table structure for table `applysmart`
--

CREATE TABLE `applysmart` (
  `idnational` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `pschool` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `language` varchar(100) NOT NULL,
  `religion` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `city` int(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `hphone` int(11) NOT NULL,
  `fcademic` varchar(100) NOT NULL,
  `fjop` varchar(100) NOT NULL,
  `fcompany` varchar(100) NOT NULL,
  `fmail` varchar(100) NOT NULL,
  `fmobile` int(11) NOT NULL,
  `fnational` int(11) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `macdemic` varchar(100) NOT NULL,
  `mjop` varchar(100) NOT NULL,
  `mmail` varchar(100) NOT NULL,
  `mmobile` int(11) NOT NULL,
  `mnational` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `applysmart`
--

INSERT INTO `applysmart` (`idnational`, `name`, `pschool`, `level`, `gender`, `language`, `religion`, `date`, `city`, `address`, `hphone`, `fcademic`, `fjop`, `fcompany`, `fmail`, `fmobile`, `fnational`, `mname`, `macdemic`, `mjop`, `mmail`, `mmobile`, `mnational`) VALUES
(0, '5252', '548', 'lecel 1', 'male', 'english', 'muslim', '2020-12-15', 0, 'uggyi', 272, '', 'htr', 'hth', 'ygtrh', 6544, 35, 'yrthr', 'hrthrt', 'hrth', 'hrthr', 389368, 6);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `nameschool` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `Latitude` varchar(100) NOT NULL,
  `Longitude` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `nameschool`, `address`, `Latitude`, `Longitude`) VALUES
(1, 'smart school', 'banha', '30.47059379273574', '31.175780565122054');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `idcours` int(11) NOT NULL,
  `namecourse` varchar(100) NOT NULL,
  `capacity` int(11) NOT NULL,
  `prise` int(11) NOT NULL,
  `ratecours` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`idcours`, `namecourse`, `capacity`, `prise`, `ratecours`) VALUES
(1, 'business', 30, 3, 0),
(2, 'english', 20, 3, 0),
(3, 'programming', 10, 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `number d` int(11) NOT NULL,
  `name school` varchar(100) NOT NULL,
  `name department` varchar(50) NOT NULL,
  `id section d` varchar(50) NOT NULL,
  `manger department` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `student id` int(11) NOT NULL,
  `name p` varchar(50) NOT NULL,
  `work p` varchar(50) NOT NULL,
  `address p` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`student id`, `name p`, `work p`, `address p`) VALUES
(1, 'no', 'no', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `parents_phonep`
--

CREATE TABLE `parents_phonep` (
  `phone p` int(11) NOT NULL,
  `student id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `regist`
--

CREATE TABLE `regist` (
  `id student` int(11) NOT NULL,
  `link register` varchar(100) NOT NULL,
  `gpa student` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `registercourse`
--

CREATE TABLE `registercourse` (
  `ncours` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `acadmyyear` int(11) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registercourse`
--

INSERT INTO `registercourse` (`ncours`, `fullname`, `age`, `address`, `acadmyyear`, `mail`, `phone`) VALUES
('grammer', 'ffsd', 25, 'fseef', 2525, 'fsfs', 7697697),
('html', 'ahmed elsbahy', 25, 'banha', 2015, 'a@,com', 1007484400),
('a', 'a', 2, '2', 2, '2', 0),
('a', 'a', 2, 'a', 222, '22', 0),
('html', 'ش شس شس', 2, 'شسةو', 2000, 'abdallahsamir01098370762@gmail.com', 19239012),
('html', 'ش شس شس', 21, 'ثص1', 345345, 'a@a.com', 102388923);

-- --------------------------------------------------------

--
-- Table structure for table `registertion`
--

CREATE TABLE `registertion` (
  `link register` varchar(100) NOT NULL,
  `academy year` int(11) NOT NULL,
  `application` int(11) NOT NULL,
  `id register` int(11) NOT NULL,
  `name school` varchar(100) NOT NULL,
  `number d` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `smartschool`
--

CREATE TABLE `smartschool` (
  `name school` varchar(100) NOT NULL,
  `phone school` int(11) NOT NULL,
  `mail school` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `idstudent` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `idparent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`idstudent`, `Name`, `mail`, `phone`, `address`, `password`, `idparent`) VALUES
(1, 'yhtt', 'hfhf@tfhh.com', 123, 'hyhry', '698698', 1),
(2, 'ahmed', 'ahmed@a.c', 14400, 'zdv', '1598753', 1),
(3, 'ahmed moh', 'a@.a', 687676, 'banah', '123', 1),
(15, 'hrhyr', 'jtyjytj', 2786796, 'hythet', '6', 1),
(17, 'gfbg', 'hyhyhy', 986986, '8tgbtty', '8', 1),
(18, 'ref', 'frf', 22520, 'bgbhtrh', '69', 1),
(19, 'raaaaa', 'r', 155626, 'october', '000', 1),
(20, 'ee', 'eee', 576, 'vgdg', '7', 1),
(23, 'frget', 'hrt', 579638, 'htht', '578', 1),
(24, 'grgr', 'grgre', 87, 'esfvs', '6', 1),
(25, 'rg', 'tgg', 6446, 'hrhtr', '64864', 1),
(27, 'g56g', 'h56h', 2653, 'yjhty', '75', 1),
(29, 'ai', 'ali@.com', 2147483647, 'tanta', '9959', 1),
(30, 'gtrsryerd', 'ygb@.thuhutr', 454454, 'hghbbh', '5444545', 1),
(32, 'ahmed mohamed', 'a', 1007484400, 'banha', '0', 1),
(34, 'qetre', 'kikyi', 68796, 'trtet', '69868', 1),
(35, 'ahmed', 'eng.ahmed9466@gmail.com', 1120931870, 'arab,elraml', 'abc123', 1),
(37, 'moh', 'mo@m.com', 100, 'ioyit', '01090059584', 1),
(38, '<a  href=', '<h1>mo@m</h1>', 12345634, '<h3>gi</h3>', '<h4>963</h4>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `teach`
--

CREATE TABLE `teach` (
  `id student` int(11) NOT NULL,
  `ID subject` int(11) UNSIGNED NOT NULL,
  `degree` int(11) NOT NULL,
  `academy year` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `ID teacher` int(11) NOT NULL,
  `anme teacher` varchar(50) NOT NULL,
  `age` date NOT NULL,
  `material` varchar(50) NOT NULL,
  `number d` int(11) NOT NULL,
  `name school` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `teaching`
--

CREATE TABLE `teaching` (
  `id cours` int(11) NOT NULL,
  `id teacher` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE `training` (
  `idtrain` int(11) NOT NULL,
  `nametrain` varchar(200) NOT NULL,
  `prise` int(11) NOT NULL,
  `namecourse` varchar(100) NOT NULL,
  `descount` float NOT NULL,
  `ratevalue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`idtrain`, `nametrain`, `prise`, `namecourse`, `descount`, `ratevalue`) VALUES
(1, 'php', 1000, 'programming', 0.1, 0),
(2, 'grammer', 2000, 'english', 0, 4),
(3, 'hr', 1500, 'business', 0.5, 5),
(4, 'html', 2000, 'programming', 0, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admissions`
--
ALTER TABLE `admissions`
  ADD PRIMARY KEY (`adid`);

--
-- Indexes for table `advertising`
--
ALTER TABLE `advertising`
  ADD PRIMARY KEY (`addid`);

--
-- Indexes for table `applysmart`
--
ALTER TABLE `applysmart`
  ADD PRIMARY KEY (`idnational`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`namecourse`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`number d`,`name school`),
  ADD KEY `name school` (`name school`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`student id`);

--
-- Indexes for table `parents_phonep`
--
ALTER TABLE `parents_phonep`
  ADD PRIMARY KEY (`phone p`),
  ADD KEY `student id` (`student id`);

--
-- Indexes for table `regist`
--
ALTER TABLE `regist`
  ADD PRIMARY KEY (`id student`,`link register`),
  ADD KEY `id student` (`id student`),
  ADD KEY `link register` (`link register`);

--
-- Indexes for table `registertion`
--
ALTER TABLE `registertion`
  ADD PRIMARY KEY (`link register`),
  ADD KEY `name school` (`name school`),
  ADD KEY `number d` (`number d`);

--
-- Indexes for table `smartschool`
--
ALTER TABLE `smartschool`
  ADD PRIMARY KEY (`name school`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`idstudent`),
  ADD UNIQUE KEY `mail` (`mail`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD KEY `student id` (`idparent`);

--
-- Indexes for table `teach`
--
ALTER TABLE `teach`
  ADD KEY `id student` (`id student`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`ID teacher`),
  ADD KEY `number d` (`number d`),
  ADD KEY `name school` (`name school`);

--
-- Indexes for table `teaching`
--
ALTER TABLE `teaching`
  ADD KEY `id teacher` (`id teacher`);

--
-- Indexes for table `training`
--
ALTER TABLE `training`
  ADD PRIMARY KEY (`idtrain`),
  ADD KEY `namecourse` (`namecourse`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admissions`
--
ALTER TABLE `admissions`
  MODIFY `adid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `advertising`
--
ALTER TABLE `advertising`
  MODIFY `addid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=301;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `number d` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `student id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `regist`
--
ALTER TABLE `regist`
  MODIFY `id student` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `idstudent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `teach`
--
ALTER TABLE `teach`
  MODIFY `id student` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `ID teacher` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `training`
--
ALTER TABLE `training`
  MODIFY `idtrain` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `department`
--
ALTER TABLE `department`
  ADD CONSTRAINT `department_ibfk_1` FOREIGN KEY (`name school`) REFERENCES `smartschool` (`name school`) ON UPDATE CASCADE;

--
-- Constraints for table `parents_phonep`
--
ALTER TABLE `parents_phonep`
  ADD CONSTRAINT `parents_phonep_ibfk_1` FOREIGN KEY (`student id`) REFERENCES `parents` (`student id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `regist`
--
ALTER TABLE `regist`
  ADD CONSTRAINT `regist_ibfk_1` FOREIGN KEY (`id student`) REFERENCES `student` (`idstudent`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `regist_ibfk_2` FOREIGN KEY (`link register`) REFERENCES `registertion` (`link register`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `registertion`
--
ALTER TABLE `registertion`
  ADD CONSTRAINT `registertion_ibfk_1` FOREIGN KEY (`number d`) REFERENCES `department` (`number d`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`idparent`) REFERENCES `parents` (`student id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `teach`
--
ALTER TABLE `teach`
  ADD CONSTRAINT `teach_ibfk_2` FOREIGN KEY (`id student`) REFERENCES `student` (`idstudent`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `teachers`
--
ALTER TABLE `teachers`
  ADD CONSTRAINT `teachers_ibfk_1` FOREIGN KEY (`number d`) REFERENCES `department` (`number d`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `training`
--
ALTER TABLE `training`
  ADD CONSTRAINT `training_ibfk_1` FOREIGN KEY (`namecourse`) REFERENCES `courses` (`namecourse`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
