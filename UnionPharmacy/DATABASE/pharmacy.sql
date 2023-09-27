-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2020 at 01:10 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharmacy`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `msg_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(20) NOT NULL,
  `contact_no` varchar(11) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `contact_no` int(11) NOT NULL,
  `cus_pwd` varchar(250) NOT NULL,
  `actype` text NOT NULL DEFAULT 'Customer'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `email`, `user_name`, `first_name`, `last_name`, `address`, `contact_no`, `cus_pwd`, `actype`) VALUES
(3, 'admin@pharmacy.lk', 'admin', 'Chanaka', 'Wickramasinghe', '97B Rathmalana', 765555651, '$2y$10$eDYNGYcgqUgMsEbLdaVS4eHktVcNU1M5kzfHBzMO1xhjs/V6r7bka', 'Customer'),
(5, 'chanaka@gmail.com', 'chanaka', 'Chanaka', 'Wickramasinghe', '97B Rathmalana', 4555555, '098f6bcd4621d373cade4e832627b4f6', 'Customer'),
(6, 'shehani@gmail.com', 'shehani', 'Shehani', 'Fernando', '97B Rathmalana', 545455454, '$2y$10$iVDQDdNcgppJqpwevNYxHuTD4.798NdARyMy3KyPa42nW7uaUIMN2', 'Customer'),
(7, 'osanda@gmail.com', 'osanda123', 'Osanda', 'Gamage', '97B Rathmalana', 64644646, '$2y$10$KWxFJRIvtyKLXYZU5iBJruxH0K0SwBUFGTIgMasJUBk1cOqT0PCia', 'Customer'),
(8, 'induwara@gmail.com', 'induwara', 'Induwara', 'Gurusinghe', '97B Rathmalana', 454545445, '$2y$10$gq8MjD6X.UkvW6TIEaJoTe4lA89jKqiBQQWOLKCz1I5gJjJOajg6e', 'Customer'),
(9, 'nandanasenarath@gmail.com', 'nandana', 'nandana', 'senarath', 'badalkumbura 20 ', 2147483647, '$2y$10$O9TkmHyg.jmdy.xYgo94DejLRF2DIBzqSwCJPFmj3rbg6z4kGI8R.', 'Customer'),
(10, 'vimal@gmail.com', 'vimal', 'nimal', 'kamal', 'assdasjdfjdsl dfn', 2147483647, '$2y$10$at9l3TM6QXPs9CG/LTKoQ.ncKW14QGrfxWrFwkLQPiaSAwprz9zqG', 'Customer'),
(11, 'richmindlk@gmail.com', 'tao', 'sdsadsa', 'sdsa', 'dsadas', 32423423, '$2y$10$PQy/wNG7mPUV3yxr/JvxN.CnpSnCruOtdOWeDzSqzkBfWXgebJ6by', 'Customer'),
(12, 'rbr.buisness@gmail.com', 'rbr', 'Ruchira', 'Ranasinghe', 'no 68,Godamunna,', 769997855, '$2y$10$V53PRGboxq4Vzi1Fib4SVulZmNvxu6IS4Bqwn3H94LzsZINC2cya.', 'Customer'),
(13, 'pranee99@gmail.com', 'Praneetha', 'praneetha', 'JP', '12, Dharshanpura , Kandy', 771626619, '$2y$10$3LjTWSkYYwZonvCOPQWTo.xEy5Cml0b0wM4E38MEUzVpBtoSQTlSm', 'Customer'),
(15, 'rbr@gmail.com', 'rbr', 'ruchira', 'Ranasinghe', 'ggg', 0, '$2y$10$THNwZlDu/1sA5DQbeNpmYujJW3xyHqZkdrnmuxvuPbI9dMvYJxV8e', 'Customer'),
(16, 'rbr@gmail.com', 'rbr', 'ruchira', 'bandara', '253,haragama ,kandy', 0, '$2y$10$tglGHlb7wFQlNvuG0gJPLuo.wEIdt97JDQiIreP4iyJyM3.NbOOhy', 'Customer');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `empid` int(100) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `address` text NOT NULL,
  `duty` text NOT NULL,
  `email` text NOT NULL,
  `contact_no` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`empid`, `fname`, `lname`, `address`, `duty`, `email`, `contact_no`) VALUES
(1, 'Praneetha', 'Jayaprakash', 'Kandy', 'Administrator', 'it201110382my.sliit.lk', 771626619),
(2, 'Anuradha', 'Herath', 'Pilimathalawa', 'Pharmacist', 'anu99@gmail.com', 717611932),
(3, 'Prasad', 'Lanka', 'Gurudeniya', 'Stock Manager', 'prasadlanka732@gmail.com', 771236457),
(4, 'Thilokanjalee', 'Arawa', 'Peradeniya', 'Stock Manager', 'thilo99@gmail.com', 777894523),
(5, 'Ruchira ', 'Ranasinghe', 'Theldeniya', 'Pharmacist', 'ruchaiNu@gmail.com', 785469852);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_name` varchar(100) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `order_email` varchar(100) NOT NULL,
  `order_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_name`, `cus_id`, `order_email`, `order_address`) VALUES
(1, '0', 10, '0', '0'),
(2, 'asdsadsa', 3, 'asdsad', 'asdasdsad');

-- --------------------------------------------------------

--
-- Table structure for table `orders_items`
--

CREATE TABLE `orders_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders_items`
--

INSERT INTO `orders_items` (`id`, `order_id`, `product_id`, `cus_id`, `quantity`) VALUES
(1, 1, 37, 10, 5),
(2, 2, 37, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `card_name` varchar(100) NOT NULL,
  `card_number` varchar(20) NOT NULL,
  `exp_year` varchar(10) NOT NULL,
  `cvv` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pid`, `name`, `email`, `address`, `card_name`, `card_number`, `exp_year`, `cvv`) VALUES
(3, 'asdsad', 'asdsadsa@gmail.com', 'sadsada', 'assa', '$2y$10$M9ap9X5T.R3.b', '213', '231'),
(4, 'fdgdgdfg', 'dfgfdgdf', 'dfgfdgdfg', 'dfgfdg', '$2y$10$UIs47MFeWF/G1', '435435', '34543');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(150) DEFAULT NULL,
  `product_type` varchar(150) DEFAULT NULL,
  `inner_type` varchar(150) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `img_location` varchar(500) DEFAULT NULL,
  `description` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_type`, `inner_type`, `quantity`, `price`, `img_location`, `description`) VALUES
(42, 'CeraVe baby shampoo', 'Hygiene and liquid', NULL, 100, 145, '5f926f45d31955.70657842.jpg', 'baby shampoo, is specially designed to gently cleanse baby fine hair '),
(43, 'Dettol hand wash', 'Hygiene and liquid', NULL, 150, 175, '5f926faed19522.03320533.jpg', 'Dettol Original Liquid Hand Wash kills 99.9% of germs. Using it every day protects hands from germs and helps keep them hygienically clean'),
(44, 'comfort', 'Hygiene and liquid', NULL, 120, 185, '5f927056477176.27059280.jpg', 'Dettol Original Liquid Hand Wash kills 99.9% of germs. Using it every day protects hands from germs and helps keep them hygienically clean'),
(45, 'Lysol', 'Hygiene and liquid', NULL, 50, 175, '5f9270a9af10a1.02227334.jpg', 'Dettol Original Liquid Hand Wash kills 99.9% of germs. Using it every day protects hands from germs and helps keep them hygienically clean'),
(46, 'Mixed baby food', 'Medicine and Helthcare', NULL, 250, 240, '5f9271dccaf294.26055589.jpg', 'Baby food is any soft, easily consumed food other than breastmilk or infant formula that is made specifically for human babies between four and six months and two years old. '),
(47, 'Pampers pants', 'Medicine and Helthcare', NULL, 170, 180, '5f92727df22129.63574385.jpg', 'Ultra Absorb Core provides your baby a new type of dryness overnight - breathable dryness'),
(48, 'clean & clear face wash', 'Skin Care and Cosmatics', NULL, 200, 120, '5f9272c8b62c27.66348311.jpg', 'Clean & Clear Foaming Face Wash helps prevent oily skin and pimples'),
(49, 'Alokesh hair oil', 'Skin Care and Cosmatics', NULL, 100, 230, '5f92735f403092.86087338.jpg', 'Alokesh starts using an unknown hair oil and loses his hair which results in the marriage being called off'),
(50, 'Panadol', 'Medicine and Helthcare', NULL, 1000, 120, '5f92752aaf7627.69731802.jpg', 'The Panadol range including fast-absorbing formulations that provide fast pain relief'),
(51, 'amoxicillin ', 'Medicine and Helthcare', NULL, 1000, 700, '5f927926dbfac8.86079702.jpg', 'Amoxicillin is an antibiotic used to treat a number of bacterial infections.'),
(52, 'Voltaren ', 'Medicine and Helthcare', NULL, 200, 170, '5f927ae6709706.92397149.jpg', 'Voltaren range includes oral (tablet and liquid capsules) and topical (applied to the skin) treatments'),
(53, 'Baby Cheramy  cream', 'Skin Care and Cosmatics', NULL, 100, 148, '5f927cbf94d490.35987334.jpg', 'Baby Cheramy Cream is enriched with Almond extracts, Milk and Vitamin E to nourish & protect your babyâ€™s delicate skin with its rich moisturising goodness'),
(54, 'COMBIGAN EYE DROPS', 'Medicine and Helthcare', NULL, 100, 168, '5f927ebe3dfb12.32690585.jpg', 'Combigan Ophthalmic Solution is a prescription that is used for the treatment of pressure in the eyes (ocular hypertension) and glaucoma'),
(55, 'Gastronil', 'Hygiene and liquid', NULL, 120, 250, '5f92805cec13c5.82709193.jpg', 'Dyspepsia, gas, acidity, flatulence, bloating, colic'),
(56, 'Adult chesty cough syrup', 'Hygiene and liquid', NULL, 200, 300, '5f928108c1dfe2.48538187.jpg', 'Adult Chesty Cough Syrup Guaifenesin 100mg/5ml Oral Solution'),
(57, 'Ayurvedic Hair Oil 100ml', 'Skin Care and Cosmatics', NULL, 200, 650, '5f9281ed6f3cd2.37467464.jpg', 'Rely hair oil is an advanced formulation which contains 21 Ayurvedic herbs. The hair oil is a result of 7 years research and has found to be very effective.'),
(58, 'Sunsilk Stunning Black Shine Conditioner 180ml', 'Skin Care and Cosmatics', NULL, 120, 240, '5f928309052f90.02192729.jpg', 'Sunsilk Stunning Black Shine Conditioner 180ML The Sunsilk black shine, smooth and tangle-free nourishing conditioner is enriched with the goodness of.'),
(59, 'Veet', 'Skin Care and Cosmatics', NULL, 50, 700, '5f92845e22fc20.83178811.png', 'veet strips saves the lot of time. no need to go to parlour and wait. waxing can be done at anytime as per convenience'),
(60, 'Hair wax', 'Skin Care and Cosmatics', NULL, 120, 550, '5f92854da35105.80883015.png', 'Hair wax is a thick hairstyling product containing wax, used to assist with holding the hair'),
(62, 'Gillette Shaving Foam', 'Skin Care and Cosmatics', NULL, 100, 550, '5f928713018616.66552200.jpg', 'Gillette Sensitive Skin Shaving Foam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`empid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `orders_items`
--
ALTER TABLE `orders_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `empid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders_items`
--
ALTER TABLE `orders_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
