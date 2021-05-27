-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 27, 2021 at 05:49 PM
-- Server version: 5.6.41-84.1
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ajpatski_wnm608`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(13) NOT NULL,
  `title` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `skate_size` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `size` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(9,2) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `image_main` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `image_thumb` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `image_other` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `color`, `skate_size`, `size`, `price`, `date_create`, `date_modify`, `image_main`, `image_thumb`, `image_other`, `description`, `category`) VALUES
(1, 'Bont Prostar Roller Skates', 'black,purple,pink,teal', '3,4,5,6,7,8,9,10,11,12', '', 189.00, '2021-04-21 18:10:34', '2021-04-21 18:10:34', 'bontproblack.png', 'bontproblack_m.jpg', 'bontpropink.png,bontpropurple.png,bontproteal.png', 'The Bont Prostar Roller Skate Boot is a boot designed to be light, responsive and heat moldable. A boot designed for you. \r\n\r\nThe thermoplastic in the heel allows you to mold your boot with a hairdryer to obtain a custom fit in under 10 minutes. This is especially good for skaters with skinny or wide ankles. \r\n\r\nThe boot is made with suede and features replaceable rubber bumper toe protection, an adjustable velcro top strap, and a rear heel loop to put your laces through.\r\n\r\nThis package comes mounted with the Prodigy plate and Glide wheels and bearings. ', 'Skates'),
(2, 'Bont Parkstar Roller Skates', 'pink,teal', '3,4,5,6,7,8,9,10,11,12', '', 289.00, '2021-04-21 18:10:34', '2021-04-21 18:10:34', 'bontparkpink.png', 'bontparkpink_m.jpg', 'bontparkteal.png', 'The ParkStar Roller Skate Package combines Style, Performance, and Comfort all in one package at an affordable price.\r\n\r\nThe Bont ParkStar Roller Skate Park package takes the best of Bont innovation and turns it into a roller skate designed for Park Skating, Bowl Skating, Recreational Skating, and Street Skating.\r\n\r\nWith decades of manufacturing experience, the Bont ParkStar boot maintains our high standard of quality from start to finish. For example, did you know, our boots are made by hand using lasts that have been perfected since 1975? Additionally, we add anti-stretch material to our skate boots, ensuring your roller skate boots last longer. We even go the extra step to design our boots with an Anatomical Forefoot and Heel Shape to provide you with the best stability and comfort. Suitable for Indoor or Outdoor skating, these suede high ankle boots are ready for your next adventure!\r\n\r\nThis package comes with the Tracer Derby plate and Glide wheels.', 'Skates'),
(3, 'Riedell Solaris Pro Roller Skates', 'black', '3,4,5,6,7,8,9,10,11,12', '', 699.00, '2021-04-21 18:10:34', '2021-04-21 18:10:34', 'solaris.png', 'solaris_m.jpg', '', 'If you’re searching for the best skating equipment on the market, look no further than the Solaris Pro. This peerless roller skate includes our signature Solaris boot, a revolutionary design that maximizes comfort and performance with its Dynamic Response Outsole system, ContourFit last with modern toe box shape, and innovative heel slip-preventing V-Lock strap. Where the Solaris Pro sets itself apart lies in its components. The skate features the lightweight, high performance PowerDyne Reactor Pro Series aluminum plate that offers stability at speed, and superior push and acceleration at start up. Radar Halo wheels installed with smooth-rolling KwiK Zenith bearings make world-class edgework achievable, while PowerDyne Jupiter toe stops provide stability and predictable bite needed for fast stops, quick starts and delicate balance.', 'Skates'),
(4, 'Riedell Dart Ombré Roller Skates', 'green,red,pink', '3,4,5,6,7,8,9,10,11,12', '', 125.00, '2021-04-21 18:10:34', '2021-04-21 18:10:34', 'dartgreen.png', 'dartgreen_m.jpg', 'dartred.png,dartpink.png', 'All the colors please! The Riedell Dart Ombré just got a little more colorful. The boot features a unique fade pattern that is now available in new purple-green,  joining our other popular colorways neon green-black, black-red, and purple-pink, . The Ombré comes with a die-cast aluminum plate and color matching Dart wheels. With the Dart Ombré you don’t have to settle for just one color.', 'Skates'),
(5, 'Antik Jet Carbon Performance Skates', 'black', '3,4,5,6,7,8,9,10,11,12', '', 699.00, '2021-04-21 18:10:34', '2021-04-21 18:10:34', 'antikjet.png', 'antikjet_m.jpg', '', 'The Antik Jet Carbon Set is an ultralight performance derby skate package for the most dedicated derby athletes. When it comes to your passions, make no compromises. Set comes fully assembled and ready to hit the track with PowerDyne Arius Platinum plates, Radar Halo wheels, Moto Deluxe bearings, and Gumball Original toe stops.', 'Skates'),
(6, 'Antik AR2 Derby Skates', 'black', '3,4,5,6,7,8,9,10,11,12', '', 699.00, '2021-04-21 18:10:34', '2021-04-21 18:10:34', 'antikar2.png', 'antikar2_m.jpg', '', 'The Antik AR2 is our newest high top boot blending high performance and classic Antik style. Designed as a \"dual sport\" boot, the AR2 is superb for both Park and Derby skating. Featuring rich full grain leather and a new microfiber liner, the AR2 is as comfortable as it is stylish. The AR2 Derby Set is ready to hit the track out of the box. It comes equipped with the PowerDyne Reactor Pro plates, Radar Halo wheels, Moto Deluxe bearings, and Gumball Original toe stops.', 'Skates'),
(7, 'Moxi Super Six Pack Pads', 'multi', '', 'JR,XS,S/M,L/XL,XT', 54.95, '2021-04-21 18:10:34', '2021-04-21 18:10:34', 'moxipads.jpeg', 'moxipads_m.jpg', 'moxiknee.jpeg,moxielbow.jpeg,moxiwrist.jpeg', 'Our Pad Packs are the industry leader for safety and protection. Design and craftsmanship proven in our Pro Series is used to optimize the fit, comfort, and durability of this pad set. 187 Killer Pads® is the brand trusted by the top skaters in the world.', 'Gear'),
(8, '187 Killer Pads Six Pack Pad Set', 'black', '', 'JR,XS,S/M,L/XL', 49.95, '2021-04-21 18:10:34', '2021-04-21 18:10:34', '187pads.jpeg', '187pads_m.jpg', '187knee.jpeg,187elbow.jpeg,187wrist.jpeg', 'Our Pad Packs are the industry leader for safety and protection. Design and craftsmanship proven in our Pro Series is used to optimize the fit, comfort, and durability of this pad set. 187 Killer Pads® is the brand trusted by the top skaters in the world.', 'Gear'),
(9, 'S1 Lifer Helmet', 'black,gold,red,blue', '', 'XS,S,M,L,XL,XXL,XXXL', 68.00, '2021-04-21 18:10:34', '2021-04-21 18:10:34', 's1black.jpg', 's1black_m.jpg', 's1gold.jpg,s1red.jpg,s1blue.jpg', 'The S1 Lifer Helmet is one of the best fitting and safest helmets for Skateboarding, Longboarding, BMX, Scootering, Roller Skating and Roller Derby. The Lifer Helmet uses a specially formulated EPS Fusion Foam which allows it to protect your head from multiple low force impacts as well as high impacts. The Lifer Helmet is a certified \"multi-impact\" helmet and is up to 5x more protective than the soft foam non-certified helmets.  The Lifer helmet is a break through design combining the added safety of a CPSC and ASTM certified helmet with the comfort and fit of a non-certified helmet. The S1 Lifer Helmet is the best fitting High impact and Multiple Impact helmet on the market.', 'Gear'),
(10, 'PowerDyne Y3 Skate Tool', '', '', '', 15.00, '2021-04-21 18:10:34', '2021-04-21 18:10:34', 'tool.jpg', 'tool_m.jpg', '', 'The PowerDyne Y3 Skate Tool features three tools in one! This multipurpose skate tool is designed with a 1/2” socket for axle nuts, a 9/16” socket for kingpin locknuts, and finally a 15/16” open wrench for toe stop locknuts. The Y3 is a great tool for most plates, and one of, if not the best tools for roller skate plates that uses a washer and nut system for toe stops (most nylon plates and PowerDyne Thrust plates).', 'Tools'),
(11, 'Emerald City Moon Boot Roller Skates', 'emerald', '3,4,5,6,7,8,9,10,11,12', '', 250.00, '2021-05-27 13:42:37', '2021-05-27 13:42:37', 'emeraldmoon.jpg', 'emeraldmoon_m.jpg', '', 'They say geniuses pick green. Hard to disagree when you\'re checking out Emerald City. This skate has taste, and deserves a skater who recognizes a fine thing when they see it. With Emerald City on, mind and body finally align. There\'s nothing more attractive than that.', 'Skates'),
(12, 'S1 Lifer Retro Helmet', 'teal,glitter', '', 's,m,l,xl,xxl', 78.00, '2021-05-27 13:52:37', '2021-05-27 13:52:37', 's1retro.jpg', 's1retro_m.jpg', 's1retroglitter.jpg', 'The S1 Retro Lifer has the same inner shell as our standard Lifer Helmet with a retro moto helmet look. The S1 Retro Lifer Helmet is one of the best fitting and safest helmets for Skateboarding, Longboarding, BMX, Scootering, Roller Skating and Roller Derby. The Retro Lifer Helmet uses a specially formulated EPS Fusion Foam which allows it to protect your head from multiple low force impacts as well as high impacts. The Retro Lifer Helmet is a certified \"multi-impact\" helmet and is up to 5x more protective than the soft foam non-certified helmets. The Retro Lifer Helmet is a break through design combining the added safety of a CPSC and ASTM certified helmet with the comfort and fit of a non-certified helmet. The S1 Retro Lifer Helmet is the best fitting High impact and Multiple Impact helmet on the market.', 'Gear');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
