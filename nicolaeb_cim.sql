-- phpMyAdmin SQL Dump
-- version 4.9.11
-- https://www.phpmyadmin.net/
--
-- Gazdă: localhost:3306
-- Timp de generare: mart. 02, 2023 la 02:16 PM
-- Versiune server: 10.5.19-MariaDB-cll-lve
-- Versiune PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `nicolaeb_cim`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `generation`
--

CREATE TABLE `generation` (
  `id_generare` int(11) NOT NULL,
  `id_test` int(11) NOT NULL,
  `id_q` int(11) NOT NULL,
  `data_g` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Eliminarea datelor din tabel `generation`
--

INSERT INTO `generation` (`id_generare`, `id_test`, `id_q`, `data_g`) VALUES
(1, 1, 5, '2023-03-02 01:13:35'),
(2, 1, 18, '2023-03-02 01:13:35'),
(3, 1, 43, '2023-03-02 01:13:35'),
(4, 1, 10, '2023-03-02 01:13:35'),
(5, 2, 57, '2023-03-02 02:00:14'),
(6, 2, 55, '2023-03-02 02:00:14'),
(7, 2, 47, '2023-03-02 02:00:14'),
(8, 2, 45, '2023-03-02 02:00:14'),
(9, 3, 62, '2023-03-02 02:04:44'),
(10, 3, 66, '2023-03-02 02:04:44'),
(11, 3, 41, '2023-03-02 02:04:44'),
(12, 3, 51, '2023-03-02 02:04:44'),
(13, 4, 23, '2023-03-02 02:06:30'),
(14, 4, 42, '2023-03-02 02:06:30'),
(15, 4, 45, '2023-03-02 02:06:30'),
(16, 4, 57, '2023-03-02 02:06:30'),
(17, 5, 46, '2023-03-02 02:18:36'),
(18, 5, 45, '2023-03-02 02:18:36'),
(19, 5, 3, '2023-03-02 02:18:36'),
(20, 5, 12, '2023-03-02 02:18:36'),
(21, 6, 18, '2023-03-02 02:19:25'),
(22, 6, 48, '2023-03-02 02:19:25'),
(23, 6, 33, '2023-03-02 02:19:25'),
(24, 6, 59, '2023-03-02 02:19:25'),
(25, 7, 42, '2023-03-02 02:20:49'),
(26, 7, 65, '2023-03-02 02:20:49'),
(27, 7, 10, '2023-03-02 02:20:49'),
(28, 7, 38, '2023-03-02 02:20:49'),
(29, 8, 38, '2023-03-02 02:21:55'),
(30, 8, 46, '2023-03-02 02:21:55'),
(31, 8, 44, '2023-03-02 02:21:55'),
(32, 8, 66, '2023-03-02 02:21:55'),
(33, 9, 8, '2023-03-02 03:00:17'),
(34, 9, 18, '2023-03-02 03:00:17'),
(35, 9, 56, '2023-03-02 03:00:17'),
(36, 9, 63, '2023-03-02 03:00:17'),
(37, 10, 5, '2023-03-02 03:02:56'),
(38, 10, 35, '2023-03-02 03:02:56'),
(39, 10, 2, '2023-03-02 03:02:56'),
(40, 10, 20, '2023-03-02 03:02:56'),
(41, 11, 51, '2023-03-02 09:27:34'),
(42, 11, 38, '2023-03-02 09:27:34'),
(43, 11, 15, '2023-03-02 09:27:34'),
(44, 11, 7, '2023-03-02 09:27:34'),
(45, 11, 8, '2023-03-02 09:27:34'),
(46, 12, 64, '2023-03-02 09:29:07'),
(47, 12, 8, '2023-03-02 09:29:07'),
(48, 12, 56, '2023-03-02 09:29:07'),
(49, 12, 55, '2023-03-02 09:29:07'),
(50, 12, 15, '2023-03-02 09:29:07'),
(51, 12, 45, '2023-03-02 09:29:07'),
(52, 13, 64, '2023-03-02 09:30:00'),
(53, 13, 49, '2023-03-02 09:30:00'),
(54, 13, 47, '2023-03-02 09:30:00'),
(55, 13, 52, '2023-03-02 09:30:00'),
(56, 13, 28, '2023-03-02 09:30:00'),
(57, 13, 62, '2023-03-02 09:30:00'),
(58, 14, 11, '2023-03-02 13:36:07'),
(59, 14, 3, '2023-03-02 13:36:07'),
(60, 14, 63, '2023-03-02 13:36:07'),
(61, 14, 64, '2023-03-02 13:36:07'),
(62, 14, 35, '2023-03-02 13:36:07');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `item`
--

CREATE TABLE `item` (
  `id_q` int(11) NOT NULL,
  `enunt` text NOT NULL,
  `keywords` text NOT NULL,
  `dd` double NOT NULL,
  `tp` set('0','1') NOT NULL,
  `type` set('m','e','s') NOT NULL,
  `point` double NOT NULL,
  `var_a` text NOT NULL,
  `var_b` text NOT NULL,
  `var_c` text NOT NULL,
  `var_d` text NOT NULL,
  `l_q` int(11) NOT NULL,
  `ta_q` int(11) NOT NULL,
  `m_q` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Eliminarea datelor din tabel `item`
--

INSERT INTO `item` (`id_q`, `enunt`, `keywords`, `dd`, `tp`, `type`, `point`, `var_a`, `var_b`, `var_c`, `var_d`, `l_q`, `ta_q`, `m_q`) VALUES
(2, 'Give a mobile operating system.', 'operating, system', 0, '', 'm', 1, 'Android', 'Linux', 'Unix', 'Ubuntu', 0, 0, 0),
(1, 'Which of the following is an operating system?', 'operating, system', 1, '', 'm', 1, 'Linux', 'Opera', 'MySQL', 'PHP', 1, 1, 1),
(3, 'Give one difference between Windows and Linux systems.', 'operating, Windows', 1, '', 'm', 1, 'interface', 'menu', 'license', 'system kernel', 1, 1, 1),
(4, 'Which is the file path for the file “hello.txt” found on D:, in the folder „Lucrari”?', 'path, file', 0, '', 'm', 1, 'C:/D:/hello.txt', 'D:/Lucrari/hello.txt', 'This PC:/D:/Lucrari/hello.txt', 'hello.txt', 0, 0, 0),
(5, 'Describe the Linux operating system in 300 words.', 'operating, Linux', 0, '', 'e', 1, '', '', '', '', 0, 0, 0),
(6, 'Which library is included in C++ to work with files?', 'C++, library', 0, '', 'm', 1, 'fstream', 'iostream', 'hstream', 'xml', 0, 0, 0),
(7, 'Write a code to determine whether a string is a palindrome.', 'string, palindrome', 0, '', 'e', 1, '', '', '', '', 0, 0, 0),
(8, 'What is potentially wrong with the following Android code?', 'Android, code', 0, '', 'm', 1, 'a is not a string variable', 'syntax', 'declaration of a', 'output expression', 0, 0, 0),
(9, 'Should you encrypt confidential data?', 'encryption, data', 0, '', 'm', 1, 'yes', 'no', '', '', 0, 0, 0),
(10, 'Which of these is not an item of hardware to do with computers?', 'hardware, item', 0, '', 'm', 1, 'OS', 'processor', 'hard-disk', 'motherboard', 0, 0, 0),
(11, 'Which is the best application to use to write a letter?', 'application, writing', 1, '', 'm', 1, 'Microsoft Word', 'Adobe Photoshop', 'PowerPoint', '', 1, 1, 1),
(12, 'How many bits make a byte?', 'bite, byte', 0, '', 'm', 1, '8', '2', '100', '1024', 0, 0, 0),
(13, 'First search engine on internet is:', 'search, engine', 0, '', 'm', 1, 'Google', 'Bing', 'Yahoo', 'Netscape', 0, 0, 0),
(14, 'Define a desktop operating system.', 'operating, system', 0, '', 's', 1, '', '', '', '', 0, 0, 0),
(15, 'Microsoft Windows is an:', 'operating, Windows', 0, '', 'm', 1, 'a word processor', 'an operating system', 'a work app', 'a spreadsheet program', 0, 0, 0),
(16, 'Mobile device applications are:', 'operating, applications', 0, '', 's', 1, '', '', '', '', 0, 0, 0),
(17, 'Which of these is a free operating system?', 'operating, system', 0, '', 'm', 1, 'Linux', 'Windows', 'iOS', 'Machintosh', 0, 0, 0),
(18, 'What is a URL?', 'Internet, link', 0, '', 'm', 1, 'Universal Resource Locator', 'Uniform Resource Locator', 'Uniform Radio Locator', 'None of these', 0, 0, 0),
(19, '1 GB is equal to', 'hardware, gigabyte', 0, '', 'm', 1, '1024 MB', '1000 MB', '100 MB', '10 MB', 0, 0, 0),
(20, 'Explain the key idea of branch and bound algorithms.', 'algorithm, graph', 0, '', 'e', 1, '', '', '', '', 0, 0, 0),
(21, 'Use the greedy coin-change algorithm to make change using quarters (25 cents), dimes (10 cents), nickels (5 cents), and pennies (1 cent), for 92 cents. How many coins did you use?', 'algorithm, greedy', 0, '', 'm', 1, '7', '5', '10', '1', 0, 0, 0),
(22, 'What given number is prime?', 'algorithm, prime', 0, '', 'm', 1, '23', '22', '10', '21', 0, 0, 0),
(23, 'Find the largest value in an array.', 'algorithm, array', 0, '', 'e', 1, '', '', '', '', 0, 0, 0),
(24, 'What is the extension of a file created in Word?', 'file, extension', 0, '', 'm', 1, '.doc', '.jpg', '.pdf', '.exe', 0, 0, 0),
(25, 'What is the role of the Start button on the taskbar?', 'Start, taskbar', 0, '', 'm', 1, 'opens a menu', 'create a file', 'write a command', '', 0, 0, 0),
(26, 'How can a folder be created?', 'folder, operating', 0, '', 's', 1, 'using menu', 'writing codde', 'open Windows', 'copy', 0, 0, 0),
(27, 'Find the maximum number between two given integers.', 'algorithm, maximum', 0, '', 's', 1, '', '', '', '', 0, 0, 0),
(28, 'What is a partition?', 'partition, operating', 0, '', 'm', 1, 'part of the storage', 'a menu', 'an interface', 'a processor', 0, 0, 0),
(29, 'What is a file?', 'file, operating', 0, '', 'm', 1, 'a collection of data', 'a collection of files', 'a collection of folders', '', 0, 0, 0),
(30, 'What is a folder?', 'folder, operating', 0, '', 'm', 1, 'a collection of files', 'a collection of data', 'a collection of folders', '', 0, 0, 0),
(31, 'Define a window in the GUI of an operating system.', 'window, operating', 0, '', 's', 1, '', '', '', '', 0, 0, 0),
(32, 'What is found by applying Euclid’s algorithm?', 'algorithm, Euclid', 0, '', 'm', 1, 'the highest common divider', 'the highest number in an array', 'the lowest number in an array', 'the lowest common divider', 0, 0, 0),
(33, 'Write a program which counts  the b’s in “bibliography”.', 'algorithm, letter', 0, '', 'e', 1, '', '', '', '', 0, 0, 0),
(34, 'What is the decimal value of 10010100?', 'decimal, binary', 0, '', 'm', 1, '148', '149', '200', '150', 0, 0, 0),
(35, 'What is the hexadecimal value of 100101000?', 'decimal, binary', 3, '', 'm', 1, '94', '95', 'A23', '34', 3, 1, 3),
(36, 'What is the decimal value of 11100010?', 'decimal, binary', 0, '', 'm', 1, '226', '34', '223', '224', 0, 0, 0),
(37, 'What is the decimal value of 01100010?', 'decimal, binary', 0, '', 'm', 1, '13', '14', '15', '16', 0, 0, 0),
(38, 'Choose the search engine from the next variants:', 'Internet, search', 0, '', 'm', 1, 'Google', 'Windows', 'Yahoo Messenger', 'Adobe Photoshop', 0, 0, 0),
(39, 'What is a TCP/IP?', 'Internet, protocol', 0, '', 'm', 1, 'a protocol', 'a search engine', 'a browser', 'a webpage', 0, 0, 0),
(40, 'Which of the algorithms finds the largest common divider of two numbers?', 'algorithm, Euclid', 0, '', 'm', 1, 'Euclid', 'bubble sort', 'merge sort', 'Prim', 0, 0, 0),
(41, 'Write a short text about partitions.', 'partition, operating', 0, '', 's', 1, '', '', '', '', 0, 0, 0),
(42, 'What is the taskbar?', 'operating, taskbar', 0, '', 'm', 1, 'a bar', 'a menu', 'a window', 'a program', 0, 0, 0),
(43, 'What is wrong with the following piece of code: #includ <iostream.h>?', 'algorithm, code', 0, '', 'm', 1, 'syntax', 'declaration', 'library', '', 0, 0, 0),
(44, 'Selecting the entire content of a document is done with the key combination:', 'keyboard shortcut, selecting, Word', 0, '', 'm', 1, 'Ctrl + A', 'Ctrl + S', 'Ctrl + P', 'Ctrl + Shift + Esc', 0, 0, 0),
(45, 'The process of removing an unwanted part of an image is called', 'image, editing, Word', 0, '', 'm', 1, 'Cut', 'Border', 'Crop', '', 0, 0, 0),
(46, 'What is the name of the direction of a page used for viewing and printing?', 'Word, formatting', 0, '', 'm', 1, 'Orientation', 'Direction', 'Size', 'Preview', 0, 0, 0),
(47, 'A program that is used to view websites is called:', 'browser, Internet', 0, '', 'm', 1, 'Browser', 'Web Viewer', 'Spreadsheet', 'Word Processor', 0, 0, 0),
(48, 'What is the term for unsolicited emails?', 'Internet, email', 0, '', 'm', 1, 'Spam', 'Backbone', 'Usenet', 'Newsletter', 0, 0, 0),
(49, 'TCP/IP means:', 'protocol, Internet', 0, '', 'm', 1, 'Protocol', 'Network Software', 'Protocol', 'None of these', 0, 0, 0),
(50, 'URL means:', 'browser, URL, Internet', 0, '', 'm', 1, 'Universal Resource Locator', 'Uniform Resource Locator', 'Uniform Radio Locator', 'None of these', 0, 0, 0),
(51, 'Which of the following variants is not a browser?', 'browser, Internet', 0, '', 'm', 1, 'Google', 'Mozilla Firefox', 'Opera', 'Internet Explorer', 0, 0, 0),
(52, 'The step-by-step procedure for solving a problem is called:', 'programming, algorithm', 0, '', 'm', 1, 'algorithm', 'programming', 'planning', 'scheme', 0, 0, 0),
(53, 'This characteristic of algorithms often draws the line between what is feasible and what is impossible.', 'programming, algorithm, characteristic', 0, '', 'm', 1, 'Performance', 'System evaluation', 'Modularity', 'Reliability', 0, 0, 0),
(54, 'A water lily covers the surface of the water in 30 days. How many days do it take to cover half the surface, if the water lily doubles its surface every day?', 'programming, exercise', 0, '', 'm', 1, '29', '15', '20', '2', 0, 0, 0),
(55, 'What is the result of the expression: (5 > 7) AND (0 < 2 * 5 < 15)?', 'programming, boolean, exercise', 0, '', 'm', 1, 'FALSE', 'TRUE', '', '', 0, 0, 0),
(56, 'What is the result of the expression: (5 > 7) OR (0 < 2 * 5 < 15)?', 'programming, boolean, exercise', 0, '', 'm', 1, 'TRUE', 'FALSE', '', '', 0, 0, 0),
(57, 'What is the result of the expression: (5 < 7)?', 'programming, boolean, exercise', 0, '', 'm', 1, 'TRUE', 'FALSE', '', '', 0, 0, 0),
(58, 'What is the result of the expression: (100 = 101) AND (2*3 < 6)?', 'programming, boolean, exercise', 0, '', 'm', 1, 'FALSE', 'TRUE', '', '', 0, 0, 0),
(59, 'What is the result of the expression: (100 = 101) OR (2*3 < 6?', 'programming, boolean, exercise', 0, '', 'm', 1, 'FALSE', 'TRUE', '', '', 0, 0, 0),
(60, 'What is the minimum number of comparisons to sort ascendingly the sequence of numbers: 2, 3, 5, 1, 4?', 'programming, exercise, sort', 0, '', 'm', 1, '25', '5', '7', '120', 0, 0, 0),
(61, 'What is the name of the intersection of a column and a row in a worksheet?', 'Excel, row, line, cell', 0, '', 'm', 1, 'Cell', 'Function', 'Formula', 'Parameter', 0, 0, 0),
(62, 'Ce func?ie din Excel returneaz? suma unui interval de numere?', 'function, Excel, sum', 0, '', 'm', 1, 'AVERAGE', 'SUM', 'COUNT', 'INT', 0, 0, 0),
(63, 'The process of arranging the elements of a column in a particular sequence or order is known as:', 'sort, Excel', 2, '', 'm', 1, 'Arrange', 'Filter', 'Sort', 'Conditional formatting', 2, 1, 2),
(64, 'In Excel, the rows are numbered with:', 'Excel, row, line, cell', 2, '', 'm', 1, 'A, B, C, ...', '1, 2, 3, ...', 'A1, A2, A3, ...', '$A$1, $A$2, $A$3, ...', 2, 1, 2),
(65, 'Which function in Excel returns the average of a range of numbers?', 'function, Excel, average', 0, '', 'm', 1, 'AVERAGE', 'SUM', 'COUNT', 'INT', 0, 0, 0),
(66, 'Which function in Excel returns the sum of a range of numbers?', 'function, Excel, sum', 0, '', 'm', 1, 'SUM', 'AVERAGE', 'COUNT', 'INT', 0, 0, 0),
(67, 'Which function in Excel returns the number of values within a range of numbers?', 'function, Excel, count', 0, '', 'm', 1, 'COUNT', 'AVERAGE', 'SUM', 'INT', 0, 0, 0),
(68, 'enunt', 'keywords', 0, '', '', 0, 'var_a', 'var_b', 'var_c', 'var_d', 0, 0, 0),
(69, 'enunt', 'keywords', 0, '', '', 0, 'var_a', 'var_b', 'var_c', 'var_d', 0, 0, 0);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `response`
--

CREATE TABLE `response` (
  `id_rasp` int(11) NOT NULL,
  `id_stud` int(11) NOT NULL,
  `id_test` int(11) NOT NULL,
  `id_q` int(11) NOT NULL,
  `raspuns` text NOT NULL,
  `corect` varchar(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Eliminarea datelor din tabel `response`
--

INSERT INTO `response` (`id_rasp`, `id_stud`, `id_test`, `id_q`, `raspuns`, `corect`) VALUES
(1, 1, 10, 5, 'a', 'a'),
(2, 1, 10, 35, 'b', 'a'),
(3, 1, 10, 2, 'a', 'a'),
(4, 1, 10, 20, 'b', 'a'),
(5, 1, 10, 5, 'a', 'a'),
(6, 1, 10, 35, 'b', 'a'),
(7, 1, 10, 2, 'a', 'a'),
(8, 1, 10, 20, 'b', 'a'),
(9, 1, 10, 5, 'a', 'a'),
(10, 1, 10, 35, 'b', 'a'),
(11, 1, 10, 2, 'a', 'a'),
(12, 1, 10, 20, 'b', 'a'),
(13, 1, 14, 11, 'a', 'a'),
(14, 1, 14, 3, 'b', 'a'),
(15, 1, 14, 63, 'a', 'a'),
(16, 1, 14, 64, 'b', 'a'),
(17, 1, 14, 35, 'a', 'a');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `student`
--

CREATE TABLE `student` (
  `id_stud` int(11) NOT NULL,
  `nume` varchar(200) NOT NULL,
  `prenume` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Eliminarea datelor din tabel `student`
--

INSERT INTO `student` (`id_stud`, `nume`, `prenume`) VALUES
(1, 'Bold', 'Nicolae'),
(2, 'Ionescu', 'Ion');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `test`
--

CREATE TABLE `test` (
  `id_test` int(11) NOT NULL,
  `data_gen` datetime NOT NULL,
  `avg_score` double NOT NULL,
  `no_responses` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Eliminarea datelor din tabel `test`
--

INSERT INTO `test` (`id_test`, `data_gen`, `avg_score`, `no_responses`) VALUES
(1, '2023-03-02 01:13:35', 0, 0),
(2, '2023-03-02 02:00:14', 0, 0),
(3, '2023-03-02 02:04:44', 0, 0),
(4, '2023-03-02 02:06:30', 0, 0),
(5, '2023-03-02 02:18:36', 0, 0),
(6, '2023-03-02 02:19:25', 0, 0),
(7, '2023-03-02 02:20:49', 0, 0),
(8, '2023-03-02 02:21:55', 0, 0),
(9, '2023-03-02 03:00:17', 0, 0),
(10, '2023-03-02 03:02:56', 6, 3),
(11, '2023-03-02 09:27:34', 0, 0),
(12, '2023-03-02 09:29:07', 0, 0),
(13, '2023-03-02 09:30:00', 0, 0),
(14, '2023-03-02 13:36:07', 3, 1);

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `generation`
--
ALTER TABLE `generation`
  ADD PRIMARY KEY (`id_generare`);

--
-- Indexuri pentru tabele `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id_q`);

--
-- Indexuri pentru tabele `response`
--
ALTER TABLE `response`
  ADD PRIMARY KEY (`id_rasp`);

--
-- Indexuri pentru tabele `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id_stud`);

--
-- Indexuri pentru tabele `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id_test`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `generation`
--
ALTER TABLE `generation`
  MODIFY `id_generare` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT pentru tabele `item`
--
ALTER TABLE `item`
  MODIFY `id_q` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT pentru tabele `response`
--
ALTER TABLE `response`
  MODIFY `id_rasp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pentru tabele `student`
--
ALTER TABLE `student`
  MODIFY `id_stud` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pentru tabele `test`
--
ALTER TABLE `test`
  MODIFY `id_test` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
