-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2017 at 05:26 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdofp`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `username` varchar(20) NOT NULL,
  `pword` varchar(20) NOT NULL,
  `user_id` int(10) NOT NULL,
  `account_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`username`, `pword`, `user_id`, `account_id`) VALUES
('mamshie', 'powers', 1, 1),
('incogtito', '1234', 1, 2),
('danjen', 'mapagmahal', 2, 3),
('hai', 'shun', 2, 4),
('og', 'og', 3, 5),
('alex', 'alex', 3, 6),
('don', 'don', 3, 7),
('chaka', 'chaka', 3, 8),
('pon', 'pon', 3, 10),
('jbravo', 'bibo', 3, 11),
('jaysen123', 'lovesyou', 2, 12),
('jay', 'son', 3, 20),
('jello', 'quillo', 3, 25),
('maru', 'pogi', 3, 26),
('danj', 'david', 3, 27),
('jc', 'og', 2, 29),
('mikmik', 'vilar', 2, 30),
('josh', 'magora', 2, 31),
('kia', 'nana', 2, 32),
('paul', 'pope', 2, 33),
('jon', 'sins', 3, 34),
('mobo', 'mobu', 2, 35),
('jco', 'jco', 2, 36),
('jojo', 'jomba', 2, 37),
('jelo', 'quillo', 2, 38),
('de', 'oro', 2, 39),
('kage', 'bunshin', 3, 40),
('uchi', 'ha', 3, 41),
('raprap', 'sensei', 3, 42),
('swiper', 'noswiping', 3, 43),
('mae', 'mae', 3, 44),
('qq', 'ww', 3, 45),
('chi', 'chi', 3, 46),
('qw', 'qw', 3, 47),
('qwe', 'qwe', 3, 48),
('john', 'doe', 3, 49),
('jane', 'doe', 3, 50),
('mm', 'mm', 3, 51),
('kk', 'kk', 3, 52),
('ll', 'll', 3, 53),
('ulricht', '123', 3, 54),
('csoriano', '123', 3, 56),
('mtan', '123', 3, 57),
('tlorena', '123', 3, 58),
('jaustria', '123', 3, 59),
('lbenitez', '123', 3, 60),
('aamparo', '123', 3, 61),
('jcaballero', '123', 3, 62),
('bvitao', '123', 3, 63),
('gcortez', '123', 3, 64),
('carcilla', '123', 3, 65),
('rgamulo', '123', 3, 66),
('spiatos', '123', 3, 67),
('clara', '123', 3, 68),
('jvizcaya', '123', 3, 69),
('hvillar', '123', 3, 70),
('isoriano', '123', 3, 71),
('aalba', '123', 3, 72),
('jrodriguez', '123', 3, 73),
('cflores', '123', 3, 74),
('fespana', '123', 3, 75),
('hchua', '123', 3, 76),
('ksilva', '123', 3, 77),
('kbenoza', '123', 3, 78),
('atorresyap', '123', 3, 79),
('aang', '123', 3, 80),
('duykee', '123', 3, 81),
('btecson', '123', 3, 82),
('bmorelos', '123', 3, 83),
('mlim', '123', 3, 84),
('babunda', '123', 3, 85),
('acurtis', '123', 3, 86),
('mrivera', '123', 3, 87),
('ddantes', '123', 3, 88),
('jbarredo', '123', 3, 89),
('myi', '123', 3, 90),
('rcrestfall', '123', 3, 91),
('acruz', '123', 3, 92),
('bwayne', '123', 3, 93),
('ckent', '123', 3, 94),
('pparker', '123', 3, 95),
('acara`', '123', 3, 96),
('Aquillop', '123', 3, 97),
('Favila', '123', 3, 98),
('AdrianQ', '123', 3, 99),
('Tswift', '123', 3, 100),
('Chefcurry', '123', 3, 101),
('Kthomp', '123', 3, 102),
('KDtrey5', '123', 3, 103),
('Dgreen', '123', 3, 104),
('send', 'nudes', 3, 105),
('boana', 'bomba', 3, 106),
('baby_jayson', 'baby', 3, 107),
('seaman', 'pogi', 3, 108),
('mo', 'to', 3, 109),
('mike', 'lovesme', 3, 110),
('phoenix', 'man', 3, 111),
('naruto', 'kun', 3, 112),
('byaku', 'gan', 3, 113),
('eight', 'gate', 3, 114),
('ash', 'ash', 3, 115),
('jack', 'jack', 3, 116),
('wer', 'wer', 3, 117),
('shiny', 'shiny', 3, 118),
('genesis', '123', 3, 119),
('', '', 3, 120),
('admin', '123', 3, 121),
('roroi', 'josh', 3, 122),
('jarvis', 'jarvis', 3, 123),
('jc', 'jc', 3, 124),
('maru', 'maru', 3, 125),
('dobi', 'dapdap', 2, 126),
('kuya', 'wil', 3, 127),
('nyeam', 'myeam', 3, 128),
('xian', 'xian', 3, 129),
('gaza', 'gaza', 3, 130);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `fname` varchar(20) NOT NULL,
  `mname` varchar(10) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `admin_id` int(10) NOT NULL,
  `account_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`fname`, `mname`, `lname`, `admin_id`, `account_id`) VALUES
('ryann', 'emmanuel', 'calub', 1, 1),
('alex', 'pelle', 'avila', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `choices`
--

CREATE TABLE `choices` (
  `a` varchar(1000) NOT NULL,
  `b` varchar(1000) NOT NULL,
  `c` varchar(1000) NOT NULL,
  `d` varchar(1000) NOT NULL,
  `gr_group` int(10) NOT NULL,
  `q_num` int(10) NOT NULL,
  `q_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `choices`
--

INSERT INTO `choices` (`a`, `b`, `c`, `d`, `gr_group`, `q_num`, `q_id`) VALUES
('kwak kwak', 'kwek kwek', 'kwok kwok', 'kwuk kwuk', 1, 1, 1),
('red', 'blue', 'itlog na maalat', 'pink', 1, 2, 2),
('once a year', 'once a month', 'once a week', 'never', 1, 3, 3),
('mulawin', 'ravena', 'maya', 'agila', 1, 4, 4),
('wow', 'wew', 'wiw', 'wuw', 1, 5, 5),
('Philippines', 'Canada', 'Hongkong', 'China', 1, 6, 6),
('Herd', 'Murder', 'Pride', 'School', 1, 7, 7),
('1914', '1941', '1975', '1945', 1, 8, 8),
('1981', '1998', '1945', '1964', 1, 9, 9),
('1850s', '1880s', '1930s', '1950s', 2, 1, 10),
('Report', 'Field', 'Record', 'File', 2, 2, 11),
('Order of Significance', 'Open Software', 'Operating System', 'Optical Sensor', 2, 3, 12),
('1850s', '1860s', '1870s', '1900s', 2, 4, 13),
('Image file', 'Animation/movie file', 'Audio file', 'MS Office document', 2, 5, 14),
('1950s', '1960s', '1970s', '1980s', 2, 6, 15),
('Sound', 'Remote control', 'Color balance', 'High voltage', 2, 7, 16),
('Flash', 'Flange', 'Fury', 'Fram', 2, 8, 17),
('wala', 'meron', 'pwede', 'oo', 2, 9, 18);

-- --------------------------------------------------------

--
-- Table structure for table `continent`
--

CREATE TABLE `continent` (
  `cont_code` char(2) NOT NULL COMMENT 'Continent code',
  `cont_name` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `continent`
--

INSERT INTO `continent` (`cont_code`, `cont_name`) VALUES
('AF', 'Africa'),
('AN', 'Antarctica'),
('AS', 'Asia'),
('EU', 'Europe'),
('NA', 'North America'),
('OC', 'Oceania'),
('SA', 'South America');

-- --------------------------------------------------------

--
-- Table structure for table `coordinator`
--

CREATE TABLE `coordinator` (
  `coordinator_id` int(10) NOT NULL,
  `account_id` int(10) NOT NULL,
  `school_id` int(10) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coordinator`
--

INSERT INTO `coordinator` (`coordinator_id`, `account_id`, `school_id`, `fname`, `mname`, `lname`) VALUES
(1, 3, 1, 'jason', 'baby', 'sillona'),
(2, 4, 2, 'danjen', 'eran', 'david'),
(3, 12, 3, 'Jaysen', 'Lim', 'Chungwa'),
(16, 28, 12, 'John', 'Paul', 'Pope'),
(17, 29, 17, 'John', 'Chris', 'Santos'),
(18, 30, 18, 'Mika', 'Chan', 'Vilar'),
(19, 31, 19, 'Joshua', 'Monreal', 'Magora'),
(20, 32, 20, 'Kianna', 'Aruta', 'Guillano'),
(21, 33, 21, 'Saint', 'paul', 'Pablo'),
(22, 35, 22, 'Mobi', 'Moba', 'Mobe'),
(23, 36, 23, 'jca', 'jco', 'jci'),
(24, 37, 24, 'Jepoy', 'Jopay', 'Jomay'),
(25, 38, 25, 'Jello', 'Mello', 'Quello'),
(26, 39, 25, 'cagayan', 'cagayan', 'cagayan'),
(27, 126, 26, 'dadasdas', 'dada', 'dadada');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` int(10) NOT NULL,
  `country_code` varchar(2) NOT NULL COMMENT 'Two-letter country code (ISO 3166-1 alpha-2)',
  `country_name` varchar(64) NOT NULL COMMENT 'English country name',
  `cont_code` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country_code`, `country_name`, `cont_code`) VALUES
(1, 'AD', 'Andorra', 'EU'),
(2, 'AE', 'United Arab Emirates', 'AS'),
(3, 'AF', 'Afghanistan', 'AS'),
(4, 'AG', 'Antigua and Barbuda', 'NA'),
(5, 'AI', 'Anguilla', 'NA'),
(6, 'AL', 'Albania', 'EU'),
(7, 'AM', 'Armenia', 'AS'),
(8, 'AN', 'Netherlands Antilles', 'NA'),
(9, 'AO', 'Angola', 'AF'),
(10, 'AQ', 'Antarctica', 'AN'),
(11, 'AR', 'Argentina', 'SA'),
(12, 'AS', 'American Samoa', 'OC'),
(13, 'AT', 'Austria', 'EU'),
(14, 'AU', 'Australia', 'OC'),
(15, 'AW', 'Aruba', 'NA'),
(16, 'AX', 'Aland', 'EU'),
(17, 'AZ', 'Azerbaijan', 'AS'),
(18, 'BA', 'Bosnia & Herzegovina', 'EU'),
(19, 'BB', 'Barbados', 'NA'),
(20, 'BD', 'Bangladesh', 'AS'),
(21, 'BE', 'Belgium', 'EU'),
(22, 'BF', 'Burkina Faso', 'AF'),
(23, 'BG', 'Bulgaria', 'EU'),
(24, 'BH', 'Bahrain', 'AS'),
(25, 'BI', 'Burundi', 'AF'),
(26, 'BJ', 'Benin', 'AF'),
(27, 'BL', 'Saint Barthelemy', 'NA'),
(28, 'BM', 'Bermuda', 'NA'),
(29, 'BN', 'Brunei Darussalam', 'AS'),
(30, 'BO', 'Bolivia', 'SA'),
(31, 'BR', 'Brazil', 'SA'),
(32, 'BS', 'Bahamas', 'NA'),
(33, 'BT', 'Bhutan', 'AS'),
(34, 'BV', 'Bouvet Island', 'AN'),
(35, 'BW', 'Botswana', 'AF'),
(36, 'BY', 'Belarus', 'EU'),
(37, 'BZ', 'Belize', 'NA'),
(38, 'CA', 'Canada', 'NA'),
(39, 'CC', 'Cocos (Keeling) Islands', 'AS'),
(40, 'CD', 'Congo (Kinshasa)', 'AF'),
(41, 'CF', 'Central African Republic', 'AF'),
(42, 'CG', 'Congo (Brazzaville)', 'AF'),
(43, 'CH', 'Switzerland', 'EU'),
(44, 'CI', 'Cote d''Ivoire', 'AF'),
(45, 'CK', 'Cook Islands', 'OC'),
(46, 'CL', 'Chile', 'SA'),
(47, 'CM', 'Cameroon', 'AF'),
(48, 'CN', 'China', 'AS'),
(49, 'CO', 'Colombia', 'SA'),
(50, 'CR', 'Costa Rica', 'NA'),
(51, 'CU', 'Cuba', 'NA'),
(52, 'CV', 'Cape Verde', 'AF'),
(53, 'CX', 'Christmas Island', 'AS'),
(54, 'CY', 'Cyprus', 'AS'),
(55, 'CZ', 'Czech Republic', 'EU'),
(56, 'DE', 'Germany', 'EU'),
(57, 'DJ', 'Djibouti', 'AF'),
(58, 'DK', 'Denmark', 'EU'),
(59, 'DM', 'Dominica', 'NA'),
(60, 'DO', 'Dominican Republic', 'NA'),
(61, 'DZ', 'Algeria', 'AF'),
(62, 'EC', 'Ecuador', 'SA'),
(63, 'EE', 'Estonia', 'EU'),
(64, 'EG', 'Egypt', 'AF'),
(65, 'EH', 'Western Sahara', 'AF'),
(66, 'ER', 'Eritrea', 'AF'),
(67, 'ES', 'Spain', 'EU'),
(68, 'ET', 'Ethiopia', 'AF'),
(69, 'FI', 'Finland', 'EU'),
(70, 'FJ', 'Fiji', 'OC'),
(71, 'FK', 'Falkland Islands', 'SA'),
(72, 'FM', 'Micronesia', 'OC'),
(73, 'FO', 'Faroe Islands', 'EU'),
(74, 'FR', 'France', 'EU'),
(75, 'GA', 'Gabon', 'AF'),
(76, 'GB', 'United Kingdom', 'EU'),
(77, 'GD', 'Grenada', 'NA'),
(78, 'GE', 'Georgia', 'AS'),
(79, 'GF', 'French Guiana', 'SA'),
(80, 'GG', 'Guernsey', 'EU'),
(81, 'GH', 'Ghana', 'AF'),
(82, 'GI', 'Gibraltar', 'EU'),
(83, 'GL', 'Greenland', 'NA'),
(84, 'GM', 'Gambia', 'AF'),
(85, 'GN', 'Guinea', 'AF'),
(86, 'GP', 'Guadeloupe', 'NA'),
(87, 'GQ', 'Equatorial Guinea', 'AF'),
(88, 'GR', 'Greece', 'EU'),
(89, 'GS', 'South Georgia & South Sandwich Islands', 'AN'),
(90, 'GT', 'Guatemala', 'NA'),
(91, 'GU', 'Guam', 'OC'),
(92, 'GW', 'Guinea-Bissau', 'AF'),
(93, 'GY', 'Guyana', 'SA'),
(94, 'HK', 'Hong Kong', 'AS'),
(95, 'HM', 'Heard and McDonald Islands', 'AN'),
(96, 'HN', 'Honduras', 'NA'),
(97, 'HR', 'Croatia', 'EU'),
(98, 'HT', 'Haiti', 'NA'),
(99, 'HU', 'Hungary', 'EU'),
(100, 'ID', 'Indonesia', 'AS'),
(101, 'IE', 'Ireland', 'EU'),
(102, 'IL', 'Israel', 'AS'),
(103, 'IM', 'Isle of Man', 'EU'),
(104, 'IN', 'India', 'AS'),
(105, 'IO', 'British Indian Ocean Territory', 'AS'),
(106, 'IQ', 'Iraq', 'AS'),
(107, 'IR', 'Iran', 'AS'),
(108, 'IS', 'Iceland', 'EU'),
(109, 'IT', 'Italy', 'EU'),
(110, 'JE', 'Jersey', 'EU'),
(111, 'JM', 'Jamaica', 'NA'),
(112, 'JO', 'Jordan', 'AS'),
(113, 'JP', 'Japan', 'AS'),
(114, 'KE', 'Kenya', 'AF'),
(115, 'KG', 'Kyrgyzstan', 'AS'),
(116, 'KH', 'Cambodia', 'AS'),
(117, 'KI', 'Kiribati', 'OC'),
(118, 'KM', 'Comoros', 'AF'),
(119, 'KN', 'Saint Kitts & Nevis', 'NA'),
(120, 'KP', 'Korea, North', 'AS'),
(121, 'KR', 'Korea, South', 'AS'),
(122, 'KW', 'Kuwait', 'AS'),
(123, 'KY', 'Cayman Islands', 'NA'),
(124, 'KZ', 'Kazakhstan', 'AS'),
(125, 'LA', 'Laos', 'AS'),
(126, 'LB', 'Lebanon', 'AS'),
(127, 'LC', 'Saint Lucia', 'NA'),
(128, 'LI', 'Liechtenstein', 'EU'),
(129, 'LK', 'Sri Lanka', 'AS'),
(130, 'LR', 'Liberia', 'AF'),
(131, 'LS', 'Lesotho', 'AF'),
(132, 'LT', 'Lithuania', 'EU'),
(133, 'LU', 'Luxembourg', 'EU'),
(134, 'LV', 'Latvia', 'EU'),
(135, 'LY', 'Libya', 'AF'),
(136, 'MA', 'Morocco', 'AF'),
(137, 'MC', 'Monaco', 'EU'),
(138, 'MD', 'Moldova', 'EU'),
(139, 'ME', 'Montenegro', 'EU'),
(140, 'MF', 'Saint Martin (French part)', 'NA'),
(141, 'MG', 'Madagascar', 'AF'),
(142, 'MH', 'Marshall Islands', 'OC'),
(143, 'MK', 'Macedonia', 'EU'),
(144, 'ML', 'Mali', 'AF'),
(145, 'MM', 'Myanmar', 'AS'),
(146, 'MN', 'Mongolia', 'AS'),
(147, 'MO', 'Macau', 'AS'),
(148, 'MP', 'Northern Mariana Islands', 'OC'),
(149, 'MQ', 'Martinique', 'NA'),
(150, 'MR', 'Mauritania', 'AF'),
(151, 'MS', 'Montserrat', 'NA'),
(152, 'MT', 'Malta', 'EU'),
(153, 'MU', 'Mauritius', 'AF'),
(154, 'MV', 'Maldives', 'AS'),
(155, 'MW', 'Malawi', 'AF'),
(156, 'MX', 'Mexico', 'NA'),
(157, 'MY', 'Malaysia', 'AS'),
(158, 'MZ', 'Mozambique', 'AF'),
(159, 'NA', 'Namibia', 'AF'),
(160, 'NC', 'New Caledonia', 'OC'),
(161, 'NE', 'Niger', 'AF'),
(162, 'NF', 'Norfolk Island', 'OC'),
(163, 'NG', 'Nigeria', 'AF'),
(164, 'NI', 'Nicaragua', 'NA'),
(165, 'NL', 'Netherlands', 'EU'),
(166, 'NO', 'Norway', 'EU'),
(167, 'NP', 'Nepal', 'AS'),
(168, 'NR', 'Nauru', 'OC'),
(169, 'NU', 'Niue', 'OC'),
(170, 'NZ', 'New Zealand', 'OC'),
(171, 'OM', 'Oman', 'AS'),
(172, 'PA', 'Panama', 'NA'),
(173, 'PE', 'Peru', 'SA'),
(174, 'PF', 'French Polynesia', 'OC'),
(175, 'PG', 'Papua New Guinea', 'OC'),
(176, 'PH', 'Philippines', 'AS'),
(177, 'PK', 'Pakistan', 'AS'),
(178, 'PL', 'Poland', 'EU'),
(179, 'PM', 'Saint Pierre & Miquelon', 'NA'),
(180, 'PN', 'Pitcairn', 'OC'),
(181, 'PR', 'Puerto Rico', 'NA'),
(182, 'PS', 'Palestine', 'AS'),
(183, 'PT', 'Portugal', 'EU'),
(184, 'PW', 'Palau', 'OC'),
(185, 'PY', 'Paraguay', 'SA'),
(186, 'QA', 'Qatar', 'AS'),
(187, 'RE', 'Reunion', 'AF'),
(188, 'RO', 'Romania', 'EU'),
(189, 'RS', 'Serbia', 'EU'),
(190, 'RU', 'Russian Federation', 'EU'),
(191, 'RW', 'Rwanda', 'AF'),
(192, 'SA', 'Saudi Arabia', 'AS'),
(193, 'SB', 'Solomon Islands', 'OC'),
(194, 'SC', 'Seychelles', 'AF'),
(195, 'SD', 'Sudan', 'AF'),
(196, 'SE', 'Sweden', 'EU'),
(197, 'SG', 'Singapore', 'AS'),
(198, 'SH', 'Saint Helena', 'AF'),
(199, 'SI', 'Slovenia', 'EU'),
(200, 'SJ', 'Svalbard & Jan Mayen Islands', 'EU'),
(201, 'SK', 'Slovakia', 'EU'),
(202, 'SL', 'Sierra Leone', 'AF'),
(203, 'SM', 'San Marino', 'EU'),
(204, 'SN', 'Senegal', 'AF'),
(205, 'SO', 'Somalia', 'AF'),
(206, 'SR', 'Suriname', 'SA'),
(207, 'ST', 'Sao Tome & Principe', 'AF'),
(208, 'SV', 'El Salvador', 'NA'),
(209, 'SY', 'Syria', 'AS'),
(210, 'SZ', 'Swaziland', 'AF'),
(211, 'TC', 'Turks & Caicos Islands', 'NA'),
(212, 'TD', 'Chad', 'AF'),
(213, 'TF', 'French Southern Lands', 'AN'),
(214, 'TG', 'Togo', 'AF'),
(215, 'TH', 'Thailand', 'AS'),
(216, 'TJ', 'Tajikistan', 'AS'),
(217, 'TK', 'Tokelau', 'OC'),
(218, 'TL', 'Timor-Leste', 'AS'),
(219, 'TM', 'Turkmenistan', 'AS'),
(220, 'TN', 'Tunisia', 'AF'),
(221, 'TO', 'Tonga', 'OC'),
(222, 'TR', 'Turkey', 'AS'),
(223, 'TT', 'Trinidad & Tobago', 'NA'),
(224, 'TV', 'Tuvalu', 'OC'),
(225, 'TW', 'Taiwan', 'AS'),
(226, 'TZ', 'Tanzania', 'AF'),
(227, 'UA', 'Ukraine', 'EU'),
(228, 'UG', 'Uganda', 'AF'),
(229, 'UM', 'United States Minor Outlying Islands', 'OC'),
(230, 'US', 'United States of America', 'NA'),
(231, 'UY', 'Uruguay', 'SA'),
(232, 'UZ', 'Uzbekistan', 'AS'),
(233, 'VA', 'Vatican City', 'EU'),
(234, 'VC', 'Saint Vincent & the Grenadines', 'NA'),
(235, 'VE', 'Venezuela', 'SA'),
(236, 'VG', 'Virgin Islands, British', 'NA'),
(237, 'VI', 'Virgin Islands, U.S.', 'NA'),
(238, 'VN', 'Vietnam', 'AS'),
(239, 'VU', 'Vanuatu', 'OC'),
(240, 'WF', 'Wallis & Futuna Islands', 'OC'),
(241, 'WS', 'Samoa', 'OC'),
(242, 'YE', 'Yemen', 'AS'),
(243, 'YT', 'Mayotte', 'AF'),
(244, 'ZA', 'South Africa', 'AF'),
(245, 'ZM', 'Zambia', 'AF'),
(246, 'ZW', 'Zimbabwe', 'AF');

-- --------------------------------------------------------

--
-- Table structure for table `diocese`
--

CREATE TABLE `diocese` (
  `diocese_id` int(10) NOT NULL,
  `diocese_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diocese`
--

INSERT INTO `diocese` (`diocese_id`, `diocese_name`) VALUES
(1, 'Alaminos'),
(2, 'San Fernando(La Union)'),
(3, 'Baguio'),
(4, 'Ilagan'),
(5, 'Bayombong'),
(6, 'Iba'),
(7, 'San Fernando(Pamapanga)'),
(8, 'Tarlac'),
(9, 'Balanga'),
(10, 'Cabanatuan'),
(11, 'Lipa'),
(12, 'Antipolo'),
(13, 'Imus'),
(14, 'San Pablo'),
(15, 'Calapan'),
(16, 'Manila'),
(17, 'Novaliches'),
(18, 'Caloocan'),
(19, 'Jaro'),
(20, 'Bacolod'),
(21, 'Tagbilaran'),
(22, 'Capiz'),
(23, 'Cagayan De Oro'),
(24, 'Malaybalay'),
(25, 'Iligan'),
(26, 'Zamboanga Sibugay'),
(27, 'Laguna');

-- --------------------------------------------------------

--
-- Table structure for table `family`
--

CREATE TABLE `family` (
  `fam_id` int(10) NOT NULL,
  `parent_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `family`
--

INSERT INTO `family` (`fam_id`, `parent_id`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11),
(12, 12),
(13, 13),
(14, 14),
(15, 15),
(16, 16),
(17, 17),
(18, 18),
(19, 19),
(20, 20),
(21, 21),
(22, 22),
(23, 23),
(24, 24),
(31, 52),
(32, 53),
(33, 54),
(34, 55),
(35, 56),
(36, 57),
(37, 58),
(38, 59),
(39, 60),
(40, 61),
(41, 62),
(42, 63),
(43, 64),
(44, 66),
(45, 67),
(46, 68),
(47, 69),
(48, 70);

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `job_id` int(10) NOT NULL,
  `job_name` varchar(40) NOT NULL,
  `job_based` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`job_id`, `job_name`, `job_based`) VALUES
(1, 'Clerk', 'LB'),
(2, 'Engineer', 'LB'),
(3, 'General Work', 'LB'),
(4, 'Healthcare', 'LB'),
(5, 'Hospitality', 'LB'),
(6, 'Manufacturer', 'LB'),
(7, 'Marine Engineer', 'SB'),
(8, 'Rigger', 'SB'),
(9, 'Sales', 'LB'),
(10, 'Welder', 'LB');

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `parent_id` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `parent_who` varchar(10) NOT NULL,
  `country_id` int(20) NOT NULL,
  `job_id` int(10) NOT NULL,
  `years_stay` int(10) NOT NULL,
  `parent_when` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`parent_id`, `email`, `parent_who`, `country_id`, `job_id`, `years_stay`, `parent_when`) VALUES
(1, '', 'nanay', 8, 1, 2, 3),
(2, '', 'nanay', 14, 10, 1, 2),
(3, '', 'nanay', 52, 5, 2, 1),
(4, '', 'tatay', 230, 3, 4, 1),
(5, '', 'tatay', 31, 1, 4, 2),
(6, '', 'nanay', 6, 4, 3, 2),
(7, '', 'tatay', 156, 10, 1, 3),
(8, '', 'tatay', 19, 9, 2, 2),
(9, '', 'nanay', 22, 1, 3, 2),
(10, '', 'nanay', 1, 3, 2, 2),
(11, '', 'nanay', 22, 5, 4, 4),
(12, '', 'tatay', 6, 6, 3, 3),
(13, '', 'tatay', 3, 2, 3, 3),
(14, '', 'tatay', 181, 8, 1, 1),
(15, '', 'tatay', 18, 5, 2, 2),
(16, '', 'nanay', 8, 4, 4, 1),
(17, '', 'nanay', 23, 3, 2, 2),
(18, '', 'tatay', 11, 6, 4, 2),
(19, '', 'tatay', 23, 6, 1, 1),
(20, '', 'tatay', 17, 10, 3, 2),
(21, '', 'tatay', 20, 7, 4, 4),
(22, '', 'pareho', 16, 5, 1, 4),
(23, '', 'pareho', 20, 4, 3, 3),
(24, '', 'tatay', 9, 4, 4, 1),
(25, '', 'tatay', 4, 4, 1, 1),
(35, '', 'nanay', 41, 6, 8, 1),
(36, '', 'tatay', 14, 8, 16, 1),
(37, '', 'tatay', 120, 7, 9, 3),
(38, '', 'nanay', 12, 3, 6, 4),
(39, '', 'nanay', 24, 7, 12, 3),
(40, '', 'tatay', 17, 8, 9, 1),
(41, '', 'nanay', 28, 2, 4, 1),
(42, '', 'pareho', 14, 4, 3, 1),
(43, '', 'pareho', 18, 3, 8, 2),
(44, '', 'tatay', 12, 4, 4, 1),
(45, '', 'tatay', 29, 4, 19, 2),
(46, '', 'pareho', 10, 6, 3, 2),
(47, '', 'pareho', 14, 3, 9, 4),
(48, '', 'tatay', 8, 5, 11, 4),
(49, '', 'tatay', 9, 4, 3, 2),
(50, '', 'tatay', 6, 4, 4, 2),
(51, '', 'pareho', 11, 3, 7, 4),
(52, '', 'nanay', 6, 5, 8, 4),
(53, '', 'tatay', 4, 4, 15, 3),
(54, '', 'nanay', 5, 5, 7, 2),
(55, '', 'tatay', 4, 3, 2, 3),
(56, '', 'tatay', 6, 3, 10, 4),
(57, '', 'tatay', 7, 4, 7, 2),
(58, '', 'nanay', 16, 5, 9, 5),
(59, '', 'nanay', 3, 2, 6, 3),
(60, '', 'nanay', 13, 4, 14, 4),
(61, '', 'tatay', 23, 3, 14, 4),
(62, '', 'pareho', 7, 4, 9, 3),
(63, '', 'tatay', 15, 7, 13, 4),
(65, '', 'nanay', 14, 10, 10, 3),
(66, '', 'tatay', 21, 5, 3, 2),
(67, '', 'tatay', 11, 2, 2, 1),
(68, '', 'tatay', 4, 5, 1, 1),
(69, '', 'tatay', 2, 3, 3, 2),
(70, '', 'tatay', 244, 6, 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `pre_test`
--

CREATE TABLE `pre_test` (
  `test_id` int(10) NOT NULL,
  `stud_id` int(11) NOT NULL,
  `question_1` varchar(5) NOT NULL,
  `question_2` varchar(5) NOT NULL,
  `question_3` varchar(5) NOT NULL,
  `question_4` varchar(5) NOT NULL,
  `question_5` varchar(5) NOT NULL,
  `question_6` varchar(5) NOT NULL,
  `question_7` varchar(5) NOT NULL,
  `question_8` varchar(5) NOT NULL,
  `question_9` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pre_test`
--

INSERT INTO `pre_test` (`test_id`, `stud_id`, `question_1`, `question_2`, `question_3`, `question_4`, `question_5`, `question_6`, `question_7`, `question_8`, `question_9`) VALUES
(1, 201710001, 'a', 'a', 'b', 'b', 'b', 'd', 'c', 'd', 'd'),
(2, 201610002, 'a', 'b', 'c', 'd', 'c', 'a', 'a', 'd', 'b'),
(7, 201210003, 'c', 'c', 'c', 'a', 'c', 'a', 'c', 'a', 'b'),
(8, 201310005, 'a', 'e', 'b', 'd', 'c', 'a', 'c', 'b', 'a'),
(10, 201710004, 'a', 'c', 'e', 'a', 'c', 'b', 'b', 'a', 'c'),
(13, 201510006, 'd', 'a', 'd', 'b', 'c', 'b', 'a', 'c', 'a'),
(14, 201710007, 'c', 'c', 'c', 'a', 'b', 'c', 'a', 'a', 'a'),
(15, 201710008, 'b', 'b', 'b', 'd', 'a', 'b', 'a', 'c', 'b'),
(16, 201710009, 'c', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a'),
(17, 201710014, 'b', 'a', 'c', 'b', 'a', 'c', 'b', 'a', 'c'),
(18, 201710015, 'a', 'b', 'c', 'd', 'a', 'c', 'a', 'b', 'a'),
(19, 201710016, 'b', 'a', 'b', 'a', 'b', 'a', 'b', 'a', 'b'),
(20, 201710017, 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a'),
(21, 201710018, 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a'),
(22, 201710019, 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a'),
(23, 201710020, 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a'),
(24, 201710021, 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a'),
(25, 201710022, 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a'),
(26, 201710023, 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a'),
(27, 201710024, 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a'),
(28, 201710025, 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a'),
(34, 201710059, 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a'),
(37, 201710044, 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a'),
(38, 201710079, 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a'),
(39, 201710080, 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a'),
(40, 201710081, 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a'),
(41, 201710082, 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'b', 'a'),
(42, 201710086, 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b'),
(43, 201710087, 'b', 'a', 'a', 'b', 'a', 'b', 'a', 'b', 'a'),
(44, 201710088, 'a', 'a', 'a', 'b', 'b', 'b', 'a', 'a', 'a'),
(45, 201710089, 'e', 'a', 'c', 'e', 'a', 'c', 'c', 'a', 'c'),
(46, 201710090, 'b', 'a', 'c', 'a', 'c', 'b', 'c', 'b', 'a'),
(47, 201710010, 'c', 'c', 'c', 'c', 'c', 'c', 'c', 'c', 'c'),
(48, 201710011, 'e', 'e', 'e', 'e', 'c', 'c', 'c', 'c', 'c'),
(49, 201710012, 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a'),
(50, 201710013, 'c', 'a', 'c', 'b', 'a', 'b', 'b', 'b', 'b'),
(51, 201710014, 'd', 'd', 'd', 'c', 'c', 'c', 'b', 'a', 'b'),
(52, 201710015, 'a', 'b', 'd', 'e', 'c', 'a', 'b', 'b', 'b'),
(53, 201710016, 'd', 'a', 'e', 'd', 'b', 'b', 'a', 'b', 'c'),
(54, 201710017, 'e', 'd', 'e', 'b', 'c', 'a', 'b', 'b', 'b'),
(55, 201710018, 'e', 'b', 'c', 'd', 'b', 'a', 'a', 'b', 'b'),
(56, 201710019, 'e', 'c', 'a', 'c', 'c', 'c', 'b', 'c', ''),
(57, 201710020, 'd', 'c', 'c', 'c', 'a', 'b', 'b', 'a', 'b'),
(58, 201710021, 'd', 'b', 'a', 'b', 'c', 'b', 'a', 'b', 'a'),
(59, 201710022, 'a', 'd', 'c', 'e', 'b', 'a', 'b', 'b', 'b'),
(60, 201710023, 'e', 'c', 'b', 'b', 'a', 'a', 'b', 'b', 'b'),
(61, 201710024, 'e', 'b', 'a', 'a', 'b', 'a', 'b', 'b', 'a'),
(62, 201710025, 'e', 'c', 'b', 'a', 'b', 'a', 'b', 'c', 'b'),
(63, 201710026, 'e', 'c', 'd', 'e', 'b', 'b', 'b', 'b', 'b'),
(65, 201710029, 'e', 'b', 'b', 'b', 'c', 'b', 'a', 'b', 'c'),
(66, 201710030, 'd', 'b', 'c', 'd', 'c', 'c', 'b', 'b', 'b'),
(67, 201710031, 'a', 'c', 'd', 'd', 'b', 'a', 'b', 'c', 'b'),
(68, 201710032, 'e', 'b', 'e', 'c', 'b', 'c', 'b', 'a', 'a'),
(69, 201710033, 'e', 'a', 'd', 'd', 'a', 'b', 'b', 'b', 'a'),
(70, 201710034, 'a', 'b', 'c', 'c', 'c', 'c', 'a', 'b', 'b'),
(71, 201710035, 'e', 'b', 'c', 'c', 'c', 'a', 'a', 'c', 'b'),
(72, 201710036, 'a', 'b', 'a', 'e', 'a', 'b', 'c', 'b', 'a'),
(73, 201710091, 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a'),
(75, 201710092, 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a'),
(76, 201710093, 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a'),
(77, 201110004, 'b', 'b', 'b', 'b', 'a', 'a', 'a', 'a', 'a'),
(78, 201310293, 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a'),
(79, 201619293, 'a', 'a', 'a', 'a', 'a', 'b', 'b', 'b', 'b'),
(80, 420, 'a', 'b', 'c', 'b', 'a', 'a', 'c', 'a', 'b');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `question` varchar(1000) NOT NULL,
  `gr_group` int(10) NOT NULL,
  `q_id` int(10) NOT NULL,
  `q_num` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question`, `gr_group`, `q_id`, `q_num`) VALUES
('Sino ang leader na nagsabi ng?', 1, 1, 1),
('Ano ang mas pula?', 1, 2, 2),
('Ilang beses ka naliligo?', 1, 3, 3),
('Ano ang mas mataas ang lipad?', 1, 4, 4),
('What does the Italian word ragu mean in English??', 1, 5, 5),
('Toronto is the capital city of?', 1, 6, 6),
('What can a group of crows be called??', 1, 7, 7),
('In what year did WWI begin?', 1, 8, 8),
('In what year did the rocket "Sputnik" launch for the 1st time?', 1, 9, 9),
('In which decade was the American Institute of Electrical Engineers (AIEE) founded?', 2, 10, 1),
('What is part of a database that holds only one type of information?', 2, 11, 2),
('''OS'' computer abbreviation usually means ?', 2, 12, 3),
('In which decade with the first transatlantic radio broadcast occur?', 2, 13, 4),
('''.MOV'' extension refers usually to what kind of file?', 2, 14, 5),
('In which decade was the SPICE simulator introduced?', 2, 15, 6),
('Most modern TV''s draw power even if turned off. The circuit the power is used in does what function?', 2, 16, 7),
('Which is a type of Electrically-Erasable Programmable Read-Only Memory?', 2, 17, 8),
('The purpose of choke in tube light is ?', 2, 18, 9),
('''.MPG'' extension refers usually to what kind of file?', 3, 19, 1),
('Who is largely responsible for breaking the German Enigma codes, created a test that provided a foundation for artificial intelligence?', 3, 20, 2),
('Who developed Yahoo?', 3, 21, 3),
('Made from a variety of materials, such as carbon, which inhibits the flow of current...?', 3, 22, 4),
('The most common format for a home video recorder is VHS. VHS stands for...?', 3, 23, 5),
('What does VVVF stand for?', 3, 24, 6),
('What frequency range is the High Frequency band?', 3, 25, 7),
('The first step to getting output from a laser is to excite an active medium. What is this process called?', 3, 26, 8),
('What is the relationship between resistivity r and conductivity s?', 3, 27, 9),
('Which motor is NOT suitable for use as a DC machine?', 4, 28, 1),
('A given signal''s second harmonic is twice the given signal''s __________ frequency...?', 4, 29, 2),
('In which year was MIDI(Musical Instrument Digital Interface) introduced?', 4, 30, 3),
('What does the term PLC stand for?', 4, 31, 4),
('When measuring the characteristics of a small-signal amplifier, say for a radio receiver, one might be concerned with its "Noise..."?', 4, 32, 5),
('DB'' computer abbreviation usually means ?', 4, 33, 6),
('''.INI'' extension refers usually to what kind of file?', 4, 34, 7),
('The sampling rate, (how many samples per second are stored) for a CD is...?', 4, 35, 8),
('Who created Pretty Good Privacy (PGP)?', 4, 36, 9),
('What do we call a network whose elements may be separated by some distance? It usually involves two or more small networks and dedicated high-speed telephone lines.', 5, 37, 1),
('After the first photons of light are produced, which process is responsible for amplification of the light?', 5, 38, 2),
('	\r\nWhich is NOT an acceptable method of distributing small power outlets throughout an open plan office area?', 5, 39, 3),
('	\r\nSometimes computers and cache registers in a foodmart are connected to a UPS system. What does UPS mean?', 5, 40, 4),
('	\r\nWho co-founded Hotmail in 1996 and then sold the company to Microsoft?', 5, 41, 5),
('.TMP'' extension refers usually to what kind of file?', 5, 42, 6),
('In the UK, what type of installation requires a fireman''s switch?', 5, 43, 7),
('	\r\nThe electromagnetic coils on the neck of the picture tube or tubes which pull the electron beam from side to side and up and down are called a...?', 5, 44, 8),
('In the United States the television broadcast standard is...?', 5, 45, 9),
('in a color television set using a picture tube a high voltage is used to accelerate electron beams to light the screen. That voltage is about...?', 6, 46, 1),
('The transformer that develops the high voltage in a home television is commonly called a...?', 6, 47, 2),
('Which consists of two plates separated by a dielectric and can store a charge?', 6, 48, 3),
('What do we call a collection of two or more computers that are located within a limited distance of each other and that are connected to each other directly or indirectly?', 6, 49, 4),
('	\r\n''.JPG'' extension refers usually to what kind of file?', 6, 50, 5),
('What does AM mean?', 6, 51, 6),
('	\r\nIn what year was the "@" chosen for its use in e-mail addresses?', 6, 52, 7),
('	\r\n''.TXT'' extension refers usually to what kind of file?', 6, 53, 8),
('What was the first ARPANET message?', 6, 54, 9),
('The NTSC (National Television Standards Committee) is also used in the country of...?', 7, 55, 1),
('	\r\n"FET" is a type of transistor, Its full name is ________ Effect Transistor...?', 7, 56, 2),
('What are three types of lasers?', 7, 57, 3),
('What will a UPS be used for in a building?', 7, 58, 4),
('Who built the world''s first binary digit computer: Z1...?', 7, 59, 5),
('Compact discs, (according to the original CD specifications) hold how many minutes of music?', 7, 60, 6),
('Once the active medium is excited, the first photons of light are produced by which physical process?', 7, 61, 7),
('''DTP'' computer abbreviation usually means ?', 7, 62, 8),
('The average power (in watts) used by a 20 to 25 inch home color television is...?', 7, 63, 9);

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `school_name` varchar(50) NOT NULL,
  `school_id` int(10) NOT NULL,
  `diocese_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`school_name`, `school_id`, `diocese_id`) VALUES
('Pamantasan ng lungsod ng maynila', 1, 16),
('Pamantsan ng lungsod ng laguna', 2, 11),
('Our Lady of Fatima', 3, 18),
('Manila Cathedral School', 9, 16),
('Espiritu Santo Parochial School', 11, 16),
('Sacred Heart Academy', 16, 9),
('Paco Catholic School', 17, 16),
('Mother of Christ Montessori Integrated School', 18, 13),
('Our Lady of Perpetual Help Academy', 19, 2),
('Victorious Secret Academy', 20, 3),
('Mater Ecclesai Academy', 21, 14),
('Our Lady of Immaculate Concepcion', 22, 20),
('Our Lady of St. Agatha', 23, 25),
('Jesus the Risen Savior School', 24, 27),
('School of school', 25, 23),
('pamanrasan ng lungsod ng cagayan', 26, 23);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stud_id` int(11) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `mname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `g_level` varchar(20) NOT NULL,
  `school_id` int(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(5) NOT NULL,
  `fam_id` int(10) NOT NULL,
  `account_id` int(10) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stud_id`, `fname`, `mname`, `lname`, `g_level`, `school_id`, `gender`, `age`, `fam_id`, `account_id`, `email`) VALUES
(420, 'dapdap', 'dudap', 'doobi', '2', 1, 'Male', 7, 0, 127, ''),
(9878, 'justine', 'nyeaaaam', 'magalong', '1', 1, 'Female', 14, 0, 128, ''),
(23232, 'danielle', 'midunno', 'quillo', '2', 1, 'Female', 12, 0, 130, ''),
(12312321, 'vemice', 'og', 'cruz', '4', 1, 'Female', 9, 0, 129, ''),
(201110004, 'Joshua', 'Albutra', 'Mamangun', '7', 1, 'Male', 13, 0, 121, 'jmdeomana@gmail.com'),
(201310293, 'jc', 'jc', 'jc', '7', 1, 'Male', 15, 0, 124, ''),
(201610002, 'leah', 'sis', 'gotti', '2', 2, 'Female', 9, 5, 6, 'jmdeomana@gmail.com'),
(201619293, 'maru', 'maru', 'maru', '5', 1, 'Male', 11, 0, 125, ''),
(201710001, 'natalie', 'baby', 'monroe', '1', 1, 'Female', 8, 24, 5, 'jelloquillo96@gmail.com'),
(201710008, 'Angelo', 'Agravante', 'Quillo', '7', 2, 'Male', 14, 7, 25, 'jelloquillo96@gmail.com'),
(201710009, 'Maru', 'Caveiro', 'De OmaÃ±a', '7', 2, 'Male', 13, 8, 26, 'jmdeomana@gmail.com'),
(201710010, 'Danjen', 'Eran', 'David', '5', 2, 'Male', 11, 9, 27, 'danjen.eran.david@gmail.com'),
(201710011, 'Johnny', 'Sins', 'Santos', '6', 2, 'Male', 13, 10, 34, 'danjen.eran.david@gmail.com'),
(201710012, 'Naruto', 'Jepoy', 'Uzumaki', '6', 2, 'Male', 13, 11, 40, 'jmdeomana@gmail.com'),
(201710013, 'Sarada', 'Jepoy', 'Uchiha', '5', 2, 'Female', 12, 12, 41, 'jmdeomana@gmail.com'),
(201710014, 'Raffy', 'Duffy', 'Serrano', '5', 1, 'Male', 12, 13, 42, 'jmdeomana@gmail.com'),
(201710015, 'Boots', 'Dora', 'Chico', '7', 1, 'Female', 14, 14, 43, 'jelloquillo96@gmail.com'),
(201710016, 'Mark', 'Jel', 'Sumena', '8', 1, 'Male', 15, 15, 44, 'jelloquillo96@gmail.com'),
(201710017, 'Qwe', 'Qw', 'Qwerty', '7', 1, 'Male', 13, 16, 45, 'jelloquillo96@gmail.com'),
(201710018, 'Chice', 'Chici', 'Chica', '6', 1, 'Female', 13, 17, 46, 'jelloquillo96@gmail.com'),
(201710019, 'qwe', 'qwe', 'qwe', '6', 1, 'Male', 12, 18, 47, 'jelloquillo96@gmail.com'),
(201710020, 'qq', 'qq', 'qq', '8', 1, 'Male', 15, 19, 48, 'jelloquillo96@gmail.com'),
(201710021, 'Joey', 'Jo', 'Joe', '4', 3, 'Male', 9, 20, 49, 'jelloquillo96@gmail.com'),
(201710022, 'Jane', 'Je', 'Jae', '5', 3, 'Female', 10, 21, 50, 'jelloquillo96@gmail.com'),
(201710023, 'm', 'm', 'm', '6', 3, 'Male', 11, 22, 51, 'jelloquillo96@gmail.com'),
(201710024, 'k', 'k', 'k', '7', 3, 'Female', 13, 23, 52, 'jelloquillo96@gmail.com'),
(201710025, 'l', 'l', 'l', '8', 3, '', 14, 31, 53, 'danjen.eran.david@gmail.com'),
(201710026, 'Ulrich', 'Walrus', 'Torrente', '6', 17, 'Male', 11, 32, 54, 'danjen.eran.david@gmail.com'),
(201710027, 'Rock', 'Melvin', 'Lee', '7', 1, 'Male', 13, 27, 114, 'danjen.eran.david@gmail.com'),
(201710028, 'Chris', 'Basero', 'Soriano', '5', 17, 'Male', 9, 33, 55, 'danjen.eran.david@gmail.com'),
(201710029, 'Mark', 'Patch', 'Tan', '7', 17, 'Male', 11, 34, 57, 'danjen.eran.david@gmail.com'),
(201710030, 'Tim', 'Ong', 'Lorena', '4', 17, 'Male', 9, 35, 58, 'jelloquillo96@gmail.com'),
(201710031, 'John', 'Legend', 'Austria', '6', 17, 'Male', 11, 36, 59, 'jelloquillo96@gmail.com'),
(201710032, 'Lia', 'Alba', 'Benitez', '7', 18, 'Female', 12, 37, 60, 'jelloquillo96@gmail.com'),
(201710033, 'Andrea', 'Yance', 'Amparo', '8', 18, 'Female', 13, 38, 61, 'jelloquillo96@gmail.com'),
(201710034, 'James', 'Chua', 'Caballero', '4', 18, 'Male', 9, 39, 62, 'jelloquillo96@gmail.com'),
(201710035, 'Brad', 'Lee', 'Vitao', '5', 18, 'Male', 10, 40, 63, 'jelloquillo96@gmail.com'),
(201710036, 'Gina', 'Alajar', 'Cortez', '8', 18, 'Female', 13, 41, 64, 'jelloquillo96@gmail.com'),
(201710037, 'Carlo', 'Carlos', 'Arcilla', '4', 19, 'Male', 9, 42, 65, 'jelloquillo96@gmail.com'),
(201710038, 'Rolando', 'Orlando', 'Gamulo', '6', 19, 'Male', 11, 43, 66, 'jelloquillo96@gmail.com'),
(201710039, 'Sammy', 'Calvin', 'Piatos', '3', 19, 'Male', 8, 44, 67, 'jelloquillo96@gmail.com'),
(201710040, 'Cristofer', 'Gerard', 'Lara', '6', 19, 'Male', 11, 45, 68, 'jelloquillo96@gmail.com'),
(201710041, 'Jefferson', 'Ignacio', 'Vizcaya', '8', 19, 'Male', 13, 46, 69, 'jelloquillo96@gmail.com'),
(201710042, 'Hernan', 'Leonardo', 'Villar', '9', 20, 'Male', 14, 47, 70, 'jelloquillo96@gmail.com'),
(201710043, 'Ian', 'Dizon', 'Soriano', '6', 20, 'Male', 11, 48, 71, 'jmdeomana@gmail.com'),
(201710044, 'Arnaldo', 'Alanzo', 'Alba', '4', 20, 'Male', 9, 49, 72, 'jmdeomana@gmail.com'),
(201710045, 'Jana', 'Gahan', 'Rodriguez', '5', 20, 'Female', 10, 50, 73, 'jmdeomana@gmail.com'),
(201710046, 'Clara', 'Tagunin', 'Flores', '7', 20, 'Female', 12, 51, 74, 'jmdeomana@gmail.com'),
(201710047, 'Fred', 'England', 'Espana', '6', 21, 'Male', 11, 52, 75, 'jmdeomana@gmail.com'),
(201710048, 'Hannah', 'Tan', 'Chua', '7', 21, 'Female', 12, 53, 76, 'jmdeomana@gmail.com'),
(201710049, 'Kent', 'Villarico', 'Silva', '8', 21, 'Male', 13, 54, 77, 'jmdeomana@gmail.com'),
(201710050, 'Kenneth', 'Buo', 'Benoza', '4', 21, 'Male', 9, 55, 78, 'jmdeomana@gmail.com'),
(201710051, 'Andrea', 'Yao', 'Torresyap', '5', 21, 'Female', 10, 56, 79, 'jmdeomana@gmail.com'),
(201710052, 'Anly', 'Ong', 'Ang', '2', 22, 'Male', 7, 57, 80, 'jmdeomana@gmail.com'),
(201710053, 'Darcy', 'Ismol', 'Uykee', '3', 22, 'Male', 8, 58, 81, 'jmdeomana@gmail.com'),
(201710054, 'Brianna', 'Coleen', '`Tecson', '4', 22, 'Female', 9, 59, 82, 'jmdeomana@gmail.com'),
(201710055, 'Bea', 'Park', 'Morelos', '5', 22, 'Female', 10, 60, 83, 'danjen.eran.david@gmail.com'),
(201710056, 'Matthew', 'Rivera', 'Lim', '7', 22, 'Male', 12, 61, 84, 'danjen.eran.david@gmail.com'),
(201710057, 'Boy', 'Girk', 'Abunda', '10', 23, 'Male', 13, 62, 85, 'danjen.eran.david@gmail.com'),
(201710058, 'Anne', 'Kulit', 'Curtis', '7', 23, 'Female', 12, 63, 86, 'danjen.eran.david@gmail.com'),
(201710059, 'Marian', 'Dantes', 'Rivera', '6', 23, 'Female', 11, 64, 87, 'danjen.eran.david@gmail.com'),
(201710060, 'Dingdong', 'Rivera', 'Dantes', '4', 23, 'Male', 9, 65, 88, 'danjen.eran.david@gmail.com'),
(201710061, 'Joe', 'Jai', 'Barredo', '6', 23, 'Male', 11, 66, 89, 'danjen.eran.david@gmail.com'),
(201710062, 'Master', 'Lol', 'Yi', '4', 24, 'Male', 9, 67, 90, 'danjen.eran.david@gmail.com'),
(201710063, 'Rylai', 'Ice', 'Crestfall', '5', 24, 'Female', 10, 68, 91, 'danjen.eran.david@gmail.com'),
(201710064, 'Abcde', 'PP', 'Cruz', '6', 24, 'Male', 11, 69, 92, 'danjen.eran.david@gmail.com'),
(201710065, 'Bruce', 'Batman', 'Wayne', '6', 24, 'Male', 11, 70, 93, 'danjen.eran.david@gmail.com'),
(201710066, 'Clark', 'Superman', 'Kent', '7', 24, 'Male', 12, 71, 94, 'jmdeomana@gmail.com'),
(201710067, 'Peter', 'Spiderman', 'Parker', '8', 25, 'Male', 13, 72, 95, 'jmdeomana@gmail.com'),
(201710068, 'Alessia', 'Ganda', 'Cara', '10', 25, 'Female', 15, 73, 96, 'jmdeomana@gmail.com'),
(201710069, 'Quillop', 'Rufino', 'Jello', '6', 25, 'Male', 18, 74, 97, 'jmdeomana@gmail.com'),
(201710070, 'Faith', 'Pelle', 'Avila', '7', 25, 'Female', 12, 75, 98, 'jmdeomana@gmail.com'),
(201710071, 'Adrian', 'Quillo', 'Kilo', '4', 25, 'Male', 10, 76, 99, 'jmdeomana@gmail.com'),
(201710072, 'Taylor', 'Alison', 'Swift', '9', 25, 'Female', 16, 77, 100, 'jmdeomana@gmail.com'),
(201710073, 'Stephen', 'Chef', 'Curry', '8', 25, 'Male', 15, 78, 101, 'jmdeomana@gmail.com'),
(201710074, 'Klay', 'Mr.RObot', 'Thompson', '7', 25, 'Male', 14, 79, 102, 'danjen.eran.david@gmail.com'),
(201710075, 'Kevin', 'KD', 'Durant', '6', 25, 'Male', 12, 80, 103, 'danjen.eran.david@gmail.com'),
(201710076, 'Draymond', 'TF', 'Green', '5', 25, 'Male', 11, 81, 104, 'danjen.eran.david@gmail.com'),
(201710077, 'Ellaine Joy', 'Clemente', 'Conwi', '10', 2, 'Female', 16, 82, 105, 'danjen.eran.david@gmail.com'),
(201710078, 'maui', 'moana', 'taylor', '9', 24, 'Female', 15, 83, 106, 'danjen.eran.david@gmail.com'),
(201710079, 'angelita', 'cutie', 'sillona', '9', 2, 'Male', 19, 84, 107, 'danjen.eran.david@gmail.com'),
(201710080, 'Daniel', 'abadecio', 'David', '6', 2, 'Male', 12, 85, 108, 'danjen.eran.david@gmail.com'),
(201710081, 'mo', 'to', 'shembot', '8', 2, 'Female', 13, 86, 109, 'jelloquillo96@gmail.com'),
(201710082, 'weng', 'pelle', 'Avila', '9', 2, 'Female', 16, 87, 110, 'jelloquillo96@gmail.com'),
(201710083, 'Jason', 'Chungwa', 'Sillon', '5', 2, 'Male', 12, 6, 20, 'jelloquillo96@gmail.com'),
(201710084, 'marco', 'the', 'phoenix', '9', 3, 'Male', 15, 25, 111, 'jelloquillo96@gmail.com'),
(201710085, 'jack', 'the', 'ripper', '5', 3, 'Male', 11, 29, 116, 'jelloquillo96@gmail.com'),
(201710086, 'Hinata', 'Hyuuga', 'Uzumaki', '8', 3, 'Female', 14, 30, 112, 'jelloquillo96@gmail.com'),
(201710087, 'Neji', 'Byakugan', 'Hyuuga', '6', 1, 'Male', 12, 26, 113, 'jelloquillo96@gmail.com'),
(201710091, 'wer', 'wer', 'wer', '1', 2, 'Male', 7, 42, 117, 'jelloquillo96@gmail.com'),
(201710092, 'shiny', 'shiny', 'shiny', '1', 1, 'Male', 8, 43, 118, 'jelloquillo96@gmail.com'),
(201710093, 'Santos', 'Marco', 'Genesis', '4', 1, 'Male', 11, 0, 119, 'jelloquillo96@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user_level`
--

CREATE TABLE `user_level` (
  `user_id` int(10) NOT NULL,
  `user_level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_level`
--

INSERT INTO `user_level` (`user_id`, `user_level`) VALUES
(1, 'Admin'),
(2, 'Coordinator'),
(3, 'Student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `choices`
--
ALTER TABLE `choices`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `continent`
--
ALTER TABLE `continent`
  ADD PRIMARY KEY (`cont_code`);

--
-- Indexes for table `coordinator`
--
ALTER TABLE `coordinator`
  ADD PRIMARY KEY (`coordinator_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`),
  ADD UNIQUE KEY `idx_code` (`country_code`) USING BTREE,
  ADD KEY `idx_continent_code` (`cont_code`) USING BTREE;

--
-- Indexes for table `diocese`
--
ALTER TABLE `diocese`
  ADD PRIMARY KEY (`diocese_id`);

--
-- Indexes for table `family`
--
ALTER TABLE `family`
  ADD PRIMARY KEY (`fam_id`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`parent_id`);

--
-- Indexes for table `pre_test`
--
ALTER TABLE `pre_test`
  ADD PRIMARY KEY (`test_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`school_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stud_id`);

--
-- Indexes for table `user_level`
--
ALTER TABLE `user_level`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `account_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `choices`
--
ALTER TABLE `choices`
  MODIFY `q_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `coordinator`
--
ALTER TABLE `coordinator`
  MODIFY `coordinator_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;
--
-- AUTO_INCREMENT for table `diocese`
--
ALTER TABLE `diocese`
  MODIFY `diocese_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `family`
--
ALTER TABLE `family`
  MODIFY `fam_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `parent`
--
ALTER TABLE `parent`
  MODIFY `parent_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT for table `pre_test`
--
ALTER TABLE `pre_test`
  MODIFY `test_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `q_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `school_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `country`
--
ALTER TABLE `country`
  ADD CONSTRAINT `country_ibfk_1` FOREIGN KEY (`cont_code`) REFERENCES `continent` (`cont_code`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
