-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2020 at 03:42 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vinjit`
--

-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--

CREATE TABLE `laptop` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `url` varchar(1000) NOT NULL,
  `price` int(11) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laptop`
--

INSERT INTO `laptop` (`id`, `name`, `url`, `price`, `stock`) VALUES
(2000, 'HP Envy Touch', 'hpenvy.jpg', 58000, 45),
(2001, 'Macbook Air i5 5th G', 'apple-macbook-original-imaejzhrtfkcwafs.jpeg', 60000, 3),
(2002, 'HP Spectre', 'spectrelappy.jpeg', 152290, 9),
(2003, 'Lenovo Ideapad 110', 'lenovo.jpeg', 29999, 5),
(2004, 'Lenovo G50-80 i5', 'lenovo-notebook-original-imaegt5sapt8yhdz.jpeg', 42000, 4),
(2005, 'Apple Macbook Pro i7', 'apple-macbook-pro-notebook-original-imaepax7ajhcmf7v.jpeg', 230000, 2),
(2006, 'Lenovo Yoga 510 i3', 'lenovo-notebook-original-imaezzztyq6zadhj.jpeg', 39999, 678),
(2007, 'HP APU A8', 'hp-notebook-original-imaem34tyzqvpmgu.jpeg', 24999, 89),
(2008, 'Micromax Laptab II', 'micro.jpeg', 10999, 56),
(2009, 'Microsoft Surface Pro 2', 'microsoft.jpeg', 73000, 567),
(2010, 'Dell Inspiron i7', 'dell-inspiron-15-notebook-original-imaeguh8d3uyrzvv.jpeg', 62900, 1);

-- --------------------------------------------------------

--
-- Table structure for table `mobile`
--

CREATE TABLE `mobile` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `url` varchar(1000) NOT NULL,
  `price` int(11) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobile`
--

INSERT INTO `mobile` (`id`, `name`, `url`, `price`, `stock`) VALUES
(1000, 'Iphone 7 plus', 'iphone7-plus-select-2016.png', 70000, 345),
(1001, 'IPhone 7 Jet-black', 'rsz_iphone-7-jet-black.jpg', 60000, 38),
(1002, 'Xolo Q1200 Silver-white', 'Xolo-Q1200.jpg', 14999, 45),
(1003, 'Vertu Bentley Edition', 'vertu_signature_touch_bentley.jpg', 970000, 12),
(1004, 'IPhone 6S plus', 'iphone6s-plus-spacegrey.png', 60000, 98),
(1005, 'Redmi Note 4 64GB ', 'mi-redmi-note-4-na-original-imaeqdxkgwnzrdax.jpeg', 12999, 1),
(1006, 'Lenovo Vibe K5 Plus', 'lenovo-vibe-k5-plus-3-gb-a6020a46-original-imaektyuvypjtwyx.jpeg', 8200, 13),
(1007, 'Samsung S7 Edge', 'samsung-galaxy-s7-edge-na-original-imaegmk5yj2a9nr2.jpeg', 50999, 67),
(1008, 'Samsung A7 White', 'samsung-a7-sm-a700fzwdins-sm-a700fzwdinu-original-imae4zj4qhgqq4gt.jpeg', 24000, 8),
(1009, 'Iphone 5S Spacegrey', '5s.jpeg', 17998, 9),
(51810063, 'Iphone 11 ', '81HSzsIkJdL._AC_SL1500_.jpg', 80000, 5),
(51810092, 'Iphone Xs Max', '71isxv6Wd-L._AC_SX425_.jpg', 72000, 48);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(25) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `isperishable` binary(1) DEFAULT NULL,
  `remarks` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `stock`, `isperishable`, `remarks`) VALUES
(34, 'xolo q1200', 15000, 4, 0x30, 'hi'),
(56, 'apple', 45, 340, 0x31, ''),
(65, 'samsung s7', 56000, 456, 0x30, 'bad phone'),
(442, 'lenovo laptop', 3241234, 34, 0x30, 'nice one'),
(754, 'iphone 7', 63611541, 463425, 0x30, 'good mobile');

-- --------------------------------------------------------

--
-- Table structure for table `q7`
--

CREATE TABLE `q7` (
  `uname` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `q7`
--

INSERT INTO `q7` (`uname`, `pass`) VALUES
('mohan', 'q'),
('saini', 'mac'),
('varun', 'password'),
('vinjit', 'p');

-- --------------------------------------------------------

--
-- Table structure for table `shoe`
--

CREATE TABLE `shoe` (
  `id` int(11) NOT NULL,
  `name` varchar(28) NOT NULL,
  `url` varchar(1000) NOT NULL,
  `price` int(11) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shoe`
--

INSERT INTO `shoe` (`id`, `name`, `url`, `price`, `stock`) VALUES
(4000, 'Adidas Originals Wings', 'wings.jpg', 19999, 2),
(4001, 'Adidas Springblade Pro', 'grey-silvmt-cblack-springblade-pro-m-adidas-9-original-imaen7bbvshvu4r4.jpeg', 19990, 34),
(4002, 'Lotto X-RIDE', 'black-silver-metal-f5x3573-3607-lotto-7-original-imaemrznwq26aabh.jpeg', 4999, 4),
(4003, 'Reebok Jetfuse', 'grey-gravel-green-wht-blk-zjet-soul-reebok-9-original-imaemygmf2nthad9.jpeg', 14990, 67),
(4004, 'Nike Airmax 2017', 'air-max-2017-running-shoe.jpg', 14999, 100),
(4005, 'Nike MAGISTA ORDEN', 'magista.jpeg', 7999, 2),
(4006, 'Nike Airmax 2016', 'airmax2016.JPG', 19999, 122222),
(4007, 'Woodland Boots Grey', 'khaki-g-40777y15-woodland-42-original-imaegvjgmt2nd5jb.jpeg', 3699, 12),
(4008, 'Sparx 288 Multicolor', 'sparx.jpeg', 2499, 90),
(4009, 'Puma Vectone Running', 'puma.jpeg', 4000, 9);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `name` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `birth` date NOT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `cls10` varchar(150) DEFAULT NULL,
  `cls12` varchar(150) NOT NULL,
  `board` varchar(8) NOT NULL,
  `marks` int(11) NOT NULL,
  `extra` varchar(550) DEFAULT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`name`, `age`, `gender`, `birth`, `fname`, `state`, `cls10`, `cls12`, `board`, `marks`, `extra`, `email`, `password`) VALUES
('Vinjit', 18, 'male', '1997-11-05', 'BMJK', 'New delhi', 'davps', 'davps', 'cbse', 89, 'acting', 'bm.vinjit@gmail.com', 'password'),
('Divesh', 20, 'Male', '1995-02-08', 'pradeep', 'Bihar', 'holyangel', 'holyangel', 'ICSE', 78, 'coding', 'divesh@gmail.com', 'password'),
('dfhjdb', 23, 'female', '2017-01-05', 'harish', 'sgvasdga', 'sfs', 'sfsg', 'srgfsgrw', 100, 'dfdsf', 'fbxb@sghcgs.com', 'adbfhds'),
('Kartik', 18, 'Male', '1997-03-06', 'Sanjay', 'Punjab', 'balbharti', 'balbharti', 'cbse', 90, 'coding', 'koolkartik@gmail.com', 'password'),
('Abhinav', 18, 'MALE', '1996-03-10', 'kumar', 'New Delhi', 'govt', 'govt', 'cbse', 80, 'coding', 'mail.abhi@gmail.com', 'himan');

-- --------------------------------------------------------

--
-- Table structure for table `watch`
--

CREATE TABLE `watch` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `url` varchar(1000) NOT NULL,
  `price` int(11) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `watch`
--

INSERT INTO `watch` (`id`, `name`, `url`, `price`, `stock`) VALUES
(3000, 'Corum Heritage ', 'corum-heritage-372-311-69-0f81-0000.jpg', 37632000, 670),
(3001, 'Ulysse Nardin Marine', 'ulysse-nardin-marine-1183-126-3-62.jpg', 700000, 1),
(3002, 'Maserati Analog', 'r8821119002-maserati-original-imaemxn38qygt3e3.jpeg', 29999, 3),
(3003, 'Emporio Armani Analog', 'emporio.jpeg', 29999, 3),
(3004, 'Citizen Eco-Drive Analog', 'citizen.jpeg', 27000, 34),
(3005, 'Movado Series 800', 'movado.jpeg', 140000, 456),
(3006, 'Scuderia Ferrari evo', 'Ferrari-Watches-amazon-photos.jpg', 29960, 54),
(3007, 'Tissot Analog Women', 't096-009-22-111-00-tissot-original-imaebgb3pdzjjyfq.jpeg', 26000, 1),
(3008, 'Casio Edifice EX208', 'ex208-casio-original-imaepyuzsnexhcky.jpeg', 8495, 899),
(3009, 'Movado 606916 Analog', '606916-movado-original-imaemxn34khzszkt.jpeg', 99999, 8),
(3010, 'TAG Heuer Carrera ', 'tag-heuer-carrera-car201v-ba0766.jpg', 340000, 23),
(3011, 'Swatch Digital touch', 'swatch-digital-surm100_1.jpg', 6900, 345),
(3012, 'Casio G444 G-Shock ', 'g444-casio-original-imaepyuhjz4cjpj4.jpeg', 13000, 45),
(3013, 'Jaeger-LeCoultre Master', 'jaeger.jpg', 11400000, 6),
(3014, 'IWC Ingenieur SILVER', 'iwc-ingenieur.jpg', 17448000, 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mobile`
--
ALTER TABLE `mobile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `q7`
--
ALTER TABLE `q7`
  ADD PRIMARY KEY (`uname`);

--
-- Indexes for table `shoe`
--
ALTER TABLE `shoe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `watch`
--
ALTER TABLE `watch`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
