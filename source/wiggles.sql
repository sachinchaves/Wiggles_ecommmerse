-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 06, 2021 at 11:23 AM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `wiggles`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` mediumtext NOT NULL,
  `city` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `postalCode` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `firstName`, `lastName`, `phone`, `username`, `password`, `address`, `city`, `province`, `postalCode`, `country`) VALUES
(1, 'Sachin', 'mumbai', 9769827613, 'sachin.c', '$2y$10$vck0JLiFDSjP7ACEBxHST.0JY2dNlgLVwZ1uIIMvetFU6MwizFYZ2', 'AJHSjahgsjHGASJagsjhAJSHGJHAJSGDJAGSDJHGADGSA\r\nadsadasd', 'mumbai', 'Maharashtra', '400055', 'India'),
(2, 'sacjhin', 'mumbai', 9898989898, 'sachin.test1234@endurance.com', '$2y$10$oPtZHYCYnX57R6BIou1N..Z7/JoPfe7KiKKX9Yyp5ESjt6RIoypya', 'asdsad asdasd asdasdasd asdasdasd\r\nasdasdasd', 'mumbai', 'Maharashtra', '400055', 'India'),
(3, 'SAchin', 'Chaves', 9898989898, 'sachinchaves', '$2y$10$ZFzx6Md/mJhHRkd.ZtEsJuVqpK15Cmt1tpwoy6p/A639VVcKlSwEC', 'asdsad asdasd asdasdasd asdasdasd\r\nasdasdasd', '1234', '1234', '400055', 'Canada');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `message` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customerId` bigint(20) NOT NULL,
  `status` varchar(255) NOT NULL,
  `subtotal` float NOT NULL,
  `tax` float NOT NULL,
  `total` float NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` longtext NOT NULL,
  `city` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `postalCode` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `orderCreatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customerId`, `status`, `subtotal`, `tax`, `total`, `firstName`, `lastName`, `phone`, `email`, `address`, `city`, `province`, `postalCode`, `country`, `orderCreatedAt`) VALUES
(1, 13, 'completed', 22.09, 11.045, 33.135, 'Sachin', 'mumbai', 9769827613, 'sachinchaves3', 'AJHSjahgsjHGASJagsjhAJSHGJHAJSGDJAGSDJHGADGSA\r\nadsadasd', 'mumbai', 'Maharashtra', '400055', 'India', '2021-05-30 23:31:50'),
(4, 13, 'completed', 0, 0, 0, 'Sachin', 'mumbai', 9769827613, 'sachinchaves3', 'AJHSjahgsjHGASJagsjhAJSHGJHAJSGDJAGSDJHGADGSA\r\nadsadasd', 'mumbai', 'Maharashtra', '400055', 'India', '2021-05-30 23:37:36'),
(5, 13, 'completed', 0, 0, 0, 'Sachin', 'mumbai', 9769827613, 'sachinchaves3', 'AJHSjahgsjHGASJagsjhAJSHGJHAJSGDJAGSDJHGADGSA\r\nadsadasd', 'mumbai', 'Maharashtra', '400055', 'India', '2021-05-30 23:38:12'),
(6, 13, 'completed', 0, 0, 0, 'Sachin', 'mumbai', 9769827613, 'sachinchaves3', 'AJHSjahgsjHGASJagsjhAJSHGJHAJSGDJAGSDJHGADGSA\r\nadsadasd', 'mumbai', 'Maharashtra', '400055', 'India', '2021-05-30 23:43:34'),
(7, 1, 'completed', 22.09, 11.045, 33.135, 'Sachin', 'mumbai', 9769827613, 'sachin.c', 'AJHSjahgsjHGASJagsjhAJSHGJHAJSGDJAGSDJHGADGSA\r\nadsadasd', 'mumbai', 'Maharashtra', '400055', 'India', '2021-05-30 23:46:20'),
(8, 1, 'completed', 22.09, 11.045, 33.135, 'Sachin', 'mumbai', 9769827613, 'sachin.c', 'AJHSjahgsjHGASJagsjhAJSHGJHAJSGDJAGSDJHGADGSA\r\nadsadasd', 'mumbai', 'Maharashtra', '400055', 'India', '2021-05-30 23:51:32'),
(9, 2, 'Placed', 22.09, 11.045, 33.135, 'sacjhin', 'mumbai', 9898989898, 'sachin.test1234@endurance.com', 'asdsad asdasd asdasdasd asdasdasd\r\nasdasdasd', 'mumbai', 'Maharashtra', '400055', 'India', '2021-06-03 21:14:59'),
(10, 3, 'pending', 22.09, 11.045, 33.135, 'SAchin', 'Chaves', 9898989898, 'sachinchaves', 'asdsad asdasd asdasdasd asdasdasd\r\nasdasdasd', '1234', '1234', '400055', 'Canada', '2021-06-04 15:25:33'),
(11, 3, 'pending', 10.09, 5.045, 15.135, 'SAchin', 'Chaves', 9898989898, 'sachinchaves', 'asdsad asdasd asdasdasd asdasdasd\r\nasdasdasd', '1234', '1234', '400055', 'Canada', '2021-06-04 17:07:01');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `productId` bigint(20) NOT NULL,
  `orderId` int(20) NOT NULL,
  `price` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `orderItemCreatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `productId`, `orderId`, `price`, `quantity`, `orderItemCreatedAt`) VALUES
(1, 2, 1, 12, 3, '2021-05-31 06:31:50'),
(3, 1, 7, 10.09, 2, '2021-05-31 06:46:20'),
(4, 2, 8, 12, 4, '2021-05-31 06:47:56'),
(5, 2, 9, 12, 1, '2021-06-04 04:14:35'),
(6, 2, 10, 12, 1, '2021-06-04 15:25:33'),
(7, 1, 11, 10.09, 1, '2021-06-04 17:07:01');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `shortDescription` varchar(255) DEFAULT NULL,
  `description` longtext NOT NULL,
  `price` float NOT NULL,
  `featured` tinyint(4) NOT NULL,
  `topSelling` tinyint(4) NOT NULL,
  `sizeId` int(11) NOT NULL,
  `colourId` int(11) DEFAULT NULL,
  `productQuantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `shortDescription`, `description`, `price`, `featured`, `topSelling`, `sizeId`, `colourId`, `productQuantity`) VALUES
(1, 'Pineapple pattern Bandana', 'bandana1.jpg', 'Customizable Pet Bandana with snaps: 100% Cotton flannel, washable and durable. Many sizes! Pineapple pattern', 'A great accessory for any pets’ attire, our pet bandanas are handcrafted from 100% cotton flannel for a great look and long lasting durability.What sets these bandanas apart is that we use snaps as the fastener around the neck. This allows the bandana to stay on securely, but still be able to break away safely.We can accommodate almost any size dog with the following sizes:XS - Up to 15lbsS - 15 to 30lbsM - 30-50lbsL - 50 to 75lbsAdditionally we offer a 2” elastic extender that snaps onto the bandana, and can also be chained together for much larger pets. Please contact the seller for more information.', 10.09, 1, 1, 1, NULL, 20),
(2, 'Yellow Spring Flowers Bandana', 'bandana2.jpg', 'Yellow and Pink Spring Flowers | Dog Bandana | Cat Bandana | Pet Bandana | Dog Scarf | Gift for Pet Lovers | Dog Lovers', 'These traditional tie-on pet bandanas are handmade from a single layer of thin cotton flannel fabric and are made to order.\r\n\r\nSIZE GUIDE\r\nExtra Small – Neck sizes up to 10 inches\r\nSmall – Neck sizes up to 16 inches\r\nMedium – Neck sizes up to 24 inches\r\nLarge – Neck sizes up to 27 inches\r\nExtra Large – Neck sizes up to 32 inches\r\n\r\nHOW TO MEASURE\r\nWith a soft measuring tape, measure the circumference of their neck while keeping two fingers under the measuring tape to ensure a loose fit.\r\n\r\nOur bandanas are made extra deep from top to bottom to ensure a good fit on various breeds of dogs! If you find your bandana is too long for your pet, simply roll the top to your desired length before tying.\r\n\r\nCARE\r\nHand wash or machine wash cold on delicate\r\nLay flat to dry\r\nIron on cotton setting\r\n', 12, 1, 1, 1, NULL, 21),
(4, 'Daisies On Daisies | Flower | Pet Bandana', 'bandana5.jpg', 'Our Handmade pet bandanas are a great way to keep your furry friends stylish all year round.', 'Our Handmade pet bandanas are a great way to keep your furry friends stylish all year round. With a growing variety of patterns, from seasonal selections to everyday cuteness, your pup will always be stylish with a handmade bandana \r\nAll Bandanas have a coloured lining that matches the bandana! Along with the lining, all bandana has multiple spots to clip, which helps ensure a better fit for your furry friend!', 6, 1, 0, 4, NULL, 25),
(5, 'It\'s My Birthday Snap-on Reversible Dog Bandana', 'bandana6.jpg', 'It\'s My Birthday Snap-on Reversible Dog Bandana, Pet Birthday gift idea, Personalized dog bandana, Puppy accessories', 'We creates unique handmade bandanas. Each order is made just for you in Ontario, CA!', 10.79, 0, 0, 3, NULL, 10),
(6, 'Canada Day Reversible Pet Bandana', 'bandana7.jpg', 'Over the Collar - Red Maple Leaf - Red Buffalo Plaid - 100% Cotton - Dog/Cat Bandana', 'Keep your pet in style with this handmade maple leaf/buffalo plaid bandana. Designed to slip over your pet\'s collar and is reversible. Two bandanas in one! Made from 100% cotton. The pattern for each bandana will vary slightly compared to examples shown. A smaller bandana will show less pattern than a larger bandana. Collar is not included. Pet collar size should be smaller than opening for collar. If wanting more than inventory shows, please message me about availability. In the photo Kokanee is wearing an XS. She is a 4 1/2 month old Labrador Retriever weighing in at 28 lbs.', 11, 0, 0, 9, NULL, 25),
(7, 'Cute Bandana for small pets', 'bandana8.jpg', 'Cute Bandana for small pets, bandana for bunny, bandana for guinea pig, bandana for ferret', 'This Cute Pet Bandana is perfect for your small pet to look lovely on special occasions! We offer sizes for bunnies, guinea pigs and hamsters.\r\n\r\nTipi Furry Small Pet Bandanas are:\r\n* Extra comfy with their collar made of extra soft stretchy materials\r\n* Made with fabric trims from our teepees\r\n* Adjustable to your pet\r\n* Machine Washable\r\n* Super cute!', 5, 0, 0, 3, NULL, 25);

-- --------------------------------------------------------

--
-- Table structure for table `product_colours`
--

CREATE TABLE `product_colours` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `pid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_colours`
--

INSERT INTO `product_colours` (`id`, `name`, `pid`) VALUES
(1, 'white', 1),
(2, 'yellow', 2),
(3, 'yellow', 1),
(4, 'red', 3);

-- --------------------------------------------------------

--
-- Table structure for table `product_sizes`
--

CREATE TABLE `product_sizes` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `pid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_sizes`
--

INSERT INTO `product_sizes` (`id`, `name`, `pid`) VALUES
(1, 'XS', 1),
(2, 'S', 1),
(3, 'M', 1),
(4, 'L', 1),
(5, 'XL', 1),
(6, 'XS', 2),
(7, 'S', 2),
(8, 'M', 2),
(9, 'L', 2),
(10, 'XL', 2);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `customerId` int(11) NOT NULL,
  `orderId` int(11) NOT NULL,
  `paymentMode` varchar(255) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `customerId`, `orderId`, `paymentMode`, `createdAt`) VALUES
(1, 13, 10, 'Credit Card', '2021-05-30 16:21:44'),
(3, 13, 1, 'Credit Card', '2021-05-31 06:31:50'),
(4, 13, 2, 'Credit Card', '2021-05-31 06:33:37'),
(5, 13, 3, 'Credit Card', '2021-05-31 06:35:06'),
(6, 13, 4, 'Credit Card', '2021-05-31 06:37:36'),
(7, 13, 5, 'Credit Card', '2021-05-31 06:38:12'),
(8, 13, 6, 'Credit Card', '2021-05-31 06:43:34'),
(9, 1, 7, 'Credit Card', '2021-05-31 06:46:20'),
(10, 1, 8, 'Credit Card', '2021-05-31 06:51:32'),
(11, 2, 9, 'Credit Card', '2021-06-04 04:14:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'sachinchaves', '$2y$10$fB89IdJBl6xzxWsua7ZRU.Ke4PiarEZK1otWkmqJilBHsMwIHr0mC'),
(2, 'sachin.chaves1991@gmail.com', '$2y$10$efdrgXVtE5a9fBH9owSMX./0t/og38JKzR/UHsuN9GrOrDmGuSYdu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orderId` (`orderId`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sizeId` (`sizeId`),
  ADD KEY `colourId` (`colourId`);

--
-- Indexes for table `product_colours`
--
ALTER TABLE `product_colours`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_sizes`
--
ALTER TABLE `product_sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product_colours`
--
ALTER TABLE `product_colours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product_sizes`
--
ALTER TABLE `product_sizes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`orderId`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`colourId`) REFERENCES `product_colours` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`sizeId`) REFERENCES `product_sizes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
