-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2018 at 12:17 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bica`
--

-- --------------------------------------------------------

--
-- Table structure for table `arrivals`
--

CREATE TABLE IF NOT EXISTS `arrivals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `supplier_name` varchar(40) DEFAULT NULL,
  `product_supplied` varchar(40) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `balance` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `invoice` int(11) DEFAULT NULL,
  `date_arrived` varchar(20) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `arrivals`
--

INSERT INTO `arrivals` (`id`, `supplier_name`, `product_supplied`, `quantity`, `balance`, `price`, `invoice`, `date_arrived`, `status`) VALUES
(6, 'emzor', 'vasoprin', 20, 0, 200, 116563, '28/Oct/2018', 'fully paid'),
(7, 'juhel', 'sudrex', 50, 440, 500, 723822, '28/Oct/2018', 'part payment');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `sales_person` varchar(20) DEFAULT NULL,
  `item` varchar(40) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(20) DEFAULT NULL,
  `product_type` varchar(20) DEFAULT NULL,
  `product_description` varchar(40) DEFAULT NULL,
  `product_expiry_date` date DEFAULT NULL,
  `product_quantity` int(11) DEFAULT NULL,
  `current_quantity` int(11) DEFAULT NULL,
  `product_supplier` varchar(40) DEFAULT NULL,
  `cost_price` int(11) DEFAULT NULL,
  `selling_price` int(11) DEFAULT NULL,
  `date_added` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_type`, `product_description`, `product_expiry_date`, `product_quantity`, `current_quantity`, `product_supplier`, `cost_price`, `selling_price`, `date_added`) VALUES
(1, 'lumatem', 'tablet', 'malaria treatment', '2020-11-11', 30, 197, 'juhel', 300, 450, '23/10/2018'),
(2, 'sudrex', 'tablet', 'headache', '2222-02-22', 200, NULL, 'emzor', 120, 200, '28/10/2018');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE IF NOT EXISTS `sales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice` varchar(20) DEFAULT NULL,
  `user` varchar(20) DEFAULT NULL,
  `products_sold` varchar(40) DEFAULT NULL,
  `sold_quantity` int(11) DEFAULT NULL,
  `amount_sold` int(11) DEFAULT NULL,
  `date_sold` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `invoice`, `user`, `products_sold`, `sold_quantity`, `amount_sold`, `date_sold`) VALUES
(1, '378607', 'user', 'lumatem', 12, 5400, '2018-10-22'),
(2, '530870', 'user', 'lumatem', 8, 3600, '2018-10-22'),
(3, '364013', 'user', 'lumatem', 3, 1350, '2018-10-24');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE IF NOT EXISTS `suppliers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `date_added` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `date_added`) VALUES
(1, 'emzor', '28/Oct/2018'),
(2, 'juhel', '28/Oct/2018');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE IF NOT EXISTS `transactions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `supplier` varchar(40) DEFAULT NULL,
  `invoice` int(11) DEFAULT NULL,
  `product` varchar(40) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `amount_paid` int(11) DEFAULT NULL,
  `balance` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `date_paid` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `supplier`, `invoice`, `product`, `quantity`, `amount_paid`, `balance`, `price`, `date_paid`) VALUES
(6, 'emzor', 232693, 'vasoprin', 80, 180, 20, 200, '28/Oct/2018'),
(7, 'emzor', 950086, 'sudrex', 23, 230, 0, 230, '28/Oct/2018'),
(8, 'emzor', 116563, 'vasoprin', 20, 200, 0, 200, '28/Oct/2018'),
(9, 'juhel', 723822, 'sudrex', 50, 50, 450, 500, '28/Oct/2018'),
(10, 'juhel', 723822, 'sudrex', 50, 5, 445, 500, '28/Oct/2018'),
(11, 'juhel', 723822, 'sudrex', 50, 1, 444, 500, '28/Oct/2018'),
(12, 'juhel', 723822, 'sudrex', 50, 4, 440, 500, '28/Oct/2018');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(40) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `town` varchar(20) DEFAULT NULL,
  `village` varchar(20) DEFAULT NULL,
  `house_address` varchar(100) DEFAULT NULL,
  `date_of_birth` varchar(10) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `position` varchar(20) DEFAULT NULL,
  `date_added` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `password`, `state`, `town`, `village`, `house_address`, `date_of_birth`, `phone`, `position`, `date_added`) VALUES
(1, 'user', 'user', 'cGFzcw==', 'anambra', 'awka', 'ifite', 'ifite', '1111-11-11', '0909090909', 'cashier', '21/10/2018'),
(2, 'bossy', 'bossy', 'Ym9zc3k=', 'anambra', 'awka', 'ifite', 'ifite', '1990-11-11', '12345678909', 'admin', '22/10/2018');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
