-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 06, 2024 at 12:07 PM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `add_to_cart`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_cart_info`
--

DROP TABLE IF EXISTS `add_cart_info`;
CREATE TABLE IF NOT EXISTS `add_cart_info` (
  `NO` int NOT NULL AUTO_INCREMENT,
  `ID` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `NAME` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `EMAIL` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `TYPE` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `ProType` varchar(200) COLLATE utf8mb3_unicode_ci NOT NULL,
  `COLOR` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `SIZE` varchar(100) COLLATE utf8mb3_unicode_ci NOT NULL,
  `PRICE` int NOT NULL,
  `QON` int NOT NULL,
  PRIMARY KEY (`NO`),
  UNIQUE KEY `ID` (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `all_carts`
--

DROP TABLE IF EXISTS `all_carts`;
CREATE TABLE IF NOT EXISTS `all_carts` (
  `EMAIL` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `F_NAME` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `L_NAME` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `ADD` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `COUNTRY` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `CONTACT` varchar(15) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `ITEM_ID` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `ITEM_NAME` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `TYPE` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `ProType` varchar(200) COLLATE utf8mb3_unicode_ci NOT NULL,
  `ITEM_COLOR` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `SIZE` varchar(5) COLLATE utf8mb3_unicode_ci NOT NULL,
  `QON` int NOT NULL,
  `PRICE` int NOT NULL,
  `NO` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`NO`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `all_carts`
--

INSERT INTO `all_carts` (`EMAIL`, `F_NAME`, `L_NAME`, `ADD`, `COUNTRY`, `CONTACT`, `ITEM_ID`, `ITEM_NAME`, `TYPE`, `ProType`, `ITEM_COLOR`, `SIZE`, `QON`, `PRICE`, `NO`) VALUES
('navya@patel.com', 'NAVYA ', 'PATEL', 'c 4 shivshatya flate dharma cinema gayatri mandir, highway bk cinema road mehsana 2 384002', 'INDIA', '+9109499526950', 'TX01', 'TEXTURED', 'CASUAL', 'cloths', 'Navy Blue', 'M', 1, 2800, 23),
('patelharshil4636@gmail.com', 'Harshil', 'Patel', 'c 4 shivshatya flate dharma cinema gayatri mandir, highway bk cinema road mehsana 2 384002', 'INDIA', '+9109499526950', 'SS', 'SOFTRIDE Symmetry', 'SPORTS', 'Shoes', 'Black', '9 ', 1, 2474, 29),
('patelharshil4636@gmail.com', 'Harshil', 'Patel', 'c 4 shivshatya flate dharma cinema gayatri mandir, highway bk cinema road mehsana 2 384002', 'INDIA', '+9109499526950', 'CCS', 'CASUAL CLG SHOES', 'CASUAL', 'Shoes', 'WHITE', '10', 1, 750, 28),
('patelharshil4636@gmail.com', 'Harshil', 'Patel', 'c 4 shivshatya flate dharma cinema gayatri mandir, highway bk cinema road mehsana 2 384002', 'INDIA', '+9109499526950', 'WS01', 'WESTSO', 'CASUAL', 'cloths', 'Black', 'M', 1, 2400, 27);

-- --------------------------------------------------------

--
-- Table structure for table `casual_cloths`
--

DROP TABLE IF EXISTS `casual_cloths`;
CREATE TABLE IF NOT EXISTS `casual_cloths` (
  `NAME` varchar(200) NOT NULL,
  `ID` varchar(200) NOT NULL,
  `COLOR` varchar(200) NOT NULL,
  `I_ADD` varchar(200) NOT NULL,
  `NO` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`NO`),
  UNIQUE KEY `NO` (`NO`),
  KEY `ID` (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `casual_cloths`
--

INSERT INTO `casual_cloths` (`NAME`, `ID`, `COLOR`, `I_ADD`, `NO`) VALUES
('MORO', 'DN', 'BLACK', 'https://www.snitch.co.in/cdn/shop/files/08a6287aefaef9450835f840ee415891.png?v=1712650601&width=1800', 13),
('Men Vintage Loose Casual Jeans Faded Blue Baggy Wide Leg Hip Hop Denim Pants', 'BAGGYPENTS', 'Faded Blue', 'https://i.ebayimg.com/images/g/dDoAAOSwjjtl6Hci/s-l960.jpg', 20),
('TEXTURED', 'TX01', 'Navy Blue', 'https://www.westside.com/cdn/shop/files/300949014NAVY_3.jpg?v=1700645608&width=493', 15),
('WESTSO', 'WS01', 'Black', 'https://www.westside.com/cdn/shop/files/300942808BLACK_3.jpg?v=1700645498&width=493', 16),
('STRIPED', 'ST01', 'Green', 'https://www.westside.com/cdn/shop/files/300959642EMERALD_3.jpg?v=1700645782&width=493', 17),
('NETRO', 'NE01', 'White', 'https://www.westside.com/cdn/shop/files/300957489OFFWHITE_3.jpg?v=1700645710&width=493', 18),
('White Leaf', 'WL01', 'White', 'https://www.westside.com/cdn/shop/files/300954919WHITE_3.jpg?v=1700645702&width=493', 19),
('Denim look Men Jeans ', 'DLMJ', 'Denim', 'https://m.media-amazon.com/images/I/61Jx8okUqqL._SY879_.jpg', 21);

-- --------------------------------------------------------

--
-- Table structure for table `casual_shoes`
--

DROP TABLE IF EXISTS `casual_shoes`;
CREATE TABLE IF NOT EXISTS `casual_shoes` (
  `NAME` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `ID` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `COLOR` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `I_ADD` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `NO` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`NO`),
  KEY `ID` (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `casual_shoes`
--

INSERT INTO `casual_shoes` (`NAME`, `ID`, `COLOR`, `I_ADD`, `NO`) VALUES
('CASUAL CLG SHOES', 'CCS', 'WHITE', 'https://m.media-amazon.com/images/I/51hGEL0BlIL._SY695_.jpg', 7),
('Deerskin Sneaker', 'DS01', 'WHITE', 'https://cdn11.bigcommerce.com/s-crfti/images/stencil/1280x1280/products/17727/62494/m_21135_white-2_1800x1800__29151.1714676523.jpg?c=2', 8);

-- --------------------------------------------------------

--
-- Table structure for table `child_casual`
--

DROP TABLE IF EXISTS `child_casual`;
CREATE TABLE IF NOT EXISTS `child_casual` (
  `ID` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `COLOR` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `I_ADD` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `NO` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`NO`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `child_casual`
--

INSERT INTO `child_casual` (`ID`, `COLOR`, `I_ADD`, `NO`) VALUES
('DS01', 'WHITE', 'https://cdn11.bigcommerce.com/s-crfti/images/stencil/1280x1280/products/17727/62495/m_21135_white-4_1800x1800__42170.1714676552.jpg?c=2', 24),
('DS01', 'WHITE', 'https://cdn11.bigcommerce.com/s-crfti/images/stencil/1920w/products/17727/62497/m_21135_white-1_1800x1800__30977.1714676527.jpg?c=2', 23),
('DS01', 'WHITE', 'https://cdn11.bigcommerce.com/s-crfti/images/stencil/1280x1280/products/17727/62498/m_21135_white-5_1800x1800__18086.1714676543.jpg?c=2', 22),
('CCS', 'WHITE', 'https://m.media-amazon.com/images/I/71Zy7sTho3L._SY695_.jpg', 21),
('CCS', 'WHITE', 'https://m.media-amazon.com/images/I/61wcHo0jxhL._SY695_.jpg', 20),
('CCS', 'WHITE', 'https://m.media-amazon.com/images/I/51E9nnXWBrL._SY695_.jpg', 19);

-- --------------------------------------------------------

--
-- Table structure for table `child_casual_cloths`
--

DROP TABLE IF EXISTS `child_casual_cloths`;
CREATE TABLE IF NOT EXISTS `child_casual_cloths` (
  `ID` varchar(200) NOT NULL,
  `COLOR` varchar(200) NOT NULL,
  `I_ADD` varchar(200) NOT NULL,
  `NO` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`NO`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `child_casual_cloths`
--

INSERT INTO `child_casual_cloths` (`ID`, `COLOR`, `I_ADD`, `NO`) VALUES
('DN', 'BLACK', 'https://www.snitch.co.in/cdn/shop/files/721e1b9d6579606e3a0c70acb628f3b3.png?v=1712650601&width=1800', 14),
('DN', 'BLACK', 'https://www.snitch.co.in/cdn/shop/files/19ab3db139b14d09c2d3b9ef26900c18.png?v=1712650601&width=1800', 15),
('DN', 'BLACK', 'https://www.snitch.co.in/cdn/shop/files/c421bfbc04d07f2c5fa3c7eef19333b3.png?v=1712650601&width=1800', 16),
('DLMJ', 'Denim', 'https://m.media-amazon.com/images/I/61OIMhQ3UBL._SY741_.jpg', 38),
('DLMJ', 'Denim', 'https://m.media-amazon.com/images/I/61Lz8HB1olL._SY741_.jpg', 39),
('DLMJ', 'Denim', 'https://m.media-amazon.com/images/I/61x0fHXznKL._SY741_.jpg', 37),
('BAGGYPENTS', 'Faded Blue', 'https://i.ebayimg.com/images/g/bAsAAOSwj9Nl6Hcg/s-l960.jpg', 35),
('BAGGYPENTS', 'Faded Blue', 'https://i.ebayimg.com/images/g/1GsAAOSwPDhl6Hch/s-l960.jpg', 36),
('TX01', 'Navy Blue', 'https://www.westside.com/cdn/shop/files/300949014NAVY_2.jpg?v=1700645608&width=493', 20),
('TX01', 'Navy Blue', 'https://www.westside.com/cdn/shop/files/300949014NAVY_1.jpg?v=1700645608&width=493', 21),
('TX01', 'Navy Blue', 'https://www.westside.com/cdn/shop/files/300949014NAVY_4.jpg?v=1700645608&width=493', 22),
('WS01', 'Black', 'https://www.westside.com/cdn/shop/files/300942808BLACK_2.jpg?v=1700645498&width=493', 23),
('WS01', 'Black', 'https://www.westside.com/cdn/shop/files/300942808BLACK_1.jpg?v=1700645498&width=493', 24),
('WS01', 'Black', 'https://www.westside.com/cdn/shop/files/300942808BLACK_4.jpg?v=1700645498&width=493', 25),
('ST01', 'Green', 'https://www.westside.com/cdn/shop/files/300959642EMERALD_2.jpg?v=1700645782&width=493', 26),
('ST01', 'Green', 'https://www.westside.com/cdn/shop/files/300959642EMERALD_1.jpg?v=1700645782&width=493', 27),
('ST01', 'Green', 'https://www.westside.com/cdn/shop/files/300959642EMERALD_4.jpg?v=1700645782&width=493', 28),
('NE01', 'White', 'https://www.westside.com/cdn/shop/files/300957489OFFWHITE_1.jpg?v=1700645710&width=493', 29),
('NE01', 'White', 'https://www.westside.com/cdn/shop/files/300957489OFFWHITE_2.jpg?v=1700645710&width=493', 30),
('NE01', 'White', 'https://www.westside.com/cdn/shop/files/300957489OFFWHITE_4.jpg?v=1700645710&width=493', 31),
('WL01', 'White', 'https://www.westside.com/cdn/shop/files/300954919WHITE_2.jpg?v=1700645702&width=493', 32),
('WL01', 'White', 'https://www.westside.com/cdn/shop/files/300954919WHITE_1.jpg?v=1700645702&width=493', 33),
('WL01', 'White', 'https://www.westside.com/cdn/shop/files/300954919WHITE_4.jpg?v=1700645702&width=493', 34);

-- --------------------------------------------------------

--
-- Table structure for table `child_crocs`
--

DROP TABLE IF EXISTS `child_crocs`;
CREATE TABLE IF NOT EXISTS `child_crocs` (
  `ID` varchar(200) NOT NULL,
  `COLOR` varchar(200) NOT NULL,
  `I_ADD` varchar(200) NOT NULL,
  `NO` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`NO`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `child_crocs`
--

INSERT INTO `child_crocs` (`ID`, `COLOR`, `I_ADD`, `NO`) VALUES
('BC', 'WHITE', 'https://www.crocs.in/media/catalog/product/2/0/205089_126_ALT110.jpg?auto=webp&format=pjpg&width=1280&height=1600&fit=cover', 27),
('BC', 'WHITE', 'https://www.crocs.in/media/catalog/product/2/0/205089_126_ALT140.jpg?auto=webp&format=pjpg&width=1280&height=1600&fit=cover', 26),
('BC', 'WHITE', 'https://www.crocs.in/media/catalog/product/2/0/205089_126_ALT120.jpg?auto=webp&format=pjpg&width=1280&height=1600&fit=cover', 25);

-- --------------------------------------------------------

--
-- Table structure for table `child_formal`
--

DROP TABLE IF EXISTS `child_formal`;
CREATE TABLE IF NOT EXISTS `child_formal` (
  `ID` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `COLOR` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `I_ADD` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `NO` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`NO`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `child_formal`
--

INSERT INTO `child_formal` (`ID`, `COLOR`, `I_ADD`, `NO`) VALUES
('STFS', 'BROWN', 'https://cdn.shopify.com/s/files/1/0266/6276/4597/files/300966436DARKTAN_2.jpg?v=1707400296', 14),
('STFS', 'BROWN', 'https://cdn.shopify.com/s/files/1/0266/6276/4597/files/300966436DARKTAN_3.jpg?v=1707400295', 15),
('SBLUP', 'BROWN', 'https://cdn.shopify.com/s/files/1/0266/6276/4597/files/300966432DARKTAN_2.jpg?v=1710422066', 4),
('SBLUP', 'BROWN', 'https://www.westside.com/cdn/shop/files/300966432DARKTAN_3.jpg?v=1710422005&width=493', 5),
('BBSFM', 'BROWN', 'https://www.bata.com/dw/image/v2/BCLG_PRD/on/demandware.static/-/Sites-bata-in-master-catalog/default/dw4e6c7a86/images/large/8514252_2.jpeg?sw=1634', 16),
('BBSFM', 'BROWN', 'https://www.bata.com/dw/image/v2/BCLG_PRD/on/demandware.static/-/Sites-bata-in-master-catalog/default/dw57660c76/images/large/8514252_5.jpeg?sw=1634', 17),
('BBSFM', 'BROWN', 'https://www.bata.com/dw/image/v2/BCLG_PRD/on/demandware.static/-/Sites-bata-in-master-catalog/default/dwa629ac92/images/large/8514252_1.jpeg?sw=1634', 18);

-- --------------------------------------------------------

--
-- Table structure for table `child_sports`
--

DROP TABLE IF EXISTS `child_sports`;
CREATE TABLE IF NOT EXISTS `child_sports` (
  `ID` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `COLOR` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `I_ADD` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `NO` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`NO`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `child_sports`
--

INSERT INTO `child_sports` (`ID`, `COLOR`, `I_ADD`, `NO`) VALUES
('DN', 'Black', 'https://images.puma.com/image/upload/f_auto,q_auto,b_rgb:fafafa,w_600,h_600/global/379992/03/sv03/fnd/IND/fmt/png/Puma-Foam-Stride-Mens-Running-Shoes', 26),
('SS', 'Black', 'https://images.puma.com/image/upload/f_auto,q_auto,b_rgb:fafafa,w_600,h_600/global/379582/01/sv02/fnd/IND/fmt/png/SOFTRIDE-Symmetry-Unisex-Running-Shoes', 21),
('DN', 'Black', 'https://images.puma.com/image/upload/f_auto,q_auto,b_rgb:fafafa,w_600,h_600/global/379992/03/dt04/fnd/IND/fmt/png/Puma-Foam-Stride-Mens-Running-Shoes', 27),
('SS', 'Black', 'https://images.puma.com/image/upload/f_auto,q_auto,b_rgb:fafafa,w_600,h_600/global/379582/01/bv/fnd/IND/fmt/png/SOFTRIDE-Symmetry-Unisex-Running-Shoes', 20),
('SS', 'Black', 'https://images.puma.com/image/upload/f_auto,q_auto,b_rgb:fafafa,w_600,h_600/global/379582/01/fnd/IND/fmt/png/SOFTRIDE-Symmetry-Unisex-Running-Shoes', 19),
('DN', 'Black', 'https://images.puma.com/image/upload/f_auto,q_auto,b_rgb:fafafa,w_600,h_600/global/379992/03/fnd/IND/fmt/png/Puma-Foam-Stride-Mens-Running-Shoes', 25);

-- --------------------------------------------------------

--
-- Table structure for table `child_sports_cloths`
--

DROP TABLE IF EXISTS `child_sports_cloths`;
CREATE TABLE IF NOT EXISTS `child_sports_cloths` (
  `ID` varchar(200) NOT NULL,
  `COLOR` varchar(200) NOT NULL,
  `I_ADD` varchar(200) NOT NULL,
  `NO` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`NO`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `child_sports_cloths`
--

INSERT INTO `child_sports_cloths` (`ID`, `COLOR`, `I_ADD`, `NO`) VALUES
('S01', 'Black', 'https://images.puma.com/image/upload/f_auto,q_auto,b_rgb:fafafa,w_750,h_750/global/658984/57/mod03/fnd/IND/fmt/png/individualLIGA-Graphic-Mens-Football-Jersey', 8),
('S01', 'Black', 'https://images.puma.com/image/upload/f_auto,q_auto,b_rgb:fafafa,w_750,h_750/global/658984/57/mod01/fnd/IND/fmt/png/individualLIGA-Graphic-Mens-Football-Jersey', 9),
('S01', 'Black', 'https://images.puma.com/image/upload/f_auto,q_auto,b_rgb:fafafa,w_750,h_750/global/658984/57/mod02/fnd/IND/fmt/png/individualLIGA-Graphic-Mens-Football-Jersey', 7);

-- --------------------------------------------------------

--
-- Table structure for table `cloths_size_info`
--

DROP TABLE IF EXISTS `cloths_size_info`;
CREATE TABLE IF NOT EXISTS `cloths_size_info` (
  `NO` int NOT NULL AUTO_INCREMENT,
  `ID` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `COLOR` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `SIZE` varchar(10) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `AWLBL` int NOT NULL,
  `TYPE` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`NO`),
  KEY `ID` (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=91 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `cloths_size_info`
--

INSERT INTO `cloths_size_info` (`NO`, `ID`, `COLOR`, `SIZE`, `AWLBL`, `TYPE`) VALUES
(50, 'DN', 'BLACK', 'S', 5, 'CASUAL'),
(51, 'MKLFSMC', 'Sea-Green', 'S', 5, 'CASUAL'),
(52, 'MKLFSMC', 'Sea-Green', 'M', 5, 'CASUAL'),
(53, 'MKLFSMC', 'Sea-Green', 'L', 5, 'CASUAL'),
(54, 'MKLFSMC', 'Sea-Green', 'XL', 5, 'CASUAL'),
(55, 'MKLFSMC', 'Sea-Green', 'XXL', 5, 'CASUAL'),
(56, 'TX01', 'Navy Blue', 'S', 5, 'CASUAL'),
(57, 'TX01', 'Navy Blue', 'M', 1, 'CASUAL'),
(58, 'TX01', 'Navy Blue', 'L', 5, 'CASUAL'),
(59, 'TX01', 'Navy Blue', 'XL', 5, 'CASUAL'),
(60, 'TX01', 'Navy Blue', 'XXL', 5, 'CASUAL'),
(61, 'WS01', 'Black', 'S', 5, 'CASUAL'),
(62, 'WS01', 'Black', 'M', 3, 'CASUAL'),
(63, 'WS01', 'Black', 'L', 4, 'CASUAL'),
(64, 'WS01', 'Black', 'XL', 5, 'CASUAL'),
(65, 'WS01', 'Black', 'XXL', 5, 'CASUAL'),
(66, 'ST01', 'Green', 'S', 5, 'CASUAL'),
(67, 'ST01', 'Green', 'M', 3, 'CASUAL'),
(68, 'ST01', 'Green', 'L', 5, 'CASUAL'),
(69, 'ST01', 'Green', 'XL', 5, 'CASUAL'),
(70, 'ST01', 'Green', 'XXL', 5, 'CASUAL'),
(71, 'NE01', 'White', 'S', 5, 'CASUAL'),
(72, 'NE01', 'White', 'M', 3, 'CASUAL'),
(73, 'NE01', 'White', 'L', 5, 'CASUAL'),
(74, 'NE01', 'White', 'XL', 5, 'CASUAL'),
(75, 'NE01', 'White', 'XXL', 5, 'CASUAL'),
(76, 'S01', 'Black', 'S', 5, 'SPORTS'),
(77, 'S01', 'Black', 'M', 4, 'SPORTS'),
(78, 'S01', 'Black', 'L', 5, 'SPORTS'),
(79, 'S01', 'Black', 'XL', 5, 'SPORTS'),
(80, 'S01', 'Black', 'XXL', 5, 'SPORTS'),
(81, 'BAGGYPENTS', 'Faded Blue', 'S', 5, 'CASUAL'),
(82, 'BAGGYPENTS', 'Faded Blue', 'M', 5, 'CASUAL'),
(83, 'BAGGYPENTS', 'Faded Blue', 'L', 5, 'CASUAL'),
(84, 'BAGGYPENTS', 'Faded Blue', 'XL', 5, 'CASUAL'),
(85, 'BAGGYPENTS', 'Faded Blue', 'XXL', 5, 'CASUAL'),
(86, 'DLMJ', 'Denim', 'S', 5, 'CASUAL'),
(87, 'DLMJ', 'Denim', 'M', 5, 'CASUAL'),
(88, 'DLMJ', 'Denim', 'L', 5, 'CASUAL'),
(89, 'DLMJ', 'Denim', 'XL', 5, 'CASUAL'),
(90, 'DLMJ', 'Denim', 'XXL', 5, 'CASUAL');

-- --------------------------------------------------------

--
-- Table structure for table `cloth_info`
--

DROP TABLE IF EXISTS `cloth_info`;
CREATE TABLE IF NOT EXISTS `cloth_info` (
  `NAME` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `ID` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `PRICE` int NOT NULL,
  `TYPE` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `DISCOUNT` int NOT NULL,
  `CASTE` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `SubCast` varchar(200) COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `cloth_info`
--

INSERT INTO `cloth_info` (`NAME`, `ID`, `PRICE`, `TYPE`, `DISCOUNT`, `CASTE`, `SubCast`) VALUES
('MORO', 'DN', 5000, 'CASUAL', 40, 'CLOTHS', 'TShirt'),
('Men Vintage Loose Casual Jeans Faded Blue Baggy Wide Leg Hip Hop Denim Pants', 'BAGGYPENTS', 2000, 'CASUAL', 35, 'CLOTHS', 'BaggyPent'),
('TEXTURED', 'TX01', 3500, 'CASUAL', 20, 'CLOTHS', 'TShirt'),
('WESTSO', 'WS01', 3000, 'CASUAL', 20, 'CLOTHS', 'TShirt'),
('STRIPED', 'ST01', 3000, 'CASUAL', 20, 'CLOTHS', 'TShirt'),
('NETRO', 'NE01', 2000, 'CASUAL', 20, 'CLOTHS', 'TShirt'),
('White Leaf', 'WL01', 3000, 'CASUAL', 20, 'CLOTHS', 'TShirt'),
('Running Sports', 'RST', 450, 'SPORTS', 10, 'CLOTHS', 'Lower'),
('individualLIGA ', 'S01', 2499, 'SPORTS', 50, 'CLOTHS', 'TShirt'),
('Denim look Men Jeans ', 'DLMJ', 1999, 'CASUAL', 50, 'CLOTHS', 'BaggyPent');

-- --------------------------------------------------------

--
-- Table structure for table `color_sound`
--

DROP TABLE IF EXISTS `color_sound`;
CREATE TABLE IF NOT EXISTS `color_sound` (
  `NAME` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `S_ADD` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`NAME`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `color_sound`
--

INSERT INTO `color_sound` (`NAME`, `S_ADD`) VALUES
('BLACK', 'sounds/CART SOUNDS/COLOR/BLACK'),
('WHITE', 'sounds/CART SOUNDS/COLOR/WHITE');

-- --------------------------------------------------------

--
-- Table structure for table `crocs_shoes`
--

DROP TABLE IF EXISTS `crocs_shoes`;
CREATE TABLE IF NOT EXISTS `crocs_shoes` (
  `NAME` varchar(200) NOT NULL,
  `ID` varchar(200) NOT NULL,
  `COLOR` varchar(200) NOT NULL,
  `I_ADD` varchar(200) NOT NULL,
  `NO` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`NO`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `crocs_shoes`
--

INSERT INTO `crocs_shoes` (`NAME`, `ID`, `COLOR`, `I_ADD`, `NO`) VALUES
(' BAYABAND CLOG', 'BC', 'WHITE', 'https://www.crocs.in/media/catalog/product/2/0/205089_126_ALT100.jpg?auto=webp&format=pjpg&width=1280&height=1600&fit=cover', 1);

-- --------------------------------------------------------

--
-- Table structure for table `formal_shoes`
--

DROP TABLE IF EXISTS `formal_shoes`;
CREATE TABLE IF NOT EXISTS `formal_shoes` (
  `NAME` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `ID` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `COLOR` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `I_ADD` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `NO` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`NO`),
  UNIQUE KEY `ID` (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `formal_shoes`
--

INSERT INTO `formal_shoes` (`NAME`, `ID`, `COLOR`, `I_ADD`, `NO`) VALUES
('SOLEPLAY Brown Lace-Up', 'SBLUP', 'BROWN', 'https://cdn.shopify.com/s/files/1/0266/6276/4597/files/300966432DARKTAN_1.jpg?v=1710421994', 2),
('SOLEPLAY Tan Formal Shoes', 'STFS', 'BROWN', 'https://cdn.shopify.com/s/files/1/0266/6276/4597/files/300966436DARKTAN_1.jpg?v=1707400295', 8),
('BATA BROWN SLIPON FOR MEN', 'BBSFM', 'BROWN', 'https://www.bata.com/dw/image/v2/BCLG_PRD/on/demandware.static/-/Sites-bata-in-master-catalog/default/dw0f7143a4/images/large/8514252_7.jpeg?sw=1634', 9);

-- --------------------------------------------------------

--
-- Table structure for table `index_contant`
--

DROP TABLE IF EXISTS `index_contant`;
CREATE TABLE IF NOT EXISTS `index_contant` (
  `PHOTO` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `VIDEO` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `PLACE` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `NO` int NOT NULL AUTO_INCREMENT,
  `FOR_WHAT` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `TAGLINE` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`NO`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `index_contant`
--

INSERT INTO `index_contant` (`PHOTO`, `VIDEO`, `PLACE`, `NO`, `FOR_WHAT`, `TAGLINE`) VALUES
('', 'Index video/Top Video', 'TOP Video', 1, 'SPORTS', '0'),
('https://www.asianfootwears.com/cdn/shop/files/MG_8019_900x900.jpg?v=1709558656', '', 'TOP ARRIVAL', 2, 'SPORTS', 'You’ll love our new arrivals!'),
('https://www.asianfootwears.com/cdn/shop/products/file_e64013ca-c293-4048-8b7a-c6f124f39744_900x900.jpg?v=1678441577', '', 'TOP ARRIVAL', 3, 'SPORTS', '0'),
('https://www.westside.com/cdn/shop/files/300966438BROWN_1.jpg?v=1709735510&width=493', '', 'TOP ARRIVAL', 4, 'FORMAL', '0'),
('https://www.westside.com/cdn/shop/products/300939002DARKTAN_1.jpg?v=1685622230&width=493', '', 'TOP ARRIVAL', 5, 'FORMAL', '0');

-- --------------------------------------------------------

--
-- Table structure for table `name_sound`
--

DROP TABLE IF EXISTS `name_sound`;
CREATE TABLE IF NOT EXISTS `name_sound` (
  `ID` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `S_ADD` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `name_sound`
--

INSERT INTO `name_sound` (`ID`, `S_ADD`) VALUES
('PQSF01', 'sounds/CART SOUNDS/NAME/PQSF01');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

DROP TABLE IF EXISTS `reg`;
CREATE TABLE IF NOT EXISTS `reg` (
  `F_NAME` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `L_NAME` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `EMAIL` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `PASS` varchar(14) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `ADD` varchar(300) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `CONTACT_NO` varchar(15) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `COUNTRY` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`EMAIL`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`F_NAME`, `L_NAME`, `EMAIL`, `PASS`, `ADD`, `CONTACT_NO`, `COUNTRY`) VALUES
('Parv', 'Patel', 'parv@xx.com', '463696', 'mehshana', '+919409910782', 'INDIA'),
('prit', 'patel', 'prit@gmail.com', '12', 'c 4 shivshatya flate dharma cinema gayatri mandir, highway bk cinema road mehsana 2 384002', '+917894561', 'INDIA'),
('BHAVESH', 'PARMAR', 'BHAVESHAPARMAR@3633.com', '3633', 'VAGHROLL', '+917096327082', 'INDIA'),
('harshil', 'patel', 'harshilpatel21@gnu.ac.in', '463696', 'C-4,shiv satya flate.dharam cinema,B.K Road ,NR gayatri mandir,mehshana', '+919409910782', 'INDIA'),
('Harshil', 'Patel', 'HarshilPatel46369669@gmail.com', '463696', 'Meshana,Gujrat', '+91684684685464', 'INDIA'),
('JAHNAWI', 'MAKWANA', 'JANVIMAKWANA21@GNU.AC.IN', '84654232251', '', '', ''),
('Harshil', 'Patel', 'patelharshil4636@gmail.com', '463696', 'c 4 shivshatya flate dharma cinema gayatri mandir, highway bk cinema road mehsana 2 384002', '+9109499526950', 'INDIA');

-- --------------------------------------------------------

--
-- Table structure for table `shoes_size_info`
--

DROP TABLE IF EXISTS `shoes_size_info`;
CREATE TABLE IF NOT EXISTS `shoes_size_info` (
  `NO` int NOT NULL AUTO_INCREMENT,
  `ID` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `COLOR` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `SIZE` int DEFAULT NULL,
  `AWLBL` int NOT NULL,
  `TYPE` varchar(200) COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`NO`),
  KEY `ID` (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=70 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `shoes_size_info`
--

INSERT INTO `shoes_size_info` (`NO`, `ID`, `COLOR`, `SIZE`, `AWLBL`, `TYPE`) VALUES
(1, 'ULUP', 'LightOrange', 6, 5, 'SPORTS'),
(2, 'ULUP', 'LightOrange', 7, 5, 'SPORTS'),
(3, 'ULUP', 'LightOrange', 8, 4, 'SPORTS'),
(4, 'ULUP', 'LightOrange', 9, 4, 'SPORTS'),
(5, 'ULUP', 'LightOrange', 10, 0, 'SPORTS'),
(24, 'STFS', 'BROWN', 10, 3, 'FORMAL'),
(23, 'STFS', 'BROWN', 9, 5, 'FORMAL'),
(22, 'STFS', 'BROWN', 8, 5, 'FORMAL'),
(21, 'STFS', 'BROWN', 7, 5, 'FORMAL'),
(20, 'STFS', 'BROWN', 6, 5, 'FORMAL'),
(11, 'SBLUP', 'BROWN', 6, 5, 'FORMAL'),
(12, 'SBLUP', 'BROWN', 7, 5, 'FORMAL'),
(13, 'SBLUP', 'BROWN', 8, 5, 'FORMAL'),
(14, 'SBLUP', 'BROWN', 9, 4, 'FORMAL'),
(15, 'SBLUP', 'BROWN', 10, 1, 'FORMAL'),
(49, 'DN', 'Black', 10, 1, 'SPORTS'),
(48, 'DN', 'Black', 9, 5, 'SPORTS'),
(47, 'DN', 'Black', 8, 5, 'SPORTS'),
(46, 'DN', 'Black', 7, 5, 'SPORTS'),
(45, 'DN', 'Black', 6, 4, 'SPORTS'),
(30, 'BC', 'WHITE', 6, 5, 'CROCS'),
(31, 'BC', 'WHITE', 7, 4, 'CROCS'),
(32, 'BC', 'WHITE', 8, 4, 'CROCS'),
(33, 'BC', 'WHITE', 9, 4, 'CROCS'),
(34, 'BC', 'WHITE', 10, 3, 'CROCS'),
(35, 'SS', 'Black', 6, 5, 'SPORTS'),
(36, 'SS', 'Black', 7, 4, 'SPORTS'),
(37, 'SS', 'Black', 8, 4, 'SPORTS'),
(38, 'SS', 'Black', 9, 0, 'SPORTS'),
(39, 'SS', 'Black', 10, 0, 'SPORTS'),
(50, 'CCS', 'WHITE', 6, 5, 'CASUAL'),
(51, 'CCS', 'WHITE', 7, 5, 'CASUAL'),
(52, 'CCS', 'WHITE', 8, 5, 'CASUAL'),
(53, 'CCS', 'WHITE', 9, 5, 'CASUAL'),
(54, 'CCS', 'WHITE', 10, 3, 'CASUAL'),
(55, 'BBSFM', 'BROWN', 6, 5, 'SPORTS'),
(56, 'BBSFM', 'BROWN', 7, 5, 'SPORTS'),
(57, 'BBSFM', 'BROWN', 8, 5, 'SPORTS'),
(58, 'BBSFM', 'BROWN', 9, 5, 'SPORTS'),
(59, 'BBSFM', 'BROWN', 10, 5, 'SPORTS'),
(60, 'BBSFM', 'BROWN', 6, 20, 'FORMAL'),
(61, 'BBSFM', 'BROWN', 7, 20, 'FORMAL'),
(62, 'BBSFM', 'BROWN', 8, 20, 'FORMAL'),
(63, 'BBSFM', 'BROWN', 9, 20, 'FORMAL'),
(64, 'BBSFM', 'BROWN', 10, 20, 'FORMAL'),
(65, 'DS01', 'WHITE', 6, 5, 'CASUAL'),
(66, 'DS01', 'WHITE', 7, 5, 'CASUAL'),
(67, 'DS01', 'WHITE', 8, 5, 'CASUAL'),
(68, 'DS01', 'WHITE', 9, 5, 'CASUAL'),
(69, 'DS01', 'WHITE', 10, 5, 'CASUAL');

-- --------------------------------------------------------

--
-- Table structure for table `shoe_info`
--

DROP TABLE IF EXISTS `shoe_info`;
CREATE TABLE IF NOT EXISTS `shoe_info` (
  `NAME` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `ID` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `PRICE` int NOT NULL,
  `TYPE` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `DISCOUNT` int NOT NULL,
  `CASTE` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `shoe_info`
--

INSERT INTO `shoe_info` (`NAME`, `ID`, `PRICE`, `TYPE`, `DISCOUNT`, `CASTE`) VALUES
('SOLEPLAY ', 'STFS', 4999, 'FORMAL', 50, 'SHOES'),
('SOFTRIDE Symmetry', 'SS', 5499, 'SPORTS', 55, 'SHOES'),
('Deviate NITRO', 'DN', 15999, 'SPORTS', 25, 'SHOES'),
('CASUAL CLG SHOES', 'CCS', 1500, 'CASUAL', 50, 'SHOES'),
('BATA BROWN SLIPON FOR MEN', 'BBSFM', 1999, 'FORMAL', 30, 'SHOES'),
('Deerskin Sneaker', 'DS01', 1850, 'CASUAL', 50, 'SHOES'),
(' BAYABAND CLOG', 'BC', 3847, 'CROCS', 30, 'SHOES'),
('SOLEPLAY Brown Lace-Up', 'SBLUP', 2099, 'FORMAL', 25, 'SHOES');

-- --------------------------------------------------------

--
-- Table structure for table `sports_cloths`
--

DROP TABLE IF EXISTS `sports_cloths`;
CREATE TABLE IF NOT EXISTS `sports_cloths` (
  `NAME` varchar(200) NOT NULL,
  `ID` varchar(200) NOT NULL,
  `COLOR` varchar(200) NOT NULL,
  `I_ADD` varchar(200) NOT NULL,
  `NO` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`NO`),
  UNIQUE KEY `NO` (`NO`),
  KEY `ID` (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sports_cloths`
--

INSERT INTO `sports_cloths` (`NAME`, `ID`, `COLOR`, `I_ADD`, `NO`) VALUES
('individualLIGA ', 'S01', 'Black', 'https://images.puma.com/image/upload/f_auto,q_auto,b_rgb:fafafa,w_750,h_750/global/658984/57/fnd/IND/fmt/png/individualLIGA-Graphic-Mens-Football-Jersey', 5);

-- --------------------------------------------------------

--
-- Table structure for table `sports_shoes`
--

DROP TABLE IF EXISTS `sports_shoes`;
CREATE TABLE IF NOT EXISTS `sports_shoes` (
  `NAME` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `ID` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `COLOR` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `I_ADD` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `NO` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`NO`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `sports_shoes`
--

INSERT INTO `sports_shoes` (`NAME`, `ID`, `COLOR`, `I_ADD`, `NO`) VALUES
('SOFTRIDE Symmetry', 'SS', 'Black', 'https://images.puma.com/image/upload/f_auto,q_auto,b_rgb:fafafa,w_600,h_600/global/379582/01/sv01/fnd/IND/fmt/png/SOFTRIDE-Symmetry-Unisex-Running-Shoes', 9),
('Deviate NITRO', 'DN', 'Black', 'https://images.puma.com/image/upload/f_auto,q_auto,b_rgb:fafafa,w_600,h_600/global/379992/03/sv01/fnd/IND/fmt/png/Puma-Foam-Stride-Mens-Running-Shoes', 12);

-- --------------------------------------------------------

--
-- Table structure for table `s_info`
--

DROP TABLE IF EXISTS `s_info`;
CREATE TABLE IF NOT EXISTS `s_info` (
  `NO` int NOT NULL AUTO_INCREMENT,
  `ID` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `IMG_ADD` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `S_SIZE` int DEFAULT NULL,
  `COLOR` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `AVLBL` int NOT NULL,
  PRIMARY KEY (`NO`),
  KEY `ID` (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=72 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `s_info`
--

INSERT INTO `s_info` (`NO`, `ID`, `IMG_ADD`, `S_SIZE`, `COLOR`, `AVLBL`) VALUES
(1, 'PQSF01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue1.jpeg', 6, 'GREY', 5),
(2, 'PQSF01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue1.jpeg', 7, 'GREY', 5),
(3, 'PQSF01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue1.jpeg', 8, 'GREY', 5),
(4, 'PQSF01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue1.jpeg', 9, 'GREY', 5),
(5, 'PQSF01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue1.jpeg', 10, 'GREY', 5),
(6, 'PQSF01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue2.jpeg', 6, 'WHITE', 5),
(7, 'PQSF01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue2.jpeg', 7, 'WHITE', 5),
(8, 'PQSF01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue2.jpeg', 8, 'WHITE', 5),
(9, 'PQSF01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue2.jpeg', 9, 'WHITE', 5),
(10, 'PQSF01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue2.jpeg', 10, 'WHITE', 5),
(11, 'PQSF01\r\n', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue3.jpeg', 6, 'BLACK', 5),
(12, 'PQSF01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue3.jpeg', 7, 'BLACK', 5),
(13, 'PQSF01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue3.jpeg', 8, 'BLACK', 5),
(14, 'PQSF01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue3.jpeg', 9, 'BLACK', 5),
(15, 'PQSF01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue3.jpeg', 10, 'BLACK', 5),
(16, 'CR01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue11.jpg', 6, 'NAVY', 5),
(17, 'CR01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue11.jpg', 7, 'NAVY', 5),
(18, 'CR01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue11.jpg', 8, 'NAVY', 5),
(19, 'CR01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue11.jpg', 9, 'NAVY', 5),
(20, 'CR01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue11.jpg', 10, 'NAVY', 5),
(21, 'CR01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue14.jpeg', 6, 'GRADIANT', 5),
(22, 'CR01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue14.jpeg', 7, 'GRADIANT', 5),
(23, 'CR01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue14.jpeg', 8, 'GRADIANT', 5),
(24, 'CR01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue14.jpeg', 9, 'GRADIANT', 5),
(25, 'CR01\r\n', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue14.jpeg', 10, 'GRADIANT', 5),
(26, 'AS01\r\n', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue8.jpeg', 6, 'WHITE_BLUE', 5),
(27, 'AS01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue8.jpeg', 7, 'WHITE_BLUE', 5),
(28, 'AS01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue8.jpeg', 8, 'WHITE_BLUE', 5),
(29, 'AS01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue8.jpeg', 9, 'WHITE_BLUE', 5),
(30, 'AS01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue8.jpeg', 10, 'WHITE_BLUE', 5),
(31, 'AS01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue9.jpeg', 6, 'GREEN_BLACK', 5),
(32, 'AS01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue9.jpeg', 7, 'GREEN_BLACK', 5),
(33, 'AS01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue9.jpeg', 8, 'GREEN_BLACK', 5),
(34, 'AS01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue9.jpeg', 9, 'GREEN_BLACK', 5),
(35, 'AS01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue9.jpeg', 10, 'GREEN_BLACK', 5),
(36, 'AS01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue10.jpeg', 6, 'WHITE_BLACK', 5),
(37, 'AS01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue10.jpeg', 7, 'WHITE_BLACK', 5),
(38, 'AS01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue10.jpeg', 8, 'WHITE_BLACK', 5),
(39, 'AS01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue10.jpeg', 9, 'WHITE_BLACK', 5),
(40, 'AS01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue10.jpeg', 10, 'WHITE_BLACK', 5),
(41, 'DBD01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue16.jpg', 6, 'MULTI', 5),
(42, 'DBD01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue16.jpg', 7, 'MULTI', 5),
(43, 'DBD01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue16.jpg', 8, 'MULTI', 5),
(44, 'DBD01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue16.jpg', 9, 'MULTI', 5),
(45, 'DBD01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue16.jpg', 10, 'MULTI', 5),
(46, 'DBD01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue17.jpg', 6, 'NAVY', 5),
(47, 'DBD01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue17.jpg', 7, 'NAVY', 5),
(48, 'DBD01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue17.jpg', 8, 'NAVY', 5),
(49, 'DBD01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue17.jpg', 9, 'NAVY', 5),
(50, 'DBD01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue17.jpg', 10, 'NAVY', 5),
(51, 'ROD01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue18.jpg', 6, 'BLACK', 5),
(52, 'ROD01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue18.jpg', 7, 'BLACK', 5),
(53, 'ROD01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue18.jpg', 8, 'BLACK', 5),
(54, 'ROD01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue18.jpg', 9, 'BLACK', 5),
(55, 'ROD01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue18.jpg', 10, 'BLACK', 5),
(56, 'ROD01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue19.jpg', 6, 'GRAY', 5),
(57, 'ROD01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue19.jpg', 7, 'GRAY', 5),
(58, 'ROD01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue19.jpg', 8, 'GRAY', 5),
(59, 'ROD01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue19.jpg', 9, 'GRAY', 5),
(60, 'ROD01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue19.jpg', 10, 'GRAY', 5),
(61, 'CR701', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue15.jpeg', 6, 'BLUE', 5),
(62, 'CR701', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue15.jpeg', 7, 'BLUE', 5),
(63, 'CR701', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue15.jpeg', 8, 'BLUE', 5),
(64, 'CR701', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue15.jpeg', 9, 'BLUE', 5),
(65, 'CR701', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue15.jpeg', 10, 'BLUE', 5),
(71, 'SP01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue16.jpg', 6, 'MULTI', 5);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
