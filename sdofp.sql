-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2018 at 03:31 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

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
  `pword` varchar(255) NOT NULL,
  `user_id` int(10) NOT NULL,
  `account_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`username`, `pword`, `user_id`, `account_id`) VALUES
('mamshie', '$2y$10$6CV8BejjjSzKaXHjulqjce.AJCbsLWyW4JlsE9gotXknqL1oVRaN.', 1, 1),
('incogtito', '$2y$10$OxfeRmYPWzb5E0GSXqxHB.jQA/nwR/8XtIOmrJwopZJglhfCpSJmW', 1, 2),
('danjen', '$2y$10$woLlSpZkB.HVbfrzoJ7mM.WQlrzrtjl6xQ7lNeykEVhjalJH8pPkW', 2, 3),
('hai', '$2y$10$ToxIYfMmxJUpTGzC4/5iT.mDuvfuZPO1uTr9.de3Y4GF2y/SJLV8e', 2, 4),
('jaysen123', '$2y$10$/8IePLms.IaSWACOxkqH9.No03O4nkQtioO6CbBeZZDFMf6gAqqKa', 2, 12),
('jc', '$2y$10$VBf82KWNaMOZsOEfk8zmHePU6d8KUCm47V/XSg4f5ACqm3gijMgb6', 2, 29),
('mikmik', '$2y$10$3aB448H1yTTszmoEVqaFQezFZ3XpRseJuOJ0/cOrBjN8uPrJeksWW', 2, 30),
('josh', '$2y$10$7zkunQWyuY3mX2qr/1tDCe.V8hMzaNvthwETty.Boo5yPoDYBYVx2', 2, 31),
('kia', '$2y$10$w/CmB2nFNUpJxagCDuEizO7i4t9/7CK6Zpx8aInsVFqgjfhKrHWLW', 2, 32),
('paul', '$2y$10$kwkZ4RJlXth.SV2EgvB.xOBA//Y1lp8pSk5yc3ZZznivriV4N.Sei', 2, 33),
('mobo', '$2y$10$v03DLAFUXHtjDmRDRMmYXu8mzpl4w/DZRE3Q3xcgbF2nLkrXwmR7a', 2, 35),
('jco', '$2y$10$s.uQn44i.hGvrwPteuGhNO53G4Mvw5qG913Xb9onqWB9V7m3NnTUe', 2, 36),
('jojo', '$2y$10$rCMDijVBkYvEo4Nu9IUWYOGzcH1TMslwq7TPfZTzvCuycBZ1DEPvi', 2, 37),
('jelo', '$2y$10$5H0JIRpJqrZMZ7SMpp9mL.x/cktUWixvM6sHGzeRGGPKWJ1Yj2B5O', 2, 38),
('de', '$2y$10$QnAVbwnL..L.13I6OYfrke5ew0Jo6erR2qKyVcJ.TtxVno3gD10k.', 2, 39),
('201310001', '$2y$10$dX6pQGQ4xO6ZhdMjCXiEe.QOi0rHaBoCNw82PzkRD7EnlqkafCZ6G', 3, 140),
('201310002', '$2y$10$ENKhoJmEp4/jUNTWTjk/eO.FcVlB0n1Gi4CUadrUNw.FwhGEUbumS', 3, 141),
('201310003', '$2y$10$kT2ezxx5fS8oQanpLFcbiuy9eFj8hQJvsTBmWO056yL5ktsw3Ktle', 3, 142),
('201310004', '$2y$10$2fIyIaJHzyg19vwy.xgcMuZ3Znw1vnIlPxmr.Td3FONF8OWdHXHHy', 3, 143),
('201310005', '$2y$10$7xnPE5xJAnK1mowC72XvaOoBZko6c8Li6E3nMZeilHad07QCtA2uO', 3, 144),
('201310006', '$2y$10$lqmzrUPNVFOzk9ZuBwsXv.yNObTHWTJoj.wrSNC8mymu51xa8fPo.', 3, 145),
('201310007', '$2y$10$vZdTq72ZE/sSijSErag57Op7PqaUxNIsDvUvBtsFi8Zd2zHfS1tZO', 3, 146),
('201310008', '$2y$10$jhjdNidbM02MP2GTdeDHvOuCop1B2uKGzfkqR0qjKV5kLfrIURfba', 3, 147),
('201320001', '$2y$10$T2tcmbPbBXDq0K05Vr4Pwu2bHce3qqjRmwx456e.GpDANwxESv6xW', 3, 148),
('201320002', '$2y$10$05t0plbFjgLkUs8w2Yk2B.AnpY18vIRFz56JmN3C5eMiLXtEInaVq', 3, 149),
('201320003', '$2y$10$5TotBMChfRzDQhuPwb9lxeSux2ipQip3qDk9GgvsLfI0Ic2bu2IHS', 3, 150),
('201320004', '$2y$10$NV1nRvwmS7UTI8fW7FortunZPhBl9ygAcKT9/eeUPjJRtVl/NDEWy', 3, 151),
('201310009', '$2y$10$dVMNPi3XQvtgwrzM0wtnUOQRSxkNaaRxzYyaZDlQh6h4YaLB.gPGa', 3, 152),
('201310010', '$2y$10$piJzwBkLG/O7wKacGGlqp.5W9DLg7umpYqKglsr5BKZEVNmh4ssjO', 3, 153),
('201810001', '$2y$10$VaNZz.jqYKl3Y7H.JCBQ6.kgA.NLN7hvvZfIPY3bQ9U.Mg5DJHkI.', 3, 154),
('201812345', '$2y$10$..Rr6GVk0cJIrAWf07OU3egGGLJm8H.z9DXPV6uP0qg3k/07BIQES', 3, 155),
('201812346', '$2y$10$2nU7cvNXUxQKfvRqnjfODuKcq/cCfpcSvvQ9DKyRleCoMFhn2qLEW', 3, 156),
('201154321', '$2y$10$IbwLW4fDSN4bQXgcf8L9u.noMtzXazuAzb1UlZ/6gqBSRujljaLG6', 3, 157),
('201156753', '$2y$10$mJIioztTJHdvWqfh80RnMexY9UoWnqzjYlCqRNmWSRr9J09op.9Ky', 3, 158),
('201445876', '$2y$10$qNKGs67MsrVdKNn1snwD.OFbk.D3haAL4dGJ307npblh0gpARfUyq', 3, 159),
('201492678', '$2y$10$r.bbx2tEUjhJAytdirBcT.xh4fFfDhaNZsyTqfvnrFQMoNm1JaqqC', 3, 160),
('201416372', '$2y$10$eM8riXW/px0Jg9xuxV5SJuSHkTbF5iFh.7HWewlaopTiV6A01hAT2', 3, 161),
('201123457', '$2y$10$elCD35xASiHqigolibfYlOm14UHpqzjGV2cQCFYz9JKF2Ocq49jlO', 3, 162),
('201127215', '$2y$10$l/sL3SlxVwb0SA2k4Pj8SuPzOCTmUADKMB9hU59vn4/S5d3Q5cen6', 3, 163),
('201325981', '$2y$10$0ThpD/IBLyDzDjhHKoow5eIUFFAvavFweNkVnaivbLR28.nhCEC2.', 3, 164),
('201223175', '$2y$10$69rUOVz5N8M6hH8BD73NZu4W1eKWlKg7FLvoGloS9HiHn1H06M6Lm', 3, 165),
('201226184', '$2y$10$6sIMHJ6fRsH8/HCQ32y.8OMe01ojBkHyW9Xg2k7QAbLgdfYYM0h3C', 3, 166),
('201845423', '$2y$10$oXBPtozxbOvbZFPPHjpFouPn2.nix.7MHQMQQQv4AeG9tFUBud6Yq', 3, 167),
('201809999', '$2y$10$d9EKF0mT5RTf6lmoXTOwX.mDrY1EUguWXV0cXsShBHE15UAmAFjl6', 3, 168),
('201819999', '$2y$10$Eiy1Y3OvXi/uHyUtLImTMO6kG0bM6ROLgF/awgeYY.6/JZUSASVjC', 3, 169),
('201859999', '$2y$10$nPiQJMx5HmVlNNvOY8QNke6WFpcd3Jyil7YICz/9pjBt5RO51a95a', 3, 170),
('201609090', '$2y$10$h2CzJmYd/JtIBx.LyII03OI/mOho8c06.LBWWzCoCXicpryh9T7jC', 3, 171),
('201508080', '$2y$10$GiqtS8cg2RLcRsXjX15mD.paZRi6tGCdN87/sW2dOs4seDEqaAVy6', 3, 172),
('201698989', '$2y$10$CmnaqZuWiPUxyTbpeUBpAOpJeNJfVWAVpXesBT7mDDgIB5nBnfNpW', 3, 173),
('201607607', '$2y$10$Gatjmm7656pi42CQpAYv5uKG1hOHF7LTdoEyvoH9dU7RQSu5fwi4S', 3, 174),
('201790779', '$2y$10$ou0C.3Phzj7W6UQWbFX88epn8TD4haUDHOIHGt76hjVFz9cG2z85G', 3, 175),
('201751515', '$2y$10$cBq/6.2TPWB624CFpDU3XeVo6DShl0qolj/xiUFO842aINt7hm.Xa', 3, 176),
('201845212', '$2y$10$ahHJAnMjtxYVZehs1Sqe5uwPFfJTsJUKjuhpfhjA4FACF67fHOvLS', 3, 177),
('201876587', '$2y$10$eL9Wf/qBMIXembKjiLFfLuGZOa2CIj6MrmDiXJOloX75wWpFcVupu', 3, 178),
('200722222', '$2y$10$1/gPQ20u1jtxMKumS1fZpeXT0/L6Mo4ZX0QjtLk70MoOz3mmXUBA2', 3, 179);

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
('galit', 'masaya', 'malungkot', 'walang naramdaman', 1, 1, 1),
('galit', 'masaya', 'malungkot', 'walang naramdaman', 1, 2, 2),
('galit', 'masaya', 'malungkot', 'walang naramdaman', 1, 3, 3),
('video chat', 'sulat', 'telepono', 'cellphone', 1, 4, 4),
('masasayang balita tungkol sa pagaaral at ng pamilya', 'di magandang balita tungkol sa pagaaral at ng pamilya', 'humihingi na padalhan ng mga gamit at pera', 'hinihiling na sana ay umuwi na ang magulang', 1, 5, 5),
('walang trabaho sa pilipinas', 'maliit na kita sa pilipinas', 'penitisyon ng kamag anak', 'Sa ibang bansa lamang may offer na trabaho', 1, 6, 6),
('Oo', 'Hindi', 'Di tiyak', 'Pinilit ng kamag anak', 1, 7, 7),
('Oo', 'Hindi', 'Di tiyak', 'Pinilit ng kamag anak', 1, 8, 8),
('Oo', 'Hindi', 'Di tiyak', 'BakiT?', 1, 9, 9),
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
(44, 'CI', 'Cote d\'Ivoire', 'AF'),
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
(27, 'Laguna'),
(28, 'Kentucky');

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
(9, 10),
(10, 11),
(11, 12),
(12, 13),
(13, 14),
(14, 15),
(15, 16),
(16, 17),
(17, 18);

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
(1, '', 'nanay', 104, 7, 3, 1),
(2, '', 'tatay', 156, 2, 1, 2),
(3, '', 'tatay', 2, 6, 2, 4),
(4, '', 'tatay', 9, 7, 5, 4),
(5, '', 'tatay', 28, 6, 4, 3),
(6, '', 'nanay', 31, 5, 3, 3),
(7, '', 'tatay', 2, 2, 2, 2),
(8, '', 'tatay', 38, 9, 3, 1),
(9, '', 'nanay', 7, 9, 3, 3),
(10, '', 'nanay', 6, 3, 2, 3),
(11, '', 'tatay', 91, 7, 4, 3),
(12, '', 'tatay', 42, 6, 4, 3),
(13, '', 'nanay', 4, 4, 1, 2),
(14, '', 'tatay', 8, 2, 3, 3),
(15, '', 'nanay', 7, 7, 2, 1),
(16, '', 'tatay', 209, 2, 3, 1),
(17, '', 'nanay', 15, 2, 3, 3),
(18, '', 'tatay', 31, 5, 2, 3);

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
(88, 201310001, 'b', 'b', 'c', 'c', 'b', 'b', 'b', 'b', 'b'),
(89, 201310002, 'b', 'b', 'a', 'c', 'b', 'c', 'c', 'c', 'c'),
(90, 201310003, 'c', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b'),
(91, 201310004, 'a', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b'),
(92, 201310006, 'a', 'b', 'b', 'd', 'c', 'c', 'c', 'c', 'b'),
(93, 201310007, 'b', 'a', 'c', 'b', 'b', 'b', 'a', 'c', 'a'),
(94, 201320001, 'a', 'b', 'c', 'c', 'c', 'a', 'c', 'b', 'c'),
(95, 201320002, 'a', 'b', 'b', 'a', 'c', 'c', 'a', 'b', 'b'),
(96, 201310005, 'a', 'c', 'b', 'a', 'c', 'c', 'a', 'c', 'c'),
(97, 201320003, 'a', 'b', 'c', 'a', 'c', 'b', 'c', 'c', 'b'),
(98, 201320004, 'a', 'b', 'a', 'd', 'c', 'c', 'c', 'c', 'c'),
(99, 201310008, 'a', 'c', 'b', 'b', 'c', 'c', 'c', 'b', 'b'),
(100, 201310010, 'a', 'c', 'c', 'c', 'c', 'a', 'c', 'c', 'c'),
(101, 201310009, 'a', 'c', 'b', 'b', 'c', 'c', 'b', 'c', 'c'),
(102, 201810001, 'a', 'b', 'b', 'c', 'c', 'b', 'b', 'b', 'c'),
(103, 201812345, 'b', 'b', 'd', 'd', 'c', 'c', 'c', 'b', 'c'),
(104, 201812346, 'a', 'b', 'c', 'c', 'c', 'b', 'c', 'b', 'b'),
(105, 200722222, 'b', 'a', 'c', 'c', 'a', 'a', 'c', 'a', 'b');

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
('Nang unang umalis paupuntang ibang bansa ang iyong magulang, ano ang iyong naramdaman', 1, 1, 1),
('Kapag dumarating ang iyong magulang mula sa ibang bansa, ano ang iyong naramdaman', 1, 2, 2),
('Tuwing muling umaalis ang iyong magulang mula sa ibang bansa , ano ang iyong nararamdaman?', 1, 3, 3),
('Sa papaanong paraan ka nakikipag usap sa iyong magulang sa ibang bansa?', 1, 4, 4),
('Ano ang iyong mensahe kung ikaw ay nakikipag usap sa iyong magulang sa ibang bansa?', 1, 5, 5),
('Sa palagay mo, ano ang dahilan kung bakit pumunta ang iyong magulang sa ibang bansa?', 1, 6, 6),
('Ang pagpunta ba ng iyong magulang sa ibang bansa ay kagustuhan ng buong pamilya?', 1, 7, 7),
('Alam mo ba ang nangyayari sa iyong magulang sa ibang bansa?', 1, 8, 8),
('Kung ikaw ay bibigyan ng pagkakataong magtrabaho sa ibang bansa, ito ba ay iyong pipiliin?', 1, 9, 9),
('In which decade was the American Institute of Electrical Engineers (AIEE) founded?', 2, 10, 1),
('What is part of a database that holds only one type of information?', 2, 11, 2),
('\'OS\' computer abbreviation usually means ?', 2, 12, 3),
('In which decade with the first transatlantic radio broadcast occur?', 2, 13, 4),
('\'.MOV\' extension refers usually to what kind of file?', 2, 14, 5),
('In which decade was the SPICE simulator introduced?', 2, 15, 6),
('Most modern TV\'s draw power even if turned off. The circuit the power is used in does what function?', 2, 16, 7),
('Which is a type of Electrically-Erasable Programmable Read-Only Memory?', 2, 17, 8),
('The purpose of choke in tube light is ?', 2, 18, 9),
('\'.MPG\' extension refers usually to what kind of file?', 3, 19, 1),
('Who is largely responsible for breaking the German Enigma codes, created a test that provided a foundation for artificial intelligence?', 3, 20, 2),
('Who developed Yahoo?', 3, 21, 3),
('Made from a variety of materials, such as carbon, which inhibits the flow of current...?', 3, 22, 4),
('The most common format for a home video recorder is VHS. VHS stands for...?', 3, 23, 5),
('What does VVVF stand for?', 3, 24, 6),
('What frequency range is the High Frequency band?', 3, 25, 7),
('The first step to getting output from a laser is to excite an active medium. What is this process called?', 3, 26, 8),
('What is the relationship between resistivity r and conductivity s?', 3, 27, 9),
('Which motor is NOT suitable for use as a DC machine?', 4, 28, 1),
('A given signal\'s second harmonic is twice the given signal\'s __________ frequency...?', 4, 29, 2),
('In which year was MIDI(Musical Instrument Digital Interface) introduced?', 4, 30, 3),
('What does the term PLC stand for?', 4, 31, 4),
('When measuring the characteristics of a small-signal amplifier, say for a radio receiver, one might be concerned with its \"Noise...\"?', 4, 32, 5),
('DB\' computer abbreviation usually means ?', 4, 33, 6),
('\'.INI\' extension refers usually to what kind of file?', 4, 34, 7),
('The sampling rate, (how many samples per second are stored) for a CD is...?', 4, 35, 8),
('Who created Pretty Good Privacy (PGP)?', 4, 36, 9),
('What do we call a network whose elements may be separated by some distance? It usually involves two or more small networks and dedicated high-speed telephone lines.', 5, 37, 1),
('After the first photons of light are produced, which process is responsible for amplification of the light?', 5, 38, 2),
('	\r\nWhich is NOT an acceptable method of distributing small power outlets throughout an open plan office area?', 5, 39, 3),
('	\r\nSometimes computers and cache registers in a foodmart are connected to a UPS system. What does UPS mean?', 5, 40, 4),
('	\r\nWho co-founded Hotmail in 1996 and then sold the company to Microsoft?', 5, 41, 5),
('.TMP\' extension refers usually to what kind of file?', 5, 42, 6),
('In the UK, what type of installation requires a fireman\'s switch?', 5, 43, 7),
('	\r\nThe electromagnetic coils on the neck of the picture tube or tubes which pull the electron beam from side to side and up and down are called a...?', 5, 44, 8),
('In the United States the television broadcast standard is...?', 5, 45, 9),
('in a color television set using a picture tube a high voltage is used to accelerate electron beams to light the screen. That voltage is about...?', 6, 46, 1),
('The transformer that develops the high voltage in a home television is commonly called a...?', 6, 47, 2),
('Which consists of two plates separated by a dielectric and can store a charge?', 6, 48, 3),
('What do we call a collection of two or more computers that are located within a limited distance of each other and that are connected to each other directly or indirectly?', 6, 49, 4),
('	\r\n\'.JPG\' extension refers usually to what kind of file?', 6, 50, 5),
('What does AM mean?', 6, 51, 6),
('	\r\nIn what year was the \"@\" chosen for its use in e-mail addresses?', 6, 52, 7),
('	\r\n\'.TXT\' extension refers usually to what kind of file?', 6, 53, 8),
('What was the first ARPANET message?', 6, 54, 9),
('The NTSC (National Television Standards Committee) is also used in the country of...?', 7, 55, 1),
('	\r\n\"FET\" is a type of transistor, Its full name is ________ Effect Transistor...?', 7, 56, 2),
('What are three types of lasers?', 7, 57, 3),
('What will a UPS be used for in a building?', 7, 58, 4),
('Who built the world\'s first binary digit computer: Z1...?', 7, 59, 5),
('Compact discs, (according to the original CD specifications) hold how many minutes of music?', 7, 60, 6),
('Once the active medium is excited, the first photons of light are produced by which physical process?', 7, 61, 7),
('\'DTP\' computer abbreviation usually means ?', 7, 62, 8),
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
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `stat_code` varchar(10) NOT NULL,
  `stat_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`stat_code`, `stat_name`) VALUES
('NT', 'Not Taken'),
('T', 'Taken');

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
  `email` varchar(40) NOT NULL,
  `t_stat` varchar(10) NOT NULL,
  `year` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stud_id`, `fname`, `mname`, `lname`, `g_level`, `school_id`, `gender`, `age`, `fam_id`, `account_id`, `email`, `t_stat`, `year`) VALUES
(200722222, 'Jasper', 'Quillo', 'Lao', '6', 2, 'Male', 10, 17, 179, 'jmdeomana@gmail.com', 'Taken', 2018),
(201123457, 'Joey', 'Vera', 'Capati', '2', 1, 'Male', 14, 0, 162, 'jcapati@yahoo.com', 'Not taken', 2018),
(201127215, 'John', 'Ponce', 'Vera', '2', 1, 'Male', 16, 0, 163, 'jvera@gmail.com', 'Not taken', 2018),
(201154321, 'Glydel', 'Cablinga', 'Almanon', '1', 1, 'Female', 15, 0, 157, 'gcablinga@yahoo.com', 'Not taken', 2018),
(201156753, 'Jocel', 'Gforce', 'Sevilla', '1', 1, 'Female', 16, 0, 158, 'jsevilla@gmail.com', 'Not taken', 2018),
(201223175, 'Christopher', 'Jervy', 'Lannister', '2', 1, 'Male', 13, 0, 165, 'clannister@gmail.com', 'Not taken', 2018),
(201226184, 'Lebron', 'Hervy', 'James', '2', 1, 'Male', 13, 0, 166, 'ljames@gmail.com', 'Not taken', 2018),
(201310001, 'Justine Russel', 'Magalong', 'David', '1', 1, 'Female', 6, 1, 140, 'danjen.eran.david@gmail.com', 'Taken', 2018),
(201310002, 'Shaira', 'Marie', 'Santos', '1', 1, 'Female', 7, 2, 141, 'danjen.eran.david@gmail.com', 'Taken', 2017),
(201310003, 'Mario Anghelito', 'Red', 'David', '1', 1, 'Male', 8, 3, 142, 'danjen.eran.david@gmail.com', 'Taken', 2017),
(201310004, 'Dua', 'Cabeiro', 'Lipa', '1', 1, 'Female', 6, 4, 143, 'danjen.eran.david@gmail.com', 'Taken', 2017),
(201310005, 'Melvin', 'Vandot', 'Capati', '1', 1, 'Male', 14, 9, 144, 'danjen.eran.david@gmail.com', 'Taken', 2018),
(201310006, 'Jennine Danielle', 'Eleazar', 'David', '2', 1, 'Female', 9, 5, 145, 'danjen.eran.david@gmail.com', 'Taken', 2018),
(201310007, 'Ronalita', 'De', 'Vera', '3', 1, 'Female', 8, 6, 146, 'danjen.eran.david@gmail.com', 'Taken', 2017),
(201310008, 'Phebe Grace', 'Lagbao', 'Reventar', '4', 1, 'Female', 8, 11, 147, 'danjen.eran.david@gmail.com', 'Taken', 2018),
(201310009, 'Joanne', 'Acoba', 'Concepcion', '5', 1, 'Female', 13, 13, 152, 'jeremybuenaventura@gmail.com', 'Taken', 2017),
(201310010, 'Alexander Rovinz', 'Pelle', 'Avila', '4', 1, 'Male', 14, 12, 153, 'danjen.eran.david@gmail.com', 'Taken', 2018),
(201320001, 'Christian', 'Jay', 'Tabinga', '1', 2, 'Male', 7, 7, 148, 'danjen.eran.david@gmail.com', 'Taken', 2018),
(201320002, 'Nicole Charmaine', 'Lagbao', 'Reventar', '1', 2, 'Female', 8, 8, 149, 'danjen.eran.david@gmail.com', 'Taken', 2017),
(201320003, 'Mark Francis', 'Lakramente', 'Carlos', '4', 2, 'Male', 9, 9, 150, 'danjen.eran.david@gmail.com', 'Taken', 2017),
(201320004, 'Andrea', 'Andes', 'Terona', '3', 2, 'Female', 10, 10, 151, 'danjen.eran.david@gmail.com', 'Taken', 2018),
(201325981, 'Jay', 'Cander', 'De Omana', '2', 1, 'Male', 16, 0, 164, 'jdeomana@gmail.com', 'Not taken', 2018),
(201416372, 'Christian', 'Jervy', 'Tabinga', '1', 1, 'Male', 13, 0, 161, 'ctabinga@gmail.com', 'Not taken', 2018),
(201445876, 'Rachelle', 'Caveiro', 'Taberdo', '1', 1, 'Female', 12, 0, 159, 'rtaberdo@hotmail.com', 'Not taken', 2018),
(201492678, 'Bruno', 'Jupiter', 'Mars', '1', 1, 'Male', 15, 0, 160, 'bmars@gmail.com', 'Not taken', 2018),
(201508080, 'Resty', 'Recto', 'Ramos', '3', 1, 'Female', 10, 0, 172, 'danjen.eran.david@gmail.com', 'Not taken', 2018),
(201607607, 'Janus', 'Vito', 'Silo', '3', 1, 'Male', 10, 0, 174, 'danjen.eran.david@gmail.com', 'Not taken', 2018),
(201609090, 'Ker', 'Kael', 'Invo', '3', 1, 'Female', 12, 0, 171, 'danjen.eran.david@gmail.com', 'Not taken', 2018),
(201698989, 'Chica', 'Chico', 'Quezo', '3', 1, 'Female', 10, 0, 173, 'danjen.eran.david@gmail.com', 'Not taken', 2018),
(201751515, 'Sheila', 'Straw', 'White', '3', 1, 'Female', 12, 0, 176, 'danjen.eran.david@gmail.com', 'Not taken', 2018),
(201790779, 'Lima', 'Piso', 'Pito', '3', 1, 'Male', 10, 0, 175, 'danjen.eran.david@gmail.com', 'Not taken', 2018),
(201809999, 'Haley', 'Paramore', 'Williams', '2', 1, 'Female', 11, 0, 168, 'danjen.eran.david@gmail.com', 'Not taken', 2018),
(201810001, 'Sherilyn', 'Salazar', 'Encabo', '1', 17, 'Female', 16, 14, 154, 'maru.deomana@gmail.com', 'Taken', 2018),
(201812345, 'Christian', 'Calma', 'Nasayao', '5', 1, 'Male', 8, 15, 155, 'danjen.eran.david@gmail.com', 'Taken', 2017),
(201812346, 'Christian', 'Cando', 'Tabinga', '4', 1, 'Male', 6, 16, 156, 'danjen.eran.david@gmail.com', 'Taken', 2017),
(201819999, 'Caitlyn', 'Caca', 'Jones', '2', 1, 'Female', 11, 0, 169, 'danjen.eran.david@gmail.com', 'Not taken', 2018),
(201845212, 'Jeremy', 'Carot', 'Delos Reyes', '3', 1, 'Male', 10, 0, 177, 'danjen.eran.david@gmail.com', 'Not taken', 2018),
(201845423, 'Jenna', 'Janus', 'James', '2', 1, 'Female', 11, 0, 167, 'danjen.eran.david@gmail.com', 'Not taken', 2018),
(201859999, 'Weila', 'Will', 'Willa', '2', 1, 'Female', 13, 0, 170, 'danjen.eran.david@gmail.com', 'Not taken', 2018),
(201876587, 'Luffy', 'Ace', 'Sabo', '3', 1, 'Male', 11, 0, 178, 'danjen.eran.david@gmail.com', 'Not taken', 2018);

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
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`stat_code`);

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
  MODIFY `account_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;
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
  MODIFY `diocese_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `family`
--
ALTER TABLE `family`
  MODIFY `fam_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `parent`
--
ALTER TABLE `parent`
  MODIFY `parent_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `pre_test`
--
ALTER TABLE `pre_test`
  MODIFY `test_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
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
