-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2016 at 10:12 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mingyuan`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `Author_ID` int(11) NOT NULL,
  `first_name` char(50) NOT NULL,
  `last_name` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`Author_ID`, `first_name`, `last_name`) VALUES
(1, 'JK', 'Rowling'),
(2, 'William', 'Fulton'),
(3, 'Lee', 'Child'),
(4, 'Eric', 'Carle'),
(5, 'Allen', 'Hatcher'),
(6, 'Patricia', 'MacLachlan'),
(7, 'Ruth', 'Bader Ginsberg'),
(8, 'David', 'Baldacci'),
(9, 'Sheryl', 'Sandberg'),
(10, 'Lauren', 'Layne'),
(11, 'Jill', 'Shalvis'),
(12, 'Agatha', 'Christie'),
(13, 'Margaret', 'Truman'),
(14, 'William', 'Shakespeare'),
(15, 'Walter', 'Isaacson'),
(16, 'Michael', 'Schulman'),
(17, 'Benjamin', 'Franklin'),
(18, 'Theodore', 'Roosevelt'),
(19, 'Andy', 'Weir'),
(20, 'Isaac', 'Asimov'),
(21, 'Walter', 'Savitch'),
(22, 'Charles', 'Petzold'),
(23, 'Mark', 'Kurlansky'),
(24, 'Jennifer', 'Hart'),
(25, 'Cynthia', 'Freeman'),
(26, 'Amor', 'Towles'),
(27, 'Sandra', 'Cisneros'),
(28, 'Charles', 'Carver'),
(29, 'Gary', 'Armstrong'),
(30, 'Thomas', 'Piketty'),
(31, 'Immanuel', 'Kant'),
(32, 'Kevin', 'Perry'),
(33, 'Bertrand', 'Russell'),
(34, 'Michael', 'Roskin'),
(35, 'Karl', 'Marx'),
(36, 'Laura', 'Ingalls Wilder'),
(37, 'John', 'Grisham'),
(38, 'MIngyuan', 'Li');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` int(11) NOT NULL,
  `Author_id` int(11) NOT NULL,
  `publisher_id` int(11) NOT NULL,
  `subject_id` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `Author_id`, `publisher_id`, `subject_id`, `title`, `year`) VALUES
(123456, 38, 23, 25, 'Marry me ', 2016),
(1234567, 38, 23, 24, 'Marry me again ', 2016),
(12345678, 38, 23, 4, 'Marry me 2', 2016),
(62073486, 12, 10, 8, 'And Then There Were None', 1939),
(62073509, 12, 10, 8, 'Murder on the Orient Express', 1934),
(62342843, 16, 10, 10, 'Her Again: Becoming Meryl Streep', 2016),
(62399527, 6, 1, 4, 'Sarah, Plain and Tall', 1985),
(62448048, 11, 9, 7, 'The Trouble with Mistletoe', 2015),
(64400026, 36, 10, 15, 'Little House on the Prairie', 1935),
(134041674, 21, 17, 13, 'Absolute Java', 2013),
(140275010, 23, 19, 14, 'Cod: A Biography of the Fish that Changed the World', 1998),
(142001619, 23, 19, 14, 'Salt: A World History', 2003),
(205978002, 34, 17, 21, 'Political Science: An Introduction', 2012),
(316228583, 1, 5, 5, 'The Casual Vacancy', 2013),
(385349947, 9, 7, 6, 'Lean In: Women, Work, and the Will to Lead', 2013),
(387974954, 2, 2, 2, 'Representation Theory a First Course', 2013),
(393239616, 23, 19, 14, 'Paper: Paging Through History', 2016),
(399226907, 4, 4, 4, 'The Very Hungry Caterpillar', 1994),
(439064872, 1, 1, 1, 'Harry Potter and the Chamber of Secrets', 2000),
(439708185, 1, 1, 1, 'Harry Potter and the Sorcerer''s Stone ', 1998),
(439785960, 1, 1, 1, 'Harry Potter and the Half-Blood Prince', 2006),
(440245923, 37, 22, 3, 'The Firm', 1991),
(486290735, 17, 13, 11, 'The Autobiography of Benjamin Franklin', 1791),
(521535379, 5, 6, 2, 'Algebraic Topology', 2001),
(544663322, 30, 20, 18, 'Why Save the Bankers?', 2016),
(553286285, 20, 16, 12, 'Nemesis', 1990),
(553288105, 20, 15, 12, 'The Gods Themselves', 1990),
(553418025, 19, 14, 12, 'The Martian', 2014),
(670026190, 26, 14, 15, 'A Gentleman in Moscow: A Novel', 2016),
(671201581, 33, 14, 20, 'The History of Western Philosophy', 1967),
(674430008, 30, 20, 18, 'Capital in the Twenty First Century', 2014),
(679734775, 27, 14, 15, 'The House on Mango Street', 1991),
(717802418, 35, 21, 21, 'The Communist Manifesto', 1848),
(735611319, 22, 18, 13, 'Code: The Hidden Language of Computer Hardware and Software', 2000),
(743264746, 15, 7, 10, 'Einstein: His Life and Universe', 2008),
(743477123, 14, 7, 9, 'Hamlet', 1603),
(743482751, 14, 12, 9, 'Much Ado About Nothing', 1599),
(743482766, 14, 12, 9, 'King Lear', 1608),
(765364998, 13, 11, 8, 'Monument to Murder', 2012),
(765364999, 14, 7, 9, 'Midsummer Night''s Dream', 1600),
(804178801, 3, 3, 3, 'Night School', 2016),
(1230024889, 25, 19, 15, 'A World Full of Strangers', 2013),
(1230456789, 24, 9, 5, 'Skeletons in the Closet', 2011),
(1447738821, 28, 17, 16, 'Perspectives on Personality', 2011),
(1455586518, 8, 8, 3, 'No Man''s Land', 2016),
(1492144053, 18, 10, 11, 'An Autobiography by Theodore Roosevelt', 1913),
(1501135139, 10, 9, 7, 'To Have and to Hold', 2016),
(1501145245, 7, 7, 6, 'My Own Words', 2016),
(1537260057, 31, 10, 20, 'The Critique of Pure Reason', 1781),
(1623156378, 32, 18, 20, 'Philosophy ', 2015),
(1657892201, 29, 17, 17, 'Marketing: An Introduction', 2012);

-- --------------------------------------------------------

--
-- Table structure for table `check_outs`
--

CREATE TABLE `check_outs` (
  `serial_number` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `check_out_date` varchar(40) NOT NULL,
  `due_date` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `check_outs`
--

INSERT INTO `check_outs` (`serial_number`, `member_id`, `check_out_date`, `due_date`) VALUES
(4, 599191, 'Nov/21/16', 'Dec/31/16'),
(6, 599170, '12/3/2016', '12/10/2016'),
(8, 599182, '12/2/2016', '12/9/2016'),
(10, 599188, '12/6/2016', '12/13/2016'),
(13, 599183, '12/6/2016', '12/13/2016'),
(16, 599174, '12/1/2016', '12/8/2016'),
(18, 599181, '12/3/2016', '12/10/2016'),
(19, 599184, '12/6/2016', '12/13/2016'),
(20, 599171, 'Nov/21/16', 'Dec/31/16'),
(23, 599189, '12/1/2016', '12/8/2016'),
(25, 599189, '12/1/2016', '12/8/2016'),
(29, 599172, '12/2/2016', '12/9/2016'),
(31, 599176, '12/3/2016', '12/10/2016'),
(35, 599189, '12/1/2016', '12/8/2016'),
(37, 599186, '12/5/2016', '12/12/2016'),
(39, 599180, '12/3/2016', '12/10/2016'),
(40, 599187, '12/6/2016', '12/13/2016'),
(41, 599181, '12/3/2016', '12/10/2016'),
(42, 599185, '12/4/2016', '12/11/2016'),
(44, 599172, '12/2/2016', '12/9/2016'),
(46, 599170, '12/3/2016', '12/10/2016'),
(47, 599175, '12/5/2016', '12/12/2016'),
(50, 599173, '12/2/2016', '12/9/2016'),
(52, 599187, '12/6/2016', '12/13/2016'),
(55, 599188, '12/6/2016', '12/13/2016'),
(57, 599177, '12/5/2016', '12/12/2016'),
(61, 599181, '12/3/2016', '12/10/2016'),
(65, 599172, '12/2/2016', '12/9/2016'),
(68, 599178, '12/4/2016', '12/11/2016'),
(71, 599178, '12/4/2016', '12/11/2016'),
(72, 599188, '12/6/2016', '12/13/2016'),
(74, 599172, '12/2/2016', '12/9/2016'),
(79, 599174, 'Nov/21/16', 'Dec/31/16');

-- --------------------------------------------------------

--
-- Table structure for table `copy`
--

CREATE TABLE `copy` (
  `serial_number` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `copy_seq_id` int(11) NOT NULL,
  `available` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `copy`
--

INSERT INTO `copy` (`serial_number`, `book_id`, `copy_seq_id`, `available`) VALUES
(1, 439708184, 1, 'Yes'),
(2, 439708184, 2, 'Yes'),
(3, 439064872, 1, 'Yes'),
(4, 439064872, 2, 'No'),
(5, 439064872, 3, 'Yes'),
(6, 387974954, 1, 'No'),
(7, 804178801, 1, 'Yes'),
(8, 804178801, 2, 'No'),
(9, 399226907, 1, 'Yes'),
(10, 399226907, 2, 'No'),
(11, 439785960, 1, 'Yes'),
(12, 316228583, 1, 'Yes'),
(13, 521535379, 1, 'No'),
(14, 521535379, 2, 'Yes'),
(15, 62399527, 1, 'Yes'),
(16, 1501145245, 1, 'No'),
(17, 385349947, 1, 'Yes'),
(18, 385349947, 2, 'No'),
(19, 1501135139, 1, 'No'),
(20, 1501135139, 2, 'No'),
(21, 62448048, 1, 'Yes'),
(22, 62073486, 1, 'Yes'),
(23, 62073486, 2, 'No'),
(24, 62073486, 3, 'Yes'),
(25, 62073509, 1, 'No'),
(28, 765364999, 1, 'Yes'),
(29, 765364999, 2, 'No'),
(30, 765364999, 3, 'Yes'),
(31, 743482751, 1, 'No'),
(32, 743477123, 1, 'Yes'),
(33, 743477123, 2, 'Yes'),
(34, 743482766, 1, 'Yes'),
(35, 743482766, 2, 'No'),
(36, 743264746, 1, 'Yes'),
(37, 62342843, 1, 'No'),
(38, 486290735, 1, 'Yes'),
(39, 486290735, 2, 'No'),
(43, 1492144053, 1, 'Yes'),
(44, 553418025, 1, 'No'),
(45, 553288105, 1, 'Yes'),
(46, 553286285, 1, 'No'),
(47, 553286285, 2, 'No'),
(48, 134041674, 1, 'Yes'),
(49, 735611319, 1, 'Yes'),
(50, 735611319, 2, 'No'),
(51, 142001619, 1, 'Yes'),
(52, 142001619, 2, 'No'),
(53, 393239616, 1, 'Yes'),
(54, 140275010, 1, 'Yes'),
(55, 1230456789, 1, 'No'),
(56, 1230456789, 2, 'Yes'),
(57, 1230024889, 3, 'No'),
(58, 670026190, 1, 'Yes'),
(59, 679734775, 1, 'Yes'),
(60, 679734775, 2, 'Yes'),
(61, 1447738821, 1, 'No'),
(62, 1657892201, 1, 'Yes'),
(63, 674430008, 1, 'Yes'),
(64, 544663322, 1, 'Yes'),
(65, 1537260057, 1, 'No'),
(66, 1623156378, 1, 'Yes'),
(67, 205978002, 1, 'Yes'),
(68, 205978002, 2, 'No'),
(69, 717802418, 1, 'Yes'),
(70, 717802419, 1, 'Yes'),
(71, 64400026, 1, 'No'),
(72, 64400026, 2, 'No'),
(73, 440245923, 1, 'Yes'),
(74, 440245923, 2, 'No'),
(78, 1234567, 1, 'Yes'),
(79, 1234567, 2, 'No'),
(80, 123456, 1, 'Yes'),
(81, 123456, 2, 'Yes'),
(82, 12345678, 1, 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `electroniccopy`
--

CREATE TABLE `electroniccopy` (
  `book_id` int(11) NOT NULL,
  `data` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `electroniccopy`
--

INSERT INTO `electroniccopy` (`book_id`, `data`) VALUES
(0, 0),
(62073486, 1),
(62073508, 1),
(62399527, 1),
(62448048, 1),
(134041674, 2),
(316228583, 1),
(385349947, 1),
(393239616, 2),
(399226907, 0),
(439708184, 1),
(439785960, 2),
(440245923, 1),
(486290735, 1),
(521535379, 1),
(553288105, 1),
(670026190, 2),
(674430008, 2),
(717802418, 0),
(735611319, 2),
(743264746, 2),
(743477123, 1),
(765364999, 1),
(1230456789, 2),
(1501135139, 1),
(1623156378, 2),
(1657892201, 2);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` int(11) NOT NULL,
  `SSN` int(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` char(50) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `position` char(50) NOT NULL,
  `address` char(100) NOT NULL,
  `salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `SSN`, `password`, `name`, `phone`, `position`, `address`, `salary`) VALUES
(600231, 123456789, '123456', 'Sara Leonetti', 5559661554, 'Full-Time Librarian', '6855 N 64th Street, Philadelphia, PA  19131', 20000),
(600232, 132456897, 'booknerd18', 'Angela Christaldi', 5557133202, 'Full-Time Librarian', '2300 S 57th Street, Philadelphia, PA 19131', 20750),
(600233, 116556347, 'vegancook12', 'Pooja Patel', 5554125789, 'Research Librarian', '1001 Ocean Avenue, Armore, PA 19500', 23000),
(600234, 688574321, 'gamer2017', 'Seth Fields', 5559668774, 'Research Librarian', '99 Oak Street, Ardmore, PA 19500', 23000),
(600235, 212320056, 'Dragon2016', 'Mary Herman', 5555702221, 'Research Librarian', '3290 N 13th Street, Philadelphia, PA  19002', 23145),
(600236, 212321896, 'MiffCats2', 'Leslie Orren', 5557131777, 'Children''s Librarian', '821 Red Road, Bala Cynwd , PA 19033', 19984),
(600237, 657882301, 'Alcott44', 'Cindy Herman', 5559664278, 'Library Director', '6722 N 64th Street, Philadelphia, PA  19131', 37587),
(600238, 689698896, 'Beth1877', 'Jo March', 5553100008, 'Assistant Library Director', '231 Church Street, Philadelphia, PA  19131', 35469),
(600239, 412253374, 'Paris1500', 'Shelley Donaldson', 5557139181, 'Assistant Technology Director', '54 Green Street, Mifflinburg, PA  19141', 44200),
(600240, 598621003, 'DBTeach16', 'Mary Krueger', 5554123489, 'Technology Director', '6302 S 63rd Street, Philadelphia, PA  19002', 47123),
(600241, 200356120, 'DBTeach11', 'Alan Nochenson', 5559661402, 'Technical Support', '544 Red Road, Bala Cynwd, PA  19033', 40000),
(600242, 120520311, 'Monster19', 'Mark Black', 5557132700, 'Technical Support', '101 Green Street, Mifflinburg, PA 19141', 40000),
(600243, 317777854, 'Weatherby1', 'Percy Weasley', 5559666363, 'Part-Time Librarian', '4309 South Lane, Villanova, PA  19640', 12640),
(600244, 260322014, 'HogwartsLib5', 'Irma Pince', 5559668451, 'Full-Time Librarian', '567 University Way, Villanova,  PA 19640', 20000),
(600245, 211476338, 'Sebastian14', 'Cathy Brungard', 5555707864, 'Part-Time Librarian', '1008 Walnut Street, Ardmore, PA 19500', 11997),
(600246, 551269853, 'Gaunt1920', 'Erma Hower', 5557867683, 'Part-Time Librarian', '506 Walnut Street, Ardmore, PA 19500', 12000),
(600247, 547589165, 'Mcshain4', 'Morgan Bui', 5554129774, 'Part-Time Librarian', '2200 S 22nd Street, Philadelphia, PA, 19131', 11450),
(600248, 753214970, 'Stats2018', 'Joseph Decapua', 5559662123, 'Research Librarian', '12 Daisy Circle, Merion Station, PA  19066', 23784),
(600249, 753981236, 'Mystery_girl1', 'Nancy Drew', 5557132566, 'Full-Time Librarian', '811 Belmont Avenue, Bryn Mawr, PA 19072', 20115),
(600250, 654821364, 'Ultimate3', 'Garret Miley', 5557138070, 'Technical Support', '155 Tucker Avenue, Ardmore, PA 19500', 40375);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_id` int(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `first_name` char(50) NOT NULL,
  `last_name` char(50) NOT NULL,
  `email` char(50) NOT NULL,
  `address` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `password`, `phone`, `first_name`, `last_name`, `email`, `address`) VALUES
(599170, '456789', 5557867682, 'Sarah', 'Cooney', 'sc599170@sju.edu', '2331 N 58th Street, Philadelphia, PA  19131'),
(599171, 'Pass1234', 5558449321, 'Brian', 'Ching', 'bching@gmail.com', '5600 City Ave, Philadelphia, PA 19131'),
(599172, 'TrustNo1', 5558448764, 'Brendan', 'Szefinski', 'bszefinski@gmail.com', '8320 City Ave, Philadelphia, PA 19131'),
(599173, 'DB_Team6', 5555702331, 'Faris', 'Alqahtani', 'fa600783@sju.edu', '613 Green Lane, Bryn Mawr, PA 19004'),
(599174, 'LibPass1', 5559664282, 'Mingyaun', 'Li', 'mli55@yahoo.com', '2520 Hawk Street, Philadelphia, PA 19131'),
(599175, 'Snuffles11', 5559338777, 'Harry', 'Potter', 'hpotter@yahooo.com', '882 Diagon Alley, Merion Station, PA 19066'),
(599176, 'Crooks1980', 5559337564, 'Hermione', 'Granger', 'hgranger@yahoo.com', '1926 Oak Avenue, Philadelphia, PA 19022'),
(599177, 'MrsHP731', 5555701044, 'Ginny', 'Weasley', 'mrshpotter@aol.com', '4545 Maple Street, Philadelphia, PA 19022'),
(599178, 'Marycg95', 5559663014, 'Molly', 'Grab', 'mary.grab@sju.edu', '2332 N 58th Street, Philadelphia, PA 19131'),
(599179, 'India2017', 5559660334, 'Nisha', 'Orren', 'norren@gmail.com', '2331 N 58th Street, Philadelphia, PA  19131'),
(599180, 'Swagster95', 5559323789, 'Jackie', 'Boran', 'swaggyjack123@aol.com', '123 Swaggy Street, Philadelphia, PA 19022'),
(599181, 'thwnd2017', 5555245290, 'Maria', 'Spirk', 'mspirk12@philly.edu', '2498 Hawk Street, Philadelphia, PA 19131'),
(599182, 'Jozzy18', 5553748051, 'Julie', 'Osborne', 'jayoz@gmail.com', '196 Lincoln Way, Philadelphia, PA 19131'),
(599183, 'Math2017', 5553743755, 'Maria', 'Macauly', 'mmac@stolaf.edu', '885 Lincoln Way, Philadelphia, PA 19131'),
(599184, 'coops823', 5559663200, 'Catherine', 'Cooper', 'ccoop@trinity.edu', '2247 S 63rd Street, Philadelphia, PA 19577'),
(599185, 'trapper21', 5558444444, 'Andrew', 'Cooney', 'adcooney@gmail.com', '4375 N 47th Street, Philadelphia, PA 19577'),
(599186, 'miffFH17', 5555709661, 'Samantha', 'Orren', 'sorren@gmail.com', '4399 N 47th Street, Philadelphia, PA 19577'),
(599187, 'pi_31459', 5559668298, 'Paul', 'Klingsberg', 'pklingsb@sju.edu', '333 Cantor Avenue, Merion Station, PA 19066'),
(599188, 'BUbison89', 5557133689, 'Marcia', 'Cooney', 'mcooney@bucknell.edu', '407 Green Street, Mifflinburg, PA 19844'),
(599189, 'nargles22', 5557134455, 'Luna', 'Lovegood', 'loony@hotmail.com', '628 Diagon Alley, Merion Station, PA 19066'),
(599190, '123456asdsa', 2147483647, 'Ali', 'gui', 'b@sju.edu', '1221 conshe'),
(599191, '456789', 5707483647, 'Mingyuan', 'Li', 'a@sju.edu', '');

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE `publisher` (
  `publisher_id` int(11) NOT NULL,
  `name` char(50) NOT NULL,
  `city` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`publisher_id`, `name`, `city`) VALUES
(1, 'Scholastic', 'New York City'),
(2, 'Springer', 'London'),
(3, 'Delacorte Press', 'Boston'),
(4, 'Philomel Books', 'New York City'),
(5, 'Back Bay Books', 'London'),
(6, 'Cambridge University Press', 'Cambridge'),
(7, 'Simon & Schuster', 'Boston'),
(8, 'Grand Central Publishing', 'Minneapolis'),
(9, 'Pocket Books', 'Boston'),
(10, 'Harper Collins', 'New York City'),
(11, 'Tor Books', 'Philadelphia'),
(12, 'Washington Square Press', 'Seattle'),
(13, 'Dover Publications', 'San Diego'),
(14, 'Broadway Books', 'New York City'),
(15, 'Spectra', 'Portland'),
(16, 'Bantam Books', 'Boston'),
(17, 'Pearson', 'Minneapolis'),
(18, 'Microsoft Press', 'San Diego'),
(19, 'Penguin Books', 'Philadelphia'),
(20, 'Belknap Press', 'Lincoln'),
(21, 'International Publishers Co', 'Zurich'),
(22, 'Dell Publications', 'Dover'),
(23, 'Saint Joseph Uni', 'New York City');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(11) NOT NULL,
  `name` char(100) NOT NULL,
  `parent` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `name`, `parent`) VALUES
(1, 'Fantasy', 'Fiction'),
(2, 'Mathematics', 'Science'),
(3, 'Thriller', 'Fiction'),
(4, 'Children', 'Fiction'),
(5, 'Humor', 'Fiction'),
(6, 'Memoir', 'Biography'),
(7, 'Romance', 'Fiction'),
(8, 'Mystery', 'Fiction'),
(9, 'Play', 'Arts'),
(10, 'Biography', 'Biography'),
(11, 'Autobiography', 'Biography'),
(12, 'Science Fiction', 'Fiction'),
(13, 'Computer Science', 'Science'),
(14, 'History', 'History'),
(15, 'Historical Fiction', 'Fiction'),
(16, 'Psychology', 'Social Science'),
(17, 'Marketing', 'Business'),
(18, 'Economics', 'Business'),
(19, 'Chemistry', 'Science'),
(20, 'Philosophy', 'Social Science'),
(21, 'Political Science', 'Social Science'),
(24, 'New Memoir', 'Biography'),
(25, 'Child', 'Carton');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`Author_ID`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `Author_id` (`Author_id`),
  ADD KEY `publisher_id` (`publisher_id`),
  ADD KEY `subject_id` (`subject_id`);

--
-- Indexes for table `check_outs`
--
ALTER TABLE `check_outs`
  ADD PRIMARY KEY (`serial_number`,`member_id`),
  ADD KEY `member_id` (`member_id`);

--
-- Indexes for table `copy`
--
ALTER TABLE `copy`
  ADD PRIMARY KEY (`serial_number`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `electroniccopy`
--
ALTER TABLE `electroniccopy`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`),
  ADD UNIQUE KEY `SSN` (`SSN`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`publisher_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `Author_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `copy`
--
ALTER TABLE `copy`
  MODIFY `serial_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=600251;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=599192;
--
-- AUTO_INCREMENT for table `publisher`
--
ALTER TABLE `publisher`
  MODIFY `publisher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`Author_id`) REFERENCES `author` (`Author_ID`),
  ADD CONSTRAINT `book_ibfk_2` FOREIGN KEY (`publisher_id`) REFERENCES `publisher` (`publisher_id`),
  ADD CONSTRAINT `book_ibfk_3` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`subject_id`);

--
-- Constraints for table `check_outs`
--
ALTER TABLE `check_outs`
  ADD CONSTRAINT `check_outs_ibfk_2` FOREIGN KEY (`member_id`) REFERENCES `member` (`member_id`);

--
-- Constraints for table `copy`
--
ALTER TABLE `copy`
  ADD CONSTRAINT `copy_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `book` (`book_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
