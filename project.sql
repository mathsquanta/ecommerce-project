-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2017 at 07:11 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `p_id` int(100) NOT NULL,
  `ip_add` varchar(250) NOT NULL,
  `user_id` int(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_image` text NOT NULL,
  `qty` int(100) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `total_amount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `p_id`, `ip_add`, `user_id`, `product_title`, `product_image`, `qty`, `price`, `total_amount`) VALUES
(6, 15, '0', 4, 'Malatang', '	\r\n/onlineshopping/images/CHINESE/malatang_lunch.jpg', 2, '12.21', '12.21'),
(10, 24, '0', 4, 'Salsa Chips', '	\r\n/onlineshopping/images/MEXICAN/salsandchips.jpg', 2, '3.56', '3.56'),
(11, 7, '0', 4, 'Ila Alasepo', '	\r\n/onlineshopping/images/AFRICA/ila.jpg', 2, '7.56', '7.56');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(10) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'African'),
(2, 'Asian'),
(3, 'American');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(10) NOT NULL,
  `menu_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_title`) VALUES
(1, 'Breakfast'),
(2, 'Lunch'),
(3, 'Dinner');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `product_menu` int(100) NOT NULL,
  `product_title` text NOT NULL,
  `product_price` decimal(10,2) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_menu`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES
(1, 1, 1, 'plantain', '12.34', 'Fried plantain served with eggs. Unbeatable choice for your breakfast.', '	\r\n/onlineshopping/images/AFRICA/plantain.jpg', 'Plantain, Africa, Fried, Breakfast'),
(2, 1, 1, 'Pap and Akara', '12.90', 'Pap and fried bean cake. Served hot.', '	\r\n/onlineshopping/images/AFRICA/papakara.jpg', 'Pap, Akara, Fried, Bean, cake, Africa, Breakfast'),
(3, 1, 1, 'Spaghetti', '10.08', 'Made specially with school children in mind. We do know the love their spaghetti in the morning. ', '	\r\n/onlineshopping/images/AFRICA/spagetti.jpg', 'Spaghetti, School, Children, Breakfast, African, Morning,love.'),
(4, 1, 2, 'Amala', '21.50', 'Nice Nigerian dish made from Yam flour. Hot choice for you during your break at work.', '	\r\n/onlineshopping/images/AFRICA/amala.jpg', 'Amala, Lunch, Afternoon, Nigerian, African, Yam, Flour '),
(5, 1, 2, 'Dunkunu', '11.21', 'Dunkunu from Ghana. Simply yummy!', '	\r\n/onlineshopping/images/AFRICA/dunkunu.jpg', 'Dunkunu, Ghana, Lunch, African'),
(6, 1, 2, 'Efo Riro', '21.22', 'Variety of African vegetable. Available on Thursdays at Lunch. Make a reservation today.', '	\r\n/onlineshopping/images/AFRICA/efo_riro.jpg', 'Vegetable, Efo, African, Lunch, Thursdays'),
(7, 1, 3, 'Ila Alasepo', '7.56', 'Freshly prepared Okra with variety of fish and beef. You may call us for a special package.', '	\r\n/onlineshopping/images/AFRICA/ila.jpg', 'Ila, Alasepo, Dinner, Special, Okra, African'),
(8, 1, 3, 'Moinmoin', '9.21', 'Baked Pea flour. Delicious.', '	\r\n/onlineshopping/images/AFRICA/moinmoin.jpg', 'Moinmoin, African, Dinner, Pea, Baked'),
(9, 1, 3, 'Yam and Egg', '13.56', 'We serve variety of Yam ranging and serve with egg or fried stew.', '	\r\n/onlineshopping/images/AFRICA/yam.jpg', ''),
(10, 2, 1, 'Chow Mein', '4.50', 'Nice chinese meal.', '	\r\n/onlineshopping/images/CHINESE/chowmein.jpg', 'Chinese, Breakfast, Asian, Chow mein'),
(11, 2, 1, 'Pancake', '7.89', 'Simple and delicious light breakfast.', '	\r\n/onlineshopping/images/CHINESE/pancake.jpg', 'Pancake, Asian, Breakfast, Light'),
(12, 2, 1, 'Rice Noddles', '9.34', 'Not just noddle but rice noddle. Highly nutritional.', '	\r\n\r\n/onlineshopping/images/CHINESE/rice_noddles.jpg', 'Rice, Noddle, Asian, Breakfast'),
(13, 2, 2, 'Roujiamo', '12.21', 'Chinese burger with traditional Asian cheese and salad. The grill guys offer the very best.', '	\r\n/onlineshopping/images/CHINESE/roujiamo.jpg', 'Asian, Lunch, Salad, Grill,Roijiamo, Burger'),
(14, 2, 2, 'Gaifan', '21.32', 'You have been asking for this for a long time. We have finally included it on our list for your delight. Enjoy.', '	\r\n/onlineshopping/images/CHINESE/gaifan_lunch.jpg', 'Gaifan, ask, Asian, Lunch, answer'),
(15, 2, 2, 'Malatang', '12.21', 'Matalang at its best. Complete with assorted Asian condiment.', '	\r\n/onlineshopping/images/CHINESE/malatang_lunch.jpg', 'Matalang, Asian, Lunch, Condiment, complete'),
(16, 2, 3, 'Sweet Pork', '7.50', 'Sweet indeed. A taste will find you asking for more!!!', '	\r\n/onlineshopping/images/CHINESE/sweetpork.jpg', 'Sweet pork, Dinner, Asian, more, taste.'),
(17, 2, 3, 'Spring rolls', '9.10', 'Not restricted to Spring. Enjoy the best spring roll around this fall.', '	\r\n/onlineshopping/images/CHINESE/springrolls.jpg', 'Fall, Spring roll, Asian, Dinner.'),
(18, 2, 3, 'Wontond', '13.43', 'Wontond and Dumplings. A match for your appetite.', '	\r\n/onlineshopping/images/CHINESE/wontond_dumplings.jpg', 'Wontond, Dumplings, Asian, Dinner, Appetite.'),
(19, 3, 1, 'Chicken rice', '16.50', 'Boneless chicken and rice served in fashionable proportion.', '	\r\n/onlineshopping/images/MEXICAN/chickenrice.jpg', 'Chicken, Boneless, Rice, American, Breakfast.'),
(20, 3, 1, 'Chipotle', '13.90', 'Low fat Chipotle for you. Healthy for your health.', '	\r\n/onlineshopping/images/MEXICAN/Chipotle.jpg', 'Chipotle, Low fat, American, Breakfast'),
(21, 3, 1, 'Chirozo', '8.00', 'Chirozo. Just ask us for your choice of sauce.', '	\r\n/onlineshopping/images/MEXICAN/chirozo.jpg', 'Sauce, Chirozo, American, Breakfast'),
(22, 3, 2, 'Steak Tottilas', '20.00', 'Visit of our grill for a perfect steak treat.', '	\r\n/onlineshopping/images/MEXICAN/steaktotilas.jpg', 'Steak, Tottilas, Lunch, American, grill'),
(23, 3, 2, 'Chilaquiles', '12.90', 'Chilaquiles with butter spread.', '	\r\n/onlineshopping/images/MEXICAN/Chilaquiles.jpg', 'Chilaquiles, American, Lunch, butter.'),
(24, 3, 2, 'Salsa Chips', '3.56', 'Cheap, satisfying chips.', '	\r\n/onlineshopping/images/MEXICAN/salsandchips.jpg', 'Salsa, Chips, Cheap, American, Lunch'),
(25, 3, 3, 'Enchilades', '23.21', 'Enchilades finally here!!', '	\r\n/onlineshopping/images/MEXICAN/enchilades.jpg', 'Enchilades, American, dinner'),
(26, 3, 3, 'Yellow rice', '16.98', 'Yellow rice from our grill. Takes just 5 minutes on order.', '	\r\n/onlineshopping/images/MEXICAN/yellowrice.jpg', 'Yellow rice, Order, American, dinner'),
(27, 3, 3, 'Chicken tostades', '14.34', 'Chicken tostades. ', '	\r\n/onlineshopping/images/MEXICAN/chickentostades.jpg', 'Chicken tostades,American, Dinner');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(300) NOT NULL,
  `last_name` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `address1` varchar(300) NOT NULL,
  `address2` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`) VALUES
(4, 'Samuel', 'Oluwafemi', 'grouplead@serversideproject.msc', 'ccd5945561eea00ff875f50f68113c47', '1234567890', '10 XYZ street', 'ABC state'),
(5, 'Yellaji', 'Kola', 'member@serversideproject.msc', 'ccd5945561eea00ff875f50f68113c47', '0123456789', '11 XYZ street', 'DEF state');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
