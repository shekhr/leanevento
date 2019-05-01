-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 01, 2019 at 12:56 AM
-- Server version: 5.6.43
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chaudhar_leanevento`
--

-- --------------------------------------------------------

--
-- Table structure for table `Agent`
--

CREATE TABLE `Agent` (
  `id` int(6) NOT NULL,
  `firstname` varchar(60) DEFAULT NULL,
  `surname` varchar(60) DEFAULT NULL,
  `registration_number` varchar(60) DEFAULT '656',
  `address` varchar(100) DEFAULT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `postal_code` varchar(50) NOT NULL,
  `phone_num` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `logo` blob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Agent`
--

INSERT INTO `Agent` (`id`, `firstname`, `surname`, `registration_number`, `address`, `city`, `state`, `postal_code`, `phone_num`, `username`, `password`, `logo`) VALUES
(1, 'Shekhar', 'Chaudhary', NULL, '800 Greek Row', 'Arlington', 'Texas', '76013', '2147483647', 'shekhar3790@gmail.com', 'shekhar@123', NULL),
(2, 'sdfsd', 'sdfsdf', NULL, 'asdfds', 'asdfsdf', 'Tx', '76013', '9087654321', 'sdfds@gmail', 'shekhar@123', NULL),
(3, 'sdfsd', 'sdfsdf', NULL, 'asdfds', 'asdfsdf', 'Tx', '76013', '9087654321', 'sdfds@gmail', 'shekhar@123', NULL),
(4, 'sdfsd', 'sdfsdf', NULL, 'asdfds', 'asdfsdf', 'Tx', '76013', '9087654321', 'sdfds@gmail', 'shekhar@123', NULL),
(5, 'sdfsd', 'sdfsdf', NULL, 'asdfds', 'asdfsdf', 'Tx', '76013', '9087654321', 'sdfds@gmail', 'shekhar@123', NULL),
(6, 'Manu', 'Srivastava', NULL, '300 West 1st Street #191503', 'Arlington', 'TX', '76019', '6824146225', 'shekharcandroid@gmail.com', 'shekhar@123', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `Business`
--

CREATE TABLE `Business` (
  `id` int(6) NOT NULL,
  `firstname` varchar(60) DEFAULT NULL,
  `surname` varchar(60) DEFAULT NULL,
  `registration_number` varchar(60) DEFAULT '655',
  `address` varchar(100) DEFAULT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `postal_code` varchar(50) NOT NULL,
  `phone_num` varchar(20) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `logo` blob,
  `business_type` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Business`
--

INSERT INTO `Business` (`id`, `firstname`, `surname`, `registration_number`, `address`, `city`, `state`, `postal_code`, `phone_num`, `username`, `password`, `logo`, `business_type`) VALUES
(1, 'Shekhar', 'Chaudhary', NULL, '800 Greek Row,', 'Arlinton', 'TX', '76013', '2147483647', 'shekhar3790@gmail.com', 'shekhar@123', NULL, 2),
(2, 'Shekhar', 'Chaudhary', NULL, '800 Greek Row,', 'Arlinton', 'TX', '76013', '2147483647', 'shekhar3790@gmail.com', 'shekhar@123', NULL, 2),
(3, 'Shekhar', 'Chaudhary', NULL, '800 Greek Row, Arlington', 'Arlington', 'TX', '76013', '6824146225', 'shekhar_chaudhary@outlook.com', 'shekhar@123', NULL, 2),
(4, 'Shekhar', 'Chaudhary', NULL, '800 Greek Row, Arlington', 'Arlington', 'TX', '76013', '6824146225', 'shekhar_chaudhary@outlook.com', 'shekhar9876', NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `mail` varchar(100) DEFAULT NULL,
  `topic` varchar(100) DEFAULT NULL,
  `message` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `firstname`, `lastname`, `mail`, `topic`, `message`) VALUES
(1, 'sdf', 'sdf', 'sdf', 'sdf', 'sdf'),
(2, 'sdfsd', 'sdfsdf', 'sdfs', 'sdf', 'sdfsdfsdf'),
(3, 'sdfsdf', 'sdfsdf', 'sdfsdf', 'sdfsdf', 'sdfsdf'),
(4, 'sdfsdf', 'sdfsdf', 'sdfsdf', 'sdfsdf', 'sdfsdf'),
(5, 'sdf', 'sdf', 'sdf', 'sfd', 'sdf'),
(6, 'asdf', 'asdf', 'asdf', 'asdf', 'asdf'),
(7, 'sdf', 'sdf', 'sdf', 'sdf', 'sdf'),
(8, 'sdf', 'sdf', 'sdf', 'sdf', 'sdf'),
(9, 'sdfs', 'sdfsdf', 'sdfds@gmail.com', 'sdf', 'sfd'),
(10, 'Noopur', 'Brother', 'noopur@gmail.com', 'Shekhar', 'Hello Brother');

-- --------------------------------------------------------

--
-- Table structure for table `Events`
--

CREATE TABLE `Events` (
  `id` int(6) NOT NULL,
  `event_name` varchar(60) DEFAULT NULL,
  `place` varchar(60) DEFAULT NULL,
  `date` varchar(60) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `responsible` varchar(50) DEFAULT NULL,
  `time` varchar(50) DEFAULT NULL,
  `value` varchar(50) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  `image` varchar(50) DEFAULT 'images/minibaner1.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Events`
--

INSERT INTO `Events` (`id`, `event_name`, `place`, `date`, `description`, `responsible`, `time`, `value`, `price`, `image`) VALUES
(1, 'No Perdamos La Fe', NULL, NULL, 'LEAN est&aacute; dedicada a fomentar valores e instaurarlos como principios, trabajar en formaci&oacute;n c&iacute;vica, promover y defender las libertades individuales y los derechos humanos en Venezuela, sensibilizar a la gente sobre la importancia de conocer, respetar y practicar los principios contenidos en la Declaraci&oacute;n Universal de Derechos Humanos, asistir a v&iacute;ctimas de actos violentos y persecuci&oacute;n, favorecer la adquisici&oacute;n de conocimiento a trav&eacute;s de la lectura y trabajar incansablemente en la ayuda humanitaria como gesto de solidaridad y buena voluntad.', '', '', '', '$300', 'images/minibaner1.jpg'),
(2, 'La Importancia De Los Alimentos', NULL, NULL, 'LEAN est&aacute; dedicada a fomentar valores e instaurarlos como principios, trabajar en formaci&oacute;n c&iacute;vica, promover y defender las libertades individuales y los derechos humanos en Venezuela, sensibilizar a la gente sobre la importancia de conocer, respetar y practicar los principios contenidos en la Declaraci&oacute;n Universal de Derechos Humanos, asistir a v&iacute;ctimas de actos violentos y persecuci&oacute;n, favorecer la adquisici&oacute;n de conocimiento a trav&eacute;s de la lectura y trabajar incansablemente en la ayuda humanitaria como gesto de solidaridad y buena voluntad.', '', '', '', '$300', 'images/minibaner2.jpg'),
(3, 'Educando Para El Futuro', NULL, NULL, 'LEAN est&aacute; dedicada a fomentar valores e instaurarlos como principios, trabajar en formaci&oacute;n c&iacute;vica, promover y defender las libertades individuales y los derechos humanos en Venezuela, sensibilizar a la gente sobre la importancia de conocer, respetar y practicar los principios contenidos en la Declaraci&oacute;n Universal de Derechos Humanos, asistir a v&iacute;ctimas de actos violentos y persecuci&oacute;n, favorecer la adquisici&oacute;n de conocimiento a trav&eacute;s de la lectura y trabajar incansablemente en la ayuda humanitaria como gesto de solidaridad y buena voluntad.', '', '', '', 'Entrade Gratis', 'images/minibaner3.jpg'),
(4, 'Por Una Sonrisa De Vida', NULL, NULL, 'LEAN est&aacute; dedicada a fomentar valores e instaurarlos como principios, trabajar en formaci&oacute;n c&iacute;vica, promover y defender las libertades individuales y los derechos humanos en Venezuela, sensibilizar a la gente sobre la importancia de conocer, respetar y practicar los principios contenidos en la Declaraci&oacute;n Universal de Derechos Humanos, asistir a v&iacute;ctimas de actos violentos y persecuci&oacute;n, favorecer la adquisici&oacute;n de conocimiento a trav&eacute;s de la lectura y trabajar incansablemente en la ayuda humanitaria como gesto de solidaridad y buena voluntad.', '', '', '', '$300', 'images/minibaner4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `EventSelection`
--

CREATE TABLE `EventSelection` (
  `id` int(6) NOT NULL,
  `event_name` varchar(100) DEFAULT NULL,
  `commission` int(6) DEFAULT NULL,
  `responsible` varchar(60) DEFAULT NULL,
  `place` varchar(100) DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL,
  `assistance` varchar(100) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `time` varchar(60) DEFAULT NULL,
  `image` varchar(200) DEFAULT 'images/minibaner1.jpg',
  `price` varchar(40) DEFAULT NULL,
  `value` int(40) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `EventSelection`
--

INSERT INTO `EventSelection` (`id`, `event_name`, `commission`, `responsible`, `place`, `date`, `assistance`, `username`, `time`, `image`, `price`, `value`, `description`, `phone`) VALUES
(3, 'Educando Para El Futuro', 1, 'Mithil Patel', 'Arlington', '11/19/19', NULL, 'mithil@gmail.com', '11:11', 'images/minibaner3.jpg', '$300', 1, 'LEAN est&aacute; dedicada a fomentar valores e instaurarlos como principios, trabajar en formaci&oacute;n c&iacute;vica, promover y defender las libertades individuales y los derechos humanos en Venezuela, sensibilizar a la gente sobre la importancia de conocer, respetar y practicar los principios contenidos en la Declaraci&oacute;n Universal de Derechos Humanos, asistir a v&iacute;ctimas de actos violentos y persecuci&oacute;n, favorecer la adquisici&oacute;n de conocimiento a trav&eacute;s de la lectura y trabajar incansablemente en la ayuda humanitaria como gesto de solidaridad y buena voluntad.', '8105467657'),
(5, 'No Perdamos La Fe', 1, 'Utkarsh Patel', 'Arlington', '13/04/19', 'true', 'utkarshPatel@gmail.com', '12:00 pm', 'images/minibaner1.jpg', '$300', 2, 'LEAN est&aacute; dedicada a fomentar valores e instaurarlos como principios, trabajar en formaci&oacute;n c&iacute;vica, promover y defender las libertades individuales y los derechos humanos en Venezuela, sensibilizar a la gente sobre la importancia de conocer, respetar y practicar los principios contenidos en la Declaraci&oacute;n Universal de Derechos Humanos, asistir a v&iacute;ctimas de actos violentos y persecuci&oacute;n, favorecer la adquisici&oacute;n de conocimiento a trav&eacute;s de la lectura y trabajar incansablemente en la ayuda humanitaria como gesto de solidaridad y buena voluntad.', '682323432'),
(6, 'La Importancia De Los Alimentos', 1, 'Faizy Shaikh', 'Arlington', '13/04/19', NULL, 'faizysheikh@gmail.com', '12:00 pm', 'images/minibaner2.jpg', '$300', 2, 'LEAN est&aacute; dedicada a fomentar valores e instaurarlos como principios, trabajar en formaci&oacute;n c&iacute;vica, promover y defender las libertades individuales y los derechos humanos en Venezuela, sensibilizar a la gente sobre la importancia de conocer, respetar y practicar los principios contenidos en la Declaraci&oacute;n Universal de Derechos Humanos, asistir a v&iacute;ctimas de actos violentos y persecuci&oacute;n, favorecer la adquisici&oacute;n de conocimiento a trav&eacute;s de la lectura y trabajar incansablemente en la ayuda humanitaria como gesto de solidaridad y buena voluntad.', '7656542312'),
(7, 'Educando Para El Futuro', 1, 'Tarang Patel', 'Arlington', '14/03/19', NULL, 'tarangkaneria@gmail.com', '12:00 pm', 'images/minibaner3.jpg', 'Entrade Gratis', 2, 'LEAN est&aacute; dedicada a fomentar valores e instaurarlos como principios, trabajar en formaci&oacute;n c&iacute;vica, promover y defender las libertades individuales y los derechos humanos en Venezuela, sensibilizar a la gente sobre la importancia de conocer, respetar y practicar los principios contenidos en la Declaraci&oacute;n Universal de Derechos Humanos, asistir a v&iacute;ctimas de actos violentos y persecuci&oacute;n, favorecer la adquisici&oacute;n de conocimiento a trav&eacute;s de la lectura y trabajar incansablemente en la ayuda humanitaria como gesto de solidaridad y buena voluntad.', '8105467657'),
(8, 'Por Una Sonrisa De Vida', 2, 'Roopans', 'Dallas', '13/04/19', NULL, 'roopansh@gmail.com', '12:00 pm', 'images/minibaner4.jpg', '$300', 2, 'LEAN est&aacute; dedicada a fomentar valores e instaurarlos como principios, trabajar en formaci&oacute;n c&iacute;vica, promover y defender las libertades individuales y los derechos humanos en Venezuela, sensibilizar a la gente sobre la importancia de conocer, respetar y practicar los principios contenidos en la Declaraci&oacute;n Universal de Derechos Humanos, asistir a v&iacute;ctimas de actos violentos y persecuci&oacute;n, favorecer la adquisici&oacute;n de conocimiento a trav&eacute;s de la lectura y trabajar incansablemente en la ayuda humanitaria como gesto de solidaridad y buena voluntad.', '9877895645');

-- --------------------------------------------------------

--
-- Table structure for table `Individual`
--

CREATE TABLE `Individual` (
  `id` int(6) NOT NULL,
  `firstname` varchar(60) DEFAULT NULL,
  `surname` varchar(60) DEFAULT NULL,
  `registration_number` varchar(60) DEFAULT '657',
  `address` varchar(100) DEFAULT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `postal_code` varchar(50) NOT NULL,
  `phone_num` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `photo` blob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Individual`
--

INSERT INTO `Individual` (`id`, `firstname`, `surname`, `registration_number`, `address`, `city`, `state`, `postal_code`, `phone_num`, `username`, `password`, `photo`) VALUES
(1, 'sdfsdf', 'sdfsdf', NULL, 'sdfsdfdsf', 'sdfsdfsdfs', 'dsfsdf', 'sdfsdfsd', '2147483647', 'sdfd', 'shekhar@123', NULL),
(2, 'sdfsdf', 'sdfsdf', NULL, 'sdfsdfdsf', 'sdfsdfsdfs', 'dsfsdf', 'sdfsdfsd', '8989898989', 'sdfd', 'shekhar@123', NULL),
(3, 'sdfsd', 'sdfsdf', NULL, 'asdfds', 'asdfsdf', 'Tx', '76013', '9087654321', 'sdfds@gmail', 'shekhar@123', NULL),
(4, 'Vijay', 'Kant', NULL, '800 Greek Row, Arlington', 'Arlington', 'TX', '76013', '6824146224', 'vijaykant@gmail.com', 'shekhar@123', NULL),
(5, 'sdfsd', 'sdfsdf', NULL, 'asdfds', 'asdfsdf', 'Tx', '76013', '9087654321', 'sdfds@gmail', 'shekhar@123', NULL),
(6, 'vijay', 'kant', NULL, 'trinity house', 'Arlington', 'TX', '76013', '8573337688', 'vijay001', 'vijay001', NULL),
(7, 'vijay', 'kant', NULL, 'arbor', 'Boston', 'MA', '20201', '8573336959', 'vijaykant009', 'kantvijay', NULL),
(8, 'Noopur', 'Kharache', NULL, '800 Greek Row', 'Arlington', 'TX', '76019', '6824146225', 'shekharcandroid@gmail.com', 'shekhar@123', NULL),
(9, 'Noopur', 'Kharache', NULL, '800 Greek Row', 'Arlington', 'TX', '76019', '6824146225', 'google@gmail.com', 'shekhar@123', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `Login`
--

CREATE TABLE `Login` (
  `username` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Login`
--

INSERT INTO `Login` (`username`, `password`, `role`) VALUES
('google@gmail.com', 'shekhar@123', 'individual'),
('sdfds@gmail', 'shekhar@123', 'individual'),
('shekhar', 'shekhar', 'business'),
('shekhar3790@gmail.com', 'shekhar123', 'agent'),
('shekharcandroid@gmail.com', 'shekhar@123', 'agent'),
('shekhar_chaudhary@outlook.com', 'shekhar@123', 'business'),
('vijay001', 'vijay001', 'individual'),
('vijaykant009', 'kantvijay', 'individual'),
('vijaykant@gmail.com', 'shekhar@123', 'individual');

-- --------------------------------------------------------

--
-- Table structure for table `Subscribers`
--

CREATE TABLE `Subscribers` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subscribed` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Subscribers`
--

INSERT INTO `Subscribers` (`id`, `email`, `subscribed`) VALUES
(6, 'shekhar3790@gmail.com', 1),
(7, 'asdfds', 1),
(8, 'shekhar.chaudhary@mavs.uta.edu', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Agent`
--
ALTER TABLE `Agent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Business`
--
ALTER TABLE `Business`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Events`
--
ALTER TABLE `Events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `EventSelection`
--
ALTER TABLE `EventSelection`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Individual`
--
ALTER TABLE `Individual`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Login`
--
ALTER TABLE `Login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `Subscribers`
--
ALTER TABLE `Subscribers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Agent`
--
ALTER TABLE `Agent`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `Business`
--
ALTER TABLE `Business`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `Events`
--
ALTER TABLE `Events`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `EventSelection`
--
ALTER TABLE `EventSelection`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `Individual`
--
ALTER TABLE `Individual`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `Subscribers`
--
ALTER TABLE `Subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
