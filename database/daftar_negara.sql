-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2019 at 03:30 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `faq_batan`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_negara`
--

CREATE TABLE `daftar_negara` (
  `ID_negara` int(200) NOT NULL,
  `Nama_negara` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_negara`
--

INSERT INTO `daftar_negara` (`ID_negara`, `Nama_negara`) VALUES
(1, 'Afganistan'),
(2, 'Afrika Selatan'),
(3, 'Afrika Tengah'),
(4, 'Albania'),
(5, 'Aljazair'),
(6, 'Amerika Serikat'),
(7, 'Andorra'),
(8, 'Angola'),
(9, 'Antigua dan Barbuda'),
(10, 'Arab Saudi'),
(11, 'Argentina'),
(12, 'Armenia'),
(13, 'Australia'),
(14, 'Austria'),
(15, 'Azerbaijan'),
(16, 'Bahama'),
(17, 'Bahrain'),
(18, 'Bangladesh'),
(19, 'Barbados'),
(20, 'Belanda'),
(21, 'Belarus'),
(22, 'Belgia'),
(23, 'Belize'),
(24, 'Benin'),
(25, 'Bhutan'),
(26, 'Bolivia'),
(27, 'Bosnia dan Herzegovina'),
(28, 'Botswana'),
(29, 'Brasil'),
(30, 'Britania Raya'),
(31, 'Brunei Darussalam'),
(32, 'Bulgaria'),
(33, 'Burkina Faso'),
(34, 'Burundi'),
(35, 'Ceko'),
(36, 'Chad'),
(37, 'Chili'),
(38, 'China'),
(39, 'Denmark'),
(40, 'Djibouti'),
(41, 'Dominika'),
(42, 'Ekuador'),
(43, 'El Salvador'),
(44, 'Eritrea'),
(45, 'Estonia'),
(46, 'Ethiopia'),
(47, 'Fiji'),
(48, 'Filipina'),
(49, 'Finlandia'),
(50, 'Gabon'),
(51, 'Gambia'),
(52, 'Georgia'),
(53, 'Ghana'),
(54, 'Grenada'),
(55, 'Guatemala'),
(56, 'Guinea'),
(57, 'Guinea Bissau'),
(58, 'Guinea Khatulistiwa'),
(59, 'Guyana'),
(60, 'Haiti'),
(61, 'Honduras'),
(62, 'Hongaria'),
(63, 'India'),
(64, 'Indonesia'),
(65, 'Irak'),
(66, 'Iran'),
(67, 'Irlandia'),
(68, 'Islandia'),
(69, 'Israel'),
(70, 'Italia'),
(71, 'Jamaika'),
(72, 'Jepang'),
(73, 'Jerman'),
(74, 'Kamboja'),
(75, 'Kamerun'),
(76, 'Kanada'),
(77, 'Kazakhstan'),
(78, 'Kenya'),
(79, 'Kirgizstan'),
(80, 'Kiribati'),
(81, 'Kolombia'),
(82, 'Komoro'),
(83, 'Republik Kongo'),
(84, 'Korea Selatan'),
(85, 'Korea Utara'),
(86, 'Kosta Rika'),
(87, 'Kroasia'),
(88, 'Kuba'),
(89, 'Kuwait'),
(90, 'Laos'),
(91, 'Latvia'),
(92, 'Lebanon'),
(93, 'Lesotho'),
(94, 'Liberia'),
(95, 'Libya'),
(96, 'Liechtenstein'),
(97, 'Lituania'),
(98, 'Luksemburg'),
(99, 'Madagaskar'),
(100, 'Makedonia'),
(101, 'Maladewa'),
(102, 'Malawi'),
(103, 'Malaysia'),
(104, 'Mali'),
(105, 'Malta'),
(106, 'Maroko'),
(107, 'Marshall'),
(108, 'Mauritania'),
(109, 'Mauritius'),
(110, 'Meksiko'),
(111, 'Mesir'),
(112, 'Mikronesia'),
(113, 'Moldova'),
(114, 'Monako'),
(115, 'Mongolia'),
(116, 'Montenegro'),
(117, 'Mozambik'),
(118, 'Myanmar'),
(119, 'Namibia'),
(120, 'Nauru'),
(121, 'Nepal'),
(122, 'Niger'),
(123, 'Nigeria'),
(124, 'Nikaragua'),
(125, 'Norwegia'),
(126, 'Oman'),
(127, 'Pakistan'),
(128, 'Palau'),
(129, 'Panama'),
(130, 'Pantai Gading'),
(131, 'Papua Nugini'),
(132, 'Paraguay'),
(133, 'Perancis'),
(134, 'Peru'),
(135, 'Polandia'),
(136, 'Portugal'),
(137, 'Qatar'),
(138, 'Republik Demokratik Kongo'),
(139, 'Republik Dominika'),
(140, 'Rumania'),
(141, 'Rusia'),
(142, 'Rwanda'),
(143, 'Saint Kitts and Nevis'),
(144, 'Saint Lucia'),
(145, 'Saint Vincent and the Grenadines'),
(146, 'Samoa'),
(147, 'San Marino'),
(148, 'Sao Tome and Principe'),
(149, 'Selandia Baru'),
(150, 'Senegal'),
(151, 'Serbia'),
(152, 'Seychelles'),
(153, 'Sierra Leone'),
(154, 'Singapura'),
(155, 'Siprus'),
(156, 'Slovenia'),
(157, 'Slowakia'),
(158, 'Solomon'),
(159, 'Somalia'),
(160, 'Spanyol'),
(161, 'Sri Lanka'),
(162, 'Sudan'),
(163, 'Sudan Selatan'),
(164, 'Suriah'),
(165, 'Suriname'),
(166, 'Swaziland'),
(167, 'Swedia'),
(168, 'Swiss'),
(169, 'Tajikistan'),
(170, 'Tanjung Verde'),
(171, 'Tanzania'),
(172, 'Thailand'),
(173, 'Timor Leste'),
(174, 'Togo'),
(175, 'Tonga'),
(176, 'Trinidad and Tobago'),
(177, 'Tunisia'),
(178, 'Turki'),
(179, 'Turkmenistan'),
(180, 'Tuvalu'),
(181, 'Uganda'),
(182, 'Ukrania'),
(183, 'Uni Emirat Arab'),
(184, 'Uruguay'),
(185, 'Uzbekistan'),
(186, 'Vanuatu'),
(187, 'Venezuela'),
(188, 'Vietnam'),
(189, 'Yaman'),
(190, 'Yordania'),
(191, 'Yunani'),
(192, 'Zambia'),
(193, 'Zimbabwe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_negara`
--
ALTER TABLE `daftar_negara`
  ADD PRIMARY KEY (`ID_negara`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_negara`
--
ALTER TABLE `daftar_negara`
  MODIFY `ID_negara` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=194;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
