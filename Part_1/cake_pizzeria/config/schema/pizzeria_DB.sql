-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2015 at 11:12 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pizzeria`
--
CREATE DATABASE IF NOT EXISTS `pizzeria` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pizzeria`;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) DEFAULT NULL,
  `city` varchar(20) NOT NULL,
  `province` varchar(20) NOT NULL,
  `postalcode` varchar(7) NOT NULL,
  `phonenumber` varchar(15) NOT NULL,
  `selectpizza` varchar(50) NOT NULL,
  `pizzasize` varchar(20) NOT NULL,
  `crusttype` varchar(20) NOT NULL,
  `toppinglist` varchar(255) DEFAULT NULL,
  `user_type` varchar(20) DEFAULT 'customer',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'working',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `address1`, `address2`, `city`, `province`, `postalcode`, `phonenumber`, `selectpizza`, `pizzasize`, `crusttype`, `toppinglist`, `user_type`, `created`, `modified`, `user_id`, `status`) VALUES
(2, 'Steve', 'steve@gmail.com', '100 Main Street', '', 'Kitchener', 'Ontario', 'N2P 1P2', '123-456-7890', 'Caramelized Onion Pizza', 'Large', 'Stuffed', 'Roma Tomatoes,Spinach,Anchovies', 'customer', '2015-11-05 19:40:26', '2015-11-05 21:56:54', NULL, 'working'),
(3, 'John', 'John@gmail.com', 'Unit 1002', '210 STIRLING LANE', 'KITCHENER', 'Ontario', 'N2G 4L1', '519-123-8322 ', 'BBQ Chicken Pizza', 'X-Large', 'Pan', 'Roma Tomatoes,Spinach,Pineapple,Brocooli,Meats,Mozzarella,BBQ Sauce', 'customer', '2015-11-05 20:12:18', '2015-11-05 20:25:31', NULL, 'complete'),
(4, 'Paul', 'paul@gmail.com', '240 Apartment', '114 GREENFIELD ST', 'KITCHENER', 'Ontario', 'N2C 2M2', '519-152-6876 ', 'Muffuetta Pizza', 'Small', 'Thin', '', 'customer', '2015-11-05 20:13:23', '2015-11-05 20:13:23', NULL, 'working'),
(5, 'Susan', 'susan@yahoo.com', 'Unit 200', '155 DUNHAM AVE', 'KITCHENER', 'Ontario', 'N2H 2A2', '519-183-3478 ', 'Cheese Calzone', 'Medium', 'Stuffed', 'Pineapple,Brocooli,Meats,Anchovies,Bacon Crumble,Chicken', 'customer', '2015-11-05 20:14:31', '2015-11-05 20:14:31', NULL, 'working'),
(6, 'Smith', 'smith@gmail.com', '2450 Boulevard Laurier, Québec', '', ' Québec', 'Quebec', 'G1V 2L1', '418-653-4184', 'Sunny Side Up Pizza', 'X-Large', 'Hand-tossed', 'Bacon Crumble,Feta Cheese,Tomato Sauce,Chill Sauce', 'customer', '2015-11-05 20:17:44', '2015-11-05 20:17:44', NULL, 'working'),
(7, 'James', 'james@gmail.com', '100 Suit', '330 York Ave', 'Winnipeg', 'Manitoba', 'R3C 0N9', '204-942-0101', 'Seafood Pizza', 'X-Large', 'Stuffed', 'Veggies,Brocooli,Mozzarella,Hot Sauce,Chill Sauce', 'customer', '2015-11-05 20:19:55', '2015-11-05 20:19:55', NULL, 'working'),
(8, 'Macdonald', 'mcd@gmail.com', '2102 11th Avenue', '', 'Regina', 'Saskatchewan', 'S4P 3Y6', '306-525-1301', 'Grilled Pizza', 'Large', 'Pan', 'Pineapple,Anchovies,Feta Cheese,Hot Sauce', 'customer', '2015-11-05 20:21:58', '2015-11-05 20:21:58', NULL, 'working');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `created`, `modified`) VALUES
(9, 'admin', '$2y$10$Sk0LqlNpChE8YMuSzwvYJeCWyqUSVKCD4ivM2z4D6w1nVm0qu8Rxe', 'admin', NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
