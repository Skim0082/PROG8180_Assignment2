-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2015 at 04:56 PM
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `address1`, `address2`, `city`, `province`, `postalcode`, `phonenumber`, `selectpizza`, `pizzasize`, `crusttype`, `toppinglist`, `user_type`, `created`, `modified`) VALUES
(1, 'Steve', 'steve@gmail.com', '100 King Street N.', '', 'Kitchener', 'Ontario', 'M2N 3A4', '123-456-7890', 'Sunny Side Up Pizza', 'X-Large', 'Stuffed', 'Veggies,Roma Tomatoes,Red Onions,Spinach,Pineapple,Brocooli,Meats,Anchovies,Bacon Crumble', 'customer', '2015-10-19 22:11:22', '2015-10-19 22:11:22'),
(2, 'afdaf', 'a@b.com', 'adfa', 'afda', 'kitchener', 'Ontario', 'n2p 1z4', '', '', 'afa', 'afa', '', 'aff', '2015-10-20 05:16:13', '2015-10-20 05:16:13'),
(3, 'fafaaff', 'a@b.comvf', 'adfa', 'afaf', 'kitchener', 'ontario', 'n2p 1z4', '123-456-7890', 'large', 'small', 'pan', 'faf', 'afaf', '2015-10-20 05:49:26', '2015-10-20 05:49:26'),
(4, 'grgrg', 'b@b.com', 'ekfja', 'dkfaj;', 'dkjfa;k', 'fka', 'df', 'fkaj;', 'fa', 'afda', 'af', '', '', '2015-10-20 05:51:07', '2015-10-20 05:51:07'),
(5, 'dfafafaf', 'bbb@aaa.com', 'afdkaf', 'dfaf', 'dfa', 'Ontario', 'n2p 1z4', '123-4546-7890', 'Sunny Side Up Pizza', 'X-Large', 'Hand-tossed', NULL, 'customer', '2015-10-20 05:57:26', '2015-10-20 05:57:26'),
(6, '2dfa', 'bbe@m.com', 'af', 'af', 'adf', 'Ontario', 'dfa', 'dff', 'Sunny Side Up Pizza', 'X-Large', 'Hand-tossed', NULL, 'customer', '2015-10-20 06:00:28', '2015-10-20 06:00:28'),
(7, '2dfafef', 'bbee@m.com', 'af', 'af', 'adf', 'Ontario', 'dfa', 'dff', 'Sunny Side Up Pizza', 'X-Large', 'Hand-tossed', NULL, 'customer', '2015-10-20 06:00:37', '2015-10-20 06:00:37'),
(8, '2dfefeee', 'bbbnee@m.com', 'af', 'af', 'adfffffffffffff', 'Ontario', 'dfa', 'dff', 'Sunny Side Up Pizza', 'X-Large', 'Hand-tossed', NULL, 'customer', '2015-10-20 06:01:13', '2015-10-20 06:01:13'),
(9, '2dfefeee', '3nee@m.com', 'af', 'af', 'adfffffffffffff', 'Ontario', 'dfa', 'dff', 'Sunny Side Up Pizza', 'X-Large', 'Hand-tossed', 'Veggies', 'customer', '2015-10-20 06:01:40', '2015-10-20 06:01:40'),
(10, 'kkk', 'jkk@k.com', 'kdkd', 'kdkd', 'kdk', 'Ontario', 'dkdk', 'dkdkd', 'Sunny Side Up Pizza', 'X-Large', 'Hand-tossed', 'feff', 'customer', '2015-10-20 06:03:11', '2015-10-20 06:07:46'),
(11, 'bbbmm', 'nmnnb2@aa.com', 'nnn', 'df', 'f', 'Ontario', 'faf', 'af', 'Sunny Side Up Pizza', 'X-Large', 'Hand-tossed', 'afafa', 'customer', '2015-10-20 06:04:06', '2015-10-20 06:07:37'),
(12, 'bbbpmm', 'npmnnb2@aa.com', 'nnn', 'df', 'f', 'Ontario', 'faf', 'af', 'Sunny Side Up Pizza', 'X-Large', 'Hand-tossed', '', 'customer', '2015-10-20 06:04:34', '2015-10-20 06:04:34'),
(13, 'mmvbv', 'vv@mbc.cc', 'dfa', 'dfaf', 'dfa', 'Ontario', 'dfa', 'daf', 'Sunny Side Up Pizza', 'X-Large', 'Hand-tossed', 'Roma Tomatoes', 'customer', '2015-10-20 06:27:25', '2015-10-20 06:27:25'),
(14, 'mmvbvh', 'vvh@mbc.cc', 'dfa', 'dfaf', 'dfa', 'Ontario', 'dfa', 'daf', 'Grilled Pizza', 'Medium', 'Stuffed', 'Bacon Crumble', 'customer', '2015-10-20 06:27:58', '2015-10-20 06:27:58'),
(15, 'kj;klj', 'rbdid@gdfe.com', 'dfaf', 'dfaf', 'kitechener', 'Ontario', 'n2p 1z4', '123-456-7890', 'Muffuetta Pizza', 'Small', 'Stuffed', 'Roma Tomatoes', 'customer', '2015-10-20 14:29:56', '2015-10-20 14:29:56'),
(16, 'kjkmui', 'ooo@oii.com', 'kj;', ';kj;', 'waterloo', 'Ontario', 'n2q 1n2', '123-456-7890', 'Caramelized Onion Pizza', 'Large', 'Thin', 'Chill Sauce', 'customer', '2015-10-20 14:42:37', '2015-10-20 14:42:37');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
