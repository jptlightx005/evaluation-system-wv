-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2017 at 05:14 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ofesdbs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `firstname` varchar(16) NOT NULL,
  `lastname` varchar(16) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `firstname`, `lastname`, `username`, `password`) VALUES
(1, 'Eric', 'Villones', 'admin', '1234'),
(2, 'Villones', 'Eric', 'admin2', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` int(11) NOT NULL,
  `header` varchar(255) NOT NULL,
  `body` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `header`, `body`) VALUES
(1, 'Online Faculty Evaluation System', '');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `course_dept` text NOT NULL,
  `code` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_dept`, `code`, `title`) VALUES
(1, 'ICT', 'BSIS', 'Bachelor of Science in Information Systems'),
(2, 'ICT', 'BSInfoTech', 'Bachelor of Science in Information Technology'),
(3, 'IT', 'BSIT', 'Bachelor of Science in Industrial Technology'),
(4, 'SBM', 'BSHRST', 'Bachelor of Science in Hotel and Restaurant Services Technology');

-- --------------------------------------------------------

--
-- Table structure for table `evaluation_question`
--

CREATE TABLE `evaluation_question` (
  `q_id` int(11) NOT NULL,
  `e_id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evaluation_question`
--

INSERT INTO `evaluation_question` (`q_id`, `e_id`, `question`) VALUES
(1, 1, 'Demonstrate sensitively to students'' ability to attend and absorb content information.'),
(2, 2, 'Integrates sensitively his/her learning objectives with those of the students in a collaborative process.'),
(3, 3, 'Make self available to student beyond official time.'),
(4, 4, 'Regularly comes to class on time well-groomed and well prepared to complete assigned responsibilities.'),
(5, 5, 'Keeps accurate records of students'' performance and prompt submission of the same.'),
(6, 1, 'Demonstrates mastery of the subject matter(explain the subject matter without relying solely on the prescribed textbook)'),
(7, 2, 'Draws and share information on the state on the art of theory and practice in his/her discipline.'),
(8, 3, 'Integrates subject to practical circumstances and learning intents/purposes of students.'),
(9, 4, 'Explains the relevance of presence topic to the previous lessons and relates the subject matter to relevant current issues and/or daily life activites.'),
(10, 5, 'Demonstrate up-to-date knowledge and/or awareness on current trends and issues of the subject.'),
(11, 1, 'Creates teaching strategies that allow students to practice using concepts they need to understand(interactive discussion).'),
(12, 2, 'Enhances student self-esteem and/or gives due recognition to students'' performance/potentials.'),
(13, 3, 'Allows students to create their own course with objectives and realistically defined student-professor rules and make them accountable for their performance.\r\n'),
(14, 4, 'Allows students to think independently and make their own decisions and holding them accountable for their performance based largely on their success in executing decisions.'),
(15, 5, 'Encourages students to learn beyond what is required and help/guide the students how to apply the concepts learned.'),
(16, 1, 'Creates opportunities for intensive and/or exclusive contribution of students in the class activities. (e.g. breaks class into dyads, triads or buzz/task groups)'),
(17, 2, 'Assumes roles as facilitator, resource person, coach, inquisitor, integrator, referee in drawing students to contribute to knowledge and understanding of the concepts at hands.'),
(18, 3, 'Designs and implements learning conditions and experience that promotes healthy exchange and/or confrontations.'),
(19, 4, 'Structures/re-structures learning and teaching-learning context to enhanced attainment of collective learning objectives.'),
(20, 5, 'Use of instructional materials(audio/video materials, fieldtrips, film showing, computer aided instruction and etc) to reinforce learning processes.');

-- --------------------------------------------------------

--
-- Table structure for table `evaluation_rating`
--

CREATE TABLE `evaluation_rating` (
  `rating_id` int(100) NOT NULL,
  `rating_name` text NOT NULL,
  `rating_value` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evaluation_rating`
--

INSERT INTO `evaluation_rating` (`rating_id`, `rating_name`, `rating_value`) VALUES
(1, 'Outstanding', 5),
(2, 'Very Satisfactory', 4),
(3, 'Satisfactory', 3),
(4, 'Fair', 2),
(5, 'Poor', 1);

-- --------------------------------------------------------

--
-- Table structure for table `evaluation_result`
--

CREATE TABLE `evaluation_result` (
  `evaluation_id` int(11) NOT NULL,
  `student_id` varchar(11) NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `faculty_id` varchar(11) NOT NULL,
  `faculty_name` varchar(100) NOT NULL,
  `commitment1` int(1) NOT NULL,
  `commitment2` int(1) NOT NULL,
  `commitment3` int(1) NOT NULL,
  `commitment4` int(1) NOT NULL,
  `commitment5` int(1) NOT NULL,
  `knowledge1` int(1) NOT NULL,
  `knowledge2` int(1) NOT NULL,
  `knowledge3` int(1) NOT NULL,
  `knowledge4` int(1) NOT NULL,
  `knowledge5` int(1) NOT NULL,
  `teaching1` int(1) NOT NULL,
  `teaching2` int(1) NOT NULL,
  `teaching3` int(1) NOT NULL,
  `teaching4` int(1) NOT NULL,
  `teaching5` int(1) NOT NULL,
  `management1` int(1) NOT NULL,
  `management2` int(1) NOT NULL,
  `management3` int(1) NOT NULL,
  `management4` int(1) NOT NULL,
  `management5` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evaluation_result`
--

INSERT INTO `evaluation_result` (`evaluation_id`, `student_id`, `student_name`, `faculty_id`, `faculty_name`, `commitment1`, `commitment2`, `commitment3`, `commitment4`, `commitment5`, `knowledge1`, `knowledge2`, `knowledge3`, `knowledge4`, `knowledge5`, `teaching1`, `teaching2`, `teaching3`, `teaching4`, `teaching5`, `management1`, `management2`, `management3`, `management4`, `management5`) VALUES
(15, '14-1176', 'Eric Amena Villones', '14-1236', 'Adam  P. Pagurayan', 5, 5, 5, 5, 5, 4, 3, 1, 5, 4, 5, 1, 5, 1, 5, 3, 5, 3, 5, 3),
(16, '14-0411', 'Caroleen Castaneda Pojol', '14-1234', 'Winston C. Corneja', 5, 5, 5, 5, 5, 5, 5, 4, 3, 2, 1, 5, 5, 4, 3, 5, 4, 3, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id_teacher` int(50) NOT NULL,
  `teacherid` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `academic_rank` varchar(100) NOT NULL,
  `program` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id_teacher`, `teacherid`, `password`, `fname`, `mname`, `lname`, `academic_rank`, `program`, `subject`) VALUES
(8, '14-1234', '123', 'Winston', 'C.', 'Corneja', 'Regular', 'BSInfoTech', 'Fundamentals of Software Engineering'),
(7, '14-1235', '1234', 'Nestor', ' ', 'Ferrariz', 'Regular', 'BSInfoTech', 'Philosophy of Man'),
(9, '14-1236', ' ', 'Adam', ' P.', 'Pagurayan', 'Regular', 'BSInfoTech', 'Thesis Writing in IT/IS'),
(10, '14-1237', ' ', 'Marilou', 'L.', 'Lee', 'Regular', 'BSIT', 'Literatures of the World');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `studentsID` varchar(8) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` text NOT NULL,
  `middlename` text NOT NULL,
  `lastname` text NOT NULL,
  `subject` text NOT NULL,
  `course` varchar(16) NOT NULL,
  `school` text NOT NULL,
  `year` text NOT NULL,
  `section` text NOT NULL,
  `status` text NOT NULL,
  `subjects_evaluate` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `studentsID`, `password`, `firstname`, `middlename`, `lastname`, `subject`, `course`, `school`, `year`, `section`, `status`, `subjects_evaluate`) VALUES
(1, '14-1176', '1234', 'Eric', 'Amena', 'Villones', '', 'BSInfoTech', '', 'Third Year', 'B', 'Regular', '');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(11) NOT NULL,
  `code` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `year` varchar(100) NOT NULL,
  `term` varchar(100) NOT NULL,
  `teacherid` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `code`, `title`, `description`, `year`, `term`, `teacherid`) VALUES
(1, 'IT213', 'Fundamentals of Software Engineering', 'Discussion on Thesis', 'Third Year', '2nd', '14-1234'),
(2, 'IT215', 'Thesis Writing in IT/IS', 'Learning how to properly write the Thesis Documents', 'Third Year', '2nd', '14-1236'),
(3, 'IT225(Elective 3)', 'Programming using GUI/RAD Tools', 'Write and Design Programs Using GUI/RAD Tools', 'Third Year', '2nd', '14-1234'),
(4, 'IT214', 'Computer Security Standardization', 'All about Computer Security', 'Third Year', '2nd', '14-1237'),
(5, 'IT226(Elective 4)', 'Introduction to Distributed Systems', 'Advance lessons on Client/Server Programming', 'Third Year', '2nd', '14-1235'),
(6, 'HUM102', 'Philosophy of Man', 'Philosophy ', 'Third Year', '2nd', '14-1235'),
(7, 'LIT102', 'Literatures of the World', 'Literatures all around the World', 'Third Year', '2nd', '14-1237');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `evaluation_question`
--
ALTER TABLE `evaluation_question`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `evaluation_rating`
--
ALTER TABLE `evaluation_rating`
  ADD PRIMARY KEY (`rating_id`);

--
-- Indexes for table `evaluation_result`
--
ALTER TABLE `evaluation_result`
  ADD PRIMARY KEY (`evaluation_id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id_teacher`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `evaluation_question`
--
ALTER TABLE `evaluation_question`
  MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `evaluation_rating`
--
ALTER TABLE `evaluation_rating`
  MODIFY `rating_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `evaluation_result`
--
ALTER TABLE `evaluation_result`
  MODIFY `evaluation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id_teacher` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
